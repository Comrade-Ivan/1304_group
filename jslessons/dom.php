<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Я синий</h1> <!--Используйте селектор тэгов-->
    <h2 id="red">Я красный и слева</h2> <!--Используйте селектор по ID-->
    <h2 id="yellow">Я желтый и по центру</h2>
    <h2 id="green">Я зеленый и справа</h2>
    <ul>
      <li class="blue-list-item">Мы синие элементы</li> <!--Используйте селектор по классам-->
      <li class="red-list-item">А мы красные</li>
      <li class="blue-list-item">Мы синие элементы</li>
      <li class="red-list-item">А мы красные</li>
    </ul>
    <h3>Контекстный селектор</h3>
    <ol class="orange-list">
      <li>Мы должны быть оранжевые</li>
      <li>Но у нас нет ни класса не ID</li>
      <li>Найти нас придется по другому</li>
      <li>Понадобится контекстный селектор</li>
      <li>И не покрасьте второй &lt;ol&gt;</li>
    </ol>
    <h3>Множественный селектор</h3>
    <ol class="darkred-list">
      <li class="darkred-list-item-1">Мы все хотим быть темно-красными</li>
      <li class="darkred-list-item-2">Но у нас разные классы</li>
      <li class="darkred-list-item-1">Не находя родительский &lt;ol&gt; сделайте нас такими</li>
      <li class="darkred-list-item-2">Воспользуйтесь множественным селектором</li>
    </ol>
    <h3>Соседний селектор</h3>
    <div class="siblings">
      <p>Найдите нас внутри родительского &lt;div&gt;(используя контекстный селектор), и, используя соседний селектор,</p>
      <p>Покрасьте только меня в красный (объедините два селектора)</p>
    </div>
    <h3>Дочерний селектор</h3>
    <div class="children">
      <p>Нас надо покрасить в синий</p>
      <p>Но внутри есть еще &lt;div&gt; и в нем тоже есть &lt;p&gt;</p>
      <div class="descendants">
        <p>Нас красить не надо</p>
        <p>Нас красить не надо</p>
        <p>Нас красить не надо</p>
      </div>
      <p>А меня снова надо, воспользуйтесь дочерним селектором</p>
    </div>
    <h3>Селектор атрибутов</h3>
    <div class="attr-selector">
      <!-- Теперь самое сложное, здесь необходимо использовать селекторы атрибутов -->
      <!-- У всех элементов, у который атрибут class НАЧИНАЕТСЯ С "col", переместите текст вправо -->
      <!-- Элемент, у которого атрибут title РАВЕН "Красный", должен стать красным-->
      <!-- Ссылки, у которых атрибут href ОКАНЧИВАЕТСЯ НА ".ru" должны стать оранжевыми -->
      <!-- Текст внутри <input>, у которых атрибут name СОДЕРЖИТ "user" должен стать темно-синими -->
      <div class="col-1">Какой-то текст</div>
      <div class="col-2" title="Красный">Еще немного какого-то текста, но красного</div>
      <div class="col-3">Описание, что надо сделать, в комментариях выше</div>
      <ul class="links">
        <a href="https://yandex.ru">Яндекс</a>
        <a href="https://fb.com">Фейсбук</a>
        <a href="https://ok.ru">Одноклассники</a>
        <a href="https://vk.com">Вконтакте</a>
      </ul>
      <div class="inputs">
        <input type="text" value="Василий" name="user-name">
        <input type="text" value="Петров" name="second-user-name">
        <input type="text" value="34p$1dd" name="token">
      </div> 
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="dom.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>