<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мой профиль</title>
    <?php
        include 'head.php';
        require_once 'auth/inquiries.php';
    ?>
</head>
<body>

<?php
    include 'header.php';
    // if ($_COOKIE['user'] == ''):
    // header("Location: auth.php");
    // else:
?>
<div class="mt-5 container">
  <div class="d-flex justify-content-around bd-highlight mb-3">

    <div class="d-flex flex-column">
      <div class="profile mb-4">
        <h1 href="#">
          <img src="img/profile-icon.png" width="180" height="180" class="d-inline-block align-top" alt="">
          <?=$nickname?>
        </h1>
        <p>Ваш статус</p>
      </div>
        <h4 class="text-center">Ваши последние матчи</h4>
        <table class="table table-sm table-borderless">
          <thead>
            <tr>
              <th scope="col">Дата</th>
              <th scope="col">Кол-во этажей</th>
              <th scope="col">Место</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>06.02.2020</td>
              <td>150</td>
              <td>#1</td>
            </tr>
            <tr>
              <td>13.03.2020</td>
              <td>120</td>
              <td>#3</td>
            </tr>
            <tr>
              <td>19.03.2020</td>
              <td>145</td>
              <td>#2</td>
            </tr>
          </tbody>
        </table>
    </div>

        <div class="d-flex flex-column">
          <h4 class="text-center mb-3">Статистика</h4>
          <p><img src="img/statistics-icon.png" width="15" alt=""> Сыграно матчей: ---</p>
          <p><img src="img/statistics-icon.png" width="15" alt=""> Выиграно матчей: ---</p>
          <p><img src="img/statistics-icon.png" width="15" alt=""> Этажей уничтожено: ---</p>
          <p><img src="img/statistics-icon.png" width="15" alt=""> Этажей построено: ---</p>
          <p><img src="img/statistics-icon.png" width="15" alt=""> Укреплений создано: ---</p>
        </div>
  </div>
</div>

<?php
    // endif;
    include 'footer.php'; 
?>

</body>
</html>