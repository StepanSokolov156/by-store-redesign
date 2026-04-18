-- UP: Create breadcrumbs chunk with new BEM design + pdoCrumbs + JSON-LD structured data
-- Based on verstka/category.php markup

INSERT INTO `Modx-BYStoresite_htmlsnippets`
  (`id`, `name`, `description`, `snippet`, `category`, `cache_type`, `static`, `static_file`)
VALUES
  (209, 'breadcrumbs', 'Breadcrumbs (new design, BEM)', '[[pdoCrumbs?\n    &tplWrapper=`@INLINE <nav class=\"breadcrumbs\" aria-label=\"Breadcrumb\">[[+output]]</nav>`\n    &tpl=`@INLINE <div class=\"breadcrumbs__item\"><a href=\"[[+link]]\" class=\"breadcrumbs__link\">[[+menutitle]]</a></div><div class=\"breadcrumbs__separator\" aria-hidden=\"true\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M6 3L10 8L6 13\" stroke=\"#6d6d6d\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg></div>`\n    &tplCurrent=`@INLINE <div class=\"breadcrumbs__item\"><span class=\"breadcrumbs__current\" aria-current=\"page\">[[+menutitle]]</span></div>`\n    &showHome=`1`\n]]\n\n[[pdoCrumbs?\n    &tplWrapper=`@INLINE <script type=\"application/ld+json\">{\"@context\":\"http://schema.org\",\"@type\":\"BreadcrumbList\",\"itemListElement\":[[[+output]]]}</script>`\n    &tpl=`@INLINE {\"@type\":\"ListItem\",\"position\":[[+idx]],\"item\":{\"@id\":\"[[+link]]\",\"name\":\"[[+menutitle]]\"}},`\n    &tplCurrent=`@INLINE {\"@type\":\"ListItem\",\"position\":[[+idx]],\"item\":{\"@id\":\"[[+link]]\",\"name\":\"[[+menutitle]]\"}}`\n    &showHome=`1`\n]]', 0, 0, 0, '');

-- DOWN: Delete breadcrumbs chunk
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `name` = 'breadcrumbs';
