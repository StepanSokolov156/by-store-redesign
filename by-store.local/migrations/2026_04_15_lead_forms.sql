-- UP: Lead forms — real content, AjaxForm-compatible Telegram hook
-- Applied: 2026-04-15

-- 1. LeadFormTelegramSend snippet (AJAX-compatible, no header()/exit())
INSERT INTO `Modx-BYStoresite_snippets` (`id`, `name`, `description`, `snippet`, `locked`, `properties`)
VALUES (
    95,
    'LeadFormTelegramSend',
    'AJAX-совместимый хук для отправки уведомлений в Telegram из лид-форм. FormIt hook — получает $fields, возвращает true.',
    '<?php\n$name = $fields["name"];\n$phone = $fields["phone"];\n$msg = isset($fields["message"]) ? $fields["message"] : "";\n$label = isset($fields["form_type"]) ? $fields["form_type"] : "Заявка с сайта";\n\n$token = "6161187270:AAFcuZL2PTyTUUv-OR1P4QQuLkFGzJ5u8NU";\n$recipients = array("-870251984", "-1001877565587");\n\n$text = $label . PHP_EOL . "ФИО: " . $name . PHP_EOL . "-----" . PHP_EOL . "Телефон: " . $phone;\nif (!empty($msg)) {\n    $text .= PHP_EOL . "-----" . PHP_EOL . "Сообщение: " . $msg;\n}\n\n$text = urlencode($text);\n\nforeach ($recipients as $id) {\n    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id . "&text=" . $text;\n    $ch = curl_init();\n    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true));\n    curl_exec($ch);\n    curl_close($ch);\n}\n\nreturn true;',
    0,
    NULL
);

-- 2. leadFormGiftTpl chunk — поля формы «Защитное стекло в подарок»
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`)
VALUES (
    203,
    'leadFormGiftTpl',
    'Поля формы для lead.form.gift (AjaxForm &form=)',
    '<form class="lead-form__form af-form" id="leadForm" method="post">\n    <input type="hidden" name="form_type" value="Защитное стекло в подарок">\n    <div class="lead-form__fields-inline">\n        <div class="form-group">\n            <label class="form-label" for="leadName">Ваше имя <span class="form-label__required">*</span></label>\n            <input type="text" id="leadName" name="name" class="form-input" placeholder="Введите имя" value="[[!fi.name]]" required>\n            <span class="form-error">[[+fi.error.name]]</span>\n        </div>\n        <div class="form-group">\n            <label class="form-label" for="leadPhone">Телефон <span class="form-label__required">*</span></label>\n            <input type="tel" id="leadPhone" name="phone" class="form-input" placeholder="+375 (__) ___ -__ - __" value="[[!fi.phone]]" required>\n            <span class="form-error">[[+fi.error.phone]]</span>\n        </div>\n    </div>\n    <div class="form-group">\n        <label class="form-label">Сообщение</label>\n        <div class="form-textarea-wrapper">\n            <textarea class="form-textarea" name="message" placeholder="Введите сообщение" rows="3">[[!fi.message]]</textarea>\n        </div>\n    </div>\n    <div class="lead-form__actions">\n        <button type="submit" class="btn btn--primary btn--form">Отправить заявку</button>\n        <p class="lead-form__policy">Нажимая кнопку, вы даете согласие на <a href="/politika-konfidentsialnosti/" class="lead-form__link">обработку персональных данных</a></p>\n    </div>\n</form>',
    0
);

-- 3. leadFormSearchTpl chunk — поля формы «Не нашли нужный товар?»
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`)
VALUES (
    204,
    'leadFormSearchTpl',
    'Поля формы для lead.form.search (AjaxForm &form=)',
    '<form class="lead-form__form af-form" id="leadForm2" method="post">\n    <input type="hidden" name="form_type" value="Поиск товара">\n    <div class="lead-form__fields-inline">\n        <div class="form-group">\n            <label class="form-label" for="lead2Name">Ваше имя <span class="form-label__required">*</span></label>\n            <input type="text" id="lead2Name" name="name" class="form-input" placeholder="Введите имя" value="[[!fi.name]]" required>\n            <span class="form-error">[[+fi.error.name]]</span>\n        </div>\n        <div class="form-group">\n            <label class="form-label" for="lead2Phone">Телефон <span class="form-label__required">*</span></label>\n            <input type="tel" id="lead2Phone" name="phone" class="form-input" placeholder="+375 (__) ___ -__ - __" value="[[!fi.phone]]" required>\n            <span class="form-error">[[+fi.error.phone]]</span>\n        </div>\n    </div>\n    <div class="form-group">\n        <label class="form-label">Сообщение</label>\n        <div class="form-textarea-wrapper">\n            <textarea class="form-textarea" name="message" placeholder="Введите сообщение" rows="3">[[!fi.message]]</textarea>\n        </div>\n    </div>\n    <div class="lead-form__actions">\n        <button type="submit" class="btn btn--primary btn--form">Отправить заявку</button>\n        <p class="lead-form__policy">Нажимая кнопку, вы даете согласие на <a href="/politika-konfidentsialnosti/" class="lead-form__link">обработку персональных данных</a></p>\n    </div>\n</form>',
    0
);

-- 4. Update lead.form.gift (id=184) — обёртка секции из верстки + AjaxForm
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="lead-form">\n    <div class="container">\n        <div class="lead-form__inner">\n            <div class="lead-form__info">\n                <h2 class="lead-form__title">Защитное стекло в подарок</h2>\n                <p class="lead-form__description">Заботьтесь о защите экрана с первого дня — мы дарим стекло при покупке телефона</p>\n            </div>\n            [[!AjaxForm?\n            &form=`leadFormGiftTpl`\n            &snippet=`FormIt`\n            &hooks=`spam,FormItSaveForm,email,LeadFormTelegramSend`\n            &emailSubject=`Заявка на защитное стекло`\n            &emailTo=`bystore.web@gmail.com`\n            &validate=`name:required,phone:required`\n            &validationErrorMessage=`В форме есть ошибки`\n            &successMessage=`Ваша заявка отправлена! Мы свяжемся с вами в ближайшее время.`\n            ]]\n        </div>\n    </div>\n</section>'
WHERE `id` = 184;

-- 5. Update lead.form.search (id=192) — обёртка секции (alt variant) + AjaxForm
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="lead-form lead-form--alt">\n    <div class="container">\n        <div class="lead-form__inner">\n            <div class="lead-form__info">\n                <h2 class="lead-form__title">Не нашли нужный товар?</h2>\n                <p class="lead-form__description">Свяжитесь с нами и мы поможем найти нужный товар или предложим альтернативу</p>\n            </div>\n            [[!AjaxForm?\n            &form=`leadFormSearchTpl`\n            &snippet=`FormIt`\n            &hooks=`spam,FormItSaveForm,email,LeadFormTelegramSend`\n            &emailSubject=`Поиск товара`\n            &emailTo=`bystore.web@gmail.com`\n            &validate=`name:required,phone:required`\n            &validationErrorMessage=`В форме есть ошибки`\n            &successMessage=`Ваша заявка отправлена! Мы свяжемся с вами в ближайшее время.`\n            ]]\n        </div>\n    </div>\n</section>'
WHERE `id` = 192;

-- DOWN: Remove snippet and form chunks, restore placeholder stubs
-- DELETE FROM `Modx-BYStoresite_snippets` WHERE `id` = 94;
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `id` IN (203, 204);
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '...old placeholder...' WHERE `id` = 184;
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '...old placeholder...' WHERE `id` = 192;
