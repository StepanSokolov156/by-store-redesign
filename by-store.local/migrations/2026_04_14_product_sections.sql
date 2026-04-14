-- UP: Create product section chunks and register sectionProducts snippet

-- 1. Register sectionProducts snippet (static, file-based)
INSERT INTO `Modx-BYStoresite_snippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`, `static`, `static_file`)
VALUES (
    93,
    'sectionProducts',
    'Секция товаров на главной с фильтром по категориям. Параметры: &section (1=хиты,2=новинки,3=рекомендуем,4=акции), &title, &filterId, &swiperClass, &prevId, &nextId, &limit',
    '',
    0,
    NULL,
    1,
    'core/elements/snippets/snippet.sectionproducts.php'
);

-- 2. Create product.card chunk (id=199)
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`, `static`, `static_file`)
VALUES (
    199,
    'product.card',
    'Карточка товара для слайдера на главной (с data-category)',
    '<div class="swiper-slide" data-category="[[+top_category_uri]]">\n    <div class="product-card">\n        <div class="product-card__image">\n            <img src="[[+image]]" alt="[[+pagetitle]]" loading="lazy">\n            <div class="product-card__actions">\n                <button class="product-card__favorites" aria-label="Добавить в избранное">\n                    <img src="/assets/images/new-icons/wishlist.svg" width="20" height="20" alt="">\n                </button>\n                <button class="product-card__compare" aria-label="Добавить к сравнению">\n                    <img src="/assets/images/new-icons/compare.svg" width="20" height="20" alt="">\n                </button>\n            </div>\n        </div>\n        <div class="product-card__info">\n            <h4 class="product-card__title">[[+pagetitle]]</h4>\n            <div class="product-card__prices">\n                <span class="product-card__price">[[+price]] руб.</span>\n                [[+old_price_html]]\n            </div>\n            <div class="product-card__buttons">\n                <button class="btn btn--primary btn--small">В корзину</button>\n                <button class="btn btn--outline btn--small">Купить в 1 клик</button>\n            </div>\n        </div>\n    </div>\n</div>',
    0, NULL, 0, ''
);

-- 3. Create product.section chunk (id=200) — wrapper
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`, `static`, `static_file`)
VALUES (
    200,
    'product.section',
    'Обёртка секции товаров на главной (фильтр + слайдер)',
    '<section class="products-section">\n    <div class="container">\n        <div class="products-section__header">\n            <h2 class="section__title">[[+section_title]]</h2>\n            <div class="products-filter-wrapper">\n                <div class="products-filter" id="[[+filter_id]]">\n                    [[+filter_buttons]]\n                </div>\n            </div>\n        </div>\n        <div class="products-slider-wrapper">\n            <button class="products-slider-arrow products-slider-arrow--prev" id="[[+prev_id]]">\n                <img src="/assets/images/new-icons/slider-arrow-left.svg" width="24" height="24" alt="">\n            </button>\n            <div class="products-slider">\n                <div class="swiper [[+swiper_class]]">\n                    <div class="swiper-wrapper">\n                        [[+product_cards]]\n                    </div>\n                    <div class="products-pagination"></div>\n                </div>\n            </div>\n            <button class="products-slider-arrow products-slider-arrow--next" id="[[+next_id]]">\n                <img src="/assets/images/new-icons/slider-arrow-right.svg" width="24" height="24" alt="">\n            </button>\n        </div>\n    </div>\n</section>',
    0, NULL, 0, ''
);

-- 4. Update products.hits (id=180)
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '[[!sectionProducts?\n    &section=`1`\n    &title=`Хиты`\n    &filterId=`hitsFilter`\n    &swiperClass=`hitsSwiper`\n    &prevId=`hitsSliderPrev`\n    &nextId=`hitsSliderNext`\n]]'
WHERE `id` = 180;

-- 5. Update products.new (id=181)
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '[[!sectionProducts?\n    &section=`2`\n    &title=`Новинки`\n    &filterId=`newFilter`\n    &swiperClass=`newSwiper`\n    &prevId=`newSliderPrev`\n    &nextId=`newSliderNext`\n]]'
WHERE `id` = 181;

-- 6. Update products.recommended (id=182)
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '[[!sectionProducts?\n    &section=`3`\n    &title=`Рекомендуем`\n    &filterId=`recommendedFilter`\n    &swiperClass=`recommendedSwiper`\n    &prevId=`recommendedSliderPrev`\n    &nextId=`recommendedSliderNext`\n]]'
WHERE `id` = 182;

-- 7. Update products.sale (id=183)
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '[[!sectionProducts?\n    &section=`4`\n    &title=`Товары по акции`\n    &filterId=`saleFilter`\n    &swiperClass=`saleSwiper`\n    &prevId=`saleSliderPrev`\n    &nextId=`saleSliderNext`\n]]'
WHERE `id` = 183;

-- DOWN
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="products-section" id="hitsSection">...' WHERE `id` IN (180, 181, 182, 183);
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `id` IN (199, 200);
-- DELETE FROM `Modx-BYStoresite_snippets` WHERE `id` = 93;
