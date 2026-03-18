<?php
/**
 * АКНЕТ — Шапка сайта
 * Файл: includes/header.php
 */
?>
<!DOCTYPE html>
<html lang="ru" id="html-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= SITE_DESC ?>">
    <meta name="keywords"    content="<?= META_KEYWORDS ?>">
    <meta name="author"      content="<?= SITE_NAME ?>">
    <meta name="robots"      content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title"       content="<?= SITE_NAME ?> — Интернет и ТВ в Кыргызстане">
    <meta property="og:description" content="<?= SITE_DESC ?>">
    <meta property="og:image"       content="<?= META_OG_IMAGE ?>">
    <meta property="og:url"         content="<?= SITE_URL ?>">
    <meta property="og:type"        content="website">

    <!-- Favicon -->
    <link rel="icon" href="<?= SITE_URL ?>/favicon.ico" type="image/x-icon">

    <title><?= SITE_NAME ?> — Интернет и Цифровое ТВ в Кыргызстане</title>

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Стили -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<!-- ═══════════════════════════════
     ШАПКА
     ═══════════════════════════════ -->
<header>
    <div class="hi">

        <!-- Логотип -->
        <a class="logo" href="#" onclick="show('home')">
            <img src="<?= LOGO_URL ?>" alt="<?= SITE_NAME ?>"
                 onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
            <span class="logo-fb"><?= SITE_NAME ?></span>
        </a>

        <!-- Десктопная навигация -->
        <nav>
            <button data-page="home"     data-i18n="nav_home"     onclick="show('home')"     class="active">Главная</button>
            <button data-page="tariffs"  data-i18n="nav_tariffs"  onclick="show('tariffs')">Тарифы</button>
            <button data-page="tv"       data-i18n="nav_tv"       onclick="show('tv')">Цифровое ТВ</button>
            <button data-page="business" data-i18n="nav_business" onclick="show('business')">Бизнес</button>
            <button data-page="equip"    data-i18n="nav_equip"    onclick="show('equip')">Оборудование</button>
            <button data-page="akcia"    data-i18n="nav_akcia"    onclick="show('akcia')">🌸 Акция</button>
            <button data-page="contacts" data-i18n="nav_contacts" onclick="show('contacts')">Контакты</button>
        </nav>

        <!-- Правая часть шапки -->
        <div class="ha">
            <!-- Переключатель языка -->
            <div class="lang-sw">
                <button data-lang="ru" class="active" onclick="setLang('ru')">RU</button>
                <button data-lang="kg"                onclick="setLang('kg')">KG</button>
            </div>

            <!-- Телефон -->
            <a href="tel:+996555611004" class="ph">📞 <?= PHONE_MANAS ?></a>

            <!-- Личный кабинет -->
            <a href="<?= BILLING_URL ?>" target="_blank" class="bo-btn" data-i18n="cabinet">
                👤 Личный кабинет
            </a>
        </div>

        <!-- Гамбургер (мобильный) -->
        <button class="burger" id="burger" aria-label="Меню" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>

<!-- ═══════════════════════════════
     МОБИЛЬНОЕ МЕНЮ
     ═══════════════════════════════ -->
<div class="mob-nav" id="mobNav" onclick="closeMenu()"></div>

<div class="mob-menu" id="mobMenu" role="dialog" aria-label="Меню навигации">
    <div class="mob-menu-head">
        <a class="logo" href="#" onclick="show('home');closeMenu()">
            <img src="<?= LOGO_URL ?>" alt="<?= SITE_NAME ?>" style="height:28px"
                 onerror="this.style.display='none'">
            <span style="font-size:20px;font-weight:800;color:var(--blue);letter-spacing:-1px"><?= SITE_NAME ?></span>
        </a>
        <button class="mob-close" onclick="closeMenu()" aria-label="Закрыть меню">&#x2715;</button>
    </div>

    <!-- Переключатель языка в меню -->
    <div class="mob-lang">
        <div class="lang-sw">
            <button data-lang="ru" class="active" onclick="setLang('ru')">RU</button>
            <button data-lang="kg"                onclick="setLang('kg')">KG</button>
        </div>
    </div>

    <nav>
        <button data-page="home"     data-i18n="nav_home"     onclick="show('home');closeMenu()">Главная</button>
        <button data-page="tariffs"  data-i18n="nav_tariffs"  onclick="show('tariffs');closeMenu()">Тарифы</button>
        <button data-page="tv"       data-i18n="nav_tv"       onclick="show('tv');closeMenu()">Цифровое ТВ</button>
        <button data-page="business" data-i18n="nav_business" onclick="show('business');closeMenu()">Бизнес</button>
        <button data-page="equip"    data-i18n="nav_equip"    onclick="show('equip');closeMenu()">Оборудование</button>
        <button data-page="akcia"    data-i18n="nav_akcia"    onclick="show('akcia');closeMenu()">🌸 Акция</button>
        <button data-page="contacts" data-i18n="nav_contacts" onclick="show('contacts');closeMenu()">Контакты</button>
    </nav>

    <div class="mob-menu-bottom">
        <a href="tel:+996555611004" class="ph">📞 <?= PHONE_MANAS ?></a>
        <a href="<?= BILLING_URL ?>" target="_blank" class="bo-btn" data-i18n="cabinet"
           onclick="closeMenu()">👤 Личный кабинет</a>
    </div>
</div>
