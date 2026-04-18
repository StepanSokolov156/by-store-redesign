-- UP: Product page — new design integration (verstka/product.php)
-- Based on verstka/product.php, integrated with MODX/minishop2

-- ============================================================
-- 1. product.gallery — Swiper gallery (replaces msGallery Fotorama)
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (212, 'product.gallery', 'Product page image gallery (Swiper main + thumbs)', '<div class="product-gallery">
    <div class="product-gallery__main">
        <div class="product-gallery__swiper swiper productGallerySwiper">
            <div class="swiper-wrapper">
                {foreach $files as $file}
                <div class="swiper-slide">
                    <img src="{$file[''url'']}" alt="{$_modx->resource.pagetitle}" class="product-gallery__image">
                </div>
                {/foreach}
                {if !$files}
                <div class="swiper-slide">
                    <img src="{(''assets_url'' | option) ~ ''components/minishop2/img/web/ms2_medium.png''}"
                         alt="{$_modx->resource.pagetitle}" class="product-gallery__image">
                </div>
                {/if}
            </div>
        </div>
    </div>
    {if $files && count($files) > 1}
    <div class="product-gallery__thumbs">
        <div class="product-gallery__thumbs-swiper swiper productGalleryThumbsSwiper">
            <div class="swiper-wrapper">
                {foreach $files as $idx => $file}
                <div class="swiper-slide{if $idx == 0} product-gallery__thumb--active{/if}">
                    <img src="{$file[''url'']}" alt="{$_modx->resource.pagetitle}">
                </div>
                {/foreach}
            </div>
        </div>
    </div>
    {/if}
</div>', 0, 0, 0, '');

-- ============================================================
-- 2. product.info — Rating, actions, color/memory chips, short specs
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (213, 'product.info', 'Product info block: rating, availability, favorites, compare, variant chips, short specs', '<div class="product-info">
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
        <button class="product-info__favorite msFavoriterToggle" data-id="{$_modx->resource.id}" aria-label="Добавить в избранное">
            <img src="/assets/images/new-icons/wishlist.svg" alt="">
            <span>В избранное</span>
        </button>
        [[!addComparison?
            &list_id=`1013`
            &list=`mobile`
            &id=`{$_modx->resource.id}`
            &tpl=`product.compare.btn`
            &maxItems=`6`
        ]]
    </div>

    {* Color variants *}
    {if $_modx->resource.Color1}
    <div class="product-info__option">
        <span class="product-info__option-label">Цвет:</span>
        <div class="product-info__option-values product-info__option-values--color">
            {if $_modx->resource.Color}
            <a href="" class="color-chip color-chip--active" aria-label="{$_modx->resource.Color}">
                <span>{$_modx->resource.Color}</span>
            </a>
            {/if}
            {if $_modx->resource.id1}
            <a href="[[~{$_modx->resource.id1}]]" class="color-chip" aria-label="{$_modx->resource.Color1}">
                <span>{$_modx->resource.Color1}</span>
            </a>
            {/if}
            {if $_modx->resource.id2}
            <a href="[[~{$_modx->resource.id2}]]" class="color-chip" aria-label="{$_modx->resource.Color2}">
                <span>{$_modx->resource.Color2}</span>
            </a>
            {/if}
            {if $_modx->resource.id3}
            <a href="[[~{$_modx->resource.id3}]]" class="color-chip" aria-label="{$_modx->resource.Color3}">
                <span>{$_modx->resource.Color3}</span>
            </a>
            {/if}
            {if $_modx->resource.id4}
            <a href="[[~{$_modx->resource.id4}]]" class="color-chip" aria-label="{$_modx->resource.Color4}">
                <span>{$_modx->resource.Color4}</span>
            </a>
            {/if}
            {if $_modx->resource.id5}
            <a href="[[~{$_modx->resource.id5}]]" class="color-chip" aria-label="{$_modx->resource.Color5}">
                <span>{$_modx->resource.Color5}</span>
            </a>
            {/if}
            {if $_modx->resource.id6}
            <a href="[[~{$_modx->resource.id6}]]" class="color-chip" aria-label="{$_modx->resource.Color6}">
                <span>{$_modx->resource.Color6}</span>
            </a>
            {/if}
            {if $_modx->resource.id7}
            <a href="[[~{$_modx->resource.id7}]]" class="color-chip" aria-label="{$_modx->resource.Color7}">
                <span>{$_modx->resource.Color7}</span>
            </a>
            {/if}
        </div>
    </div>
    {/if}

    {* Memory variants *}
    {if $_modx->resource.Storage1}
    <div class="product-info__option">
        <span class="product-info__option-label">Встроенная память:</span>
        <div class="product-info__option-values">
            {if $_modx->resource.Storage}
            <a href="" class="option-chip option-chip--active">{$Storage} Гб</a>
            {/if}
            {if $_modx->resource.id1_storage}
            <a href="[[~{$_modx->resource.id1_storage}]]" class="option-chip">{$Storage1} Гб</a>
            {/if}
            {if $_modx->resource.id2_storage}
            <a href="[[~{$_modx->resource.id2_storage}]]" class="option-chip">{$Storage2} Гб</a>
            {/if}
            {if $_modx->resource.id3_storage}
            <a href="[[~{$_modx->resource.id3_storage}]]" class="option-chip">{$Storage3} Гб</a>
            {/if}
            {if $_modx->resource.id4_storage}
            <a href="[[~{$_modx->resource.id4_storage}]]" class="option-chip">{$Storage4} Гб</a>
            {/if}
            {if $_modx->resource.id5_storage}
            <a href="[[~{$_modx->resource.id5_storage}]]" class="option-chip">{$Storage5} Гб</a>
            {/if}
            {if $_modx->resource.id6_storage}
            <a href="[[~{$_modx->resource.id6_storage}]]" class="option-chip">{$Storage6} Гб</a>
            {/if}
        </div>
    </div>
    {/if}

    {* Short specs *}
    <div class="product-info__specs">
        {if $OC}
        <div class="product-info__spec">
            <span class="product-info__spec-label">ОС:</span>
            <span class="product-info__spec-value">{$OC}</span>
        </div>
        {/if}
        {if $MemoryStore}
        <div class="product-info__spec">
            <span class="product-info__spec-label">Оперативная память:</span>
            <span class="product-info__spec-value">{$MemoryStore}</span>
        </div>
        {/if}
        {if $tehnologiya_ekrana || $DisplaySize}
        <div class="product-info__spec product-info__spec--inline">
            <span class="product-info__spec-inline">Экран: <span class="product-info__spec-value">{$DisplaySize} {$tehnologiya_ekrana} {$razmer_izobr}</span></span>
        </div>
        {/if}
        {if $Camera}
        <div class="product-info__spec">
            <span class="product-info__spec-label">Камера:</span>
            <span class="product-info__spec-value">{$Camera}</span>
        </div>
        {/if}
        {if $yamkast_akkumulatora}
        <div class="product-info__spec">
            <span class="product-info__spec-label">Аккумулятор:</span>
            <span class="product-info__spec-value">{$yamkast_akkumulatora}</span>
        </div>
        {/if}
        {if $Weight}
        <div class="product-info__spec">
            <span class="product-info__spec-label">Вес:</span>
            <span class="product-info__spec-value">{$Weight}</span>
        </div>
        {/if}
        {if $Connection}
        <div class="product-info__spec">
            <span class="product-info__spec-label">Связь:</span>
            <span class="product-info__spec-value">{$Connection}</span>
        </div>
        {/if}
        {if $tip_sim || $kolvo_sim}
        <div class="product-info__spec product-info__spec--inline">
            <span class="product-info__spec-inline">SIM: <span class="product-info__spec-value">{$tip_sim}</span></span>
        </div>
        {/if}
    </div>

    <button class="product-info__all-specs">
        <span>Все характеристики</span>
        <img src="/assets/images/new-icons/iconamoon_arrow-down-2-light.svg" alt="" class="product-info__all-specs-arrow">
    </button>
</div>', 0, 0, 0, '');

-- ============================================================
-- 3. product.compare.btn — Compare button for product page
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (214, 'product.compare.btn', 'Compare button for product page (new design)', '<button class="product-info__compare compare_card comparison comparison-[[+list]][[+added]][[+can_compare]]" data-id="[[+id]]" data-list="[[+list]]" aria-label="Добавить к сравнению">
    <img src="/assets/images/new-icons/compare.svg" alt="">
    <span>В сравнение</span>
</button>', 0, 0, 0, '');

-- ============================================================
-- 4. product.purchase — Price, quantity, cart, 1-click, benefits
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (215, 'product.purchase', 'Product purchase block: price, discount, quantity, cart button, 1-click, benefits', '<div class="product-purchase">
    <div class="product-purchase__price">
        {if $old_price > 0}
        <div class="product-purchase__price-old-row">
            <span class="product-purchase__price-old">{$old_price} руб.</span>
            <span class="product-purchase__discount">-{$old_price - $price}%</span>
        </div>
        {/if}
        <span class="product-purchase__price-current">{$price} руб.</span>

        {if $price > 0}
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
                <input type="hidden" name="id" value="{$_modx->resource.id}">
                <input type="hidden" name="count" value="1">
                <input type="hidden" name="options" value="[]">
                <button type="submit" name="ms2_action" value="cart/add" class="btn btn--primary product-purchase__btn-cart">В корзину</button>
            </form>
        </div>

        <button class="btn btn--gradient-outline product-purchase__btn-oneclick js-quick-order" data-product-id="{$_modx->resource.id}" data-product-title="{$_modx->resource.pagetitle}" data-product-price="{$price}">Купить в 1 клик</button>
        {else}
        <div class="product-purchase__quantity-row">
            <a href="[[~290]]" class="btn btn--primary product-purchase__btn-cart">Узнать цену</a>
        </div>
        {/if}
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
</div>', 0, 0, 0, '');

-- ============================================================
-- 5. product.tab.description — Description tab content
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (216, 'product.tab.description', 'Product description tab pane', '<div class="product-tab-pane product-tab-pane--active" id="description">
    {$_modx->resource.introtext}
    <br><br>
    {$_modx->resource.content}
</div>', 0, 0, 0, '');

-- ============================================================
-- 6. product.tab.specs — Specs accordion with dynamic groups from ms2
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (217, 'product.tab.specs', 'Product specs tab with dynamic accordion from msProductOptionsEx groups', '<div class="product-tab-pane" id="specs">
    <div class="specs-accordion">
        [[!msProductOptionsEx?
            &tpl=`product.specs.group`
            &groupEmptyName=`Прочие`
            &groupSortBy=`id`
        ]]
    </div>
</div>', 0, 0, 0, '');

-- ============================================================
-- 7. product.specs.group — Single accordion group for specs
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (218, 'product.specs.group', 'Single specs accordion group (used by product.tab.specs)', '{foreach $groups as $idx => $group}
<div class="specs-accordion__item{if $idx == 0} specs-accordion__item--open{/if}">
    <button class="specs-accordion__header">
        <span class="specs-accordion__title">{$group.name}</span>
        <img src="/assets/images/new-icons/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
    </button>
    <div class="specs-accordion__content">
        {if $group.options}
        <div class="specs-table">
            {$columns = []}
            {$col1 = []}
            {$col2 = []}
            {$total = count($group.options)}
            {$half = ceil($total / 2)}
            {$i = 0}
            {foreach $group.options as $option}
                {if $option.value is array}
                    {$val = $option.value | join : '', ''}
                {else}
                    {$val = $option.value}
                {/if}
                {if $val}
                    {if $option.measure_unit}
                        {$val = "$val $option.measure_unit"}
                    {/if}
                    {$row = "<div class=\"specs-table__row\"><span class=\"specs-table__label\">$option.caption</span><span class=\"specs-table__value\">$val</span></div>"}
                    {if $i < $half}
                        {$col1[] = $row}
                    {else}
                        {$col2[] = $row}
                    {/if}
                    {$i = $i + 1}
                {/if}
            {/foreach}
            {if $col1}
            <div class="specs-table__column">
                {foreach $col1 as $row}
                    {$row}
                {/foreach}
            </div>
            {/if}
            {if $col2}
            <div class="specs-table__column">
                {foreach $col2 as $row}
                    {$row}
                {/foreach}
            </div>
            {/if}
        </div>
        {else}
        <p class="specs-accordion__empty">Информация о {strtolower($group.name)} появится позже</p>
        {/if}
    </div>
</div>
{/foreach}', 0, 0, 0, '');

-- ============================================================
-- 8. product.tab.reviews — Reviews tab with TicketComments
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (219, 'product.tab.reviews', 'Product reviews tab pane with TicketComments', '<div class="product-tab-pane" id="reviews">
    <div class="product-reviews">
        [[!TicketComments?
            &allowGuest=`1`
            &autoPublish=`0`
            &autoPublishGuest=`0`
            &tplCommentFormGuest=`commentFormTpl`
            &tplCommentGuest=`commentTpl`
            &tplCommentAuth=`commentTpl`
            &tplComments=`commentsWrapperTpl`
            &gravatarSize=`70`
        ]]
    </div>
</div>', 0, 0, 0, '');

-- ============================================================
-- 9. product.similar — Similar products slider
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (220, 'product.similar', 'Similar products slider (by parent category)', '<section class="similar-products">
    <h2 class="section__title">Похожие товары</h2>
    <div class="similar-products__slider-wrapper">
        <div class="swiper similarProductsSwiper">
            <div class="swiper-wrapper">
                [[!msProducts?
                    &parents=`[[*parent]]`
                    &resources=`-[[*id]]`
                    &limit=`8`
                    &tpl=`product.card`
                    &includeTVs=`top_category_uri`
                    &processTVs=`1`
                    &showHidden=`1`
                    &sortby=`RAND()`
                ]]
            </div>
        </div>
        <button class="similar-products-arrow similar-products-arrow--prev" aria-label="Previous">
            <img src="/assets/images/new-icons/slider-arrow-left.svg" alt="">
        </button>
        <button class="similar-products-arrow similar-products-arrow--next" aria-label="Next">
            <img src="/assets/images/new-icons/slider-arrow-right.svg" alt="">
        </button>
    </div>
</section>', 0, 0, 0, '');

-- ============================================================
-- 10. product.viewed — Viewed products slider (looked snippet)
-- ============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (221, 'product.viewed', 'Viewed products slider (looked snippet with product.card)', '<section class="viewed-products">
    <h2 class="section__title">Вы смотрели</h2>
    <div class="viewed-products__slider-wrapper">
        <div class="swiper viewedProductsSwiper">
            <div class="swiper-wrapper">
                [[!looked?
                    &tpl=`product.card`
                    &limit=`8`
                    &includeTVs=`top_category_uri`
                    &processTVs=`1`
                ]]
            </div>
        </div>
        <button class="viewed-products-arrow viewed-products-arrow--prev" aria-label="Previous">
            <img src="/assets/images/new-icons/slider-arrow-left.svg" alt="">
        </button>
        <button class="viewed-products-arrow viewed-products-arrow--next" aria-label="Next">
            <img src="/assets/images/new-icons/slider-arrow-right.svg" alt="">
        </button>
    </div>
</section>', 0, 0, 0, '');

-- ============================================================
-- 11. Update Template 6 (Товар) — new design
-- ============================================================
UPDATE `Modx-BYStoresite_templates`
SET content = '<!DOCTYPE html>\n<html lang="ru">\n<head>\n    [[$meta]]\n</head>\n<body>\n    <div class="wrapper">\n        [[$header]]\n\n        [[$breadcrumbs]]\n\n        <main class="main product-page" data-product-id="[[*id]]">\n            <div class="container">\n                [[!addLooked?\n                &templates=`6`\n                &limit=`15`\n                ]]\n\n                <section class="product-preview">\n                    <h1 class="product-info__title">[[*pagetitle]]</h1>\n\n                    [[!msGallery?\n                    &tpl=`product.gallery`\n                    ]]\n\n                    [[!msProductOptions?\n                    &tpl=`@INLINE`\n                    &limit=`0`\n                    ]]<!-- loads product options for product.info chunk -->\n\n                    [[$product.info]]\n                    [[$product.purchase]]\n                </section>\n\n                <section class="product-tabs-section">\n                    <div class="product-tabs">\n                        <button class="product-tab product-tab--active" data-tab="description">Описание</button>\n                        <button class="product-tab" data-tab="specs">Характеристики</button>\n                        <button class="product-tab" data-tab="reviews">Отзывы (<span id="comment-total">[[+total]]</span>)</button>\n                    </div>\n\n                    <div class="product-tabs-content">\n                        [[$product.tab.description]]\n                        [[$product.tab.specs]]\n                        [[$product.tab.reviews]]\n                    </div>\n                </section>\n\n                [[$product.similar]]\n\n                [[$product.viewed]]\n\n                [[$lead.form.search]]\n            </div>\n        </main>\n\n        [[$quickOrderCardFormTpl]]\n\n        [[$footer]]\n    </div>\n    [[$scripts]]\n</body>\n</html>'
WHERE id = 6;

-- DOWN: Delete new chunks, restore template 6
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `name` IN ('product.gallery', 'product.info', 'product.compare.btn', 'product.purchase', 'product.tab.description', 'product.tab.specs', 'product.specs.group', 'product.tab.reviews', 'product.similar', 'product.viewed');
-- UPDATE `Modx-BYStoresite_templates` SET content = '...' WHERE id = 6;
