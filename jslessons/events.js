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
let eventButton = document.querySelector(".event-listener-button");
eventButton.addEventListener("click", () => {
  console.log("Обработчик 1");
})
eventButton.addEventListener("click", () => {
  console.log("Обработчик 2");
})

//Удаляем события через removeEventListener. Для работоспособности фукнция-обработчик должны быть именованной
function handler3() {
  console.log("Обработчик 3");
}
eventButton.addEventListener("click", handler3);

let removeEventButton = document.querySelector(".remove-event-listener-button");
removeEventButton.addEventListener("click", () => {
  eventButton.removeEventListener("click", handler3); //Удаляем слушателя событий. Название удаляемой функции-обработчка должно совпадать.
});




