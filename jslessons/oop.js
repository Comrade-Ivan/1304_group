"use strict"
class User {
  constructor(name, lastname, birthday, role) { //Метод, вызваемый при создании экземпляра класса (объекта)
    this.name = name; //Описываем свойство
    this.lastname = lastname;
    this.birthday = birthday;
    this.role = role;
    
    //Так как конструктор это обычная функция мы также можем создавать переменные через let если они нам необходимы
    let today = new Date(); //Получаем сегодняшний день
    let age = today.getYear() - this.birthday.getYear();
    this.age = age;
    
  }
  //Геттеры и сеттеры
  get name() { //Функция, которая отрабатывает, когда мы собираемся считать свойство
    return this._name[0].toUpperCase() + this._name.slice(1);
  }
  set name(value) { //Функция, которая отрабатывает, когда мы собираемся записать новое значение в свойство
    if (typeof(value) != "string") {
      return alert("Неверный тип данных");
    }
    if (value.length < 3) {
      return alert("Слишком короткое имя");
    }
    this._name = value;
  }
  
  getFullName() { //Создаем метод, который возвращает полное имя
    return this.name + " " + this.lastname;
  }
  
  sayHi() { //Создаем метод
    alert("Добрый день, " + this.name);
  }
}

let user1 = new User("Василий", "Петров", new Date("1987-11-23"), "admin"); //Создание экземпляра класса
//*Создание даты - new Date
let user2 = new User("cергей", "Иванов", new Date("1980-06-13"), "user");


// user1.sayHi();
// console.log(user1.age);
//user2.sayHi();
// console.log(user2.age);
// user1.name = "Иван";
// console.log(user1.getFullName());
// user1.name = "Василий";
 console.log(user1.name);
user1.name = "Ян";
user1.role = "superAdmin";





