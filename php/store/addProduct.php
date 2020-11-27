<?php 
$title = "Добавить товар";
require_once("header.php"); 
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="text-center">Добавить товар</h1>
    </div>
    <div class="col-7">
      <form action="addProduct_obr.php" method="POST" class="add-form">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" placeholder="Название товара" name="name" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" placeholder="Цена" name="price">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <textarea rows="3" type="text" class="form-control" placeholder="Краткое описание" name="short-description"></textarea>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <textarea rows="10" type="text" class="form-control" placeholder="Полное описание" name="full-description"></textarea>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" placeholder="Ссылка на картинку" name="image-src">
        </div>
        <p class="error-text text-danger" hidden></p>
        <input type="submit" value="Добавить товар" class="btn btn-primary btn-block">
      </form>
    </div>
  </div>
</div>
<script>
  let addForm = document.querySelector(".add-form");
  addForm.onsubmit = function(event) {
    event.preventDefault(); //Прерываем стандартную отправку формы
    sendProduct(addForm); //Запускаем отправку формы через AJAX
  }
  
  function sendProduct(form) {
    let formData = new FormData(form); //На основе формы формируем объект FormData
    //console.log(formData.get("price"));
    fetch("addProduct_obr.php", { //Адрес запроса
      method: "POST", //Метод запроса
      body: formData, //Тело запроса
    })
    //Чтобы избежать потери this при работе с fetch используйте функции-стрелки
      .then((response) => { //Получаем ответ с сервера
        if(response.ok) { //Проверяем, что запрос успешен (статус 200-299)
          return response.text(); //Дешифруем ответ как текст (это тоже является промисом). return обязателен
        } else {
          console.error("Не удалось отправить запрос:" + response.status);
        }
      })
      .then((result) => { //Дешифрованный ответ
        if (result == "ok") { //Сравниваем, что пришло в ответе
          alert("Товар успешно добавлен");
        } else {
          let errorText = document.querySelector(".error-text");
          errorText.hidden = false;
          errorText.innerHTML = result;
        }
      })
    
  }
  
  /*  
  formData.append(name, value) – добавляет к объекту поле с именем name и значением value,
  formData.append(name, blob, fileName) – добавляет поле, как будто в форме имеется элемент <input type="file">, третий аргумент fileName устанавливает имя файла (не имя поля формы), как будто это имя из файловой системы пользователя,
  formData.delete(name) – удаляет поле с заданным именем name,
  formData.get(name) – получает значение поля с именем name,
  formData.has(name) – если существует поле с именем name, то возвращает true, иначе false
  */
</script>
<?php require_once("footer.php"); ?>