<?php
require_once 'auth/connect_db.php';
$game = $_GET['game'];
$player = $_GET['player'];
$actor = $_GET['actor'];

$user_data = $pdo->query('SELECT * FROM `round_user` WHERE `user_id`='.$player.'');
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
  $stmt = $pdo->query('UPDATE `round_user` SET `floor` = '.$floor.' WHERE `round_user`.`user_id` = '.$player.' AND `round_user`.`round_id` = '.$game.' ');
} else {

}

header('Location: /game.php?game='.$game.'&player='.$_COOKIE['user'].'');