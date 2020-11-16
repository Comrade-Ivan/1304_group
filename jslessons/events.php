<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>События</title>
    <style>
      td, th {
        padding: 15px;
        text-align: center;
        vertical-align: center;
      }
    </style>
  </head>
  <body>
    <h1>События</h1>
    <h2>Способы повесить события</h2>
    <table border="1">
      <tr>
        <th>Через атрибут</th>
        <th>Через свойство</th>
        <th>Через метод addEventListener</th>
      </tr>
      <tr>
        <td><button class="btn btn-primary" onclick="alert('РАЗ РЕКЛАМА')">Атрибут</button></td>
        <td>
          <button class="btn btn-primary property-button">Свойство(функция-обертка)</button>
          <button class="btn btn-primary mt-2 property-button2">Свойство(тело функции)</button>
          <button class="btn btn-primary mt-2 property-button3">Свойство(очищаем)</button>
        </td>
        <td>
          <button class="btn btn-primary event-listener-button">addEventListener</button>
          <button class="btn btn-primary remove-event-listener-button">removeEventListener</button>
        </td>
      </tr>
    </table>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="events.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>