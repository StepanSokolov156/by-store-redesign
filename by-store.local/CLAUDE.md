# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

MODX Revolution + miniShop2 e-commerce site for **by-store.by** (Belarusian electronics retailer). Integrating a new design from `../by-store-verstka/` (static PHP mockups) into this MODX site. Main page integration is **largely complete**; next pages TBD.

## Common Commands

### Cache
```bash
# Clear MODX cache (keep .htaccess)
rm -rf core/cache/* core/cache_/*
```

### Database
```bash
# MySQL CLI (host is OSPanel module name, NOT localhost)
/c/OSPanel/modules/MySQL-8.0/bin/mysql.exe -u root -h "MySQL-8.0" modx_local

# Apply a single migration
/c/OSPanel/modules/MySQL-8.0/bin/mysql.exe -u root -h "MySQL-8.0" modx_local < migrations/YYYY_MM_DD_action.sql

# Apply all migrations for a date (e.g., Apr 14)
for f in migrations/2026_04_14_*.sql; do /c/OSPanel/modules/MySQL-8.0/bin/mysql.exe -u root -h "MySQL-8.0" modx_local < "$f"; done

# Quick query
/c/OSPanel/modules/MySQL-8.0/bin/mysql.exe -u root -h "MySQL-8.0" modx_local -e "SELECT id,name FROM \`Modx-BYStoresite_htmlsnippets\` WHERE name LIKE 'product%';"
```

### URLs
- Site: `http://by-store.local/`
- Manager: `http://by-store.local/manager/`
- phpMyAdmin: `http://localhost/openserver/phpmyadmin/`

### Git
- Commit format: `feat:`, `fix:`, `refactor:` — descriptive messages (Russian or English, consistent within commit)
- Commit after each logical block, not one big commit

## Stack & Environment

**OSPanel 6** (Windows) — Apache + PHP 8.0 + MySQL-8.0. Domain: `by-store.local`.

**Database:** `modx_local`, user `root`, no password, host `MySQL-8.0`, charset `utf8mb4`, table prefix `Modx-BYStore` (contains a **hyphen** — must be backtick-quoted in SQL: `` `Modx-BYStore` ``).

**No build system.** No package.json, no bundler, no SCSS compilation pipeline. CSS/JS are hand-written or compiled manually.

## Workflow Rules

### Integration Approach (MANDATORY)
**Берём верстку из `../by-store-verstka/` и внедряем в неё динамические данные.** Не переписываем HTML-структуру, не придумываем свою разметку. Исходная верстка — source of truth для HTML/CSS. Мы только заменяем статический контент на Fenom/MODX теги, выносим повторяющиеся блоки в чанки и подключаем сниппеты для выборки данных.

### 3-Phase Process (MANDATORY)
Every task: **Analysis → Plan → Implementation**. Stop after Plan, wait for user confirmation before writing code.

Response format:
1. **Analysis** — what exists, what needs to change
2. **Plan** — table: Old chunk → New chunk → Action; break into stages
3. **Questions** (if any)
4. *(After confirmation)* Implementation → Commit → Next step

### Database Changes
- **No SQL dumps** (DB ~1GB)
- All DB changes → `migrations/` folder, format: `YYYY_MM_DD_action.sql`
- Each migration has `-- UP` (apply) and `-- DOWN` (commented rollback)
- This applies to: TV changes, table modifications, structure changes

## Architecture

### MODX Elements Are Database-Stored
Templates, chunks, snippets, and plugins live in the **database**, not as files. They are managed via:
- **Migrations** in `migrations/` — SQL INSERT/UPDATE on `modx_site_templates`, `modx_site_htmlsnippets`, etc. (always with `Modx-BYStore` prefix)
- **`_update_main_tpl.php`** (gitignored) — PHP script for bulk chunk creation via PDO (superseded by migrations)

Exception: custom PHP snippets live as files in `core/elements/snippets/`:
- `snippet.gettopparent.php` — traverses parent chain to find top-level category
- `snippet.sectionfilter.php` — generates category filter buttons for homepage product sections
- `snippet.sectionproducts.php` — product listing for homepage sections (hits, new, sale, recommended)
- `snippet.mscartstatus.php` — miniShop2 cart status/count for header
- `snippet.getreviews.php` — reads MIGX TV `reviews_list`, outputs via `review.card` chunk
- `snippet.getvendors.php` — queries `ms2_vendors` with `show_on_main` flag, outputs via `brand.card` chunk

### Template System
Templates use **pdoTools** with **Fenom** template engine. Two syntaxes coexist:
- **MODX tags:** `[[+id]]`, `[[~[[+id]]]]`, `[[+$tv_name]]` (legacy, still used in some chunks)
- **Fenom tags:** `{$id}`, `{$price}`, `{$pagetitle}`, `{$id | url}` (preferred in new chunks)

### Main Page Template (ID 1) — Chunk Composition
```
[[$meta]]
[[$header]]
[[$hero.section]]
[[$popular.categories]]
[[$catalog.section]]
[[$products.hits]]
[[$products.new]]
[[$products.recommended]]
[[$products.sale]]
[[$lead.form.gift]]
[[$features.section]]
[[$brands.section]]
[[$reviews.section]]
[[$blog.section]]
[[$lead.form.search]]
        </main>

        [[$quickOrderCardFormTpl]]

        [[$footer]]
    </div>

    [[$scripts]]
```

### Chunk Architecture (New Design)
- **Atomic:** 1 chunk = 1 responsibility (e.g., `hero.banner`, `hero.products`, `product.card`)
- **Reusable:** repeated blocks become shared components
- **No logic in chunks** — only HTML + Fenom/MODX tags, no raw SQL

### MIGX TVs
`hero_banners` TV on the main page uses MIGX (multi-item grid) with config stored in `migx_configs` table. Banner data includes: image, title, subtitle, link, subtitle gradient flag.

### Key Components
| Component | Package | Purpose |
|-----------|---------|---------|
| miniShop2 | minishop2 | Products, cart, orders |
| pdoTools | pdotools | pdoResources, pdoMenu, pdoCrumbs + Fenom |
| mSearch2 | msearch2 | Full-text search, mFilter2 |
| MIGX | migx | Multi-item TVs (hero banners) |
| AjaxForm | ajaxform | AJAX form submission |
| MinifyX | minifyx | CSS/JS minification |
| ClientConfig | clientconfig | Site-wide settings |

### Frontend Assets — Two Parallel Systems

**Old theme (MediaCenter, Bootstrap 3):**
- `assets/css/style.css` (184KB), `assets/js/scripts.js` (27KB)
- jQuery 1.10.2, OWL Carousel, Fotorama
- `assets/sass/` — SCSS source (no build pipeline, legacy artifact)

**New design:**
- `assets/css/new/styles.css` — CSS custom properties, BEM naming, desktop-first responsive
- `assets/css/new/styles-components.css` — reusable component library
- `assets/js/new/script.js` — `BYStore` namespace (see below)
- External CDN only: Swiper 11, Google Fonts (Ubuntu)
- Icons: `assets/images/new-icons/` (SVG), images: `assets/images/new-images/`

**BYStore JS namespace** (`assets/js/new/script.js`):
```
BYStore.config (breakpoints: 480/768/1024)
BYStore.state  (mobileMenu, cart, reviewRating)
BYStore.menu         — header scroll, mobile menu, submenus
BYStore.sliders      — all Swiper instances + product filtering
BYStore.cart         — favorites, compare, add-to-cart animation
BYStore.forms        — validation, review modal, phone formatting
BYStore.productPage  — gallery, variant chips, tabs, specs accordion
BYStore.categoryFilters — filter sidebar, range sliders, grid/list toggle
BYStore.productVariants — variant selection on cards
BYStore.utils        — debounce, IntersectionObserver animations, smooth scroll
```

### .htaccess
Hundreds of 301 SEO redirects at the top, MODX friendly URL rewrites at the bottom. Never modify the rewrite rules block at the end.

### Migrations Applied So Far
| Date | Count | Scope |
|------|-------|-------|
| 2026-04-08 | 9 | Header, meta, footer, hero (MIGX), main template, search, placeholder chunks |
| 2026-04-14 | 7 | Category image TVs, popular catalog, product sections, add-to-cart, favorites, comparison, show-on-sale TV |
| 2026-04-15 | 7 | Blog, dynamic brands, features fix, MIGX reviews, lead forms, quick order, reviews section |
| 2026-04-18 | 2 | Fix new slider classes, remove feedback modal |

`migrations/modx_local_dump.sql` is a full DB snapshot (41MB), not an incremental migration — used for fresh environment setup only.

### Known Gotchas
- **DB table prefix has a hyphen:** `Modx-BYStore` — always backtick-quoted in SQL
- **DB host is module name:** `MySQL-8.0`, not `localhost`
- **Duplicate icon directory:** `assets/images/new-images/icon/` mirrors `assets/images/new-icons/` (identical files)
- **Stray files in root:** product/blog images (iphone-17.jpg, poco-*.png, etc.) and temp SQL scripts sit at the webroot instead of `assets/images/` — don't add more
- **`pobd0.include.php`** at root — unknown provenance, do not modify
- **Old and new CSS/JS coexist:** both systems load on the same pages during the transition; style conflicts are expected

## Reference: Verstka Mockups

`../by-store-verstka/` contains static PHP pages (no framework, no build tools):
- Pages: `index.php`, `catalog.php`, `category.php`, `product.php`, `tradein.php`
- Shared: `header.php`, `footer.php`
- Assets: `styles.css` (6587 lines), `script.js` (1956 lines), `icon/`, `img/`
- BEM naming throughout, Swiper carousels, CSS custom properties design tokens
- This is the **source of truth** for the new design — reference it when implementing chunks

## Deployment

See `DEPLOY.md` for full setup instructions (OSPanel install, DB import, config files, migration execution).
