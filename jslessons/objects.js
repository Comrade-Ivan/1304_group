"use strict"

// /*Описываем кружку в виде объекта*/
let cup = {}; //Создание нового объекта (пустого)
cup = {
  color: "white", /*свойство - созданы для описания объекта*/
  filled: false, /*ключ: значение*/
  liquid: null,
  handle: 1, /*ключ - название св-ва*/
  material: "ceramic",
  cleanliness: 0.75,
  spoon: {material: "metal", cleanliness: 0.75}, /*Объект может содержать другие объекты*/
  
  fill: function(liquidType) { /*Метод - действие(функция), в котором участвует объект*/
    if (!cup.filled) {
      console.log("В кружку налили " + liquidType);
      cup.filled = true;
      cup.liquid = liquidType;
    } else {
      console.log("Кружка уже наполнена");
    }
  },
  /*Упрощенный синтаксис*/
  drink() {
    /*this(этот) внутри метода возвращает объект, к которому обращен метод*/
    /*В данном примере this === cup*/
    if (this.filled) {
      console.log("Вы выпили " + this.liquid);
      this.filled = false;
      this.liquid = null;
    } else {
      console.log("Нечего пить");
    }
  },
}
// console.log( cup.color ); /*Считываем св-ва*/
// cup.color = "black"; /*Перезаписываем значение св-ва*/
// console.log( cup.color );

// //Вызов метода
// cup.fill("Чай");

//Методы примитивов

//Числа

//Округление с помощью библиотеки Math до целых чисел

// let a = 3.5743434;
// let floor = Math.floor(a); /*floor - пол - округление вниз*/
// console.log(floor);
// let round = Math.round(a); /*round - округление по математическим правилам*/
// console.log(round);
// let ceil = Math.ceil(a); /*ceil - потолок - округление вверх*/
// console.log(ceil);

// let fixed = a.toFixed(1); /*Округляет до количества знаков после запятой, указанных в параметре, по математическим правилам*/
// // Используйте toFixed, когда складываете нецелые числа.
// console.log(fixed);

// //Получение числа из строки
// let width = "100px";
// width = parseInt(width); /*Для целых чисел*/
// console.log(width);
// let fontSize = "1.5em";
// fontSize = parseFloat(fontSize); /*Для дробных чисел */
// console.log(fontSize);

// //Получение случаного числа
// console.log(Math.random()); //Получаем случайное дробное число в диапазоне [0,1)
// //Получение случайного целого числа [0,10]
// let random = Math.floor(Math.random() * 10);
// console.log(random);
//https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/Math/random

//Строки. Методы строк

let string = "Что-то, что мы можем написать в одну строку кода";

let user = {name: "Василий", role: "Модератор"};
let badge = `
  <div>
    <h2>Имя: ${user.name}</h2>
    <h5>Роль: ${user.role}</h5>
  </div>
`; /*Обратные кавычки позволяют ставить абзацы внутри строки и также с помощью синтаксиса ${} позволяют вписывать переменные*/
//В строки можно добавлять спецсимволы используя Unicode
console.log("\u{1F605}");

//Длина строки и доступ к символам
let str = "foobar";
console.log(str.length)//6 - получаем длину строки
console.log( str[0] ); //"f" отсчет начинается с 0
console.log( str[1] ); //"o"
console.log( str[3] ); //"b"

let num = 325;
num = String(num); /*Превращаем число в строку*/
console.log( num[0] ); //Теперь тянем кажду цифру посимвольно
console.log( num[1] );
console.log( num[2] );

//num[0] = 4; - не сработает, изменять строку посимвольно нельзя
//Перебираем все символы в строке
let result = "";
for(let i = 0; i < num.length; i++) {
  result = result + num[i]*10 + " ";
}
console.log(result); //"30 20 50 "

//Изменение регистра
let str1 = "Съешь ещё этих мягких французских булок";
let newStr1 = str1.toUpperCase(); //Перевод в верхний регистр
console.log(newStr1);
let str2 = "Съешь Ещё Этих Мягких Французских Булок";
let newStr2 = str2.toLowerCase(); //Перевод в нижни регистр
console.log(newStr2);









