//Еше раз про функции

//Функция может быть рекурсивной (вызывать саму себя).
// let fruits = ["Яблоко", "Банан", "Груша"];
// let cart = [];

// addFruitsToCart(fruits);
// function addFruitsToCart(array) {
//   if (array.length === 0) {
//     return;
//   }
//   let fruit = array.pop(); //Удаляем элемент из конца массива
//   cart.push(fruit);
//   return addFruitsToCart(array); //Снова вызываем эту же функцию. Рекурсия.
// }
// console.log({fruits: fruits, cart: cart});

//Функцию можно записать как переменную
// let f = function () { //Конструкция безымянной функции
//   console.log("some func");
// }
// f();
// //В таком случае можно использовать сокращения в виде стрелочной функции.
// let f2 = (param) => {
//   console.log("some func" + param);
// }
// f2(1);

//Функции-коллбэки
//Мы передаем параметром набор инструкций, и этот набор инструкций выполняется в нужный момент
let array = ["Яблоко", "Банан", "Груша"];

// checkGreen(array, function () { //Функция-обертка
//   console.log("Я нашел яблоко");
// });
// checkGreen(array, (fruit) => {
//   alert("Я нашел " + fruit);
// });
function checkGreen(fruits, callback) {
  console.log("Начинаю проверку");
  for(let i = 0; i < fruits.length; i++) {
    if (fruits[i] == "Яблоко") {
      callback(); //Вызываем функциб, которую мы приняли параметром. showApple();
      return true;
    }
  }
  return false;
}

//checkGreen(array, showApple());
//Сначала выполнится showApple(), потом checkGreen(). Круглые скобки приводят к немедленному вызову функции.
//Функцию showApple в момент вызова checkGreen() нам вызывать не надо. Она должна быть вызвана позже, внутри функции checkGreem
checkGreen(array, showApple);
//Поэтому мы с вами функцию передаем без круглых скобок, чтобы не вызвать ее, а передать набор инструкций, заложенный в этой функции.
function showApple() {
  console.log("Я нашел яблоко");
}

//Что делать, если функция ожидает от нас параметр
function userFindsApple(user) {
  console.log(user + " нашел яблоко");
}
checkGreen(array, function() { //-функция обертка
  userFindsApple("superAdmin");
  //Если нам необходимо все же передать параметры, то для этого можно использовать функцию-обертку. Тогда мы закладываем не саму функцию userFindsApple, а тело функции, которое вызовет userFindsApple с нужными параметрами
})

