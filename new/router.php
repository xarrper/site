<?php
	$path = $_GET['page'].'.php';
	
	if (!file_exists($path)) {
		$path = '404.php';
		header("HTTP/1.0 404 Not found");
	}
	
	include 'controller.php';
	
	if ($_GET['page'] == 'news') {
		$news = allNews();
	} 
	else if ($_GET['page'] == 'profile') {
		$user = getUser(1);
	}