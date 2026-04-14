-- UP: Add category_image and category_image_hover TVs to category template (5)
-- These TVs allow setting category images for the main page sections

INSERT INTO `Modx-BYStoresite_tmplvars` (`id`, `type`, `name`, `caption`, `description`, `editor_type`, `category`, `locked`, `elements`, `rank`, `display`, `default_text`, `properties`, `input_properties`, `output_properties`, `static`, `static_file`)
VALUES
    (63, 'image', 'category_image', 'Изображение категории (главная)', 'Изображение для карточки категории на главной странице', 0, 0, 0, NULL, 0, 'default', NULL, NULL, NULL, NULL, 0, ''),
    (64, 'image', 'category_image_hover', 'Изображение при наведении (главная)', 'Изображение для карточки категории при наведении курсора', 0, 0, 0, NULL, 0, 'default', NULL, NULL, NULL, NULL, 0, '');

-- Assign TVs to template 5 (Категория товаров)
INSERT INTO `Modx-BYStoresite_tmplvar_templates` (`tmplvarid`, `templateid`, `rank`)
VALUES
    (63, 5, 0),
    (64, 5, 0);

-- DOWN: Remove TVs
-- DELETE FROM `Modx-BYStoresite_tmplvar_templates` WHERE `tmplvarid` IN (63, 64) AND `templateid` = 5;
-- DELETE FROM `Modx-BYStoresite_tmplvar_contentvalues` WHERE `tmplvarid` IN (63, 64);
-- DELETE FROM `Modx-BYStoresite_tmplvars` WHERE `id` IN (63, 64);
