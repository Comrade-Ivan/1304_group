"use strict";

console.log( $("h1") ); //Получаем объект JQuery
console.log( $("h1")[0] ); //Вытаскиваем HTMLElement из объекта Jquery

let searchHeader = $(".search-header"); //Можно записывать результаты поиска в переменные
$(searchHeader).css("color", "red"); //Для улучшения читабельности, когда работаете с методами jquery всегда используйте конструкцию $(variable/selector).

//Изменение внутреннего содержимого (контента)
console.log( $(".search-header").html() ); //аналог innerHTML
$(".search-header").html("Измененный поиск элементов");

$(".value-input").val("Какой-то пользовательский текст"); //Аналог .value
console.log( $(".value-input").val() );

//Работа с атрибутами
let group = "main-info";
console.log( $(".value-input").attr("type") ); //аналог .getAttribute()
$(".value-input").attr("title", "Наш инпут"); //аналог .setAttribute()
$(".value-input").attr({
                    "name" : "some-input",
                    "tab-index" : "1",
                    "group" : `group-${group}`,
                  })

//Работа со стилями
console.log( $(".box").css("border-radius") );
$(".box").css("border-color", "blue");
$(".box").css({
            "background-color" : "yellow",
            "margin-left" : "100px",
          })
          
//Работа с классами
$(".value-input").addClass("bg-success form-control");
$(".value-input").removeClass("bg-success");
//$(".value-input").toggleClass("d-none");

$(".box-2").html("Текст внутри")
            .attr("title", "Это квадрат")
            .css({
              "border-color" : "red",
              "background-color" : "yellow",
              "margin-left" : "100px",
            })
            .addClass("text-center");
            
//События
$(".my-button").click(function () {
  $(".box-2").css({
                "margin-left" : "0",
                "background-color": "green",
              })
})

$(".my-button").on("mouseover", changeColor); //аналог .addEventListener

$(".box-2").click(function() {
  $(".my-button").off("mouseover", changeColor); //аналог .removeEventListener
})

function changeColor() {
 $(this).removeClass("btn-primary")
        .addClass("btn-success")
}

//Анимации
//!JQuery не умееет переливать цвета
// setTimeout(() => {
//   $(".box-3").hide(500)
//               .show(500)
//               .fadeOut(500)
//               .fadeIn(500)
//               .slideUp(500)
//               .slideDown(500)
//               .delay(2000) //Задержка, только для анимаций
//               .animate({
//                 "left" : "300px",
//                 "width" : "150px",
//                 "height" : "150px",
//               })
//               .animate({
//                 "top" : "300px",              
//               })
//               .animate({
//                 "left" : "0",
//               })
//               .animate({
//                 "top" : "0",
//                 "width" : "200px",
//                 "height" : "200px",
//               }, function() {
//                 alert("Анимация завершена!");
//               })
// }, 2000)
moveBox();
function moveBox() {
  $(".box-3").animate({
                "left" : "300px",
                "width" : "150px",
                "height" : "150px",
              })
              .animate({
                "top" : "300px",              
              })
              .animate({
                "left" : "0",
              })
              .animate({
                "top" : "0",
                "width" : "200px",
                "height" : "200px",
              }, moveBox);
}





