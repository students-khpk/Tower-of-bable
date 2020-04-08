<?php
	$pdo = new PDO(
		'mysql:host=localhost;dbname=game_db', 'root', ''
	);

	if (!$pdo) {
		echo "При подключении к БД произошла ошибка!";
		die();
	}