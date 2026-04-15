-- UP: Dynamic brands section — logo paths, show_on_main flag, snippet, chunks
-- Applied: 2026-04-15

-- 1. Set logo paths and show_on_main flag for 6 brands
UPDATE `Modx-BYStorems2_vendors` SET `logo` = '/assets/images/new-images/icon/brand-apple.png', `properties` = '{"show_on_main":1}' WHERE `id` = 1;
UPDATE `Modx-BYStorems2_vendors` SET `logo` = '/assets/images/new-images/icon/brand-samsung.png', `properties` = '{"show_on_main":1}' WHERE `id` = 2;
UPDATE `Modx-BYStorems2_vendors` SET `logo` = '/assets/images/new-images/icon/brand-mi.png', `properties` = '{"show_on_main":1}' WHERE `id` = 5;
UPDATE `Modx-BYStorems2_vendors` SET `logo` = '/assets/images/new-images/icon/brand-poco.png', `properties` = '{"show_on_main":1}' WHERE `id` = 7;
UPDATE `Modx-BYStorems2_vendors` SET `logo` = '/assets/images/new-images/icon/brand-honor.png', `properties` = '{"show_on_main":1}' WHERE `id` = 12;
UPDATE `Modx-BYStorems2_vendors` SET `logo` = '/assets/images/new-images/icon/brand-oneplus.png', `properties` = '{"show_on_main":1}' WHERE `id` = 13;

-- 2. Create getVendors snippet (file-based)
INSERT INTO `Modx-BYStoresite_snippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`, `static`, `static_file`)
VALUES (
    96,
    'getVendors',
    'Выводит бренды с флагом show_on_main из ms2_vendors для секции на главной',
    '',
    0,
    NULL,
    1,
    'core/elements/snippets/snippet.getvendors.php'
);

-- 3. Create brand.card chunk (id=205)
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`)
VALUES (
    205,
    'brand.card',
    'Карточка бренда для слайдера на главной',
    '<a href="#" class="swiper-slide brand-card">
    <img src="[[+logo]]" alt="[[+name]]" loading="lazy">
</a>',
    0
);

-- 4. Update brands.section (id=189) — container + dynamic output
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="brands">
    <div class="container">
        <h2 class="section__title">Бренды</h2>
        <div class="brands-swiper swiper">
            <div class="swiper-wrapper">
                [[!getVendors]]
            </div>
        </div>
    </div>
</section>'
WHERE `id` = 189;

-- DOWN: Restore static placeholder, remove snippet and chunk
-- DELETE FROM `Modx-BYStoresite_snippets` WHERE `id` = 96;
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `id` = 205;
-- UPDATE `Modx-BYStorems2_vendors` SET `logo` = NULL, `properties` = NULL WHERE `id` IN (1,2,5,7,12,13);
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '...' WHERE `id` = 189;
