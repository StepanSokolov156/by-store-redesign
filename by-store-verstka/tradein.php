<?php require_once 'header.php'; ?>

    <main class="main tradein-page">
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
                    <span class="breadcrumbs__current">Trade in</span>
                </div>
            </nav>

            <!-- Page Title -->
            <h1 class="tradein__title">Trade in</h1>

            <!-- Hero Section with Form -->
            <section class="tradein-hero">
                <div class="tradein-hero__content">
                    <h2 class="tradein-hero__title">Обновите технику с выгодой — сдайте старое устройство в трейд-ин!</h2>
                    <div class="tradein-hero__description">
                        <p>Принесите свой смартфон, планшет или ноутбук и получите скидку</p>
                        <p>на покупку нового устройства. Мы оценим вашу технику</p>
                        <p>по справедливой стоимости и предложим лучшие условия обмена.</p>
                    </div>
                </div>
                <div class="tradein-hero__form-wrapper">
                    <form class="lead-form__form" id="tradeinForm">
                        <div class="lead-form__fields-inline">
                            <div class="form-group">
                                <label class="form-label">Ваше имя <span class="form-label__required">*</span></label>
                                <input type="text" class="form-input" placeholder="Введите имя" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Телефон <span class="form-label__required">*</span></label>
                                <input type="tel" class="form-input" placeholder="+375 (__) ___ -__ - __" required>
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
            </section>

            <!-- How It Works Section -->
            <section class="tradein-how">
                <div class="tradein-how__info">
                    <h2 class="tradein-how__title">Как сдать устройство в трейд-ин</h2>
                    <div class="tradein-how__description">
                        <p>Мы принимаем все модели техники: смартфоны, планшеты, ноутбуки.</p>
                        <p>Устройство должно быть в рабочем состоянии (включаться), без существенных повреждений корпуса и экрана и без следов от контакта с жидкостью.</p>
                    </div>
                    <div class="tradein-how__image">
                        <img src="img/img-trade-in.jpg" alt="Устройства для Trade-in" loading="lazy">
                    </div>
                </div>
                <div class="tradein-how__steps">
                    <div class="tradein-step">
                        <div class="tradein-step__icon">
                            <img src="icon/zayavka-tradein.svg" alt="Шаг 1">
                        </div>
                        <div class="tradein-step__content">
                            <h3 class="tradein-step__title">1. Оставьте заявку на trade in</h3>
                            <p class="tradein-step__description">Позвоните нам по телефону <a href="tel:+375291045166" class="tradein-step__phone">+375 (29) 104-51-66</a> или заполните форму заявки.</p>
                        </div>
                    </div>
                    <div class="tradein-step">
                        <div class="tradein-step__icon">
                            <img src="icon/diagnostika-tradein.svg" alt="Шаг 2">
                        </div>
                        <div class="tradein-step__content">
                            <h3 class="tradein-step__title">2. Отдайте устройство на мгновенную диагностику</h3>
                            <p class="tradein-step__description">Мы проведем диагностику устройства для оценки его стоимости в течение 15 минут. При оценке мы учитываем повреждения и царапины на корпусе, экране, сколы и другие следы использования.</p>
                        </div>
                    </div>
                    <div class="tradein-step">
                        <div class="tradein-step__icon">
                            <img src="icon/new-device-tradein.svg" alt="Шаг 3">
                        </div>
                        <div class="tradein-step__content">
                            <h3 class="tradein-step__title">3. Используйте скидку при покупке нового устройства</h3>
                            <div class="tradein-step__description">
                                <p>Все ваши устройства, сданные по программе trade in, могут суммарно использоваться при оплате вашей покупки. Что вы хотите купить — решать вам, ограничений по ассортименту нет.</p>
                                <p>Оставшуюся сумму можно доплатить картой, наличными или оформить в рассрочку или кредит. При этом бонусная программа будет работать на накопление (списать бонусы при такой покупке нельзя).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Conditions Section -->
            <section class="tradein-conditions">
                <h2 class="tradein-conditions__title">Условия покупки в трейд-ин</h2>
                <div class="tradein-conditions__list">
                    <div class="tradein-conditions__column">
                        <div class="tradein-conditions__item">
                            <span class="tradein-conditions__bullet"></span>
                            <p>Для сдачи товара в trade in необходимо при себе иметь паспорт и устройство к сдаче.</p>
                        </div>
                        <div class="tradein-conditions__item">
                            <span class="tradein-conditions__bullet"></span>
                            <p>Акция не суммируется с другими скидками и специальными предложениями.</p>
                        </div>
                        <div class="tradein-conditions__item">
                            <span class="tradein-conditions__bullet"></span>
                            <p>Бонусная программа действует только на начисление, списание бонусов недоступно.</p>
                        </div>
                    </div>
                    <div class="tradein-conditions__column">
                        <div class="tradein-conditions__item">
                            <span class="tradein-conditions__bullet"></span>
                            <p>Оплата нового устройства может быть произведена наличными средствами, платежной картой, а также Подарочной картой by-store.</p>
                        </div>
                        <div class="tradein-conditions__item">
                            <span class="tradein-conditions__bullet"></span>
                            <p>Новые устройство может быть приобретено по действующей на момент заключения договора программе кредитования или рассрочки.</p>
                        </div>
                    </div>
                </div>
                <p class="tradein-conditions__note">Подробности и условия можно уточнить у консультантов в магазине. Компания оставляет за собой право на завершение акции без предварительного уведомления покупателей.</p>
            </section>
        </div>
    </main>

<?php require_once 'footer.php'; ?>
