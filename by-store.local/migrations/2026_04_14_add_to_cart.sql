-- UP: Wire up "В корзину" button to miniShop2 cart.add

-- 1. Update product.card chunk — wrap В корзину in ms2_form
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
                <form method="post" class="ms2_form">
                    <input type="hidden" name="id" value="[[+id]]">
                    <input type="hidden" name="count" value="1">
                    <input type="hidden" name="options" value="[]">
                    <button type="submit" name="ms2_action" value="cart/add" class="btn btn--primary btn--small">В корзину</button>
                </form>
                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
            </div>
        </div>
    </div>
</div>'
WHERE `id` = 199;

-- 2. Update header — add miniShop2-compatible classes to cart elements
--    (merge into existing class attribute to avoid duplicate class attr)
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = REPLACE(
    REPLACE(
        REPLACE(
            `snippet`,
            'header__action-count" id="cartCount">',
            'header__action-count ms2_total_count" id="cartCount">'
        ),
        'header__cart-price" id="cartPrice">',
        'header__cart-price ms2_total_cost" id="cartPrice">'
    ),
    'header__mobile-action-count" id="cartCountMobile">',
    'header__mobile-action-count ms2_total_count" id="cartCountMobile">'
)
WHERE `id` = 27;

-- DOWN
-- Restore original product.card (plain button without form)
-- Restore original header (remove ms2 classes)
