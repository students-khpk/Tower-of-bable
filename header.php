<?php
  require_once 'auth/inquiries.php';
?>

<header class="header sticky-top"><!-- mb-5 -->
<nav class="navbar navbar-expand-lg navbar-light bd-highlight">
  <div class="container">
   <a class="navbar-brand" href="/">
    <img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Tower of babel
  </a>
  <button class="navbar-toggler" type="button" data-target="#my-nav" aria-expanded="false" aria-label="Toggle navigation" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
  </button>
  <div id="my-nav" class="collapse navbar-collapse">
    <?php
      if ($_COOKIE['user'] == ''):
    ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/"><img src="../img/nav-icon/home.png" width="12" class="d-inline-block" alt="">
          Главная <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <a class="navbar-brand" href="../auth/auth.php">Вход / Регистрация</a>
    <?php else: ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/"><img src="../img/nav-icon/home.png" width="12" class="d-inline-block" alt="">
          Главная <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../rating.php"><img src="../img/nav-icon/rating.png" width="14" class="d-inline-block" alt="">
          Рейтинг</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../mygame.php"><img src="../img/nav-icon/mygame.png" width="14" class="d-inline-block" alt="">
          Мои игры</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../achievement.php"><img src="../img/nav-icon/achievement.png" width="10" class="d-inline-block" alt="">
          Мои достижения</a>
        </li>
      </ul>
     <!--  <a class="navbar-brand" href="../profile.php"><?=$_COOKIE['user']?>
        <img src="../img/profile-icon-white.png" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
      <a class="navbar-brand" href="auth/logout.php">Выход</a> -->

      <ul class="navbar-nav">
         <li class="nav-item dropdown">
          <a class="navbar-brand dropdown-toggle" href="../profile.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?=$nickname.' '?><img src="../img/profile-icon-white.png" width="25" height="25" alt="">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="auth/logout.php">Выход</a>
          </div>
        </li>
      </ul>

    <?php endif; ?>
  </div>
  </div>
</nav>
</header>