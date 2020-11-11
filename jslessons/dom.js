//Вся наша страница делится на DOM и BOM
//DOM - Document object model (Объектная модель документа)
//BOM - Browser object model (Браузерная модель документа)

//Взаимодействие с BOM
//BOM может управлять местоположением или считывать информацию о браузере и системе
// console.log([navigator.userAgent, navigator.platform]);

// console.log(location.href)//Получаем текущее местоположение
// //location.href = "https://wikipedia.ru"; //Редирект - перенаправление на другую страницу
// //location.reload() //Перезагружаем страницу

// //Взаимодействие с DOM
// //Глобальный объект document
// console.log(document) //Получаем весь документ
// console.log(document.documentElement) //Получаем весь документ в виде элемента
// console.log(document.body) //Получаем body

//Нахождение элементов - querySelector()  querySelectorAll()
//querySelector() - находит элемент на странице
// let blueHeader = document.querySelector("h1");
// blueHeader.style.color = "blue";
// let redHeader = document.querySelector("#red");
// redHeader.style.color = "red";
// let childrenContainer = document.querySelector(".children");
// childrenContainer.style.backgroundColor = "lightblue";

// let blueListItem = document.querySelector(".blue-list-item");
// blueListItem.style.color = "blue"; //Покрасит только первый .blue-list-item

// //querySelectorAll() - возвращает коллекцию элементов
// let redListItems = document.querySelectorAll(".red-list-item");
// console.log(redListItems); //результат работы querySelectorAll - массив
// for (let item of redListItems) { //Перебираем коллекцию найденных элементов с помощью цикла
//   item.style.color = "red"; //красим каждый элемент в красный
// }

// let attrContainer = document.querySelector(".attr-selector");
// let redTitleElement = attrContainer.querySelector("[title='Красный']");
// redTitleElement.style.color = "red";

// //Пример с нажатием на h3 "Контекстные селекторы"
// let contextH3 = document.querySelector("h3");
// contextH3.onclick = function() {
//   let orangeListItems = document.querySelectorAll(".orange-list li:nth-child(odd)");
//   for (let item of orangeListItems) {
//     item.style.color = "orange";
//   }
// }
// //Можно получить элемент по ID
// green.style.color = "green";
// //Устаревшие способы getElementsBy
// let yellowHeader = document.getElementById("yellow"); //по ID
// yellowHeader.style.color = "yellow";

// let h3Collection = document.getElementsByTagName("h3"); //по тэгу
// console.log(h3Collection)
// for(let item of h3Collection) {
//   item.style.textAlign = "center";
// }
// let darkredList = document.getElementsByClassName("darkred-list"); //по классу
// console.log(darkredList);
// darkredList[0].style.color = "darkred";

// //matches - проверяет удовлетворяет ли элемент селектору
// console.log( yellowHeader.matches("#yellow") );
// //closest - осуществляет поиск вверх - ищет по предкам
// let descendant = document.querySelector(".descendants p");
// console.log( descendant.closest(".children") );

//Навигация по DOM-элементам

let col1 = document.querySelector(".col-1");
//Поиск по узлам
console.log([col1.nextSibling,
          col1.previousSibling.previousSibling,
          col1.parentNode,
          col1.childNodes,
          col1.firstChild,
          col1.lastChild]);
//Поиск по элементам
console.log({
  nextElementSibling: col1.nextElementSibling, //Следующий сосед
  previousElementSibling: col1.previousElementSibling, //Предыдущий сосед
  parentElement: col1.parentElement, //родитель
  children: col1.children, //Коллекция детей
  firstElementChild: col1.firstElementChild, //Первый ребенок
  lastElementChild: col1.lastElementChild, //Последний ребенок
})




