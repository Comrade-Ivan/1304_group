<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <title>Список дел</title>
    <style>
      body {
        overflow-x: hidden;
      }
      .task {
        display: flex;
      }
      .task>div {
        border: 2px solid lightgrey;
        padding: 15px;
        box-sizing: border-box;
      }
      .task-title {
        flex-grow: 1;
      }
    </style>
  </head>
  <body>
    <div class="container" id="app">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center todo-header mt-5">Список дел</h1>
        </div>
        <div class="col-10">
          <div class="input-group mb-3 mt-4">
            <input type="text" class="form-control" placeholder="Вынести мусор" v-model="newTask" v-on:keyup.enter="addNewTask">
            <div class="input-group-append">
              <button class="btn btn-outline-primary" type="button" v-on:click="addNewTask">Добавить</button>
            </div>
          </div>
          <div class="tasks">
            <task v-for="task in tasks" v-bind:key="task.id" v-bind:task="task"></task>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="todo.js"></script>
  </body>
</html>