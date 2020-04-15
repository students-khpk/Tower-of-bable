<?php
require_once 'auth/connect_db.php';
$max_players = $_POST['max_players'];
$article = $_POST['score'];

$stmt = $pdo->query('INSERT INTO `rounds`(
                                              `status`,
                                              `date_start`,
                                              `date_end`,
                                              `score`,
                                              `max_players`,
                                              `owner`
                                              )
                                              VALUES (
                                               "Wait for players",
                                               "'.date("d F Y ").'",
                                               "'.date("d F Y ").'",
                                               "'.$article.'",
                                               "'.$max_players.'",
                                               "'.$_COOKIE['user'].'"
                                              )');
$game = $pdo->lastInsertId();
$stmt2 = $pdo->query('INSERT INTO `round_user`(
                                              `user_id`,
                                              `round_id`,
                                              `blocks`,
                                              `roof`,
                                              `floor`,
                                              `floor_fix`
                                              )
                                              VALUES (
                                               "'.$_COOKIE['user'].'",
                                               "'.$game.'",
                                               "100",
                                               "0",
                                               "4",
                                               "1"
                                              )');
header('Location: /game.php?game='.$game.'&player='.$_COOKIE['user'].'');