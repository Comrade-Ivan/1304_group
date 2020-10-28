<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Псевдоклассы, псевдоэлементы, переходы</title>
  <style>
    .box {
      display: inline-block;
      width: 200px;
      height: 200px;
      background-color: rgb(50, 50, 255);
    }
    .two {
      margin-left: 15px;
      box-shadow: 5px 5px 15px 5px #000000;
    }
    .one:hover { /*Изменения при наведении*/
      background-color: rgb(255, 50, 50);
    }
    .two:active { /*Изменения при нажатии*/
      box-shadow: none;
    }
    a {
      text-decoration: none;
    }
    .link:visited { /*Посещенная ссылка*/
      color: red;
    }
    .input {
      border: 2px solid grey;
    }
    .input:focus { /*Для инпутов "в фокусе"*/
      border: 2px solid red;
      outline: none;
    }
    .pseudo-ul li {
      background-color: pink;
    }
    .pseudo-ul li:first-child { /*Первый ребенок*/
      background-color: lime;
    }
    .pseudo-ul li:last-child { /*Последний ребенок*/
      background-color: Salmon;
    }
    .pseudo-ul-2 li:nth-child(4) { /*n-ный ребенок*/
      background-color: Tomato;
    }
    .pseudo-ul-3 li:nth-child(odd) { /*odd - нечетный even - четный*/
      background-color: RoyalBlue;
    }
    .pseudo-ul-3 li:nth-child(even) { /*odd - нечетный even - четный*/
      background-color: Chocolate;
    }
    .pseudo-ul-4 li:nth-child(3n) { /*Каждый третий элемент*/
      background-color: Indigo;
    }
    .pseudo-ul-5 li:nth-child(3n+1) { /*Каждый третий элемент со смещением на 1*/
      background-color: SandyBrown;
    }
    /*Псевдоэлементы*/
    .taxi-logo {
      display: inline-block;
      width: 230px;
      height: calc(230px / 2); /*Высчитываем размер*/
      background-color: #FCDB00;
      border-radius: 25px 25px 0 0;
      position: relative;
    }
    .taxi-logo::before {
      content: ""; /*Обязательное св-во псевдоэлементов*/
      display: inline-block;
      background-color: #F3EFE6;
      width: calc(230px / 2);
      height: calc(230px / 2);
      border-radius: 0 0 0 25px;
      position: absolute;
      top: 100%;
      
      
    }
    .taxi-logo::after {
      content: "";
      display: inline-block;
      background-color: #323029;
      width: calc(230px / 2);
      height: calc(230px / 2);
      border-radius: 0 0 25px 0;
      position:absolute;
      top: 100%;
      left: 50%;
      transition: left 0.5s;
    }
    
    .taxi-logo:hover::after{
      left: 65%;
    }
    .three {
      /* transition: all 1s linear 3s; */
      transition: width 2s ease-in-out, background-color 1s linear 2s;
    }
    
    .three:hover {
      width: 300px;
      background-color: orange;
    }
    
    .text-container {
      width: 100px;
      overflow: hidden;
      border: 2px solid blue;
    }
    .text-running {
      white-space: nowrap;
      display: inline-block;
      position: relative;
      left: -200%;
      transition: left 3s;
    }
    .text-container:hover .text-running {
      left: 200%;
    }
  </style>
</head>
<body>
  <div class="box one"></div>
  <div class="box two"></div>
  <div style="margin-top: 20px">
    <a class="link" href="https://yandex.ru">Ссылочка</a>
    <input class="input" type="text" placeholder="Введите имя">
  </div>
  <h3>:first-child :last-child</h3>
  <ul class="pseudo-ul">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
  </ul>
  <h3>:nth-child</h3>
  <ul class="pseudo-ul-2">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
  </ul>  
  <ul class="pseudo-ul-3">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
  </ul>
  <ul class="pseudo-ul-4">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
  </ul>
  <ul class="pseudo-ul-5">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
    <li>Семь</li>
  </ul>
  <h2>Псевдоэлементы</h2>
  <p>Текст до <i class="taxi-logo"></i> Текст после</p>
  <p>Текст под элементом</p>
  <h2 style="margin-top: 100px">Транзиции</h2>
  <div class="box three"></div>
  <h2>Св-во Overflow</h2>
  <div class="text-container">
    <p class="text-running">Lorem ipsum dolor sit amet.</p>
  </div>
</body>
</html>