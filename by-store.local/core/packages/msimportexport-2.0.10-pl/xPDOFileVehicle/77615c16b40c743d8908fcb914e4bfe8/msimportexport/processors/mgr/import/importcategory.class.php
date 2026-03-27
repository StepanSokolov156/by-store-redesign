<?php
require_once(dirname(__FILE__) . '/importresource.class.php');

class msImportExportImportCategory extends msImportExportImportResource
{

    protected $classKey = 'msCategory';

    public function initialize()
    {
        $ok = parent::initialize();
        $this->templateDefault = $this->modx->getOption('ms2_template_category_default', null, 0, true);
        return $ok;
    }

}

return 'msImportExportImportCategory';