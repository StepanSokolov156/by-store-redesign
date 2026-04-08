-- UP: Create placeholder chunks for main page sections
-- Applied: 2026-04-08
-- These will be replaced with real content in subsequent migrations

INSERT INTO `Modx-BYStoresite_htmlsnippets` (`name`, `description`, `snippet`, `cache_type`, `locked`) VALUES
('hero.section', 'Hero section with banner slider and product slider', '<section class="hero" id="hero">
    <div class="hero__wrapper">
        <div class="hero__main">
            <!-- Hero Banner Slider — TODO: MIGX-TV -->
        </div>
        <div class="hero__products">
            <!-- Hero Products Slider — TODO -->
        </div>
    </div>
</section>', 0, 0),

('popular.categories', 'Popular categories grid', '<section class="popular-categories">
    <h2 class="section__title">Популярные категории</h2>
    <div class="popular-categories__grid">
        <!-- TODO: category cards -->
    </div>
</section>', 0, 0),

('catalog.section', 'Catalog categories grid', '<section class="catalog">
    <h2 class="section__title">Каталог</h2>
    <div class="catalog__grid">
        <!-- TODO: catalog cards -->
    </div>
</section>', 0, 0),

('products.hits', 'Hit products section with slider and filters', '<section class="products-section" id="hitsSection">
    <div class="products-section__header">
        <h2 class="section__title">Хиты</h2>
        <div class="products-filter" id="hitsFilter">
            <!-- TODO: filter buttons -->
        </div>
    </div>
    <div class="products-slider-wrapper">
        <!-- TODO: Swiper with product cards -->
    </div>
</section>', 0, 0),

('products.new', 'New products section with slider and filters', '<section class="products-section" id="newSection">
    <div class="products-section__header">
        <h2 class="section__title">Новинки</h2>
        <div class="products-filter" id="newFilter">
            <!-- TODO: filter buttons -->
        </div>
    </div>
    <div class="products-slider-wrapper">
        <!-- TODO: Swiper with product cards -->
    </div>
</section>', 0, 0),

('products.recommended', 'Recommended products section', '<section class="products-section" id="recommendedSection">
    <div class="products-section__header">
        <h2 class="section__title">Рекомендуем</h2>
        <div class="products-filter" id="recommendedFilter">
            <!-- TODO: filter buttons -->
        </div>
    </div>
    <div class="products-slider-wrapper">
        <!-- TODO: Swiper with product cards -->
    </div>
</section>', 0, 0),

('products.sale', 'Sale products section', '<section class="products-section" id="saleSection">
    <div class="products-section__header">
        <h2 class="section__title">Акции</h2>
        <div class="products-filter" id="saleFilter">
            <!-- TODO: filter buttons -->
        </div>
    </div>
    <div class="products-slider-wrapper">
        <!-- TODO: Swiper with product cards -->
    </div>
</section>', 0, 0),

('lead.form.gift', 'Lead form: protective glass gift', '<section class="lead-form">
    <div class="lead-form__inner">
        <div class="lead-form__info">
            <h2 class="lead-form__title">Защитное стекло в подарок</h2>
            <p class="lead-form__description">Оставьте заявку и получите защитное стекло в подарок к вашему заказу</p>
        </div>
        <form class="lead-form__form" id="leadForm">
            [[!AjaxForm?
            &form=`leadFormGiftTpl`
            &snippet=`FormIt`
            &hooks=`spam,FormItSaveForm,email,FeedbackTelegramSend`
            &emailSubject=`Заявка на защитное стекло`
            &emailTo=`bystore.web@gmail.com`
            &validate=`name:required,phone:required`
            &validationErrorMessage=`В форме есть ошибки`
            &successMessage=`Ваша заявка отправлена! Мы свяжемся с вами в ближайшее время.`
            ]]
        </form>
    </div>
</section>', 0, 0),

('features.section', 'Features/benefits section', '<section class="features-section">
    <div class="features-section__inner">
        [[$feature.card.apple]]
        <div class="feature-card__divider"></div>
        [[$feature.card.warranty]]
        <div class="feature-card__divider"></div>
        [[$feature.card.delivery]]
    </div>
</section>', 0, 0),

('feature.card.apple', 'Feature card: original Apple technique', '<div class="feature-card">
    <div class="feature-card__icon">
        <img src="/assets/images/new-images/icon/Ogiginal.svg" alt="">
    </div>
    <div class="feature-card__content">
        <h3 class="feature-card__title">Оригинальная техника Apple</h3>
        <p class="feature-card__description">Только оригинальная, новая и неактивированная техника Apple.</p>
        <a href="[[~233]]" class="feature-card__link">Подробнее</a>
    </div>
</div>', 0, 0),

('feature.card.warranty', 'Feature card: official warranty', '<div class="feature-card">
    <div class="feature-card__icon">
        <img src="/assets/images/new-images/icon/garanti.svg" alt="">
    </div>
    <div class="feature-card__content">
        <h3 class="feature-card__title">Официальная гарантия</h3>
        <p class="feature-card__description">На всю продукцию предоставляется официальная мировая гарантия Apple.</p>
        <a href="[[~233]]" class="feature-card__link">Подробнее</a>
    </div>
</div>', 0, 0),

('feature.card.delivery', 'Feature card: free delivery', '<div class="feature-card">
    <div class="feature-card__icon">
        <img src="/assets/images/new-images/icon/delivery.svg" alt="">
    </div>
    <div class="feature-card__content">
        <h3 class="feature-card__title">Бесплатная доставка</h3>
        <p class="feature-card__description">Абсолютно бесплатная и быстрая доставка по Минску и всей Беларуси.</p>
        <a href="[[~231]]" class="feature-card__link">Подробнее</a>
    </div>
</div>', 0, 0),

('brands.section', 'Brands carousel section', '<section class="brands">
    <h2 class="section__title">Бренды</h2>
    <div class="brands-swiper swiper">
        <div class="swiper-wrapper">
            <a href="#" class="swiper-slide brand-card"><img src="/assets/images/new-images/icon/brand-apple.png" alt="Apple" loading="lazy"></a>
            <a href="#" class="swiper-slide brand-card"><img src="/assets/images/new-images/icon/brand-samsung.png" alt="Samsung" loading="lazy"></a>
            <a href="#" class="swiper-slide brand-card"><img src="/assets/images/new-images/icon/brand-honor.png" alt="Honor" loading="lazy"></a>
            <a href="#" class="swiper-slide brand-card"><img src="/assets/images/new-images/icon/brand-mi.png" alt="Xiaomi" loading="lazy"></a>
            <a href="#" class="swiper-slide brand-card"><img src="/assets/images/new-images/icon/brand-oneplus.png" alt="OnePlus" loading="lazy"></a>
            <a href="#" class="swiper-slide brand-card"><img src="/assets/images/new-images/icon/brand-poco.png" alt="POCO" loading="lazy"></a>
        </div>
    </div>
</section>', 0, 0),

('reviews.section', 'Customer reviews section', '<section class="reviews">
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
            <button class="btn btn--primary btn--small reviews__btn" id="openReviewModal">Добавить отзыв</button>
        </div>
    </div>
    <div class="reviews__slider-wrapper">
        <!-- TODO: Reviews Swiper with review cards -->
    </div>
</section>', 0, 0),

('blog.section', 'Blog articles section', '<section class="blog">
    <h2 class="section__title section__title--center">Блог</h2>
    <div class="blog__slider-wrapper">
        [[!pdoPage?
        &element=`pdoResources`
        &parents=`4`
        &tpl=`article.card`
        &includeTVs=`Image_index,tags`
        &hideContainers=`1`
        &limit=`4`
        ]]
    </div>
</section>', 0, 0),

('lead.form.search', 'Lead form: product search', '<section class="lead-form lead-form--alt">
    <div class="lead-form__inner">
        <div class="lead-form__info">
            <h2 class="lead-form__title">Не нашли нужный товар?</h2>
            <p class="lead-form__description">Свяжитесь с нами и мы поможем найти нужный товар или предложим альтернативу</p>
        </div>
        <form class="lead-form__form" id="leadForm2">
            [[!AjaxForm?
            &form=`leadFormSearchTpl`
            &snippet=`FormIt`
            &hooks=`spam,FormItSaveForm,email,FeedbackTelegramSend`
            &emailSubject=`Поиск товара`
            &emailTo=`bystore.web@gmail.com`
            &validate=`name:required,phone:required`
            &validationErrorMessage=`В форме есть ошибки`
            &successMessage=`Ваша заявка отправлена! Мы свяжемся с вами в ближайшее время.`
            ]]
        </form>
    </div>
</section>', 0, 0);

-- DOWN: Remove placeholder chunks
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `name` IN ('hero.section', 'popular.categories', 'catalog.section', 'products.hits', 'products.new', 'products.recommended', 'products.sale', 'lead.form.gift', 'features.section', 'feature.card.apple', 'feature.card.warranty', 'feature.card.delivery', 'brands.section', 'reviews.section', 'blog.section', 'lead.form.search');
