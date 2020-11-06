"use strict"

//Создание функции
// greetAllUsers(); /*Вызов функции. Функции можно вызывать до их объявления*/
// greetAllUsers(); /*Функции вызываются обязательно с ()*/

// function greetAllUsers() { /*Объявление функции*/
//   alert("Привет, всем!");
// }

// //Переменные внутри функции
// //Переменные объявленные внутри функции с помощью let - локальны для этой функции
// function showMessage() {
//   let message = "Привет, мир!"; /*Переменную можно использовать только внутри функции*/
//   alert(message);
// }
// //message = "Пока!"; - вызовет ошибку, обращение к локальной переменной
// showMessage();
// //Обращение к глобальной переменной
// let username = "Василий"; /*Глобальная переменная - можно к ней обратиться из любой части кода*/
// function greetUser() {
//   let message = "Привет, " + username + "!";
//   alert(message);
// }
// //Те же самые правила локальный и глобальных переменных распространяются на условия и циклы
// for(let i = 0; i < 1; i++) {
//   let message = "Отработал цикл"; //message локальна для цикла
//   console.log(message);
// }
// if (true) {
//   let message = "Отработало условия"; //message локальна для условия
//   console.log(message);
// }
// //Переменная, объявленная через let внутри {} - локальна для этих {}
// // function checkAge() {
// //   let age = +prompt("Сколько Вам лет?", 18); //Локальная для функции, глобальна для вложеного if
// //   if(age >= 18) {
// //     let message = "Вам можно на сайт!" //Локальна для if
// //     alert(message);
// //   } else {
// //     let message = "Вам нельзя на сайт!"
// //     alert(message);
// //   }
// // }
// checkAge();
// function checkAge() {
//   let age = +prompt("Сколько Вам лет?", 18);
//   let message = "";
//   if(age >= 18) {
//     message = "Вам можно на сайт!";
//   } else {
//     message = "Вам нельзя на сайт!";
//   }
//   alert(message);
// }

// let state = "idle";
// function changeState() {
//   let state = "ready";
//   /*Если глобальная и локальная переменные имеют одинаковые названия, используется локальная*/
//   console.log(state); //"ready"
// }
// changeState();
// console.log(state); //"idle"

//Параметры

// function addChatMessage(from, text) { /*Говорим функции. что она принимает параметры*/
//   // console.log(`from = ${from}`);
//   // console.log(`text = ${text}`);
//   /*Параметры - локальные переменные для функции*/
//   let message = `${from}: ${text}`;
//   alert(message);
// }
// addChatMessage("Василий", "Всем привет"); /*Передаем параметры*/
// addChatMessage("Сергей", "Привет, Вася!");
// addChatMessage("Петр", "Здаров!");

// let username = "anonym", message = "hello";
// addChatMessage(username, message);

//Параметры по умолчанию (необязательные пераметры)
// function addChatMessageWithRole(from, text, role = "guest") {
//   /*По умолчанию параметр role равен guest*/
//   let message = `[${role}]${from}: ${text}`;
//   alert(message);
// }
// addChatMessageWithRole("Василий", "Всем привет"); //[guest]Василий: Всем привет
// addChatMessageWithRole("Сергей", "Приветствую", "admin"); //[admin]Сергей: Приветствую

//Возврат значений
// function checkAge(age) {
//   if (age >= 18) {
//     return true; /*return - возвращает значение*/
//   } else {
//     return false;
//   }
// }
// let age = +prompt("Введите возраст");
// let checked = checkAge(age); /*Результат из return мы можем записывать в переменные*/
// console.log(checked);
// if(checked === true) {
//   alert("Вам можно на сайт!");
// } else {
//   alert("Вам нельзя на сайт!");
// }
function func() {
  return; //Результат работы любой функции, если с помощью return не указано иное - undefined
}

let state = "idle";
function cookCoffee() {
  if (state != "idle") {
    return; /*return - завершает выполнение функции*/
  }
  console.log("Ваш кофе готовится");
  state = "cooking";
}
cookCoffee(); //"Ваш кофе готовится"
cookCoffee();
function takeCoffee() {
  if(state != "cooking") {
    return;
  }
  console.log("Вы забрали свой кофе");
  state = "idle";
}

takeCoffee(); //"Вы забрали свой кофе"
cookCoffee(); //"Ваш кофе готовится"
cookCoffee();
