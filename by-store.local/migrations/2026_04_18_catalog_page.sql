-- UP: Create catalog page chunks and update template 10
-- Based on verstka/catalog.php

-- 1. all.category.card chunk (card for "Все категории" section)
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (210, 'all.category.card', 'Category card for catalog page "All categories" section', '<a href="[[+uri]]" class="all-category-card">
    <img src="[[+tv.category_image:default=`/assets/images/new-images/cat-placeholder.png`]]" alt="[[+pagetitle:htmlent]]" class="all-category-card__image" loading="lazy">
    <div class="all-category-card__content">
        <h3 class="all-category-card__title">[[+pagetitle]]</h3>
        <span class="all-category-card__link">
            Смотреть
            <img src="/assets/images/new-icons/arrow-right.svg" alt="" class="all-category-card__arrow">
        </span>
    </div>
</a>', 0, 0, 0, '');

-- 2. all.categories chunk (section with pdoResources)
INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (211, 'all.categories', 'All categories section on catalog page', '<section class="all-categories">
    <h2 class="section__title">Все категории</h2>
    <div class="all-categories__grid">
        [[!pdoResources?
            &parents=`0`
            &resources=`1143,7079,7116,7261,7284,7301,7275,7276,7530,7450,7307,48`
            &tpl=`all.category.card`
            &includeTVs=`category_image`
            &processTVs=`1`
            &showHidden=`1`
        ]]
    </div>
</section>', 0, 0, 0, '');

-- 3. Switch resource 8 (Каталог, /catalog/) to template 10
UPDATE `Modx-BYStoresite_content` SET template = 10 WHERE id = 8;

-- 4. Update template 10 (Поиск в каталогу) with new design
UPDATE `Modx-BYStoresite_templates`
SET content = '<!DOCTYPE html>\n<html lang="ru">\n<head>\n    [[$meta]]\n</head>\n<body>\n    <div class="wrapper">\n        [[$header]]\n\n        [[$breadcrumbs]]\n\n        <main class="main">\n            <div class="container">\n                <section class="catalog-section">\n                    <h1 class="page-title">Каталог</h1>\n                </section>\n\n                [[$popular.categories]]\n\n                [[$all.categories]]\n            </div>\n        </main>\n\n        [[$quickOrderCardFormTpl]]\n\n        [[$footer]]\n    </div>\n    [[$scripts]]\n</body>\n</html>'
WHERE id = 10;

-- DOWN: Delete new chunks, restore template 10 and resource 8
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `name` IN ('all.category.card', 'all.categories');
-- UPDATE `Modx-BYStoresite_content` SET template = 5 WHERE id = 8;
-- (Template 10 restore: see git history for original content)
