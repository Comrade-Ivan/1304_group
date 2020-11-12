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
      .text {
        text-transform: uppercase;
        color: cyan;
      }
      .money img {
        width: 200px;
      }
    </style>
  </head>
  <body class="p-3">
    <h1>Работа с элементами</h1>
    <div class="styles">
      <h2>Изменение стилей</h2>
      <p class="text">Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="article">
      <h2>Изменение внутреннего содержимого</h2>
      <p class="article-text">Lorem ipsum dolor sit amet.</p>
      <div class="comments"></div>
    </div>
    <div class="calculator">
      <h2>Изменение атрибутов.</h2>
      <h4>Атрибуты как свойства. На примере калькулятора</h4>
      <input type="text" class="first-argument" value="0">
      <span>+</span>
      <input type="text" class="second-argument" value="0">
      <span>=</span>
      <input type="text" class="result-input" disabled>
    </div>
    <div class="money">
      <h4>Методы работы с атрибутами</h4>
      <img src="https://images.ru.prom.st/383999910_w640_h640_banknota-100-rublej.jpg" alt="" cost="100">
      <span>+</span>
      <img src="../../905/coffee/img/500rub.jpg" alt="" cost="500">
      <span>=</span>
      <input type="text" class="result-money-input" disabled>
    </div>
    <div class="classes">
      <h2>Работа с классами</h2>
      <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, consectetur, aliquid ipsa delectus saepe odit facere aspernatur ducimus voluptates vitae ipsum quisquam dolorem pariatur possimus placeat mollitia beatae. Ipsa, non, quisquam, labore, sunt nisi sed velit dolorum deleniti cum omnis ducimus cupiditate odio expedita natus explicabo accusantium fugiat obcaecati. Inventore, maxime, culpa, eum, praesentium libero ipsum ratione mollitia odio eligendi blanditiis animi modi repellat exercitationem officiis quod obcaecati aperiam natus! Facilis, qui, magnam, sint quasi unde laboriosam rem nihil tenetur explicabo soluta velit maxime eligendi veniam placeat dolorem porro odit molestias facere quae dolorum minima beatae quam eius aspernatur ipsa.</p>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="elements.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>