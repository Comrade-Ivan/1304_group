[<?php
$title = "Каталог";
require_once("header.php");
?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Каталог</h1>
        </div>
      </div>
      <h2>Вы недавно просматривали</h2>
      <div class="row justify-content-around last-seen">

      </div>
      <hr>
      <div class="row justify-content-around catalog">

      </div>
    </div>

<script>
  loadCatalog()
  function loadCatalog() {
    fetch("getAllProducts.php") //Отправляем GET запрос
      .then((response) => {
        if (response.ok) return response.json(); //Дешифруем как json
        else console.error("Ошибка:" + response.status);
      })
      .then((result) => createCards(result))
  }
  
  function createCards(products) {
    for(let product of products) {
      let catalog = document.querySelector(".catalog");
      let card = document.createElement("div");
      card.className = "my-2 col-12 col-sm-6 col-lg-4";
      card.innerHTML = `
      <div class="card">
        <img src="${product.image_src}" class="card-img-top" alt="${product.name}">
        <div class="card-body">
          <h5 class="card-title">${product.name}</h5>
          <h6 class="card-title">${product.price} руб.</h6>
          <p class="card-text">${product.short_description}</p>
          <a href="productPage.php?id=${product.id}" class="btn btn-primary">Подробнее</a>
        </div>
      </div>
      `
      catalog.append(card);
    }
  }
  
  //Получаем и отображаем последний просмотренный товар
  if(localStorage.getItem("lastSeenID")) {
    showLastSeenProduct(localStorage.getItem("lastSeenID"));
  }
  
  async function showLastSeenProduct(id) {
    let response = await fetch(`getProductById.php?id=${id}`);
    //await приостанавливает дальнейшее действие кода внутри асинхронной функции, пока не выполнится промис стоящий после него.
    let result = "";
    if (response.ok) {
      result = await response.json(); //Дешифруем как json
    } else {
      return console.error("Ошибка:" + response.status);
    }
    
    if (result.status == "fail") return console.error("Нет такого товара");
    
    let product = result;
    let lastSeenContainer = document.querySelector(".last-seen");
    let card = document.createElement("div");
      card.className = "my-2 col-12 border";
      card.innerHTML = `
      <img src="${product.image_src}" class="card-img-top" alt="${product.name}" style="width:100px;">
      <h5 class="card-title d-inline">${product.name}</h5>
      <h6 class="card-title d-inline">${product.price} руб.</h6>
      <a href="productPage.php?id=${product.id}" class="btn btn-primary">Подробнее</a>
      `
    lastSeenContainer.append(card);
    
  }
  
</script>
<? require_once("footer.php"); ?>