/**
 * BY Store - Main JavaScript
 * @version 2.0.0
 * @description Handles all interactive functionality with modular architecture
 */

'use strict';

// ===========================================
// BYStore Namespace
// ===========================================
const BYStore = {
    // Configuration
    config: {
        breakpoints: {
            mobile: 480,
            tablet: 768,
            desktop: 1024
        },
        debounceTime: 250,
        scrollOffset: 70
    },

    // State
    state: {
        mobileMenuOpen: false,
        reviewRating: 0,
        cart: {
            items: [],
            count: 0
        }
    },

    // Module placeholders (initialized below)
    menu: { },
    sliders: { },
    forms: { },
    cart: { },
    utils: { },
    productPage: { },
    categoryFilters: { },
    productVariants: { },

    /**
     * Initialize all modules
     */
    init() {
        this.menu.init();
        this.sliders.init();
        this.forms.init();
        this.cart.init();
        this.utils.initScrollAnimations();
        this.utils.initSmoothScroll();
        this.productPage.init();
        this.categoryFilters.init();
        this.productVariants.init();
        console.log('%c BY Store ', 'background: linear-gradient(135deg, #d73fab 0%, #6a0bd4 100%); color: #ffffff; font-size: 16px; font-weight: bold; padding: 10px 20px; border-radius: 8px;');
        console.log('%c Интернет-магазин электроники v2.0.0 ', 'color: #666; font-size: 12px;');
    }
};

// ===========================================
// Menu Module
// ===========================================
BYStore.menu = {
    elements: { },
    submenuData: { },

    init() {
        this.cacheElements();
        this.bindEvents();
        this.initHeaderScroll();
    },

    cacheElements() {
        this.elements = {
            toggle: document.getElementById('menuToggle'),
            overlay: document.getElementById('mobileMenuOverlay'),
            level1: document.getElementById('mobileMenuLevel1'),
            level2: document.getElementById('mobileMenuLevel2'),
            backBtn: document.getElementById('mobileMenuBack'),
            submenuList: document.getElementById('mobileMenuSubmenuList'),
            scrollBar: document.getElementById('mobileMenuScrollBar'),
            scrollArea: document.querySelector('.mobile-menu__scroll')
        };
    },

    bindEvents() {
        if (!this.elements.toggle) return;

        this.elements.toggle.addEventListener('click', () => this.open());
        this.elements.overlay.addEventListener('click', () => this.close());
        this.elements.backBtn.addEventListener('click', () => this.goBack());

        // Dropdown accessibility
        this.initDropdownAccessibility();

        // Handle submenu items
        const submenuItems = document.querySelectorAll('.mobile-menu__item--has-submenu');
        submenuItems.forEach(item => {
            item.addEventListener('click', () => {
                const target = item.getAttribute('data-target');
                const data = this.submenuData[target];
                if (data) this.showSubmenu(data);
            });
        });

        // Close on ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && BYStore.state.mobileMenuOpen) {
                this.close();
            }
        });
    },

    open() {
        BYStore.state.mobileMenuOpen = true;
        document.getElementById('mobileMenu').classList.add('active');
        document.body.style.overflow = 'hidden';
    },

    close() {
        BYStore.state.mobileMenuOpen = false;
        document.getElementById('mobileMenu').classList.remove('active');
        document.body.style.overflow = '';
        setTimeout(() => {
            this.elements.level1.classList.remove('hidden');
            this.elements.level2.classList.remove('active');
        }, 300);
    },

    goBack() {
        this.elements.level2.classList.remove('active');
        this.elements.level1.classList.remove('hidden');
    },

    showSubmenu(data) {
        this.elements.level1.classList.add('hidden');

        // Update items list
        this.elements.submenuList.innerHTML = '';
        data.items.forEach(item => {
            const itemEl = document.createElement(item.hasSubmenu ? 'button' : 'a');
            itemEl.className = 'mobile-menu__submenu-item';

            const span = document.createElement('span');
            span.textContent = item.name;
            itemEl.appendChild(span);

            if (item.hasSubmenu) {
                const arrow = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                arrow.setAttribute('width', '16');
                arrow.setAttribute('height', '16');
                arrow.setAttribute('viewBox', '0 0 16 16');
                arrow.setAttribute('fill', 'none');
                arrow.classList.add('mobile-menu__arrow');
                arrow.innerHTML = '<path d="M4 6L8 10L12 6" stroke="#1d1d1d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>';
                itemEl.appendChild(arrow);

                itemEl.addEventListener('click', () => {
                    const subData = this.submenuData[item.id];
                    if (subData) this.showSubmenu(subData);
                });
            } else {
                itemEl.href = '#';
            }

            this.elements.submenuList.appendChild(itemEl);
        });

        this.elements.level2.classList.add('active');
        this.updateScrollIndicator();
    },

    updateScrollIndicator() {
        const scrollArea = this.elements.scrollArea;
        const scrollBar = this.elements.scrollBar;
        if (!scrollArea || !scrollBar) return;

        const updateBar = () => {
            const scrollTop = scrollArea.scrollTop;
            const scrollHeight = scrollArea.scrollHeight - scrollArea.clientHeight;
            const scrollPercent = scrollHeight > 0 ? (scrollTop / scrollHeight) * 100 : 0;
            const barHeight = Math.max(20, 100 - scrollPercent);
            const barTop = Math.min(80, scrollPercent);

            scrollBar.style.height = barHeight + '%';
            scrollBar.style.top = barTop + '%';
        };

        scrollArea.addEventListener('scroll', updateBar);
        updateBar();
    },

    initHeaderScroll() {
        const header = document.getElementById('header');
        if (!header) return;

        window.addEventListener('scroll', BYStore.utils.debounce(() => {
            const currentScroll = window.pageYOffset;
            header.classList.toggle('scrolled', currentScroll > 10);
        }, 10));
    },

    initDropdownAccessibility() {
        // Desktop dropdown accessibility
        const dropdownItems = document.querySelectorAll('.header__nav-item--dropdown');
        dropdownItems.forEach(item => {
            const link = item.querySelector('.header__nav-link');
            if (!link) return;

            item.addEventListener('mouseenter', () => {
                link.setAttribute('aria-expanded', 'true');
            });

            item.addEventListener('mouseleave', () => {
                link.setAttribute('aria-expanded', 'false');
            });

            // Keyboard navigation
            link.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    const isExpanded = link.getAttribute('aria-expanded') === 'true';
                    link.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
                }
            });
        });

        // Mobile menu button accessibility
        const menuToggle = document.getElementById('menuToggle');
        if (menuToggle) {
            menuToggle.addEventListener('click', () => {
                const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
                menuToggle.setAttribute('aria-expanded', !isExpanded);
            });
        }
    }
};

// Submenu data
BYStore.menu.submenuData = {
    catalog: {
        title: 'Каталог',
        items: [
            { name: 'Мобильные телефоны', hasSubmenu: true, id: 'phones' },
            { name: 'Аксессуары', hasSubmenu: true, id: 'accessories' },
            { name: 'Планшеты', hasSubmenu: true, id: 'tablets' },
            { name: 'Часы', hasSubmenu: true, id: 'watches' },
            { name: 'Компьютеры и ноутбуки', hasSubmenu: true, id: 'laptops' },
            { name: 'Игровая зона', hasSubmenu: true, id: 'gaming' },
            { name: 'Конструктор LEGO', hasSubmenu: false },
            { name: 'Бытовая техника', hasSubmenu: false },
            { name: 'Электроника', hasSubmenu: false },
            { name: 'Стайлеры', hasSubmenu: false },
            { name: 'Электротранспорт', hasSubmenu: false }
        ]
    },
    phones: {
        title: 'Мобильные телефоны',
        items: [
            { name: 'Apple', hasSubmenu: true },
            { name: 'Redmi', hasSubmenu: true },
            { name: 'Xiaomi', hasSubmenu: true },
            { name: 'Samsung', hasSubmenu: true },
            { name: 'Sony', hasSubmenu: true },
            { name: 'POCO', hasSubmenu: true },
            { name: 'OnePlus', hasSubmenu: true },
            { name: 'Honor', hasSubmenu: true },
            { name: 'Asus', hasSubmenu: true },
            { name: 'Tecno', hasSubmenu: true },
            { name: 'Google', hasSubmenu: true },
            { name: 'Infinix', hasSubmenu: true },
            { name: 'Nothing Phone', hasSubmenu: true },
            { name: 'Realme', hasSubmenu: true },
            { name: 'Huawei', hasSubmenu: true }
        ]
    },
    accessories: {
        title: 'Аксессуары',
        items: [
            { name: 'Чехлы', hasSubmenu: false },
            { name: 'Защитные стекла', hasSubmenu: false },
            { name: 'Зарядные устройства', hasSubmenu: false }
        ]
    },
    tablets: {
        title: 'Планшеты',
        items: [
            { name: 'Apple iPad', hasSubmenu: false },
            { name: 'Samsung Galaxy Tab', hasSubmenu: false },
            { name: 'Xiaomi Tablet', hasSubmenu: false }
        ]
    },
    watches: {
        title: 'Часы',
        items: [
            { name: 'Apple Watch', hasSubmenu: false },
            { name: 'Samsung Galaxy Watch', hasSubmenu: false },
            { name: 'Xiaomi Watch', hasSubmenu: false }
        ]
    },
    laptops: {
        title: 'Компьютеры и ноутбуки',
        items: [
            { name: 'Ноутбуки', hasSubmenu: false },
            { name: 'Моноблоки', hasSubmenu: false },
            { name: 'Периферия', hasSubmenu: false }
        ]
    },
    gaming: {
        title: 'Игровая зона',
        items: [
            { name: 'PlayStation', hasSubmenu: false },
            { name: 'Xbox', hasSubmenu: false },
            { name: 'Nintendo', hasSubmenu: false }
        ]
    },
    clients: {
        title: 'Клиентам',
        items: [
            { name: 'О компании', hasSubmenu: false },
            { name: 'Доставка', hasSubmenu: false },
            { name: 'Оплата', hasSubmenu: false },
            { name: 'Возврат', hasSubmenu: false },
            { name: 'Гарантия', hasSubmenu: false }
        ]
    }
};

// ===========================================
// Sliders Module
// ===========================================
BYStore.sliders = {
    instances: { },

    init() {
        this.initHeroSliders();
        this.initProductsSliders();
        this.populateFilters();
        this.initBrandsSlider();
        this.initReviewsSlider();
        this.initBlogSlider();
        this.initCountdownTimers();
        this.initHeroHeightEqualize();
        this.initProductFilters();
        this.initSimilarProductsSlider();
        this.initViewedProductsSlider();
        this.initCategoryBannersSlider();
        this.initProductCardHorizontalSliders();
    },

    initHeroSliders() {
        // Main hero slider (left)
        const heroMainSlider = document.querySelector('.heroMainSwiper');
        if (heroMainSlider && typeof Swiper !== 'undefined') {
            this.instances.heroMain = new Swiper(heroMainSlider, {
                loop: true,
                autoplay: { delay: 10000, disableOnInteraction: false },
                effect: 'fade',
                fadeEffect: { crossFade: true }
            });

            this.bindHeroNavigation();
        }

        // Products hero slider (right)
        const heroProductsSlider = document.querySelector('.heroProductsSwiper');
        if (heroProductsSlider && typeof Swiper !== 'undefined') {
            this.instances.heroProducts = new Swiper(heroProductsSlider, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay: { delay: 8000, disableOnInteraction: false },
                breakpoints: {
                    480: { slidesPerView: 2, spaceBetween: 12 },
                    767: { slidesPerView: 3, spaceBetween: 12 },
                    1024: { slidesPerView: 1, spaceBetween: 0 }
                }
            });

            this.bindHeroProductsNavigation();
        }
    },

    generateDots(dotsContainerId, swiperInstance) {
        var dotsEl = document.getElementById(dotsContainerId);
        if (!dotsEl || !swiperInstance) return;

        var slideCount = swiperInstance.el.querySelectorAll('.swiper-slide:not(.swiper-slide-duplicate)').length;
        if (slideCount === 0) return;

        dotsEl.innerHTML = '';
        for (var i = 0; i < slideCount; i++) {
            (function (index) {
                var dot = document.createElement('span');
                dot.className = 'hero__dot';
                if (index === 0) dot.classList.add('hero__dot--active');
                dot.addEventListener('click', function () {
                    swiperInstance.slideToLoop(index);
                });
                dotsEl.appendChild(dot);
            })(i);
        }

        swiperInstance.on('slideChange', function () {
            var active = swiperInstance.realIndex;
            dotsEl.querySelectorAll('.hero__dot').forEach(function (dot, i) {
                dot.classList.toggle('hero__dot--active', i === active);
            });
        });
    },

    bindHeroNavigation() {
        this.generateDots('heroMainDots', this.instances.heroMain);

        const mainPrevBtn = document.getElementById('heroMainPrev');
        const mainNextBtn = document.getElementById('heroMainNext');

        if (mainPrevBtn) {
            mainPrevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                this.instances.heroMain.slidePrev();
            }.bind(this));
        }

        if (mainNextBtn) {
            mainNextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                this.instances.heroMain.slideNext();
            }.bind(this));
        }
    },

    bindHeroProductsNavigation() {
        this.generateDots('heroProductsDots', this.instances.heroProducts);

        const productsPrevBtn = document.querySelector('.hero__nav--products .products-arrow-prev');
        const productsNextBtn = document.querySelector('.hero__nav--products .products-arrow-next');

        if (productsPrevBtn) {
            productsPrevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                this.instances.heroProducts.slidePrev();
            }.bind(this));
        }

        if (productsNextBtn) {
            productsNextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                this.instances.heroProducts.slideNext();
            }.bind(this));
        }
    },

    initProductsSliders() {
        const sliderConfigs = [
            { selector: '.hitsSwiper', name: 'hits', prevId: 'hitsSliderPrev', nextId: 'hitsSliderNext' },
            { selector: '.newArrivalsSwiper', name: 'newArrivals', prevId: 'newArrivalsSliderPrev', nextId: 'newArrivalsSliderNext' },
            { selector: '.recommendedSwiper', name: 'recommended', prevId: 'recommendedSliderPrev', nextId: 'recommendedSliderNext' },
            { selector: '.saleSwiper', name: 'sale', prevId: 'saleSliderPrev', nextId: 'saleSliderNext' }
        ];

        sliderConfigs.forEach(config => {
            const sliderElement = document.querySelector(config.selector);
            if (sliderElement && typeof Swiper !== 'undefined') {
                this.instances[config.name] = new Swiper(sliderElement, {
                    loop: false,
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    pagination: {
                        el: sliderElement.querySelector('.products-pagination'),
                        clickable: true
                    },
                    breakpoints: {
                        320: { slidesPerView: 2, spaceBetween: 8 },
                        480: { slidesPerView: 2.5, spaceBetween: 10 },
                        600: { slidesPerView: 3, spaceBetween: 15 },
                        768: { slidesPerView: 3, spaceBetween: 20 },
                        900: { slidesPerView: 4, spaceBetween: 20 },
                        1024: { slidesPerView: 4, spaceBetween: 20 }
                    }
                });

                // Bind navigation
                const prevBtn = document.getElementById(config.prevId);
                const nextBtn = document.getElementById(config.nextId);
                if (prevBtn) prevBtn.addEventListener('click', () => this.instances[config.name].slidePrev());
                if (nextBtn) nextBtn.addEventListener('click', () => this.instances[config.name].slideNext());
            }
        });
    },

    initBrandsSlider() {
        const brandsSlider = document.querySelector('.brands-swiper');
        if (brandsSlider && typeof Swiper !== 'undefined') {
            this.instances.brands = new Swiper(brandsSlider, {
                slidesPerView: 'auto',
                spaceBetween: 30,
                grabCursor: true,
                simulateTouch: true,
                loop: false,
                breakpoints: {
                    320: { spaceBetween: 10 },
                    768: { spaceBetween: 30 }
                }
            });
        }
    },

    initReviewsSlider() {
        const reviewsSlider = document.querySelector('.reviewsSwiper');
        if (reviewsSlider && typeof Swiper !== 'undefined') {
            this.instances.reviews = new Swiper(reviewsSlider, {
                loop: false,
                slidesPerView: 'auto',
                spaceBetween: 30,
                grabCursor: true,
                simulateTouch: true,
                breakpoints: {
                    320: { spaceBetween: 15 },
                    768: { spaceBetween: 30 }
                }
            });

            const prevBtn = document.getElementById('reviewsSliderPrev');
            const nextBtn = document.getElementById('reviewsSliderNext');
            if (prevBtn) prevBtn.addEventListener('click', () => this.instances.reviews.slidePrev());
            if (nextBtn) nextBtn.addEventListener('click', () => this.instances.reviews.slideNext());

            this.initReviewExpand();
        }
    },

    initBlogSlider() {
        const blogSlider = document.querySelector('.blogSwiper');
        if (blogSlider && typeof Swiper !== 'undefined') {
            this.instances.blog = new Swiper(blogSlider, {
                loop: false,
                slidesPerView: 'auto',
                spaceBetween: 30,
                grabCursor: true,
                simulateTouch: true,
                pagination: {
                    el: blogSlider.querySelector('.blog-pagination'),
                    clickable: true
                },
                breakpoints: {
                    320: { spaceBetween: 15 },
                    768: { spaceBetween: 30 }
                }
            });

            const prevBtn = document.getElementById('blogSliderPrev');
            const nextBtn = document.getElementById('blogSliderNext');
            if (prevBtn) prevBtn.addEventListener('click', () => this.instances.blog.slidePrev());
            if (nextBtn) nextBtn.addEventListener('click', () => this.instances.blog.slideNext());
        }
    },

    initCountdownTimers() {
        const countdowns = document.querySelectorAll('.countdown');
        countdowns.forEach(countdown => {
            const timeInSeconds = parseInt(countdown.dataset.time);
            if (!timeInSeconds) return;

            let remainingTime = timeInSeconds;
            const updateTimer = () => {
                const days = Math.floor(remainingTime / (24 * 60 * 60));
                const hours = Math.floor((remainingTime % (24 * 60 * 60)) / (60 * 60));
                const minutes = Math.floor((remainingTime % (60 * 60)) / 60);
                const seconds = remainingTime % 60;

                const formatNumber = (num) => String(num).padStart(2, '0');
                countdown.textContent = `${days} дн ${formatNumber(hours)}:${formatNumber(minutes)}:${formatNumber(seconds)}`;

                if (remainingTime > 0) {
                    remainingTime--;
                } else {
                    clearInterval(interval);
                }
            };

            updateTimer();
            const interval = setInterval(updateTimer, 1000);
        });
    },

    initHeroHeightEqualize() {
        const heroMain = document.querySelector('.hero__main');
        const heroProducts = document.querySelector('.hero__products');
        if (!heroMain || !heroProducts) return;

        const equalizeHeight = () => {
            if (window.innerWidth <= 1024) {
                heroMain.style.height = '';
                heroProducts.style.height = '';
                return;
            }

            heroMain.style.height = '';
            heroProducts.style.height = '';

            const mainHeight = heroMain.offsetHeight;
            const productsHeight = heroProducts.offsetHeight;
            const maxHeight = Math.max(mainHeight, productsHeight);

            heroMain.style.height = maxHeight + 'px';
            heroProducts.style.height = maxHeight + 'px';
        };

        equalizeHeight();
        window.addEventListener('resize', BYStore.utils.debounce(equalizeHeight, BYStore.config.debounceTime));
        window.addEventListener('load', equalizeHeight);
    },

    populateFilters() {
        // Filter buttons are now generated server-side by sectionProducts snippet.
        // No need to rebuild them here — only initialize click handlers.
    },

    initProductFilters() {
        document.querySelectorAll('.products-filter').forEach(filterEl => {
            const buttons = filterEl.querySelectorAll('.products-filter__btn');
            buttons.forEach(btn => {
                btn.addEventListener('click', () => {
                    buttons.forEach(b => b.classList.remove('products-filter__btn--active'));
                    btn.classList.add('products-filter__btn--active');

                    const category = btn.getAttribute('data-category');
                    const section = filterEl.closest('.products-section');
                    if (section) {
                        this.filterProducts(section, category);
                    }
                });
            });
        });

        this.initDraggableScroll();
    },

    initDraggableScroll() {
        ['hitsFilter', 'newArrivalsFilter', 'recommendedFilter', 'saleFilter'].forEach(id => {
            const el = document.getElementById(id);
            if (!el) return;
            let isDown = false, startX, scrollLeft;
            el.addEventListener('mousedown', e => {
                isDown = true;
                el.classList.add('dragging');
                startX = (e.pageX || e.touches[0].pageX) - el.offsetLeft;
                scrollLeft = el.scrollLeft;
            });
            el.addEventListener('mouseleave', () => { isDown = false; el.classList.remove('dragging'); });
            el.addEventListener('mouseup', () => { isDown = false; el.classList.remove('dragging'); });
            el.addEventListener('mousemove', e => {
                if (!isDown) return;
                e.preventDefault();
                const x = (e.pageX || e.touches[0].pageX) - el.offsetLeft;
                el.scrollLeft = scrollLeft - (x - startX) * 2;
            });
        });
    },

    filterProducts(section, category) {
        const swiperEl = section.querySelector('.swiper');
        if (!swiperEl) return;

        const slides = swiperEl.querySelectorAll('.swiper-slide');
        slides.forEach(slide => {
            const slideCategory = slide.getAttribute('data-category');
            slide.style.display = (category === 'all' || slideCategory === category) ? '' : 'none';
        });

        const map = [
            ['hitsSwiper', 'hits'], ['newArrivalsSwiper', 'newArrivals'],
            ['recommendedSwiper', 'recommended'], ['saleSwiper', 'sale']
        ];
        for (const [cls, name] of map) {
            if (section.querySelector('.' + cls) && this.instances[name]) {
                this.instances[name].update();
                this.instances[name].slideTo(0);
                break;
            }
        }
    },    initReviewExpand() {
        const expandButtons = document.querySelectorAll('.review-card__expand');
        expandButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const card = btn.closest('.review-card');
                const text = card.querySelector('.review-card__text');
                const isExpanded = text.classList.contains('review-card__text--expanded');

                text.classList.toggle('review-card__text--expanded');
                text.style.maxHeight = isExpanded ? '' : '164px';
                text.style.overflowY = isExpanded ? '' : 'auto';
                btn.textContent = isExpanded ? 'Показать весь текст' : 'Свернуть';
            });
        });
    },

    initSimilarProductsSlider() {
        const similarSlider = document.querySelector('.similarProductsSwiper');
        if (similarSlider && typeof Swiper !== 'undefined') {
            this.instances.similar = new Swiper(similarSlider, {
                loop: false,
                slidesPerView: 4,
                spaceBetween: 30,
                grabCursor: true,
                simulateTouch: true,
                navigation: {
                    nextEl: '.similar-products-arrow--next',
                    prevEl: '.similar-products-arrow--prev'
                },
                breakpoints: {
                    320: { slidesPerView: 2, spaceBetween: 10 },
                    480: { slidesPerView: 2, spaceBetween: 10 },
                    768: { slidesPerView: 3, spaceBetween: 20 },
                    1024: { slidesPerView: 4, spaceBetween: 30 }
                }
            });
        }
    },

    initViewedProductsSlider() {
        const viewedSlider = document.querySelector('.viewedProductsSwiper');
        if (viewedSlider && typeof Swiper !== 'undefined') {
            this.instances.viewed = new Swiper(viewedSlider, {
                loop: false,
                slidesPerView: 4,
                spaceBetween: 30,
                grabCursor: true,
                simulateTouch: true,
                navigation: {
                    nextEl: '.viewed-products-arrow--next',
                    prevEl: '.viewed-products-arrow--prev'
                },
                breakpoints: {
                    320: { slidesPerView: 2, spaceBetween: 10 },
                    480: { slidesPerView: 2, spaceBetween: 10 },
                    768: { slidesPerView: 3, spaceBetween: 20 },
                    1024: { slidesPerView: 4, spaceBetween: 30 }
                }
            });
        }
    },

    initCategoryBannersSlider() {
        const categoryBannersSlider = document.querySelector('.category-banners__swiper');
        if (categoryBannersSlider && typeof Swiper !== 'undefined') {
            this.instances.categoryBanners = new Swiper(categoryBannersSlider, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay: { delay: 5000, disableOnInteraction: false },
                navigation: {
                    nextEl: categoryBannersSlider.querySelector('.hero__arrow--next'),
                    prevEl: categoryBannersSlider.querySelector('.hero__arrow--prev')
                },
                breakpoints: {
                    320: { slidesPerView: 1, spaceBetween: 0 },
                    768: { slidesPerView: 1, spaceBetween: 0 },
                    1024: { slidesPerView: 2, spaceBetween: 30 }
                }
            });

            // Update custom dots on slide change
            this.instances.categoryBanners.on('slideChange', (swiper) => {
                const dots = categoryBannersSlider.querySelectorAll('.hero__dot');
                dots.forEach((dot, index) => {
                    dot.classList.toggle('hero__dot--active', index === swiper.realIndex);
                });
            });
        }
    },

    initProductCardHorizontalSliders() {
        // Initialize image sliders for horizontal product cards
        const productCardSliders = document.querySelectorAll('.product-card-horizontal__slider');
        if (typeof Swiper !== 'undefined') {
            productCardSliders.forEach((slider, index) => {
                const pagination = slider.closest('.product-card-horizontal__left').querySelector('.product-card-horizontal__pagination');

                this.instances[`productCardHorizontal${index}`] = new Swiper(slider, {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    pagination: pagination ? {
                        el: pagination,
                        clickable: true,
                        bulletClass: 'swiper-pagination-bullet',
                        bulletActiveClass: 'swiper-pagination-bullet-active'
                    } : false
                });
            });
        }
    }
};

// ===========================================
// Cart Module
// ===========================================
BYStore.cart = {
    init() {
        this.initProductActions();
        this.initAddToCartAnimation();
        this.initVariantsToggle();
        this.updateFavoriterCounter();
    },

    initProductActions() {
        // Favorite buttons (standard product cards)
        document.querySelectorAll('.product-card__favorites.msFavoriterToggle').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const id = btn.getAttribute('data-id');
                if (!id) return;
                $.post('/index.php?q=msFavoriter', {id: id}, function(response) {
                    if (response && response.success) {
                        if (response.data.added) {
                            btn.classList.add('_active_');
                        } else {
                            btn.classList.remove('_active_');
                        }
                        BYStore.cart.updateFavoriterCounter();
                    }
                }, 'json');
            });
        });

        // Compare buttons (standard product cards)
        document.querySelectorAll('.product-card__compare[data-id]').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const id = btn.getAttribute('data-id');
                if (!id) return;
                const isAdded = btn.classList.contains('_active_');
                const action = isAdded ? 'remove' : 'add';
                $.post(document.location.href, {cmp_action: action, list: 'default', resource: id}, function(response) {
                    if (response && response.success) {
                        if (action === 'add') {
                            btn.classList.add('_active_');
                        } else {
                            btn.classList.remove('_active_');
                        }
                        BYStore.cart.updateComparisonCounter(response.data.total);
                    }
                }, 'json');
            });
        });

        // Horizontal card favorite buttons
        document.querySelectorAll('.product-card-horizontal__favorites').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const id = btn.getAttribute('data-id');
                if (!id) return;
                $.post('/index.php?q=msFavoriter', {id: id}, function(response) {
                    if (response && response.success) {
                        const img = btn.querySelector('img');
                        if (response.data.added) {
                            btn.classList.add('active');
                            btn.style.background = '#d73fab';
                            if (img) img.style.filter = 'brightness(0) invert(1)';
                        } else {
                            btn.classList.remove('active');
                            btn.style.background = '';
                            if (img) img.style.filter = '';
                        }
                        BYStore.cart.updateFavoriterCounter();
                    }
                }, 'json');
            });
        });

        // Horizontal card compare buttons
        document.querySelectorAll('.product-card-horizontal__compare').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                btn.classList.toggle('active');
                const img = btn.querySelector('img');
                if (btn.classList.contains('active')) {
                    btn.style.background = '#d73fab';
                    if (img) img.style.filter = 'brightness(0) invert(1)';
                } else {
                    btn.style.background = '';
                    if (img) img.style.filter = '';
                }
            });
        });

        // Variant favorite buttons (horizontal)
        document.querySelectorAll('.product-card-horizontal__variant-favorites').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const id = btn.getAttribute('data-id');
                if (!id) return;
                $.post('/index.php?q=msFavoriter', {id: id}, function(response) {
                    if (response && response.success) {
                        const img = btn.querySelector('img');
                        if (response.data.added) {
                            btn.classList.add('active');
                            btn.style.background = '#d73fab';
                            if (img) img.style.filter = 'brightness(0) invert(1)';
                        } else {
                            btn.classList.remove('active');
                            btn.style.background = '';
                            if (img) img.style.filter = '';
                        }
                        BYStore.cart.updateFavoriterCounter();
                    }
                }, 'json');
            });
        });

        // Variant compare buttons (horizontal)
        document.querySelectorAll('.product-card-horizontal__variant-compare').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                btn.classList.toggle('active');
                const img = btn.querySelector('img');
                if (btn.classList.contains('active')) {
                    btn.style.background = '#d73fab';
                    if (img) img.style.filter = 'brightness(0) invert(1)';
                } else {
                    btn.style.background = '';
                    if (img) img.style.filter = '';
                }
            });
        });
    },

    updateFavoriterCounter() {
        $.post('/index.php?q=msFavoriter', {}, function(response) {
            const count = (response && response.data) ? (response.data.total || 0) : 0;
            const desktopCounter = document.getElementById('wishlistCount');
            const mobileCounter = document.getElementById('wishlistCountMobile');
            if (desktopCounter) {
                desktopCounter.textContent = count > 0 ? count : '';
            }
            if (mobileCounter) {
                mobileCounter.textContent = count > 0 ? count : '';
            }
        }, 'json');
    },

    updateComparisonCounter(total) {
        if (total === undefined) {
            // Read from getComparison snippet output in header
            const desktopCounter = document.getElementById('comparisonCount');
            const mobileCounter = document.getElementById('comparisonCountMobile');
            if (desktopCounter) total = parseInt(desktopCounter.textContent) || 0;
            else return;
        }
        const desktopCounter = document.getElementById('comparisonCount');
        const mobileCounter = document.getElementById('comparisonCountMobile');
        if (desktopCounter) {
            desktopCounter.textContent = total > 0 ? total : '';
        }
        if (mobileCounter) {
            mobileCounter.textContent = total > 0 ? total : '';
        }
    },

    initVariantsToggle() {
        // Show/Hide variants buttons (horizontal) - toggle
        document.querySelectorAll('.product-card-horizontal__show-variants').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                const card = btn.closest('.product-card-horizontal');
                const variants = card.querySelector('.product-card-horizontal__variants');
                const textSpan = btn.querySelector('.product-card-horizontal__show-variants-text');
                const arrow = btn.querySelector('.product-card-horizontal__show-variants-arrow');

                if (variants) {
                    const isVisible = variants.classList.contains('product-card-horizontal__variants--visible');

                    if (isVisible) {
                        // Hide
                        variants.classList.remove('product-card-horizontal__variants--visible');
                        variants.setAttribute('aria-hidden', 'true');
                        btn.classList.remove('product-card-horizontal__show-variants--expanded');
                        btn.setAttribute('aria-expanded', 'false');
                        if (textSpan) textSpan.textContent = 'Показать доступные варианты';
                        if (arrow) arrow.style.transform = 'rotate(0deg)';
                    } else {
                        // Show
                        variants.classList.add('product-card-horizontal__variants--visible');
                        variants.setAttribute('aria-hidden', 'false');
                        btn.classList.add('product-card-horizontal__show-variants--expanded');
                        btn.setAttribute('aria-expanded', 'true');
                        if (textSpan) textSpan.textContent = 'Скрыть варианты';
                        if (arrow) arrow.style.transform = 'rotate(180deg)';
                    }
                }
            });
        });

        // Hide variants buttons (horizontal) - inside variants container
        document.querySelectorAll('.product-card-horizontal__hide-variants').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                const card = btn.closest('.product-card-horizontal');
                const variants = card.querySelector('.product-card-horizontal__variants');
                const showBtn = card.querySelector('.product-card-horizontal__show-variants');

                if (variants && showBtn) {
                    variants.classList.remove('product-card-horizontal__variants--visible');
                    variants.setAttribute('aria-hidden', 'true');
                    showBtn.classList.remove('product-card-horizontal__show-variants--expanded');
                    showBtn.setAttribute('aria-expanded', 'false');

                    const textSpan = showBtn.querySelector('.product-card-horizontal__show-variants-text');
                    const arrow = showBtn.querySelector('.product-card-horizontal__show-variants-arrow');
                    if (textSpan) textSpan.textContent = 'Показать доступные варианты';
                    if (arrow) arrow.style.transform = 'rotate(0deg)';
                }
            });
        });
    },

    initAddToCartAnimation() {
        document.querySelectorAll('.btn--primary').forEach(btn => {
            if (btn.textContent.trim() === 'Купить') {
                btn.addEventListener('click', () => this.animateAddToCart(btn));
            }
        });
    },

    animateAddToCart(btn) {
        const productCard = btn.closest('.product-card');
        if (!productCard) return;

        const flyingImg = productCard.querySelector('img');
        const cartIcon = document.querySelector('.header__action--cart');
        if (!flyingImg || !cartIcon) return;

        const flyer = flyingImg.cloneNode();
        flyer.style.cssText = `
            position: fixed; z-index: 9999; pointer-events: none;
            transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
            width: 50px; height: 50px; object-fit: contain;
        `;

        const flyerRect = flyingImg.getBoundingClientRect();
        flyer.style.left = flyerRect.left + 'px';
        flyer.style.top = flyerRect.top + 'px';

        document.body.appendChild(flyer);

        setTimeout(() => {
            const cartRect = cartIcon.getBoundingClientRect();
            flyer.style.left = cartRect.left + 'px';
            flyer.style.top = cartRect.top + 'px';
            flyer.style.opacity = '0';
            flyer.style.transform = 'scale(0.2)';
        }, 50);

        setTimeout(() => {
            flyer.remove();
            this.updateCounter();
        }, 850);
    },

    updateCounter() {
        const counter = document.querySelector('.header__action--cart .header__action-count');
        if (counter) {
            const count = parseInt(counter.textContent) || 0;
            counter.textContent = count + 1;
            counter.style.animation = 'pulse 0.3s ease';
            setTimeout(() => { counter.style.animation = ''; }, 300);
        }
    }
};

// ===========================================
// Forms Module
// ===========================================
BYStore.forms = {
    init() {
        this.initLeadForms();
        this.initReviewModal();
        this.initPhoneFormatting();
    },

    initLeadForms() {
        const leadForms = document.querySelectorAll('.lead-form__form');
        leadForms.forEach(form => {
            form.addEventListener('submit', (e) => this.handleLeadFormSubmit(e, form));
        });
    },

    handleLeadFormSubmit(e, form) {
        e.preventDefault();

        if (!this.validateForm(form)) {
            return;
        }

        const formData = new FormData(form);
        const submitButton = form.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;

        submitButton.disabled = true;
        submitButton.textContent = 'Отправка...';

        setTimeout(() => {
            submitButton.textContent = 'Отправлено!';
            submitButton.style.background = 'linear-gradient(135deg, #4caf50 0%, #45a049 100%)';

            form.reset();
            this.clearFormErrors(form);

            setTimeout(() => {
                submitButton.disabled = false;
                submitButton.textContent = originalText;
                submitButton.style.background = '';
            }, 3000);
        }, 1500);
    },

    validateForm(form) {
        let isValid = true;
        this.clearFormErrors(form);

        // Check required fields
        form.querySelectorAll('[required]').forEach(field => {
            if (!field.value.trim()) {
                this.showFieldError(field, 'Это поле обязательно для заполнения');
                isValid = false;
            }
        });

        // Check email format
        const emailFields = form.querySelectorAll('input[type="email"]');
        emailFields.forEach(email => {
            if (email.value && !this.isValidEmail(email.value)) {
                this.showFieldError(email, 'Введите корректный email адрес');
                isValid = false;
            }
        });

        return isValid;
    },

    showFieldError(field, message) {
        field.classList.add('form-input--error');

        let errorEl = field.parentElement.querySelector('.form-error');
        if (!errorEl) {
            errorEl = document.createElement('span');
            errorEl.className = 'form-error';
            field.parentElement.appendChild(errorEl);
        }
        errorEl.textContent = message;

        field.addEventListener('input', () => {
            field.classList.remove('form-input--error');
            if (errorEl) errorEl.remove();
        }, { once: true });
    },

    clearFormErrors(form) {
        form.querySelectorAll('.form-input--error').forEach(field => {
            field.classList.remove('form-input--error');
        });
        form.querySelectorAll('.form-error').forEach(error => {
            error.remove();
        });
    },

    isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    },

    initReviewModal() {
        const modal = document.getElementById('reviewModal');
        const overlay = document.getElementById('reviewModalOverlay');
        const closeBtn = document.getElementById('reviewModalClose');
        const openBtns = document.querySelectorAll('.reviews__btn');
        const form = document.getElementById('reviewForm');
        const stars = document.querySelectorAll('.review-modal__star');

        if (!modal) return;

        openBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                this.openReviewModal();
            });
        });

        if (overlay) overlay.addEventListener('click', () => this.closeReviewModal());
        if (closeBtn) closeBtn.addEventListener('click', () => this.closeReviewModal());

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                this.closeReviewModal();
            }
        });

        // Star rating
        stars.forEach(star => {
            star.addEventListener('click', () => {
                BYStore.state.reviewRating = parseInt(star.getAttribute('data-rating'));
                this.updateStars(BYStore.state.reviewRating);
            });

            star.addEventListener('mouseenter', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                this.updateStars(rating);
            });

            star.addEventListener('mouseleave', () => {
                this.updateStars(BYStore.state.reviewRating);
            });
        });

        if (form) {
            form.addEventListener('submit', (e) => this.handleReviewSubmit(e, form));
        }
    },

    openReviewModal() {
        const modal = document.getElementById('reviewModal');
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    },

    closeReviewModal() {
        const modal = document.getElementById('reviewModal');
        modal.classList.remove('active');
        document.body.style.overflow = '';
    },

    updateStars(rating) {
        const stars = document.querySelectorAll('.review-modal__star');
        stars.forEach(star => {
            const starRating = parseInt(star.getAttribute('data-rating'));
            star.classList.toggle('review-modal__star--active', starRating <= rating);
        });
    },

    handleReviewSubmit(e, form) {
        e.preventDefault();

        if (BYStore.state.reviewRating === 0) {
            alert('Пожалуйста, поставьте оценку');
            return;
        }

        if (!this.validateForm(form)) {
            return;
        }

        const submitButton = form.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;

        submitButton.disabled = true;
        submitButton.textContent = 'Отправка...';

        setTimeout(() => {
            submitButton.textContent = 'Спасибо за отзыв!';
            submitButton.style.background = 'linear-gradient(135deg, #4caf50 0%, #45a049 100%)';

            setTimeout(() => {
                form.reset();
                BYStore.state.reviewRating = 0;
                this.updateStars(0);
                submitButton.disabled = false;
                submitButton.textContent = originalText;
                submitButton.style.background = '';
                this.closeReviewModal();
            }, 2000);
        }, 1500);
    },

    initPhoneFormatting() {
        const phoneInputs = document.querySelectorAll('input[type="tel"]');
        phoneInputs.forEach(phoneInput => {
            phoneInput.addEventListener('input', (e) => {
                let value = e.target.value.replace(/\D/g, '');

                if (value.length > 0) {
                    if (value[0] === '8') {
                        value = '3' + value;
                    }
                    if (value[0] !== '3') {
                        value = '375' + value;
                    }
                }

                if (value.length > 0) {
                    let formatted = '+';
                    if (value.length > 0) formatted += value.substring(0, 3);
                    if (value.length >= 4) formatted += ' (' + value.substring(3, 5);
                    if (value.length >= 6) formatted += ') ' + value.substring(5, 8);
                    if (value.length >= 9) formatted += '-' + value.substring(8, 10);
                    if (value.length >= 11) formatted += '-' + value.substring(10, 12);

                    e.target.value = formatted;
                }
            });
        });
    }
};

// ===========================================
// Product Page Module
// ===========================================
BYStore.productPage = {
    init() {
        if (!document.querySelector('.product-page')) return;

        this.initProductGallery();
        this.initColorChips();
        this.initMemoryChips();
        this.initQuantitySelector();
        this.initProductTabs();
        this.initSpecsAccordion();
        this.initFavoriteButtons();
        this.initCompareButtons();
        this.initAllSpecsLink();
    },

    initProductGallery() {
        const mainSwiper = document.querySelector('.productGallerySwiper');
        const thumbsSwiper = document.querySelector('.productGalleryThumbsSwiper');

        if (!mainSwiper || !thumbsSwiper || typeof Swiper === 'undefined') return;

        // Initialize thumbs swiper
        const thumbsSwiperInstance = new Swiper(thumbsSwiper, {
            slidesPerView: 4,
            spaceBetween: 12,
            watchSlidesProgress: true,
            slideToClickedSlide: true
        });

        // Initialize main swiper with thumbs control
        const mainSwiperInstance = new Swiper(mainSwiper, {
            thumbs: {
                swiper: thumbsSwiperInstance
            }
        });

        // Store instances
        if (!BYStore.sliders.instances.productGallery) {
            BYStore.sliders.instances.productGallery = {};
        }
        BYStore.sliders.instances.productGallery.main = mainSwiperInstance;
        BYStore.sliders.instances.productGallery.thumbs = thumbsSwiperInstance;
    },

    initColorChips() {
        const colorChips = document.querySelectorAll('.color-chip');
        colorChips.forEach(chip => {
            chip.addEventListener('click', () => {
                colorChips.forEach(c => c.classList.remove('color-chip--active'));
                chip.classList.add('color-chip--active');
            });
        });
    },

    initMemoryChips() {
        const memoryChips = document.querySelectorAll('.option-chip');
        memoryChips.forEach(chip => {
            chip.addEventListener('click', () => {
                memoryChips.forEach(c => c.classList.remove('option-chip--active'));
                chip.classList.add('option-chip--active');
            });
        });
    },

    initQuantitySelector() {
        const quantityWrappers = document.querySelectorAll('.product-purchase__quantity');
        quantityWrappers.forEach(wrapper => {
            const minusBtn = wrapper.querySelector('.quantity-btn--minus');
            const plusBtn = wrapper.querySelector('.quantity-btn--plus');
            const input = wrapper.querySelector('.quantity-input');

            if (!minusBtn || !plusBtn || !input) return;

            let quantity = parseInt(input.value) || 1;

            minusBtn.addEventListener('click', () => {
                if (quantity > 1) {
                    quantity--;
                    input.value = quantity;
                }
            });

            plusBtn.addEventListener('click', () => {
                quantity++;
                input.value = quantity;
            });
        });
    },

    initProductTabs() {
        const tabs = document.querySelectorAll('.product-tab');
        const panes = document.querySelectorAll('.product-tab-pane');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetTab = tab.getAttribute('data-tab');
                if (!targetTab) return;

                tabs.forEach(t => t.classList.remove('product-tab--active'));
                panes.forEach(p => p.classList.remove('product-tab-pane--active'));

                tab.classList.add('product-tab--active');
                const targetPane = document.getElementById(targetTab);
                if (targetPane) {
                    targetPane.classList.add('product-tab-pane--active');
                }
            });
        });
    },

    initSpecsAccordion() {
        const accordionItems = document.querySelectorAll('.specs-accordion__item');

        accordionItems.forEach(item => {
            const header = item.querySelector('.specs-accordion__header');
            if (!header) return;

            header.addEventListener('click', () => {
                const isOpen = item.classList.contains('specs-accordion__item--open');

                // Close all items
                accordionItems.forEach(i => i.classList.remove('specs-accordion__item--open'));

                // Open clicked item if it wasn't open
                if (!isOpen) {
                    item.classList.add('specs-accordion__item--open');
                }
            });
        });
    },

    initFavoriteButtons() {
        const productId = document.querySelector('.product-page')?.getAttribute('data-product-id');
        document.querySelectorAll('.product-info__favorite').forEach(btn => {
            if (productId) btn.setAttribute('data-id', productId);
            btn.addEventListener('click', () => {
                const id = btn.getAttribute('data-id');
                if (!id) return;
                $.post('/index.php?q=msFavoriter', {id: id}, function(response) {
                    if (response && response.success) {
                        if (response.data.added) {
                            btn.classList.add('active');
                        } else {
                            btn.classList.remove('active');
                        }
                        BYStore.cart.updateFavoriterCounter();
                    }
                }, 'json');
            });
        });
    },

    initCompareButtons() {
        const productId = document.querySelector('.product-page')?.getAttribute('data-product-id');
        document.querySelectorAll('.product-info__compare').forEach(btn => {
            if (productId) btn.setAttribute('data-id', productId);
            btn.addEventListener('click', () => {
                const id = btn.getAttribute('data-id');
                if (!id) return;
                const isAdded = btn.classList.contains('active');
                const action = isAdded ? 'remove' : 'add';
                $.post(document.location.href, {cmp_action: action, list: 'default', resource: id}, function(response) {
                    if (response && response.success) {
                        if (action === 'add') {
                            btn.classList.add('active');
                        } else {
                            btn.classList.remove('active');
                        }
                        BYStore.cart.updateComparisonCounter(response.data.total);
                    }
                }, 'json');
            });
        });
    },

    initAllSpecsLink() {
        const allSpecsLink = document.querySelector('.product-info__all-specs');
        if (!allSpecsLink) return;

        allSpecsLink.addEventListener('click', () => {
            // Scroll to specs section
            const specsTab = document.querySelector('.product-tab[data-tab="specs"]');
            if (specsTab) {
                specsTab.click();
                const specsSection = document.querySelector('.specs-accordion');
                if (specsSection) {
                    specsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    }
};

// ===========================================
// Utilities Module
// ===========================================
BYStore.utils = {
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },

    initScrollAnimations() {
        const animatedElements = document.querySelectorAll('.feature-card, .catalog-card, .product-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    },

    initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                const href = anchor.getAttribute('href');
                if (href === '#' || href === '#!') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const offsetPosition = target.getBoundingClientRect().top + window.pageYOffset - BYStore.config.scrollOffset;
                    window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
                }
            });
        });
    },

    isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
};

// ===========================================
// Category Filters Module
// ===========================================
BYStore.categoryFilters = {
    elements: { },
    rangeSliders: [],

    init() {
        this.cacheElements();
        this.bindEvents();
        this.initRangeSliders();
    },

    cacheElements() {
        this.elements = {
            filterToggleBtn: document.getElementById('filterToggleBtn'),
            filterModal: document.getElementById('filterModal'),
            filterModalClose: document.getElementById('filterModalClose'),
            filterModalApply: document.getElementById('filterModalApply'),
            filterModalReset: document.getElementById('filterModalReset'),
            filtersReset: document.getElementById('filtersReset'),
            filtersApply: document.getElementById('filtersApply'),
            groupToggles: document.querySelectorAll('.filters__group-toggle'),
            filterChips: document.querySelectorAll('.category__filter-chip-remove'),
            quickFiltersShowAll: document.getElementById('quickFiltersShowAll'),
            quickFilters: document.querySelector('.quick-filters'),
            viewListBtn: document.getElementById('viewListBtn'),
            viewGridBtn: document.getElementById('viewGridBtn'),
            productsGrid: document.querySelector('.category__products')
        };
    },

    bindEvents() {
        // Mobile filter modal
        if (this.elements.filterToggleBtn) {
            this.elements.filterToggleBtn.addEventListener('click', () => this.openModal());
        }
        if (this.elements.filterModalClose) {
            this.elements.filterModalClose.addEventListener('click', () => this.closeModal());
        }
        if (this.elements.filterModal) {
            this.elements.filterModal.addEventListener('click', (e) => {
                if (e.target === this.elements.filterModal) {
                    this.closeModal();
                }
            });
        }

        // Filter group toggles (accordion)
        this.elements.groupToggles.forEach(toggle => {
            toggle.addEventListener('click', () => this.toggleGroup(toggle));
        });

        // Reset filters
        if (this.elements.filtersReset) {
            this.elements.filtersReset.addEventListener('click', () => this.resetFilters());
        }
        if (this.elements.filterModalReset) {
            this.elements.filterModalReset.addEventListener('click', () => this.resetFilters());
        }

        // Apply filters
        if (this.elements.filtersApply) {
            this.elements.filtersApply.addEventListener('click', () => this.applyFilters());
        }
        if (this.elements.filterModalApply) {
            this.elements.filterModalApply.addEventListener('click', () => {
                this.applyFilters();
                this.closeModal();
            });
        }

        // Remove filter chips
        this.elements.filterChips.forEach(chip => {
            chip.addEventListener('click', () => this.removeChip(chip));
        });

        // Quick filters "Show all" toggle
        if (this.elements.quickFiltersShowAll) {
            this.elements.quickFiltersShowAll.addEventListener('click', () => this.toggleQuickFilters());
        }

        // View toggle buttons
        if (this.elements.viewListBtn) {
            this.elements.viewListBtn.addEventListener('click', () => this.setView('list'));
        }
        if (this.elements.viewGridBtn) {
            this.elements.viewGridBtn.addEventListener('click', () => this.setView('grid'));
        }

        // Close modal on ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.elements.filterModal?.classList.contains('category__filter-modal--active')) {
                this.closeModal();
            }
        });
    },

    openModal() {
        if (!this.elements.filterModal) return;
        this.elements.filterModal.classList.add('category__filter-modal--active');
        this.elements.filterModal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    },

    closeModal() {
        if (!this.elements.filterModal) return;
        this.elements.filterModal.classList.remove('category__filter-modal--active');
        this.elements.filterModal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    },

    toggleGroup(toggle) {
        const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', !isExpanded);
    },

    resetFilters() {
        // Reset all checkboxes
        const checkboxes = document.querySelectorAll('.filters__checkbox input[type="checkbox"]');
        checkboxes.forEach(cb => cb.checked = false);

        // Reset range sliders
        this.resetRangeSliders();

        // Remove all filter chips
        const chips = document.querySelectorAll('.category__filter-chip');
        chips.forEach(chip => chip.remove());
    },

    applyFilters() {
        // Collect active filters and apply them
        // This is where you would make an AJAX request or update the URL
        console.log('Applying filters...');
    },

    removeChip(chip) {
        const chipElement = chip.closest('.category__filter-chip');
        if (chipElement) {
            chipElement.remove();
        }
    },

    toggleQuickFilters() {
        if (!this.elements.quickFilters) return;

        const isExpanded = this.elements.quickFilters.classList.toggle('quick-filters--expanded');
        const button = this.elements.quickFiltersShowAll;
        const buttonText = button.querySelector('text') || button.lastChild;
        const arrow = button.querySelector('svg');

        if (isExpanded) {
            // Update button text to "Скрыть"
            button.innerHTML = `
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1L6 11M6 1L2 5M6 1L10 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Скрыть
            `;
        } else {
            // Update button text to "Показать все"
            button.innerHTML = `
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 11L6 1M6 11L2 7M6 11L10 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Показать все
            `;
        }
    },

    setView(view) {
        if (!this.elements.productsGrid) return;

        // Update active state on buttons
        if (view === 'list') {
            this.elements.viewListBtn.classList.add('category__view-btn--active');
            this.elements.viewGridBtn.classList.remove('category__view-btn--active');
            this.elements.productsGrid.classList.add('category__products--list');
        } else {
            this.elements.viewGridBtn.classList.add('category__view-btn--active');
            this.elements.viewListBtn.classList.remove('category__view-btn--active');
            this.elements.productsGrid.classList.remove('category__products--list');
        }
    },

    // ===========================================
    // Range Slider Methods
    // ===========================================
    initRangeSliders() {
        const sliders = document.querySelectorAll('[data-range-slider]');

        sliders.forEach(slider => {
            const min = parseFloat(slider.dataset.min);
            const max = parseFloat(slider.dataset.max);
            const valueFrom = parseFloat(slider.dataset.valueFrom) || min;
            const valueTo = parseFloat(slider.dataset.valueTo) || max;

            const track = slider.querySelector('.filters__price-track');
            const trackFill = slider.querySelector('.filters__price-track-fill');
            const thumbFrom = slider.querySelector('[data-thumb="from"]');
            const thumbTo = slider.querySelector('[data-thumb="to"]');
            const inputFrom = slider.querySelector('.filters__price-input--from');
            const inputTo = slider.querySelector('.filters__price-input--to');

            const trackWidth = track.offsetWidth;
            const step = parseFloat(slider.dataset.step) || 1;

            const sliderData = {
                container: slider,
                track,
                trackFill,
                thumbFrom,
                thumbTo,
                inputFrom,
                inputTo,
                min,
                max,
                step,
                trackWidth,
                valueFrom,
                valueTo
            };

            this.rangeSliders.push(sliderData);
            this.updateSliderVisuals(sliderData);

            // Thumb drag events
            this.initThumbDrag(thumbFrom, sliderData, 'from');
            this.initThumbDrag(thumbTo, sliderData, 'to');

            // Input change events
            if (inputFrom) {
                inputFrom.addEventListener('input', () => {
                    let value = parseFloat(inputFrom.value) || min;
                    value = Math.round(value / sliderData.step) * sliderData.step;
                    value = Math.max(min, Math.min(value, sliderData.valueTo));
                    sliderData.valueFrom = value;
                    inputFrom.value = value;
                    this.updateSliderVisuals(sliderData);
                });
            }

            if (inputTo) {
                inputTo.addEventListener('input', () => {
                    let value = parseFloat(inputTo.value) || max;
                    value = Math.round(value / sliderData.step) * sliderData.step;
                    value = Math.min(max, Math.max(value, sliderData.valueFrom));
                    sliderData.valueTo = value;
                    inputTo.value = value;
                    this.updateSliderVisuals(sliderData);
                });
            }
        });
    },

    initThumbDrag(thumb, sliderData, type) {
        let isDragging = false;

        const onMouseDown = (e) => {
            e.preventDefault();
            isDragging = true;
            document.addEventListener('mousemove', onMouseMove);
            document.addEventListener('mouseup', onMouseUp);
            document.addEventListener('touchmove', onTouchMove);
            document.addEventListener('touchend', onMouseUp);
        };

        const onMouseMove = (e) => {
            if (!isDragging) return;
            this.updateThumbPosition(e.clientX, sliderData, type);
        };

        const onTouchMove = (e) => {
            if (!isDragging) return;
            if (e.touches.length > 0) {
                this.updateThumbPosition(e.touches[0].clientX, sliderData, type);
            }
        };

        const onMouseUp = () => {
            isDragging = false;
            document.removeEventListener('mousemove', onMouseMove);
            document.removeEventListener('mouseup', onMouseUp);
            document.removeEventListener('touchmove', onTouchMove);
            document.removeEventListener('touchend', onMouseUp);
        };

        thumb.addEventListener('mousedown', onMouseDown);
        thumb.addEventListener('touchstart', onMouseDown);
    },

    updateThumbPosition(clientX, sliderData, type) {
        const rect = sliderData.track.getBoundingClientRect();
        let percentage = (clientX - rect.left) / rect.width;
        percentage = Math.max(0, Math.min(1, percentage));

        let value = sliderData.min + percentage * (sliderData.max - sliderData.min);
        value = Math.round(value / sliderData.step) * sliderData.step;

        if (type === 'from') {
            value = Math.min(value, sliderData.valueTo);
            sliderData.valueFrom = value;
            if (sliderData.inputFrom) {
                sliderData.inputFrom.value = value;
            }
        } else {
            value = Math.max(value, sliderData.valueFrom);
            sliderData.valueTo = value;
            if (sliderData.inputTo) {
                sliderData.inputTo.value = value;
            }
        }

        this.updateSliderVisuals(sliderData);
    },

    updateSliderVisuals(sliderData) {
        const range = sliderData.max - sliderData.min;
        const fromPercent = ((sliderData.valueFrom - sliderData.min) / range) * 100;
        const toPercent = ((sliderData.valueTo - sliderData.min) / range) * 100;

        const trackWidth = sliderData.track.offsetWidth;

        // Update thumb positions
        if (sliderData.thumbFrom) {
            sliderData.thumbFrom.style.left = `${fromPercent}%`;
        }
        if (sliderData.thumbTo) {
            sliderData.thumbTo.style.left = `${toPercent}%`;
        }

        // Update track fill
        if (sliderData.trackFill) {
            sliderData.trackFill.style.left = `${fromPercent}%`;
            sliderData.trackFill.style.width = `${toPercent - fromPercent}%`;
        }
    },

    resetRangeSliders() {
        this.rangeSliders.forEach(sliderData => {
            sliderData.valueFrom = sliderData.min;
            sliderData.valueTo = sliderData.max;

            if (sliderData.inputFrom) {
                sliderData.inputFrom.value = sliderData.min;
            }
            if (sliderData.inputTo) {
                sliderData.inputTo.value = sliderData.max;
            }

            this.updateSliderVisuals(sliderData);
        });
    }
};

// ===========================================
// Product Variants Toggle Module
// ===========================================
BYStore.productVariants = {
    init() {
        this.bindEvents();
    },

    bindEvents() {
        // Show/hide variants button toggle
        document.addEventListener('click', (e) => {
            const showVariantsBtn = e.target.closest('.product-card-horizontal__show-variants');
            if (showVariantsBtn) {
                this.toggleVariants(showVariantsBtn);
            }

            // Hide variants button (inside variants container)
            const hideVariantsBtn = e.target.closest('.product-card-horizontal__hide-variants');
            if (hideVariantsBtn) {
                this.hideVariants(hideVariantsBtn);
            }
        });
    },

    toggleVariants(button) {
        const card = button.closest('.product-card-horizontal');
        if (!card) return;

        const variantsContainer = card.querySelector('.product-card-horizontal__variants');
        if (!variantsContainer) return;

        const textSpan = button.querySelector('.product-card-horizontal__show-variants-text');
        const arrow = button.querySelector('.product-card-horizontal__show-variants-arrow');
        const isVisible = variantsContainer.classList.contains('product-card-horizontal__variants--visible');

        if (isVisible) {
            // Hide variants
            variantsContainer.classList.remove('product-card-horizontal__variants--visible');
            variantsContainer.setAttribute('aria-hidden', 'true');
            button.classList.remove('product-card-horizontal__show-variants--expanded');
            button.setAttribute('aria-expanded', 'false');
            if (textSpan) textSpan.textContent = 'Показать доступные варианты';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
        } else {
            // Show variants
            variantsContainer.classList.add('product-card-horizontal__variants--visible');
            variantsContainer.setAttribute('aria-hidden', 'false');
            button.classList.add('product-card-horizontal__show-variants--expanded');
            button.setAttribute('aria-expanded', 'true');
            if (textSpan) textSpan.textContent = 'Скрыть варианты';
            if (arrow) arrow.style.transform = 'rotate(180deg)';

            // Scroll to variants
            variantsContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    },

    hideVariants(button) {
        const card = button.closest('.product-card-horizontal');
        if (!card) return;

        const variantsContainer = card.querySelector('.product-card-horizontal__variants');
        const showVariantsBtn = card.querySelector('.product-card-horizontal__show-variants');

        if (variantsContainer) {
            variantsContainer.classList.remove('product-card-horizontal__variants--visible');
            variantsContainer.setAttribute('aria-hidden', 'true');
        }

        if (showVariantsBtn) {
            showVariantsBtn.classList.remove('product-card-horizontal__show-variants--expanded');
            showVariantsBtn.setAttribute('aria-expanded', 'false');
            const textSpan = showVariantsBtn.querySelector('.product-card-horizontal__show-variants-text');
            const arrow = showVariantsBtn.querySelector('.product-card-horizontal__show-variants-arrow');
            if (textSpan) textSpan.textContent = 'Показать доступные варианты';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
        }
    }
};

// ===========================================
// Initialize on DOMContentLoaded
// ===========================================
document.addEventListener('DOMContentLoaded', () => {
    BYStore.init();
});
