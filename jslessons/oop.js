"use strict"
// class User {
//   constructor(name, lastname, birthday, role) { //Метод, вызваемый при создании экземпляра класса (объекта)
//     this.name = name; //Описываем свойство
//     this.lastname = lastname;
//     this.birthday = birthday;
//     this.role = role;
    
//     //Так как конструктор это обычная функция мы также можем создавать переменные через let если они нам необходимы
//     let today = new Date(); //Получаем сегодняшний день
//     let age = today.getYear() - this.birthday.getYear();
//     this.age = age;
    
//   }
//   //Геттеры и сеттеры
//   get name() { //Функция, которая отрабатывает, когда мы собираемся считать свойство
//     return this._name[0].toUpperCase() + this._name.slice(1);
//   }
//   set name(value) { //Функция, которая отрабатывает, когда мы собираемся записать новое значение в свойство
//     if (typeof(value) != "string") {
//       return alert("Неверный тип данных");
//     }
//     if (value.length < 3) {
//       return alert("Слишком короткое имя");
//     }
//     this._name = value;
//   }
  
//   getFullName() { //Создаем метод, который возвращает полное имя
//     return this.name + " " + this.lastname;
//   }
  
//   sayHi() { //Создаем метод
//     alert("Добрый день, " + this.name);
//   }
// }

// let user1 = new User("Василий", "Петров", new Date("1987-11-23"), "admin"); //Создание экземпляра класса
// //*Создание даты - new Date
// let user2 = new User("cергей", "Иванов", new Date("1980-06-13"), "user");


// // user1.sayHi();
// // console.log(user1.age);
// //user2.sayHi();
// // console.log(user2.age);
// // user1.name = "Иван";
// // console.log(user1.getFullName());
// // user1.name = "Василий";
// console.log(user1.name);
// user1.name = "Ян";
// user1.role = "superAdmin";

//Наследование

class Animal {
  static zooName = "Московский зоопарк";
  
  constructor(nick, gender, age, weight) {
    this.nick = nick;
    this.gender = gender;
    this.age = age;
    this.weight = weight;
  }
  eat() {
    this.weight += 1;
    console.log("Хрум, хрум");
  }
  run() {
    this.weight -= 1;
    console.log(`${this.nick} бежит`);
  }
  sleep() {
    console.log(`${this.nick} спит`);
  }
}

// class Rabbit extends Animal {
//   //Rabbit - класс наследник, он наследует все свойства и методы класса родителя, если мы не укажем иное
//   hop() { //Дополнительный метож
//     this.weight -= 1;
//     console.log(`${this.nick} прыгает`);
//   }
// }

// class Horse extends Animal {
//   constructor(nick, gender, breed, age, weight) {
//     super(nick, gender, age, weight); //Вызываем конструктор родителя
//     //super - Обращение к классу-родителю
//     this.breed = breed;
//   }
//   run() {
//     super.run(); //Вызываем метод run из родительского класса
//     console.log(`${this.nick} делает тыг-дык тыг-дык`);
//   }
// }

// let rabbit = new Rabbit("Крош", "М", 3, 4);
// rabbit.eat()
// rabbit.run()

// let horse = new Horse("Фелл", "М", "Рысак", 7, 500);
// horse.run()
// console.log(horse);

//Инкапсуляция
//Приватные и защищённые методы и свойства
//Модификаторы доступа
// public - публичные свойства и методы, доступны снаружи класса
// private - приватные свойтсва и методы, доступны только внутри текущего класса
// protected - защищенные свойства и методы, доступны внутри текущего класса и внутри классов-наследников 

// class CoffeeMachine {
//   constructor() {
//     this._waterAmount = 0; //Защищенное свойство
//     this._power = "100W";
//   }
//   set waterAmount(value) {
//     if (value < 0) return console.error("Нельзя налить отрицательные количество воды");
//     this._waterAmount += value;
//   }
//   get waterAmount() {
//     return this._waterAmount;
//   }
//   get power() { //Если у защищенного свойства есть только геттер, то это свойство становится "Только для чтения" (Read only)
//     return this._power;
//   }
// }

// let coffeeMachine = new CoffeeMachine();
// coffeeMachine.waterAmount = -500;
// coffeeMachine.waterAmount = 200;
// console.log(coffeeMachine.waterAmount);
// coffeeMachine.power = "70W";

//Статичные методы и свйства
//Это свойства и методы, которые могут быть вызваны без создания экземпляра класса
//прим. Math.round();

// class MyAwesomeLibrary {
//   static author = "Василий Петров";
  
//   static myAwesomeFunction() {
//     console.log("Была вызвана очень полезная функция");
//   }
// }

// console.log( MyAwesomeLibrary.author );
// MyAwesomeLibrary.myAwesomeFunction();

//Пример использования классов

let catalog = [
  {id: 1, name: "Яблоко", price: "40", description: "Вкусное яблоко", image: "http://edu.ivandp.su/fruits/apples.jpg"},
  {id: 2, name: "Банан", price: "80", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/banana.jpg"},
  {id: 3, name: "Грейпфрут", price: "150", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/garnet.jpg"},
  {id: 4, name: "Виноград", price: "130", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/grape.jpg"},
  {id: 5, name: "Дыня", price: "300", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/mellon.jpg"},
]

class ProductCard {
  constructor(id, name, price, description, image) {
    this.id = id;
    this.name = name;
    this._price = price;
    this.description = description;
    this.image = image;
    this._amount = 0;
  }
  render() {
    this.elem = document.createElement("div");
    this.elem.className = "col-3 mt-3";
    this.elem.innerHTML = `
      <div class="card">
        <img src="${this.image}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">${this.name}</h5>
          <h6>${this._price}&#8381;</h6>
          <p class="card-text">${this.description}</p>
          <div class="card-body-buttons">
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn btn-secondary text-white font-weight-bold minus-button">-</button>
              </div>
              <input type="text" class="form-control text-center font-weight-bold counter" value="0" disabled>
              <div class="input-group-append">
                <button class="btn btn-secondary text-white font-weight-bold plus-button">+</button>
              </div>
            </div>
            <button class="btn btn-primary ml-2">Заказать</button>
          </div>
        </div>
      </div>
    `;
    let catalog = document.querySelector(".catalog");
    catalog.append(this.elem);
    
    let minusButton = this.elem.querySelector(".minus-button");
    let plusButton = this.elem.querySelector(".plus-button");
    minusButton.addEventListener("click", this.minus.bind(this));
    //.bind(object) привязывает object как this внутри функции (уч. 1 часть - 6.10)
    plusButton.addEventListener("click", this.plus.bind(this));
  }
  
  set amount(value) {
    if (value < 0) return;
    let counter = this.elem.querySelector(".counter");
    this._amount = value;
    counter.value = this._amount;
  }
  
  get amount() {
    return this._amount;
  }
  
  plus() {
    this.amount += 1;
  }
  minus() {
    this.amount -= 1;
  }
}

createCards(catalog);

function createCards(cards) {
  for(let card of cards) {
    let productCard = new ProductCard(card.id, card.name, card.price, card.description, card.image)
    productCard.render();
  }
}




