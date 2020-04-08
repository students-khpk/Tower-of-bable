<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<?php
		include '../head.php';
	?>
</head>
<body>
	<?php 
		require_once 'connect_db.php';
		if ($_COOKIE['user'] == ''):
	?>
	<form method="post" action="action_register.php">
		<h1>Регистрация</h1>
		<label>Никнейм</label><br>
			<input type="text" name="nickname"><br>
		<label>Логин</label><br>
			<input type="text" name="login"><br>
		<label>Пароль</label><br>
			<input type="text" name="password"><br>
		<label>Повторите пароль</label><br>
			<input type="text" name="confirm-password"><br>
		<input type="submit" value="Зарегистрироваться"><br>
		<a href="auth.php">Вернуться к авторизации</a>
	</form>
	<?php else: ?>
		<p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="logout.php">здесь</a></p>
	<?php endif;?>
</body>
</html>