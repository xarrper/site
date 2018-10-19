<?php
// вывод в браузере всех ошибок. использовать только на этапе разработки
error_reporting(E_ALL);
ini_set('display_errors', 'on');
// конструкция include предназначена для включения файлов в код сценария PHP
include 'controller.php'; // обрабатывает данных из model.php
include 'router.php'; // определение маршрута
include 'layout.php'; // подключение основного шаблона сайта


