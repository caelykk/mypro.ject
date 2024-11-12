<?php
/*
 * Файл с базовыми настройками
 * */

defined('VG_ACCESS') or die('Access denied');

// Настройки путей
const TEMPLATE = 'templates/default'; // Путь к шаблонам сайта
const ADMIN_TEMPLATES = 'core/admin/views'; // Путь к шаблонам админки


// Настройки Cookie
const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = ''; // Ключ шифрования для куки-файла
const COOKIE_TIME = 60; // Время бездействия для администратора
const BLOCK_TIME = 3; // Время блокировки в случае неправильного подбора пароля к сайту

// Настройки постраничной навигации
const QTY = 8; // Отображает количество товаров на странице
const QTY_LINKS = 3; // Отображает количество ссылок для постраничной навигации

// Пути к файлам css и js
const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];
const USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];