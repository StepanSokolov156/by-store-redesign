-- UP: Fix hero banner structure — simplify fields
-- Applied: 2026-04-08

-- =============================================================
-- 1. Update MIGX-TV hero_banners — new field structure
-- =============================================================
UPDATE `Modx-BYStoresite_tmplvars` SET `input_properties` = 'a:7:{s:10:"configs";s:12:"hero_banners";s:7:"formtabs";s:620:"[{\"MIGX_id\":1,\"caption\":\"Баннер\",\"fields\":[{\"MIGX_id\":1,\"field\":\"title\",\"caption\":\"Заголовок\",\"description\":\"Полный заголовок. Для градиента оберните текст в <span class=\\\"hero__title-gradient\\\">...<\\/span>\",\"type\":\"textarea\",\"is_required\":1},{\"MIGX_id\":2,\"field\":\"description\",\"caption\":\"Описание\",\"description\":\"\",\"type\":\"textarea\",\"is_required\":0},{\"MIGX_id\":3,\"field\":\"link_text\",\"caption\":\"Текст кнопки\",\"description\":\"\",\"type\":\"textfield\",\"is_required\":0},{\"MIGX_id\":4,\"field\":\"link\",\"caption\":\"Ссылка кнопки\",\"description\":\"\",\"type\":\"textfield\",\"is_required\":0},{\"MIGX_id\":5,\"field\":\"image\",\"caption\":\"Изображение\",\"description\":\"\",\"type\":\"image\",\"is_required\":0}]}]";s:7:"columns";s:272:"[{\"MIGX_id\":1,\"header\":\"Заголовок\",\"dataIndex\":\"title\",\"sortable\":0,\"width\":\"\",\"renderer\":\"\",\"editor\":\"\"},{\"MIGX_id\":2,\"header\":\"Кнопка\",\"dataIndex\":\"link_text\",\"sortable\":0,\"width\":\"\",\"renderer\":\"\",\"editor\":\"\"},{\"MIGX_id\":3,\"header\":\"Картинка\",\"dataIndex\":\"image\",\"sortable\":0,\"width\":\"100\",\"renderer\":\"this.renderImage\",\"editor\":\"\"}]";s:8:"btntext";s:0:"";s:10:"previewurl";s:0:"";s:10:"jsonvarkey";s:0:"";s:19:"autoResourceFolders";s:5:"false";}'
WHERE `name` = 'hero_banners';

-- =============================================================
-- 2. Update hero.banner.slide chunk — match verstka markup exactly
-- =============================================================
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<div class="swiper-slide">
    <div class="hero__slide">
        <div class="hero__content">
            <h1 class="hero__title">[[+title]]</h1>
            [[+description:notempty=`<p class="hero__description">[[+description]]</p>`]]
            [[+link:notempty=`<a href="[[+link]]" class="btn btn--primary">[[+link_text:default=`Смотреть в каталоге`]]</a>`]]
        </div>
        [[+image:notempty=`<div class="hero__image"><img src="[[+image]]" alt="[[+link_text:htmlent:default=`Баннер`]]" loading="lazy"></div>`]]
    </div>
</div>'
WHERE `name` = 'hero.banner.slide';

-- =============================================================
-- DOWN: Restore previous hero banner structure
-- =============================================================
