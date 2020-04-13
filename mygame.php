<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мои игры</title>
	<?php
		include 'head.php';
	?>
</head>
<body>

<?php
	include 'header.php';
?>

<h1 style="text-align: center;">Мои игры</h1>

<?php           
    $round_user = $pdo->query('SELECT * FROM `rounds`');
    while ($row = $round_user->fetch()){
        echo $row;
    }
?>


<?php
	include 'footer.php';
?>

</body>
</html>