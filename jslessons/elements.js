"use strict"
//Изменение стилей
let paragraph = document.querySelector(".text");

function changeStyle() {
  console.log(paragraph);
  paragraph.style.color = "darkred";
  paragraph.style.textAlign = "center"; //kebab-case превращается в camelCase (text-align => textAlign)
  paragraph.style.backgroundColor = "magenta";
  paragraph.style.border = "2px solid darkred";
  paragraph.style.padding = "15px"; //Не забывайте про единицы измерения
}

function getStyle() {
  console.log(paragraph.style.textTransform); //Мы не можем получить значение свойства, прописанного в файле CSS или тэге style с помощью св-ва style
  console.log(paragraph.style.padding); //Но можем получить св-ва из атрибута style или которые мы уже задали в JS 
  return paragraph.style.textTransform;
}

function removeStyle() {
  paragraph.style.color = ""; //Чтобы вернуть стилям значения из CSS необходимо присвоить пустые кавычки
  paragraph.style.textAlign = ""; //"Верни как было"
  paragraph.style.backgroundColor = "";
  paragraph.style.border = "";
  paragraph.style.padding = "";
}
//Вычисленные св-ва
//Функция прибавляет margin
function addMargin(amount) {
  let computedStyle = getComputedStyle(paragraph); //Получаем объект с вычисленными свойствами
  let margin = computedStyle.marginTop; //Получаем значение margin-top
  margin = parseInt(margin); //Убираем единицы измерения из значения
  paragraph.style.marginTop = margin + amount + "px";
}

//Внутреннее содержимое элемента

function changeText() {
  let articleText = document.querySelector(".article-text");
  console.log(articleText.innerHTML); //Получаем внутреннее содержимое элемента
  articleText.innerHTML = "Привет мир!"; //Изменяем внутреннее содержимое
}

function addComment() {
  let commentsContainer = document.querySelector(".comments");
  commentsContainer.innerHTML += "<p>Комментарий</p>"; //Можно использовать тэги внутри innerHTML. 
}

function changeText2() {
  let articleText = document.querySelector(".article-text");
  console.log(articleText.innerText); //Получаем внутреннее содержимое элемента
  articleText.innerText = "<b>Привет мир!</b>"; //Изменяем внутреннее содержимое без тэгов
}

function changeText3() {
  let articleText = document.querySelector(".article-text");
  let text = "<script>location.href = 'https://yandex.ru'</script>";
  articleText.textContent = text;
}

//Работы с атрибутами

function calculate() {
  let inputArg1 = document.querySelector(".first-argument");
  let inputArg2 = document.querySelector(".second-argument");
  let resultInput = document.querySelector(".result-input");
  //Чтобы считать значение из input, необходимо обратиться к его атрибуту value как к св-ву
  let arg1 = +inputArg1.value; //Получаем значение из input
  let arg2 = +inputArg2.value; //тип данных value - строка
  let result = arg1 + arg2;
  resultInput.value = result;
  //К атрибутам, существующим в HTML можно обращаться как к своствам. Чаще всего это атрибуты value, src, href.
}

function calculateMoney() {
  //Собственные атрибуты невозможно считать как св-ва, поэтому для них мы используем методы работы с атрибутами getAttribute и setAttribute
  let resultInput = document.querySelector(".result-money-input")
  let rub100 = document.querySelector(".money img[cost='100']");
  let rub500 = document.querySelector(".money img[cost='500']");
  let rub100Cost = +rub100.getAttribute("cost"); //Значение атрибута - строка
  let rub500Cost = +rub500.getAttribute("cost"); //Получаем значение атрибута
  let result = rub100Cost + rub500Cost;
  resultInput.value = result;
}

function change500RubPicture() {
  //https://s00.yaplakal.com/pics/pics_original/7/8/9/11837987.jpg
  let rub500 = document.querySelector(".money img[cost='500']");
  console.log(rub500.src); //Получаем абсолютную ссылку
  console.log(rub500.getAttribute("src")); //Получаем относительную ссылку
  rub500.setAttribute("src", "https://s00.yaplakal.com/pics/pics_original/7/8/9/11837987.jpg") //Меняем картинку у 500 рублевой монеты
}

//Работа с классами
let classParagraph = document.querySelector(".classes p");
function getClass() {
  console.log(classParagraph.classList);
  return classParagraph.className
}

function changeClass1() {
  classParagraph.className = "text-right p-3 my-5 text-danger";
}
function changeClass2() {
  classParagraph.classList.add("text-primary");
}
function removeClass1() {
  classParagraph.className = ""; 
}
function removeClass2() {
  classParagraph.classList.remove("mt-3");
}

//Как узнать что делать с элементом?
//Какой из инструментов использовать?
// 1. Изменение стилей (.style.) - Изменить стили CSS. (Цвета, позиционирование и расположение, отступы. 2 часть, раздел 1.8.)
// 2. Работа с атрибутами (.getAttribute() .setAttribute())
// - src href value
// elem.value .getAttribute("src") .setAttribute("src", "img/banana.jpg") 2 часть раздел 1.6
// Или необходима дополнительная информация об элементе (например ID из базы данных). В таком случае мы добавляем элементу собственные атрибуты. 2 часть. раздел 1.6
// 2.1 Работа с классами (.classList .className). 2 часть, раздел 1.8.
// 3. Внутреннее содержимое (.innerHTML) 
// 4. Изменение документа (создать/удалить/переместить элемент)
// let array = ["Яблоко", "Банан", "Груша"];

// checkGreen(array);
// function checkGreen(fruits) {
//   for(let i = 0; i < fruits.length; i++) {
//     if (fruits[i] == "Яблоко") {
//       return true;
//     }
//   }
//   return false;
// }

