<?php
require_once 'auth/connect_db.php';
$game = $_GET['game'];
$player = $_GET['player'];
$actor = $_GET['actor'];

$user_data = $pdo->query('SELECT * FROM `round_user` WHERE `user_id`='.$player.' AND `round_id` = '.$game.'');
$floor = 0;
$floor_fix = 0;
$bricks = 0;
$shells = 0;
$roof = 0;
while ($row = $user_data->fetch()){
  $floor = $row[5];
  $floor_fix = $row[6];
  $bricks = $row[3];
  $shells = $row[7];
  $roof = $row[4];
}

if ($actor == "build") {
  $floor = $floor + 1;
  $bricks = $bricks - 100;
  if ($bricks >= 0) {
    $stmt = $pdo->query('UPDATE `round_user` SET `floor` = '.$floor.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
    $stmt = $pdo->query('UPDATE `round_user` SET `bricks` = '.$bricks.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
  }
} else if($actor == "upgrate") {
  if ($floor >= $floor_fix) {
    $floor_fix = $floor_fix + 1;
    $bricks = $bricks - 200;
    if ($bricks >= 0) {
      $stmt = $pdo->query('UPDATE `round_user` SET `floor_fix` = '.$floor_fix.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
      $stmt = $pdo->query('UPDATE `round_user` SET `bricks` = '.$bricks.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
    }
  }
} else if($actor == "buy") {
  $shells = $shells + 1;
  $bricks = $bricks - 500;
  if ($bricks >= 0) {
    $stmt = $pdo->query('UPDATE `round_user` SET `shells` = '.$shells.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
    $stmt = $pdo->query('UPDATE `round_user` SET `bricks` = '.$bricks.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
  }
} else if($actor == "floor_1") {
  $roof = 1;
  $stmt = $pdo->query('UPDATE `round_user` SET `roof` = '.$roof.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
} else if($actor == "floor_0") {
  $roof = 0;
  $stmt = $pdo->query('UPDATE `round_user` SET `roof` = '.$roof.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
} else if($actor == "attack") {
  $floor = $floor - 1;

  $id = $_COOKIE['user'];
  $user_cookie = $pdo->query('SELECT * FROM `round_user` WHERE `user_id`='.$id.' AND `round_id` = '.$game.'');
  $shells_cookie = 0;
  while ($row_user2_cookie = $user_cookie->fetch()){
    $shells_cookie = $row_user2_cookie[7] - 1;
  }

  if ($shells_cookie >= 0) {
    if ($roof == 1) {
      if ($floor >= $floor_fix) {
        $stmt = $pdo->query('UPDATE `round_user` SET `floor` = '.$floor.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
        $stmt = $pdo->query('UPDATE `round_user` SET `shells` = '.$shells_cookie.' WHERE `round_user`.`user_id` = '.$id.' AND `round_user`.`round_id` = '.$game.' ');
      }
    }
  }
}


header('Location: /game.php?game='.$game.'&player='.$player.'');