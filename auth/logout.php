<?php
	setcookie('user', $user[0]['nickname'], time() - 3600, "/");
	header("Location: /");
?>