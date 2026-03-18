<?php /** АКНЕТ — Цифровое ТВ | pages/tv.php */ ?>

<div id="tv" class="page">
    <div class="sec">
        <div class="slbl2" data-i18n="tv_lbl">Цифровое телевидение</div>
        <div class="stitle" data-i18n="tv_title">iTV АКНЕТ — 200+ каналов в HD</div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-bottom:32px">
            <div class="accia-card" style="margin-bottom:0">
                <h2 data-i18n="tv_feat_h">Возможности iTV АКНЕТ</h2>
                <ul class="accia-list">
                    <li><span class="ck">✓</span><span data-i18n="tv_f1">Более 200 каналов: HD, фильмы, музыка, спорт, детские</span></li>
                    <li><span class="ck">✓</span><span data-i18n="tv_f2">Запись передач на USB-носитель</span></li>
                    <li><span class="ck">✓</span><span data-i18n="tv_f3">Пауза и перемотка прямого эфира</span></li>
                    <li><span class="ck">✓</span><span data-i18n="tc1_f4">Родительский контроль</span></li>
                    <li><span class="ck">✓</span><span data-i18n="tv_f5">Профили: Папа, Мама, Семья</span></li>
                    <li><span class="ck">✓</span><span data-i18n="tv_f6">Прогноз погоды, новости, гороскоп на экране ТВ</span></li>
                    <li><span class="ck">✓</span><span data-i18n="tv_f7">Просмотр видео/фото/аудио через приставку</span></li>
                    <li><span class="ck">✓</span><span data-i18n="tv_f8">Универсальный программируемый пульт</span></li>
                    <li><span class="ck">✓</span><span data-i18n="tv_f9">ТВ-кредит на 3 дня</span></li>
                </ul>
            </div>
            <div>
                <div class="accia-card" style="margin-bottom:16px">
                    <h2 style="margin-bottom:16px" data-i18n="tv_tar_h">Тарифы ТВ</h2>
                    <table class="ttable">
                        <thead><tr><th data-i18n="th_pack">Пакет</th><th data-i18n="th_ch">Каналов</th><th data-i18n="th_price">Цена/мес</th></tr></thead>
                        <tbody>
                            <tr><td data-i18n="tc1_name">Семейный</td><td>150+</td><td class="price-tag">395 сом</td></tr>
                            <tr><td><strong data-i18n="tc2_name">Семейный Плюс</strong></td><td><strong>200+</strong></td><td class="price-tag"><strong>465 сом</strong></td></tr>
                        </tbody>
                    </table>
                    <p style="font-size:12px;color:var(--mu);margin-top:10px" data-i18n="tv_tar_note">Транспорт сети: 200 сом/мес (0 по акции). Подключение в квартирах — бесплатно.</p>
                </div>
                <div style="background:linear-gradient(135deg,#003d82,#0057B8);color:#fff;border-radius:14px;padding:20px;text-align:center">
                    <div style="font-size:36px;margin-bottom:8px">📺</div>
                    <div style="font-weight:800;font-size:16px;margin-bottom:6px" data-i18n="box_name">Приставка iPTV MAG-520</div>
                    <div style="opacity:.8;font-size:13px;margin-bottom:12px">4K, Dolby Digital Plus, Android</div>
                    <div style="font-size:24px;font-weight:800;margin-bottom:14px">3 900 сом</div>
                    <button class="btn-w" style="width:100%" onclick="show('equip')" data-i18n="more_info">Подробнее</button>
                </div>
            </div>
        </div>
        <img src="https://aknet.kg/files/ikonki-televideniev.jpg" alt="Функции ТВ"
             style="width:100%;border-radius:12px;border:1.5px solid var(--bo)"
             onerror="this.style.display='none'">
    </div>
</div>
