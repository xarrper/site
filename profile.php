<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'site';

$link = mysqli_connect($host, $user, $password, $dbName);
mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM `user` WHERE `id` = 1";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);

?>
			
			<div class="row">
				<div class="col-4"><img src="profil.jpg" class="img-fluid img-profil" alt="Responsive image"></div>
				<div class="col-8">
					<p><b>Польное имя: </b><?=$user['name'] ?></p>
					<p><b>О себе: </b><?=$user['disc']?></p>
					<p><span class="contact-info">тел. <?=$user['number']?></span></p>
				</div>
			</div>
