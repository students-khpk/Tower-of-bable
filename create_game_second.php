<?php
require_once 'auth/connect_db.php';
$name = $_POST['name'];
$max_players = $_POST['max_players'];
$article = $_POST['score'];

$stmt = $pdo->query('INSERT INTO `rounds`(
                                              `status`,
                                              `date_start`,
                                              `date_end`,
                                              `score`,
                                              `max_players`,
                                              `owner`,
                                              `name`
                                              )
                                              VALUES (
                                               "Wait for players",
                                               "'.date("d F Y ").'",
                                               "'.date("d F Y ").'",
                                               "'.$article.'",
                                               "'.$max_players.'",
                                               "'.$_COOKIE['user'].'",
                                               "'.$name.'"
                                              )');
$game = $pdo->lastInsertId();
$stmt2 = $pdo->query('INSERT INTO `round_user`(
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
header('Location: /game.php?game='.$game.'&player='.$_COOKIE['user'].'');