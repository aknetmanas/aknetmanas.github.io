/**
 * АКНЕТ — Основной скрипт
 * Файл: js/app.js
 */

/* ─── Навигация между страницами ─── */
function show(id) {
    // Скрыть все страницы
    document.querySelectorAll('.page').forEach(function(p) {
        p.classList.remove('active');
    });

    // Показать нужную
    var target = document.getElementById(id);
    if (target) {
        target.classList.add('active');
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Обновить активную кнопку в навигации
    document.querySelectorAll('[data-page]').forEach(function(btn) {
        btn.classList.toggle('active', btn.getAttribute('data-page') === id);
    });
}

/* ─── Мобильное меню ─── */
function toggleMenu() {
    var burger  = document.getElementById('burger');
    var menu    = document.getElementById('mobMenu');
    var overlay = document.getElementById('mobNav');

    var isOpen = menu.classList.contains('open');

    burger.classList.toggle('open', !isOpen);
    menu.classList.toggle('open', !isOpen);
    overlay.classList.toggle('open', !isOpen);
    document.body.style.overflow = isOpen ? '' : 'hidden';
}

function closeMenu() {
    document.getElementById('burger').classList.remove('open');
    document.getElementById('mobMenu').classList.remove('open');
    document.getElementById('mobNav').classList.remove('open');
    document.body.style.overflow = '';
}

// Закрыть меню при нажатии Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeMenu();
});

/* ─── Проверка баланса ─── */
function checkBalance(el) {
    var input = el.closest('.ig').querySelector('input');
    var acc   = (input.value || '').trim();

    if (!acc) {
        input.style.borderColor = '#ef4444';
        input.focus();
        var errMsg = (typeof T !== 'undefined' && T[LANG]) ? T[LANG]['bal_err'] : 'Введите номер счёта!';
        var origPh = input.placeholder;
        input.placeholder = errMsg;
        setTimeout(function() {
            input.style.borderColor = '';
            var phKey = input.getAttribute('data-i18n-ph');
            input.placeholder = (phKey && typeof T !== 'undefined' && T[LANG][phKey])
                ? T[LANG][phKey]
                : origPh;
        }, 2000);
        return;
    }

    window.open('https://billing.aknet.kg/?account=' + encodeURIComponent(acc), '_blank');
}

/* ─── Личный кабинет ─── */
function openCabinet() {
    window.open('https://billing.aknet.kg/', '_blank');
}

/* ─── Инициализация при загрузке ─── */
document.addEventListener('DOMContentLoaded', function() {
    // Применить сохранённый язык
    if (typeof setLang === 'function') {
        setLang(LANG);
    }

    // Установить активную страницу из hash или по умолчанию
    var hash = window.location.hash.replace('#', '');
    var validPages = ['home', 'tariffs', 'tv', 'business', 'equip', 'akcia', 'contacts'];
    if (hash && validPages.indexOf(hash) !== -1) {
        show(hash);
    } else {
        show('home');
    }
});
