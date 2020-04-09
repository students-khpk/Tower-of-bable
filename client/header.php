<style>
  .header {
    background: #8d705a;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    border-radius: 0px 0px 10px 10px;
  }
  .navbar-light .navbar-brand {
    color: rgba(255, 255, 255, 1);
  }
  .navbar-light .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 1);
  }
</style>

<header class="mb-5 header sticky-top">
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
      <a class="navbar-brand" href="../profile.php"><?=$_COOKIE['user']?>
        <img src="../img/profile-icon-white.png" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
      <a class="navbar-brand" href="auth/logout.php">Выход</a>
    <?php endif; ?>
  </div>
  </div>
</nav>
</header>