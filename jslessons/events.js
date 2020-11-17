//Способ "повесить" слушателя событий

//1. через атрибут - см html

//2. Через свойство элемента. Если событие стандартное, к нему можно обратиться через свойство.
// Таким способом можно повесить только одну функцию
// let propertyButton = document.querySelector(".property-button");
// propertyButton.onclick = function() { //Функция-обертка
//   alert("Еще реклама!");
// }

// let propertyButton2 = document.querySelector(".property-button2");
// propertyButton2.onclick = showAdvert //Передаем тело функции
// function showAdvert() {
//   alert("Больше рекламы!");
// }

// let propertyButton3 = document.querySelector(".property-button3");
// propertyButton3.onclick = () => {
//   propertyButton.onclick = null; //Удаляем слушателя событий
//   propertyButton2.onclick = null;
// }

//Через метод addEventListener(event, handler)
//Позволяет повесить несколько обработчиков на одно и то же событие
//Позволяет работать с нестандартными событиями
// let eventButton = document.querySelector(".event-listener-button");
// eventButton.addEventListener("click", () => {
//   console.log("Обработчик 1");
// })
// eventButton.addEventListener("click", () => {
//   console.log("Обработчик 2");
// })

//Удаляем события через removeEventListener. Для работоспособности фукнция-обработчик должны быть именованной
// function handler3() {
//   console.log("Обработчик 3");
// }
// eventButton.addEventListener("click", handler3);

// let removeEventButton = document.querySelector(".remove-event-listener-button");
// removeEventButton.addEventListener("click", () => {
//   eventButton.removeEventListener("click", handler3); //Удаляем слушателя событий. Название удаляемой функции-обработчка должно совпадать.
// });

//Ключевое слово this в событиях
//this возвращает объект к которому обращен метод
// let thisButton = document.querySelector(".this-button");
// thisButton.addEventListener("click", function() {
//   console.log(this); //Объект, к которому обращен addEventListener - thisButton. Таким образом мы получаем саму кнопку в this при нажатии.
//   let cardImage = this.previousElementSibling;
//   console.log(cardImage);
// })

// thisButton.addEventListener("click", handler4); //На готовых функция обработчиках тоже работает
// function handler4() {
//   console.log("Функция handler4")
//   console.log(this); //Если вызвать функцию вручную из консоли, то в this попадет глобальный объект window
// }
// //Потеря this. Частые ошибки.
// let thisLostButton = document.querySelector(".this-lost-button");
// function showMessage(from, message, button) {
//   console.log(`${from}: ${message}`);
//   console.log(this); //Получаем window, потому что showMessage не является методом какого-либо объекта
//   console.log(button);
// }

// thisLostButton.addEventListener("click", function() {
//   //!!!this работает корректно только непосредственно внутри функции-обработчика
//   console.log(this); //Получаем кнопку
//   showMessage("admin", "hello", this); //Решаем проблему. Передаем this параметром функции
// });

// thisLostButton.addEventListener("click", () => {
//   //Стрелочная функция не имеет собственного this. Она берет его из внешней области видимости.
//   console.log(this); //получаем window
// });

//Объект события - event

let eventButton = document.querySelector(".event-button");
eventButton.addEventListener("click", function(event) {
  //Объект события всегда передается в функцию-обработчик первым параметром
  console.log(event); //Получаем объект события
  console.log(event.target); //Получаем элемент, на который нажали
  console.log([event.clientX, event.clientY]); //Получаем координаты курсора
});

let divButton = document.querySelector(".div-button");
divButton.addEventListener("click", (event) => {
  console.log(event.target); //Возвращает именно элемент, на который мы нажали, а не элемент, на который повешано событие
  console.log([event.clientX, event.clientY]);
})
divButton.addEventListener("mousemove", (event) => {
  console.log([event.clientX, event.clientY]);
});

divButton.addEventListener("click", handler5);
function handler5(event) {
  console.log(event.currentTarget);
}

//Отменяем стандартные действия браузера
let eventImage = document.querySelector(".event-image");
eventImage.addEventListener("mousedown", function(event) {
  event.preventDefault(); //Отменяет стандартное действие браузера
  //прим. Отменяет призрака у картинки
})
eventImage.addEventListener("contextmenu", function(event) {
  event.preventDefault(); //Отменяет стандартное действие браузера
  //прим. Отменяет контекстное меню (нажатие правой кнопкой мыши)
})
let form = document.querySelector(".event-form");
form.addEventListener("submit", function(event) {
  event.preventDefault();
  //прим. Отменяет отправку формы и перезагрузку страницы
})






