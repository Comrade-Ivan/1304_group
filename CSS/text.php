<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Работа с текстом. Шрифты. Спецсимволы</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Roboto&display=swap'); /*Добавляем шрифт из google fonts*/
    /*
      font-family: 'Lobster', cursive;
      font-family: 'Roboto', sans-serif;
    */
    
    body {
      font-family: Arial; /*Шрифт*/
      font-size: 10pt; /*Размер шрифта*/
    }
    
    .title {
      text-align: center; /*right left justify - выравнивание*/ 
      text-transform: uppercase; /*lowercase - нижний регистр*/
      text-decoration: underline; /*overline line-through - подчеркивание*/
      text-shadow: 8px 10px 0px rgba(184, 186, 255, 0.5); /*Тень для текста - лучше использовать генераторы*/
      font-family: Tahoma;
      font-size: 14pt;
    }
    .text-one {
      text-align: justify;
    }
    .bold, .italic {
      font-size: 25pt;
    }
    .bold {
      font-weight: bold; /*Жирность*/
    }
    .italic {
      font-style: italic; /*Наклон*/
    }
    .red, .green, .yellow {
      font-size: 30pt;
      font-weight: bold;
      font-family: 'Lobster', cursive;
    }
    .red {
      color: rgb(255, 50, 50); /*rgb(0-255, 0-255, 0-255) red green blue*/
    }
    .yellow {
      color: #FFFF00; /*HEX-код*/
    }
    .green {
      color: hsl(107, 95%, 70%); /*Hue Saturation Lightness*/
    }
    .title-transparent {
      color: rgba(50, 50, 255, 0.5); /*a - альфа-канал - прозрачность*/
    }
    .emoji {
      font-size: 100px;
    }
  </style>
</head>
<body>
  <h1 class="title">Работа с текстом</h1> <!--<b> <i>-->
  <p class="text-one">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, minima, ab ipsa doloremque quaerat recusandae temporibus omnis molestias harum vel dicta et molestiae magni aliquid autem sequi voluptatem iste nulla neque possimus natus perferendis error assumenda laborum eum! Quisquam, commodi, placeat ullam maxime consequatur nemo velit a sint natus veniam. Dolorum, explicabo, optio, veritatis quis aspernatur iste quas quidem maiores iusto ratione laborum unde veniam fugit alias accusantium ea harum assumenda possimus vel ad eligendi non a. Delectus, dignissimos, quam, ipsa, est eius modi incidunt <span class="bold"> bold </span>laudantium nostrum quo alias culpa voluptates voluptatibus dolorem recusandae in voluptatem ipsum architecto cum. Omnis, necessitatibus, debitis, laudantium quam libero impedit quod autem pariatur doloremque ratione nobis voluptatum tempora eaque error ex quaerat esse at itaque nulla nihil <span class="italic">italic</span> voluptatibus a totam. Doloribus, facilis, quo sapiente dolore natus eligendi numquam quibusdam et quia nam aliquam similique corporis neque distinctio impedit laborum pariatur repellendus excepturi perspiciatis voluptatum architecto ipsum amet adipisci earum omnis error blanditiis voluptates quidem quisquam veniam vero magni/+ praesentium molestiae unde fuga perferendis minus ratione animi maiores dolorem. Soluta, nostrum maiores harum beatae dignissimos libero reprehenderit cum odio consequuntur? Vero, dolorem, et, quae expedita numquam reprehenderit rem recusandae odit voluptatibus aperiam nisi cupiditate earum itaque modi dicta cum libero pariatur sit nulla hic. Dicta, sequi nesciunt ab omnis eos blanditiis eveniet nobis asperiores et perspiciatis. Sequi nobis possimus temporibus ex id. Mollitia, nobis, deleniti expedita sit aliquam quo sed excepturi doloremque nihil cum repellat maxime dignissimos possimus eligendi ad tenetur molestiae delectus facilis alias illo obcaecati neque consectetur nam voluptatum harum dolorem cupiditate illum iure esse ut. Dolor, ipsam tenetur porro deserunt necessitatibus reprehenderit eius nesciunt alias quod possimus delectus totam ipsa cumque ratione cum sint maxime officia magnam similique voluptas deleniti a rerum sapiente quasi libero fuga velit distinctio quae saepe dolore maiores.</p>
  <h2 class="title">Цвета</h2>
  <p>
    <span class="red">Красный</span>
    <span class="yellow">Желтый</span>
    <span class="green">Зеленый</span>
  </p>
  <h3 class="title-transparent">Прозрачный текст</h3>
  <h2 class="title">Спецсимволы и эмодзи</h2>
  <p>&copy; &#8381; &times;</p>
  <p class="emoji">&#128104;&#8205;&#127891; &#128105;&#8205;&#127891;</p>
  <h2>Иконки</h2>
  <!--1. Как <img>, 2. как <svg>, 3. Библиотеки иконок-->
  <p>
    <i class="fa fa-bath" aria-hidden="true" style="font-size: 100px; color: lightblue;"></i>
    <i class="fa fa-user-plus" aria-hidden="true"></i>
    <i class="fa fa-bug" aria-hidden="true"></i>
  </p>
  <script src="https://use.fontawesome.com/202de003e7.js"></script>  
</body>
</html>