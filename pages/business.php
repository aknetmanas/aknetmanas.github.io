<?php /** АКНЕТ — Бизнес | pages/business.php */ ?>

<div id="business" class="page">
    <div class="sec">
        <div class="slbl2" data-i18n="biz_lbl">Корпоративные решения</div>
        <div class="stitle" data-i18n="biz_title">АКНЕТ для бизнеса</div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px">
            <div class="accia-card" style="margin-bottom:0">
                <h2 data-i18n="vpn_h">VPN — Объединение офисов</h2>
                <p style="font-size:13px;color:var(--mu);margin-bottom:16px" data-i18n="vpn_p">Закрытая корпоративная сеть по технологии VPN L2. Гарантированная скорость и конфиденциальность.</p>
                <table class="ttable">
                    <thead><tr><th data-i18n="th_speed">Скорость</th><th data-i18n="vpn_th2">Цена/мес (без НДС)</th></tr></thead>
                    <tbody>
                        <tr><td class="spd">10 Мбит/с</td><td class="price-tag">3 600 сом</td></tr>
                        <tr><td class="spd">100 Мбит/с</td><td class="price-tag">5 600 сом</td></tr>
                        <tr><td class="spd">200 Мбит/с</td><td class="price-tag">10 600 сом</td></tr>
                        <tr><td class="spd">1 Гбит/с</td><td class="price-tag">25 000 сом</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="accia-card" style="margin-bottom:0">
                <h2 data-i18n="sip_h">IP-телефония</h2>
                <p style="font-size:13px;color:var(--mu);margin-bottom:16px" data-i18n="sip_p">Звонки по всему миру по 1.5 сом/мин. Сервис sip.aknet.kg</p>
                <table class="ttable">
                    <thead><tr><th data-i18n="sip_th1">Страна</th><th data-i18n="sip_th2">Цена (сом/мин)</th></tr></thead>
                    <tbody>
                        <tr><td data-i18n="sip_c1">Россия, Казахстан, США, Канада</td><td class="price-tag">1,5</td></tr>
                        <tr><td data-i18n="sip_c2">Великобритания, Германия, Франция</td><td class="price-tag">1,5</td></tr>
                        <tr><td data-i18n="sip_c3">Китай, Япония, Южная Корея</td><td class="price-tag">1,5</td></tr>
                        <tr><td data-i18n="sip_c4">Израиль, Австралия, Швейцария</td><td class="price-tag">1,5</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="accia-card" style="margin-top:24px">
            <h2 data-i18n="cloud_h">☁️ Облачные сервисы</h2>
            <p style="font-size:13px;color:var(--mu);margin-bottom:16px" data-i18n="cloud_p">Совместно с RackCorp (Австралия) — первый в Кыргызстане корпоративный облачный провайдер.</p>
            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:12px">
                <div style="background:var(--bl);border-radius:10px;padding:14px;text-align:center">
                    <div style="font-size:24px;margin-bottom:6px">🖥️</div>
                    <div style="font-size:13px;font-weight:700" data-i18n="cloud1_h">Облачные серверы</div>
                    <div style="font-size:11px;color:var(--mu);margin-top:4px" data-i18n="cloud1_p">Виртуальный сервер, VPS</div>
                </div>
                <div style="background:var(--bl);border-radius:10px;padding:14px;text-align:center">
                    <div style="font-size:24px;margin-bottom:6px">🌐</div>
                    <div style="font-size:13px;font-weight:700" data-i18n="cloud2_h">Web-хостинг</div>
                    <div style="font-size:11px;color:var(--mu);margin-top:4px" data-i18n="cloud2_p">Сайты и серверы</div>
                </div>
                <div style="background:var(--bl);border-radius:10px;padding:14px;text-align:center">
                    <div style="font-size:24px;margin-bottom:6px">📧</div>
                    <div style="font-size:13px;font-weight:700" data-i18n="cloud3_h">Почтовые сервисы</div>
                    <div style="font-size:11px;color:var(--mu);margin-top:4px" data-i18n="cloud3_p">Email, Exchange</div>
                </div>
                <div style="background:var(--bl);border-radius:10px;padding:14px;text-align:center">
                    <div style="font-size:24px;margin-bottom:6px">💾</div>
                    <div style="font-size:13px;font-weight:700" data-i18n="cloud4_h">Хранение данных</div>
                    <div style="font-size:11px;color:var(--mu);margin-top:4px" data-i18n="cloud4_p">S3, Backup</div>
                </div>
            </div>
        </div>

        <div style="background:var(--tx);color:#fff;border-radius:14px;padding:24px;margin-top:24px">
            <strong style="font-size:15px" data-i18n="corp_dept">Корпоративный отдел:</strong>
            <div style="display:flex;flex-wrap:wrap;gap:16px;margin-top:10px;font-size:14px;opacity:.85">
                <span>📧 info@aknet.kg</span>
                <span>📞 312 61 11 75</span>
                <span>📞 770 99 97 73</span>
                <span>💬 WhatsApp/Telegram: 552 61 11 55</span>
            </div>
        </div>
    </div>
</div>
