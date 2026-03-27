<?php return array (
  '7d90fcc24ae0ea094e57f881011ffd2b' => 
  array (
    'criteria' => 
    array (
      'name' => 'iegallery',
    ),
    'object' => 
    array (
      'name' => 'iegallery',
      'path' => '{core_path}components/iegallery/',
      'assets_path' => '{assets_path}components/iegallery/',
    ),
  ),
  '91f37e81c390b2b8df077ee8480970d6' => 
  array (
    'criteria' => 
    array (
      'name' => 'iegallery',
    ),
    'object' => 
    array (
      'name' => 'iegallery',
      'path' => '{core_path}components/iegallery/',
      'assets_path' => '{assets_path}components/iegallery/',
    ),
  ),
  'e79886a93c2d7ab544f97a263426c509' => 
  array (
    'criteria' => 
    array (
      'key' => 'iegallery_iegalleryms2galleryexportservice_worker',
    ),
    'object' => 
    array (
      'key' => 'iegallery_iegalleryms2galleryexportservice_worker',
      'value' => 'ieGalleryMs2GalleryExportWorker',
      'xtype' => 'textfield',
      'namespace' => 'iegallery',
      'area' => 'iegallery_workers',
      'editedon' => NULL,
    ),
  ),
  '1d087dcb09dfe36b4ce64fe1dee50a7c' => 
  array (
    'criteria' => 
    array (
      'key' => 'iegallery_iegalleryms2galleryimportservice_worker',
    ),
    'object' => 
    array (
      'key' => 'iegallery_iegalleryms2galleryimportservice_worker',
      'value' => 'ieGalleryMs2GalleryImportWorker',
      'xtype' => 'textfield',
      'namespace' => 'iegallery',
      'area' => 'iegallery_workers',
      'editedon' => NULL,
    ),
  ),
  '696d744be7bc46c2e1d19152db6915d8' => 
  array (
    'criteria' => 
    array (
      'key' => 'iegallery_iegalleryms2imagesexportservice_worker',
    ),
    'object' => 
    array (
      'key' => 'iegallery_iegalleryms2imagesexportservice_worker',
      'value' => 'ieGalleryMs2ImagesExportWorker',
      'xtype' => 'textfield',
      'namespace' => 'iegallery',
      'area' => 'iegallery_workers',
      'editedon' => NULL,
    ),
  ),
  'baae4ddac813749e3b30bc5735260e9b' => 
  array (
    'criteria' => 
    array (
      'key' => 'iegallery_iegalleryms2imagesimportservice_worker',
    ),
    'object' => 
    array (
      'key' => 'iegallery_iegalleryms2imagesimportservice_worker',
      'value' => 'ieGalleryMs2ImagesImportWorker',
      'xtype' => 'textfield',
      'namespace' => 'iegallery',
      'area' => 'iegallery_workers',
      'editedon' => NULL,
    ),
  ),
  '2a6fb8c50643dfa4553c556b0b765dac' => 
  array (
    'criteria' => 
    array (
      'key' => 'iegallery_tools_handler_class',
    ),
    'object' => 
    array (
      'key' => 'iegallery_tools_handler_class',
      'value' => 'IeGalleryTools',
      'xtype' => 'textfield',
      'namespace' => 'iegallery',
      'area' => 'iegallery_main',
      'editedon' => NULL,
    ),
  ),
  '2e6240e82f76cb2ef3f6e289a095fb13' => 
  array (
    'criteria' => 
    array (
      'category' => 'ieGallery',
    ),
    'object' => 
    array (
      'id' => 22,
      'parent' => 0,
      'category' => 'ieGallery',
      'rank' => 0,
    ),
  ),
  '581e26323134f92a77f98f19ef1def84' => 
  array (
    'criteria' => 
    array (
      'name' => 'ieGallery',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ieGallery',
      'description' => '',
      'editor_type' => 0,
      'category' => 22,
      'cache_type' => 0,
      'plugincode' => '/**
 * @var modX $modx
 * @var IeGallery $iegallery
 * @var IeGalleryTools $tools
 * @var MsIeService $service
 * @var MsIeWorker $worker
 * @var array $scriptProperties
 * @var string $mode
 * @var bool $checking
 */

$iegallery = $modx->getService(\'iegallery\', \'IeGallery\');
if (!$iegallery) return;

$tools = $iegallery->getTools();

switch ($modx->event->name) {
    case \'msieOnLoadServices\':
        $modx->event->output($tools->getServices($mode));
        break;
    case \'msieOnGetServiceFields\':
        if (
            $service instanceof MsIeResourceExportService ||
            $service instanceof MsIeResourceImportService ||
            $service instanceof IeMs2CategoryImportService
        ) {
            $fields = $tools->getGalleryCustomFields(\'\', \'Photo gallery\');
            $modx->event->output($fields);
        }
        break;
    case \'msieOnExportStart\':
        if (
            $worker instanceof MsIeResourceExportWorker &&
            $galleryType = $worker->getSetting(\'gallery_type\')
        ) {
            if ($worker->hasField(\'gallery\')) {
                $worker->addPrepareFieldMethod(\'gallery\', $tools, \'prepareFieldGallery\');
            }
            if ($worker->hasField(\'attach_thumb\')) {
                $worker->addPrepareFieldMethod(\'attach_thumb\', $tools, \'prepareFieldAttachThumb\');
                $attachSettings = $worker->getSetting(\'gallery_attach_settings\', \'{"thumb":"small","width":150}\');
                $attachSettings = $worker->tools->fromJSON($attachSettings, array());
                $worker->setSetting(\'attach_settings\', $attachSettings);
            }
        }
        break;
    case \'msieOnExportBeforeArchive\':
        if (
            $worker instanceof MsIeResourceExportWorker &&
            $worker->hasField(\'gallery\') &&
            $galleryType = $worker->getSetting(\'gallery_type\')
        ) {
            $serviceName = $tools->getServiceNameByGallery(Msie::MODE_EXPORT, $galleryType);
            if ($galleryService = $tools->getService(Msie::MODE_EXPORT, $serviceName)) {
                if ($galleryWorker = $galleryService->getWorker()) {
                    $galleryWorker->copyWorkerScope($worker);
                    $galleryWorker->initialize();
                    if ($galleryWorker->isAddImagesToArchive()) {
                        $files[] = $galleryWorker->getCopyImagePath();
                        $modx->event->returnedValues[\'files\'] = $files;
                    }
                }
            }
        }
        break;

    case \'msieOnImportStart\':
        if (
            $worker instanceof MsIeResourceImportWorker &&
            $worker->hasField(\'gallery\') &&
            $galleryType = $worker->getSetting(\'gallery_type\')
        ) {
            $galleryWorker = $worker->getSubWorker(\'iegallery\');
            if (!$galleryWorker) {
                $serviceName = $tools->getServiceNameByGallery(Msie::MODE_IMPORT, $galleryType);
                if ($galleryService = $tools->getService(Msie::MODE_IMPORT, $serviceName)) {
                    if ($galleryWorker = $galleryService->getWorker()) {
                        $worker->addSubWorker($galleryWorker, \'iegallery\');
                        $galleryWorker->setWorkingDirectory($worker->getWorkingDirectory());
                        $galleryWorker->initialize();
                    }
                }
            }
            if ($galleryWorker) {
                $worker->addPrepareFieldMethod(\'gallery\', $galleryWorker, \'prepareFieldGallery\');
            }
        }
        break;
    case \'msieOnImport\':
        if (
            $worker instanceof MsIeResourceImportWorker &&
            $worker->hasSubWorker(\'iegallery\')
        ) {
            if (empty($data[\'gallery\'])) return;
            $galleryWorker = $worker->getSubWorker(\'iegallery\');
            $data = array(
                \'id\' => $object[\'id\'],
                \'gallery\' => $data[\'gallery\'],
            );
            $galleryWorker->work($data);
        }
        break;

}
return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * @var modX $modx
 * @var IeGallery $iegallery
 * @var IeGalleryTools $tools
 * @var MsIeService $service
 * @var MsIeWorker $worker
 * @var array $scriptProperties
 * @var string $mode
 * @var bool $checking
 */

$iegallery = $modx->getService(\'iegallery\', \'IeGallery\');
if (!$iegallery) return;

$tools = $iegallery->getTools();

switch ($modx->event->name) {
    case \'msieOnLoadServices\':
        $modx->event->output($tools->getServices($mode));
        break;
    case \'msieOnGetServiceFields\':
        if (
            $service instanceof MsIeResourceExportService ||
            $service instanceof MsIeResourceImportService ||
            $service instanceof IeMs2CategoryImportService
        ) {
            $fields = $tools->getGalleryCustomFields(\'\', \'Photo gallery\');
            $modx->event->output($fields);
        }
        break;
    case \'msieOnExportStart\':
        if (
            $worker instanceof MsIeResourceExportWorker &&
            $galleryType = $worker->getSetting(\'gallery_type\')
        ) {
            if ($worker->hasField(\'gallery\')) {
                $worker->addPrepareFieldMethod(\'gallery\', $tools, \'prepareFieldGallery\');
            }
            if ($worker->hasField(\'attach_thumb\')) {
                $worker->addPrepareFieldMethod(\'attach_thumb\', $tools, \'prepareFieldAttachThumb\');
                $attachSettings = $worker->getSetting(\'gallery_attach_settings\', \'{"thumb":"small","width":150}\');
                $attachSettings = $worker->tools->fromJSON($attachSettings, array());
                $worker->setSetting(\'attach_settings\', $attachSettings);
            }
        }
        break;
    case \'msieOnExportBeforeArchive\':
        if (
            $worker instanceof MsIeResourceExportWorker &&
            $worker->hasField(\'gallery\') &&
            $galleryType = $worker->getSetting(\'gallery_type\')
        ) {
            $serviceName = $tools->getServiceNameByGallery(Msie::MODE_EXPORT, $galleryType);
            if ($galleryService = $tools->getService(Msie::MODE_EXPORT, $serviceName)) {
                if ($galleryWorker = $galleryService->getWorker()) {
                    $galleryWorker->copyWorkerScope($worker);
                    $galleryWorker->initialize();
                    if ($galleryWorker->isAddImagesToArchive()) {
                        $files[] = $galleryWorker->getCopyImagePath();
                        $modx->event->returnedValues[\'files\'] = $files;
                    }
                }
            }
        }
        break;

    case \'msieOnImportStart\':
        if (
            $worker instanceof MsIeResourceImportWorker &&
            $worker->hasField(\'gallery\') &&
            $galleryType = $worker->getSetting(\'gallery_type\')
        ) {
            $galleryWorker = $worker->getSubWorker(\'iegallery\');
            if (!$galleryWorker) {
                $serviceName = $tools->getServiceNameByGallery(Msie::MODE_IMPORT, $galleryType);
                if ($galleryService = $tools->getService(Msie::MODE_IMPORT, $serviceName)) {
                    if ($galleryWorker = $galleryService->getWorker()) {
                        $worker->addSubWorker($galleryWorker, \'iegallery\');
                        $galleryWorker->setWorkingDirectory($worker->getWorkingDirectory());
                        $galleryWorker->initialize();
                    }
                }
            }
            if ($galleryWorker) {
                $worker->addPrepareFieldMethod(\'gallery\', $galleryWorker, \'prepareFieldGallery\');
            }
        }
        break;
    case \'msieOnImport\':
        if (
            $worker instanceof MsIeResourceImportWorker &&
            $worker->hasSubWorker(\'iegallery\')
        ) {
            if (empty($data[\'gallery\'])) return;
            $galleryWorker = $worker->getSubWorker(\'iegallery\');
            $data = array(
                \'id\' => $object[\'id\'],
                \'gallery\' => $data[\'gallery\'],
            );
            $galleryWorker->work($data);
        }
        break;

}
return;',
    ),
  ),
  '32fd391fbc41f9d696de855144c2edd5' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnExportBeforeArchive',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnExportBeforeArchive',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '93a05675d4192cd20cf8acfc14b0f87b' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnExportStart',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnExportStart',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'e47bc8dfe2b3c97ca501750c16a32532' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnGetServiceFields',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnGetServiceFields',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '636e953e35fb81fc4a0ec55f731d30c4' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnImport',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnImport',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'c4864a4be7fced5ff7f0fdcf3a047c50' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnImportStart',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnImportStart',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'c57f95822db83e76e82442ea9a3afd23' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnLoadServices',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'msieOnLoadServices',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);