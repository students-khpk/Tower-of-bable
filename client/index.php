<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Главная</title>
	<?php
		include 'head.php';
	?>
</head>
<body>

<?php
	include 'header.php';
?>

<div class="container mb-5">
    <h1 class="kak">Как играть?</h1>
  <div class="d-flex justify-content-around">
  <div class="d-flex flex-column">
    <img class="towers" src="img/home-content/Кирпичные башни.png" alt="Кирпичные башни">

        <h1 class="towers_h1">Tower of bable</h1>

        <h3 class="accounts_h3">Впервые у нас? <a href="#" class="accounts_a">создайте аккаунт</a> или же <a class="accounts_a" href="#">войдите в существующий</a></h3>
        <div class="social">
          <div class="facebook"><a href="#"><img src="img/social-icon/facebook.png" height="50px" width="54px" alt="Фэйсбук"></a></div>
          <div class="vk" ><a href="#"><img src="img/social-icon/vk.png" height="55px" width="60px" alt="Вк"></a></div>
          <div class="google"><a href="#"><img src="img/social-icon/google.png" height="55px" width="60px" alt="Гугл"></a></div>
       </div>

  </div>
        <div class="d-flex flex-column info">
          <div class="col1">
            <h3>Разгадывайте капчи</h3>
            <img class="captha" src="img/home-content/Капча.png" height="140px" width="200px" alt="капча">
          </div>
          <div class="col1">
            <h3>Создавайте снаряды</h3>
            <img class="iadro" src="img/home-content/Ядро.png" height="100px" width="100px" alt="ядро">
          </div>
        </div>
        <div class="d-flex flex-column info">
          <div class="col1">
            <h3>Стройтесь ввысь</h3>
            <img class="stoites_vvis" src="img/home-content/Башня с стрелкой.png" height="140px" width="110px" alt="Башня со стрелкой">
          </div>
          <div class="col1">
            <h3>Атакуйте строения противников</h3>
            <img class="atack_towers" src="img/home-content/атакуйте строения.png" height="140px" width="220px" alt="Атакуйте строения">
          </div>
        </div>
        <div class="d-flex flex-column info">
          <div class="col1">
            <h3>Укрепляйте строения</h3>
            <img class="Tower_shield" src="img/home-content/Башня укрепление.png" height="140px" width="70px" alt="Башня укрепление">
          </div>
          <div class="col1">
            <h3>Не забывайте общаться:)</h3>
            <img src="img/home-content/Сообщения.png" height="130px" width="140px" alt="Сообщения">
          </div>
        </div>
</div>
</div>
<?php
	include 'footer.php';
?>
</body>
</html>