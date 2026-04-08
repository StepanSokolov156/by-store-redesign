-- UP: Update main page template (id=1) — new design structure
-- Applied: 2026-04-08

UPDATE `Modx-BYStoresite_templates` SET `content` = '<!DOCTYPE html>
<html lang="ru">
<head>
    [[$meta]]
    <meta name="yandex-verification" content="31e24971caaab9bd" />
    <meta name="google-site-verification" content="o-X7rhEi2yy8_DC8z3RvU-oWC-GUn9KIC-sSr3x7Xds" />
    <meta name="yandex-verification" content="f1d758df5fc9d57b" />
</head>

<body>
    <div class="wrapper">
        [[$header]]

        <main>
            <!-- Hero Section -->
            [[$hero.section]]

            <!-- Popular Categories -->
            [[$popular.categories]]

            <!-- Catalog -->
            [[$catalog.section]]

            <!-- Hits -->
            [[$products.hits]]

            <!-- New Arrivals -->
            [[$products.new]]

            <!-- Recommended -->
            [[$products.recommended]]

            <!-- Sale -->
            [[$products.sale]]

            <!-- Lead Form: Gift -->
            [[$lead.form.gift]]

            <!-- Features -->
            [[$features.section]]

            <!-- Brands -->
            [[$brands.section]]

            <!-- Reviews -->
            [[$reviews.section]]

            <!-- Blog -->
            [[$blog.section]]

            <!-- Lead Form: Search -->
            [[$lead.form.search]]
        </main>

        [[$quickOrderCardFormTpl]]
        [[$feedbackModalFormTpl]]

        [[$footer]]
    </div>

    [[$scripts]]
</body>
</html>
' WHERE `id` = 1;

-- DOWN: Restore old template (stored in git history)
