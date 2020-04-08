<?php
	require_once 'connect_db.php';
	
	$login = trim($_REQUEST['login']);
	$password = trim($_REQUEST['password']);
	
	$password = md5($password);

	$auth = $pdo->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

	$user = $auth->fetchAll();
	if (count($user) == 0) {
		echo 'Пользователь не найден!';
		die();
	}

	setcookie('user', $user[0]['nickname'], time() + 3600, "/");

	header("Location: ../auth.php");