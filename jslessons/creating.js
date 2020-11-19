
// function createAlert(text) {
//   let alertElem = document.createElement("div"); //Создает тэг для элемента и возвращает объект HTMLElement
//   alertElem.className = "alert alert-success";
//   alertElem.setAttribute("role", "alert");
//   alertElem.innerHTML = text;
//   /*
//   node.append(...nodes or strings) – добавляет узлы или строки в конец node,
//   node.prepend(...nodes or strings) – вставляет узлы или строки в начало node,
//   node.before(...nodes or strings) –- вставляет узлы или строки до node,
//   node.after(...nodes or strings) –- вставляет узлы или строки после node,
//   node.replaceWith(...nodes or strings) –- заменяет node заданными узлами или строками.
//   */
//   let body = document.body;
//   // body.append(alertElem); // Добавляем в конец элемента
//   //body.prepend(alertElem); //Добавляем в начало элемента
//   let h2 = document.querySelector(".adding-header");
//   //h2.before(alertElem); //Добавляем ДО элемента
//   //h2.after(alertElem); //Добавляем ПОСЛЕ элемента
//   h2.replaceWith(alertElem); //Добавляем ВМЕСТО элемента
// }

// function removeHeader() {
//   let h2 = document.querySelector(".adding-header");
//   h2.remove() //Удаляем элемент
// }

// function cloneHeader() {
//   let h2 = document.querySelector(".adding-header");
//   let clone = h2.cloneNode(true); //Создет копию элемента
//   h2.after(clone); //Копии тоже необходимо 
// }

// //Создание элементов для массива
// const users = [
//   {id: 1, email: "vasya123@gmail.com", name: "Василий", login: "vasya123"},
//   {id: 2, email: "petya123@gmail.com", name: "Петр", login: "petya123"},
//   {id: 3, email: "sergey123@gmail.com", name: "Сергей", login: "superAdmin"},
// ];
// createRows(users);  
// function createRows(array) {
//   let table = document.querySelector(".user-table");
//   for (let user of array) {
//     let row = document.createElement("tr");
//     row.innerHTML = `
//       <td>${user.id}</td>
//       <td>${user.email}</td>
//       <td>${user['name']}</td>
//       <td>${user.login}</td>
//     `;
//     table.append(row);
//   }
// }

//Анимации появления

function createAlert(text) {
  let alertElem = document.createElement("div");
  alertElem.className = "alert alert-success";
  alertElem.setAttribute("role", "alert");
  alertElem.innerHTML = text;
  alertElem.style.opacity = 0; //Начальное положение
  alertElem.style.transform = "translateY(30%)";
  let body = document.body;
  body.append(alertElem);
  
  setTimeout(() => { //Чтобы транзиция отработала изменения должны быть записаны в timeout с 0 временем. (Или 10-30 мс)
    alertElem.style.opacity = "100%"; //Положение после анимации
    alertElem.style.transform = "translateY(0)";
  }, 0);
}
//Анимация удаления
function deleteAlert() {
  let alertElem = document.querySelector(".alert");
  alertElem.style.opacity = 0; //Начальное положение
  alertElem.style.transform = "translateY(-30%)";
  alertElem.addEventListener("transitionend", () => { //Отлавливаем событие окончания транзиции
    alertElem.remove();
  });
  
}

function showErrorAlert(text) {
  let errorAlert = document.querySelector(".error");
  let alertText = errorAlert.querySelector("span");
  errorAlert.style.width = "100%";
  errorAlert.style.padding = "1rem";
  errorAlert.addEventListener("transitionend", () => {
    alertText.style.opacity = "100%";
  });
}

const users = [
  {id: 1, email: "vasya123@gmail.com", name: "Василий", login: "vasya123"},
  {id: 2, email: "petya123@gmail.com", name: "Петр", login: "petya123"},
  {id: 3, email: "sergey123@gmail.com", name: "Сергей", login: "superAdmin"},
];
function createRows(array) {
  let table = document.querySelector(".user-table");
  for (let i = 0; i < array.length; i++) {
    setTimeout(() => { //Показываем элементы по одному
      let row = document.createElement("tr");
      let user = array[i];
      row.style.opacity = 0;
      row.style.transition = "all .5s ease";
      row.innerHTML = `
        <td>${user.id}</td>
        <td>${user.email}</td>
        <td>${user['name']}</td>
        <td>${user.login}</td>
      `;
      table.append(row);
      setTimeout(() => {
        row.style.opacity = "100%";
      }, 30);
    }, 1000 * i);
  }
}




