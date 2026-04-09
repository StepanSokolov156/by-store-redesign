<?php require_once 'header.php'; ?>

    <!-- Main Content -->
    <main class="main">
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero__wrapper">
                    <!-- Left Slider: Main Content -->
                    <div class="hero__main">
                        <div class="swiper heroMainSwiper">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="hero__slide">
                                        <div class="hero__content">
                                            <h1 class="hero__title">
                                                <span class="hero__title-gradient">iPhone 16 Pro Max</span> — хит 2025 года
                                            </h1>
                                            <p class="hero__description">Имеет лучшую автономность и заметно больший экран по сравнению с 16 Pro. При этом габариты также крупнее, а вес тяжелее на 28 г. Выбор за вами!</p>
                                            <button class="btn btn--primary">Смотреть в каталоге</button>
                                        </div>
                                        <div class="hero__image">
                                            <img src="img/slider-iphone.png" alt="iPhone 16 Pro Max" loading="lazy">
                                        </div>
                                        <!-- Navigation -->
                                        <div class="hero__nav">
                                            <div class="hero__dots">
                                                <span class="hero__dot hero__dot--active"></span>
                                                <span class="hero__dot"></span>
                                                <span class="hero__dot"></span>
                                            </div>
                                            <div class="hero__arrows">
                                                <button class="hero__arrow hero__arrow--prev">
                                                    <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                                                </button>
                                                <button class="hero__arrow hero__arrow--next">
                                                    <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="hero__slide">
                                        <div class="hero__content">
                                            <h1 class="hero__title">Samsung Galaxy S24 Ultra</h1>
                                            <p class="hero__description">Инновационный смартфон с AI-функциями и ручкой S Pen. 200MP камера и 6,8" экран Dynamic AMOLED 2X.</p>
                                            <button class="btn btn--primary">Смотреть в каталоге</button>
                                        </div>
                                        <div class="hero__image">
                                            <img src="img/slider-samsung.png" alt="Samsung Galaxy S24 Ultra" loading="lazy">
                                        </div>
                                        <!-- Navigation -->
                                        <div class="hero__nav">
                                            <div class="hero__dots">
                                                <span class="hero__dot"></span>
                                                <span class="hero__dot hero__dot--active"></span>
                                                <span class="hero__dot"></span>
                                            </div>
                                            <div class="hero__arrows">
                                                <button class="hero__arrow hero__arrow--prev">
                                                    <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                                                </button>
                                                <button class="hero__arrow hero__arrow--next">
                                                    <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="hero__slide">
                                        <div class="hero__content">
                                            <h1 class="hero__title">Apple Watch Series 9</h1>
                                            <p class="hero__description">Продвинутые датчики здоровья, яркий AMOLED дисплей и до 36 часов автономии. Ваш идеальный компаньон.</p>
                                            <button class="btn btn--primary">Смотреть в каталоге</button>
                                        </div>
                                        <div class="hero__image">
                                            <img src="img/slider-iphone.png" alt="Apple Watch Series 9" loading="lazy">
                                        </div>
                                        <!-- Navigation -->
                                        <div class="hero__nav">
                                            <div class="hero__dots">
                                                <span class="hero__dot"></span>
                                                <span class="hero__dot"></span>
                                                <span class="hero__dot hero__dot--active"></span>
                                            </div>
                                            <div class="hero__arrows">
                                                <button class="hero__arrow hero__arrow--prev">
                                                    <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                                                </button>
                                                <button class="hero__arrow hero__arrow--next">
                                                    <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Slider: Product Cards with Timer -->
                    <div class="hero__products">
                        <!-- Timer Header -->
                        <div class="hero__timer-header">
                            <h3 class="hero__timer-title">Акция</h3>
                            <div class="hero__timer">
                                <span>действует:</span>
                                <span class="countdown" data-time="259200">3 дн 12:31:05</span>
                            </div>
                        </div>

                        <!-- Product Slider -->
                        <div class="swiper heroProductsSwiper">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="product-card product-card--small">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Apple iPhone 15 Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">2 900 руб.</span>
                                                <span class="product-card__price-old">3 588 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary">В корзину</button>
                                                <button class="btn btn--outline"><span>Купить в 1 клик</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="product-card product-card--small">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Samsung Galaxy S24 Ultra" loading="lazy">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Samsung Galaxy S24 256GB Black</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">3 200 руб.</span>
                                                <span class="product-card__price-old">3 890 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary">В корзину</button>
                                                <button class="btn btn--outline"><span>Купить в 1 клик</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="product-card product-card--small">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Xiaomi">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Xiaomi 14 Pro 5G 12GB/512GB</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">2 100 руб.</span>
                                                <span class="product-card__price-old">2 650 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary">В корзину</button>
                                                <button class="btn btn--outline"><span>Купить в 1 клик</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div class="hero__nav hero__nav--products">
                            <div class="hero__dots">
                                <span class="hero__dot hero__dot--active"></span>
                                <span class="hero__dot"></span>
                                <span class="hero__dot"></span>
                            </div>
                            <div class="hero__arrows">
                                <button class="hero__arrow hero__arrow--prev products-arrow-prev">
                                    <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                                </button>
                                <button class="hero__arrow hero__arrow--next products-arrow-next">
                                    <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Categories Section -->
        <section class="popular-categories">
            <div class="container">
                <h2 class="section__title">Популярные категории</h2>
                <div class="popular-categories__grid">
                    <a href="#" class="popular-category-card">
                        <img src="img/cat-1.png" alt="Смартфоны" class="popular-category-card__image" loading="lazy">
                        <div class="popular-category-card__content">
                            <h3 class="popular-category-card__title">Смартфоны</h3>
                            <span class="popular-category-card__link">
                                Смотреть
                                <img src="icon/arrow-right.svg" alt="" class="popular-category-card__arrow">
                            </span>
                        </div>
                    </a>
                    <a href="#" class="popular-category-card">
                        <img src="img/cat-2.png" alt="Планшеты" class="popular-category-card__image" loading="lazy">
                        <div class="popular-category-card__content">
                            <h3 class="popular-category-card__title">Планшеты</h3>
                            <span class="popular-category-card__link">
                                Смотреть
                                <img src="icon/arrow-right.svg" alt="" class="popular-category-card__arrow">
                            </span>
                        </div>
                    </a>
                    <a href="#" class="popular-category-card">
                        <img src="img/cat-3.png" alt="Часы" class="popular-category-card__image" loading="lazy">
                        <div class="popular-category-card__content">
                            <h3 class="popular-category-card__title">Часы</h3>
                            <span class="popular-category-card__link">
                                Смотреть
                                <img src="icon/arrow-right.svg" alt="" class="popular-category-card__arrow">
                            </span>
                        </div>
                    </a>
                    <a href="#" class="popular-category-card">
                        <img src="img/cat-4.png" alt="Компьютеры и ноутбуки" class="popular-category-card__image" loading="lazy">
                        <div class="popular-category-card__content">
                            <h3 class="popular-category-card__title">Компьютеры и ноутбуки</h3>
                            <span class="popular-category-card__link">
                                Смотреть
                                <img src="icon/arrow-right.svg" alt="" class="popular-category-card__arrow">
                            </span>
                        </div>
                    </a>
                    <a href="#" class="popular-category-card">
                        <img src="img/cat-6.png" alt="Пылесосы" class="popular-category-card__image" loading="lazy">
                        <div class="popular-category-card__content">
                            <h3 class="popular-category-card__title">Пылесосы</h3>
                            <span class="popular-category-card__link">
                                Смотреть
                                <img src="icon/arrow-right.svg" alt="" class="popular-category-card__arrow">
                            </span>
                        </div>
                    </a>
                    <a href="#" class="popular-category-card">
                        <img src="img/cat-5.png" alt="Телевизоры" class="popular-category-card__image" loading="lazy">
                        <div class="popular-category-card__content">
                            <h3 class="popular-category-card__title">Телевизоры</h3>
                            <span class="popular-category-card__link">
                                Смотреть
                                <img src="icon/arrow-right.svg" alt="" class="popular-category-card__arrow">
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Catalog Section -->
        <section class="catalog">
            <div class="container">
                <h2 class="section__title">Каталог</h2>
                <div class="catalog__grid">
                    <a href="#" class="catalog-card">
                        <img src="img/cat-1.png" alt="Смартфоны" loading="lazy">
                        <h3 class="catalog-card__title">Смартфоны</h3>
                        <span class="catalog-card__link">
                            В каталог
                            <img src="icon/arrow-right.svg" alt="" class="catalog-card__arrow">
                        </span>
                    </a>
                    <a href="#" class="catalog-card">
                        <img src="img/cat-2.png" alt="Планшеты" loading="lazy">
                        <h3 class="catalog-card__title">Планшеты</h3>
                        <span class="catalog-card__link">
                            В каталог
                            <img src="icon/arrow-right.svg" alt="" class="catalog-card__arrow">
                        </span>
                    </a>
                    <a href="#" class="catalog-card">
                        <img src="img/cat-3.png" alt="Часы" loading="lazy">
                        <h3 class="catalog-card__title">Часы</h3>
                        <span class="catalog-card__link">
                            В каталог
                            <img src="icon/arrow-right.svg" alt="" class="catalog-card__arrow">
                        </span>
                    </a>
                    <a href="#" class="catalog-card">
                        <img src="img/cat-4.png" alt="Ноутбуки" loading="lazy">
                        <h3 class="catalog-card__title">Ноутбуки</h3>
                        <span class="catalog-card__link">
                            В каталог
                            <img src="icon/arrow-right.svg" alt="" class="catalog-card__arrow">
                        </span>
                    </a>
                    <a href="#" class="catalog-card">
                        <img src="img/cat-5.png" alt="Телевизоры" loading="lazy">
                        <h3 class="catalog-card__title">Телевизоры</h3>
                        <span class="catalog-card__link">
                            В каталог
                            <img src="icon/arrow-right.svg" alt="" class="catalog-card__arrow">
                        </span>
                    </a>
                    <a href="#" class="catalog-card">
                        <img src="img/cat-6.png" alt="Роботы-пылесосы" loading="lazy">
                        <h3 class="catalog-card__title">Роботы-пылесосы</h3>
                        <span class="catalog-card__link">
                            В каталог
                            <img src="icon/arrow-right.svg" alt="" class="catalog-card__arrow">
                        </span>
                    </a>
                    <a href="#" class="catalog-card catalog-card--wide">
                        <img src="img/cat-7.png" alt="Подарочные сертификаты" loading="lazy">
                        <div class="catalog-card__content">
                            <h3 class="catalog-card__title">Подарочные сертификаты</h3>
                            <span class="catalog-card__link">Заказать</span>
                        </div>
                    </a>
                </div>
                <div class="catalog__footer">
                    <button class="btn btn--primary">Смотреть весь каталог</button>
                </div>
            </div>
        </section>

        <!-- Products Slider Section -->
        <section class="products-section">
            <div class="container">
                <div class="products-section__header">
                    <h2 class="section__title">Хиты</h2>
                    <div class="products-filter-wrapper">
                        <div class="products-filter" id="productsFilter">
                            <button class="products-filter__btn products-filter__btn--active" data-category="all">Все</button>
                            <button class="products-filter__btn" data-category="phones">Мобильные телефоны</button>
                            <button class="products-filter__btn" data-category="accessories">Аксессуары</button>
                            <button class="products-filter__btn" data-category="tablets">Планшеты</button>
                            <button class="products-filter__btn" data-category="watches">Часы</button>
                            <button class="products-filter__btn" data-category="laptops">Компьютеры и ноутбуки</button>
                            <button class="products-filter__btn" data-category="tv">Телевизоры</button>
                            <button class="products-filter__btn" data-category="audio">Аудиотехника</button>
                            <button class="products-filter__btn" data-category="gaming">Игровые консоли</button>
                            <button class="products-filter__btn" data-category="drones">Дроны</button>
                        </div>
                    </div>
                </div>
                <div class="products-slider-wrapper">
                    <button class="products-slider-arrow products-slider-arrow--prev" id="hitsSliderPrev">
                        <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                    </button>
                    <div class="products-slider">
                        <div class="swiper productsSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Apple iPhone 15 Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">2 900 руб.</span>
                                                <span class="product-card__price-old">3 588 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="iPhone 16 Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">iPhone 16 Pro 256GB Natural Titanium</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">4 500 руб.</span>
                                                <span class="product-card__price-old">5 200 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Samsung Galaxy S24 Ultra" loading="lazy">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Samsung Galaxy S24 Ultra 512GB</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">3 800 руб.</span>
                                                <span class="product-card__price-old">4 200 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Xiaomi 14">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Xiaomi 14 256GB Black</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">1 800 руб.</span>
                                                <span class="product-card__price-old">2 100 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="watches">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Apple Watch Series 9" loading="lazy">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Apple Watch Series 9 45mm</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">1 500 руб.</span>
                                                <span class="product-card__price-old">1 800 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="laptops">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="MacBook Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">MacBook Pro 14" M3 Pro</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">6 800 руб.</span>
                                                <span class="product-card__price-old">7 500 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination dots (mobile only) -->
                            <div class="products-pagination"></div>
                        </div>
                    </div>
                    <button class="products-slider-arrow products-slider-arrow--next" id="hitsSliderNext">
                        <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                    </button>
                </div>
            </div>
        </section>

        <!-- New Arrivals Section -->
        <section class="products-section">
            <div class="container">
                <div class="products-section__header">
                    <h2 class="section__title">Новинки</h2>
                    <div class="products-filter-wrapper">
                        <div class="products-filter" id="newArrivalsFilter">
                            <button class="products-filter__btn products-filter__btn--active" data-category="all">Все</button>
                            <button class="products-filter__btn" data-category="phones">Мобильные телефоны</button>
                            <button class="products-filter__btn" data-category="accessories">Аксессуары</button>
                            <button class="products-filter__btn" data-category="tablets">Планшеты</button>
                            <button class="products-filter__btn" data-category="watches">Часы</button>
                            <button class="products-filter__btn" data-category="laptops">Компьютеры и ноутбуки</button>
                            <button class="products-filter__btn" data-category="tv">Телевизоры</button>
                            <button class="products-filter__btn" data-category="audio">Аудиотехника</button>
                            <button class="products-filter__btn" data-category="gaming">Игровые консоли</button>
                            <button class="products-filter__btn" data-category="drones">Дроны</button>
                        </div>
                    </div>
                </div>
                <div class="products-slider-wrapper">
                    <button class="products-slider-arrow products-slider-arrow--prev" id="newArrivalsSliderPrev">
                        <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                    </button>
                    <div class="products-slider">
                        <div class="swiper newArrivalsSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Apple iPhone 15 Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">2 900 руб.</span>
                                                <span class="product-card__price-old">3 588 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="iPhone 16 Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">iPhone 16 Pro 256GB Natural Titanium</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">4 500 руб.</span>
                                                <span class="product-card__price-old">5 200 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Samsung Galaxy S24 Ultra" loading="lazy">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Samsung Galaxy S24 Ultra 512GB</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">3 800 руб.</span>
                                                <span class="product-card__price-old">4 200 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Xiaomi 14">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Xiaomi 14 256GB Black</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">1 800 руб.</span>
                                                <span class="product-card__price-old">2 100 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="watches">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Apple Watch Series 9" loading="lazy">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Apple Watch Series 9 45mm</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">1 500 руб.</span>
                                                <span class="product-card__price-old">1 800 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="laptops">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="MacBook Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">MacBook Pro 14" M3 Pro</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">6 800 руб.</span>
                                                <span class="product-card__price-old">7 500 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination dots (mobile only) -->
                            <div class="products-pagination"></div>
                        </div>
                    </div>
                    <button class="products-slider-arrow products-slider-arrow--next" id="newArrivalsSliderNext">
                        <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                    </button>
                </div>
            </div>
        </section>

        <!-- Recommended Section -->
        <section class="products-section">
            <div class="container">
                <div class="products-section__header">
                    <h2 class="section__title">Рекомендуем</h2>
                    <div class="products-filter-wrapper">
                        <div class="products-filter" id="recommendedFilter">
                            <button class="products-filter__btn products-filter__btn--active" data-category="all">Все</button>
                            <button class="products-filter__btn" data-category="phones">Мобильные телефоны</button>
                            <button class="products-filter__btn" data-category="accessories">Аксессуары</button>
                            <button class="products-filter__btn" data-category="tablets">Планшеты</button>
                            <button class="products-filter__btn" data-category="watches">Часы</button>
                            <button class="products-filter__btn" data-category="laptops">Компьютеры и ноутбуки</button>
                            <button class="products-filter__btn" data-category="tv">Телевизоры</button>
                            <button class="products-filter__btn" data-category="audio">Аудиотехника</button>
                            <button class="products-filter__btn" data-category="gaming">Игровые консоли</button>
                            <button class="products-filter__btn" data-category="drones">Дроны</button>
                        </div>
                    </div>
                </div>
                <div class="products-slider-wrapper">
                    <button class="products-slider-arrow products-slider-arrow--prev" id="recommendedSliderPrev">
                        <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                    </button>
                    <div class="products-slider">
                        <div class="swiper recommendedSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Apple iPhone 15 Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">2 900 руб.</span>
                                                <span class="product-card__price-old">3 588 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="iPhone 16 Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">iPhone 16 Pro 256GB Natural Titanium</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">4 500 руб.</span>
                                                <span class="product-card__price-old">5 200 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Samsung Galaxy S24 Ultra" loading="lazy">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Samsung Galaxy S24 Ultra 512GB</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">3 800 руб.</span>
                                                <span class="product-card__price-old">4 200 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Xiaomi 14">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Xiaomi 14 256GB Black</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">1 800 руб.</span>
                                                <span class="product-card__price-old">2 100 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="watches">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Apple Watch Series 9" loading="lazy">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Apple Watch Series 9 45mm</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">1 500 руб.</span>
                                                <span class="product-card__price-old">1 800 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="laptops">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="MacBook Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">MacBook Pro 14" M3 Pro</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">6 800 руб.</span>
                                                <span class="product-card__price-old">7 500 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination dots (mobile only) -->
                            <div class="products-pagination"></div>
                        </div>
                    </div>
                    <button class="products-slider-arrow products-slider-arrow--next" id="recommendedSliderNext">
                        <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                    </button>
                </div>
            </div>
        </section>

        <!-- Sale Section -->
        <section class="products-section">
            <div class="container">
                <div class="products-section__header">
                    <h2 class="section__title">Товары по акции</h2>
                    <div class="products-filter-wrapper">
                        <div class="products-filter" id="saleFilter">
                            <button class="products-filter__btn products-filter__btn--active" data-category="all">Все</button>
                            <button class="products-filter__btn" data-category="phones">Мобильные телефоны</button>
                            <button class="products-filter__btn" data-category="accessories">Аксессуары</button>
                            <button class="products-filter__btn" data-category="tablets">Планшеты</button>
                            <button class="products-filter__btn" data-category="watches">Часы</button>
                            <button class="products-filter__btn" data-category="laptops">Компьютеры и ноутбуки</button>
                            <button class="products-filter__btn" data-category="tv">Телевизоры</button>
                            <button class="products-filter__btn" data-category="audio">Аудиотехника</button>
                            <button class="products-filter__btn" data-category="gaming">Игровые консоли</button>
                            <button class="products-filter__btn" data-category="drones">Дроны</button>
                        </div>
                    </div>
                </div>
                <div class="products-slider-wrapper">
                    <button class="products-slider-arrow products-slider-arrow--prev" id="saleSliderPrev">
                        <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                    </button>
                    <div class="products-slider">
                        <div class="swiper saleSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Apple iPhone 15 Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Apple iPhone 15 Pro 128GB Синий титан</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">2 900 руб.</span>
                                                <span class="product-card__price-old">3 588 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="iPhone 16 Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">iPhone 16 Pro 256GB Natural Titanium</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">4 500 руб.</span>
                                                <span class="product-card__price-old">5 200 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Samsung Galaxy S24 Ultra" loading="lazy">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Samsung Galaxy S24 Ultra 512GB</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">3 800 руб.</span>
                                                <span class="product-card__price-old">4 200 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="phones">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Xiaomi 14">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Xiaomi 14 256GB Black</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">1 800 руб.</span>
                                                <span class="product-card__price-old">2 100 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="watches">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="Apple Watch Series 9" loading="lazy">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">Apple Watch Series 9 45mm</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">1 500 руб.</span>
                                                <span class="product-card__price-old">1 800 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-category="laptops">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <img src="img/product-card-img.png" loading="lazy" alt="MacBook Pro">
                                            <div class="product-card__actions">
                                                <button class="product-card__favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" width="20" height="20" alt="">
                                                </button>
                                                <button class="product-card__compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" width="20" height="20" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <h4 class="product-card__title">MacBook Pro 14" M3 Pro</h4>
                                            <div class="product-card__prices">
                                                <span class="product-card__price">6 800 руб.</span>
                                                <span class="product-card__price-old">7 500 руб.</span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn--primary btn--small">В корзину</button>
                                                <button class="btn btn--outline btn--small">Купить в 1 клик</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination dots (mobile only) -->
                            <div class="products-pagination"></div>
                        </div>
                    </div>
                    <button class="products-slider-arrow products-slider-arrow--next" id="saleSliderNext">
                        <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                    </button>
                </div>
            </div>
        </section>

         <!-- Lead Form Section -->
        <section class="lead-form">
            <div class="container">
                <div class="lead-form__inner">
                    <div class="lead-form__info">
                        <h2 class="lead-form__title">Защитное стекло в подарок</h2>
                        <p class="lead-form__description">Заботьтесь о защите экрана с первого дня — мы дарим стекло при покупке телефона</p>
                    </div>
                    <form class="lead-form__form" id="leadForm">
                        <div class="lead-form__fields-inline">
                            <div class="form-group">
                                <label class="form-label" for="leadName">Ваше имя <span class="form-label__required">*</span></label>
                                <input type="text" id="leadName" name="name" class="form-input" placeholder="Введите имя" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="leadPhone">Телефон <span class="form-label__required">*</span></label>
                                <input type="tel" id="leadPhone" name="phone" class="form-input" placeholder="+375 (__) ___ -__ - __" required>
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
            </div>
        </section>  

        <!-- Features Section -->
        <section class="features-section">
            <div class="container">
                <div class="features-section__inner">
                    <div class="feature-card">
                        <div class="feature-card__icon">
                            <img src="icon/Ogiginal.svg" width="60" height="60" alt="">
                        </div>
                        <div class="feature-card__content">
                            <h3 class="feature-card__title">Оригинальная техника Apple</h3>
                            <p class="feature-card__description">Только оригинальная, новая и неактивированная техника Apple</p>
                            <a href="#" class="feature-card__link">Подробнее
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none">
                                    <path d="M10 1L15 6L10 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 6H1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="feature-card__divider"></div>
                    <div class="feature-card">
                        <div class="feature-card__icon">
                            <img src="icon/garanti.svg" width="60" height="60" alt="">
                        </div>
                        <div class="feature-card__content">
                            <h3 class="feature-card__title">Официальная гарантия</h3>
                            <p class="feature-card__description">На всю продукцию предоставляется официальная мировая гарантия Apple</p>
                            <a href="#" class="feature-card__link">Подробнее
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none">
                                    <path d="M10 1L15 6L10 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 6H1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="feature-card__divider"></div>
                    <div class="feature-card">
                        <div class="feature-card__icon">
                            <img src="icon/delivery.svg" width="60" height="60" alt="">
                        </div>
                        <div class="feature-card__content">
                            <h3 class="feature-card__title">Бесплатная доставка</h3>
                            <p class="feature-card__description">Абсолютно бесплатная и быстрая доставка по Минску и всей Беларуси</p>
                            <a href="#" class="feature-card__link">Подробнее
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none">
                                    <path d="M10 1L15 6L10 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 6H1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Brands Section -->
        <section class="brands">
            <div class="container">
                <h2 class="section__title">Бренды</h2>
                <div class="brands-swiper swiper">
                    <div class="swiper-wrapper">
                        <a href="#" class="swiper-slide brand-card">
                            <img src="icon/brand-apple.png" alt="Apple" loading="lazy">
                        </a>
                        <a href="#" class="swiper-slide brand-card">
                            <img src="icon/brand-samsung.png" alt="Samsung" loading="lazy">
                        </a>
                        <a href="#" class="swiper-slide brand-card">
                            <img src="icon/brand-honor.png" alt="Honor" loading="lazy">
                        </a>
                        <a href="#" class="swiper-slide brand-card">
                            <img src="icon/brand-mi.png" alt="Xiaomi" loading="lazy">
                        </a>
                        <a href="#" class="swiper-slide brand-card">
                            <img src="icon/brand-oneplus.png" alt="OnePlus" loading="lazy">
                        </a>
                        <a href="#" class="swiper-slide brand-card">
                            <img src="icon/brand-poco.png" alt="POCO" loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
         <!-- Reviews Section -->
        <section class="reviews">
            <div class="container">
                <div class="reviews__header">
                    <h2 class="reviews__title">Отзывы клиентов</h2>
                    <div class="reviews__offers">
                        <div class="reviews__offer">
                            <p class="reviews__offer-value">100+</p>
                            <p class="reviews__offer-label">Довольных клиентов</p>
                        </div>
                        <div class="reviews__offer">
                            <p class="reviews__offer-value">200+</p>
                            <p class="reviews__offer-label">Выполненных заказов</p>
                        </div>
                        <button class="btn btn--primary btn--small reviews__btn">Добавить отзыв</button>
                    </div>
                </div>
                <div class="reviews__slider-wrapper">
                    <div class="reviewsSwiper swiper">
                        <div class="swiper-wrapper">
                            <!-- Review Card 1 -->
                            <div class="swiper-slide">
                                <div class="review-card">
                                    <div class="review-card__content">
                                        <div class="review-card__stars">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                        </div>
                                        <p class="review-card__text">Уже не первый раз заказываю в этом магазине — всегда всё на высоте. Быстрая доставка, хорошая упаковка, техника работает отлично. Рекомендую!</p>
                                    </div>
                                    <div class="review-card__footer">
                                        <p class="review-card__author">Елена</p>
                                        <p class="review-card__date">15.07.2025</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Card 2 -->
                            <div class="swiper-slide">
                                <div class="review-card">
                                    <div class="review-card__content">
                                        <div class="review-card__stars">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                        </div>
                                        <p class="review-card__text">Купил смартфон — пришёл на следующий день, полностью соответствует описанию. Приятно удивили цены и вежливая поддержка. Обязательно закажу ещё!</p>
                                    </div>
                                    <div class="review-card__footer">
                                        <p class="review-card__author">Андрей</p>
                                        <p class="review-card__date">12.07.2025</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Card 3 -->
                            <div class="swiper-slide">
                                <div class="review-card">
                                    <div class="review-card__content">
                                        <div class="review-card__stars">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                        </div>
                                        <p class="review-card__text">Очень довольна покупкой ноутбука в этом магазине! До этого долго сомневалась, где заказывать, но по итогу осталась под впечатлением. Помогли с выбором модели, объяснили разницу между конфигурациями. Цены ниже, чем в крупных сетевых магазинах, и доставка заняла всего один день. Товар запакован надёжно, чек и гарантия на месте. Уже месяц пользуюсь — всё без нареканий. Спасибо за честный сервис и быструю поддержку!</p>
                                        <button class="review-card__expand" type="button">Показать весь текст</button>
                                    </div>
                                    <div class="review-card__footer">
                                        <p class="review-card__author">Мария</p>
                                        <p class="review-card__date">10.07.2025</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Card 4 -->
                            <div class="swiper-slide">
                                <div class="review-card">
                                    <div class="review-card__content">
                                        <div class="review-card__stars">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                        </div>
                                        <p class="review-card__text">Отличный магазин! Заказал наушники, пришли быстро, в оригинальной упаковке. Качество звука супер, цена приятная. Буду заказывать ещё!</p>
                                    </div>
                                    <div class="review-card__footer">
                                        <p class="review-card__author">Дмитрий</p>
                                        <p class="review-card__date">08.07.2025</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Card 5 -->
                            <div class="swiper-slide">
                                <div class="review-card">
                                    <div class="review-card__content">
                                        <div class="review-card__stars">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                            <img src="icon/star.svg" alt="">
                                        </div>
                                        <p class="review-card__text">Прекрасный сервис! Покупала планшет для ребёнка, менеджеры помогли подобрать подходящую модель под бюджет. Доставка вовремя, товар в идеальном состоянии. Дочкой довольна, планшет работает отлично. Спасибо за внимание и помощь!</p>
                                        <button class="review-card__expand" type="button">Показать весь текст</button>
                                    </div>
                                    <div class="review-card__footer">
                                        <p class="review-card__author">Ольга</p>
                                        <p class="review-card__date">05.07.2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="reviews-slider-arrow reviews-slider-arrow--prev" id="reviewsSliderPrev" aria-label="Previous">
                        <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                    </button>
                    <button class="reviews-slider-arrow reviews-slider-arrow--next" id="reviewsSliderNext" aria-label="Next">
                        <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                    </button>
                </div>
            </div>
        </section>

        <!-- Blog Section -->
        <section class="blog">
            <div class="container">
                <h2 class="section__title section__title--center">Блог</h2>
                <div class="blog__slider-wrapper">
                    <div class="blogSwiper swiper">
                        <div class="swiper-wrapper">
                            <!-- Article Card 1 -->
                            <div class="swiper-slide">
                                <article class="article-card">
                                    <div class="article-card__image">
                                        <img src="img/article-1.png" alt="Как выбрать смартфон" loading="lazy">
                                    </div>
                                    <div class="article-card__content">
                                        <time class="article-card__date" datetime="2025-01-15">15.01.2025</time>
                                        <h3 class="article-card__title">Как выбрать смартфон: полный гид по покупке</h3>
                                        <p class="article-card__text">Рассказываем, на что обратить внимание при выборе нового смартфона — от процессора до камеры. Полное руководство для тех, кто хочет получить максимум за свои деньги.</p>
                                        <a href="#" class="article-card__link">
                                            Читать статью
                                            <img src="icon/arrow-right.svg" alt="" class="article-card__arrow">
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <!-- Article Card 2 -->
                            <div class="swiper-slide">
                                <article class="article-card">
                                    <div class="article-card__image">
                                        <img src="img/article-2.png" alt="Обзор iPhone 16" loading="lazy">
                                    </div>
                                    <div class="article-card__content">
                                        <time class="article-card__date" datetime="2025-01-10">10.01.2025</time>
                                        <h3 class="article-card__title">iPhone 16: стоит ли обновляться?</h3>
                                        <p class="article-card__text">Детальный обзор новейшего флагмана от Apple. Разбираем новые функции, производительность камеры и автономность.</p>
                                        <a href="#" class="article-card__link">
                                            Читать статью
                                            <img src="icon/arrow-right.svg" alt="" class="article-card__arrow">
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <!-- Article Card 3 -->
                            <div class="swiper-slide">
                                <article class="article-card">
                                    <div class="article-card__image">
                                        <img src="img/article-3.png" alt="Сравнение Samsung Galaxy" loading="lazy">
                                    </div>
                                    <div class="article-card__content">
                                        <time class="article-card__date" datetime="2025-01-05">05.01.2025</time>
                                        <h3 class="article-card__title">Samsung Galaxy S25 против S24: что изменилось</h3>
                                        <p class="article-card__text">Сравниваем два поколения флагманов Samsung. Worth it upgrade или лучше подождать? Разбираем все отличия.</p>
                                        <a href="#" class="article-card__link">
                                            Читать статью
                                            <img src="icon/arrow-right.svg" alt="" class="article-card__arrow">
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <!-- Article Card 4 -->
                            <div class="swiper-slide">
                                <article class="article-card">
                                    <div class="article-card__image">
                                        <img src="img/article-4.png" alt="Лучшие аксессуары" loading="lazy">
                                    </div>
                                    <div class="article-card__content">
                                        <time class="article-card__date" datetime="2024-12-28">28.12.2024</time>
                                        <h3 class="article-card__title">ТОП-10 аксессуаров для вашего телефона</h3>
                                        <p class="article-card__text">Подборка лучших чехлов, защитных стёкол и гаджетов, которые сделают использование смартфона комфортнее.</p>
                                        <a href="#" class="article-card__link">
                                            Читать статью
                                            <img src="icon/arrow-right.svg" alt="" class="article-card__arrow">
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="blog-pagination swiper-pagination"></div>
                    </div>
                    <button class="blog-slider-arrow blog-slider-arrow--prev" id="blogSliderPrev" aria-label="Previous">
                        <img src="icon/slider-arrow-left.svg" width="24" height="24" alt="">
                    </button>
                    <button class="blog-slider-arrow blog-slider-arrow--next" id="blogSliderNext" aria-label="Next">
                        <img src="icon/slider-arrow-right.svg" width="24" height="24" alt="">
                    </button>
                </div>
            </div>
        </section>

        <!-- Lead Form 2 Section -->
        <section class="lead-form lead-form--alt">
            <div class="container">
                <div class="lead-form__inner">
                    <div class="lead-form__info">
                        <h2 class="lead-form__title">Не нашли нужный товар?</h2>
                        <p class="lead-form__description">Свяжитесь с нами и мы поможем найти нужный товар или предложим альтернативу</p>
                    </div>
                    <form class="lead-form__form" id="leadForm2">
                        <div class="lead-form__fields-inline">
                            <div class="form-group">
                                <label class="form-label" for="lead2Name">Ваше имя <span class="form-label__required">*</span></label>
                                <input type="text" id="lead2Name" name="name" class="form-input" placeholder="Введите имя" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="lead2Phone">Телефон <span class="form-label__required">*</span></label>
                                <input type="tel" id="lead2Phone" name="phone" class="form-input" placeholder="+375 (__) ___ -__ - __" required>
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
            </div>
        </section>
    </main>

<?php require_once 'footer.php'; ?>
