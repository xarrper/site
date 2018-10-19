<?php
// подключить базу данных
function connectDB()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbName = 'site';

    $link = mysqli_connect($host, $user, $password, $dbName); // открыть соединение с MySQL
    mysqli_query($link, "SET NAMES 'utf8'"); // выполнить запрос к бд, установить кодировку utf8

    return $link;
}

function allNewsModel()
{
    $link = connectDB(); // установить соединение к бд

    $query = "SELECT * FROM `news`"; // получение всех новостей
    $result = mysqli_query($link, $query) or die(mysqli_error($link)); // выполнить запрос или вернуть ошибку

    return $result;
}

function getUserModel($id)
{
    $link = connectDB();

    $query = "SELECT * FROM `user` WHERE `id` = ".$id; // получение пользователя по id
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    return $result;
}