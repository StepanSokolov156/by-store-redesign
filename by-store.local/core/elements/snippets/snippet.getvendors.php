<?php
$sql = "SELECT * FROM `Modx-BYStorems2_vendors`
        WHERE JSON_EXTRACT(properties, '$.show_on_main') = 1
        AND logo != ''
        ORDER BY name";

$q = $modx->query($sql);
if (!$q) return '';

$vendors = $q->fetchAll(PDO::FETCH_ASSOC);
$output = '';

foreach ($vendors as $vendor) {
    $output .= $modx->getChunk('brand.card', $vendor);
}

return $output;