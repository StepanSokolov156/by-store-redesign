-- UP: Fix features section — add container wrapper, SVG arrows, match verstka
-- Applied: 2026-04-15

-- 1. features.section (id=185) — add <div class="container">
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="features-section">
    <div class="container">
        <div class="features-section__inner">
            [[$feature.card.apple]]
            <div class="feature-card__divider"></div>
            [[$feature.card.warranty]]
            <div class="feature-card__divider"></div>
            [[$feature.card.delivery]]
        </div>
    </div>
</section>'
WHERE `id` = 185;

-- 2. feature.card.apple (id=186) — add SVG arrow, remove trailing period
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<div class="feature-card">
    <div class="feature-card__icon">
        <img src="/assets/images/new-images/icon/Ogiginal.svg" width="60" height="60" alt="">
    </div>
    <div class="feature-card__content">
        <h3 class="feature-card__title">Оригинальная техника Apple</h3>
        <p class="feature-card__description">Только оригинальная, новая и неактивированная техника Apple</p>
        <a href="[[~233]]" class="feature-card__link">Подробнее
            <svg width="16" height="12" viewBox="0 0 16 12" fill="none">
                <path d="M10 1L15 6L10 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 6H1" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>
    </div>
</div>'
WHERE `id` = 186;

-- 3. feature.card.warranty (id=187) — add SVG arrow, remove trailing period
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<div class="feature-card">
    <div class="feature-card__icon">
        <img src="/assets/images/new-images/icon/garanti.svg" width="60" height="60" alt="">
    </div>
    <div class="feature-card__content">
        <h3 class="feature-card__title">Официальная гарантия</h3>
        <p class="feature-card__description">На всю продукцию предоставляется официальная мировая гарантия Apple</p>
        <a href="[[~233]]" class="feature-card__link">Подробнее
            <svg width="16" height="12" viewBox="0 0 16 12" fill="none">
                <path d="M10 1L15 6L10 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 6H1" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>
    </div>
</div>'
WHERE `id` = 187;

-- 4. feature.card.delivery (id=188) — add SVG arrow, remove trailing period
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<div class="feature-card">
    <div class="feature-card__icon">
        <img src="/assets/images/new-images/icon/delivery.svg" width="60" height="60" alt="">
    </div>
    <div class="feature-card__content">
        <h3 class="feature-card__title">Бесплатная доставка</h3>
        <p class="feature-card__description">Абсолютно бесплатная и быстрая доставка по Минску и всей Беларуси</p>
        <a href="[[~231]]" class="feature-card__link">Подробнее
            <svg width="16" height="12" viewBox="0 0 16 12" fill="none">
                <path d="M10 1L15 6L10 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 6H1" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>
    </div>
</div>'
WHERE `id` = 188;

-- DOWN: Restore old content
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '...' WHERE `id` = 185;
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '...' WHERE `id` IN (186, 187, 188);
