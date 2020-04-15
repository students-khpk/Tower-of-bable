<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Создать игру</title>
  <?php
    include 'head.php';
    require_once 'auth/connect_db.php';
  ?>
</head>
<body>

<?php
  include 'header.php';
?>


<h1 style="text-align: center;">Найти игру</h1>


<table class="table table-bordered container">
  <thead>
    <tr>
      <th scope="col">Номер</th>
      <th scope="col">Игроки</th>
      <th scope="col">Количество этажей для победы</th>
      <th scope="col">Операции</th>
    </tr>
  </thead>
  <tbody>
<?php           
  $rounds = $pdo->query('SELECT * FROM `rounds` WHERE `status`="Wait for players"');
  while ($row = $rounds->fetch()){
    $players = 0;
    $user_on = false;
    $round_user = $pdo->query('SELECT * FROM `round_user` WHERE `round_id`='.$row[0].'');
    while ($row2 = $round_user->fetch()){
      if ($_COOKIE['user'] == $row2[1]) {
        $user_on = true;
      }
      $players++;
    }
    if ($user_on == false) {
      echo '<tr>
              <th scope="row">'.$row[0].'</th>
              <td>'.$players.'/'.$row[5].'</td>
              <td>'.$row[4].'</td>
              <td><a class="btn btn-primary" href="">Подключится</a></td>
            </tr>';
    }
  }
?>
  </tbody>
</table>

<?php
  include 'footer.php';
?>

</body>
</html>