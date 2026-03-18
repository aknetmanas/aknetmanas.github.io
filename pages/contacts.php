<?php /** АКНЕТ — Контакты | pages/contacts.php */ ?>

<div id="contacts" class="page">
    <div class="sec">
        <div class="slbl2" data-i18n="ct_lbl">Контакты</div>
        <div class="stitle" data-i18n="ct_title">Офисы и менеджеры</div>

        <!-- Три города -->
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:32px">

            <!-- Манас -->
            <div style="background:linear-gradient(135deg,#F7941D,#e67e00);color:#fff;border-radius:16px;padding:24px;position:relative;overflow:hidden">
                <div style="position:absolute;right:10px;bottom:-10px;font-size:60px;opacity:.2;pointer-events:none">🏔</div>
                <div style="font-size:11px;font-weight:700;opacity:.75;letter-spacing:1px;text-transform:uppercase;margin-bottom:8px" data-i18n="ct_new_dir">Новое направление</div>
                <div style="font-size:18px;font-weight:800;margin-bottom:12px" data-i18n="ct_manas">г. Манас</div>
                <div style="font-size:13px;opacity:.9;margin-bottom:14px" data-i18n="ct_manas_mgr">Менеджер по г. Манас</div>
                <a href="tel:+996555611004" style="font-size:20px;font-weight:800;color:#fff;text-decoration:none;display:block;background:rgba(255,255,255,.2);padding:10px 16px;border-radius:10px;margin-bottom:8px">📞 <?= PHONE_MANAS ?></a>
                <div style="font-size:12px;opacity:.8">WhatsApp</div>
            </div>

            <!-- Бишкек -->
            <div class="accia-card" style="margin-bottom:0">
                <div style="font-size:18px;font-weight:800;color:var(--blue);margin-bottom:12px" data-i18n="ct_bish">г. Бишкек</div>
                <div style="font-size:13px;margin-bottom:6px">📞 <a href="tel:+996312611155" style="color:var(--tx);text-decoration:none"><?= SITE_PHONE1 ?></a></div>
                <div style="font-size:13px;margin-bottom:14px">📞 <a href="tel:+996550611155" style="color:var(--tx);text-decoration:none"><?= SITE_PHONE2 ?></a></div>
                <div style="font-size:12px;color:var(--mu);margin-bottom:6px">📍 ул. Ахунбаева, 119A</div>
                <div style="font-size:12px;color:var(--mu);margin-bottom:6px" data-i18n="ct_bish_h1">Пн–Пт: 9:00–18:00 | Сб: 10:00–16:00</div>
                <div style="font-size:12px;color:var(--mu);margin-bottom:6px">📍 ЦУМ «Айчурек», пр. Чуй, 155</div>
                <div style="font-size:12px;color:var(--mu)" data-i18n="ct_bish_h2">Пн–Вс: 10:00–20:00</div>
            </div>

            <!-- Ош -->
            <div class="accia-card" style="margin-bottom:0">
                <div style="font-size:18px;font-weight:800;color:var(--blue);margin-bottom:12px" data-i18n="ct_osh">г. Ош</div>
                <div style="font-size:13px;margin-bottom:6px">📞 <a href="tel:+99632226020" style="color:var(--tx);text-decoration:none">+996 (3222) 6 20 20</a></div>
                <div style="font-size:13px;margin-bottom:14px">📞 <a href="tel:+996999611155" style="color:var(--tx);text-decoration:none">+996 (999) 61 11 55</a></div>
                <div style="font-size:12px;color:var(--mu);margin-bottom:6px">📍 пр. Масалиева, 67</div>
                <div style="font-size:12px;color:var(--mu);margin-bottom:6px" data-i18n="ct_osh_h1">Пн–Пт: 8:00–18:00</div>
                <div style="font-size:12px;color:var(--mu);margin-bottom:6px" data-i18n="ct_osh_h2">Сб–Вс: 8:00–17:00</div>
                <div style="font-size:12px;color:var(--mu)">📧 <a href="mailto:osh@aknet.kg" style="color:var(--tx)">osh@aknet.kg</a></div>
            </div>
        </div>

        <!-- Почта и чат -->
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px">
            <div class="accia-card" style="margin-bottom:0">
                <h2 data-i18n="ct_mail_h">Почта</h2>
                <table style="width:100%;font-size:13px;margin-top:12px">
                    <?php
                    $emails = [
                        ['ct_m1','Коммерческий блок',  'info@aknet.kg'],
                        ['ct_m2','Техподдержка',        'support@aknet.kg'],
                        ['ct_m3','Маркетинг',           'marketing@aknet.kg'],
                        ['ct_m4','Регионы',             'regions@aknet.kg'],
                        ['ct_m5','Операторы',           'noc@aknet.kg'],
                    ];
                    foreach ($emails as $row): ?>
                    <tr>
                        <td style="color:var(--mu);padding:6px 0" data-i18n="<?= $row[0] ?>"><?= $row[1] ?></td>
                        <td><a href="mailto:<?= $row[2] ?>" style="color:var(--blue)"><?= $row[2] ?></a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div class="accia-card" style="margin-bottom:0">
                <h2 data-i18n="ct_chat_h">Чат-поддержка 24/7</h2>
                <div style="margin-top:14px;display:flex;flex-direction:column;gap:10px">
                    <a href="https://wa.me/996552611155" target="_blank" rel="noopener noreferrer"
                       style="display:flex;align-items:center;gap:10px;background:#25D366;color:#fff;padding:12px 16px;border-radius:10px;text-decoration:none;font-weight:700">
                        <span style="font-size:20px">💬</span> WhatsApp: 0552 61 11 55
                    </a>
                    <a href="https://wa.me/996555611004" target="_blank" rel="noopener noreferrer"
                       style="display:flex;align-items:center;gap:10px;background:linear-gradient(135deg,#F7941D,#e67e00);color:#fff;padding:12px 16px;border-radius:10px;text-decoration:none;font-weight:700">
                        <span style="font-size:20px">🏔</span> <span data-i18n="ct_manas_wa">Манас — WhatsApp: 0555 611 004</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Виджет баланса -->
        <div class="bwid" style="margin-top:24px">
            <h3 data-i18n="bal_h">💳 Узнать баланс лицевого счёта</h3>
            <div class="ig">
                <input type="text" data-i18n-ph="bal_ph"
                       placeholder="Введите номер лицевого счёта..."
                       onkeydown="if(event.key==='Enter')checkBalance(this)">
                <button onclick="checkBalance(this)" data-i18n="bal_btn">Проверить</button>
            </div>
        </div>

    </div>
</div>
