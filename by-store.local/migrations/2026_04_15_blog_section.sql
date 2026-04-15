-- UP: Fix blog section — create article.card chunk, update blog.section with Swiper
-- Applied: 2026-04-15

-- 1. Create article.card chunk (id=208)
INSERT INTO `Modx-BYStoresite_htmlsnippets` (`id`, `name`, `description`, `snippet`, `locked`)
VALUES (
    208,
    'article.card',
    'Карточка статьи для блога на главной (swiper-slide)',
    '<div class="swiper-slide">
    <article class="article-card">
        <div class="article-card__image">
            <img src="/[[+tv.image]]" alt="[[+pagetitle]]" loading="lazy">
        </div>
        <div class="article-card__content">
            <time class="article-card__date">[[+createdon:date=`%d.%m.%Y`]]</time>
            <h3 class="article-card__title">[[+pagetitle]]</h3>
            <p class="article-card__text">[[+introtext:ellipsis=`150`]]</p>
            <a href="[[~[[+id]]]]" class="article-card__link">
                Читать статью
                <img src="/assets/images/new-icons/arrow-right.svg" alt="" class="article-card__arrow">
            </a>
        </div>
    </article>
</div>',
    0
);

-- 2. Update blog.section (id=191) — Swiper wrapper + pdoResources + navigation
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<section class="blog">
    <div class="container">
        <h2 class="section__title section__title--center">Блог</h2>
        <div class="blog__slider-wrapper">
            <div class="blogSwiper swiper">
                <div class="swiper-wrapper">
                    [[!pdoResources?
                    &parents=`4`
                    &tpl=`article.card`
                    &includeTVs=`image`
                    &hideContainers=`1`
                    &limit=`4`
                    &sortby=`createdon`
                    &sortdir=`DESC`
                    ]]
                </div>
                <div class="blog-pagination swiper-pagination"></div>
            </div>
            <button class="blog-slider-arrow blog-slider-arrow--prev" id="blogSliderPrev" aria-label="Previous">
                <img src="/assets/images/new-icons/slider-arrow-left.svg" width="24" height="24" alt="">
            </button>
            <button class="blog-slider-arrow blog-slider-arrow--next" id="blogSliderNext" aria-label="Next">
                <img src="/assets/images/new-icons/slider-arrow-right.svg" width="24" height="24" alt="">
            </button>
        </div>
    </div>
</section>'
WHERE `id` = 191;

-- DOWN
-- DELETE FROM `Modx-BYStoresite_htmlsnippets` WHERE `id` = 208;
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '...' WHERE `id` = 191;
