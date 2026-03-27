<?php require_once 'header.php'; ?>

    <main class="main product-page">
        <div class="container">
            <!-- Breadcrumbs -->
            <nav class="breadcrumbs" aria-label="Breadcrumb">
                <div class="breadcrumbs__item">
                    <a href="main-page.php" class="breadcrumbs__link">Главная</a>
                </div>
                <div class="breadcrumbs__separator">
                    <img src="icon/breadcrumb-arrow.svg" alt="">
                </div>
                <div class="breadcrumbs__item">
                    <a href="catalog.php" class="breadcrumbs__link">Каталог</a>
                </div>
                <div class="breadcrumbs__separator">
                    <img src="icon/breadcrumb-arrow.svg" alt="">
                </div>
                <div class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__link">Мобильные телефоны</a>
                </div>
                <div class="breadcrumbs__separator">
                    <img src="icon/breadcrumb-arrow.svg" alt="">
                </div>
                <div class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__link">Смартфоны Apple iPhone</a>
                </div>
                <div class="breadcrumbs__separator">
                    <img src="icon/breadcrumb-arrow.svg" alt="">
                </div>
                <div class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__link">iPhone 16</a>
                </div>
                <div class="breadcrumbs__separator">
                    <img src="icon/breadcrumb-arrow.svg" alt="">
                </div>
                <div class="breadcrumbs__item">
                    <span class="breadcrumbs__current">Apple iPhone 16 128GB Белый</span>
                </div>
            </nav>

            <!-- Product Preview Section -->
            <section class="product-preview">
                <!-- Product Title (first for SEO) -->
                <h1 class="product-info__title">Apple iPhone 16 128GB Белый</h1>

                <!-- Gallery -->
                <div class="product-gallery">
                    <div class="product-gallery__main">
                        <div class="product-gallery__swiper swiper productGallerySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый" class="product-gallery__image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый" class="product-gallery__image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый" class="product-gallery__image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый" class="product-gallery__image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-gallery__thumbs">
                        <div class="product-gallery__thumbs-swiper swiper productGalleryThumbsSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product-gallery__thumb--active">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info">
                    <div class="product-info__rating">
                        <div class="product-info__stars">
                            <img src="icon/star.svg" alt=""><img src="icon/star.svg" alt=""><img src="icon/star.svg" alt=""><img src="icon/star.svg" alt=""><img src="icon/star.svg" alt="">
                        </div>
                        <span class="product-info__reviews-count">(0 отзывов)</span>
                    </div>

                    <div class="product-info__actions">
                        <span class="availability availability--success">
                            <img src="icon/in_stock.svg" alt="" class="availability__icon">
                            <span>В наличии</span>
                        </span>
                        <button class="product-info__favorite" aria-label="Добавить в избранное">
                            <img src="icon/wishlist.svg" alt="">
                            <span>В избранное</span>
                        </button>
                        <button class="product-info__compare" aria-label="Добавить к сравнению">
                            <img src="icon/compare.svg" alt="">
                            <span>В сравнение</span>
                        </button>
                    </div>

                    <!-- Color Selection -->
                    <div class="product-info__option">
                        <span class="product-info__option-label">Цвет:</span>
                        <div class="product-info__option-values product-info__option-values--color">
                            <button class="color-chip color-chip--active" data-color="white" aria-label="Белый">
                                <span>Белый</span>
                            </button>
                            <button class="color-chip" data-color="teal" aria-label="Бирюзовый">
                                <span>Бирюзовый</span>
                            </button>
                            <button class="color-chip" data-color="pink" aria-label="Розовый">
                                <span>Розовый</span>
                            </button>
                            <button class="color-chip" data-color="ultramarine" aria-label="Ультрамарин">
                                <span>Ультрамарин</span>
                            </button>
                            <button class="color-chip" data-color="black" aria-label="Черный">
                                <span>Черный</span>
                            </button>
                        </div>
                    </div>

                    <!-- Memory Selection -->
                    <div class="product-info__option">
                        <span class="product-info__option-label">Встроенная память:</span>
                        <div class="product-info__option-values">
                            <button class="option-chip option-chip--active" data-memory="128">128 Гб</button>
                            <button class="option-chip" data-memory="256">256</button>
                            <button class="option-chip" data-memory="512">512</button>
                        </div>
                    </div>

                    <!-- Short Specs -->
                    <div class="product-info__specs">
                        <div class="product-info__spec">
                            <span class="product-info__spec-label">ОС:</span>
                            <span class="product-info__spec-value">IOS 18</span>
                        </div>
                        <div class="product-info__spec">
                            <span class="product-info__spec-label">Оперативная память:</span>
                            <span class="product-info__spec-value">8 Гб</span>
                        </div>
                        <div class="product-info__spec product-info__spec--inline">
                            <span class="product-info__spec-inline">Экран: <span class="product-info__spec-value">6.1" OLED (1179x2556) 60 Гц</span></span>
                        </div>
                        <div class="product-info__spec">
                            <span class="product-info__spec-label">Камера:</span>
                            <span class="product-info__spec-value">48 Мп, 12 Мп</span>
                        </div>
                        <div class="product-info__spec">
                            <span class="product-info__spec-label">Аккумулятор:</span>
                            <span class="product-info__spec-value">3561 мАч</span>
                        </div>
                        <div class="product-info__spec">
                            <span class="product-info__spec-label">Вес:</span>
                            <span class="product-info__spec-value">170 г</span>
                        </div>
                        <div class="product-info__spec">
                            <span class="product-info__spec-label">Связь:</span>
                            <span class="product-info__spec-value">4G LTE, 5G</span>
                        </div>
                        <div class="product-info__spec product-info__spec--inline">
                            <span class="product-info__spec-inline">SIM: <span class="product-info__spec-value">2 (Nano Sim + Nano Sim), (Nano Sim + eSim), (eSim)</span></span>
                        </div>
                    </div>

                    <button class="product-info__all-specs">
                        <span>Все характеристики</span>
                        <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="product-info__all-specs-arrow">
                    </button>
                </div>

                <!-- Purchase Block -->
                <div class="product-purchase">
                    <div class="product-purchase__price">
                        <div class="product-purchase__price-old-row">
                            <span class="product-purchase__price-old">2 856 руб.</span>
                            <span class="product-purchase__discount">-20%</span>
                        </div>
                        <span class="product-purchase__price-current">2 300 руб.</span>

                        <div class="product-purchase__quantity-row">
                            <div class="product-purchase__quantity">
                                <button class="quantity-btn quantity-btn--minus" aria-label="Уменьшить количество">
                                    <img src="icon/icon-minus.svg" alt="">
                                </button>
                                <input type="text" class="quantity-input" value="1" readonly>
                                <button class="quantity-btn quantity-btn--plus" aria-label="Увеличить количество">
                                    <img src="icon/icon-plus.svg" alt="">
                                </button>
                            </div>
                            <button class="btn btn--primary product-purchase__btn-cart">В корзину</button>
                        </div>

                        <button class="btn btn--gradient-outline product-purchase__btn-oneclick">Купить в 1 клик</button>
                    </div>

                    <div class="product-purchase__benefits">
                        <div class="product-purchase__benefit">
                            <img src="icon/icon-warranty.svg" alt="" class="product-purchase__benefit-icon">
                            <span class="product-purchase__benefit-text">
                                <span class="product-purchase__benefit-label">Гарантия Apple:</span>
                                <span class="product-purchase__benefit-value"> 365 дней с момента активации</span>
                            </span>
                        </div>
                        <div class="product-purchase__benefit">
                            <img src="icon/icon-delivery.svg" alt="" class="product-purchase__benefit-icon">
                            <span class="product-purchase__benefit-text">
                                <span class="product-purchase__benefit-label">Бесплатная доставка:</span>
                                <span class="product-purchase__benefit-value"> Минск - завтра,</span>
                                <span class="product-purchase__benefit-value"> регионы - 2-3 дня</span>
                            </span>
                        </div>
                        <div class="product-purchase__benefit">
                            <img src="icon/icon-pickup.svg" alt="" class="product-purchase__benefit-icon">
                            <span class="product-purchase__benefit-text">
                                <span class="product-purchase__benefit-label">Самовывоз:</span>
                                <span class="product-purchase__benefit-value"> Минск - </span>
                                <span class="product-purchase__benefit-value">сегодня</span>
                            </span>
                        </div>
                        <div class="product-purchase__benefit">
                            <img src="icon/icon-payment.svg" alt="" class="product-purchase__benefit-icon">
                            <span class="product-purchase__benefit-text">
                                <span class="product-purchase__benefit-label">Оплата:</span>
                                <span class="product-purchase__benefit-value"> </span>
                                <span class="product-purchase__benefit-value">наличные, карты, карты рассрочки</span>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Product Tabs Section -->
            <section class="product-tabs-section">
                <div class="product-tabs">
                    <button class="product-tab product-tab--active" data-tab="description">Описание</button>
                    <button class="product-tab" data-tab="specs">Характеристики</button>
                    <button class="product-tab" data-tab="reviews">Отзывы (0)</button>
                </div>

                <div class="product-tabs-content">
                    <!-- Description Tab -->
                    <div class="product-tab-pane product-tab-pane--active" id="description">
                        Откройте для себя последние модели 
                        iPhone 16 Plus 
                        в нашем магазине! У нас вы найдете широкий ассортимент новых и оригинальных 
                        iPhone 16 Plus по выгодным ценам. 
                        Купите Apple iPhone 16 Plus 512GB Черный недорого, в рассрочку или в кредит — выбирайте удобный способ оплаты. 
                        Предлагаем актуальные цены, акции и специальные предложения на последние модели 
                        iPhone 16 Plus. 
                        Закажите свой новый Apple iPhone 16 Plus 512GB Черный прямо сейчас и наслаждайтесь передовыми технологиями и качеством Apple iPhone 16 Plus 512GB Черный без переплат!

                        <br><br>
                        <p><strong>Дизайн:</strong><br>- Элегантный и стильный корпус из стекла и титана.<br>- Доступен в нескольких цветах, включая классический черный, белый и новые эксклюзивные оттенки.</p>
                        <p><strong>Экран:</strong><br>- Большой 6.7-дюймовый Super Retina XDR дисплей с высокой яркостью и контрастностью.<br>- Поддержка HDR10 и Dolby Vision для улучшенного просмотра мультимедиа.</p>
                        <p><strong>Камера:</strong><br>- Улучшенная система камер с основным сенсором на 48 МП, обеспечивающим отличное качество снимков даже в условиях низкой освещенности.<br>- Оптимизированные функции ночной съемки и портретного режима.</p>
                        <p><strong>Производительность:</strong><br>- Новый чип A18 Bionic, обеспечивающий высокую производительность и энергоэффективность.<br>- Поддержка 5G для быстрого интернета.</p>
                        <p><strong>Аккумулятор:</strong><br>- Увеличенная емкость аккумулятора для более длительного времени работы.<br>- Быстрая зарядка и поддержка беспроводной зарядки.</p>
                        <p><strong>Программное обеспечение:</strong><br>- Работает на iOS 18 с новыми функциями и улучшениями в пользовательском интерфейсе.<br>- Интеграция с экосистемой Apple для удобного использования различных устройств.</p>
                        <p><strong>Дополнительные функции:</strong><br>- Поддержка Face ID для безопасной разблокировки.<br>- Водонепроницаемость и пылезащита по стандарту IP68.</p>
                    </div>

                    <!-- Specs Tab -->
                    <div class="product-tab-pane" id="specs">
                        <div class="specs-accordion">
                            <!-- Основные характеристики -->
                            <div class="specs-accordion__item specs-accordion__item--open">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Основные характеристики</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <div class="specs-table">
                                        <div class="specs-table__column">
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Производитель</span>
                                                <span class="specs-table__value">Apple</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Встроенная память</span>
                                                <span class="specs-table__value">128 Гб</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Оперативная память</span>
                                                <span class="specs-table__value">8 Гб</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">ОС</span>
                                                <span class="specs-table__value">IOS 18</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Технология экрана</span>
                                                <span class="specs-table__value">OLED</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Диагональ</span>
                                                <span class="specs-table__value">6,1"</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Камера</span>
                                                <span class="specs-table__value">48 Мп, 12 Мп</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Максимальное разрешение видео</span>
                                                <span class="specs-table__value">3840х2160</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Размер изображения</span>
                                                <span class="specs-table__value">1179х2556</span>
                                            </div>
                                        </div>
                                        <div class="specs-table__column">
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Аккумулятор</span>
                                                <span class="specs-table__value">3561 мАч</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Беспроводная зарядка</span>
                                                <span class="specs-table__value">Есть</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Быстрая зарядка</span>
                                                <span class="specs-table__value">Есть</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Поддержка карт памяти</span>
                                                <span class="specs-table__value">Нет</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Количество SIM-карт</span>
                                                <span class="specs-table__value">2 (Nano Sim + Nano Sim), (Nano Sim + eSim), (eSim)</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Вес</span>
                                                <span class="specs-table__value">170 г</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Вид устройства</span>
                                                <span class="specs-table__value">Новый</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Тип</span>
                                                <span class="specs-table__value">Смартфон</span>
                                            </div>
                                            <div class="specs-table__row">
                                                <span class="specs-table__label">Дата выхода на рынок</span>
                                                <span class="specs-table__value">Сентябрь 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Процессор -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Процессор</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация о процессоре появится позже</p>
                                </div>
                            </div>

                            <!-- Конструкция -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Конструкция</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация о конструкции появится позже</p>
                                </div>
                            </div>

                            <!-- Размер и вес -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Размер и вес</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация о размере и весе появится позже</p>
                                </div>
                            </div>

                            <!-- Экран -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Экран</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация об экране появится позже</p>
                                </div>
                            </div>

                            <!-- Камера -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Камера</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация о камере появится позже</p>
                                </div>
                            </div>

                            <!-- Функции -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Функции</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация о функциях появится позже</p>
                                </div>
                            </div>

                            <!-- Датчики -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Датчики</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация о датчиках появится позже</p>
                                </div>
                            </div>

                            <!-- Навигация -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Навигация</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация о навигации появится позже</p>
                                </div>
                            </div>

                            <!-- Передача данных -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Передача данных</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация о передаче данных появится позже</p>
                                </div>
                            </div>

                            <!-- Интерфейсы -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Интерфейсы</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация об интерфейсах появится позже</p>
                                </div>
                            </div>

                            <!-- Аккумулятор -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Аккумулятор</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация об аккумуляторе появится позже</p>
                                </div>
                            </div>

                            <!-- Комплектация -->
                            <div class="specs-accordion__item">
                                <button class="specs-accordion__header">
                                    <span class="specs-accordion__title">Комплектация</span>
                                    <img src="icon/iconamoon_arrow-down-2-light.svg" alt="" class="specs-accordion__arrow">
                                </button>
                                <div class="specs-accordion__content">
                                    <p class="specs-accordion__empty">Информация о комплектации появится позже</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="product-tab-pane" id="reviews">
                        <div class="product-reviews">
                            <p class="product-reviews__empty">Отзывов пока нет. Будьте первым, кто оставит отзыв!</p>
                            <button class="btn btn--primary product-reviews__btn-write">Написать отзыв</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Similar Products -->
            <section class="similar-products">
                <h2 class="section__title">Похожие товары</h2>
                <div class="similar-products__slider-wrapper">
                    <div class="swiper similarProductsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="product-card">
                                    <div class="product-card__image">
                                        <img src="img/product-card-img.png" alt="Apple iPhone 15 Pro 128GB Синий титан" loading="lazy">
                                        <div class="product-card__actions">
                                            <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                <img src="icon/wishlist.svg" alt="">
                                            </button>
                                            <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                <img src="icon/compare.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <h3 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h3>
                                        <div class="product-card__prices">
                                            <span class="product-card__price">2 900 руб.</span>
                                            <span class="product-card__price-old">3 588 руб.</span>
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn--primary">Купить</button>
                                            <button class="btn btn--outline"><span>В кредит</span></button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="product-card">
                                    <div class="product-card__image">
                                        <img src="img/product-card-img.png" alt="Apple iPhone 15 Pro 128GB Синий титан" loading="lazy">
                                        <div class="product-card__actions">
                                            <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                <img src="icon/wishlist.svg" alt="">
                                            </button>
                                            <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                <img src="icon/compare.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <h3 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h3>
                                        <div class="product-card__prices">
                                            <span class="product-card__price">2 900 руб.</span>
                                            <span class="product-card__price-old">3 588 руб.</span>
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn--primary">Купить</button>
                                            <button class="btn btn--outline"><span>В кредит</span></button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="product-card">
                                    <div class="product-card__image">
                                        <img src="img/product-card-img.png" alt="Apple iPhone 15 Pro 128GB Синий титан" loading="lazy">
                                        <div class="product-card__actions">
                                            <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                <img src="icon/wishlist.svg" alt="">
                                            </button>
                                            <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                <img src="icon/compare.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <h3 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h3>
                                        <div class="product-card__prices">
                                            <span class="product-card__price">2 900 руб.</span>
                                            <span class="product-card__price-old">3 588 руб.</span>
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn--primary">Купить</button>
                                            <button class="btn btn--outline"><span>В кредит</span></button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="product-card">
                                    <div class="product-card__image">
                                        <img src="img/product-card-img.png" alt="Apple iPhone 15 Pro 128GB Синий титан" loading="lazy">
                                        <div class="product-card__actions">
                                            <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                <img src="icon/wishlist.svg" alt="">
                                            </button>
                                            <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                <img src="icon/compare.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <h3 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h3>
                                        <div class="product-card__prices">
                                            <span class="product-card__price">2 900 руб.</span>
                                            <span class="product-card__price-old">3 588 руб.</span>
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn--primary">Купить</button>
                                            <button class="btn btn--outline"><span>В кредит</span></button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <button class="similar-products-arrow similar-products-arrow--prev" aria-label="Previous">
                        <img src="icon/slider-arrow-left.svg" alt="">
                    </button>
                    <button class="similar-products-arrow similar-products-arrow--next" aria-label="Next">
                        <img src="icon/slider-arrow-right.svg" alt="">
                    </button>
                </div>
            </section>

            <!-- Viewed Products -->
            <section class="viewed-products">
                <h2 class="section__title">Вы смотрели</h2>
                <div class="viewed-products__slider-wrapper">
                    <div class="swiper viewedProductsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="product-card">
                                    <div class="product-card__image">
                                        <img src="img/product-card-img.png" alt="Apple iPhone 15 Pro 128GB Синий титан" loading="lazy">
                                        <div class="product-card__actions">
                                            <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                <img src="icon/wishlist.svg" alt="">
                                            </button>
                                            <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                <img src="icon/compare.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <h3 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h3>
                                        <div class="product-card__prices">
                                            <span class="product-card__price">2 900 руб.</span>
                                            <span class="product-card__price-old">3 588 руб.</span>
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn--primary">Купить</button>
                                            <button class="btn btn--outline"><span>В кредит</span></button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="product-card">
                                    <div class="product-card__image">
                                        <img src="img/product-card-img.png" alt="Apple iPhone 15 Pro 128GB Синий титан" loading="lazy">
                                        <div class="product-card__actions">
                                            <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                <img src="icon/wishlist.svg" alt="">
                                            </button>
                                            <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                <img src="icon/compare.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <h3 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h3>
                                        <div class="product-card__prices">
                                            <span class="product-card__price">2 900 руб.</span>
                                            <span class="product-card__price-old">3 588 руб.</span>
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn--primary">Купить</button>
                                            <button class="btn btn--outline"><span>В кредит</span></button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="product-card">
                                    <div class="product-card__image">
                                        <img src="img/product-card-img.png" alt="Apple iPhone 15 Pro 128GB Синий титан" loading="lazy">
                                        <div class="product-card__actions">
                                            <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                <img src="icon/wishlist.svg" alt="">
                                            </button>
                                            <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                <img src="icon/compare.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <h3 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h3>
                                        <div class="product-card__prices">
                                            <span class="product-card__price">2 900 руб.</span>
                                            <span class="product-card__price-old">3 588 руб.</span>
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn--primary">Купить</button>
                                            <button class="btn btn--outline"><span>В кредит</span></button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="product-card">
                                    <div class="product-card__image">
                                        <img src="img/product-card-img.png" alt="Apple iPhone 15 Pro 128GB Синий титан" loading="lazy">
                                        <div class="product-card__actions">
                                            <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                <img src="icon/wishlist.svg" alt="">
                                            </button>
                                            <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                <img src="icon/compare.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <h3 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h3>
                                        <div class="product-card__prices">
                                            <span class="product-card__price">2 900 руб.</span>
                                            <span class="product-card__price-old">3 588 руб.</span>
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn--primary">Купить</button>
                                            <button class="btn btn--outline"><span>В кредит</span></button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <button class="viewed-products-arrow viewed-products-arrow--prev" aria-label="Previous">
                        <img src="icon/slider-arrow-left.svg" alt="">
                    </button>
                    <button class="viewed-products-arrow viewed-products-arrow--next" aria-label="Next">
                        <img src="icon/slider-arrow-right.svg" alt="">
                    </button>
                </div>
            </section>

        <!-- Lead Form 2 Section -->
        <section class="lead-form lead-form--alt">
            <div class="lead-form__inner">
                <div class="lead-form__info">
                    <h2 class="lead-form__title">Не нашли нужный товар?</h2>
                    <p class="lead-form__description">Свяжитесь с нами и мы поможем найти нужный товар или предложим альтернативу</p>
                </div>
                <form class="lead-form__form" id="leadForm2">
                    <div class="lead-form__fields-inline">
                        <div class="form-group">
                            <label class="form-label">Ваше имя <span class="form-label__required">*</span></label>
                            <input type="text" class="form-input" placeholder="Введите имя" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Телефон <span class="form-label__required">*</span></label>
                            <input type="tel" class="form-input" placeholder="+375 (__) ___ -__ - __" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Сообщение</label>
                        <div class="form-textarea-wrapper">
                            <textarea class="form-textarea" placeholder="Введите сообщение" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="lead-form__actions">
                        <button type="submit" class="btn btn--primary btn--form">Отправить заявку</button>
                        <p class="lead-form__policy">Нажимая кнопку, вы даете согласие на <a href="#" class="lead-form__link">обработку персональных данных</a></p>
                    </div>
                </form>
            </div>
        </section>
        </div>
    </main>

<?php require_once 'footer.php'; ?>
