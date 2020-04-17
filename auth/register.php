<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<?php
		include '../head.php';
		require_once 'inquiries.php';
	?>
</head>
<body>
	<?php
		include '../header.php';
		require_once 'connect_db.php';
		if ($_COOKIE['user'] == ''):
	?>
	<div class="mt-5 container">
		<form class="shadow-lg" method="post" action="action_register.php">
			<h1 class="text-center">Регистрация</h1>
			<div class="form-group">
				<label>Никнейм:</label>
				<input type="text" class="form-control" name="nickname" placeholder="Введите никнейм" required minlength="3">
			</div>
			<div class="form-group">
				<label>Логин:</label>
				<input type="text" class="form-control" name="login" placeholder="Введите логин" required minlength="6">
			</div>
			<div class="form-group">
				<label>Пароль:</label>
				<input type="password" class="form-control" name="password" placeholder="Введите пароль" required minlength="6">
			</div>
			<div class="form-group">
				<label>Повторите пароль:</label>
				<input type="password" class="form-control" name="confirm-password" placeholder="Повторите пароль" required minlength="6">
			</div>
			<div class="form-inline">
				<input type="submit" class="btn btn-primary" value="Зарегистрироваться">
				<a href="auth.php" style="margin-left: 10px;">Вернуться к авторизации</a>
			</div>
		</form>
	</div>
	<?php else: ?>
		<p>Привет, <?=$nickname?>. Чтобы выйти нажмите<a href="logout.php"> здесь</a></p>
	<?php endif;
		include '../footer.php';
	?>
</body>
</html>