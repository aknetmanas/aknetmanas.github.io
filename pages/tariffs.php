<?php /** АКНЕТ — Страница тарифов | pages/tariffs.php */ ?>

<div id="tariffs" class="page">
    <div class="tsec" style="padding-top:40px">
        <div class="tin">
            <div class="slbl2" data-i18n="tar_lbl">Тарифные планы</div>
            <div class="stitle" data-i18n="tar_title">iTV Unlim Family — Интернет + ТВ</div>

            <div style="overflow-x:auto">
                <table class="ttable">
                    <thead>
                        <tr>
                            <th data-i18n="th_tariff">Тариф</th>
                            <th data-i18n="th_speed">Скорость</th>
                            <th data-i18n="th_ch">ТВ-каналы</th>
                            <th data-i18n="th_price">Стоимость/мес</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><strong>iTV Unlim Family Start</strong></td><td class="spd">40 Мбит/с</td><td data-i18n="ch100">100+ каналов</td><td class="price-tag">750 сом</td><td><button class="btt bto" style="width:auto;padding:6px 16px" onclick="show('contacts')" data-i18n="connect">Подключить</button></td></tr>
                        <tr><td><strong>iTV Unlim Family 1</strong></td><td class="spd">60 Мбит/с</td><td data-i18n="ch150">150+ каналов</td><td class="price-tag">990 сом</td><td><button class="btt bto" style="width:auto;padding:6px 16px" onclick="show('contacts')" data-i18n="connect">Подключить</button></td></tr>
                        <tr><td><strong>iTV Unlim Family 2</strong></td><td class="spd">80 Мбит/с</td><td data-i18n="ch200">200+ каналов</td><td class="price-tag">1 200 сом</td><td><button class="btt btp" style="width:auto;padding:6px 16px" onclick="show('contacts')" data-i18n="connect">Подключить</button></td></tr>
                        <tr><td><strong>iTV Unlim Family 3</strong></td><td class="spd">100 Мбит/с</td><td data-i18n="ch200">200+ каналов</td><td class="price-tag">1 650 сом</td><td><button class="btt bto" style="width:auto;padding:6px 16px" onclick="show('contacts')" data-i18n="connect">Подключить</button></td></tr>
                        <tr><td><strong>iTV Unlim Family 4</strong></td><td class="spd">350 Мбит/с</td><td data-i18n="ch200">200+ каналов</td><td class="price-tag">2 200 сом</td><td><button class="btt bto" style="width:auto;padding:6px 16px" onclick="show('contacts')" data-i18n="connect">Подключить</button></td></tr>
                        <tr><td><strong>iTV Unlim Family 5</strong></td><td class="spd">600 Мбит/с</td><td data-i18n="ch200">200+ каналов</td><td class="price-tag">2 500 сом</td><td><button class="btt bto" style="width:auto;padding:6px 16px" onclick="show('contacts')" data-i18n="connect">Подключить</button></td></tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size:12px;color:var(--mu);margin-top:12px" data-i18n="tar_note">* Цены в сомах с учётом всех налогов. Start недоступен в г. Бишкек и в частном секторе. Для тарифов 4 и 5 требуется оборудование >100 Мбит/с.</p>

            <div class="stitle" style="margin-top:48px" data-i18n="tar_tv_only">Только Цифровое ТВ</div>
            <div class="tg">
                <div class="tc">
                    <div class="tn" data-i18n="tc1_name">Семейный</div>
                    <div class="tp">395 <span data-i18n="per_mo">сом/мес</span></div>
                    <div class="ts2">150+</div>
                    <div class="tsl" data-i18n="tc_ch_hd">телеканалов в HD</div>
                    <ul class="tf">
                        <li><span class="ck">✓</span><span data-i18n="tc1_f1">150 популярных каналов</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc1_f2">HD-качество изображения</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc1_f3">Детские каналы</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc1_f4">Родительский контроль</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc1_f5">Подключение в квартирах — 0 сом</span></li>
                    </ul>
                    <button class="btt bto" onclick="show('contacts')" data-i18n="connect">Подключить</button>
                </div>
                <div class="tc pop">
                    <div class="popb" data-i18n="popular">⭐ Популярный</div>
                    <div class="tn" data-i18n="tc2_name">Семейный Плюс</div>
                    <div class="tp">465 <span data-i18n="per_mo">сом/мес</span></div>
                    <div class="ts2">200+</div>
                    <div class="tsl" data-i18n="tc_ch_hd">телеканалов в HD</div>
                    <ul class="tf">
                        <li><span class="ck">✓</span><span data-i18n="ch200">200+ каналов</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc2_f2">Всё из тарифа «Семейный»</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc2_f3">Тематические каналы</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc2_f4">Запись передач на USB</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc2_f5">Пауза и перемотка ТВ</span></li>
                    </ul>
                    <button class="btt btp" onclick="show('contacts')" data-i18n="connect_arrow">Подключить →</button>
                </div>
                <div class="tc">
                    <div class="tn" data-i18n="tc3_name">Частный сектор</div>
                    <div class="tp" style="font-size:26px">от 990 <span data-i18n="per_mo">сом/мес</span></div>
                    <div class="ts2" style="font-size:20px">60–600</div>
                    <div class="tsl" data-i18n="tc3_sub">Мбит/с + ТВ</div>
                    <ul class="tf">
                        <li><span class="ck">✓</span><span data-i18n="tc3_f1">Подключение от 5 000 сом</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc3_f2">14 тестовых дней</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc3_f3">100% возврат если не устроит</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc3_f4">Транспорт сети 800 сом/мес</span></li>
                        <li><span class="ck">✓</span><span data-i18n="tc3_f5">Приставка в собственность</span></li>
                    </ul>
                    <button class="btt bto" onclick="show('contacts')" data-i18n="more_info">Узнать подробнее</button>
                </div>
            </div>
        </div>
    </div>
</div>
