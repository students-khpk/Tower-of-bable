<?php
	require_once 'connect_db.php';
	
	$nickname = trim($_REQUEST['nickname']);
	$login = trim($_REQUEST['login']);
	$password = trim($_REQUEST['password']);
	$confirm_password = trim($_REQUEST['confirm-password']);

	if ($password == $confirm_password) {

		$password = md5($password);

		$register = $pdo->query("INSERT INTO `users`(`nickname`, `login`, `password`, `role`) VALUES ('$nickname','$login', '$password', 'user')");

		if (!$register) {
			echo 'Ошибка регистрации!';
			die();
		}

		$auth = $pdo->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
		
		$user = $auth->fetchAll();
		if (count($user) == 0) {
			echo 'Пользователь не найден!';
			die();
		}

		setcookie('user', $user[0]['nickname'], time() + 3600, "/");

		header("Location: register.php");
	} else {
		echo 'Пароли не совпадают!';
		die();
	}