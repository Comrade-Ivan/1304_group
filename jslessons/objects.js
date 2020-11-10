"use strict"

// /*Описываем кружку в виде объекта*/
// let cup = {}; //Создание нового объекта (пустого)
// cup = {
//   color: "white", /*свойство - созданы для описания объекта*/
//   filled: false, /*ключ: значение*/
//   liquid: null,
//   handle: 1, /*ключ - название св-ва*/
//   material: "ceramic",
//   cleanliness: 0.75,
//   spoon: {material: "metal", cleanliness: 0.75}, /*Объект может содержать другие объекты*/
  
//   fill: function(liquidType) { /*Метод - действие(функция), в котором участвует объект*/
//     if (!cup.filled) {
//       console.log("В кружку налили " + liquidType);
//       cup.filled = true;
//       cup.liquid = liquidType;
//     } else {
//       console.log("Кружка уже наполнена");
//     }
//   },
//   /*Упрощенный синтаксис*/
//   drink() {
//     /*this(этот) внутри метода возвращает объект, к которому обращен метод*/
//     /*В данном примере this === cup*/
//     if (this.filled) {
//       console.log("Вы выпили " + this.liquid);
//       this.filled = false;
//       this.liquid = null;
//     } else {
//       console.log("Нечего пить");
//     }
//   },
// }
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

// let string = "Что-то, что мы можем написать в одну строку кода";

// let user = {name: "Василий", role: "Модератор"};
// let badge = `
//   <div>
//     <h2>Имя: ${user.name}</h2>
//     <h5>Роль: ${user.role}</h5>
//   </div>
// `; /*Обратные кавычки позволяют ставить абзацы внутри строки и также с помощью синтаксиса ${} позволяют вписывать переменные*/
// //В строки можно добавлять спецсимволы используя Unicode
// console.log("\u{1F605}");

//Длина строки и доступ к символам
// let str = "foobar";
// console.log(str.length)//6 - получаем длину строки
// console.log( str[0] ); //"f" отсчет начинается с 0
// console.log( str[1] ); //"o"
// console.log( str[3] ); //"b"

// let num = 325;
// num = String(num); /*Превращаем число в строку*/
// console.log( num[0] ); //Теперь тянем кажду цифру посимвольно
// console.log( num[1] );
// console.log( num[2] );

//num[0] = 4; - не сработает, изменять строку посимвольно нельзя
//Перебираем все символы в строке
// let result = "";
// for(let i = 0; i < num.length; i++) {
//   result = result + num[i]*10 + " ";
// }
// console.log(result); //"30 20 50 "

// //Изменение регистра
// let str1 = "Съешь ещё этих мягких французских булок";
// let newStr1 = str1.toUpperCase(); //Перевод в верхний регистр
// console.log(newStr1);
// let str2 = "Съешь Ещё Этих Мягких Французских Булок";
// let newStr2 = str2.toLowerCase(); //Перевод в нижни регистр
// console.log(newStr2);

//Поиск подстроки

// let bulki = "Съешь еще этих мягких французских булок";

// console.log(bulki.indexOf("еще")); //6 - возвращает индекс символа с которого начинается подстрока
// console.log(bulki.indexOf("Съешь")); //0 - буква C - первая, отсчет начинается с 0
// console.log(bulki.indexOf("печеньки")); //-1 - При ненаходждении возвращает -1
// //indexOf нецелесообразно использовать как условие

// console.log(bulki.includes("мягких")) //true - возвращает true, если нашел подстроку и false если не нашел
// console.log(bulki.startsWith("Съешь")); //true Начинается С
// console.log(bulki.endsWith("печенек")); //false Заканчивается на

// function checkAndGetIndex(needle, haystack) {
//   if( haystack.includes(needle) ) { //Ищем в подстроке
//     return haystack.indexOf(needle); //Если есть возвращаем index
//   } else {
//     return false; //Если нет возвращаем false
//   }
// }
// console.log( checkAndGetIndex("этих", bulki) ); //10

//Получение подстроки

// let string = "Съешь еще этих мягких французских булок";
// let result1 = string.slice(6, 9); //От start до end
// console.log(result1); //"еще"
// console.log(string); //Не трогает строку, в которой осуществляется поиск

// console.log(string.slice(-5, -2)); //start и end могут быть отрицательными
// console.log(string.slice(15)); //если нет второго параметра - получаем до конца

// console.log(string.substring(6, 9)); //"еще" От start до end
// console.log(string.substring(9, 6)); //"еще" start может быть больше end

// console.log(string.substr(6, 3)); //"еще" От start длины length

//Массивы

//Объект как ассоциативный массив (объект без методов)
//let user = {name: "Василий", lastname: "Петров"};
//let fruits = {one: "Яблоко", two: "Груша"} // - Плохой пример, в этом случае лучше использовать массивы

//Создание массива. Получение элемента массива

// let arr = []; //создание пустого массива
// let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// console.log(fruits[0]); //Получаем элемент массива по индексу
// console.log(fruits[1]);
// console.log(fruits[2]);

// fruits[1] = "Персик"; //Можно изменять элементы массива
// console.log(fruits);

// let randomArray = [42, "Булки", true, [1, 2, 3, 4, 5], {name: "Василий", lastname: "Петров"}, undefined, null];
// //Массив может содержать любые типы данных

// //Массив может быть многомерным (содержать в себе другой массив или объект)
// let tickTackToe = [
//   ["O", "X", "X"],
//   ["O", "X", "O"],
//   ["O", "O", "X"],
// ];
// let admins = {
//   creator: ["anonym"],
//   admin: ["ВаСя123", "petya13"],
//   moderator: ["nan123"],
// };
// let cart = [
//   {name: "Название продукта", desc: "Описание", price: "Цена", images: ["1.jpg", "2.jpg"], existance: true, count: 2},  
//   {name: "Название продукта", desc: "Описание", price: "Цена", images: ["1.jpg", "2.jpg"], existance: true, count: 2},  
//   {name: "Название продукта", desc: "Описание", price: "Цена", images: ["1.jpg", "2.jpg"], existance: true, count: 2},  
//   {name: "Название продукта", desc: "Описание", price: "Цена", images: ["1.jpg", "2.jpg"], existance: true, count: 2},  
// ];

//Перебор массива
// let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// console.log(fruits.length)//5 - длина массива

// let str1 = "";
// for (let i = 0; i < fruits.length; i++) {
//   str1 += fruits[i] + "\n"; //Работает с самими элементами массива (может их менять)
// }
// console.log(str1);
// let str2 = "";
// for (let fruit of fruits) {
//   str2 += fruit + "\n"; //Работает с "копиями" элементов массива (не меняет сам массив и элементы в нем)
// }
// console.log(str2);

// let cards = document.createElement("div");
// document.body.append(cards);
// cards.style.display = "flex";
// cards.style.justifyContent = "space-around";
// for (let fruit of fruits) {
//   //str2 += fruit + "\n";
//   let card = document.createElement("h2"); //Создаем по карточке для каждого элемента
//   card.innerHTML = fruit;
//   cards.append(card);
// }

//Методы работы с массивами
//pop/push shift/unshift

// let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// let lastFruit = fruits.pop() //.pop() - удаляет элемент из конца массива и возвращает его
// console.log(fruits); //["Яблоко", "Ананас", "Банан", "Груша"]
// console.log(lastFruit); //Апельсин

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// let newFruit = "Персик";
// fruits.push(newFruit); //Добавляет элемент в конец массива
// console.log(fruits); //["Яблоко", "Ананас", "Банан", "Груша", "Апельсин", "Персик"]

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// let firstFruit = fruits.shift() //.shift() - удаляет элемент из начала массива и возвращает его
// console.log(fruits); //["Ананас", "Банан", "Груша", "Апельсин"]
// console.log(firstFruit); //Яблоко

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// newFruit = "Персик";
// fruits.unshift(newFruit); //Добавляет элемент в начало массива
// console.log(fruits); //["Персик", "Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]

//splice
// let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// fruits.splice(1, 1); //Удаляем один элемент начиная с индекса 1
// console.log(fruits); //Удалится Ананас

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// fruits.splice(1, 0, "Персик", "Виноград"); //Начиная с индекса 1 удаляем 0 элементов и добавляем "Персик" и "Виноград"
// console.log(fruits); //["Яблоко", "Персик", "Виноград", "Ананас", "Банан", "Груша", "Апельсин"]

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// fruits.splice(1, 1, "Персик")//Начиная с индекса 1 удаляем один элемент и добаляем "Персик"

// //splice изменяет исходный массив

// //slice
// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// //slice работает с "копией" массива (не вносит изменения в сам массив)
// let fruitsCopy = fruits.slice(); //Получаем копию массива

// let shelf1 = fruits.slice(0, 3); //Возвращает элементы от start до end
// console.log(shelf1);
// console.log(fruits);

//concat - объединяет массивы
let arr1 = [1, 2, 3];
let arr2 = [4, 5, 6];
let newArr = arr1.concat(arr2); //Объединит массивы arr1 и arr2, возвращает объединенный результат
console.log(newArr);

//reverse - переворачивает массив
let arr3 = [1, 2, 3, 4, 5];
arr3.reverse(); //"переворачивает" массив
console.log(arr3); //[5, 4, 3, 2, 1]

//Превращаем строки в массив и наоборот
//Необходимо из фразы "Я-учу-JS" сделать фразу "JS учу Я"
let str = "Я-учу-JS";
let array = str.split("-"); //Разделяет строку на массив по разделителю (может быть пробелом)
console.log(array);
array.reverse();
let newStr = array.join(" "); //Делаем из массива строку - элементы друг от другом разделяются разделителем (в нашем случае пробелом)

//Пример задачки

// Напишите функцию countOfOdd,
//  которая принимает массив arr как аргумент 
//  и возвращает количество нечетных элементов этого массива

function countOfOdd(arr) {
  let count = 0;
  let odd = [];
  for (let item of arr) {
    if (item % 2 != 0) {
      count++;
      odd.push(item);
    }
  }
  //return odd;
  return count;
}





