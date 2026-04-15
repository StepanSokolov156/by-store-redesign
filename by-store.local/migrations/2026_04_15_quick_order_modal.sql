-- =============================================
-- Quick Order Modal (Купить в 1 клик)
-- =============================================
-- UP

-- 1. Update quickOrderCardFormTpl (ID 161) — modal wrapper with AjaxForm call
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<div class="quick-order-modal" id="quickOrderModal">
    <div class="quick-order-modal__overlay" id="quickOrderModalOverlay"></div>
    <div class="quick-order-modal__content">
        <button class="quick-order-modal__close" id="quickOrderModalClose" aria-label="Close modal">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" fill="#1d1d1d"/>
            </svg>
        </button>
        <div class="quick-order-modal__header">
            <h2 class="quick-order-modal__title">Быстрый заказ</h2>
            <p class="quick-order-modal__product-title" id="quickOrderProductTitle"></p>
        </div>
        <div class="quick-order-modal__product-price" id="quickOrderProductPrice">
            <span></span>
        </div>
        [[!AjaxForm?
        &form=`quickOrderFormTpl`
        &snippet=`FormIt`
        &hooks=`spam,FormItSaveForm,email,LeadFormTelegramSend`
        &emailSubject=`Заказ в 1 клик — by-store.by`
        &emailTo=`bystore.web@gmail.com`
        &validate=`name:required,phone:required`
        &validationErrorMessage=`В форме есть ошибки`
        &successMessage=`Ваша заявка отправлена! Мы свяжемся с вами в ближайшее время.`
        ]]
    </div>
</div>'
WHERE `id` = 161;

-- 2. Update quickOrderFormTpl (ID 160) — form fields for AjaxForm &form=
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<form class="quick-order-modal__form af-form" id="quickOrderForm" method="post">
    <input type="hidden" name="form_type" value="Заказ в 1 клик">
    <input type="hidden" name="pagetitle" id="quickOrderPagetitle" value="">
    <input type="hidden" name="price" id="quickOrderPrice" value="">
    <div class="quick-order-modal__fields-inline">
        <div class="form-group">
            <label class="form-label" for="quickOrderName">Ваше имя <span class="form-label__required">*</span></label>
            <input type="text" id="quickOrderName" name="name" class="form-input" placeholder="Введите имя" value="[[!fi.name]]" required>
            <span class="form-error">[[+fi.error.name]]</span>
        </div>
        <div class="form-group">
            <label class="form-label" for="quickOrderPhone">Телефон <span class="form-label__required">*</span></label>
            <input type="tel" id="quickOrderPhone" name="phone" class="form-input" placeholder="+375 (__) ___-__-__" value="[[!fi.phone]]" required>
            <span class="form-error">[[+fi.error.phone]]</span>
        </div>
    </div>
    <div class="form-group">
        <label class="form-label" for="quickOrderComment">Комментарий</label>
        <textarea id="quickOrderComment" name="message" class="form-textarea" placeholder="Комментарий к заказу" rows="3">[[!fi.message]]</textarea>
    </div>
    <div class="quick-order-modal__actions">
        <button type="submit" class="btn btn--primary">Отправить</button>
        <p class="quick-order-modal__policy">Нажимая кнопку, вы даете согласие на <a href="/politika-konfidentsialnosti/">обработку персональных данных</a></p>
    </div>
</form>'
WHERE `id` = 160;

-- 3. Update product.card (ID 199) — add data attributes to "Купить в 1 клик" button
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
                <button class="btn btn--outline btn--small js-quick-order" data-product-id="[[+id]]" data-product-title="[[+pagetitle]]" data-product-price="[[+price]]">Купить в 1 клик</button>
            </div>
        </div>
    </div>
</div>'
WHERE `id` = 199;

-- 4. Update LeadFormTelegramSend (ID 95) — add pagetitle/price support
UPDATE `Modx-BYStoresite_snippets` SET `snippet` = '<?php
$name = $fields["name"];
$phone = $fields["phone"];
$msg = isset($fields["message"]) ? $fields["message"] : "";
$label = isset($fields["form_type"]) ? $fields["form_type"] : "Заявка с сайта";
$pagetitle = isset($fields["pagetitle"]) ? $fields["pagetitle"] : "";
$price = isset($fields["price"]) ? $fields["price"] : "";

$token = "6161187270:AAFcuZL2PTyTUUv-OR1P4QQuLkFGzJ5u8NU";
$recipients = array("-870251984", "-1001877565587");

$text = $label . PHP_EOL . "ФИО: " . $name . PHP_EOL . "-----" . PHP_EOL . "Телефон: " . $phone;

if (!empty($pagetitle)) {
    $text .= PHP_EOL . "-----" . PHP_EOL . "Товар: " . $pagetitle;
}

if (!empty($price)) {
    $text .= PHP_EOL . "Цена: " . $price . " руб.";
}

if (!empty($msg)) {
    $text .= PHP_EOL . "-----" . PHP_EOL . "Сообщение: " . $msg;
}

$text = urlencode($text);

foreach ($recipients as $id) {
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id . "&text=" . $text;
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true));
    curl_exec($ch);
    curl_close($ch);
}

return true;'
WHERE `id` = 95;

-- DOWN
-- Restore old quickOrderCardFormTpl (ID 161) content if needed
-- Restore old quickOrderFormTpl (ID 160) content if needed
-- Restore old product.card (ID 199) from migration 2026_04_14_add_to_cart.sql
-- Restore old LeadFormTelegramSend (ID 95) from migration 2026_04_15_lead_forms.sql
