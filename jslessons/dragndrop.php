<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Работа с элементами</title>
    <style>
      .fruit {
        height: 150px;
        cursor: pointer;
      }
      .cart {
        border: 5px solid black;
        height: 75vh;
      }
    </style>
  </head>
  <body class="p-3">
    <div class="row">
      <div class="col-6 position-static">
        <h2>Продукты</h2>
        <div class="fruits">
          <img src="../../fruits/yammibanana.png" alt="" class="banana fruit" cost="100">
          <img src="https://icons.veryicon.com/png/Food%20%26%20Drinks/Food%202/grapes.png" alt="" cost="150" class="fruit">
        </div>
      </div>
      <div class="col-6 position-static">
        <h2>Корзина</h2>
        <span>Итоговая сумма:</span><input type="text" class="cart-result ml-2 text-right" value="0" disabled><span> руб.</span>
        <div class="cart mt-2"></div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="dragndrop.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>