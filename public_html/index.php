<?php

define('VG_ACCESS', true); // Поможет запретить пользователям получить доступ к другим файлам

header('Content-type:text/html; charset=utf-8');
session_start();

require_once "config.php";
require_once "core/base/settings/internal_settings.php";