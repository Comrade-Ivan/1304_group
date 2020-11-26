<?php
  header('Content-type: text/html; charset=utf-8');
  require_once("db.php");
  $name = htmlspecialchars( trim($_POST["name"]) ); //Ключи в массиве $_POST - атрибуты name
  $price = htmlspecialchars( trim($_POST["price"]) );
  $shortDescription = htmlspecialchars( trim($_POST["short-description"]) );
  $fullDescription = htmlspecialchars( trim($_POST["full-description"]) );
  $imageSrc = htmlspecialchars( trim($_POST["image-src"]) );
  
  if (empty($name) || empty($price) || empty($shortDescription) || empty($fullDescription) || empty($imageSrc)) {
    exit("Не все поля заполнены"); //как return для файла-обработика
  }
  
  if (mb_strlen($name) < 3 || $price < 0) {
    exit("Невалидные данные"); 
  }
  
  $result = $mysqli->query("SELECT * FROM `products` WHERE `name`='$name'")->fetch_assoc();
  if($result) {
    exit("Такой товар уже существует");
  }
  
  $result = $mysqli->query("INSERT INTO `products`(`name`, `price`, `short_description`, `full_description`, `image_src`) VALUES ('$name', '$price', '$shortDescription', '$fullDescription', '$imageSrc')");
  
  if($result) {
    exit("Товар $name успешно добавлен");
  } else {
    exit("Не удалось добавить товар");
  }
  
  
  
  
  
