<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BY Store - Интернет магазин электроники</title>
    <meta name="description" content="Купить оригинальную технику Apple, Xiaomi, Samsung и других брендов в Беларуси. Гарантия, доставка, выгодные цены.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <!-- Top Row -->
            <div class="header__top">
                <div class="header__logo">
                    <img src="icon/logo.svg" alt="BY Store" loading="lazy">
                </div>

                <div class="header__search">
                    <input type="text" class="header__search-input" placeholder="Поиск на сайте">
                    <svg class="header__search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="8" stroke="#6d6d6d" stroke-width="2" stroke-linecap="round"/>
                        <path d="M21 21L16.65 16.65" stroke="#6d6d6d" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>

                <div class="header__info">
                    <p class="header__info-title">Прием заказов и консультация:</p>
                    <p class="header__info-text">пн-пт 9:00 - 21:00, сб-вс 9:00 - 19:00</p>
                </div>

                <div class="header__phone">
                    <img src="icon/phone.svg" width="16" height="16" alt="">
                    <span>+375 (29) 104-51-66</span>
                    <a href="#" class="header__telegram" aria-label="Telegram">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.777 4.42997C20.0241 4.32596 20.2946 4.29008 20.5603 4.32608C20.826 4.36208 21.0772 4.46863 21.2877 4.63465C21.4982 4.80067 21.6604 5.02008 21.7574 5.27005C21.8543 5.52002 21.8825 5.79141 21.839 6.05597L19.571 19.813C19.351 21.14 17.895 21.901 16.678 21.24C15.66 20.687 14.148 19.835 12.788 18.946C12.108 18.501 10.025 17.076 10.281 16.062C10.501 15.195 14.001 11.937 16.001 9.99997C16.786 9.23897 16.428 8.79997 15.501 9.49997C13.199 11.238 9.50302 13.881 8.28102 14.625C7.20302 15.281 6.64102 15.393 5.96902 15.281C4.74302 15.077 3.60602 14.761 2.67802 14.376C1.42402 13.856 1.48502 12.132 2.67702 11.63L19.777 4.42997Z" fill="#2AABEE"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Bottom Row -->
            <div class="header__bottom">
                <nav class="header__nav">
                    <div class="header__nav-item header__nav-item--dropdown">
                        <a href="#" class="header__nav-link" aria-expanded="false" aria-haspopup="true">
                            <span>Каталог</span>
                            <svg class="header__nav-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu">
                            <!-- Level 1: Categories -->
                            <div class="dropdown-menu__list">
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Мобильные телефоны</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <!-- Level 2: Brands -->
                                    <div class="dropdown-menu__submenu">
                                        <div class="dropdown-menu__list">
                                            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                                <span class="dropdown-menu__link">Apple</span>
                                                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <!-- Level 3: Models -->
                                                <div class="dropdown-menu__submenu">
                                                    <div class="dropdown-menu__list">
                                                        <a href="#" class="dropdown-menu__link">iPhone 15 Pro Max</a>
                                                        <a href="#" class="dropdown-menu__link">iPhone 15 Pro</a>
                                                        <a href="#" class="dropdown-menu__link">iPhone 15</a>
                                                        <a href="#" class="dropdown-menu__link">iPhone 14</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                                <span class="dropdown-menu__link">Xiaomi</span>
                                                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="dropdown-menu__submenu">
                                                    <div class="dropdown-menu__list">
                                                        <a href="#" class="dropdown-menu__link">Redmi Note 13</a>
                                                        <a href="#" class="dropdown-menu__link">Xiaomi 14</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="dropdown-menu__link">Samsung</a>
                                            <a href="#" class="dropdown-menu__link">Sony</a>
                                            <a href="#" class="dropdown-menu__link">POCO</a>
                                            <a href="#" class="dropdown-menu__link">OnePlus</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Аксессуары</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="dropdown-menu__submenu">
                                        <div class="dropdown-menu__list">
                                            <a href="#" class="dropdown-menu__link">Чехлы</a>
                                            <a href="#" class="dropdown-menu__link">Защитные стекла</a>
                                            <a href="#" class="dropdown-menu__link">Зарядные устройства</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Планшеты</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="dropdown-menu__submenu">
                                        <div class="dropdown-menu__list">
                                            <a href="#" class="dropdown-menu__link">Apple iPad</a>
                                            <a href="#" class="dropdown-menu__link">Samsung Galaxy Tab</a>
                                            <a href="#" class="dropdown-menu__link">Xiaomi Tablet</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Часы</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="dropdown-menu__submenu">
                                        <div class="dropdown-menu__list">
                                            <a href="#" class="dropdown-menu__link">Apple Watch</a>
                                            <a href="#" class="dropdown-menu__link">Samsung Galaxy Watch</a>
                                            <a href="#" class="dropdown-menu__link">Xiaomi Watch</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Компьютеры и ноутбуки</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="dropdown-menu__submenu">
                                        <div class="dropdown-menu__list">
                                            <a href="#" class="dropdown-menu__link">Ноутбуки</a>
                                            <a href="#" class="dropdown-menu__link">Моноблоки</a>
                                            <a href="#" class="dropdown-menu__link">Периферия</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Игровая зона</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="dropdown-menu__submenu">
                                        <div class="dropdown-menu__list">
                                            <a href="#" class="dropdown-menu__link">PlayStation</a>
                                            <a href="#" class="dropdown-menu__link">Xbox</a>
                                            <a href="#" class="dropdown-menu__link">Nintendo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Конструктор LEGO</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Бытовая техника</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Электроника</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Стайлеры</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                                    <span class="dropdown-menu__link">Электротранспорт</span>
                                    <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header__nav-link">Оплата и доставка</a>
                    <div class="header__nav-item header__nav-item--dropdown">
                        <a href="#" class="header__nav-link">
                            <span>Клиентам</span>
                            <svg class="header__nav-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <a href="#" class="header__nav-link">trade in</a>
                    <a href="#" class="header__nav-link">Блог</a>
                </nav>

                <div class="header__actions">
                    <a href="#" class="header__action" aria-label="Избранное (2 товара)">
                        <span class="header__action-icon">
                            <img src="icon/wishlist.svg" width="32" height="27" alt="" aria-hidden="true">
                            <span class="header__action-count">2</span>
                        </span>
                        <span class="header__action-text">Избранное</span>
                    </a>
                    <a href="#" class="header__action" aria-label="Сравнение (7 товаров)">
                        <span class="header__action-icon">
                            <img src="icon/compare.svg" width="32" height="32" alt="" aria-hidden="true">
                            <span class="header__action-count">7</span>
                        </span>
                        <span class="header__action-text">Сравнение</span>
                    </a>
                    <a href="#" class="header__action" aria-label="Корзина (1 товар на 2 900 руб.)">
                        <span class="header__action-icon">
                            <img src="icon/cart.svg" width="29" height="32" alt="" aria-hidden="true">
                            <span class="header__action-count">1</span>
                        </span>
                        <div class="header__cart-info">
                            <span class="header__cart-label">Корзина:</span>
                            <span class="header__cart-price">2 900 руб.</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Header (separate for mobile) -->
        <div class="header__mobile">
            <button class="header__menu-btn" id="menuToggle" aria-label="Открыть меню" aria-expanded="false" aria-controls="mobileMenu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M3 12H21" stroke="#1d1d1d" stroke-width="2" stroke-linecap="round"/>
                    <path d="M3 6H21" stroke="#1d1d1d" stroke-width="2" stroke-linecap="round"/>
                    <path d="M3 18H21" stroke="#1d1d1d" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
            <a href="/" class="header__mobile-logo">
                <img src="icon/logo.svg" alt="BY Store - Главная" loading="lazy">
            </a>
            <div class="header__mobile-actions">
                <a href="#" class="header__mobile-action" aria-label="Избранное (2 товара)">
                    <img src="icon/wishlist.svg" width="24" height="20" alt="" aria-hidden="true">
                    <span class="header__mobile-action-count">2</span>
                </a>
                <a href="#" class="header__mobile-action" aria-label="Сравнение (10 товаров)">
                    <img src="icon/compare.svg" width="24" height="24" alt="" aria-hidden="true">
                    <span class="header__mobile-action-count">10</span>
                </a>
                <a href="#" class="header__mobile-action" aria-label="Корзина (1 товар)">
                    <img src="icon/cart.svg" width="21" height="24" alt="" aria-hidden="true">
                    <span class="header__mobile-action-count">1</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu__overlay" id="mobileMenuOverlay"></div>
        <div class="mobile-menu__content">
            <!-- Level 1: Main Menu -->
            <div class="mobile-menu__level mobile-menu__level--1" id="mobileMenuLevel1">
                <!-- Search -->
                <div class="mobile-menu__search">
                    <input type="text" class="mobile-menu__search-input" placeholder="Поиск на сайте">
                    <svg class="mobile-menu__search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="8" stroke="#6d6d6d" stroke-width="2"/>
                        <path d="M21 21L16.65 16.65" stroke="#6d6d6d" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>

                <!-- Menu Items -->
                <nav class="mobile-menu__nav">
                    <button class="mobile-menu__item mobile-menu__item--has-submenu" data-target="catalog">
                        <span>Каталог</span>
                        <svg class="mobile-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <a href="#" class="mobile-menu__item">
                        <span>Оплата и доставка</span>
                    </a>
                    <button class="mobile-menu__item mobile-menu__item--has-submenu" data-target="clients">
                        <span>Клиентам</span>
                        <svg class="mobile-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <a href="#" class="mobile-menu__item">
                        <span>trade in</span>
                    </a>
                    <a href="#" class="mobile-menu__item">
                        <span>Блог</span>
                    </a>
                </nav>

                <!-- Contact Info -->
                <div class="mobile-menu__info">
                    <div class="mobile-menu__schedule">
                        <p class="mobile-menu__schedule-title">Прием заказов и консультация:</p>
                        <p class="mobile-menu__schedule-text">пн-пт 9:00 - 21:00, сб-вс 9:00 - 19:00</p>
                    </div>
                    <div class="mobile-menu__contact">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92V19.92C22.0011 20.1986 21.9441 20.4742 21.8325 20.7294C21.7209 20.9846 21.5573 21.2137 21.3521 21.4019C21.1468 21.5901 20.9046 21.7336 20.6407 21.8228C20.3769 21.912 20.0974 21.9452 19.82 21.92C16.7428 21.5857 13.787 20.5342 11.19 18.85C8.77382 17.3147 6.72534 15.2662 5.19 12.85C3.5 10.25 2.45 7.3 2.12 4.22C2.095 3.943 2.1275 3.663 2.2165 3.3989C2.3055 3.1348 2.4488 2.8923 2.6368 2.6867C2.8248 2.4812 3.0538 2.3172 3.3089 2.2052C3.564 2.0932 3.8396 2.0357 4.12 2.03H7.12C7.62673 2.02833 8.11472 2.22716 8.47883 2.58557C8.84294 2.94398 9.05627 3.4368 9.07 3.95C9.0916 4.5311 9.16317 5.1095 9.284 5.68C9.32977 5.9041 9.31631 6.1361 9.24487 6.3536C9.17343 6.5712 9.04651 6.7658 8.87699 6.917L7.46 8.23C8.06773 9.53791 8.89746 10.7373 9.91 11.78C10.9627 12.7926 12.1621 13.6223 13.47 14.23L14.8 12.81C14.9546 12.6426 15.1507 12.5181 15.3688 12.4487C15.5869 12.3793 15.8188 12.3672 16.043 12.413C16.6135 12.5338 17.1919 12.6054 17.773 12.627C18.2907 12.6441 18.7846 12.8625 19.1421 13.2304C19.4995 13.5983 19.6974 14.1032 19.693 14.63V16.92H22Z" fill="#1d1d1d"/>
                        </svg>
                        <span class="mobile-menu__phone">+375 (29) 104-51-66</span>
                        <svg class="mobile-menu__telegram" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.777 4.42997C20.0241 4.32596 20.2946 4.29008 20.5603 4.32608C20.826 4.36208 21.0772 4.46863 21.2877 4.63465C21.4982 4.80067 21.6604 5.02008 21.7574 5.27005C21.8543 5.52002 21.8825 5.79141 21.839 6.05597L19.571 19.813C19.351 21.14 17.895 21.901 16.678 21.24C15.66 20.687 14.148 19.835 12.788 18.946C12.108 18.501 10.025 17.076 10.281 16.062C10.501 15.195 14.001 11.937 16.001 9.99997C16.786 9.23897 16.428 8.79997 15.501 9.49997C13.199 11.238 9.50302 13.881 8.28102 14.625C7.20302 15.281 6.64102 15.393 5.96902 15.281C4.74302 15.077 3.60602 14.761 2.67802 14.376C1.42402 13.856 1.48502 12.132 2.67702 11.63L19.777 4.42997Z" fill="#2AABEE"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Level 2: Submenu -->
            <div class="mobile-menu__level mobile-menu__level--2" id="mobileMenuLevel2">
                <!-- Back Button -->
                <button class="mobile-menu__back" id="mobileMenuBack">
                    <img src="icon/arrow-left.svg" width="20" height="20" alt="">
                    <span>Назад</span>
                </button>

                <!-- Submenu Content -->
                <div class="mobile-menu__scroll">
                    <!-- Submenu Items -->
                    <div class="mobile-menu__submenu-list" id="mobileMenuSubmenuList">
                        <!-- Filled by JS -->
                    </div>
                </div>

                <!-- Scroll Indicator -->
                <div class="mobile-menu__scroll-indicator">
                    <div class="mobile-menu__scroll-track">
                        <div class="mobile-menu__scroll-bar" id="mobileMenuScrollBar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>