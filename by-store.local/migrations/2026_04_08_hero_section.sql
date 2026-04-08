-- UP: Create Hero section TVs, chunks, and clean up old slide TVs
-- Applied: 2026-04-08

-- =============================================================
-- 1. TV: hero_show (checkbox) — product template (id=6)
-- =============================================================
INSERT INTO `Modx-BYStoresite_tmplvars` (`name`, `caption`, `description`, `type`, `input_properties`, `output_properties`, `elements`, `rank`, `display`, `default_text`, `properties`, `category`)
VALUES ('hero_show', 'Показывать в слайдере акций', 'Если отмечено, товар будет отображаться в блоке Акция на главной', 'checkbox', '', '', '', 0, 'default', '0', 'a:0:{}', 0);

SET @tv_hero_show = LAST_INSERT_ID();

INSERT INTO `Modx-BYStoresite_tmplvar_access` (`tmplvarid`, `documentgroup`) VALUES (@tv_hero_show, 0);
INSERT INTO `Modx-BYStoresite_tmplvar_templates` (`tmplvarid`, `templateid`, `rank`) VALUES (@tv_hero_show, 6, 0);

-- =============================================================
-- 2. TV: hero_timer_end (date) — main template (id=1)
-- =============================================================
INSERT INTO `Modx-BYStoresite_tmplvars` (`name`, `caption`, `description`, `type`, `input_properties`, `output_properties`, `elements`, `rank`, `display`, `default_text`, `properties`, `category`)
VALUES ('hero_timer_end', 'Таймер акции — дата окончания', 'Дата и время окончания акции для таймера на главной', 'date', 'a:1:{s:12:"allowBlank";s:5:"true";}', '', '', 0, 'default', '', 'a:0:{}', 0);

SET @tv_hero_timer = LAST_INSERT_ID();

INSERT INTO `Modx-BYStoresite_tmplvar_access` (`tmplvarid`, `documentgroup`) VALUES (@tv_hero_timer, 0);
INSERT INTO `Modx-BYStoresite_tmplvar_templates` (`tmplvarid`, `templateid`, `rank`) VALUES (@tv_hero_timer, 1, 0);

-- =============================================================
-- 3. MIGX-TV: hero_banners — main template (id=1)
--    Config is embedded in input_properties
-- =============================================================
INSERT INTO `Modx-BYStoresite_tmplvars` (`name`, `caption`, `description`, `type`, `input_properties`, `output_properties`, `elements`, `rank`, `display`, `default_text`, `properties`, `category`)
VALUES ('hero_banners', 'Баннеры главной страницы', 'Слайдер баннеров в Hero-секции', 'migx',
'a:7:{s:10:"configs";s:12:"hero_banners";s:7:"formtabs";s:637:"[{\"MIGX_id\":1,\"caption\":\"Баннер\",\"fields\":[{\"MIGX_id\":1,\"field\":\"title\",\"caption\":\"Заголовок\",\"description\":\"\",\"type\":\"textfield\",\"is_required\":1},{\"MIGX_id\":2,\"field\":\"title_gradient\",\"caption\":\"Выделенный текст (градиент)\",\"description\":\"\",\"type\":\"textfield\",\"is_required\":0},{\"MIGX_id\":3,\"field\":\"description\",\"caption\":\"Описание\",\"description\":\"\",\"type\":\"textarea\",\"is_required\":0},{\"MIGX_id\":4,\"field\":\"image\",\"caption\":\"Изображение\",\"description\":\"\",\"type\":\"image\",\"is_required\":0},{\"MIGX_id\":5,\"field\":\"link\",\"caption\":\"Ссылка кнопки\",\"description\":\"\",\"type\":\"textfield\",\"is_required\":0}]}]";s:7:"columns";s:272:"[{\"MIGX_id\":1,\"header\":\"Заголовок\",\"dataIndex\":\"title\",\"sortable\":0,\"width\":\"\",\"renderer\":\"\",\"editor\":\"\"},{\"MIGX_id\":2,\"header\":\"Градиент\",\"dataIndex\":\"title_gradient\",\"sortable\":0,\"width\":\"\",\"renderer\":\"\",\"editor\":\"\"},{\"MIGX_id\":3,\"header\":\"Картинка\",\"dataIndex\":\"image\",\"sortable\":0,\"width\":\"100\",\"renderer\":\"this.renderImage\",\"editor\":\"\"}]";s:8:"btntext";s:0:"";s:10:"previewurl";s:0:"";s:10:"jsonvarkey";s:0:"";s:19:"autoResourceFolders";s:5:"false";}',
'', '', 0, 'default', '', 'a:0:{}', 0);

SET @tv_hero_banners = LAST_INSERT_ID();

INSERT INTO `Modx-BYStoresite_tmplvar_access` (`tmplvarid`, `documentgroup`) VALUES (@tv_hero_banners, 0);
INSERT INTO `Modx-BYStoresite_tmplvar_templates` (`tmplvarid`, `templateid`, `rank`) VALUES (@tv_hero_banners, 1, 0);

-- =============================================================
-- 4. Chunks
-- =============================================================

-- hero.banner.slide — atomic slide chunk
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`name`, `description`, `snippet`, `cache_type`, `locked`)
VALUES ('hero.banner.slide', 'Hero banner single slide',
'<div class="swiper-slide">
    <div class="hero__slide">
        <div class="hero__content">
            <h1 class="hero__title">
                [[+title_gradient:notempty=`<span class="hero__title-gradient">[[+title_gradient]]</span> `]]
                [[+title]]
            </h1>
            [[+description:notempty=`<p class="hero__description">[[+description]]</p>`]]
            [[+link:notempty=`<a href="[[+link]]" class="btn btn--primary">Смотреть в каталоге</a>`]]
        </div>
        [[+image:notempty=`<div class="hero__image"><img src="[[+image]]" alt="[[+title:htmlent]]" loading="lazy"></div>`]]
    </div>
</div>', 0, 0);

-- hero.banner — left slider wrapper
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`name`, `description`, `snippet`, `cache_type`, `locked`)
VALUES ('hero.banner', 'Hero banner slider (left)',
'<div class="hero__main">
    <div class="swiper heroMainSwiper">
        <div class="swiper-wrapper">
            [[!getImageList?
            &tvname=`hero_banners`
            &tpl=`hero.banner.slide`
            &docid=`[[*id]]`
            &limit=`0`
            ]]
        </div>
    </div>
</div>', 0, 0);

-- hero.products — right slider with sale products + timer
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`name`, `description`, `snippet`, `cache_type`, `locked`)
VALUES ('hero.products', 'Hero products slider with timer (right)',
'<div class="hero__products">
    <div class="hero__timer-header">
        <h3 class="hero__timer-title">Акция</h3>
        <div class="hero__timer">
            <span>действует:</span>
            [[*hero_timer_end:notempty=`<span class="countdown" data-time="[[!heroTimerEnd? &date=`[[*hero_timer_end]]`]]">[[!heroTimerEnd? &date=`[[*hero_timer_end]]` &format=`text`]]</span>`]]
        </div>
    </div>
    <div class="swiper heroProductsSwiper">
        <div class="swiper-wrapper">
            [[!msProducts?
            &parents=`8`
            &tpl=`hero.product.card`
            &includeTVs=`hero_show`
            &where=`{"hero_show":"1"}`
            &sortby=`publishedon`
            &sortdir=`DESC`
            &limit=`10`
            &showHidden=`0`
            ]]
        </div>
    </div>
</div>', 0, 0);

-- hero.product.card — small product card for hero slider
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`name`, `description`, `snippet`, `cache_type`, `locked`)
VALUES ('hero.product.card', 'Product card for hero sale slider',
'<div class="swiper-slide">
    <div class="product-card product-card--small" data-id="[[+id]]">
        <div class="product-card__image">
            <a href="[[~[[+id]]]]">
                <img src="[[+thumb:default=`[[+image]]`]]" alt="[[+pagetitle:htmlent]]" loading="lazy">
            </a>
            <div class="product-card__actions">
                <button class="product-card__favorites" data-id="[[+id]]" aria-label="Добавить в избранное">
                    <img src="/assets/images/new-images/icon/wishlist.svg" width="20" height="20" alt="">
                </button>
                <button class="product-card__compare" data-id="[[+id]]" aria-label="Добавить к сравнению">
                    <img src="/assets/images/new-images/icon/compare.svg" width="20" height="20" alt="">
                </button>
            </div>
        </div>
        <div class="product-card__info">
            <a href="[[~[[+id]]]]">
                <h4 class="product-card__title">[[+pagetitle]]</h4>
            </a>
            <div class="product-card__prices">
                <span class="product-card__price">[[+price]] руб.</span>
                [[+old_price:gt=`0`:then=`<span class="product-card__price-old">[[+old_price]] руб.</span>`]]
            </div>
            <div class="product-card__buttons">
                <button class="btn btn--primary btn--small ms2_add_to_cart" data-id="[[+id]]">В корзину</button>
            </div>
        </div>
    </div>
</div>', 0, 0);

-- =============================================================
-- 5. Snippet: heroTimerEnd
-- =============================================================
INSERT INTO `Modx-BYStoresite_snippets` (`name`, `description`, `snippet`, `properties`, `cache_type`, `locked`, `moduleguid`, `category`)
VALUES ('heroTimerEnd', 'Calculate seconds remaining until date for countdown timer',
'$date = $modx->getOption(\'date\', $scriptProperties, \'\');
$format = $modx->getOption(\'format\', $scriptProperties, \'seconds\');
if (empty($date)) return \'0\';
$target = strtotime($date);
$now = time();
$diff = max(0, $target - $now);
if ($format === \'text\') {
    $days = floor($diff / 86400);
    $hours = floor(($diff % 86400) / 3600);
    $mins = floor(($diff % 3600) / 60);
    $secs = $diff % 60;
    return $days . \' дн \' . str_pad($hours, 2, \'0\', STR_PAD_LEFT) . \':\' . str_pad($mins, 2, \'0\', STR_PAD_LEFT) . \':\' . str_pad($secs, 2, \'0\', STR_PAD_LEFT);
}
return $diff;',
'a:2:{s:4:"date";s:20:"Дата окончания";s:6:"format";s:28:"Формат: seconds или text";}', 0, 0, '', 0);

-- =============================================================
-- 6. Update hero.section chunk
-- =============================================================
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="hero" id="hero">
    <div class="container">
        <div class="hero__wrapper">
            [[$hero.banner]]
            [[$hero.products]]
        </div>
    </div>
</section>' WHERE `name` = 'hero.section';

-- =============================================================
-- 7. Remove old slide TVs
-- =============================================================
DELETE FROM `Modx-BYStoresite_tmplvar_templates` WHERE `tmplvarid` IN (3,4,9,12,14,17,52,53,54);
DELETE FROM `Modx-BYStoresite_tmplvar_access` WHERE `tmplvarid` IN (3,4,9,12,14,17,52,53,54);
DELETE FROM `Modx-BYStoresite_tmplvar_contentvalues` WHERE `tmplvarid` IN (3,4,9,12,14,17,52,53,54);
DELETE FROM `Modx-BYStoresite_tmplvars` WHERE `id` IN (3,4,9,12,14,17,52,53,54);

-- =============================================================
-- DOWN: Revert all hero changes (see git history)
-- =============================================================
