<?php

function connectDB()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbName = 'site';

    $link = mysqli_connect($host, $user, $password, $dbName);
    mysqli_query($link, "SET NAMES 'utf8'");

    return $link;
}

function allNewsModel()
{
    $link = connectDB();

    $query = "SELECT * FROM `news`";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    return $result;
}

function getUserModel()
{
    $link = connectDB();

    $query = "SELECT * FROM `user` WHERE `id` = 1";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    return $result;
}