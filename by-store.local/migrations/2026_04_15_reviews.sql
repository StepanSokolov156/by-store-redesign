-- UP: Reviews section — MIGX config, TV, snippet, chunks, modal form
-- Applied: 2026-04-15

-- 1. MIGX config for reviews
INSERT INTO `Modx-BYStoremigx_configs` (`name`, `formtabs`, `columns`, `contextmenus`, `actionbuttons`, `columnbuttons`, `filters`, `extended`, `permissions`, `fieldpermissions`, `createdby`, `createdon`, `published`)
VALUES (
    'reviews',
    '[{"MIGX_id":"1","caption":"Отзыв","fields":[{"MIGX_id":"1","field":"name","caption":"Имя автора","description":"","description_is_code":"0","inputTV":"","inputTVtype":"textfield","validation":"","configs":"","restrictive_condition":"","display":"","sourceFrom":"config","sources":"","inputOptionValues":"","default":"","useDefaultIfEmpty":"0","pos":"1"},{"MIGX_id":"2","field":"rating","caption":"Оценка (1-5)","description":"","description_is_code":"0","inputTV":"","inputTVtype":"numberfield","validation":"","configs":"","restrictive_condition":"","display":"","sourceFrom":"config","sources":"","inputOptionValues":"","default":"5","useDefaultIfEmpty":"0","pos":"2"},{"MIGX_id":"3","field":"text","caption":"Текст отзыва","description":"","description_is_code":"0","inputTV":"","inputTVtype":"textarea","validation":"","configs":"","restrictive_condition":"","display":"","sourceFrom":"config","sources":"","inputOptionValues":"","default":"","useDefaultIfEmpty":"0","pos":"3"},{"MIGX_id":"4","field":"date","caption":"Дата","description":"Формат: DD.MM.YYYY","description_is_code":"0","inputTV":"","inputTVtype":"textfield","validation":"","configs":"","restrictive_condition":"","display":"","sourceFrom":"config","sources":"","inputOptionValues":"","default":"","useDefaultIfEmpty":"0","pos":"4"}]}]',
    '[{"MIGX_id":"1","header":"Имя","dataIndex":"name","sortable":"false","width":"","renderer":"","editor":""},{"MIGX_id":"2","header":"Оценка","dataIndex":"rating","sortable":"false","width":"80","renderer":"","editor":""},{"MIGX_id":"3","header":"Текст","dataIndex":"text","sortable":"false","width":"","renderer":"","editor":""},{"MIGX_id":"4","header":"Дата","dataIndex":"date","sortable":"false","width":"120","renderer":"","editor":""}]',
    '',
    '',
    '',
    '',
    '',
    '',
    '',
    1, NOW(), 1
);

-- 2. TV reviews_list on template 1 (main page)
INSERT INTO `Modx-BYStoresite_tmplvars` (`id`, `type`, `name`, `caption`, `description`, `editor_type`, `category`, `locked`, `elements`, `rank`, `display`, `default_text`, `input_properties`, `output_properties`, `properties`)
VALUES (
    66,
    'migx',
    'reviews_list',
    'Отзывы на главной',
    'Список отзывов для секции на главной странице (MIGX)',
    0, 0, 0, '', 0, 'default',
    '',
    'a:7:{s:7:"configs";s:7:"reviews";s:8:"formtabs";s:0:"";s:7:"columns";s:0:"";s:7:"btntext";s:0:"";s:10:"previewurl";s:0:"";s:10:"jsonvarkey";s:0:"";s:19:"autoResourceFolders";s:5:"false";}',
    '',
    ''
);

-- 3. Assign TV to template 1
INSERT INTO `Modx-BYStoresite_tmplvar_templates` (`tmplvarid`, `templateid`, `rank`) VALUES (66, 1, 0);

-- 4. Access permissions for TV
INSERT INTO `Modx-BYStoresite_tmplvar_access` (`tmplvarid`, `documentgroup`) VALUES (66, 0);

-- 5. Create getReviews snippet (file-based)
INSERT INTO `Modx-BYStoresite_snippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`, `static`, `static_file`)
VALUES (
    97,
    'getReviews',
    'Выводит отзывы из MIGX TV reviews_list. Параметры: &tvName, &tpl, &limit',
    '',
    0, NULL, 1, 'core/elements/snippets/snippet.getreviews.php'
);

-- 6. Create review.card chunk (id=206)
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`)
VALUES (
    206,
    'review.card',
    'Карточка отзыва для слайдера на главной',
    '<div class="swiper-slide">
    <div class="review-card">
        <div class="review-card__content">
            <div class="review-card__stars">
                [[+stars_html]]
            </div>
            <p class="review-card__text">[[+text]]</p>
        </div>
        <div class="review-card__footer">
            <p class="review-card__author">[[+name]]</p>
            <p class="review-card__date">[[+date]]</p>
        </div>
    </div>
</div>',
    0
);

-- 7. Create reviewFormTpl chunk (id=207) — AjaxForm form for modal
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`)
VALUES (
    207,
    'reviewFormTpl',
    'Форма отзыва для модального окна (AjaxForm &form=)',
    '<form class="review-modal__form af-form" id="reviewForm" method="post">
    <input type="hidden" name="form_type" value="Отзыв с сайта">
    <input type="hidden" name="rating" id="reviewRatingInput" value="">
    <div class="review-modal__fields-inline">
        <div class="form-group">
            <label class="form-label" for="reviewName">Ваше имя <span class="form-label__required">*</span></label>
            <input type="text" id="reviewName" name="name" class="form-input" placeholder="Введите имя" value="[[!fi.name]]" required>
            <span class="form-error">[[+fi.error.name]]</span>
        </div>
        <div class="form-group">
            <label class="form-label" for="reviewEmail">E-mail</label>
            <input type="email" id="reviewEmail" name="email" class="form-input" placeholder="test@gmail.com" value="[[!fi.email]]">
        </div>
    </div>
    <div class="review-modal__rating">
        <div class="review-modal__stars" id="reviewStars">
            <button type="button" class="review-modal__star" data-rating="1">
                <img src="/assets/images/new-icons/star.svg" alt="">
            </button>
            <button type="button" class="review-modal__star" data-rating="2">
                <img src="/assets/images/new-icons/star.svg" alt="">
            </button>
            <button type="button" class="review-modal__star" data-rating="3">
                <img src="/assets/images/new-icons/star.svg" alt="">
            </button>
            <button type="button" class="review-modal__star" data-rating="4">
                <img src="/assets/images/new-icons/star.svg" alt="">
            </button>
            <button type="button" class="review-modal__star" data-rating="5">
                <img src="/assets/images/new-icons/star.svg" alt="">
            </button>
        </div>
        <label class="form-label">Оцените работу нашего магазина <span class="form-label__required">*</span></label>
    </div>
    <div class="form-group">
        <label class="form-label" for="reviewText">Отзыв <span class="form-label__required">*</span></label>
        <textarea id="reviewText" name="review" class="form-textarea" placeholder="Введите текст отзыва" rows="4" required>[[!fi.review]]</textarea>
        <span class="form-error">[[+fi.error.review]]</span>
    </div>
    <div class="review-modal__actions">
        <button type="submit" class="btn btn--primary">Отправить отзыв</button>
        <p class="review-modal__policy">Нажимая кнопку, вы даете согласие на <a href="/politika-konfidentsialnosti/" class="lead-form__link">обработку персональных данных</a></p>
    </div>
</form>',
    0
);

-- 8. Update reviews.section (id=190) — full markup from verstka + modal + AjaxForm
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="reviews">
    <div class="container">
        <div class="reviews__header">
            <h2 class="reviews__title">Отзывы клиентов</h2>
            <div class="reviews__offers">
                <div class="reviews__offer">
                    <p class="reviews__offer-value">100+</p>
                    <p class="reviews__offer-label">Довольных клиентов</p>
                </div>
                <div class="reviews__offer">
                    <p class="reviews__offer-value">200+</p>
                    <p class="reviews__offer-label">Выполненных заказов</p>
                </div>
                <button class="btn btn--primary btn--small reviews__btn" id="openReviewModal">Добавить отзыв</button>
            </div>
        </div>
        <div class="reviews__slider-wrapper">
            <div class="reviewsSwiper swiper">
                <div class="swiper-wrapper">
                    [[!getReviews]]
                </div>
            </div>
            <button class="reviews-slider-arrow reviews-slider-arrow--prev" id="reviewsSliderPrev" aria-label="Previous">
                <img src="/assets/images/new-icons/slider-arrow-left.svg" width="24" height="24" alt="">
            </button>
            <button class="reviews-slider-arrow reviews-slider-arrow--next" id="reviewsSliderNext" aria-label="Next">
                <img src="/assets/images/new-icons/slider-arrow-right.svg" width="24" height="24" alt="">
            </button>
        </div>
    </div>
</section>

<!-- Review Modal -->
<div class="review-modal" id="reviewModal">
    <div class="review-modal__overlay" id="reviewModalOverlay"></div>
    <div class="review-modal__content">
        <button class="review-modal__close" id="reviewModalClose" aria-label="Close modal">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" fill="#1d1d1d"/>
            </svg>
        </button>
        <div class="review-modal__header">
            <h2 class="review-modal__title">Оставить отзыв</h2>
            <p class="review-modal__subtitle">Спасибо, что решили поделиться своим впечатлением о нас</p>
        </div>
        [[!AjaxForm?
        &form=`reviewFormTpl`
        &snippet=`FormIt`
        &hooks=`spam,FormItSaveForm,email,LeadFormTelegramSend`
        &emailSubject=`Отзыв с сайта`
        &emailTo=`bystore.web@gmail.com`
        &validate=`name:required,review:required`
        &validationErrorMessage=`В форме есть ошибки`
        &successMessage=`Спасибо за отзыв! Мы опубликуем его после проверки.`
        ]]
    </div>
</div>'
WHERE `id` = 190;

-- DOWN: Remove all review elements
-- DELETE FROM `Modx-BYStoremigx_configs` WHERE `name` = 'reviews';
-- DELETE FROM `Modx-BYStoresite_tmplvar_templates` WHERE `tmplvarid` = 66;
-- DELETE FROM `Modx-BYStoresite_tmplvar_access` WHERE `tmplvarid` = 66;
-- DELETE FROM `Modx-BYStoresite_tmplvars` WHERE `id` = 66;
-- DELETE FROM `Modx-BYStoresite_snippets` WHERE `id` = 97;
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `id` IN (206, 207);
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '...' WHERE `id` = 190;
