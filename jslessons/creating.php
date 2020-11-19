<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Изменение документа</title>
    <style>
      .alert {
        transition: all .5s ease;
      }
      
      .alert-text {
        opacity: 0;
        transition: all .5s ease;
      }
      
      .error {
        width: 0%;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <h1>Изменение документа</h1>
    <h2 class="adding-header">Добавление элемента на страницу</h2>
    <table border="1" class="user-table">
      <tr>
        <th>ID</th>
        <th>email</th>
        <th>ФИО</th>
        <th>Логин</th>
      </tr>
    </table>
    <div class="alert alert-danger error" role="alert">
      <span class="alert-text">Ошибочка</span>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="creating.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>