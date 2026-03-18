<?php
/**
 * АКНЕТ — Подвал сайта
 * Файл: includes/footer.php
 */
?>

<!-- ═══════════════════════════════
     ПОДВАЛ
     ═══════════════════════════════ -->
<footer class="csec">
    <div class="cin">

        <!-- Бренд -->
        <div class="cbrand">
            <img src="<?= LOGO_URL ?>" alt="<?= SITE_NAME ?>"
                 style="height:30px;filter:brightness(0) invert(1);margin-bottom:12px"
                 onerror="this.style.display='none'">
            <p data-i18n="footer_about">
                Ведущий интернет-провайдер Кыргызстана.<br>
                Более 20 лет надёжной связи для дома и бизнеса.<br><br>
                Лиц. ГАС №17-0110 КР // №00-110 КР
            </p>
            <div class="soc" style="margin-top:14px">
                <a class="sb" href="https://www.instagram.com/aknet_official" target="_blank"
                   rel="noopener noreferrer" aria-label="Instagram">📷</a>
                <a class="sb" href="https://www.facebook.com/aknetkg" target="_blank"
                   rel="noopener noreferrer" aria-label="Facebook">👥</a>
                <a class="sb" href="https://twitter.com/Aknet_KG" target="_blank"
                   rel="noopener noreferrer" aria-label="Twitter">🐦</a>
                <a class="sb" href="https://vk.com/itv_aknet" target="_blank"
                   rel="noopener noreferrer" aria-label="ВКонтакте">💬</a>
            </div>
        </div>

        <!-- Манас -->
        <div class="cc">
            <h4 data-i18n="ct_manas">г. Манас</h4>
            <div class="manas-highlight">
                <div class="city" data-i18n="ct_manas_mgr">Менеджер по г. Манас</div>
                <a href="tel:+996555611004">📞 <?= PHONE_MANAS ?></a>
                <h4 style="margin-top:10px;opacity:.6" data-i18n="ct_chat_h">Чат 24/7</h4>
                <a href="<?= WHATSAPP ?>" target="_blank" rel="noopener noreferrer">WhatsApp: <?= PHONE_MANAS ?></a>
            </div>
            <h4 data-i18n="ct_bish">г. Бишкек</h4>
            <a href="tel:+996312611155"><?= SITE_PHONE1 ?></a>
            <a href="tel:+996550611155"><?= SITE_PHONE2 ?></a>
        </div>

        <!-- Ош -->
        <div class="cc">
            <h4 data-i18n="ct_osh">г. Ош</h4>
            <a href="tel:+99632226020">+996 (3222) 6 20 20</a>
            <a href="tel:+996999611155">+996 (999) 61 11 55</a>
            <p>📍 пр. Масалиева, 67</p>
            <p data-i18n="ct_osh_h1">Пн–Пт: 8:00–18:00</p>
        </div>

        <!-- Почта и быстрые ссылки -->
        <div class="cc">
            <h4 data-i18n="ct_mail_h">Почта</h4>
            <a href="mailto:info@aknet.kg">info@aknet.kg</a>
            <a href="mailto:support@aknet.kg">support@aknet.kg</a>
            <h4 style="margin-top:16px">Навигация</h4>
            <a href="#" onclick="show('tariffs')" data-i18n="nav_tariffs">Тарифы</a>
            <a href="#" onclick="show('tv')"      data-i18n="nav_tv">Цифровое ТВ</a>
            <a href="#" onclick="show('business')" data-i18n="nav_business">Бизнес</a>
            <a href="#" onclick="show('contacts')" data-i18n="nav_contacts">Контакты</a>
        </div>

    </div>

    <!-- Нижняя полоса -->
    <div class="fbar">
        <span data-i18n="footer_copy">© <?= YEAR ?> АО «Акнет». Все права защищены.</span>
        <span>🇰🇬 Кыргызская Республика</span>
    </div>
</footer>

<!-- Скрипты -->
<script src="js/i18n.js"></script>
<script src="js/app.js"></script>

</body>
</html>
