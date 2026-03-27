# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

Local OSPanel 6 development environment for a Belarusian electronics e-commerce site (**by-store.by**). Three directories:

- **by-store.local/** — MODX Revolution CMS site (production copy, now configured for local dev)
- **by-store-verstka/** — Static HTML/CSS/JS frontend mockups (new design to integrate)
- **phpmyadmin/** — phpMyAdmin 5.2.3 (do not modify)

## Local Development Environment

**Stack:** OSPanel 6 (Windows) — Apache + PHP 8.0 + MySQL-8.0

**Domain:** `by-store.local` (OSPanel project config in `.osp/project.ini`, `web_root = {base_dir}`)

**Database:** `bystorelocal`, user `root`, no password, host `MySQL-8.0`, charset `utf8mb4`, table prefix `Modx-BYStore`

**Key config files (all already set to local paths `C:/OSPanel/home/by-store.local/...`):**
- `config.core.php` — `MODX_CORE_PATH`
- `manager/config.core.php` — `MODX_CORE_PATH` for manager
- `connectors/config.core.php` — `MODX_CORE_PATH` for connectors
- `core/config/config.inc.php` — DB credentials, all MODX path constants, DSN

**Cache:** Clear `core/cache/` and `core/cache_/` contents (keep `.htaccess`) after config changes or when debugging.

**OSPanel 6 quirk:** Database host is the module name (`MySQL-8.0`), not `localhost`.

## Architecture

### by-store.local (MODX Revolution + miniShop2)

MODX Revolution CMS with miniShop2 e-commerce. Templates use pdoTools (pdoResources, pdoMenu, pdoCrumbs).

**Installed components (assets/components & core/components):**
- **miniShop2** — Products, cart, orders
- **mSearch2** — Faceted product search/filtering
- **pdoTools** — Fast PDO-based templating
- **MIGX** — Custom TV manager for flexible content fields
- **Tickets** — Blog/comments
- **AjaxForm / FormIt** — Form handling and validation
- **msImportExport** — Product import/export (CSV/Excel)
- **minifyX** — CSS/JS minification (SCSS, LESS, CoffeeScript)
- **phpThumbOf** — Server-side image thumbnails
- **ieYandexMarket** — Yandex.Market product feeds
- **msTelegram** — Telegram bot integration
- **comparison** / **looked** — Product comparison and recently viewed
- **clientConfig** / **redirector** / **jevix** / **dateago** / **translit** / **simplesearch** / **taglister** / **frontendmanager**

**Frontend assets:**
- `assets/js/` — jQuery 1.10.2, Bootstrap, OWL Carousel, Fotorama, custom scripts
- `assets/css/` — Bootstrap-based, Font Awesome
- `assets/sass/` — SCSS source organized by component (`_header.scss`, `_product-item.scss`, `_page-cart.scss`, etc.)
- `assets/templates/` — MODX frontend templates

**Data files in root:** `yml_catalog.yml` (Yandex.Market feed), `sitemap.xml`, `robots.txt`, `pobd0.include.php` (FraudFilter)

**`.htaccess`:** Hundreds of 301 redirect rules at the top, followed by standard MODX friendly URL rewrites. Be careful not to break the rewrite rules at the end.

### by-store-verstka (New Design Mockups)

Static HTML pages (`.php` extension but no PHP logic). No build tools.

**Pages:** `index.php`/`main-page.php` (homepage), `catalog.php`, `category.php`, `product.php`, `header.php`, `footer.php`, `tradein.php`

**Stack:** Swiper.js carousels, Ubuntu font, SVG icons in `icon/`, images in `img/`

## Task Context

The goal is to integrate the new design from `by-store-verstka/` into the existing MODX + miniShop2 site at `by-store.local/`.
