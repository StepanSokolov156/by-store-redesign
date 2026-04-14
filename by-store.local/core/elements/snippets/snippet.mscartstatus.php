<?php
/**
 * msCartStatus — возвращает данные корзины для хедера
 *
 * Параметры:
 *   &field — что вернуть: count (кол-во товаров), cost (сумма), full (JSON)
 *            По умолчанию: count
 */

$field = $modx->getOption('field', $scriptProperties, 'count');

$cart = isset($_SESSION['minishop2']['cart']) ? $_SESSION['minishop2']['cart'] : array();

$totalCount = 0;
$totalCost = 0;

foreach ($cart as $item) {
    $ctx = isset($item['ctx']) ? $item['ctx'] : 'web';
    if ($ctx != $modx->context->key) continue;
    $count = isset($item['count']) ? (int)$item['count'] : 0;
    $price = isset($item['price']) ? (float)$item['price'] : 0;
    $totalCount += $count;
    $totalCost += $count * $price;
}

switch ($field) {
    case 'cost':
        return number_format($totalCost, 0, '', ' ') . ' руб.';
    case 'full':
        return $modx->toJSON(array('count' => $totalCount, 'cost' => $totalCost));
    case 'count':
    default:
        return $totalCount > 0 ? (string)$totalCount : '';
}
