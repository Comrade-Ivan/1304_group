<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>JQuery</title>
    <style>
      .box, .box-2, .box-3 {
        width: 200px;
        height: 200px;
        display: inline-block;
        border: 2px solid black;
        border-radius: 10%;
      }
      
      .box-3 {
       background-color: rgb(100, 100, 255);
       position: relative;
      }
    </style>
  </head>
  <body class="p-3">
    <h1>JQuery</h1>
    <h2 class="search-header">Поиск элементов</h2>
    <input type="text" class="value-input" placeholder="Введите что-нибудь">
    <hr>
    <div class="box"></div>
    <hr>
    <button class="btn btn-primary btn-block my-3 my-button">Кнопка</button>
    <div class="box-2"></div>
    <hr>
    <div style="min-height: 300px">
      <div class="box-3"></div>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script src="jquery.js"></script>
  </body>
</html>