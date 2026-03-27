<?php
require_once(dirname(__FILE__) . '/importcategory.class.php');

class msImportExportImportProduct extends msImportExportImportCategory
{
    /** @var bool $hasMsOptionsPriceAddition */
    protected $hasMsOptionsPriceAddition;
    protected $classKey = 'msProduct';

    public function initialize()
    {
        $ok = parent::initialize();
        $this->hasMsOptionsPriceAddition = $this->tools->hasAddition('msoptionsprice');
        $this->templateDefault = $this->modx->getOption('ms2_template_product_default', null, 0, true);
        return $ok;
    }

    /**
     * @param array $data
     * @return array
     */
    public function prepareData(array $data)
    {
        $result = array(
            'product' => array(),
            'msoptionsprice' => array(),
            'gallery' => array(),
        );
        $this->action = 'create';
        $checkingValue = '';
        $checkingField = $this->getSetting('checking_field', '');

        foreach ($this->getFields() as $index => $field) {
            $val = $data[$index];
            if ($checkingField == $field) {
                $checkingValue = $val;
            }
            if ($this->isMsOptionsPriceField($field)) {
                $field = $this->prepareMsOptionsPriceField($field);
                $result['msoptionsprice'][$field] = $val;
            } else {
                switch ($field) {
                    case 'gallery':
                        $val = $this->tools->explodeAndClean($val, $this->getSetting('gallery_delimiter', '|'));
                        $result['gallery'] = array_merge($result['gallery'], $val);
                        break;
                    case 'vendor':
                        $result['product'][$field] = $this->tools->getProductVendorId($val);
                        break;
                    case 'parent':
                        $result['product'][$field] = $val;
                        break;
                    default:
                        if ($this->tools->isFieldArrayType($field)) {
                            if (!isset($result['product'][$field])) {
                                $result['product'][$field] = array();
                            }
                            $val = $this->tools->explodeAndClean($val, $this->getSetting('first_delimiter', '|'));
                            $result['product'][$field] = array_merge($result['product'][$field], $val);
                        } else {
                            if (!empty($this->textFormatFields) && in_array($field, $this->textFormatFields)) {
                                $method = $this->getSetting('text_format_method', 'nl2br');
                                $val = $this->tools->formatText($val, $method);
                            }
                        }
                        $result['product'][$field] = $val;
                }
            }
        }

        $settings = $this->getSettings();
        $this->prepareParent($result['product'], $settings);
        $this->checkExistenceResource($result['product'], $checkingField, $checkingValue, $settings);
        $this->setDefaultData($result['product'], 'product');

        return $result;
    }

    /**
     * @param array $data
     */
    public function work(array $data = array())
    {

        if (!empty($this->getSetting('skip_action')) && $this->getSetting('skip_action') == $this->action) {
            return;
        }

        if (empty($data['product']['parent'])) {
            if (!$this->getSetting('skip_empty_parent', 1)) {
                $err = $this->modx->lexicon('msimportexport_import_err_parent_ns', array('info' => print_r($data, 1)));
                $this->tools->log($err);
            }
            return;
        }

        if (empty($data['product']['pagetitle'])) {
            $err = $this->modx->lexicon('msimportexport_import_err_pagetitle_ns', array('info' => print_r($data, 1)));
            $this->tools->log($err);
            return;
        }

        if (!$this->checkUniqueAlias($data['product'])) {
            return;
        }

        if ($this->getSetting('create_article', 0) && empty($data['product']['article'])) {
            $article = microtime(true) * 10000;
            if ($templateArticle = $this->getSetting('template_article', 0)) {
                $tmp = $data['product'];
                $tmp['msie_microtime'] = $article;
                if ($templateArticle = $this->tools->getPdoTools()->getChunk('@INLINE ' . $templateArticle, $tmp)) {
                    $article = $templateArticle;
                }
                unset($tmp);
            }
            $data['product']['article'] = $article;
        }


        $response = $this->fireEvent('msieOnBeforeImport', array('action' => $this->action, 'srcData' => $this->reader->getLastData(), 'data' => $data));
        if (!is_array($response)) {
            if ($response === false) {
                $this->incrementStatsItem('errors');
            }
            return;
        }

        $data = $response['data'];

        if (isset($data['product']['keywords'])) {
            $_POST['keywords'] = $data['product']['keywords'];
        }

        /** @var modProcessorResponse $response */
        $this->modx->error->reset();
        $response = $this->msie->runProcessor('mgr/product/' . $this->action, $data['product']);
        if ($response->isError()) {
            $err = $this->modx->lexicon('msimportexport_import_err_import',
                array(
                    'action' => $this->action,
                    'message' => $response->getMessage(),
                    'info' => print_r($data, 1) . "\n" . print_r($response->getAllErrors(), 1)
                )
            );

            $this->tools->log($err);
            $this->incrementStatsItem('errors');

            if ($this->hasErrorDuplicationResource($response)) {
                $this->incrementStatsItem('duplication');
                $this->pushStore('duplication', $this->getOffset(), basename($this->file), true);
            }
            return;
        }

        $object = $response->getObject();
        $this->incrementStatsItem($this->action . 'd');
        $response = $this->fireEvent('msieOnImport', array('action' => $this->action, 'srcData' => $this->reader->getLastData(), 'data' => $data, 'object' => $object));

        if (!is_array($response)) {
            return;
        }

        $data = $response['data'];

        if (!empty($data['product']['categories'])) {
            $this->debug("Adding product to show in categories: \n" . print_r($data['product']['categories'], 1));
            $this->tools->addProductToSubCategories($object['id'], $data['product']['categories'], $object['parent'], $this->getSettings());
        }

        $this->addPhotoGalleryImage($object['id'], $data);

        if (!empty($data['msoptionsprice'])) {
            $removeAllModification = $this->getSetting('msop_remove', 0);
            $disableAllModification = $this->getSetting('msop_disable', 0);

            if ($disableAllModification && !$this->hasKeyInStorage('ids', $object['id'])) {
                $this->debug('Disable all modifications for resource ID:' . $object['id']);
                $this->tools->disableProductAllModifications($object['id']);
            }

            if ($removeAllModification && !$this->hasKeyInStorage('ids', $object['id'])) {
                $this->debug('Remove all modifications for resource ID:' . $object['id']);
                $this->tools->removeProductAllModifications($object['id']);
            }

            $this->tools->addProductModification($object['id'], $data['msoptionsprice'], $this->getSettings());
        }

        $this->pushStore('ids', $object['id'], $object['id']);
    }

    /**
     * @param array $data
     * @param $checkingField
     * @param $checkingValue
     * @param array $settings
     * @return modResource|msProduct|null
     */
    public function checkExistenceResource(array &$data, $checkingField, $checkingValue, array &$settings = array())
    {
        if ($resource = parent::checkExistenceResource($data, $checkingField, $checkingValue, $settings)) {
            if (!isset($data['article'])) {
                $data['article'] = $resource->get('article');
            }
        }
        return $resource;
    }

    /**
     * @param string $field
     * @return bool
     */
    public function isMsOptionsPriceField($field)
    {
        if ($this->hasMsOptionsPriceAddition && substr($field, 0, 5) == 'msop:') {
            return true;
        }
        return false;
    }

    /**
     * @param string $field
     * @return string
     */
    public function prepareMsOptionsPriceField($field)
    {
        return str_replace('msop:', '', $field);
    }

}

return 'msImportExportImportProduct';