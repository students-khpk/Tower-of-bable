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

<?php
	include 'header.php';
?>



</body>
</html>