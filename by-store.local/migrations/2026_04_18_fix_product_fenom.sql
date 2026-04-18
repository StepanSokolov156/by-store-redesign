-- UP: Fix product page chunks — convert Fenom to MODX syntax for direct [[$chunk]] calls
-- Fenom only works in chunks called via pdoTools snippets (msGallery, pdoResources, etc.)
-- Chunks called directly via [[$chunk]] in templates need MODX syntax

-- ============================================================
-- 1. Create loadProductOptions snippet — sets ms2 option placeholders
-- ============================================================
INSERT INTO `Modx-BYStoresite_snippets`
  (`name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  ('loadProductOptions', 'Loads ms2 product options as MODX placeholders for use in chunks',
   '<?php
$product = $modx->resource;
if (!($product instanceof msProduct)) { return ""; }
if ($data = $product->getOne("Data")) {
    $keys = $data->getOptionKeys();
    foreach ($keys as $key) {
        $val = $product->get($key);
        if ($val !== null && $val !== "") {
            $modx->setPlaceholder($key, is_array($val) ? implode(", ", $val) : $val);
        }
    }
}
$modx->setPlaceholder("price", $product->get("price"));
$modx->setPlaceholder("old_price", $product->get("old_price"));
$price = (float) $product->get("price");
$old_price = (float) $product->get("old_price");
if ($old_price > 0 && $price > 0) {
    $modx->setPlaceholder("discount_pct", "-" . round(($old_price - $price) / $old_price * 100) . "%");
}
return "";
', 0, 0, 0, '');

-- ============================================================
-- 2. Rewrite product.info — MODX syntax
-- ============================================================
UPDATE `Modx-BYStoresite_htmlsnippets`
SET snippet = '<div class="product-info">
    <div class="product-info__rating">
        <div class="product-info__stars">
            <img src="/assets/images/new-icons/star.svg" alt=""><img src="/assets/images/new-icons/star.svg" alt=""><img src="/assets/images/new-icons/star.svg" alt=""><img src="/assets/images/new-icons/star.svg" alt=""><img src="/assets/images/new-icons/star.svg" alt="">
        </div>
        <span class="product-info__reviews-count">(0 отзывов)</span>
    </div>

    <div class="product-info__actions">
        <span class="availability availability--success">
            <img src="/assets/images/new-icons/in_stock.svg" alt="" class="availability__icon">
            <span>В наличии</span>
        </span>
        <button class="product-info__favorite msFavoriterToggle" data-id="[[*id]]" aria-label="Добавить в избранное">
            <img src="/assets/images/new-icons/wishlist.svg" alt="">
            <span>В избранное</span>
        </button>
        [[!addComparison?
            &list_id=`1013`
            &list=`mobile`
            &id=`[[*id]]`
            &tpl=`product.compare.btn`
            &maxItems=`6`
        ]]
    </div>

    [[*Color1:notempty=`
    <div class="product-info__option">
        <span class="product-info__option-label">Цвет:</span>
        <div class="product-info__option-values product-info__option-values--color">
            [[*Color:notempty=`<a href="" class="color-chip color-chip--active" aria-label="[[*Color]]"><span>[[*Color]]</span></a>`]]
            [[*id1:notempty=`<a href="[[~[[*id1]]]]" class="color-chip" aria-label="[[*Color1]]"><span>[[*Color1]]</span></a>`]]
            [[*id2:notempty=`<a href="[[~[[*id2]]]]" class="color-chip" aria-label="[[*Color2]]"><span>[[*Color2]]</span></a>`]]
            [[*id3:notempty=`<a href="[[~[[*id3]]]]" class="color-chip" aria-label="[[*Color3]]"><span>[[*Color3]]</span></a>`]]
            [[*id4:notempty=`<a href="[[~[[*id4]]]]" class="color-chip" aria-label="[[*Color4]]"><span>[[*Color4]]</span></a>`]]
            [[*id5:notempty=`<a href="[[~[[*id5]]]]" class="color-chip" aria-label="[[*Color5]]"><span>[[*Color5]]</span></a>`]]
            [[*id6:notempty=`<a href="[[~[[*id6]]]]" class="color-chip" aria-label="[[*Color6]]"><span>[[*Color6]]</span></a>`]]
            [[*id7:notempty=`<a href="[[~[[*id7]]]]" class="color-chip" aria-label="[[*Color7]]"><span>[[*Color7]]</span></a>`]]
        </div>
    </div>
    `]]

    [[*Storage1:notempty=`
    <div class="product-info__option">
        <span class="product-info__option-label">Встроенная память:</span>
        <div class="product-info__option-values">
            [[*Storage:notempty=`<a href="" class="option-chip option-chip--active">[[*Storage]] Гб</a>`]]
            [[*id1_storage:notempty=`<a href="[[~[[*id1_storage]]]]" class="option-chip">[[*Storage1]] Гб</a>`]]
            [[*id2_storage:notempty=`<a href="[[~[[*id2_storage]]]]" class="option-chip">[[*Storage2]] Гб</a>`]]
            [[*id3_storage:notempty=`<a href="[[~[[*id3_storage]]]]" class="option-chip">[[*Storage3]] Гб</a>`]]
            [[*id4_storage:notempty=`<a href="[[~[[*id4_storage]]]]" class="option-chip">[[*Storage4]] Гб</a>`]]
            [[*id5_storage:notempty=`<a href="[[~[[*id5_storage]]]]" class="option-chip">[[*Storage5]] Гб</a>`]]
            [[*id6_storage:notempty=`<a href="[[~[[*id6_storage]]]]" class="option-chip">[[*Storage6]] Гб</a>`]]
        </div>
    </div>
    `]]

    <div class="product-info__specs">
        [[+OC:notempty=`
        <div class="product-info__spec">
            <span class="product-info__spec-label">ОС:</span>
            <span class="product-info__spec-value">[[+OC]]</span>
        </div>
        `]]
        [[+MemoryStore:notempty=`
        <div class="product-info__spec">
            <span class="product-info__spec-label">Оперативная память:</span>
            <span class="product-info__spec-value">[[+MemoryStore]]</span>
        </div>
        `]]
        [[+DisplaySize:notempty=`
        <div class="product-info__spec product-info__spec--inline">
            <span class="product-info__spec-inline">Экран: <span class="product-info__spec-value">[[+DisplaySize]] [[+tehnologiya_ekrana]] [[+razmer_izobr]]</span></span>
        </div>
        `]]
        [[+Camera:notempty=`
        <div class="product-info__spec">
            <span class="product-info__spec-label">Камера:</span>
            <span class="product-info__spec-value">[[+Camera]]</span>
        </div>
        `]]
        [[+yamkast_akkumulatora:notempty=`
        <div class="product-info__spec">
            <span class="product-info__spec-label">Аккумулятор:</span>
            <span class="product-info__spec-value">[[+yamkast_akkumulatora]]</span>
        </div>
        `]]
        [[+Weight:notempty=`
        <div class="product-info__spec">
            <span class="product-info__spec-label">Вес:</span>
            <span class="product-info__spec-value">[[+Weight]]</span>
        </div>
        `]]
        [[+Connection:notempty=`
        <div class="product-info__spec">
            <span class="product-info__spec-label">Связь:</span>
            <span class="product-info__spec-value">[[+Connection]]</span>
        </div>
        `]]
        [[+tip_sim:notempty=`
        <div class="product-info__spec product-info__spec--inline">
            <span class="product-info__spec-inline">SIM: <span class="product-info__spec-value">[[+tip_sim]]</span></span>
        </div>
        `]]
    </div>

    <button class="product-info__all-specs">
        <span>Все характеристики</span>
        <img src="/assets/images/new-icons/iconamoon_arrow-down-2-light.svg" alt="" class="product-info__all-specs-arrow">
    </button>
</div>'
WHERE name = 'product.info';

-- ============================================================
-- 3. Rewrite product.purchase — MODX syntax
-- ============================================================
UPDATE `Modx-BYStoresite_htmlsnippets`
SET snippet = '<div class="product-purchase">
    <div class="product-purchase__price">
        [[+old_price:gt=`0`:then=`
        <div class="product-purchase__price-old-row">
            <span class="product-purchase__price-old">[[+old_price]] руб.</span>
            [[+discount_pct:notempty=`<span class="product-purchase__discount">[[+discount_pct]]</span>`]]
        </div>
        `]]
        <span class="product-purchase__price-current">[[+price]] руб.</span>

        [[+price:gt=`0`:then=`
        <div class="product-purchase__quantity-row">
            <div class="product-purchase__quantity">
                <button class="quantity-btn quantity-btn--minus" aria-label="Уменьшить количество">
                    <img src="/assets/images/new-icons/icon-minus.svg" alt="">
                </button>
                <input type="text" class="quantity-input" value="1" readonly>
                <button class="quantity-btn quantity-btn--plus" aria-label="Увеличить количество">
                    <img src="/assets/images/new-icons/icon-plus.svg" alt="">
                </button>
            </div>
            <form method="post" class="ms2_form">
                <input type="hidden" name="id" value="[[*id]]">
                <input type="hidden" name="count" value="1">
                <input type="hidden" name="options" value="[]">
                <button type="submit" name="ms2_action" value="cart/add" class="btn btn--primary product-purchase__btn-cart">В корзину</button>
            </form>
        </div>

        <button class="btn btn--gradient-outline product-purchase__btn-oneclick js-quick-order" data-product-id="[[*id]]" data-product-title="[[*pagetitle]]" data-product-price="[[+price]]">Купить в 1 клик</button>
        `:else=`
        <div class="product-purchase__quantity-row">
            <a href="[[~290]]" class="btn btn--primary product-purchase__btn-cart">Узнать цену</a>
        </div>
        `]]
    </div>

    <div class="product-purchase__benefits">
        <div class="product-purchase__benefit">
            <img src="/assets/images/new-icons/icon-warranty.svg" alt="" class="product-purchase__benefit-icon">
            <span class="product-purchase__benefit-text">
                <span class="product-purchase__benefit-label">Гарантия:</span>
                <span class="product-purchase__benefit-value"> 365 дней</span>
            </span>
        </div>
        <div class="product-purchase__benefit">
            <img src="/assets/images/new-icons/icon-delivery.svg" alt="" class="product-purchase__benefit-icon">
            <span class="product-purchase__benefit-text">
                <span class="product-purchase__benefit-label">Бесплатная доставка:</span>
                <span class="product-purchase__benefit-value"> Минск - завтра,</span>
                <span class="product-purchase__benefit-value"> регионы - 2-3 дня</span>
            </span>
        </div>
        <div class="product-purchase__benefit">
            <img src="/assets/images/new-icons/icon-pickup.svg" alt="" class="product-purchase__benefit-icon">
            <span class="product-purchase__benefit-text">
                <span class="product-purchase__benefit-label">Самовывоз:</span>
                <span class="product-purchase__benefit-value"> Минск - </span>
                <span class="product-purchase__benefit-value">сегодня</span>
            </span>
        </div>
        <div class="product-purchase__benefit">
            <img src="/assets/images/new-icons/icon-payment.svg" alt="" class="product-purchase__benefit-icon">
            <span class="product-purchase__benefit-text">
                <span class="product-purchase__benefit-label">Оплата:</span>
                <span class="product-purchase__benefit-value"> наличные, карты, карты рассрочки</span>
            </span>
        </div>
    </div>
</div>'
WHERE name = 'product.purchase';

-- ============================================================
-- 4. Rewrite product.tab.description — MODX syntax
-- ============================================================
UPDATE `Modx-BYStoresite_htmlsnippets`
SET snippet = '<div class="product-tab-pane product-tab-pane--active" id="description">
    [[*introtext]]

    [[*content]]
</div>'
WHERE name = 'product.tab.description';

-- ============================================================
-- 5. Update Template 6 — add loadProductOptions call, remove old msProductOptions trick
-- ============================================================
UPDATE `Modx-BYStoresite_templates`
SET content = '<!DOCTYPE html>\n<html lang="ru">\n<head>\n    [[$meta]]\n</head>\n<body>\n    <div class="wrapper">\n        [[$header]]\n\n        [[$breadcrumbs]]\n\n        <main class="main product-page" data-product-id="[[*id]]">\n            <div class="container">\n                [[!addLooked?\n                &templates=`6`\n                &limit=`15`\n                ]]\n\n                [[!loadProductOptions]]\n\n                <section class="product-preview">\n                    <h1 class="product-info__title">[[*pagetitle]]</h1>\n\n                    [[!msGallery?\n                    &tpl=`product.gallery`\n                    ]]\n\n                    [[$product.info]]\n                    [[$product.purchase]]\n                </section>\n\n                <section class="product-tabs-section">\n                    <div class="product-tabs">\n                        <button class="product-tab product-tab--active" data-tab="description">Описание</button>\n                        <button class="product-tab" data-tab="specs">Характеристики</button>\n                        <button class="product-tab" data-tab="reviews">Отзывы (<span id="comment-total">[[+total]]</span>)</button>\n                    </div>\n\n                    <div class="product-tabs-content">\n                        [[$product.tab.description]]\n                        [[$product.tab.specs]]\n                        [[$product.tab.reviews]]\n                    </div>\n                </section>\n\n                [[$product.similar]]\n\n                [[$product.viewed]]\n\n                [[$lead.form.search]]\n            </div>\n        </main>\n\n        [[$quickOrderCardFormTpl]]\n\n        [[$footer]]\n    </div>\n    [[$scripts]]\n</body>\n</html>'
WHERE id = 6;

-- DOWN: Remove loadProductOptions snippet, restore chunks and template to previous Fenom versions
-- DELETE FROM `Modx-BYStoresite_snippets` WHERE `name` = 'loadProductOptions';
-- (product.info, product.purchase, product.tab.description, template 6 need manual restore from git)
