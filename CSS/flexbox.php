<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Flexbox</title>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <style>
/*     * { * - каждый элемент на странице
  margin: 0; Нормализация
  padding: 0;
} */
    li {
      list-style-type: none;
    }
    a {
      text-decoration: none;
      color: white;
    }
    a:visited {
      color: white;
    }
    .flex-container {
      display: flex; /*Говорим родительскому элементу, что он flex-контейнер*/
      flex-direction: row; /*row - по умолчанию(в строку) column - колонка*/ 
      flex-wrap: wrap; /*Включаем перенос строк*/
      /* justify-content: space-around; */
    }
    .box, .box2, .box3 {
      background-color: #4285f4;
      height: 250px;
      border: 5px solid blue;
      box-sizing: border-box;
    }
    .box {
      width: 500px
    }
    .navigation {
      background-color: #4285f4;
      display: flex;
      padding: 10px;
      justify-content: space-evenly; /*Горизонтальное распеделение*/
    }
    .navigation li {
      margin: 0 10px;
    }
    
    .flex-container2 {
      display: flex;
      border: 4px solid red;
      height: 500px;
      align-items: center;
      justify-content: space-between;
    }
    .box2 {
      width: 250px;
    }
    .box2:nth-child(2) {
      align-self: flex-start;
    }    
    .box2:nth-child(3) {
      align-self: flex-end;
    }
    .flex-container3 {
      height: 600px;
      display: flex;
      flex-direction: column; 
      /*Если flex-direction: column; св-ва align-items и justify-content по своему назначению меняются местами */
      border: 4px solid red;
      align-items: center;
      justify-content: space-between;
    }
    .box3 {
      height: 100px;
      width: 100px;
    }
    .flex-container4 {
      display: flex;
    }
    .main, .aside {
      height: 250px;
      color: white;
      padding: 20px;
    }
    .main {
      background-color: #FBBC05;
      width: 300px;
      /* flex-grow: 1; */ /*Разрешаем элементу заполнять все свободное пространство*/
      flex-grow: 2;
      order: 2; /*Порядок элементов*/
    }
    .aside {
      background-color: #34A853;
      flex-basis: 250px; /*Лучше использовать вместо width внутри flex контэйнеров*/
      /* flex-grow: 1; */
      order: 1; /*.aside встанет раньше .main*/
    }
  </style>
</head>
<body>
  <div class="flex-container">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
  <nav>
    <ul class="navigation">
      <li><a href="#">Главная</a></li>
      <li><a href="#">О компании</a></li>
      <li><a href="#">Прайс-лист</a></li>
      <li><a href="#">Контакты</a></li>
    </ul>
  </nav>
  <div class="flex-container2">
    <div class="box2"></div>
    <div class="box2"></div>
    <div class="box2"></div>
    <div class="box2"></div>
  </div>
  <div class="flex-container3">
    <div class="box3"></div>
    <div class="box3"></div>
    <div class="box3"></div>
    <div class="box3"></div>
  </div>
  <div class="flex-container4">
    <div class="main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, blanditiis eligendi magnam. Quo, unde tenetur optio eaque debitis doloremque tempora porro laborum nihil molestias enim minima iure quod beatae repudiandae illum dolorum odit assumenda voluptas omnis in reprehenderit velit consectetur a deserunt totam quas quibusdam facilis aut mollitia perferendis ipsam!</div>
    <div class="aside">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, rerum, quam, voluptate rem perspiciatis pariatur quod earum ipsa asperiores molestiae nemo praesentium accusamus explicabo nobis delectus ex cum adipisci vel obcaecati deleniti unde incidunt labore beatae! Consectetur, saepe ipsa vel accusamus sed dolorum temporibus fuga fugit dicta aut provident incidunt.</div>
  </div>
</body>
</html>