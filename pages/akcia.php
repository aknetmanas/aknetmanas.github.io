<?php /** АКНЕТ — Акция | pages/akcia.php */ ?>

<div id="akcia" class="page">
    <div class="sec">
        <div class="slbl2" data-i18n="ak_lbl">Специальное предложение</div>
        <div class="stitle" data-i18n="ak_title">🌸 Весна с АКНЕТ — 1 месяц бесплатно!</div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px">
            <div>
                <div class="accia-card" style="margin-bottom:24px">
                    <img src="files/vesna.png" alt="Весна с АКНЕТ"
                         style="width:100%;border-radius:10px;margin-bottom:16px"
                         onerror="this.style.display='none'">
                    <h2 data-i18n="ak_h">Акция «Весна с АКНЕТ»</h2>
                    <p style="font-size:14px;color:var(--mu);margin:10px 0" data-i18n="ak_p">С 16 марта по 31 мая 2026 года АКНЕТ запускает специальную акцию — подключитесь и получите первый месяц <strong>бесплатно</strong>.</p>
                    <ul class="accia-list">
                        <li><span class="ck">✓</span><span data-i18n="ak_f1">Доступно на тарифы Интернет и Интернет + ТВ</span></li>
                        <li><span class="ck">✓</span><span data-i18n="ak_f2">Для жителей квартир и частного сектора</span></li>
                        <li><span class="ck">✓</span><span data-i18n="ak_f3">По всей сети АКНЕТ</span></li>
                        <li><span class="ck">✓</span><span data-i18n="ak_f4">Только для новых абонентов при первичном подключении</span></li>
                    </ul>
                </div>
                <div class="accia-card" style="background:linear-gradient(135deg,#f0fff4,#e8f5e9)">
                    <h2 style="color:#16a34a" data-i18n="ak_tv_h">ТВ по акции: транспорт бесплатно!</h2>
                    <p style="font-size:13px;color:var(--mu);margin:10px 0" data-i18n="ak_tv_p">Цифровое телевидение от 395 сом/мес без оплаты транспорта сети 200 сом/мес!</p>
                    <div style="font-size:28px;font-weight:800;color:#16a34a">395 сом/мес</div>
                    <div style="font-size:13px;color:var(--mu)" data-i18n="ak_tv_save">вместо 595 сом/мес — экономия 200 сом</div>
                </div>
            </div>
            <div>
                <div class="accia-card" style="margin-bottom:24px">
                    <h2 data-i18n="ak_how_h">Как подключиться</h2>
                    <ul class="accia-list">
                        <li><span class="step">1</span><span data-i18n="ak_s1">Оставьте заявку с 16 марта по 31 мая 2026 года</span></li>
                        <li><span class="step">2</span><span data-i18n="ak_s2">Выберите подходящий тариф (Интернет или ТВ+Интернет)</span></li>
                        <li><span class="step">3</span><span data-i18n="ak_s3">Первый месяц начисляется автоматически после подключения</span></li>
                    </ul>
                    <div style="margin-top:20px;background:var(--bl);border-radius:10px;padding:16px">
                        <strong style="font-size:14px" data-i18n="ak_contact">По вопросам обращайтесь:</strong>
                        <div style="margin-top:10px;font-size:14px;display:flex;flex-direction:column;gap:6px">
                            <span>📞 550 61 11 55</span>
                            <span>💬 WhatsApp/Telegram: 552 61 11 55</span>
                        </div>
                    </div>
                </div>
                <div class="manas-banner" style="margin-bottom:0">
                    <h2 data-i18n="ak_manas_h">🏔 Подключение в г. Манас</h2>
                    <p data-i18n="ak_manas_p">Свяжитесь с нашим менеджером по городу Манас напрямую:</p>
                    <div class="phone-big">📞 <?= PHONE_MANAS ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
