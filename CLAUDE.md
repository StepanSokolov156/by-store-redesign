# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

Local OSPanel 6 development environment for a Belarusian electronics e-commerce site (**by-store.by**). Three directories:

- **by-store.local/** — MODX Revolution CMS site (production copy, configured for local dev)
- **by-store-verstka/** — Static HTML/CSS/JS frontend mockups (new design to integrate)
- **phpmyadmin/** — phpMyAdmin 5.2.3 (do not modify)

## Task Context

Integrating the new design from `by-store-verstka/` into the existing MODX + miniShop2 site at `by-store.local/`. Current focus: **main page**.

## Local Development Environment

**Stack:** OSPanel 6 (Windows) — Apache + PHP 8.0 + MySQL-8.0

**Domain:** `by-store.local` (OSPanel project config in `.osp/project.ini`, `web_root = {base_dir}`)

**Database:** `modx_local`, user `root`, no password, host `MySQL-8.0`, charset `utf8mb4`, table prefix `Modx-BYStore`

**Key config files (all set to local paths `C:/OSPanel/home/by-store.local/...`):**
- `config.core.php` — `MODX_CORE_PATH`
- `manager/config.core.php` — `MODX_CORE_PATH` for manager
- `connectors/config.core.php` — `MODX_CORE_PATH` for connectors
- `core/config/config.inc.php` — DB credentials, all MODX path constants, DSN

**Cache:** Clear `core/cache/` and `core/cache_/` contents (keep `.htaccess`) after config changes or when debugging.

**OSPanel 6 quirk:** Database host is the module name (`MySQL-8.0`), not `localhost`.

**MySQL CLI:** `/c/OSPanel/modules/MySQL-8.0/bin/mysql.exe -u root -h "MySQL-8.0"`

## Workflow Rules

### 3-Phase Process (MANDATORY)
Every task follows: **Analysis → Plan → Implementation**. Always stop after Plan and wait for user confirmation before writing code.

### Response Format
Always use:
1. **Analysis** — what exists, what needs to change
2. **Plan** — table: Old chunk → New chunk → Action; break into stages
3. **Questions** (if any)
4. *(After confirmation)* Implementation → Commit → Next step

### Git Workflow
- Commit after each logical block, not one big commit
- Format: `feat:`, `fix:`, `refactor:`
- Descriptive messages in Russian or English (consistent within commit)

### Database Changes
- **No SQL dumps** (DB ~1GB)
- All DB changes → SQL migrations in `/migrations/` folder
- Format: `YYYY_MM_DD_action.sql` with `-- UP` and `-- DOWN` sections
- This applies to: TV changes, table modifications, structure changes

## Architecture

### MODX Revolution + miniShop2

Templates use pdoTools (pdoResources, pdoMenu, pdoCrumbs) with Fenom template engine.

**Key snippets:** pdoResources, pdoPage, pdoMenu, pdoCrumbs, msProducts, msMiniCart, msCart, msGallery, msGetOrder, msOrder, msProductOptions

**Key plugins:** ClientConfig, MinifyX, miniShop2 core plugin

**Installed components:** miniShop2, mSearch2, pdoTools, MIGX, Tickets, AjaxForm/FormIt, msImportExport, MinifyX, phpThumbOf, ieYandexMarket, msTelegram, comparison, looked, clientConfig, redirector, jevix, dateago, translit, simplesearch, taglister, frontendmanager

### Chunk Architecture (NEW DESIGN)

- **Atomic:** 1 chunk = 1 responsibility
- **Reusable:** repeated blocks become components
- **No logic/business logic in chunks** — only HTML + Fenom tags
- **No raw SQL in chunks**

Examples: `product.card`, `product.slider`, `category.card`, `hero.banner`, `hero.products`

### Frontend Assets

**Old theme (MediaCenter — Bootstrap 3):**
- `assets/sass/` — SCSS source (`_variables.scss`, `_header.scss`, `_product-item.scss`, etc.)
- `assets/js/` — jQuery 1.10.2, Bootstrap 3, OWL Carousel, Fotorama
- No automated SCSS build pipeline (manual compilation)

**New design assets:**
- `assets/css/new/styles.css` — compiled CSS with CSS custom properties, BEM naming
- `assets/js/new/script.js` — modular JS using `BYStore` namespace (menu, sliders, forms, cart, utils, productPage, categoryFilters, productVariants)

**New design stack (by-store-verstka):** Swiper.js carousels, Ubuntu font, SVG icons in `icon/`, images in `img/`

### .htaccess

Hundreds of 301 redirect rules at the top, followed by standard MODX friendly URL rewrites. Be careful not to break the rewrite rules at the end.

### Database Tool

`_update_main_tpl.php` in project root — PHP script that directly updates database elements (templates, chunks) bypassing the MODX manager. Useful for bulk chunk creation/updates during development.
