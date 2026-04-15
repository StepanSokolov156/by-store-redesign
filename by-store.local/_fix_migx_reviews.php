<?php
/**
 * Fix MIGX reviews TV input_properties — proper PHP serialization via PDO
 */
$dsn = 'mysql:host=MySQL-8.0;dbname=modx_local;charset=utf8mb4';
$pdo = new PDO($dsn, 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$properties = array(
    'configs' => 'reviews',
    'formtabs' => '[{"MIGX_id":"1","caption":"Отзыв","fields":[{"MIGX_id":"1","field":"name","caption":"Имя автора","description":"","description_is_code":"0","inputTV":"","inputTVtype":"textfield","validation":"","configs":"","restrictive_condition":"","display":"","sourceFrom":"config","sources":"","inputOptionValues":"","default":"","useDefaultIfEmpty":"0","pos":"1"},{"MIGX_id":"2","field":"rating","caption":"Оценка (1-5)","description":"","description_is_code":"0","inputTV":"","inputTVtype":"numberfield","validation":"","configs":"","restrictive_condition":"","display":"","sourceFrom":"config","sources":"","inputOptionValues":"","default":"5","useDefaultIfEmpty":"0","pos":"2"},{"MIGX_id":"3","field":"text","caption":"Текст отзыва","description":"","description_is_code":"0","inputTV":"","inputTVtype":"textarea","validation":"","configs":"","restrictive_condition":"","display":"","sourceFrom":"config","sources":"","inputOptionValues":"","default":"","useDefaultIfEmpty":"0","pos":"3"},{"MIGX_id":"4","field":"date","caption":"Дата","description":"Формат: DD.MM.YYYY","description_is_code":"0","inputTV":"","inputTVtype":"textfield","validation":"","configs":"","restrictive_condition":"","display":"","sourceFrom":"config","sources":"","inputOptionValues":"","default":"","useDefaultIfEmpty":"0","pos":"4"}]}]',
    'columns' => '[{"MIGX_id":"1","header":"Имя","dataIndex":"name","sortable":"false","width":"","renderer":"","editor":""},{"MIGX_id":"2","header":"Оценка","dataIndex":"rating","sortable":"false","width":"80","renderer":"","editor":""},{"MIGX_id":"3","header":"Текст","dataIndex":"text","sortable":"false","width":"","renderer":"","editor":""},{"MIGX_id":"4","header":"Дата","dataIndex":"date","sortable":"false","width":"120","renderer":"","editor":""}]',
    'btntext' => '',
    'previewurl' => '',
    'jsonvarkey' => '',
    'autoResourceFolders' => 'false',
);

$serialized = serialize($properties);
$stmt = $pdo->prepare("UPDATE `Modx-BYStoresite_tmplvars` SET `input_properties` = ? WHERE `id` = 66");
$stmt->execute(array($serialized));

// Verify
$row = $pdo->query("SELECT `input_properties` FROM `Modx-BYStoresite_tmplvars` WHERE `id` = 66")->fetch(PDO::FETCH_ASSOC);
$val = $row['input_properties'];
echo "Stored length: " . strlen($val) . "\n";
echo "Unserialize test: ";
$test = @unserialize($val);
echo $test !== false ? "OK — configs=" . $test['configs'] . "\n" : "FAILED\n";
