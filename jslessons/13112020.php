<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Подтягиваемся</title>
  <style>
    .display {
      width: 15em;
      background-color: lightgreen;
      border: 2px solid darkgreen;
      padding: 15px;
    }
    .display-text {
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="display">
    <p class="display-text">Информация</p>
  </div>
  <script>
    function changeDisplayText(message) {
      let displayText = document.querySelector(".display-text");
      displayText.innerHTML = message;
      changeColor(displayText, "gold");
    }
    let text = "Автомат временно не работает!";
    changeDisplayText(text);
    
    function changeColor(elem, color) {
      elem.style.color = color;
    }
  </script>
</body>
</html>