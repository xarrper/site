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
	
	function getUser($id) {
		$result = getUserModel(1);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}
	