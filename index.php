<?php
/**
 * АКНЕТ — Главный файл
 * Файл: index.php
 *
 * Структура проекта:
 *   index.php          — точка входа
 *   css/main.css       — переменные, база, компоненты
 *   css/header.css     — шапка и навигация
 *   css/pages.css      — стили страниц
 *   css/responsive.css — адаптивность
 *   js/i18n.js         — переводы RU/KG
 *   js/app.js          — навигация, меню, баланс
 *   includes/config.php  — константы
 *   includes/header.php  — шапка
 *   includes/footer.php  — подвал
 *   pages/home.php       — главная страница
 *   pages/tariffs.php    — тарифы
 *   pages/tv.php         — цифровое ТВ
 *   pages/business.php   — бизнес
 *   pages/equip.php      — оборудование
 *   pages/akcia.php      — акция
 *   pages/contacts.php   — контакты
 */

require_once 'includes/config.php';
require_once 'includes/header.php';
require_once 'pages/home.php';
require_once 'pages/tariffs.php';
require_once 'pages/tv.php';
require_once 'pages/business.php';
require_once 'pages/equip.php';
require_once 'pages/akcia.php';
require_once 'pages/contacts.php';
require_once 'includes/footer.php';
