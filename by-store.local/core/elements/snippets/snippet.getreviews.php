<?php
// getReviews — выводит отзывы из MIGX TV reviews_list
// Параметры: &tvName (default: reviews_list), &tpl (default: review.card), &limit

$tvName = $modx->getOption('tvName', $scriptProperties, 'reviews_list');
$tpl = $modx->getOption('tpl', $scriptProperties, 'review.card');
$limit = (int)$modx->getOption('limit', $scriptProperties, 0);

$resource = $modx->resource;
if (!$resource) return '';

$tv = $resource->getTVValue($tvName);
if (empty($tv)) return '';

$items = $modx->fromJSON($tv);
if (!is_array($items)) return '';

if ($limit > 0) {
    $items = array_slice($items, 0, $limit);
}

$output = '';
$starImg = '<img src="/assets/images/new-icons/star.svg" alt="">';

foreach ($items as $item) {
    $rating = (int)isset($item['rating']) ? $item['rating'] : 5;
    $rating = max(1, min(5, $rating));
    $item['stars_html'] = str_repeat($starImg, $rating);
    $output .= $modx->getChunk($tpl, $item);
}

return $output;