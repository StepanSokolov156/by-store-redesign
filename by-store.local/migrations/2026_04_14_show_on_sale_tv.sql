-- UP: Add show_on_sale TV to product template (6)

INSERT INTO `Modx-BYStoresite_tmplvars` (`id`, `type`, `name`, `caption`, `description`, `editor_type`, `category`, `locked`, `elements`, `rank`, `display`, `default_text`, `properties`, `input_properties`, `output_properties`, `static`, `static_file`)
VALUES
    (65, 'number', 'show_on_sale', 'Показывать в акциях на главной', '1 — выводить в секции "Товары по акции", 0 или пусто — не выводить', 0, 0, 0, NULL, 0, 'default', '0', NULL, NULL, NULL, 0, '');

-- Assign to template 6 (Товар)
INSERT INTO `Modx-BYStoresite_tmplvar_templates` (`tmplvarid`, `templateid`, `rank`)
VALUES (65, 6, 0);

-- DOWN
-- DELETE FROM `Modx-BYStoresite_tmplvar_templates` WHERE `tmplvarid` = 65 AND `templateid` = 6;
-- DELETE FROM `Modx-BYStoresite_tmplvar_contentvalues` WHERE `tmplvarid` = 65;
-- DELETE FROM `Modx-BYStoresite_tmplvars` WHERE `id` = 65;
