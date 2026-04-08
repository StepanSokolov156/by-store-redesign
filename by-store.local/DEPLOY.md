# Развёртывание by-store.local на новом компьютере

## Требования

- Windows 10+
- OSPanel 6 (https://ospanel.io/)
- Модули: Apache, PHP 8.0, MySQL-8.0

## Шаг 1. Установка OSPanel

1. Установить OSPanel 6
2. Запустить, дождаться старта
3. В настройках модулей убедиться, что активны:
   - **Apache** (любая версия)
   - **PHP 8.0** (или выше)
   - **MySQL-8.0**

## Шаг 2. Создание домена

1. OSPanel → "Домены" → "Добавить"
2. Домен: `by-store.local`
3. Папка: `C:/OSPanel/home/by-store.local/` (корень проекта)
4. Сохранить

## Шаг 3. Клонирование репозитория

```bash
cd C:\OSPanel\home
git clone https://github.com/StepanSokolov156/by-store-redesign.git by-store.local
```

> Если папка уже существует — удалить и клонировать заново.

## Шаг 4. База данных

### 4.1. Создание базы

Открыть phpMyAdmin (`http://localhost/openserver/phpmyadmin/`) или консоль:

```bash
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" -e "CREATE DATABASE modx_local CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;"
```

### 4.2. Импорт дампа

Дамп БД нужно получить отдельно (файл `bystorelocal.sql` не в репозитории — он ~1GB).

```bash
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < bystorelocal.sql
```

Или через phpMyAdmin: вкладка "Импорт" → выбрать файл дампа → выполнить.

### 4.3. Проверка

```bash
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local -e "SELECT COUNT(*) FROM Modx-BYStoresite_content;"
```

Должно вернуть число > 0.

## Шаг 5. Конфигурация MODX

Отредактировать **4 файла**, заменив пути на актуальные:

### 5.1. config.core.php (корень сайта)

```php
<?php
define('MODX_CORE_PATH', 'C:/OSPanel/home/by-store.local/core/');
```

### 5.2. manager/config.core.php

```php
<?php
define('MODX_CORE_PATH', 'C:/OSPanel/home/by-store.local/core/');
```

### 5.3. connectors/config.core.php

```php
<?php
define('MODX_CORE_PATH', 'C:/OSPanel/home/by-store.local/core/');
```

### 5.4. core/config/config.inc.php

```php
$database_type = 'mysql';
$database_server = 'MySQL-8.0';
$database_user = 'root';
$database_password = '';
$database_connection_charset = 'utf8mb4';
$dbase = 'modx_local';
$table_prefix = 'Modx-BYStore';
$database_dsn = 'mysql:host=MySQL-8.0;dbname=modx_local;charset=utf8mb4';

$modx_core_path = 'C:/OSPanel/home/by-store.local/core/';
$modx_processors_path = 'C:/OSPanel/home/by-store.local/core/model/modx/processors/';
$modx_connectors_path = 'C:/OSPanel/home/by-store.local/connectors/';
$modx_connectors_url = '/connectors/';
$modx_manager_path = 'C:/OSPanel/home/by-store.local/manager/';
$modx_manager_url = '/manager/';
$modx_base_url = '/';
$modx_assets_url = '/assets/';
$modx connectors_url = '/connectors/';
$modx_base_path = 'C:/OSPanel/home/by-store.local/';

$site_sessionname = 'SN643aa33558634';
$https_port = '443';
```

> **Важно:** хост БД — `MySQL-8.0` (имя модуля OSPanel), НЕ `localhost`.

## Шаг 6. Очистка кэша

Удалить содержимое папок (с сохранить `.htaccess` если есть):

```
core/cache/
core/cache_/
```

## Шаг 7. Применение миграций

Миграции находятся в `migrations/`. Применять по порядку:

```bash
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < migrations/2026_04_08_update_header_meta_scripts.sql
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < migrations/2026_04_08_update_header_menu.sql
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < migrations/2026_04_08_update_search_form.sql
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < migrations/2026_04_08_update_footer.sql
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < migrations/2026_04_08_update_main_template.sql
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < migrations/2026_04_08_create_placeholder_chunks.sql
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < migrations/2026_04_08_hero_section.sql
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < migrations/2026_04_08_fix_hero_banners.sql
"C:\OSPanel\modules\MySQL-8.0\bin\mysql.exe" -u root -h "MySQL-8.0" modx_local < migrations/2026_04_08_fix_migx_config.sql
```

> Если при импорте дампа БД уже содержит все эти изменения (дамп сделан после миграций), этот шаг можно пропустить.

## Шаг 8. Проверка

1. Открыть `http://by-store.local/` в браузере
2. Должна загрузиться главная с новым хедером/футером
3. Менеджер: `http://by-store.local/manager/`
4. Проверить, что на главной странице в TV полях видны:
   - `hero_banners` (MIGX — баннеры)
   - `hero_timer_end` (date — таймер акции)
5. В карточке товара (шаблон "Товар") должно быть TV `hero_show`

## Что НЕ переносится автоматически

- **Изображения товаров** — хранятся в `assets/images/` и `assets/components/phpthumbof/cache/` (кэш thumb-ов)
- **SEO-редиректы** — в `.htaccess`, но они в репозитории
- **Кэш** — всегда пересоздаётся при первом запросе

## Структура миграций

Каждая миграция содержит:
- `-- UP` — прямое изменение (создание TV, чанков, сниппетов)
- `-- DOWN` — закомментированный откат (раскомментировать при необходимости)

Формат имени: `YYYY_MM_DD_action.sql`
