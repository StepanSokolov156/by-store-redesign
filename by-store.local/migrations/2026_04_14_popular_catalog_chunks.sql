-- UP: Create popular.category.card and catalog.card chunks, update popular.categories and catalog.section

-- 1. Create popular.category.card chunk (id=197)
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`, `static`, `static_file`)
VALUES (
    197,
    'popular.category.card',
    'Карточка категории для секции "Популярные категории"',
    '<a href="[[+uri]]" class="popular-category-card">\n    <div class="popular-category-card__image-wrap">\n        <img src="[[+category_image:default=`/assets/images/new-images/cat-placeholder.png`]]" alt="[[+pagetitle:htmlent]]" class="popular-category-card__image popular-category-card__image--main" loading="lazy">\n        [[+category_image_hover:notempty=`<img src="[[+category_image_hover]]" alt="[[+pagetitle:htmlent]]" class="popular-category-card__image popular-category-card__image--hover" loading="lazy">`]]\n    </div>\n    <div class="popular-category-card__content">\n        <h3 class="popular-category-card__title">[[+pagetitle]]</h3>\n        <span class="popular-category-card__link">\n            Смотреть\n            <img src="/assets/images/new-icons/arrow-right.svg" alt="" class="popular-category-card__arrow">\n        </span>\n    </div>\n</a>',
    0, NULL, 0, ''
);

-- 2. Create catalog.card chunk (id=198)
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`, `static`, `static_file`)
VALUES (
    198,
    'catalog.card',
    'Карточка для секции "Каталог"',
    '<a href="[[+uri]]" class="catalog-card">\n    <div class="catalog-card__image-wrap">\n        <img src="[[+category_image:default=`/assets/images/new-images/cat-placeholder.png`]]" alt="[[+pagetitle:htmlent]]" class="catalog-card__image catalog-card__image--main" loading="lazy">\n        [[+category_image_hover:notempty=`<img src="[[+category_image_hover]]" alt="[[+pagetitle:htmlent]]" class="catalog-card__image catalog-card__image--hover" loading="lazy">`]]\n    </div>\n    <h3 class="catalog-card__title">[[+pagetitle]]</h3>\n    <span class="catalog-card__link">\n        В каталог\n        <img src="/assets/images/new-icons/arrow-right.svg" alt="" class="catalog-card__arrow">\n    </span>\n</a>',
    0, NULL, 0, ''
);

-- 3. Update popular.categories chunk (id=178)
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="popular-categories">\n    <div class="container">\n        <h2 class="section__title">Популярные категории</h2>\n        <div class="popular-categories__grid">\n            [[!pdoResources?\n                &parents=`0`\n                &resources=`9,20,21,22,24,7442`\n                &tpl=`popular.category.card`\n                &includeTVs=`category_image,category_image_hover`\n                &showHidden=`1`\n            ]]\n        </div>\n    </div>\n</section>'
WHERE `id` = 178;

-- 4. Update catalog.section chunk (id=179)
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="catalog">\n    <div class="container">\n        <h2 class="section__title">Каталог</h2>\n        <div class="catalog__grid">\n            [[!pdoResources?\n                &parents=`0`\n                &resources=`9,20,21,22,7442,24`\n                &tpl=`catalog.card`\n                &includeTVs=`category_image,category_image_hover`\n                &showHidden=`1`\n            ]]\n            <a href="[[~304]]" class="catalog-card catalog-card--wide">\n                <img src="/assets/images/new-images/cat-7.png" alt="Подарочные сертификаты" loading="lazy">\n                <div class="catalog-card__content">\n                    <h3 class="catalog-card__title">Подарочные сертификаты</h3>\n                    <span class="catalog-card__link">Заказать</span>\n                </div>\n            </a>\n        </div>\n        <div class="catalog__footer">\n            <a href="[[~8]]" class="btn btn--primary">Смотреть весь каталог</a>\n        </div>\n    </div>\n</section>'
WHERE `id` = 179;

-- DOWN: Revert chunks
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="popular-categories">\n    <h2 class="section__title">Популярные категории</h2>\n    <div class="popular-categories__grid">\n        <!-- TODO: category cards -->\n    </div>\n</section>' WHERE `id` = 178;
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="catalog">\n    <h2 class="section__title">Каталог</h2>\n    <div class="catalog__grid">\n        <!-- TODO: catalog cards -->\n    </div>\n</section>' WHERE `id` = 179;
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `id` IN (197, 198);
