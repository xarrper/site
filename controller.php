<?php

include 'model.php'; // подклучение model.php, для получение даннх из бд
// получение всех новосте1
function allNews()
{
    $result = allNewsModel(); // получение даннхы мз model.php
    $news = []; // обработка данных
    while ($row = mysqli_fetch_assoc($result)) { // функция mysqli_fetch_assoc возвращает ассоциативный массив
        $news[] = $row;
    }
    return $news;
}
// получение пользователя
function getUser()
{
    $result = getUserModel(1); // получение данных мз model.php
    return mysqli_fetch_assoc($result);
}