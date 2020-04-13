<?php
	setcookie('user', $user[0]['id'], time() - 3600, "/");
	header("Location: /");
?>