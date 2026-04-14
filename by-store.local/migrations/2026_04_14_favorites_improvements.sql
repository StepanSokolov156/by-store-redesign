-- UP: Improve msFavoriter plugin — JSON response, resource validation, added flag

-- Update plugin: return structured JSON {success, message, data: {total, added}}
UPDATE `Modx-BYStoresite_plugins` SET `plugincode` = '// msFavoriter

switch($modx->event->name) {
    case "OnPageNotFound":
        if ($_GET["q"] != "msFavoriter") {
            return;
        }

        $response = array("success" => true, "message" => "", "data" => array());

        if (isset($_POST["id"])) {
            $id = (int)$_POST["id"];

            // Validate resource exists
            if (empty($id) || !$modx->getCount("modResource", array("id" => $id, "published" => 1, "deleted" => 0))) {
                $response["success"] = false;
                $response["message"] = "Товар не найден";
            } else {
                if (!isset($_SESSION["msFavoriter"])) {
                    $_SESSION["msFavoriter"] = array();
                }

                if (isset($_SESSION["msFavoriter"][$id])) {
                    // Remove from favorites
                    unset($_SESSION["msFavoriter"][$id]);
                    $response["data"]["added"] = false;
                } else {
                    // Add to favorites
                    $_SESSION["msFavoriter"][$id] = $id;
                    $response["data"]["added"] = true;
                }
            }
        }

        $response["data"]["total"] = isset($_SESSION["msFavoriter"]) ? count($_SESSION["msFavoriter"]) : 0;

        @session_write_close();
        header("Content-Type: application/json");
        echo $modx->toJSON($response);
        exit;
        break;
}'
WHERE `id` = 28;

-- Update product.card chunk: add data-id and msFavoriterToggle class to favorites button
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<div class="swiper-slide" data-category="[[+top_category_uri]]">
    <div class="product-card">
        <div class="product-card__image">
            <img src="[[+image]]" alt="[[+pagetitle]]" loading="lazy">
            <div class="product-card__actions">
                <button class="product-card__favorites msFavoriterToggle" data-id="[[+id]]" aria-label="Добавить в избранное">
                    <img src="/assets/images/new-icons/wishlist.svg" width="20" height="20" alt="">
                </button>
                <button class="product-card__compare" aria-label="Добавить к сравнению">
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
                <button class="btn btn--primary btn--small">В корзину</button>
                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
            </div>
        </div>
    </div>
</div>'
WHERE `id` = 199;

-- DOWN
-- Restore original plugin code
-- UPDATE `Modx-BYStoresite_plugins` SET `plugincode` = '// msFavoriter\n\nswitch($modx->event->name) {\n\tcase ''OnPageNotFound'':\n\t\tswitch($_GET[''q'']){\n\n      // Избранные товары\n      case ''msFavoriter'':\n\n        if (isset($_POST[''id'']))\n\n          if (isset($_SESSION[''msFavoriter''][$_POST[''id'']]))\n            // - Если товар уже есть, удаление\n            unset($_SESSION[''msFavoriter''][$_POST[''id'']]);\n          else\n            // - Если нет, добавление избранного товара\n            $_SESSION[''msFavoriter''][$_POST[''id'']] = $_POST[''id''];\n\n        else\n\n          // - Получение количества избранных товаров\n          if (isset($_SESSION[''msFavoriter'']))\n            echo count($_SESSION[''msFavoriter'']);\n\n      \tdie();\n      \tbreak;\n    }\n}' WHERE `id` = 28;
-- Restore original product.card (remove data-id and msFavoriterToggle)
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '...' WHERE `id` = 199;
