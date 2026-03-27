<?php
require_once(dirname(__FILE__) . '/import.class.php');

class msImportExportImportResource extends msImportExportImport
{


    /** @var  int $templateDefault */
    protected $templateDefault;
    protected $classKey = 'modDocument';

    public function initialize()
    {
        $this->stats = array_merge($this->stats, array('duplication' => 0, 'created' => 0, 'updated' => 0));
        $ok = parent::initialize();
        $this->templateDefault = $this->modx->getOption('default_template', null, 0, true);
        return $ok;
    }

    /**
     * @param array $data
     * @return array
     */
    public function prepareData(array $data)
    {
        $result = array(
            'resource' => array(),
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

            switch ($field) {
                case 'gallery':
                    $val = $this->tools->explodeAndClean($val, $this->getSetting('gallery_delimiter', '|'));
                    $result['gallery'] = array_merge($result['gallery'], $val);
                    break;
                case 'parent':
                    $result['resource'][$field] = $val;
                    break;
                default:
                    if (!empty($this->textFormatFields) && in_array($field, $this->textFormatFields)) {
                        $method = $this->getSetting('text_format_method', 'nl2br');
                        $val = $this->tools->formatText($val, $method);
                    }
                    $result['resource'][$field] = $val;
            }
        }

        $settings = $this->getSettings();
        $this->prepareParent($result['resource'], $settings);
        $this->checkExistenceResource($result['resource'], $checkingField, $checkingValue, $settings);
        $this->setDefaultData($result['resource']);

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

        if (empty($data['resource']['parent'])) {
            if (!$this->getSetting('skip_empty_parent', 1)) {
                $err = $this->modx->lexicon('msimportexport_import_err_parent_ns', array('info' => print_r($data, 1)));
                $this->tools->log($err);
            }
            return;
        }

        if (empty($data['resource']['pagetitle'])) {
            $err = $this->modx->lexicon('msimportexport_import_err_pagetitle_ns', array('info' => print_r($data, 1)));
            $this->tools->log($err);
            return;
        }

        if (!$this->checkUniqueAlias($data['resource'])) {
            return;
        }

        $response = $this->fireEvent('msieOnBeforeImport', array('action' => $this->action, 'srcData' => $this->reader->getLastData(), 'data' => $data));
        if (!is_array($response)) {
            if ($response === false) {
                $this->incrementStatsItem('errors');
            }
            return;
        }

        $data = $response['data'];

        if (isset($data['resource']['keywords'])) {
            $_POST['keywords'] = $data['resource']['keywords'];
        }

        /** @var modProcessorResponse $response */
        $this->modx->error->reset();
        $response = $this->msie->runProcessor('mgr/resource/' . $this->action, $data['resource']);
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
        $this->addPhotoGalleryImage($object['id'], $data);

        $this->pushStore('ids', $object['id'], $object['id']);
    }


    /**
     * @param array $data
     * @param array $settings
     */
    public function prepareParent(array &$data, array &$settings = array())
    {
        if (isset($data['parent'])) {
            if (empty($data['parent'])) {
                $data['parent'] = 0;
            } else {
                if (isset($data['context_key'])) {
                    $settings['ctx'] = $data['context_key'];
                }
                $data['parent'] = $this->tools->getResourceParentId($data['parent'], $settings);
            }
        }
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
        $resource = null;
        $checkExistence = $this->getSetting('check_existence', 1);
        $globalCheckExistence = $this->modx->getOption('global_duplicate_uri_check', null, false);
        if ($checkExistence && $resource = $this->tools->findResource($checkingField, $checkingValue, $this->classKey, $settings, $globalCheckExistence)) {
            $this->action = 'update';
            if (!isset($data['pagetitle']) || empty($data['pagetitle'])) {
                $data['pagetitle'] = $resource->get('pagetitle');
            }

            if (!isset($data['parent'])) {
                $data['parent'] = $resource->get('parent');
            }

            if (!isset($data['alias'])) {
                $data['alias'] = $resource->get('alias');
            }
            if (!isset($data['uri'])) {
                $data['uri'] = $resource->get('uri');
            }

            if (!isset($data['context_key'])) {
                $data['context_key'] = $resource->get('context_key');
            }

            $data['id'] = $resource->get('id');
        }
        return $resource;
    }

    /**
     * @param array $data
     * @param string $prefix
     */
    public function setDefaultData(array &$data, $prefix = 'resource')
    {

        $data['tvs'] = $this->hasTvFields();

        if (empty($data['parent'])) {
            $parentDefault = $this->getSetting('parent_default', 0);
            if ($parentDefault && !$this->getSetting('skip_empty_parent', 1)) {
                $data['parent'] = $parentDefault;
            }
        }

        if ($this->action == 'create' && $this->getSetting('gallery_class', 'msProductFile') == 'msResourceFile') {
            $mediaSource = isset($data['media_source']) ? $data['media_source'] : $this->modx->getOption('ms2gallery_source_default');
            $data['properties'] = array('ms2gallery' => array('media_source' => $mediaSource));
            $data['media_source'] = $mediaSource;
        }

        if (empty($data['class_key'])) {
            $data['class_key'] = $this->classKey;
        }

        if (empty($data['content_type'])) {
            $data['content_type'] = $this->modx->getOption('default_content_type', null, 1);
        }

        if (empty($data['context_key'])) {
            $data['context_key'] = $this->getSetting('ctx', 'web');
        }

        if (!isset($data['template'])) {
            $data['template'] = $this->getSetting('template_' . $prefix . '_default', $this->templateDefault);
        }

        if (!isset($data['published'])) {
            $data['published'] = $this->getSetting('published_' . $prefix . '_default', 0);
        }

        if (!isset($data['hidemenu'])) {
            $data['hidemenu'] = $this->getSetting('hidemenu_' . $prefix . '_default', 1);
        }

        if (!isset($data['searchable'])) {
            $data['searchable'] = $this->getSetting('searchable_' . $prefix . '_default', 1);
        }
    }

    /**
     * @param array $data
     * @return array|bool
     */
    public function checkUniqueAlias(array &$data)
    {
        $checkUniqueAlias = $this->getSetting('check_unique_alias', 0);
        if ($checkUniqueAlias == 1 || $checkUniqueAlias == $this->action) {
            $alias = isset($data['alias']) ? $data['alias'] : $this->tools->createAlias($data['pagetitle']);
            if ($id = $this->tools->checkDuplicationResourceAlias($alias, $data, $this->getSettings())) {
                if ($this->getSetting('create_unique_alias', 0)) {
                    $postfix = microtime(true) * 10000;
                    if ($templateAlias = $this->getSetting('template_unique_alias', 0)) {
                        if ($templatePostfix = $this->tools->getPdoTools()->getChunk('@INLINE ' . $templateAlias, $data)) {
                            $postfix = $templatePostfix;
                        }
                    }
                    $data['alias'] = $this->tools->createAlias($data['pagetitle'], $postfix);
                } else {
                    $response = $this->fireEvent('msieOnImportNotUnique', array('action' => $this->action, 'field' => 'alias', 'duplicate' => $id, 'srcData' => $this->reader->getLastData(), 'data' => $data));
                    if (!is_array($response)) {
                        if ($response === false) {
                            $this->incrementStatsItem('errors');
                            $this->incrementStatsItem('duplication');
                            $this->pushStore('duplication', $this->getOffset(), basename($this->file), true);
                        }
                        return false;
                    }
                    $data = $response['data'];
                    unset($response);
                }
            }
        }
        return true;
    }

    /**
     * @param int $resourceId
     * @param array $data
     */
    public function addPhotoGalleryImage($resourceId = 0, array $data = array())
    {
        if (!empty($data['gallery'])) {
            $this->debug("Importing in to photo gallery: \n" . print_r($data['gallery'], 1));
            $removePhoto = $this->getSetting('gallery_remove_photo', 0);
            foreach ($data['gallery'] as $key => $file) {
                if ($removePhoto && empty($key) && !$this->hasKeyInStorage('ids', $resourceId)) {
                    $this->debug('Remove all images from photo gallery for resource ID:' . $resourceId);
                    $this->tools->removePhotoGalleryImages($resourceId, $this->getSettings());
                }
                $this->tools->addPhotoGalleryImage($resourceId, $file, $this->getSettings());
            }
        }
    }

    /**
     * @param array $data
     */
    public function afterFinish(array $data = array())
    {
        $completionAction = $this->getSetting('completion_action');
        $ids = $this->getStore('ids');
        $settings = $this->getSettings();
        $settings['class_key'] = $this->classKey;

        switch ($completionAction) {
            case 'unpublish':
                $this->tools->unpublishResources($ids, $settings);
                break;
            case 'remove':
                $this->tools->removeResources($ids, $settings);
                break;
            case 'remove_and_clear':
                $settings['emptyrecyclebin'] = 1;
                $this->tools->removeResources($ids, $settings);
                break;
        }

        parent::afterFinish(array('ids' => $ids));
    }
}

return 'msImportExportImportResource';