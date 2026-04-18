<?php
/**
 * productSpecs — outputs product options grouped by category in specs accordion HTML
 * Uses direct SQL to read ms2_product_options + ms2_options, bypasses msProduct model issues
 */
$productId = $modx->resource->id;
$tpl = $modx->getOption('tpl', $scriptProperties, 'product.specs.group');

// Direct query: join product options with option definitions and category names
$sql = "SELECT o.`key`, o.caption, o.category, c.category as category_name, o.measure_unit,
               po.value
        FROM `Modx-BYStorems2_product_options` po
        JOIN `Modx-BYStorems2_options` o ON o.`key` = po.`key`
        LEFT JOIN `Modx-BYStorecategories` c ON c.id = o.category
        WHERE po.product_id = " . (int)$productId . "
          AND po.value IS NOT NULL AND po.value != ''
        ORDER BY o.category, o.`key`";

$stmt = $modx->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($rows)) { return ''; }

// Group by category
$groups = array();
foreach ($rows as $row) {
    $catId = (int)$row['category'];
    if ($catId === 0) {
        $catId = 999; // uncategorized goes last
    }
    if (!isset($groups[$catId])) {
        $groups[$catId] = array(
            'name' => !empty($row['category_name']) ? $row['category_name'] : 'Прочие',
            'id' => $catId,
            'options' => array()
        );
    }
    $groups[$catId]['options'][] = array(
        'caption' => $row['caption'],
        'value' => $row['value'],
        'measure_unit' => !empty($row['measure_unit']) ? $row['measure_unit'] : '',
    );
}

ksort($groups);
$groups = array_values($groups);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService('pdoFetch');
return $pdoFetch->getChunk($tpl, array('groups' => $groups));