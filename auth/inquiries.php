<?php
	require_once 'connect_db.php';
	$id_user = $_COOKIE['user'];
    $query_user = $pdo->query('SELECT * FROM `users` WHERE `id` = '.$id_user.'');
    // var_dump($query_user);
    if (!$query_user) {
    	echo "Вы не прошли авторизацию!";
    }
    while ($user = $query_user->fetch()) {
    	$nickname = $user['nickname'];
    }
?>