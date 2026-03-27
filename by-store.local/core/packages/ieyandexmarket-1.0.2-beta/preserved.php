<?php return array (
  '3c7ba01816cbca7dcf856f9a43d1f512' => 
  array (
    'criteria' => 
    array (
      'name' => 'ieyandexmarket',
    ),
    'object' => 
    array (
      'name' => 'ieyandexmarket',
      'path' => '{core_path}components/ieyandexmarket/',
      'assets_path' => '{assets_path}components/ieyandexmarket/',
    ),
  ),
  '3e1707055755488273eae1ed25c1e6ef' => 
  array (
    'criteria' => 
    array (
      'name' => 'ieyandexmarket',
    ),
    'object' => 
    array (
      'name' => 'ieyandexmarket',
      'path' => '{core_path}components/ieyandexmarket/',
      'assets_path' => '{assets_path}components/ieyandexmarket/',
    ),
  ),
  '38afc2af840c66c113f3a176674e718b' => 
  array (
    'criteria' => 
    array (
      'key' => 'ieyandexmarket_ieyandexmarketexportservice_worker',
    ),
    'object' => 
    array (
      'key' => 'ieyandexmarket_ieyandexmarketexportservice_worker',
      'value' => 'IeYandexMarketExportWorker',
      'xtype' => 'textfield',
      'namespace' => 'ieyandexmarket',
      'area' => 'ieyandexmarket_workers',
      'editedon' => NULL,
    ),
  ),
  '51b2d993c07e9c5d74d53cccad113b94' => 
  array (
    'criteria' => 
    array (
      'key' => 'ieyandexmarket_tools_handler_class',
    ),
    'object' => 
    array (
      'key' => 'ieyandexmarket_tools_handler_class',
      'value' => 'IeYandexMarketTools',
      'xtype' => 'textfield',
      'namespace' => 'ieyandexmarket',
      'area' => 'ieyandexmarket_main',
      'editedon' => NULL,
    ),
  ),
  '5d6b53040b646e3cb2f1af34501f87eb' => 
  array (
    'criteria' => 
    array (
      'key' => 'ieyandexmarket_xml_writer_class',
    ),
    'object' => 
    array (
      'key' => 'ieyandexmarket_xml_writer_class',
      'value' => 'IeYandexMarketXMLWriter',
      'xtype' => 'textfield',
      'namespace' => 'ieyandexmarket',
      'area' => 'ieyandexmarket_main',
      'editedon' => NULL,
    ),
  ),
  '684bf33e4c1df4793cf241acd761d0e9' => 
  array (
    'criteria' => 
    array (
      'category' => 'ieYandexMarket',
    ),
    'object' => 
    array (
      'id' => 27,
      'parent' => 0,
      'category' => 'ieYandexMarket',
      'rank' => 0,
    ),
  ),
  '5c1e781323051db28e9913a5f7874f51' => 
  array (
    'criteria' => 
    array (
      'name' => 'ieYandexMarket',
    ),
    'object' => 
    array (
      'id' => 24,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ieYandexMarket',
      'description' => '',
      'editor_type' => 0,
      'category' => 27,
      'cache_type' => 0,
      'plugincode' => '/**
 * @var modX $modx
 * @var IeYandexMarket $ieyandexmarket
 * @var ieYandexMarketTools $tools
 * @var MsIeService $service
 * @var MsIeWorker $worker
 * @var array $scriptProperties
 * @var string $mode
 * @var bool $checking
 */

$ieyandexmarket = $modx->getService(\'ieyandexmarket\', \'IeYandexMarket\');
if (!$ieyandexmarket) return;

$tools = $ieyandexmarket->getTools();
//if (!$tools->hasAddition(\'Addition\')) return;

switch ($modx->event->name) {
    case \'msieOnLoadServices\':
        $modx->event->output($tools->getServices($mode));
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
 * @var IeYandexMarket $ieyandexmarket
 * @var ieYandexMarketTools $tools
 * @var MsIeService $service
 * @var MsIeWorker $worker
 * @var array $scriptProperties
 * @var string $mode
 * @var bool $checking
 */

$ieyandexmarket = $modx->getService(\'ieyandexmarket\', \'IeYandexMarket\');
if (!$ieyandexmarket) return;

$tools = $ieyandexmarket->getTools();
//if (!$tools->hasAddition(\'Addition\')) return;

switch ($modx->event->name) {
    case \'msieOnLoadServices\':
        $modx->event->output($tools->getServices($mode));
        break;
}
return;',
    ),
  ),
  '06325d324966f43cd10380931895b79b' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 24,
      'event' => 'msieOnLoadServices',
    ),
    'object' => 
    array (
      'pluginid' => 24,
      'event' => 'msieOnLoadServices',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);