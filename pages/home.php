<?php
/**
 * АКНЕТ — Главная страница
 * Файл: pages/home.php
 */
?>

<!-- ═══════════════════════════════════════════════
     ГЛАВНАЯ СТРАНИЦА
     ═══════════════════════════════════════════════ -->
<div id="home" class="page active">

    <!-- Бегущая строка -->
    <div class="ticker">
        <div class="ticker-track">
            <div class="ti"><span class="td"></span><span data-i18n="ticker1">🌸 АКЦИЯ: Весна с АКНЕТ — первый месяц БЕСПЛАТНО! 16 марта — 31 мая 2026</span></div>
            <div class="ti"><span class="td"></span><span data-i18n="ticker2">📡 Начинаем строительство сети в Иссык-Кульской области</span></div>
            <div class="ti"><span class="td"></span><span data-i18n="ticker3">🏙️ Теперь мы работаем в г. Манас! Менеджер: 0555 611 004</span></div>
            <div class="ti"><span class="td"></span><span data-i18n="ticker4">📺 ТВ «Семейный Плюс» — 200+ каналов всего за 465 сом/мес</span></div>
            <!-- Дублируем для бесконечного скролла -->
            <div class="ti"><span class="td"></span><span data-i18n="ticker1">🌸 АКЦИЯ: Весна с АКНЕТ — первый месяц БЕСПЛАТНО! 16 марта — 31 мая 2026</span></div>
            <div class="ti"><span class="td"></span><span data-i18n="ticker2">📡 Начинаем строительство сети в Иссык-Кульской области</span></div>
            <div class="ti"><span class="td"></span><span data-i18n="ticker3">🏙️ Теперь мы работаем в г. Манас! Менеджер: 0555 611 004</span></div>
            <div class="ti"><span class="td"></span><span data-i18n="ticker4">📺 ТВ «Семейный Плюс» — 200+ каналов всего за 465 сом/мес</span></div>
        </div>
    </div>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-in">
            <div>
                <div class="hbadge" data-i18n="hero_badge">🚀 Тарифы 2026</div>
                <h1 data-i18n="hero_h1">Быстрый интернет<br>и <span style="color:#F7941D">Цифровое ТВ</span><br>в Кыргызстане</h1>
                <p data-i18n="hero_p">Более 20 лет надёжной связи. Интернет до 600 Мбит/с, 200+ каналов iTV. Теперь и в г. Манас!</p>
                <div class="hbtns">
                    <button class="btn-p" onclick="show('akcia')" data-i18n="hero_btn1">🌸 Акция — 1 месяц бесплатно</button>
                    <button class="btn-w" onclick="show('tariffs')" data-i18n="hero_btn2">Смотреть тарифы</button>
                </div>
            </div>
            <div>
                <div class="hcard">
                    <div class="hstat">
                        <div class="sico">⚡</div>
                        <div><div class="sval">600 Мбит/с</div><div class="slbl" data-i18n="stat1">Максимальная скорость</div></div>
                    </div>
                    <div class="hstat">
                        <div class="sico">📺</div>
                        <div><div class="sval">200+ каналов</div><div class="slbl" data-i18n="stat2">Цифровое ТВ iTV АКНЕТ</div></div>
                    </div>
                    <div class="hstat">
                        <div class="sico">🏙️</div>
                        <div><div class="sval" data-i18n="stat3v">Бишкек, Ош, Манас</div><div class="slbl" data-i18n="stat3">и Иссык-Кульская область</div></div>
                    </div>
                    <div class="hstat">
                        <div class="sico">🎁</div>
                        <div><div class="sval" data-i18n="stat4v">1 месяц бесплатно</div><div class="slbl" data-i18n="stat4">Акция для новых абонентов</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Манас баннер -->
    <div class="container" style="margin-top:32px;margin-bottom:0">
        <div class="manas-banner">
            <h2 data-i18n="manas_h">🏔 АКНЕТ пришёл в г. Манас!</h2>
            <p data-i18n="manas_p">Теперь жители Манаса могут подключить быстрый интернет и цифровое ТВ от АКНЕТ.<br>Свяжитесь с нашим менеджером напрямую:</p>
            <div class="phone-big">📞 <?= PHONE_MANAS ?></div>
        </div>
    </div>

    <!-- Промо баннер -->
    <div class="container">
        <div class="promo">
            <div>
                <div class="pb" data-i18n="promo_badge">🌸 Акция — Весна 2026</div>
                <h2 data-i18n="promo_h">Первый месяц — БЕСПЛАТНО!</h2>
                <p data-i18n="promo_p">С 16 марта по 31 мая 2026 года для новых абонентов. Доступно на тарифы Интернет и Интернет + ТВ.</p>
                <button class="btn-p" onclick="show('akcia')" data-i18n="promo_btn">Подробнее об акции</button>
            </div>
            <img src="files/vesna.png" alt="Весна с АКНЕТ" onerror="this.style.display='none'">
        </div>
    </div>

    <!-- Услуги -->
    <div class="sec">
        <div class="slbl2" data-i18n="serv_lbl">Наши услуги</div>
        <div class="stitle" data-i18n="serv_title">Всё для вашего дома и бизнеса</div>
        <div class="sg">
            <a class="sc" onclick="show('business')">
                <img class="sc-img" src="https://aknet.kg/files/media/0/84.png" alt=""
                     onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="sc-ico">💼</div>
                <h3 data-i18n="svc1_h">Для бизнеса</h3>
                <p data-i18n="svc1_p">VPN, облачные сервисы, IP-телефония</p>
            </a>
            <a class="sc" onclick="show('tv')">
                <img class="sc-img" src="https://aknet.kg/files/media/0/77.png" alt=""
                     onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="sc-ico">📺</div>
                <h3 data-i18n="svc2_h">Цифровое ТВ</h3>
                <p data-i18n="svc2_p">200+ каналов HD — iTV АКНЕТ</p>
            </a>
            <a class="sc" onclick="show('tariffs')">
                <img class="sc-img" src="https://aknet.kg/files/media/0/83.png" alt=""
                     onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="sc-ico">🌐</div>
                <h3 data-i18n="svc3_h">ТВ + Интернет</h3>
                <p data-i18n="svc3_p">Комбо-пакет от 750 сом/мес</p>
            </a>
            <a class="sc" onclick="show('equip')">
                <img class="sc-img" src="https://aknet.kg/files/media/0/76.png" alt=""
                     onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="sc-ico">📦</div>
                <h3 data-i18n="svc4_h">Оборудование</h3>
                <p data-i18n="svc4_p">Роутеры, Mesh Wi-Fi, приставки</p>
            </a>
        </div>
    </div>

    <!-- Баланс -->
    <div class="container" style="padding-bottom:40px">
        <div class="bwid">
            <h3 data-i18n="bal_h">💳 Узнать баланс лицевого счёта</h3>
            <div class="ig">
                <input type="text" data-i18n-ph="bal_ph"
                       placeholder="Введите номер лицевого счёта..."
                       onkeydown="if(event.key==='Enter')checkBalance(this)">
                <button onclick="checkBalance(this)" data-i18n="bal_btn">Проверить</button>
            </div>
            <p style="font-size:12px;color:var(--mu);margin-top:8px" data-i18n="bal_hint">Номер счёта указан в договоре или в портале iPTV приставки</p>
        </div>
    </div>

    <!-- Новости -->
    <div class="sec" style="padding-top:0">
        <div class="slbl2" data-i18n="news_lbl">Новости</div>
        <div class="stitle" data-i18n="news_title">Последние события</div>
        <div class="ng">
            <div class="nc" onclick="show('akcia')">
                <div class="nc-img"><img src="https://aknet.kg/files/banners/newsvesnaru.png" alt="" onerror="this.parentElement.innerHTML='🌸'"></div>
                <div class="nc-body">
                    <div class="ndate" data-i18n="news1_date">16 марта 2026</div>
                    <h3 data-i18n="news1_h">ВЕСНА с АКНЕТ!</h3>
                    <p data-i18n="news1_p">Первый месяц — бесплатно для новых абонентов с 16 марта по 31 мая 2026.</p>
                </div>
            </div>
            <div class="nc">
                <div class="nc-img">📡</div>
                <div class="nc-body">
                    <div class="ndate" data-i18n="news2_date">5 марта 2026</div>
                    <h3 data-i18n="news2_h">Строительство сети в Иссык-Кульской области</h3>
                    <p data-i18n="news2_p">АКНЕТ расширяет покрытие — подключение в новых районах.</p>
                </div>
            </div>
            <div class="nc">
                <div class="nc-img">🏙️</div>
                <div class="nc-body">
                    <div class="ndate" data-i18n="news3_date">Март 2026</div>
                    <h3 data-i18n="news3_h">АКНЕТ в г. Манас!</h3>
                    <p data-i18n="news3_p">Открываем новое направление. Менеджер по Манасу: 0555 611 004.</p>
                </div>
            </div>
        </div>
    </div>

</div><!-- /home -->
