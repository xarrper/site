<?php
	
	function connectBD() {
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$dbName = 'test';

		$link = mysqli_connect($host, $user, $password, $dbName);
		mysqli_query($link, "SET NAMES 'utf8'");
		
		return $link;
	}
	
	function allNewsModel() {
		$link = connectBD();
		
		$query = "SELECT * FROM `news`";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		
		return $result;
	}
	
	
	function getUserModel($id) {
		$link = connectBD();
		
		$query = "SELECT * FROM `user` WHERE `id` = ".$id;
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		return $result;	
	}