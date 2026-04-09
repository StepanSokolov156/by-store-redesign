# План интеграции нового дизайна (verstka → MODX)

**Статус:** В работе
**Обновлено:** 2026-03-30

---

## Общая информация

**Цель:** Интегрировать новый дизайн из `by-store-verstka/` в MODX Revolution сайт `by-store.local/`

**Ресурсы верстки:** `by-store-verstka/` (header.php, index.php/main-page.php, category.php, product.php, catalog.php, tradein.php, footer.php)

**CSS/JS нового дизайна:**
- `by-store.local/assets/css/new/styles.css`
- `by-store.local/assets/css/new/styles-components.css`
- `by-store.local/assets/js/new/script.js`

**Иконки:** `by-store.local/assets/images/new-icons/`
**Изображения:** `by-store.local/assets/images/new-images/`

---

## Прогресс по страницам

| Страница | Верстка | Template ID | Статус |
|----------|---------|-------------|--------|
| Header | `header.php` | chunk #27 | ✅ Готово |
| Footer | `footer.php` | chunk #166 | ✅ Готово |
| Главная | `index.php` | #1 | ✅ Готово |
| Категория товаров | `category.php` | #5 | 🔲 Не начата |
| Карточка товара | `product.php` | #6 | 🔲 Не начата |
| Каталог (все товары) | `catalog.php` | #10 | 🔲 Не начата |
| Trade in | `tradein.php` | #23 | 🔲 Не начата |
| Корзина | — | #8 | 🔲 Не начата |
| Оформление заказа | — | #9 | 🔲 Не начата |

---

## ✅ Главная страница (Template #1) — детали

**Файл обновления:** `by-store.local/_update_main_tpl.php`

### Секции (13 шт.)

| # | Секция | CSS-класс | Статус | Примечания |
|---|--------|-----------|--------|------------|
| 1 | Hero (левый слайдер) | `.hero .hero__main` | ✅ | Swiper, 5 слайдов из TV-полей |
| 1b | Hero (правая часть — акция) | `.hero .hero__products` | ✅ | Статичный HTML, таймер |
| 2 | Популярные категории | `.popular-categories` | ✅ | 6 карточек |
| 3 | Каталог | `.catalog` | ✅ | 7 карточек + подарочные сертификаты |
| 4 | Товары: Хиты | `.products-section` | ✅ | Swiper + фильтры, msProducts (Popular_for_index=1) |
| 5 | Товары: Новинки | `.products-section` | ✅ | Swiper + фильтры, msProducts (Popular_for_index=2) |
| 6 | Товары: Рекомендуем | `.products-section` | ✅ | Swiper + фильтры, msProducts (Popular_for_index=3) |
| 7 | Товары по акции | `.products-section` | ✅ | Swiper + фильтры, msProducts (old_price>0) |
| 8 | Форма "Стекло в подарок" | `.lead-form` | ✅ | FormIt + FeedbackTelegramSend |
| 9 | Преимущества | `.features-section` | ✅ | 3 feature-card (Apple, Гарантия, Доставка) |
| 10 | Бренды | `.brands` | ✅ | Swiper, 6 брендов (новые иконки) |
| 11 | Отзывы | `.reviews` | ✅ | Статичный Swiper, 5 карточек |
| 12 | Блог | `.blog` | ✅ | Swiper + pdoResources (newPostIndexTpl) |
| 13 | Форма "Не нашли товар?" | `.lead-form--alt` | ✅ | FormIt + FeedbackTelegramSend |

### Созданные чанки

| Чанк | ID | Описание |
|------|----|----------|
| `newProductCardTpl` | новый | Карточка товара для Swiper-слайдеров (ms2_form, избранное, сравнение) |
| `newPostIndexTpl` | новый | Карточка блога для Swiper (.article-card) |

### Фильтр категорий (data-category → parent ID)

| Кнопка | MODX parent ID |
|--------|----------------|
| Все | all |
| Мобильные телефоны | 9 |
| Аксессуары | 19 |
| Планшеты | 20 |
| Часы | 21 |
| Компьютеры и ноутбуки | 22 |
| Телевизоры | 7442 |
| Игровая зона | 23 |

---

## Структура каталога MODX (для справки)

```
8  Каталог (parent=0)
├── 9   Мобильные телефоны
├── 19  Аксессуары
├── 20  Планшеты
├── 21  Часы
├── 22  Компьютеры и ноутбуки
├── 7288  Бытовая техника
│   ├── 24    Пылесосы
│   ├── 7442  Телевизоры
│   └── 7670  Воздухоочиститель
├── 7449  Электроника
├── 7530  Конструктор Lego
├── 23   Игровая зона
├── 48   Электротранспорт
└── 7307  Фены/Стайлеры
```

---

## Ключевые решения

- **Секции товаров:** Swiper-слайдеры с клиентским фильтром категорий (не Bootstrap tabs)
- **Отзывы:** статичный HTML (не из Tickets)
- **Формы:** FormIt + FeedbackTelegramSend (существующий механизм)
- **Hero правая часть:** статичный HTML с таймером
- **Meta чанк:** не трогать (содержит аналитику, Jivo, Yandex.Metrika)

---

## Чего нет в верстке (не добавлено на главную)

- Блок "Не нашли нужный товар?" из старого дизайна — заменён на новую форму lead-form--alt
- OWL Carousel — заменён на Swiper везде
- Старые Bootstrap-классы товаров — заменены на product-card
