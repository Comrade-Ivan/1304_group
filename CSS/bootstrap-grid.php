<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Сетка Bootstrap</title>
    <style>
      div[class*="col"] {
        min-height: 100px;
        background-color: rgb(50, 50, 255);
        border: 2px solid rgb(255, 50, 50);
        box-sizing: border-box;
      }
      div[class*="col"]:nth-child(2n) {
        background-color: rgb(50, 255, 50);
      }
      div[class*="col"]:nth-child(2n+1) {
        background-color: rgb(255, 255, 50);
      }
    </style>
  </head>
  <body>
    <div class="container"> <!--container-fluid(всегда во всю ширину экрана)-->
      <div class="row"> <!--flex-контейнер (display:flex)-->
        <div class="col-4"></div> <!--div занимает 4 колонки из 12-->
        <div class="col-8"> <!--div занимает 8 колонок из 12-->
          <div class="row">
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
          </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-2"></div>
        <div class="col-8"></div>
        <div class="col-2"></div>
      </div>
      <!--Адаптивная сетка-->
      <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-8 p-5">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ullam, reprehenderit, ex, dicta nobis incidunt quas non nisi cumque fugit neque quidem reiciendis fugiat voluptate optio deserunt corporis maxime doloribus aut dolore. Neque quam deserunt vero facere sint. Numquam, expedita sequi eligendi fugit fuga temporibus non in dolore illum minus officiis tenetur ducimus voluptatibus ea aliquid necessitatibus nam reprehenderit provident doloribus a est qui harum facilis voluptates molestias ad animi omnis obcaecati nisi! Quidem eius quaerat magnam sint repellendus aliquid. Earum dolore veritatis ex. Dolor, suscipit, modi hic quibusdam labore maiores dolore officiis quae vitae libero autem voluptatibus iste quisquam.</p>
        </div>
        <div class="col-12 col-sm-6 col-md-4"></div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-6"></div>
        <div class="col-12 col-sm-6 col-md-9 col-lg-6"></div>
      </div>
      <!--Отступы-->
      <div class="row mt-4">
        <div class="col-4 col-md-6"></div>
        <div class="col-4 offset-4 col-md-6 offset-md-0"></div> <!--offset - отступ offset-0 - отменить отступ-->
        <div class="col-12"></div>
      </div>
      <!--Прячем-показываем-->
      <div class="row mt-4">
        <div class="col-12">1</div>
        <div class="col-12 d-none d-md-block">2</div> <!--d-размер-none - скрываем col d-размер-block - показываем col (display:none, display:block)-->
        <div class="col-12">3</div>
      </div>
      <!--Порядок-->
      <div class="row mt-4">
        <div class="col-12 order-1 order-md-4">1</div> <!--order - порядок-->
        <div class="col-12 order-2 order-md-3">2</div> <!-- Если меняете order - удобнее всего задать его изначальные значения для каждого элемента, чтобы было удобнее их потомэд-->
        <div class="col-12 order-3 order-md-2">3</div>
        <div class="col-12 order-4 order-md-1">4</div>
      </div>
      <!--Пример-->
      <div class="row mt-4">
        <div class="col-12 order-1 col-sm-6 col-md-8 order-lg-2 col-lg-6">1</div>
        <div class="col-12 order-2 col-sm-6 col-md-2 offset-md-2 order-lg-1 col-lg-6 offset-lg-0">2</div>
        <div class="col-12 order-3 d-none col-sm-4 d-sm-block col-md-7 col-lg-6">3</div>
        <div class="col-12 order-4 col-sm-4 col-md-5 col-lg-6">4</div>
        <div class="col-12 order-5 col-sm-4 col-md-12">5</div>
      </div>
      
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>