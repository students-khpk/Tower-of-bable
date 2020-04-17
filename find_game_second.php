<?php
require_once 'auth/connect_db.php';
$game = $_GET['game'];

$stmt = $pdo->query('INSERT INTO `round_user`(
                                              `user_id`,
                                              `round_id`,
                                              `bricks`,
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
echo $pdo->lastInsertId();
//header('Location: /game.php?game='.$game.'&player='.$_COOKIE['user'].'');