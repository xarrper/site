<?php

$page = $_GET['page'];

if (!file_exists($_GET['page'] . '.php')){
    $page = '404';
    header("HTTP/1.0 404 Not found");
}