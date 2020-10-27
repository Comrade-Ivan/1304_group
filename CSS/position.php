<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Позиционирование</title>
  <style>
    body {
      font-family: Arial;
    }
    .header-image {
      height: 450px; /*Высота*/
      background-color: rgb(255, 100, 100); /*Цвет фона*/
      background-image: url("https://www.sesameworkshop.org/sites/default/files/imageservicecache/2020-04/1010x560_ntls-2.png/04a2dee689c531ec5433e56b78aeea9a.jpg"); /*Устанавливаем изображение заднего фона*/
      background-size: cover; /*300px 50% cover(полностью покрыть элемент) contain(поместить изображение в контейнер)*/
      /* background-repeat: no-repeat; */ /*Убираем повторы заднего фона*/
      background-position: 50% 15%;
      position: relative;
    }
    .header-title {
      padding: 25px;
      background-color: rgba(255, 255, 255, 0.8);
      display: inline-block;
      position: absolute; /*При значениях absolute и fixed элемент вытягивается из DOM-дерева (для остальных элементов его как будто нет)*/
      right: 0;
      top: 50%;
      transform: translateY(-50%); /*Cдвигает элемент на половину себя вверх*/
      box-shadow: -10px 12px 5px -5px rgba(0,0,0,0.75);
    }
    .header-title button {
      background-color: white;
      border: 2px solid black;
      padding: 5px;
      float: right; /*Двигаем кнопку вправо*/
      border-radius: 15px 5px 0 30px;
    }
    .navigation {
      list-style: none;
      padding-left: 0;
    }
    .navigation li {
      display: inline-block; /*block inline inline-block flex grid*/
      border-right: 2px solid blue;
      /*padding: 10px 15px 30px 0px;*/
      padding: 0 10px;
    }
    .last {
      border-right: none !important;
    }
    .link {
      text-decoration: none;
      text-transform: uppercase;
      font-weight: bold;
    }
    .about {
      padding: 0 15%;
    }
    .about-header, .employee-header {
      text-align: center;
      text-transform: uppercase;
      margin: 50px 0;
      border-top: 2px solid rgba(230, 230, 230, 0.9);
      border-bottom: 2px solid rgba(230, 230, 230, 0.9);
      padding: 10px 0;
    }
    .about-text {
      text-align: justify;
    }
    
    .employee-image {
      display: block;
      width: 200px;
      margin: 0 auto; /*Если у блочного элемента стоит значение фиксировання ширина, то его можно в выравнять по центру через margin: auto*/
      border: 2px solid lightgrey;
      border-radius: 50%;
      box-sizing: border-box; /*При использовании границ вместе с шириной объекты становятся больше (граница+шинира), чтобы это исправить мы устанавливаем значение box-sizing: border-box - он включает границу в ширину*/ 
    }
    .employee-name {
      text-align: center;
    }
  </style>
</head>
<body>
  <header> <!--Шапка-->
    <div class="header-image">
      <div class="header-title">
        <h1>Event-агенство "Elmo"</h1>
        <button>Заказать</button>
      </div>
    </div>
    <nav> <!--Тэг для навигационной панели-->
      <ul class="navigation">
        <li><a href="#" class="link">О нас</a></li>
        <li><a href="#" class="link">Наши проекты</a></li>
        <li><a href="#" class="link">Наши сотрудники</a></li>
        <li class="last"><a href="#" class="link">Контакты</a></li>
      </ul>
    </nav>
  </header>
    <section class="about">
      <h2 class="about-header">О нас</h2>
      <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, itaque laudantium quas praesentium quasi rerum dolores? Quisquam, sint, officiis sed nisi omnis ipsam magnam a fuga illo ab facere ad odio perferendis. Debitis, culpa, assumenda, optio impedit at totam nesciunt minima quas quasi adipisci pariatur deleniti molestiae praesentium consequuntur esse. Non, in sapiente soluta fugiat ducimus earum veniam nobis odio quasi nisi a dolores omnis magni amet ab harum reprehenderit maxime officia corporis dignissimos exercitationem sint doloremque tempore facilis ipsam saepe cupiditate ut accusamus repellat officiis! Libero, sapiente, doloribus facilis voluptatibus necessitatibus illo quasi harum atque laboriosam deserunt molestias quibusdam distinctio animi quia sunt reiciendis ipsum accusamus maiores inventore maxime perspiciatis. Iure, autem, rerum harum similique nisi saepe ea quia ipsa non quam illum voluptatem quis aliquam eligendi optio laudantium dolorum. Fugit, cum, architecto, amet inventore doloribus iste beatae recusandae voluptatum fugiat consequuntur quam nobis neque corporis quod numquam eaque!</p>
    </section>
    <section class="employee">
      <h2 class="employee-header">Наши сотрудники</h2>
      <img class="employee-image" src="https://cdn.shopify.com/s/files/1/1291/5963/products/436696_1024x1024.jpg?v=1596749218" alt="">
      <h5 class="employee-name">Элмо</h5>
    </section>
  </main>
  <footer> <!--Подвал-->
    
  </footer>
</body>
</html>