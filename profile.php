<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css" >
</head>
<body>

<style>
  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
  }
</style>

<?php
include 'header.php';
?>

<div class="container">
  <div class="d-flex justify-content-around bd-highlight mb-3">

    <div class="d-flex flex-column">
      <div class="profile mb-4">
        <h1 href="#">
          <img src="img/profile-icon.png" width="180" height="180" class="d-inline-block align-top" alt="">
          Ваше имя
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
          <p><input type="checkbox" name="a" value="1"> Сыграно матчей:---</p>
          <p><input type="checkbox" name="b" value="2"> Выиграно матчей:---</p>
          <p><input type="checkbox" name="c" value="3"> Этажей уничтожено:---</p>
          <p><input type="checkbox" name="d" value="4"> Этажей построено:---</p>
          <p><input type="checkbox" name="e" value="5"> Укреплений создано:---</p>
        </div>
  </div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>