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


<h1 style="text-align: center;">Создать игру</h1>

<form action="create_game_second.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Количество игроков</label>
    <input name="max_players" class="form-control" value="25">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Количество этажей для победы</label>
    <input name="score" class="form-control" value="10000">
  </div>
  <button type="submit" class="btn btn-primary">Создать игру</button>
</form>

<?php
  include 'footer.php';
?>

</body>
</html>