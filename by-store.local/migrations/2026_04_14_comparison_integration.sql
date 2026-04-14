-- UP: Integrate comparison functionality into new design

-- 1. Create comparison.init chunk (empty output, for session initialization)
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`, `static`, `static_file`)
VALUES (
    201,
    'comparison.init',
    'Скрытый чанк для инициализации сессии сравнения (пустой вывод)',
    '<!-- comparison session init -->',
    0, NULL, 0, ''
);

-- 2. Create comparison.header.counter chunk (just the count number)
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`, `static`, `static_file`)
VALUES (
    202,
    'comparison.header.counter',
    'Счётчик товаров в сравнении для хедера (только число)',
    '[[+count]]',
    0, NULL, 0, ''
);

-- 3. Update product.card chunk — add data-id to compare button
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<div class="swiper-slide" data-category="[[+top_category_uri]]">
    <div class="product-card">
        <div class="product-card__image">
            <img src="[[+image]]" alt="[[+pagetitle]]" loading="lazy">
            <div class="product-card__actions">
                <button class="product-card__favorites msFavoriterToggle" data-id="[[+id]]" aria-label="Добавить в избранное">
                    <img src="/assets/images/new-icons/wishlist.svg" width="20" height="20" alt="">
                </button>
                <button class="product-card__compare" data-id="[[+id]]" aria-label="Добавить к сравнению">
                    <img src="/assets/images/new-icons/compare.svg" width="20" height="20" alt="">
                </button>
            </div>
        </div>
        <div class="product-card__info">
            <h4 class="product-card__title">[[+pagetitle]]</h4>
            <div class="product-card__prices">
                <span class="product-card__price">[[+price]] руб.</span>
                [[+old_price_html]]
            </div>
            <div class="product-card__buttons">
                <button class="btn btn--primary btn--small">В корзину</button>
                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
            </div>
        </div>
    </div>
</div>'
WHERE `id` = 199;

-- 4. Update header chunk — add comparison session init + counter
-- Add addComparison at the start for session initialization
-- Add getComparison in comparison counter spans
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = CONCAT(
    '[[!addComparison?&list=`default`&list_id=`16`&tpl=`comparison.init`&minItems=`2`&maxItems=`0`]]',
    REPLACE(
        REPLACE(
            `snippet`,
            '<span class="header__action-count" id="comparisonCount"></span>',
            '<span class="header__action-count" id="comparisonCount">[[!getComparison?&list=`default`&tpl=`comparison.header.counter`]]</span>'
        ),
        '<span class="header__mobile-action-count" id="comparisonCountMobile"></span>',
        '<span class="header__mobile-action-count" id="comparisonCountMobile">[[!getComparison?&list=`default`&tpl=`comparison.header.counter`]]</span>'
    )
)
WHERE `id` = 27;

-- DOWN
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `id` IN (201, 202);
-- Restore original product.card and header chunks
