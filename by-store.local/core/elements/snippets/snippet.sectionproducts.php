<?php
/**
 * sectionProducts — выводит секцию товаров на главной с фильтром по категориям
 *
 * Параметры:
 *   &section     — тип секции: 1=хиты, 2=новинки, 3=рекомендуем, 4=акции
 *   &title       — заголовок секции
 *   &filterId    — id для div.products-filter
 *   &swiperClass — CSS класс для .swiper
 *   &prevId      — id кнопки "назад"
 *   &nextId      — id кнопки "вперёд"
 *   &limit       — кол-во товаров (default: 20)
 */

$section   = (int)$modx->getOption('section', $scriptProperties, 0);
$title     = $modx->getOption('title', $scriptProperties, '');
$filterId  = $modx->getOption('filterId', $scriptProperties, '');
$swiperCls = $modx->getOption('swiperClass', $scriptProperties, '');
$prevId    = $modx->getOption('prevId', $scriptProperties, '');
$nextId    = $modx->getOption('nextId', $scriptProperties, '');
$limit     = (int)$modx->getOption('limit', $scriptProperties, 20);

if (!$section || !$title) return '';

$pdo = $modx->getService('pdoFetch');

// --- Таблицы ---
$prefix = 'Modx-BYStore';
$c  = $prefix . 'site_content';
$ms = $prefix . 'ms2_products';
$tv = $prefix . 'site_tmplvar_contentvalues';
$tvr = $prefix . 'site_tmplvars';

// --- Определяем TV и условие по типу секции ---
if ($section == 4) {
    // Акции — по TV show_on_sale
    $tvName = 'show_on_sale';
    $tvCondition = "= '1'";
} else {
    // Хиты / Новинки / Рекомендуем — по TV Popular_for_index
    $tvName = 'Popular_for_index';
    $tvCondition = "= '{$section}'";
}

// --- 1. Получаем товары ---
$sql = "SELECT p.id, p.pagetitle, p.uri, p.parent,
               ms.price, ms.old_price,
               ms.image
        FROM `{$c}` p
        INNER JOIN `{$ms}` ms ON ms.id = p.id
        INNER JOIN `{$tv}` tvSec
            ON tvSec.contentid = p.id
            AND tvSec.tmplvarid = (SELECT id FROM `{$tvr}` WHERE name = '{$tvName}' LIMIT 1)
            AND tvSec.value {$tvCondition}
        WHERE p.class_key = 'msProduct'
          AND p.published = 1
          AND p.deleted = 0
          AND p.context_key = 'web'
        ORDER BY p.menuindex ASC
        LIMIT {$limit}";

$stmt = $modx->query($sql);
if (!$stmt) return '';
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (empty($products)) return '';

// --- 2. Находим родительские категории 1-го уровня (parent = 8) ---
$root = 8;

// Собираем всех родителей товаров
$allParentIds = array_unique(array_map('intval', array_column($products, 'parent')));

// Кэш: id => [parent, uri, pagetitle]
$nodeCache = array();
$idsToLoad = $allParentIds;

while (!empty($idsToLoad)) {
    $ids = implode(',', array_map('intval', $idsToLoad));
    $s = $modx->query("SELECT id, parent, uri, pagetitle FROM `{$c}` WHERE id IN ({$ids})");
    if (!$s) break;
    $next = array();
    while ($row = $s->fetch(PDO::FETCH_ASSOC)) {
        $id = (int)$row['id'];
        if (isset($nodeCache[$id])) continue;
        $nodeCache[$id] = array(
            'parent'    => (int)$row['parent'],
            'uri'       => $row['uri'],
            'pagetitle' => $row['pagetitle'],
        );
        $par = (int)$row['parent'];
        if ($par > 0 && !isset($nodeCache[$par])) {
            $next[] = $par;
        }
    }
    $idsToLoad = array_unique($next);
}

// Для каждого товара находим top-level категорию
$topCats = array();          // [catId => [uri, pagetitle]]
$productCatMap = array();    // [productId => uri]

foreach ($products as $prod) {
    $pid = (int)$prod['parent'];
    $iterations = 0;
    while ($iterations < 10 && isset($nodeCache[$pid])) {
        $par = $nodeCache[$pid]['parent'];
        if ($par === $root) {
            $topCats[$pid] = array(
                'uri'       => $nodeCache[$pid]['uri'],
                'pagetitle' => $nodeCache[$pid]['pagetitle'],
            );
            $productCatMap[$prod['id']] = $nodeCache[$pid]['uri'];
            break;
        }
        $pid = $par;
        $iterations++;
    }
}

// --- 3. Генерируем кнопки фильтра ---
$filterHtml = '<button class="products-filter__btn products-filter__btn--active" data-category="all">Все</button>';

foreach ($topCats as $catId => $cat) {
    $uri  = htmlspecialchars($cat['uri'], ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars($cat['pagetitle'], ENT_QUOTES, 'UTF-8');
    $filterHtml .= '<button class="products-filter__btn" data-category="' . $uri . '">' . $name . '</button>';
}

// --- 4. Генерируем карточки товаров ---
$cardTpl = $modx->getChunk('product.card');
$cardsHtml = '';

foreach ($products as $prod) {
    $oldPrice = (float)$prod['old_price'];
    $price = (float)$prod['price'];
    $image = !empty($prod['image']) ? $prod['image'] : '/assets/images/new-images/product-card-img.png';

    $oldPriceHtml = '';
    if ($oldPrice > 0) {
        $oldPriceHtml = '<span class="product-card__price-old">'
            . number_format($oldPrice, 0, '', ' ') . ' руб.</span>';
    }

    $placeholders = array(
        'id'                => $prod['id'],
        'pagetitle'         => htmlspecialchars($prod['pagetitle'], ENT_QUOTES, 'UTF-8'),
        'uri'               => $prod['uri'],
        'price'             => number_format($price, 0, '', ' '),
        'old_price_html'    => $oldPriceHtml,
        'image'             => htmlspecialchars($image, ENT_QUOTES, 'UTF-8'),
        'top_category_uri'  => htmlspecialchars($productCatMap[$prod['id']], ENT_QUOTES, 'UTF-8'),
    );

    $card = $cardTpl;
    foreach ($placeholders as $key => $val) {
        $card = str_replace('[[+' . $key . ']]', $val, $card);
    }
    $cardsHtml .= $card . "\n";
}

// --- 5. Рендерим секцию ---
$sectionTpl = $modx->getChunk('product.section');

$sectionPh = array(
    'section_title'  => htmlspecialchars($title, ENT_QUOTES, 'UTF-8'),
    'filter_id'      => htmlspecialchars($filterId, ENT_QUOTES, 'UTF-8'),
    'swiper_class'   => htmlspecialchars($swiperCls, ENT_QUOTES, 'UTF-8'),
    'prev_id'        => htmlspecialchars($prevId, ENT_QUOTES, 'UTF-8'),
    'next_id'        => htmlspecialchars($nextId, ENT_QUOTES, 'UTF-8'),
    'filter_buttons' => $filterHtml,
    'product_cards'  => $cardsHtml,
);

$output = $sectionTpl;
foreach ($sectionPh as $key => $val) {
    $output = str_replace('[[+' . $key . ']]', $val, $output);
}

return $output;