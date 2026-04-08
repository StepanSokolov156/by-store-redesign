-- UP: Create MIGX config record for hero_banners in migx_configs table
-- Applied: 2026-04-08

INSERT INTO `Modx-BYStoremigx_configs` (`name`, `formtabs`, `contextmenus`, `actionbuttons`, `columnbuttons`, `filters`, `extended`, `permissions`, `fieldpermissions`, `columns`, `createdby`, `createdon`, `editedby`, `editedon`, `deleted`, `deletedon`, `deletedby`, `published`, `publishedon`, `publishedby`, `category`)
VALUES ('hero_banners',
'[{"MIGX_id":"1","caption":"Баннер","fields":[{"MIGX_id":"1","field":"title","caption":"Заголовок","description":"Полный заголовок. Для градиента оберните текст в <span class=\"hero__title-gradient\">...<\/span>","type":"textarea","is_required":"1","options":"","value":"","default":"","width":"","source":"","configs":"","config":""},{"MIGX_id":"2","field":"description","caption":"Описание","description":"","type":"textarea","is_required":"0","options":"","value":"","default":"","width":"","source":"","configs":"","config":""},{"MIGX_id":"3","field":"link_text","caption":"Текст кнопки","description":"","type":"textfield","is_required":"0","options":"","value":"","default":"Смотреть в каталоге","width":"","source":"","configs":"","config":""},{"MIGX_id":"4","field":"link","caption":"Ссылка кнопки","description":"","type":"textfield","is_required":"0","options":"","value":"","default":"","width":"","source":"","configs":"","config":""},{"MIGX_id":"5","field":"image","caption":"Изображение","description":"","type":"image","is_required":"0","options":"","value":"","default":"","width":"","source":"","configs":"","config":""}]}]',
'',
'',
'',
'',
'',
'',
'',
'[{"MIGX_id":"1","header":"Заголовок","dataIndex":"title","sortable":"false","width":"","renderer":"","editor":""},{"MIGX_id":"2","header":"Кнопка","dataIndex":"link_text","sortable":"false","width":"","renderer":"","editor":""},{"MIGX_id":"3","header":"Картинка","dataIndex":"image","sortable":"false","width":"100","renderer":"this.renderImage","editor":""}]',
1, NOW(), 1, NOW(), 0, NULL, 0, 1, NOW(), 1, 0);

-- DOWN: Delete MIGX config
-- DELETE FROM `Modx-BYStoremigx_configs` WHERE `name` = 'hero_banners';
