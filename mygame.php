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

<div class="d-flex justify-content-around">
  <form method=post>
    <input class="btn btn-primary" type=submit name=btn value='Найти игру'>
  </form>
</div>


<h1 style="text-align: center;">Мои игры</h1>

<div class="d-flex justify-content-around">
  
<?php           
  $round_user = $pdo->query('SELECT * FROM `round_user` WHERE `user_id`='.$_COOKIE['user'].'');
  while ($row = $round_user->fetch()){
    $round = $pdo->query('SELECT * FROM `rounds` WHERE '.$_COOKIE['user'].'='.$_COOKIE['user'].'');
    while ($row2 = $round->fetch()){
      echo '<div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">№'.$row2[0].' Статус: '.$row2[1].'</h5>
                  <p>Очки: '.$row[7].'</p>
                  <p>Этажи: '.$row[5].'</p>
                  <a href="game.php?game='.$row2[0].'&player='.$_COOKIE['user'].'" class="btn btn-primary">Играть</a>
                </div>
              </div>
            </div>';
    }
  }
?>
</div>

<?php
	include 'footer.php';
?>

</body>
</html>