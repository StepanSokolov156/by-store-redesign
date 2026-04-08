-- UP: Update headerMenu chunk (id=165) and create mobileMenu chunk
-- Applied: 2026-04-08

-- =============================================================
-- 1. headerMenu chunk (id=165) — new dropdown design
-- =============================================================
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<div class="header__nav-item header__nav-item--dropdown">
    <a href="[[~8]]" class="header__nav-link" aria-expanded="false" aria-haspopup="true">
        <span>Каталог</span>
        <svg class="header__nav-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
    <!-- Dropdown Menu -->
    <div class="dropdown-menu">
        <!-- Level 1: Categories -->
        <div class="dropdown-menu__list">
            <!-- Мобильные телефоны -->
            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                <span class="dropdown-menu__link">Мобильные телефоны</span>
                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="dropdown-menu__submenu">
                    <div class="dropdown-menu__list">
                        <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                            <span class="dropdown-menu__link">Apple</span>
                            <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="dropdown-menu__submenu">
                                <div class="dropdown-menu__list">
                                    <a href="[[~8158]]" class="dropdown-menu__link">iPhone 17</a>
                                    <a href="[[~8168]]" class="dropdown-menu__link">iPhone Air</a>
                                    <a href="[[~7385]]" class="dropdown-menu__link">iPhone 16</a>
                                    <a href="[[~7843]]" class="dropdown-menu__link">iPhone 16E</a>
                                    <a href="[[~1256]]" class="dropdown-menu__link">iPhone 15</a>
                                    <a href="[[~278]]" class="dropdown-menu__link">iPhone 14</a>
                                    <a href="[[~269]]" class="dropdown-menu__link">iPhone 13</a>
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
                                    <a href="[[~7908]]" class="dropdown-menu__link">Xiaomi 15</a>
                                    <a href="[[~7915]]" class="dropdown-menu__link">Xiaomi 15 Ultra</a>
                                    <a href="[[~6955]]" class="dropdown-menu__link">Redmi 13C</a>
                                    <a href="[[~7749]]" class="dropdown-menu__link">Redmi Note 14 4G</a>
                                    <a href="[[~7760]]" class="dropdown-menu__link">Redmi Note 14 Pro 4G</a>
                                    <a href="[[~7676]]" class="dropdown-menu__link">Redmi Note 14 Pro 5G</a>
                                    <a href="[[~7776]]" class="dropdown-menu__link">Redmi Note 14 Pro+ 5G</a>
                                    <a href="[[~7955]]" class="dropdown-menu__link">Redmi Note 14S</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                            <span class="dropdown-menu__link">Samsung</span>
                            <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="dropdown-menu__submenu">
                                <div class="dropdown-menu__list">
                                    <a href="[[~338]]" class="dropdown-menu__link">Galaxy S</a>
                                    <a href="[[~322]]" class="dropdown-menu__link">Galaxy A</a>
                                    <a href="[[~523]]" class="dropdown-menu__link">Galaxy Z Flip</a>
                                    <a href="[[~8261]]" class="dropdown-menu__link">Galaxy Z Fold</a>
                                </div>
                            </div>
                        </div>
                        <a href="[[~7598]]" class="dropdown-menu__link">Sony</a>
                        <a href="[[~527]]" class="dropdown-menu__link">POCO</a>
                        <a href="[[~969]]" class="dropdown-menu__link">OnePlus</a>
                        <a href="[[~841]]" class="dropdown-menu__link">Honor</a>
                        <a href="[[~280]]" class="dropdown-menu__link">Google</a>
                        <a href="[[~7302]]" class="dropdown-menu__link">Huawei</a>
                        <a href="[[~1130]]" class="dropdown-menu__link">Realme</a>
                        <a href="[[~1007]]" class="dropdown-menu__link">Nothing Phone</a>
                        <a href="[[~6811]]" class="dropdown-menu__link">Asus</a>
                        <a href="[[~6931]]" class="dropdown-menu__link">Tecno</a>
                        <a href="[[~1347]]" class="dropdown-menu__link">Infinix</a>
                    </div>
                </div>
            </div>
            <!-- Аксессуары -->
            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                <span class="dropdown-menu__link">Аксессуары</span>
                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="dropdown-menu__submenu">
                    <div class="dropdown-menu__list">
                        <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                            <span class="dropdown-menu__link">Наушники</span>
                            <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="dropdown-menu__submenu">
                                <div class="dropdown-menu__list">
                                    <a href="[[~197]]" class="dropdown-menu__link">Apple</a>
                                    <a href="[[~1085]]" class="dropdown-menu__link">Samsung</a>
                                </div>
                            </div>
                        </div>
                        <a href="[[~7116]]" class="dropdown-menu__link">Чехлы</a>
                        <a href="[[~7079]]" class="dropdown-menu__link">Зарядные устройства</a>
                        <a href="[[~7261]]" class="dropdown-menu__link">Экшн камеры</a>
                        <a href="[[~7284]]" class="dropdown-menu__link">Портативные колонки</a>
                        <a href="[[~7301]]" class="dropdown-menu__link">Стилусы</a>
                    </div>
                </div>
            </div>
            <!-- Планшеты -->
            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                <span class="dropdown-menu__link">Планшеты</span>
                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="dropdown-menu__submenu">
                    <div class="dropdown-menu__list">
                        <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                            <span class="dropdown-menu__link">Apple</span>
                            <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="dropdown-menu__submenu">
                                <div class="dropdown-menu__list">
                                    <a href="[[~908]]" class="dropdown-menu__link">iPad 10.2</a>
                                    <a href="[[~907]]" class="dropdown-menu__link">iPad 10.9</a>
                                    <a href="[[~929]]" class="dropdown-menu__link">iPad Mini</a>
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
                                    <a href="[[~8058]]" class="dropdown-menu__link">Xiaomi Pad 2</a>
                                    <a href="[[~7850]]" class="dropdown-menu__link">Xiaomi Pad 7</a>
                                    <a href="[[~8262]]" class="dropdown-menu__link">Xiaomi Pad 7 Pro</a>
                                    <a href="[[~7002]]" class="dropdown-menu__link">Redmi Pad SE</a>
                                    <a href="[[~7380]]" class="dropdown-menu__link">Redmi Pad Pro</a>
                                    <a href="[[~1020]]" class="dropdown-menu__link">Xiaomi Pad 6</a>
                                    <a href="[[~7468]]" class="dropdown-menu__link">Xiaomi Pad 6S Pro</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                            <span class="dropdown-menu__link">Samsung</span>
                            <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="dropdown-menu__submenu">
                                <div class="dropdown-menu__list">
                                    <a href="[[~8020]]" class="dropdown-menu__link">Tab S10+</a>
                                    <a href="[[~8021]]" class="dropdown-menu__link">Tab S10 FE</a>
                                </div>
                            </div>
                        </div>
                        <a href="[[~7377]]" class="dropdown-menu__link">POCO</a>
                    </div>
                </div>
            </div>
            <!-- Часы -->
            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                <span class="dropdown-menu__link">Часы</span>
                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="dropdown-menu__submenu">
                    <div class="dropdown-menu__list">
                        <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                            <span class="dropdown-menu__link">Apple</span>
                            <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="dropdown-menu__submenu">
                                <div class="dropdown-menu__list">
                                    <a href="[[~6728]]" class="dropdown-menu__link">Ultra</a>
                                    <a href="[[~7668]]" class="dropdown-menu__link">Ultra 2</a>
                                    <a href="[[~6727]]" class="dropdown-menu__link">SE</a>
                                    <a href="[[~7825]]" class="dropdown-menu__link">10</a>
                                </div>
                            </div>
                        </div>
                        <a href="[[~1096]]" class="dropdown-menu__link">Samsung</a>
                        <a href="[[~1117]]" class="dropdown-menu__link">Huawei</a>
                        <a href="[[~6753]]" class="dropdown-menu__link">Google</a>
                    </div>
                </div>
            </div>
            <!-- Компьютеры и ноутбуки -->
            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                <span class="dropdown-menu__link">Компьютеры и ноутбуки</span>
                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="dropdown-menu__submenu">
                    <div class="dropdown-menu__list">
                        <a href="[[~7265]]" class="dropdown-menu__link">Apple</a>
                    </div>
                </div>
            </div>
            <!-- Игровая зона -->
            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                <span class="dropdown-menu__link">Игровая зона</span>
                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="dropdown-menu__submenu">
                    <div class="dropdown-menu__list">
                        <a href="[[~7275]]" class="dropdown-menu__link">Приставки</a>
                        <a href="[[~7276]]" class="dropdown-menu__link">VR-очки</a>
                    </div>
                </div>
            </div>
            <!-- Конструктор LEGO -->
            <a href="[[~7530]]" class="dropdown-menu__link">Конструктор LEGO</a>
            <!-- Бытовая техника -->
            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                <span class="dropdown-menu__link">Бытовая техника</span>
                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="dropdown-menu__submenu">
                    <div class="dropdown-menu__list">
                        <a href="[[~24]]" class="dropdown-menu__link">Пылесосы</a>
                        <a href="[[~7442]]" class="dropdown-menu__link">Телевизоры</a>
                    </div>
                </div>
            </div>
            <!-- Электроника -->
            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                <span class="dropdown-menu__link">Электроника</span>
                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="dropdown-menu__submenu">
                    <div class="dropdown-menu__list">
                        <a href="[[~7450]]" class="dropdown-menu__link">Саундбары и домашние кинотеатры</a>
                    </div>
                </div>
            </div>
            <!-- Стайлеры -->
            <a href="[[~7307]]" class="dropdown-menu__link">Стайлеры</a>
            <!-- Электротранспорт -->
            <div class="dropdown-menu__item dropdown-menu__item--has-submenu">
                <span class="dropdown-menu__link">Электротранспорт</span>
                <svg class="dropdown-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="dropdown-menu__submenu">
                    <div class="dropdown-menu__list">
                        <a href="[[~207]]" class="dropdown-menu__link">Kugoo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="[[~231]]" class="header__nav-link">Оплата и доставка</a>

<div class="header__nav-item header__nav-item--dropdown">
    <a href="#" class="header__nav-link">
        <span>Клиентам</span>
        <svg class="header__nav-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu__list">
            <a href="[[~235]]" class="dropdown-menu__link">О нас</a>
            <a href="[[~236]]" class="dropdown-menu__link">Контакты</a>
            <a href="[[~233]]" class="dropdown-menu__link">Гарантии</a>
            <a href="[[~232]]" class="dropdown-menu__link">Рассрочка</a>
            <a href="[[~7077]]" class="dropdown-menu__link">Поставщикам</a>
        </div>
    </div>
</div>

<a href="[[~234]]" class="header__nav-link">Trade in</a>
<a href="[[~4]]" class="header__nav-link">Блог</a>
' WHERE `id` = 165;

-- =============================================================
-- 2. Create mobileMenu chunk
-- =============================================================
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`name`, `description`, `snippet`, `cache_type`, `locked`)
VALUES ('mobileMenu', 'Mobile menu for new design', '<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu__overlay" id="mobileMenuOverlay"></div>
    <div class="mobile-menu__content">
        <!-- Level 1: Main Menu -->
        <div class="mobile-menu__level mobile-menu__level--1" id="mobileMenuLevel1">
            <!-- Search -->
            <div class="mobile-menu__search">
                [[!mSearchForm?
                &tplForm=`mSearch2formTpl`
                &tpl=`mSearch2acTpl`
                &limit=`7`
                &fields=`pagetitle:5,longtitle:4`
                &pageId=`230`
                &minQuery=`2`
                &parents=`8`
                &showSearchLog=`1`
                &element=`msProducts`
                ]]
            </div>

            <!-- Menu Items -->
            <nav class="mobile-menu__nav">
                <button class="mobile-menu__item mobile-menu__item--has-submenu" data-target="catalog">
                    <span>Каталог</span>
                    <svg class="mobile-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <a href="[[~231]]" class="mobile-menu__item">
                    <span>Оплата и доставка</span>
                </a>
                <button class="mobile-menu__item mobile-menu__item--has-submenu" data-target="clients">
                    <span>Клиентам</span>
                    <svg class="mobile-menu__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <a href="[[~234]]" class="mobile-menu__item">
                    <span>Trade in</span>
                </a>
                <a href="[[~4]]" class="mobile-menu__item">
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
                    <a href="tel:+375291045166" class="mobile-menu__phone">+375 (29) 104-51-66</a>
                    <a href="https://t.me/by_storeby" class="mobile-menu__telegram" target="_blank" aria-label="Telegram">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.777 4.42997C20.0241 4.32596 20.2946 4.29008 20.5603 4.32608C20.826 4.36208 21.0772 4.46863 21.2877 4.63465C21.4982 4.80067 21.6604 5.02008 21.7574 5.27005C21.8543 5.52002 21.8825 5.79141 21.839 6.05597L19.571 19.813C19.351 21.14 17.895 21.901 16.678 21.24C15.66 20.687 14.148 19.835 12.788 18.946C12.108 18.501 10.025 17.076 10.281 16.062C10.501 15.195 14.001 11.937 16.001 9.99997C16.786 9.23897 16.428 8.79997 15.501 9.49997C13.199 11.238 9.50302 13.881 8.28102 14.625C7.20302 15.281 6.64102 15.393 5.96902 15.281C4.74302 15.077 3.60602 14.761 2.67802 14.376C1.42402 13.856 1.48502 12.132 2.67702 11.63L19.777 4.42997Z" fill="#2AABEE"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Level 2: Submenu -->
        <div class="mobile-menu__level mobile-menu__level--2" id="mobileMenuLevel2">
            <button class="mobile-menu__back" id="mobileMenuBack">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5 15L7.5 10L12.5 5" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Назад</span>
            </button>
            <div class="mobile-menu__scroll">
                <div class="mobile-menu__submenu-list" id="mobileMenuSubmenuList">
                    <!-- Filled by JS -->
                </div>
            </div>
            <div class="mobile-menu__scroll-indicator">
                <div class="mobile-menu__scroll-track">
                    <div class="mobile-menu__scroll-bar" id="mobileMenuScrollBar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
', 0, 0);

-- =============================================================
-- DOWN: Remove mobileMenu chunk, restore headerMenu
-- =============================================================
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `name` = 'mobileMenu';
-- (headerMenu rollback stored in git history)
