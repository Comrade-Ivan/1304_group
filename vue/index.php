<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Основы VUE</title>
    <style>
      .box {
        width: 200px;
        height: 200px;
        border: 2px solid black;
      }
    </style>
  </head>
  <body class="p-3">
    <div id="app">
      <h2>{{ greetMessage() }}</h2>
      <h1>Заголовок 1: {{ message }}</h1>
      <h2>{{ counter }} <span v-html="rawHTML"></span></h2>
      <table border="1">
        <tr v-for="product in catalog" v-bind:key="product.id">
          <td class="p-2">{{ product.name }}</td>
          <td class="p-2">{{ product.price }}</td>
          <td class="p-2">{{ product.short_description }}</td>
          <td class="p-2"><img v-bind:src="product.image_src" alt=""></td>
          <td class="p-2"><button class="btn btn-warning">Купить</button></td>
        </tr>
      </table>
      <hr>
      <input v-bind:type="inputType" v-bind:disabled="inputDisabled">
      <hr>
      <h3> {{ invertedMessage }}</h3>
      <button class="btn btn-primary" v-on:click="invertMessage">Перевернуть сообщение</button>
      <h3>{{ reverseInvertedMessage }}</h3>
      <hr>
      <img v-on:mousedown.prevent="" src="http://edu.ivandp.su/fruits/mellon.jpg" alt="">
      <hr>
      <h3>{{ fullname }}</h3>
      <input type="text" placeholder="Имя" v-model.lazy="name">
      <input type="text" placeholder="Фамилия" v-model.lazy="lastname">
      <hr>
      <div class="alert" v-bind:class="{'alert-success' : success, 'alert-danger' : !success}">Сообщение</div>
      <button class="btn btn-secondary" v-on:click="success = !success">Сменить</button>
      <hr>
      <div>
        <button class="btn btn-success" v-on:click="showBox = !showBox">Показать</button>
      </div>
      <template v-if="showBox">
        <input type="text" v-model.lazy="boxColor">
        <input type="number" v-model="boxBorderRadius">
        <div class="box mt-2" v-bind:style="{background: boxColor, 'border-radius': boxBorderRadius + '%', }"></div>
      </template>
      <span v-else>Тут была коробка</span>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
      "use strict"
      const app = new Vue({
        el: "#app",
        data: {
          message: "Знакомимся с VUE",
          counter: 0,
          catalog: [],
          rawHTML: "<button class=\"btn btn-primary\">Кнопка</button>",
          inputDisabled: false,
          inputType: "text",
          invertedMessage: "Сообщение",
          name: "Василий",
          lastname: "Петров",
          success: true,
          boxColor: "",
          boxBorderRadius: 0,
          showBox: true,
          //Даже если вы собираетесь использовать св-во позже, его все равно необходимо создать с начальным значением
        },
        created: function() { //Хук, вызываемый после установки всех зависимостей и реактивности
          console.log(this.message);
          fetch("../php/store/getAllProducts.php")
            .then(response => response.json())
            .then(result => this.catalog = result);
        },
        methods: {
          invertMessage: function() {
            this.invertedMessage = this.invertedMessage.split("").reverse().join("");
          },
          greetMessage: function() {
            let messages = ["Hello", "Привет", "Hola", "Hallo", "Я сас"];
            let random = Math.floor(Math.random() * messages.length);
            return messages[random];
          }
        },
        computed: {
          reverseInvertedMessage: function() {
            return this.invertedMessage.split("").reverse().join("");
          },
          fullname: function() {
            return this.name + " " + this.lastname;
          },
        }
        
      });
    </script>
  </body>
</html>