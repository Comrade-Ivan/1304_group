<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>CSS, основы CSS</title>
  <link rel="stylesheet" href="style.css"> <!--2. Подключаем файл CSS -->
  <style> /*1. С помощью тэга <style>*/
    body {
      background-color: Moccasin;
    }
    h1 { /*Селектор тэгов*/
      text-align: center;
      color: firebrick;
    }
    /* Комментарий */
    #about { /*Селектор по ID(#). Не может быть двух элементов с одинаковыми ID*/
      text-align: justify;
    }
    .about-small { /*Селектор по классу(.). В названиях классов часто используется Kebab-case. Элементов с одинковыми классами может быть несколько */
      font-size: 10px;
    }
    .red {
      color: red;
    }
    .yellow {
      color: yellow;
    }
    /*Ключевое слово !important*/
    .lowercase { /*Более конкретные селекторы имеют приоритет над более общими*/
      text-transform: lowercase;
    }
    p { 
      text-transform: uppercase !important; /*Увеличиваем приоритетность*/
    }
    .magni {
      font-size: 30px;
      color: red;
    }
    .about-header {
      text-align: center;
    }
    
    .context p { /*Контекстный селектор - найти все p внутри элемента с классом context, вне зависимости от уровня вложенности*/
      color: blue;
    }
    
    .children>p { /*Дочерний селектор, находит только детей и не трогает потомков*/
      color: cyan;
    }
    
    .info-big, .info-small { /*Множественный селектор, позволяет объединять селекторы*/
      color: brown;
    }

    .siblings p+p { /*Соседний селектор - покрасит соседа p (который тоже является p) внутри элемента с классом siblings*/
      color: orange;
    }
    p[title="Красная"] { /*Селектор атрибутов, красит только те p, у которых атрибут title РАВЕН "Красная"*/
      color: red;
    }
    a[href^="https"] { /* ^ - начинается с*/
      color: darkorange;
    }
    p[class$="-2"] { /*$ - заканчивается на*/
      color: green;  
    }
    input[name*="password"] { /* * - содержится*/
      color: pink;
    }
  </style>
</head>
<body>
  <h1>Портфолио</h1>
  <h2>Петрухин И.Д.</h2>
  <h2>Моя первая работа</h2>
  <h3 style="text-align: right;">А может и не первая</h3> <!--3. Использование атрибута style-->
  <h2 class="about-header">Обо мне</h2>
  <p id="about" class="lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, minima, voluptas, placeat commodi in ex numquam eius necessitatibus debitis mollitia eum tempore at vitae fugit quia! Illum, nam, magnam eos corporis quo tempore aut ipsum aspernatur sunt reiciendis aliquam modi perspiciatis vel earum itaque veritatis sint consectetur minima consequatur repellendus ad a ipsam blanditiis non suscipit est eius deleniti porro praesentium eveniet!</p>
  <p class="about-small aboutSmall about_small red lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate commodi blanditiis magni sed at ab rerum consequuntur tempora placeat laboriosam. Dolore, doloribus, blanditiis adipisci itaque dolorum consequuntur illum harum repudiandae?</p>  
  <p class="about-small yellow lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate commodi blanditiis <span class="magni">magni</span> sed at ab rerum consequuntur tempora placeat laboriosam. Dolore, doloribus, blanditiis adipisci itaque dolorum consequuntur illum harum repudiandae?</p>
  <div class="selectors">
    <div class="context">
      <p>Материал 1</p>
      <p>Материал 2</p>
      <p>Материал 3</p>
      <div class="context-inner">
        <p>Материал 3.1</p>
        <p>Материал 3.2</p>
        <p>Материал 3.3</p>
      </div>
    </div>
    <div class="children">
      <p>Материал 1</p>
      <p>Материал 2</p>
      <p>Материал 3</p>
      <div class="children-inner">
        <p>Нас не красить</p>
        <p>Нас не красить</p>
        <p>Нас не красить</p>
      </div>
    </div>
    <div class="multi">
      <p class="info-big">Информация</p>
      <p class="info-small">Информация</p>
      <p class="info-big">Информация</p>
      <p class="info-small">Информация</p>
    </div>
    <div class="siblings">
      <p>Меня не красить</p>
      <p>Меня покрасить</p>
      <p>Меня покрасить</p>
    </div>
    <div class="attr">
      <p title="Зеленая">Первая</p>
      <p title="Красная">Вторая</p>
      <p title="Синяя">Третья</p>
      <ul class="attr-links">
        <li><a href="http://edu.ivandp.su/1304">ИД</a></li>
        <li><a href="https://yandex.ru">Яндекс</a></li>
        <li><a href="https://vk.com">ВК</a></li>
      </ul>
      <div class="ending">
        <p class="col-2">col-2</p>
        <p class="col-4">col-4</p>
        <p class="col-2">col-2</p>
      </div>
      <form action="">
        <input type="text" name="user-name" value="anonym">
        <input type="text" name="user-password" value="12345">
        <input type="text" name="password-check" value="12345">
      </form>
    </div>
  </div>
</body>
</html>