<?php /** АКНЕТ — Оборудование | pages/equip.php */ ?>

<div id="equip" class="page">
    <div class="sec">
        <div class="slbl2" data-i18n="eq_lbl">Оборудование</div>
        <div class="stitle" data-i18n="eq_title">Роутеры, Mesh Wi-Fi и приставки</div>
        <div class="eg">
            <?php
            $equipment = [
                ['img'=>'https://www.aknet.kg/files/banners/routers/%D1%8164.jpg',   'name'=>'TP-Link Archer C64',        'desc'=>'Wi-Fi 5 (AC1200), 4 антенны, Beamforming, MU-MIMO, 4×Gigabit LAN, WPA3', 'price'=>'3 900'],
                ['img'=>'https://www.aknet.kg/files/banners/routers/AX12.jpg',        'name'=>'TP-Link Archer AX12',       'desc'=>'Wi-Fi 6 (AX1500), OFDMA, MU-MIMO, 3×Gigabit LAN, WPA3, TWT',            'price'=>'4 200'],
                ['img'=>'https://aknet.kg/files/banners/routers/tplinkDecoM4.png',   'name'=>'Mesh Wi-Fi TP-Link Deco M4','desc'=>'AC1200, бесшовный роуминг, родительский контроль, 2×Gigabit Ethernet',   'price'=>'8 500'],
                ['img'=>'https://aknet.kg/files/banners/routers/tplinkDecoE4.png',   'name'=>'Mesh Wi-Fi TP-Link Deco E4','desc'=>'AC1200, бесшовный роуминг, двухдиапазонный Wi-Fi',                        'price'=>'6 500'],
                ['img'=>'https://www.aknet.kg/files/Mag520.jpg',                      'name'=>'iPTV Приставка MAG-520',    'desc'=>'Android, 4K 60fps, Dolby Digital Plus, 4-ядерный процессор, 200+ каналов','price'=>'3 900'],
                ['img'=>'https://www.aknet.kg/files/pictures/mercusys.jpg',           'name'=>'Коммутатор Mercusys MS105G','desc'=>'5×Gigabit Ethernet, Plug&amp;Play, энергосбережение до 82%',               'price'=>'1 500'],
            ];
            foreach ($equipment as $item): ?>
            <div class="ec">
                <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>"
                     style="width:100%;height:140px;object-fit:contain;border-radius:8px;background:#f5f5f5;margin-bottom:14px"
                     onerror="this.style.display='none'">
                <h3><?= $item['name'] ?></h3>
                <p><?= $item['desc'] ?></p>
                <div class="price-pill"><?= $item['price'] ?> сом</div>
            </div>
            <?php endforeach; ?>
        </div>
        <div style="margin-top:24px;background:var(--bl);border-radius:12px;padding:18px;font-size:13px;color:var(--mu)">
            <strong style="color:var(--tx)" data-i18n="note">Примечание:</strong>
            <span data-i18n="eq_note"> Приставка переходит в собственность абонента. При выкупе 2-й приставки: 3 900 сом, абонплата 0 сом.</span>
        </div>
    </div>
</div>
