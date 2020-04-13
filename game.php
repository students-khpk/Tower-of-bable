<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мои игры</title>
	<?php
		include 'head.php';
	?>
</head>
<body>

<?php
	include 'header.php';
?>

<h1 style="text-align: center;">Мои игры</h1>

<?php
	include 'footer.php';
?>


</body>

<script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
<script>

    var socket = io();
	
	socket.on('getCookie',function (data) {
		console.log(data);
	});
	
</script>

</html>