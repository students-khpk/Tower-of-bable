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

		$id = $_COOKIE['user'];
    	$user = $pdo->query('SELECT * FROM users WHERE id = '.$player.'');
    	$floor = 0;
    	$floor_fix = 0;
    	$bricks = 0;
    	$shells = 0;
    	$roof = 0;
    	while ($row_user = $user->fetch()){
    		$user2 = $pdo->query('SELECT * FROM `round_user` WHERE `user_id`='.$row_user[0].'');
			while ($row_user2 = $user2->fetch()){
				$floor = $row_user2[5];
		    	$floor_fix = $row_user2[6];
		    	$bricks = $row_user2[3];
		    	$shells = $row_user2[7];
		    	$roof = $row_user2[4];
			}
  		}

  		$user_cookie = $pdo->query('SELECT * FROM users WHERE id = '.$id.'');
    	$floor_cookie = 0;
    	$floor_fix_cookie = 0;
    	$bricks_cookie = 0;
    	$shells_cookie = 0;
    	$roof_cookie = 0;
    	while ($row_user_cookie = $user_cookie->fetch()){
    		$user2_cookie = $pdo->query('SELECT * FROM `round_user` WHERE `user_id`='.$row_user_cookie[0].'');
			while ($row_user2_cookie = $user2_cookie->fetch()){
				$floor_cookie = $row_user2_cookie[5];
		    	$floor_fix_cookie = $row_user2_cookie[6];
		    	$bricks_cookie = $row_user2_cookie[3];
		    	$shells_cookie = $row_user2_cookie[7];
		    	$roof_cookie = $row_user2_cookie[4];
			}
  		}
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
			<div class="d-flex flex-column align-items-start bd-highlight" style="overflow-y: scroll; height: 80vh;">
			<?php
				$round_user = $pdo->query('SELECT * FROM `round_user` WHERE `round_id`='.$game.'');
  				while ($row = $round_user->fetch()){
  					$users = $pdo->query('SELECT * FROM `users` WHERE `id` = '.$row[1].'');
  					while ($row2 = $users->fetch()){
  						echo '<div class="p-2 bd-highlight">
  						<a class="navbar-brand" href="../game.php?game='.$game.'&player='.$row[1].'">'.$row2[1].'</a>
  						<p>Этажи: '.$row[5].'</p>
  						</div>';
  					}
  				}
			?>
			  
			</div>
			<div style="position: absolute; bottom: 5px;">
				<p class="text-center">Время до конца:<br>3д.7ч.10м</p>
			</div>
			</div>
		</div>
		<div class="d-flex flex-column">
			<div class="nav-game bs">
				 <div class="d-flex flex-row">
					  <div class="p-2"><a href="#" class="link-game"><img src="../img/game-content/1.png" width="20" alt=""><?php echo 'Этажи: '.$floor.'' ?></a></div>
					  <div class="p-2"><a href="#" class="link-game"><img src="../img/game-content/2.png" width="20" alt=""><?php echo 'Укрепленные этажи: '.$floor_fix.'' ?></a></div>
					  <div class="p-2"><a href="#" class="link-game"><img src="../img/game-content/3.png" width="20" alt=""><?php echo 'Снаряды: '.$shells.'' ?></a></div>
					  <div class="p-2"><a href="#" class="link-game"><img src="../img/game-content/4.png" width="20" alt=""><?php echo 'Кирпичи: '.$bricks.'' ?></a></div>
				</div>
			</div>
			<div class="nav-game bs">
				<div class="d-flex flex-row">
					<?php
						if ($player == $id) {
							echo '<div class="p-2"><a class="" href="game_second.php?game='.$game.'&player='.$player.'&actor=build">Построить этаж</a></div>';
							echo '<div class="p-2"><a class="" href="game_second.php?game='.$game.'&player='.$player.'&actor=upgrate">Защитить этаж</a></div>';
							echo '<div class="p-2"><a class="" href="game_second.php?game='.$game.'&player='.$player.'&actor=upgrate">Купить снаряд</a></div>';
							if (!$roof) {
								echo '<div class="p-2"><a class="" href="game_second.php?game='.$game.'&player='.$player.'&actor=upgrate">Поставить крышу</a></div>';
							} else {
								echo '<div class="p-2"><a class="" href="game_second.php?game='.$game.'&player='.$player.'&actor=upgrate">Убрать крышу</a></div>';
							}
						} else {
							echo '<div class="p-2"><p style="margin: 0px;">Снаряды: '.$shells_cookie.'</p></div>';
							echo '<div class="p-2"><a class="" href="game_second.php?game='.$game.'&player='.$player.'&actor=upgrate">Атаковать</a></div>';
							echo '<div class="p-2"><a class="" href="game_second.php?game='.$game.'&player='.$player.'&actor=upgrate">Вернуться</a></div>';
						}
					?>
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