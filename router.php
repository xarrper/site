<?php
/*
 * получение маршрута
 */

// получение значения page из глобальное переменной $_GET
// функция isset - определяет, установлена ли переменная. Если нет,
// то по умолчанию $page = 'profile'. Такой случай возможен при http://site
$page = isset($_GET['page']) ? $_GET['page'] : 'profile';
// проверка существования страницы, при отсутсвии $page = '404';
if (!file_exists($page . '.php')) {
    $page = '404';
    header("HTTP/1.0 404 Not found"); // Отправка HTTP-заголовка 404
}

// в зависимсти от $page вызываем функцию в controller.php
if ($page == 'news') {
    $news = allNews();
} else if ($page == 'profile') {
    $user = getUser();
}