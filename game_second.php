<?php
require_once 'auth/connect_db.php';
$game = $_GET['game'];
$player = $_GET['player'];
$actor = $_GET['actor'];

$stmt2 = $pdo->query('INSERT INTO `round_user`(
                                              `user_id`,
                                              `round_id`,
                                              `blocks`,
                                              `roof`,
                                              `floor`,
                                              `floor_fix`,
                                              `shells`
                                              )
                                              VALUES (
                                               "'.$_COOKIE['user'].'",
                                               "'.$game.'",
                                               "100",
                                               "0",
                                               "4",
                                               "1",
                                               "1"
                                              )');
header('Location: /game.php?game='.$game.'&player='.$_COOKIE['user'].'');