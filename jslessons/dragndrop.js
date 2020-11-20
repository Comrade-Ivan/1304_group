"use strict"

//let banana = document.querySelector(".banana");
// banana.style.position = "absolute";
// banana.style.top = 0;
// banana.style.left = 0;
// let counter = 0;
// let interval = setInterval(() => {
//   counter += 5;
//   banana.style.top = counter + "px";
//   banana.style.left = counter + "px";
//   if (counter > 500) {
//     clearInterval(interval);
//   }
// }, 100)

//Drag'n'Drop

let fruits = document.querySelectorAll(".fruits img");
for (let fruit of fruits) {
  fruit.addEventListener("mousedown", dragItem);
}

function dragItem(event) {
  event.preventDefault(); //Отключаем "Призрака картинки"
  let item = this;
  item.style.position = "absolute";
  item.style.zIndex = "99999"; //Делаем элемент поверх всех остальных
  console.log(item.getBoundingClientRect()); //Объект с координатами и шириной/высотой
  
  let belowElement = null; //Переменная, в которую будем класть элемент, который находится под бананом
  let cart = document.querySelector(".cart");
  
  //Получаем сдвиг по осям x и y
  let shiftX = event.clientX - item.getBoundingClientRect().left;
  let shiftY = event.clientY - item.getBoundingClientRect().top;
  
  //Элемент по центру
  //item.style.top = (event.clientY - item.getBoundingClientRect().height/2) + "px"; //event.clientY - текущая позиция курсора по оси Y
  //item.style.left = (event.clientX - item.getBoundingClientRect().width/2) + "px"; //event.clientX - текущая позиция курсора по оси X
  //Элемент там где взяли
  moveAt(event);
  document.addEventListener("mousemove", moveAt);
  
  function moveAt(event) {
    item.style.top = (event.clientY - shiftY) + "px";
    item.style.left = (event.clientX - shiftX) + "px";
    item.hidden = true;
    belowElement = document.elementFromPoint(event.clientX, event.clientY); //Получаем самый глубоко-вложенный элемент относительно текущего положения курсора
    item.hidden = false;
    
    if (belowElement == cart) {
      cart.style.backgroundColor = "lightyellow";
    } else {
      cart.style.backgroundColor = "";
    }
  }
  item.addEventListener("mouseup", function handler() {
    document.removeEventListener("mousemove", moveAt); //Элемент перестает двигаться
    item.removeEventListener("mouseup", handler); //Снимаем mouseup, чтобы не задваивать обработчик
    
    item.style.zIndex = "100";
    
    let resultInput = document.querySelector(".cart-result");
    if(belowElement == cart || belowElement.parentElement == cart) {
      cart.style.backgroundColor = "";
      for(let fruitInCart of cart.children) {
        if (fruitInCart == item) {
          return;
        }
      }
      resultInput.value = +resultInput.value + +item.getAttribute("cost");
      cart.append(item);
    } else {
      for(let fruitInFruits of document.querySelector(".fruits").children) {
        if (fruitInFruits == item) {
          return;
        }
      }
      resultInput.value -= item.getAttribute("cost");
      document.querySelector(".fruits").append(item);
    }
  })
  
}



