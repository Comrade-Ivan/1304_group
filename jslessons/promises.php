<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Светофор</title>
  <style>
    body {
      min-height: 100vh;
      overflow: hidden;
    }
    h1 {
      text-align: center;
    }
    .box {
      border: 2px solid darkgrey;
      display: inline-block;  /*block inline inline-block none flex grid*/
      padding: 15px;
      background-color: lightgrey;
      position: relative;
      left: 50%;
      top: 0;
      transform: translateX(-50%);
    }
    
    .light {
      width: 150px; /*Ширина*/
      height: 150px; /*Высота*/
      border: 2px solid black;
      box-sizing: border-box;
      border-radius: 25% 45% 20% 50%;
      margin: 15px auto;
      box-shadow: inset 0 0 50px 0 black;
      transition: transform .5s;
      background-color: black;
    }
    .counter {
      font-size: 4em;
      color: white;
      text-align: center;
      line-height: .3em;
      display: none;
      font-family: Tahoma;
    }
    .car {
      position: absolute;
      top: calc(100vh - 180px);
      left: 0;
    }
  </style>
</head>
<body>
  <div class="box">
    <div class="light red">
      <p class="counter">10</p>
    </div>
    <div class="light yellow"></div>
    <div class="light green"></div>
  </div>
  <img src="https://cdn.iconscout.com/icon/free/png-256/car-vehicle-travel-transport-side-view-29587.png" alt="" class="car">
  <script src="promises.js"></script>
</body>
</html>