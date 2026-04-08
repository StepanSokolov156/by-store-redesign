-- UP: Update meta, header, headerMenu, scripts chunks for new design
-- Applied: 2026-04-08

-- =============================================================
-- 1. META chunk (id=26) — new fonts, new CSS, keep analytics
-- =============================================================
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="robots" content="all">

<title>[[*template:is=`6`:then=`Купить [[*pagetitle]] в Минске по доступной цене`:else=`[[*longtitle:default=`[[*pagetitle]]`]]`]]</title>

[[*template:is=`6`:then=`<meta name="description" content="Купите [[*pagetitle]] по доступной цене в интернет-магазине by-store.by. Выгодная рассрочка по карте Халва. Быстрая доставка по всей Беларуси — уже в день заказа.">`
:else=`<meta name="description" content="[[*description:default=`Купить технику в интернет-магазине By-Store. Оригинальная продукция с гарантией и доставкой.`]]">`]]

<base href="[[++site_url]]">
<link rel="shortcut icon" href="/assets/images/by-store.by.ico">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

<!-- New Design CSS -->
<link rel="stylesheet" href="/assets/css/new/styles.css">
<link rel="stylesheet" href="/assets/css/new/styles-components.css">

<!-- Swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0),k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(93512982, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/93512982" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16816155755"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());
  gtag("config", "AW-16816155755");
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KTQZN882QS"></script>
<script>
  gtag("config", "G-KTQZN882QS");
</script>

<meta name="google-site-verification" content="g3m9kK_0XDkmNkJUnmBgDneTENOlZxtCd_v3MrS3IJo" />
<meta name="google-site-verification" content="wiSOXvv6SZLgP7JvDnXg9Cec5JRjWB_g7gH9NQgYGPE" />

<!-- Structured Data -->
<script type="application/ld+json">
{
    "@context": "http://www.schema.org",
    "@type": "LocalBusiness",
    "name": "ByStore",
    "url": "https://by-store.by/",
    "logo": "https://by-store.by/assets/images/NewLogo.svg",
    "image": "https://by-store.by/assets/images/NewLogo.svg",
    "description": "Купить технику и аксессуары в интернет-магазине By-Store. Оригинальная продукция с гарантией и доставкой.",
    "telephone": "+375 29 104 51 66",
    "email": "bystore.web@gmail.com",
    "priceRange": "BYN",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Минская обл. Минский район, аг. Колодищи, ул. Тюленина д.14, оф.12",
        "addressLocality": "Минск",
        "postalCode": "223051",
        "addressCountry": "Беларусь"
    }
}
</script>

<!-- JivoSite -->
<script src="//code.jivo.ru/widget/kmHRUjUllD" async></script>
' WHERE `id` = 26;

-- =============================================================
-- 2. HEADER chunk (id=27) — new design
-- =============================================================
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<header class="header" id="header">
    <div class="container">
        <!-- Top Row -->
        <div class="header__top">
            <div class="header__logo">
                <a href="[[~1]]">
                    <img src="/assets/images/new-images/logo.svg" alt="BY Store" loading="lazy">
                </a>
            </div>

            <div class="header__search">
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

            <div class="header__info">
                <p class="header__info-title">Прием заказов и консультация:</p>
                <p class="header__info-text">пн-пт 9:00 - 21:00, сб-вс 9:00 - 19:00</p>
            </div>

            <div class="header__phone">
                <img src="/assets/images/new-images/icon/phone.svg" width="16" height="16" alt="">
                <span><a href="tel:+375291045166">+375 (29) 104-51-66</a></span>
                <a href="https://t.me/by_storeby" class="header__telegram" target="_blank" aria-label="Telegram">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.777 4.42997C20.0241 4.32596 20.2946 4.29008 20.5603 4.32608C20.826 4.36208 21.0772 4.46863 21.2877 4.63465C21.4982 4.80067 21.6604 5.02008 21.7574 5.27005C21.8543 5.52002 21.8825 5.79141 21.839 6.05597L19.571 19.813C19.351 21.14 17.895 21.901 16.678 21.24C15.66 20.687 14.148 19.835 12.788 18.946C12.108 18.501 10.025 17.076 10.281 16.062C10.501 15.195 14.001 11.937 16.001 9.99997C16.786 9.23897 16.428 8.79997 15.501 9.49997C13.199 11.238 9.50302 13.881 8.28102 14.625C7.20302 15.281 6.64102 15.393 5.96902 15.281C4.74302 15.077 3.60602 14.761 2.67802 14.376C1.42402 13.856 1.48502 12.132 2.67702 11.63L19.777 4.42997Z" fill="#2AABEE"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="header__bottom">
            <nav class="header__nav">
                [[$headerMenu]]
            </nav>

            <div class="header__actions">
                <a href="[[~1221]]" class="header__action" aria-label="Избранное">
                    <span class="header__action-icon">
                        <img src="/assets/images/new-images/icon/wishlist.svg" width="32" height="27" alt="" aria-hidden="true">
                        <span class="header__action-count" id="wishlistCount"></span>
                    </span>
                    <span class="header__action-text">Избранное</span>
                </a>
                <a href="[[~16]]" class="header__action" aria-label="Сравнение">
                    <span class="header__action-icon">
                        <img src="/assets/images/new-images/icon/compare.svg" width="32" height="32" alt="" aria-hidden="true">
                        <span class="header__action-count" id="comparisonCount"></span>
                    </span>
                    <span class="header__action-text">Сравнение</span>
                </a>
                <a href="[[~8]]" class="header__action" id="msMiniCart" aria-label="Корзина">
                    <span class="header__action-icon">
                        <img src="/assets/images/new-images/icon/cart.svg" width="29" height="32" alt="" aria-hidden="true">
                        <span class="header__action-count" id="cartCount"></span>
                    </span>
                    <div class="header__cart-info">
                        <span class="header__cart-label">Корзина:</span>
                        <span class="header__cart-price" id="cartPrice"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="header__mobile">
        <button class="header__menu-btn" id="menuToggle" aria-label="Открыть меню" aria-expanded="false" aria-controls="mobileMenu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M3 12H21" stroke="#1d1d1d" stroke-width="2" stroke-linecap="round"/>
                <path d="M3 6H21" stroke="#1d1d1d" stroke-width="2" stroke-linecap="round"/>
                <path d="M3 18H21" stroke="#1d1d1d" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
        <a href="[[~1]]" class="header__mobile-logo">
            <img src="/assets/images/new-images/logo.svg" alt="BY Store" loading="lazy">
        </a>
        <div class="header__mobile-actions">
            <a href="[[~1221]]" class="header__mobile-action" aria-label="Избранное">
                <img src="/assets/images/new-images/icon/wishlist.svg" width="24" height="20" alt="" aria-hidden="true">
                <span class="header__mobile-action-count" id="wishlistCountMobile"></span>
            </a>
            <a href="[[~16]]" class="header__mobile-action" aria-label="Сравнение">
                <img src="/assets/images/new-images/icon/compare.svg" width="24" height="24" alt="" aria-hidden="true">
                <span class="header__mobile-action-count" id="comparisonCountMobile"></span>
            </a>
            <a href="[[~8]]" class="header__mobile-action" aria-label="Корзина">
                <img src="/assets/images/new-images/icon/cart.svg" width="21" height="24" alt="" aria-hidden="true">
                <span class="header__mobile-action-count" id="cartCountMobile"></span>
            </a>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
[[$mobileMenu]]
' WHERE `id` = 27;

-- =============================================================
-- 3. SCRIPTS chunk (id=29) — new design JS
-- =============================================================
UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<!-- jQuery (required by MODX / miniShop2) -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- miniShop2 cart JS is loaded by the component -->

<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- New Design JS -->
<script src="/assets/js/new/script.js"></script>
' WHERE `id` = 29;


-- =============================================================
-- DOWN: Restore old chunks
-- =============================================================
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<!-- Meta -->\n<meta charset="utf-8">...' WHERE `id` = 26;
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<!-- ============================================================= HEADER -->...' WHERE `id` = 27;
-- UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<!-- JavaScripts -->...' WHERE `id` = 29;
-- (Full rollback content stored in git history)
