<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Challenge</title>
        <link rel="stylesheet" href="{{asset('css/modelos.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="Home-modelos">
      <div class="Rectangle">
        <ul>
          <div class="nav">
            <li><a href="{{route('modelos')}}">Modelos</a></li>
            <li><a href="{{route('modelos')}}">Ficha de modelo</a></li>
          </div>
          <div class="menu">
            <ul><li><a href="">Menu</a></li></ul>
          </div>
        </ul>
      </div>
      <h2 class="Descubr-todos-los-m">Descubri todos los modelos</h2><hr>
      @foreach ($autos as $item=>$key)
          <div class="row">
            <div class="column">
              <div>
                <h4>{{$key['nombre']}}</h4>
                <small>{{$key['descripcion']}}</small>
              </div>
              <img src="./{{$key['img']}}" alt="">
            </div>
          </div>
      @endforeach
      
    </body>
</html>
