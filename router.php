<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'profile';

if (!file_exists($page . '.php')) {
    $page = '404';
    header("HTTP/1.0 404 Not found");
}

if ($page == 'news') {
    $news = allNews();
} else if ($page == 'profile') {
    $user = getUser();
}