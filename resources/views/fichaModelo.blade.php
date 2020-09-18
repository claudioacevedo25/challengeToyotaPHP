<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Challenge</title>
        <link rel="stylesheet" href="{{asset('css/ficha.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="Rectangle5">
            <navbar>
                <ul>
                  <div class="nav">
                    <li><a href="{{route('modelos')}}">Modelos</a></li>
                    <li><a href="{{route('ficha')}}">Ficha de modelo</a></li>
                  </div>
                  <div class="menu">
                    <ul><li><a href="">Menu</a></li></ul>
                  </div>
                </ul>
            </nabvar>
        </div>
          <div class="row">
              <div class="column">
                <img src="./img/img.jpg" srcset="./img/img@2x.jpg 2x, ./img/img@3x.jpg 3x" class="img">
              </div>
              <div class="column">
                    <h4 class="SR">Hilux DX/SR</h4>
                    <h2 class="Preparada-para-cualq">Preparada para cualqueir desafio</h2>
                    <p class="Texto-lorem-ipsum-do">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo natus pariatur molestias, neque dolores ducimus delectus voluptas quasi sed saepe.</p>
              </div>
          </div><br><br>
          <div class="row2">
              <div class="column2">
                 <img class="Image" src="./img/image(3).jpg" alt="">
                 <h5 class="Nuevos-motores-Toyot">Nuevos motores Toyota</h5>
                 <small class="Dos-alternativas-die">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus minus quod excepturi </small>
              </div>
              <div class="column2">
                  <img class="Image" src="./img/image.jpg" alt="">
                  <h5 class="Suspensin-mejorada">Suspencion mejorada</h5>
                  <small class="Mayor-confort-de-mar">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique impedit repellat </small>
              </div>
              <div class="column2">
                  <img class="Image" src="./img/image(1).jpg" alt="">
                  <h5 class="Transmisin-automti">Transmicion automatica</h5>
                  <small class="Posibilidad-de-elecc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique impedit repellat hic</small>
              </div>
              <div class="column2">
                  <img class="Image" src="./img/image(2).jpg" alt="">
                  <h5 class="Transmisin-manual">Transmision manual</h5>
                  <small class="Posibilidad-de-elecc-Copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique impedit repellat hic </small>
              </div>
          </div><br>
          <div class="row2">
                <div class="column">
                        <h4 class="Ttulo-de-20-px">Titulo de 20 px</h4>
                        <p class="Texto-lorem-ipsum-do">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur laborum alias nobis tempora et soluta repudiandae, velit expedita numquam reiciendis accusantium?</p>
                </div>
                <div class="column">
                    <img src="./img/1.jpg" alt="">
                </div>
           </div>
              <div class="row2">
                  <div class="column">
                    <img src="./img/3.jpg" alt="">
                  </div>
                    <div class="column">
                        <h4 class="Ttulo-de-20-px">Titulo de 20 px</h4>
                        <p class="Texto-lorem-ipsum-do">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum iste nemo, harum vitae vero esse, minus omnis eveniet tempora porro</p>
                    </div>
              </div>
    </body>
    
</html>
