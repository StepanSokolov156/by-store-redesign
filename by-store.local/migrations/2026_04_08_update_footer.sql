-- UP: Update footer chunk (id=166) for new design
-- Applied: 2026-04-08

UPDATE `Modx-BYStoresite_htmlsnippets` SET `snippet` = '<footer class="footer">
    <div class="container">
        <div class="footer__grid">
            <div class="footer__column">
                <a href="[[~1]]" class="footer__logo">
                    <img src="/assets/images/new-images/logo.svg" alt="BY Store - Главная">
                </a>
                <div class="footer__social">
                    <a href="https://t.me/by_storeby" class="footer__social-link" aria-label="Мы в Telegram" target="_blank">
                        <img src="/assets/images/new-images/icon/telegram.svg" alt="" aria-hidden="true">
                    </a>
                    <a href="#" class="footer__social-link" aria-label="Мы в Viber">
                        <img src="/assets/images/new-images/icon/viber.svg" alt="" aria-hidden="true">
                    </a>
                    <a href="#" class="footer__social-link" aria-label="Мы в WhatsApp">
                        <img src="/assets/images/new-images/icon/whatsap.svg" alt="" aria-hidden="true">
                    </a>
                    <a href="#" class="footer__social-link" aria-label="Мы в Instagram">
                        <img src="/assets/images/new-images/icon/instagram.svg" alt="" aria-hidden="true">
                    </a>
                </div>
            </div>
            <div class="footer__column">
                <h4 class="footer__title">Каталог</h4>
                <nav class="footer__nav">
                    <a href="[[~9]]" class="footer__link">Мобильные телефоны</a>
                    <a href="[[~19]]" class="footer__link">Аксессуары</a>
                    <a href="[[~20]]" class="footer__link">Планшеты</a>
                    <a href="[[~21]]" class="footer__link">Часы</a>
                    <a href="[[~22]]" class="footer__link">Ноутбуки</a>
                    <a href="[[~23]]" class="footer__link">Гаджеты</a>
                    <a href="[[~24]]" class="footer__link">Роботы пылесосы</a>
                    <a href="[[~7307]]" class="footer__link">Стайлеры</a>
                    <a href="[[~304]]" class="footer__link">Подарочные карты</a>
                </nav>
            </div>
            <div class="footer__column">
                <h4 class="footer__title">О компании</h4>
                <nav class="footer__nav">
                    <a href="[[~4]]" class="footer__link">Блог</a>
                    <a href="[[~236]]" class="footer__link">Контакты</a>
                    <a href="[[~290]]" class="footer__link">Обратная связь</a>
                    <a href="[[~231]]" class="footer__link">Доставка и оплата</a>
                    <a href="[[~233]]" class="footer__link">Гарантии</a>
                    <a href="[[~234]]" class="footer__link">Trade in</a>
                    <a href="[[~232]]" class="footer__link">Рассрочка</a>
                    <a href="[[~7077]]" class="footer__link">Поставщикам</a>
                </nav>
            </div>
            <div class="footer__column">
                <p class="footer__info">ООО "Мобилшоп"</p>
                <p class="footer__info">УНП 692201527</p>
                <p class="footer__info">Зарегистрирован от 30.03.2022</p>
                <p class="footer__info">223051 Минская обл. Минский район, аг. Колодищи, ул. Тюленина д.14, оф.12</p>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__copyright">&copy; 2026 ByStore</p>
        </div>
    </div>
</footer>
' WHERE `id` = 166;

-- DOWN: Restore old footer (stored in git history)
