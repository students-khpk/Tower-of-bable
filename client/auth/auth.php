<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<?php
		include '../head.php';
	?>
</head>
<body>
	<?php
		include '../header.php';
		require_once 'connect_db.php';
		if ($_COOKIE['user'] == ''):
	?>
	<div class="container">
		<form class="shadow-lg" method="post" action="action_auth.php">
			<h1 class="text-center">Авторизация</h1>
			<div class="form-group">
				<label>Логин:</label>
				<input type="text" class="form-control" name="login" placeholder="Введите логин" minlength="6">
			</div>
			<div class="form-group">
				<label>Пароль:</label>
				<input type="password" class="form-control" name="password" placeholder="Введите пароль" minlength="6">
			</div>
			<div class="form-inline">
				<input type="submit" class="btn btn-primary" value="Войти">
				<a href="register.php" style="margin-left: 10px;">Регистрация</a>
			</div>
		</form>
	</div>
	<?php else: ?>
		<p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите<a href="logout.php"> здесь</a></p>
	<?php endif;
		include '../footer.php';
	?>
</body>
</html>