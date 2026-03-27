
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__column">
                    <a href="/" class="footer__logo">
                        <img src="icon/logo.svg" alt="BY Store - Главная">
                    </a>
                    <div class="footer__social">
                        <a href="#" class="footer__social-link" aria-label="Мы в Telegram">
                            <img src="icon/telegram.svg" alt="" aria-hidden="true">
                        </a>
                        <a href="#" class="footer__social-link" aria-label="Мы в Viber">
                            <img src="icon/viber.svg" alt="" aria-hidden="true">
                        </a>
                        <a href="#" class="footer__social-link" aria-label="Мы в WhatsApp">
                            <img src="icon/whatsap.svg" alt="" aria-hidden="true">
                        </a>
                        <a href="#" class="footer__social-link" aria-label="Мы в Instagram">
                            <img src="icon/instagram.svg" alt="" aria-hidden="true">
                        </a>
                    </div>
                </div>
                <div class="footer__column">
                    <h4 class="footer__title">Каталог</h4>
                    <nav class="footer__nav">
                        <a href="#" class="footer__link">Мобильные телефоны</a>
                        <a href="#" class="footer__link">Аксессуары</a>
                        <a href="#" class="footer__link">Планшеты</a>
                        <a href="#" class="footer__link">Часы</a>
                        <a href="#" class="footer__link">Ноутбуки</a>
                        <a href="#" class="footer__link">Гаджеты</a>
                        <a href="#" class="footer__link">Роботы пылесосы</a>
                        <a href="#" class="footer__link">Стайлеры</a>
                        <a href="#" class="footer__link">Подарочные карты</a>
                    </nav>
                </div>
                <div class="footer__column">
                    <h4 class="footer__title">О компании</h4>
                    <nav class="footer__nav">
                        <a href="#" class="footer__link">Блог</a>
                        <a href="#" class="footer__link">Контакты</a>
                        <a href="#" class="footer__link">Обратная связь</a>
                        <a href="#" class="footer__link">Доставка и оплата</a>
                        <a href="#" class="footer__link">Гарантии</a>
                        <a href="#" class="footer__link">Trade in</a>
                        <a href="#" class="footer__link">Рассрочка</a>
                        <a href="#" class="footer__link">Поставщикам</a>
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
                <p class="footer__copyright">© 2023 ByStore</p>
            </div>
        </div>
    </footer>

    <!-- Review Modal -->
    <div class="review-modal" id="reviewModal">
        <div class="review-modal__overlay" id="reviewModalOverlay"></div>
        <div class="review-modal__content">
            <button class="review-modal__close" id="reviewModalClose" aria-label="Close modal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" fill="#1d1d1d"/>
                </svg>
            </button>
            <div class="review-modal__header">
                <h2 class="review-modal__title">Оставить отзыв</h2>
                <p class="review-modal__subtitle">Спасибо, что решили поделиться своим впечатлением о нас</p>
            </div>
            <form class="review-modal__form" id="reviewForm">
                <div class="review-modal__fields-inline">
                    <div class="form-group">
                        <label class="form-label">Ваше имя <span class="form-label__required">*</span></label>
                        <input type="text" class="form-input" placeholder="Введите имя" name="name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-input" placeholder="test@gmail.com" name="email">
                    </div>
                </div>
                <div class="review-modal__rating">
                    <div class="review-modal__stars" id="reviewStars">
                        <button type="button" class="review-modal__star" data-rating="1">
                            <img src="icon/star.svg" alt="">
                        </button>
                        <button type="button" class="review-modal__star" data-rating="2">
                            <img src="icon/star.svg" alt="">
                        </button>
                        <button type="button" class="review-modal__star" data-rating="3">
                            <img src="icon/star.svg" alt="">
                        </button>
                        <button type="button" class="review-modal__star" data-rating="4">
                            <img src="icon/star.svg" alt="">
                        </button>
                        <button type="button" class="review-modal__star" data-rating="5">
                            <img src="icon/star.svg" alt="">
                        </button>
                    </div>
                    <label class="form-label">Оцените работу нашего магазина <span class="form-label__required">*</span></label>
                </div>
                <div class="form-group">
                    <label class="form-label">Отзыв <span class="form-label__required">*</span></label>
                    <textarea class="form-textarea" placeholder="Введите текст отзыва" name="review" rows="4" required></textarea>
                </div>
                <div class="review-modal__actions">
                    <button type="submit" class="btn btn--primary">Отправить отзыв</button>
                    <p class="review-modal__policy">Нажимая кнопку, вы даете согласие на <a href="#" class="lead-form__link">обработку персональных данных</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
