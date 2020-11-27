<?php
require_once("db.php");
$result = $mysqli->query("SELECT * FROM `products` WHERE 1");
for($products = []; $row = $result->fetch_assoc(); $products[] = $row);
$title = "Каталог";
require_once("header.php");
?>
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-12">
          <h1>Каталог</h1>
        </div>
        <?php foreach($products as $product): ?>
          <div class="col-3">
            <div class="card" data-sql-id="<?= $product['id'] ?>">
              <img src="<?php echo $product['image_src'] ?>" class="card-img-top" alt="<?php echo $product['name'] ?>">
              <div class="card-body">
                <h5 class="card-title"><?= $product['name'] ?></h5>
                <h6><?= $product['price'] ?>руб.</h6>
                <p class="card-text"><?= $product['short_description'] ?></p>
                <a href="productPage.php?id=<?= $product['id']?>" class="btn btn-primary">Подробнее</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

<? require_once("footer.php"); ?>