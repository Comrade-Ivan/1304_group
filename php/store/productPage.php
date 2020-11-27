<?php
$id = $_GET['id'];
require_once("db.php");
$product = $mysqli->query("SELECT * FROM `products` WHERE `id`='$id'")->fetch_assoc();

if(!$product) exit("Товар не найден");
$title = $product['name'];
require_once("header.php");
?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Подробнее о товаре</h1>
        </div>
        <div class="col-6" style="background: url(<?= $product['image_src']?>) 50%/50%; background-size: cover;"></div>
        <div class="col-6 text-right">
          <small>ID: <span class="product-id"><?= $product['id']?></span></small>
          <h2><?= $product['name']?></h2>
          <h3><?= $product['price']?>руб.</h3>
          <p><?= $product['full_description']?></p>
          <a href="catalog.php" class="btn btn-primary float-right">Назад</a>
        </div>
      </div>
    </div>
<script>
  /*
  Объекты хранилища localStorage и sessionStorage предоставляют одинаковые методы и свойства:

  setItem(key, value) – сохранить пару ключ/значение.
  getItem(key) – получить данные по ключу key.
  removeItem(key) – удалить данные с ключом key.
  clear() – удалить всё.
  key(index) – получить ключ на заданной позиции.
  length – количество элементов в хранилище.
  */
  let idElement = document.querySelector(".product-id");
  localStorage.setItem("lastSeenID", idElement.innerHTML); //Записываем ID просматриваемого товара в localStorage
</script>
<? require_once("footer.php"); ?>