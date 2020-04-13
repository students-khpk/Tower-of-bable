<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мои игры</title>
	<?php
		include 'head.php';
    require_once 'auth/connect_db.php';
	?>
</head>
<body>

<?php
	include 'header.php';
?>

<h1 style="text-align: center;">Мои игры</h1>

<div class="row">
  
</div>
<?php           
  $round_user = $pdo->query('SELECT * FROM `round_user` WHERE `user_id`='.$_COOKIE['user'].'');
  while ($row = $round_user->fetch()){
    $round = $pdo->query('SELECT * FROM `rounds` WHERE '.$_COOKIE['user'].'='.$_COOKIE['user'].'');
    echo '<div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>';
  }
?>


<?php
	include 'footer.php';
?>

</body>
</html>