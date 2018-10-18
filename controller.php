<?php

include 'model.php';

function allNews() {
    $result = allNewsModel();
    $news = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $news[] = $row;
    }
    return $news;
}

function getUser() {
    $result = getUserModel();
    return mysqli_fetch_assoc($result);
}

if ($_GET['page'] == 'news') {
    $news = allNews();
}
else if ($_GET['page'] == 'profile') {
    $user = getUser();
}