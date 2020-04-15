<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мои игры</title>
	<?php
		include 'head.php';
    	require_once 'auth/connect_db.php';
		
		$game = $_GET['game'];
		$player = $_GET['player'];
	?>
</head>
<body>

<style>
.players {
	position: relative;
	height: 100vh;
	width: 200px;
	background: #fff;
	border: 1px solid;
	text-align: center;
}

.chat {
	position: relative;
	height: 100vh;
	width: 250px;
	background: #fff;
	border: 1px solid;
	text-align: center;
}

.h2 {
	padding: 20px;
	background: #615a55;
	color: #fff;
}

.bs {
	box-shadow: 0 0 10px rgba(0,0,0,0.5);
}

.nav-game {
	width: 100%;
	background: #615a55;
}

.link-game {
	color: #fff;
	text-decoration: none;
}

.link-game:hover {
	color: #fff;
	text-decoration: underline;
}

#canvas {
	z-index: 10;
	background: black;
	width: 100vh;
	height: 100%;
}

</style>

<?php
	include 'header.php';
?>

<div class="container">
	<div class="d-flex justify-content-between">
		<div class="players">
			<div class="bs h2"><h2>Игроки</h2></div>
			<div class="p-2">
			<div class="d-flex flex-column align-items-start bd-highlight">
			  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user']?></a></div>
			  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user']?></a></div>
			  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user']?></a></div>
			  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user']?></a></div>
			  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user']?></a></div>
			</div>
			<div style="position: absolute; bottom: 5px;">
				<p class="text-center">Время до конца:<br>3д.7ч.10м</p>
			</div>
			</div>
		</div>
		<div class="d-flex flex-column">
			<div class="nav-game bs">
				 <div class="d-flex flex-row">
					  <div class="p-2"><a href="#" class="link-game"><img src="../img/game-content/1.png" width="20" alt=""> Этажи: 10</a></div>
					  <div class="p-2"><a href="#" class="link-game"><img src="../img/game-content/2.png" width="20" alt=""> Укрепленные этажи: 3</a></div>
					  <div class="p-2"><a href="#" class="link-game"><img src="../img/game-content/3.png" width="20" alt=""> Снаряды: 10</a></div>
					  <div class="p-2"><a href="#" class="link-game"><img src="../img/game-content/4.png" width="20" alt=""> Кирпичи: 5 +1/5m</a></div>
				</div>
			</div>
		<canvas id="canvas"></canvas>
		</div>
		<div class="chat">
			<div class="bs h2"><h2>Чат</h2></div>
			<div class="p-2">
				<div class="d-flex flex-column align-items-start bd-highlight">
				  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user'].': '.'Всем ку'?></a></div>
				  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user'].': '.'Вечер в хату'?></a></div>
				  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user'].': '.'Привет!'?></a></div>
				  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user'].': '.'Когда начало?'?></a></div>
				  <div class="p-2 bd-highlight"><a class="navbar-brand" href="../profile.php"><img src="../img/profile-icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><?=' '.$_COOKIE['user'].': '.'Хз'?></a></div>
				</div>
				<div style="position: absolute; bottom: 5px;">
					<input type="text" size="25" style="margin-bottom: 10px;">
					<input type="submit" style="float: right;">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>