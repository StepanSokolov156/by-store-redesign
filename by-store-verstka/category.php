<?php require_once 'header.php'; ?>

    <main class="main category-page">
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
                    <span class="breadcrumbs__current">Смартфоны и гаджеты</span>
                </div>
            </nav>

            <!-- Category Title -->
            <h1 class="page-title">Смартфоны и гаджеты</h1>

            <!-- Category Banners Slider -->
            <section class="category-banners">
                <div class="category-banners__wrapper">
                    <div class="category-banners__swiper swiper">
                        <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="category-banners__card">
                                <div class="category-banners__content">
                                    <div class="category-banners__timer">
                                        <span class="category-banners__timer-label">Акция действует:</span>
                                        <span class="category-banners__timer-value">3 дн 12:31:05</span>
                                    </div>
                                    <h3 class="category-banners__title">Apple iPhone 16 128GB со скидкой 20%</h3>
                                    <div class="category-banners__price">
                                        <span class="category-banners__price-current">2 300 руб.</span>
                                        <span class="category-banners__price-old">2 856 руб.</span>
                                    </div>
                                    <a href="#" class="btn btn--primary">Купить</a>
                                </div>
                                <div class="category-banners__image">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="category-banners__card">
                                <div class="category-banners__content">
                                    <div class="category-banners__timer">
                                        <span class="category-banners__timer-label">Акция действует:</span>
                                        <span class="category-banners__timer-value">3 дн 12:31:05</span>
                                    </div>
                                    <h3 class="category-banners__title">Apple iPhone 16 Pro Max 256GB со скидкой 20%</h3>
                                    <div class="category-banners__price">
                                        <span class="category-banners__price-current">3 630 руб.</span>
                                        <span class="category-banners__price-old">4 608 руб.</span>
                                    </div>
                                    <a href="#" class="btn btn--primary">Купить</a>
                                </div>
                                <div class="category-banners__image">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 16 Pro Max 256GB" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="category-banners__card">
                                <div class="category-banners__content">
                                    <div class="category-banners__timer">
                                        <span class="category-banners__timer-label">Акция действует:</span>
                                        <span class="category-banners__timer-value">3 дн 12:31:05</span>
                                    </div>
                                    <h3 class="category-banners__title">Apple iPhone 15 Pro 256GB со скидкой 15%</h3>
                                    <div class="category-banners__price">
                                        <span class="category-banners__price-current">3 199 руб.</span>
                                        <span class="category-banners__price-old">3 799 руб.</span>
                                    </div>
                                    <a href="#" class="btn btn--primary">Купить</a>
                                </div>
                                <div class="category-banners__image">
                                    <img src="img/product-card-img.png" alt="Apple iPhone 15 Pro 256GB" loading="lazy">
                                </div>
                            </div>
                        </div>
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
            </section>

            <!-- Mobile Filter Button -->
            <button class="category__filter-btn" id="filterToggleBtn" aria-label="Открыть фильтры">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 5H18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4 10H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M6 15H14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                Фильтр
            </button>

            <!-- Active Filters (Mobile) -->
            <div class="category__active-filters">
                <div class="category__filter-chip">
                    Apple
                    <button class="category__filter-chip-remove" aria-label="Убрать фильтр">
                        <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L11 11M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Category Layout -->
            <div class="category__layout">
                <!-- Filters Sidebar (Desktop) -->
                <aside class="category__filters" aria-label="Фильтры товаров">
                    <div class="filters">
                        <h2 class="filters__title">Фильтр</h2>

                        <div class="filters__body">
                            <!-- Price Filter -->
                            <div class="filters__group filters__group--expanded">
                                <button class="filters__group-toggle" aria-expanded="true">
                                    <span class="filters__group-title">Цена, BYN</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <div class="filters__price" data-range-slider data-min="100" data-max="4500" data-step="10" data-value-from="100" data-value-to="3400">
                                        <div class="filters__price-slider">
                                            <div class="filters__price-track"></div>
                                            <div class="filters__price-track-fill"></div>
                                            <div class="filters__price-thumb filters__price-thumb--from" data-thumb="from"></div>
                                            <div class="filters__price-thumb filters__price-thumb--to" data-thumb="to"></div>
                                        </div>
                                        <div class="filters__price-inputs">
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">от</span>
                                                <input type="number" class="filters__price-input filters__price-input--from" value="100" min="100" max="4500" step="10">
                                            </div>
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">до</span>
                                                <input type="number" class="filters__price-input filters__price-input--to" value="3400" min="100" max="4500" step="10">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Brand Filter -->
                            <div class="filters__group filters__group--expanded">
                                <button class="filters__group-toggle" aria-expanded="true">
                                    <span class="filters__group-title">Производитель</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content filters__group-content--scrollable">
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand" value="apple" checked>
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Apple</span>
                                        <span class="filters__checkbox-count">(223)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand" value="samsung" checked>
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Samsung</span>
                                        <span class="filters__checkbox-count">(209)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand" value="xiaomi">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Xiaomi</span>
                                        <span class="filters__checkbox-count">(62)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand" value="honor">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Honor</span>
                                        <span class="filters__checkbox-count">(38)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand" value="huawei">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Huawei</span>
                                        <span class="filters__checkbox-count">(11)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand" value="poco">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">POCO</span>
                                        <span class="filters__checkbox-count">(76)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand" value="redmi">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Redmi</span>
                                        <span class="filters__checkbox-count">(50)</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Storage Filter (collapsed) -->
                            <div class="filters__group">
                                <button class="filters__group-toggle" aria-expanded="false">
                                    <span class="filters__group-title">Объем встроенной памяти</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <!-- Content will be added when expanded -->
                                </div>
                            </div>

                            <!-- RAM Filter (collapsed) -->
                            <div class="filters__group">
                                <button class="filters__group-toggle" aria-expanded="false">
                                    <span class="filters__group-title">Объем оперативной памяти</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <!-- Content will be added when expanded -->
                                </div>
                            </div>

                            <!-- OS Filter (collapsed) -->
                            <div class="filters__group">
                                <button class="filters__group-toggle" aria-expanded="false">
                                    <span class="filters__group-title">Операционная система</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <!-- Content will be added when expanded -->
                                </div>
                            </div>

                            <!-- Screen Diagonal Filter -->
                            <div class="filters__group filters__group--expanded">
                                <button class="filters__group-toggle" aria-expanded="true">
                                    <span class="filters__group-title">Диагональ экрана, дюймы</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <div class="filters__price" data-range-slider data-min="4" data-max="8" data-value-from="4" data-value-to="6">
                                        <div class="filters__price-slider">
                                            <div class="filters__price-track"></div>
                                            <div class="filters__price-track-fill"></div>
                                            <div class="filters__price-thumb filters__price-thumb--from" data-thumb="from"></div>
                                            <div class="filters__price-thumb filters__price-thumb--to" data-thumb="to"></div>
                                        </div>
                                        <div class="filters__price-inputs">
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">от</span>
                                                <input type="number" class="filters__price-input filters__price-input--from" value="4" min="4" max="8" step="0.1">
                                            </div>
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">до</span>
                                                <input type="number" class="filters__price-input filters__price-input--to" value="6" min="4" max="8" step="0.1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Battery Filter -->
                            <div class="filters__group filters__group--expanded">
                                <button class="filters__group-toggle" aria-expanded="true">
                                    <span class="filters__group-title">Емкость аккумулятора, мА·ч</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <div class="filters__price" data-range-slider data-min="1000" data-max="12000" data-value-from="1000" data-value-to="8000">
                                        <div class="filters__price-slider">
                                            <div class="filters__price-track"></div>
                                            <div class="filters__price-track-fill"></div>
                                            <div class="filters__price-thumb filters__price-thumb--from" data-thumb="from"></div>
                                            <div class="filters__price-thumb filters__price-thumb--to" data-thumb="to"></div>
                                        </div>
                                        <div class="filters__price-inputs">
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">от</span>
                                                <input type="number" class="filters__price-input filters__price-input--from" value="1000" min="1000" max="12000" step="100">
                                            </div>
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">до</span>
                                                <input type="number" class="filters__price-input filters__price-input--to" value="8000" min="1000" max="12000" step="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Camera Filter (collapsed) -->
                            <div class="filters__group">
                                <button class="filters__group-toggle" aria-expanded="false">
                                    <span class="filters__group-title">Разрешение камеры</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <!-- Content will be added when expanded -->
                                </div>
                            </div>
                        </div>

                        <!-- Footer Buttons -->
                        <div class="filters__footer">
                            <button class="btn btn--primary filters__btn-apply" id="filtersApply">Применить</button>
                            <button class="btn btn--outline-gradient filters__btn-reset" id="filtersReset"><span>Сбросить все</span></button>
                        </div>
                    </div>
                </aside>

                <!-- Products Section -->
                <div class="category__content">
                    <!-- Quick Filters (Tag Cloud) -->
                    <div class="quick-filters">
                        <a href="#" class="quick-filters__link">Apple</a>
                        <a href="#" class="quick-filters__link">Samsung</a>
                        <a href="#" class="quick-filters__link">Xiaomi</a>
                        <a href="#" class="quick-filters__link">POCO</a>
                        <a href="#" class="quick-filters__link">OnePlus</a>
                        <a href="#" class="quick-filters__link">Android</a>
                        <a href="#" class="quick-filters__link">Поддержка 2-х сим-карт</a>
                        <a href="#" class="quick-filters__link">Водонепроницаемый</a>
                        <a href="#" class="quick-filters__link">С большим аккумулятором</a>
                        <a href="#" class="quick-filters__link">С маленьким экраном (до 5,4")</a>
                        <a href="#" class="quick-filters__link">С большим экраном (от 6,6")</a>
                        <a href="#" class="quick-filters__link">Быстрая зарядка</a>
                        <a href="#" class="quick-filters__link">С NFC</a>
                        <button class="quick-filters__show-all" id="quickFiltersShowAll">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11L6 1M6 11L2 7M6 11L10 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Показать все
                        </button>
                    </div>

                    <!-- Products Header -->
                    <div class="category__header">
                        <div class="category__header-left">
                            <p class="category__shown">Показано: 1-12 из 400 товаров</p>
                        </div>
                        <div class="category__header-right">
                            <!-- Sort -->
                            <div class="category__sort">
                                <img src="icon/sort-icon.svg" alt="" class="category__sort-icon" width="24" height="24">
                                <span class="category__sort-label">Сортировать:</span>
                                <div class="category__sort-select-wrapper">
                                    <select id="sort-select" class="category__sort-select">
                                        <option value="popular">По популярности</option>
                                        <option value="price-asc">Сначала дешевле</option>
                                        <option value="price-desc">Сначала дороже</option>
                                        <option value="new">Сначала новинки</option>
                                    </select>
                                    <img src="icon/select-arrow.svg" alt="" class="category__sort-arrow" width="16" height="16">
                                </div>
                            </div>
                            <!-- View Toggle -->
                            <div class="category__view">
                                <button class="category__view-btn category__view-btn--list" id="viewListBtn" aria-label="Список">
                                    <img src="icon/list-icon.svg" alt="" width="24" height="24">
                                </button>
                                <button class="category__view-btn category__view-btn--grid category__view-btn--active" id="viewGridBtn" aria-label="Сетка">
                                    <img src="icon/grid-icon.svg" alt="" width="24" height="24">
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="category__products">
                        <!-- Product Card 1 with variants - horizontal layout (Desktop) -->
                        <article class="product-card-horizontal product-card--has-variants">
                            <!-- Actions (top left corner) -->
                            <div class="product-card-horizontal__top-actions">
                                <button class="product-card-horizontal__favorites" aria-label="Добавить в избранное">
                                    <img src="icon/wishlist.svg" alt="">
                                </button>
                                <button class="product-card-horizontal__compare" aria-label="Добавить к сравнению">
                                    <img src="icon/compare.svg" alt="">
                                </button>
                            </div>

                            <!-- Left side: Image slider with pagination -->
                            <div class="product-card-horizontal__left">
                                <div class="product-card-horizontal__image-wrapper">
                                    <div class="product-card-horizontal__slider swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый" loading="lazy" class="product-card-horizontal__image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый" loading="lazy" class="product-card-horizontal__image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый" loading="lazy" class="product-card-horizontal__image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый" loading="lazy" class="product-card-horizontal__image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Белый" loading="lazy" class="product-card-horizontal__image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-horizontal__pagination products-pagination"></div>
                            </div>

                            <!-- Right side: Content (includes info, aside, divider, variants) -->
                            <div class="product-card-horizontal__right">
                                <!-- Top row: Info + Aside -->
                                <div class="product-card-horizontal__top-row">
                                    <!-- Product info and specs -->
                                    <div class="product-card-horizontal__info">
                                        <div class="product-card-horizontal__header">
                                            <span class="product-card-horizontal__badge">-20%</span>
                                            <h3 class="product-card-horizontal__title">
                                                Apple iPhone 16 128GB Белый
                                            </h3>
                                        </div>
                                        <div class="product-card-horizontal__specs-grid">
                                            <div class="product-card-horizontal__specs-col">
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">Производитель:</span>
                                                    <span class="product-card-horizontal__spec-value">Apple</span>
                                                </p>
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">Цвет:</span>
                                                    <span class="product-card-horizontal__spec-value">Белый</span>
                                                </p>
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">ОС:</span>
                                                    <span class="product-card-horizontal__spec-value">IOS 18</span>
                                                </p>
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">Оперативная память:</span>
                                                    <span class="product-card-horizontal__spec-value">8 Гб</span>
                                                </p>
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">Встроенная память:</span>
                                                    <span class="product-card-horizontal__spec-value">128 Гб</span>
                                                </p>
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">Экран:</span>
                                                    <span class="product-card-horizontal__spec-value">6.1" OLED (1179x2556) 60 Гц</span>
                                                </p>
                                            </div>
                                            <div class="product-card-horizontal__specs-col">
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">Камера:</span>
                                                    <span class="product-card-horizontal__spec-value">48 Мп, 12 Мп</span>
                                                </p>
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">Вес:</span>
                                                    <span class="product-card-horizontal__spec-value">170 г</span>
                                                </p>
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">Аккумулятор:</span>
                                                    <span class="product-card-horizontal__spec-value">3561 мАч</span>
                                                </p>
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">Связь:</span>
                                                    <span class="product-card-horizontal__spec-value">4G LTE, 5G</span>
                                                </p>
                                                <p class="product-card-horizontal__spec-row">
                                                    <span class="product-card-horizontal__spec-label">SIM:</span>
                                                    <span class="product-card-horizontal__spec-value">2 (Nano Sim + Nano Sim), (Nano Sim + eSim), (eSim)</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price and actions -->
                                    <div class="product-card-horizontal__aside">
                                        <div class="product-card-horizontal__price-row">
                                            <span class="product-card-horizontal__current-price">2 300 руб.</span>
                                            <span class="product-card-horizontal__old-price">2 856 руб.</span>
                                        </div>
                                        <div class="product-card-horizontal__actions-grid">
                                            <button class="product-card-horizontal__add-to-cart btn btn--primary">В корзину</button>
                                            <button class="product-card-horizontal__buy-now btn btn--outline">Купить в 1 клик</button>
                                        </div>
                                        <div class="product-card-horizontal__warranty">
                                            <img src="icon/garanti-prod.svg" alt="" class="product-card-horizontal__warranty-icon">
                                            <span class="product-card-horizontal__warranty-text">Гарантия Apple: 365 дней с момента активации</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Show variants button -->
                                <button class="product-card-horizontal__show-variants" aria-expanded="false">
                                    <span class="product-card-horizontal__show-variants-text">Показать доступные варианты</span>
                                    <svg class="product-card-horizontal__show-variants-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>

                                <!-- Variants section -->
                                <div class="product-card-horizontal__variants" aria-hidden="true">
                                    <!-- Variant 1 -->
                                    <div class="product-card-horizontal__variant">
                                        <div class="product-card-horizontal__variant-start">
                                            <div class="product-card-horizontal__variant-actions">
                                                <button class="product-card-horizontal__variant-favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" alt="">
                                                </button>
                                                <button class="product-card-horizontal__variant-compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" alt="">
                                                </button>
                                            </div>
                                            <div class="product-card-horizontal__variant-image-wrapper">
                                                <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Бирюзовый" loading="lazy" class="product-card-horizontal__variant-image">
                                            </div>
                                        </div>
                                        <div class="product-card-horizontal__variant-info">
                                            <h4 class="product-card-horizontal__variant-title">
                                                Apple iPhone 16 128GB Бирюзовый
                                            </h4>
                                            <div class="product-card-horizontal__variant-specs">
                                                <p class="product-card-horizontal__variant-spec">
                                                    <span class="product-card-horizontal__variant-spec-label">Цвет:</span>
                                                    <span class="product-card-horizontal__variant-spec-value">Бирюзовый</span>
                                                </p>
                                                <p class="product-card-horizontal__variant-spec">
                                                    <span class="product-card-horizontal__variant-spec-label">Встроенная память:</span>
                                                    <span class="product-card-horizontal__variant-spec-value">128 Гб</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="product-card-horizontal__variant-end">
                                            <div class="product-card-horizontal__variant-price-wrapper">
                                                <div class="product-card-horizontal__variant-price-row">
                                                    <span class="product-card-horizontal__variant-old-price">2 856 руб.</span>
                                                    <span class="product-card-horizontal__variant-badge">-20%</span>
                                                </div>
                                                <span class="product-card-horizontal__variant-current-price">2 300 руб.</span>
                                            </div>
                                            <button class="product-card-horizontal__variant-add-to-cart btn btn--primary">В корзину</button>
                                        </div>
                                    </div>

                                    <!-- Variant 2 -->
                                    <div class="product-card-horizontal__variant">
                                        <div class="product-card-horizontal__variant-start">
                                            <div class="product-card-horizontal__variant-actions">
                                                <button class="product-card-horizontal__variant-favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" alt="">
                                                </button>
                                                <button class="product-card-horizontal__variant-compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" alt="">
                                                </button>
                                            </div>
                                            <div class="product-card-horizontal__variant-image-wrapper">
                                                <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Розовый" loading="lazy" class="product-card-horizontal__variant-image">
                                            </div>
                                        </div>
                                        <div class="product-card-horizontal__variant-info">
                                            <h4 class="product-card-horizontal__variant-title">
                                                Apple iPhone 16 128GB Розовый
                                            </h4>
                                            <div class="product-card-horizontal__variant-specs">
                                                <p class="product-card-horizontal__variant-spec">
                                                    <span class="product-card-horizontal__variant-spec-label">Цвет:</span>
                                                    <span class="product-card-horizontal__variant-spec-value">Розовый</span>
                                                </p>
                                                <p class="product-card-horizontal__variant-spec">
                                                    <span class="product-card-horizontal__variant-spec-label">Встроенная память:</span>
                                                    <span class="product-card-horizontal__variant-spec-value">128 Гб</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="product-card-horizontal__variant-end">
                                            <div class="product-card-horizontal__variant-price-wrapper">
                                                <div class="product-card-horizontal__variant-price-row">
                                                    <span class="product-card-horizontal__variant-old-price">2 856 руб.</span>
                                                    <span class="product-card-horizontal__variant-badge">-20%</span>
                                                </div>
                                                <span class="product-card-horizontal__variant-current-price">2 300 руб.</span>
                                            </div>
                                            <button class="product-card-horizontal__variant-add-to-cart btn btn--primary">В корзину</button>
                                        </div>
                                    </div>

                                    <!-- Variant 3 -->
                                    <div class="product-card-horizontal__variant">
                                        <div class="product-card-horizontal__variant-start">
                                            <div class="product-card-horizontal__variant-actions">
                                                <button class="product-card-horizontal__variant-favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" alt="">
                                                </button>
                                                <button class="product-card-horizontal__variant-compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" alt="">
                                                </button>
                                            </div>
                                            <div class="product-card-horizontal__variant-image-wrapper">
                                                <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Ультрамарин" loading="lazy" class="product-card-horizontal__variant-image">
                                            </div>
                                        </div>
                                        <div class="product-card-horizontal__variant-info">
                                            <h4 class="product-card-horizontal__variant-title">
                                                Apple iPhone 16 128GB Ультрамарин
                                            </h4>
                                            <div class="product-card-horizontal__variant-specs">
                                                <p class="product-card-horizontal__variant-spec">
                                                    <span class="product-card-horizontal__variant-spec-label">Цвет:</span>
                                                    <span class="product-card-horizontal__variant-spec-value">Ультрамарин</span>
                                                </p>
                                                <p class="product-card-horizontal__variant-spec">
                                                    <span class="product-card-horizontal__variant-spec-label">Встроенная память:</span>
                                                    <span class="product-card-horizontal__variant-spec-value">128 Гб</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="product-card-horizontal__variant-end">
                                            <div class="product-card-horizontal__variant-price-wrapper">
                                                <div class="product-card-horizontal__variant-price-row">
                                                    <span class="product-card-horizontal__variant-old-price">2 856 руб.</span>
                                                    <span class="product-card-horizontal__variant-badge">-20%</span>
                                                </div>
                                                <span class="product-card-horizontal__variant-current-price">2 300 руб.</span>
                                            </div>
                                            <button class="product-card-horizontal__variant-add-to-cart btn btn--primary">В корзину</button>
                                        </div>
                                    </div>

                                    <!-- Variant 4 -->
                                    <div class="product-card-horizontal__variant">
                                        <div class="product-card-horizontal__variant-start">
                                            <div class="product-card-horizontal__variant-actions">
                                                <button class="product-card-horizontal__variant-favorites" aria-label="Добавить в избранное">
                                                    <img src="icon/wishlist.svg" alt="">
                                                </button>
                                                <button class="product-card-horizontal__variant-compare" aria-label="Добавить к сравнению">
                                                    <img src="icon/compare.svg" alt="">
                                                </button>
                                            </div>
                                            <div class="product-card-horizontal__variant-image-wrapper">
                                                <img src="img/product-card-img.png" alt="Apple iPhone 16 128GB Черный" loading="lazy" class="product-card-horizontal__variant-image">
                                            </div>
                                        </div>
                                        <div class="product-card-horizontal__variant-info">
                                            <h4 class="product-card-horizontal__variant-title">
                                                Apple iPhone 16 128GB Черный
                                            </h4>
                                            <div class="product-card-horizontal__variant-specs">
                                                <p class="product-card-horizontal__variant-spec">
                                                    <span class="product-card-horizontal__variant-spec-label">Цвет:</span>
                                                    <span class="product-card-horizontal__variant-spec-value">Черный</span>
                                                </p>
                                                <p class="product-card-horizontal__variant-spec">
                                                    <span class="product-card-horizontal__variant-spec-label">Встроенная память:</span>
                                                    <span class="product-card-horizontal__variant-spec-value">128 Гб</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="product-card-horizontal__variant-end">
                                            <div class="product-card-horizontal__variant-price-wrapper">
                                                <div class="product-card-horizontal__variant-price-row">
                                                    <span class="product-card-horizontal__variant-old-price">2 856 руб.</span>
                                                    <span class="product-card-horizontal__variant-badge">-20%</span>
                                                </div>
                                                <span class="product-card-horizontal__variant-current-price">2 300 руб.</span>
                                            </div>
                                            <button class="product-card-horizontal__variant-add-to-cart btn btn--primary">В корзину</button>
                                        </div>
                                    </div>

                                    <!-- Hide variants button -->
                                    <button class="product-card-horizontal__hide-variants">
                                        <span class="product-card-horizontal__hide-variants-text">Скрыть варианты</span>
                                        <svg class="product-card-horizontal__hide-variants-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 10L8 6L12 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <!-- Product Card 2 -->
                        <article class="product-card">
                            <div class="product-card__image">
                                <img src="img/product-card-img.png" alt="Смартфон Apple iPhone 15 Pro Max 256GB" loading="lazy">
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
                                <h3 class="product-card__title">
                                    <a href="product.php">Смартфон Apple iPhone 15 Pro Max 256GB</a>
                                </h3>
                                <div class="product-card__prices">
                                    <span class="product-card__price">4 799 р.</span>
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn--primary">Купить</button>
                                    <button class="btn btn--outline"><span>В корзину</span></button>
                                </div>
                            </div>
                        </article>

                        <!-- Product Card 3 -->
                        <article class="product-card">
                            <div class="product-card__image">
                                <img src="img/product-card-img.png" alt="Смартфон Apple iPhone 15 128GB" loading="lazy">
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
                                <h3 class="product-card__title">
                                    <a href="product.php">Смартфон Apple iPhone 15 128GB</a>
                                </h3>
                                <div class="product-card__prices">
                                    <span class="product-card__price">3 199 р.</span>
                                    <span class="product-card__price-old">3 499 р.</span>
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn--primary">Купить</button>
                                    <button class="btn btn--outline"><span>В корзину</span></button>
                                </div>
                            </div>
                        </article>

                        <!-- Product Card 4 -->
                        <article class="product-card">
                            <div class="product-card__image">
                                <img src="img/product-card-img.png" alt="Смартфон Apple iPhone 15 Plus 128GB" loading="lazy">
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
                                <h3 class="product-card__title">
                                    <a href="product.php">Смартфон Apple iPhone 15 Plus 128GB</a>
                                </h3>
                                <div class="product-card__prices">
                                    <span class="product-card__price">3 499 р.</span>
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn--primary">Купить</button>
                                    <button class="btn btn--outline"><span>В корзину</span></button>
                                </div>
                            </div>
                        </article>

                        <!-- Product Card 5 -->
                        <article class="product-card">
                            <div class="product-card__image">
                                <img src="img/product-card-img.png" alt="Смартфон Apple iPhone 14 128GB" loading="lazy">
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
                                <h3 class="product-card__title">
                                    <a href="product.php">Смартфон Apple iPhone 14 128GB</a>
                                </h3>
                                <div class="product-card__prices">
                                    <span class="product-card__price">2 799 р.</span>
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn--primary">Купить</button>
                                    <button class="btn btn--outline"><span>В корзину</span></button>
                                </div>
                            </div>
                        </article>

                        <!-- Product Card 6 -->
                        <article class="product-card">
                            <div class="product-card__image">
                                <img src="img/product-card-img.png" alt="Смартфон Apple iPhone 14 Plus 128GB" loading="lazy">
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
                                <h3 class="product-card__title">
                                    <a href="product.php">Смартфон Apple iPhone 14 Plus 128GB</a>
                                </h3>
                                <div class="product-card__prices">
                                    <span class="product-card__price">2 999 р.</span>
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn--primary">Купить</button>
                                    <button class="btn btn--outline"><span>В корзину</span></button>
                                </div>
                            </div>
                        </article>

                        <!-- Product Card 7 -->
                        <article class="product-card">
                            <div class="product-card__image">
                                <img src="img/product-card-img.png" alt="Смартфон Apple iPhone 13 128GB" loading="lazy">
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
                                <h3 class="product-card__title">
                                    <a href="product.php">Смартфон Apple iPhone 13 128GB</a>
                                </h3>
                                <div class="product-card__prices">
                                    <span class="product-card__price">2 299 р.</span>
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn--primary">Купить</button>
                                    <button class="btn btn--outline"><span>В корзину</span></button>
                                </div>
                            </div>
                        </article>

                        <!-- Product Card 8 -->
                        <article class="product-card">
                            <div class="product-card__image">
                                <img src="img/product-card-img.png" alt="Смартфон Samsung Galaxy S24 Ultra 256GB" loading="lazy">
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
                                <h3 class="product-card__title">
                                    <a href="product.php">Смартфон Samsung Galaxy S24 Ultra 256GB</a>
                                </h3>
                                <div class="product-card__prices">
                                    <span class="product-card__price">3 899 р.</span>
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn--primary">Купить</button>
                                    <button class="btn btn--outline"><span>В корзину</span></button>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Pagination -->
                    <div class="category__pagination">
                        <nav class="pagination" aria-label="Пагинация">
                            <a href="#" class="pagination__item pagination__item--disabled" aria-label="Предыдущая страница">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 3L5 8L10 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" class="pagination__item pagination__item--active" aria-current="page">1</a>
                            <a href="#" class="pagination__item">2</a>
                            <a href="#" class="pagination__item">3</a>
                            <span class="pagination__item">...</span>
                            <a href="#" class="pagination__item">5</a>
                            <a href="#" class="pagination__item" aria-label="Следующая страница">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </nav>
                    </div>

                    <!-- Show More Button (Mobile) -->
                    <div class="category__show-more">
                        <button class="btn btn--outline btn--block">Показать ещё</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Modal (Mobile) -->
        <div class="category__filter-modal" id="filterModal" aria-hidden="true">
            <div class="category__filter-modal-content">
                <div class="category__filter-modal-header">
                    <h2 class="category__filter-modal-title">Фильтр</h2>
                    <button class="category__filter-modal-close" id="filterModalClose" aria-label="Закрыть фильтр">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="category__filter-modal-body">
                    <div class="filters filters--mobile">
                        <div class="filters__body">
                            <!-- Price Filter -->
                            <div class="filters__group filters__group--expanded">
                                <button class="filters__group-toggle" aria-expanded="true">
                                    <span class="filters__group-title">Цена, BYN</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <div class="filters__price" data-range-slider data-min="100" data-max="4500" data-step="10" data-value-from="100" data-value-to="3400">
                                        <div class="filters__price-slider">
                                            <div class="filters__price-track"></div>
                                            <div class="filters__price-track-fill"></div>
                                            <div class="filters__price-thumb filters__price-thumb--from" data-thumb="from"></div>
                                            <div class="filters__price-thumb filters__price-thumb--to" data-thumb="to"></div>
                                        </div>
                                        <div class="filters__price-inputs">
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">от</span>
                                                <input type="number" class="filters__price-input filters__price-input--from" value="100" min="100" max="4500" step="10">
                                            </div>
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">до</span>
                                                <input type="number" class="filters__price-input filters__price-input--to" value="3400" min="100" max="4500" step="10">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Brand Filter -->
                            <div class="filters__group filters__group--expanded">
                                <button class="filters__group-toggle" aria-expanded="true">
                                    <span class="filters__group-title">Производитель</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content filters__group-content--scrollable">
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand-mobile" value="apple" checked>
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Apple</span>
                                        <span class="filters__checkbox-count">(223)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand-mobile" value="samsung" checked>
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Samsung</span>
                                        <span class="filters__checkbox-count">(209)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand-mobile" value="xiaomi">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Xiaomi</span>
                                        <span class="filters__checkbox-count">(62)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand-mobile" value="honor">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Honor</span>
                                        <span class="filters__checkbox-count">(38)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand-mobile" value="huawei">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Huawei</span>
                                        <span class="filters__checkbox-count">(11)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand-mobile" value="poco">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">POCO</span>
                                        <span class="filters__checkbox-count">(76)</span>
                                    </label>
                                    <label class="filters__checkbox">
                                        <input type="checkbox" name="brand-mobile" value="redmi">
                                        <span class="filters__checkbox-box">
                                            <svg class="filters__checkbox-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4L4 7L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="filters__checkbox-label">Redmi</span>
                                        <span class="filters__checkbox-count">(50)</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Storage Filter (collapsed) -->
                            <div class="filters__group">
                                <button class="filters__group-toggle" aria-expanded="false">
                                    <span class="filters__group-title">Объем встроенной памяти</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content"></div>
                            </div>

                            <!-- RAM Filter (collapsed) -->
                            <div class="filters__group">
                                <button class="filters__group-toggle" aria-expanded="false">
                                    <span class="filters__group-title">Объем оперативной памяти</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content"></div>
                            </div>

                            <!-- OS Filter (collapsed) -->
                            <div class="filters__group">
                                <button class="filters__group-toggle" aria-expanded="false">
                                    <span class="filters__group-title">Операционная система</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content"></div>
                            </div>

                            <!-- Screen Diagonal Filter -->
                            <div class="filters__group filters__group--expanded">
                                <button class="filters__group-toggle" aria-expanded="true">
                                    <span class="filters__group-title">Диагональ экрана, дюймы</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <div class="filters__price" data-range-slider data-min="4" data-max="8" data-value-from="4" data-value-to="6">
                                        <div class="filters__price-slider">
                                            <div class="filters__price-track"></div>
                                            <div class="filters__price-track-fill"></div>
                                            <div class="filters__price-thumb filters__price-thumb--from" data-thumb="from"></div>
                                            <div class="filters__price-thumb filters__price-thumb--to" data-thumb="to"></div>
                                        </div>
                                        <div class="filters__price-inputs">
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">от</span>
                                                <input type="number" class="filters__price-input filters__price-input--from" value="4" min="4" max="8" step="0.1">
                                            </div>
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">до</span>
                                                <input type="number" class="filters__price-input filters__price-input--to" value="6" min="4" max="8" step="0.1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Battery Filter -->
                            <div class="filters__group filters__group--expanded">
                                <button class="filters__group-toggle" aria-expanded="true">
                                    <span class="filters__group-title">Емкость аккумулятора, мА·ч</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content">
                                    <div class="filters__price" data-range-slider data-min="1000" data-max="12000" data-value-from="1000" data-value-to="8000">
                                        <div class="filters__price-slider">
                                            <div class="filters__price-track"></div>
                                            <div class="filters__price-track-fill"></div>
                                            <div class="filters__price-thumb filters__price-thumb--from" data-thumb="from"></div>
                                            <div class="filters__price-thumb filters__price-thumb--to" data-thumb="to"></div>
                                        </div>
                                        <div class="filters__price-inputs">
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">от</span>
                                                <input type="number" class="filters__price-input filters__price-input--from" value="1000" min="1000" max="12000" step="100">
                                            </div>
                                            <div class="filters__price-input-wrapper">
                                                <span class="filters__price-prefix">до</span>
                                                <input type="number" class="filters__price-input filters__price-input--to" value="8000" min="1000" max="12000" step="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Camera Filter (collapsed) -->
                            <div class="filters__group">
                                <button class="filters__group-toggle" aria-expanded="false">
                                    <span class="filters__group-title">Разрешение камеры</span>
                                    <svg class="filters__group-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="filters__group-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category__filter-modal-footer">
                    <button class="btn btn--primary filters__btn-apply" id="filterModalApply">Применить</button>
                    <button class="btn btn--outline-gradient filters__btn-reset" id="filterModalReset"><span>Сбросить все</span></button>
                </div>
            </div>
        </div>
    </main>

<?php require_once 'footer.php'; ?>
