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
        <div class="Rectangle5">
          <ul>
            <div class="nav">
              <li><a href="{{route('modelos')}}">Modelos</a></li>
              <li><a href="{{route('ficha')}}">Ficha de modelo</a></li>
            </div>
            <div class="menu">
              <ul><li><a href="/">Menu</a></li></ul>
            </div>
          </ul>
        </div>
        <section class="Container">
            
          <div>
              @yield('content')
          </div>
            
        </section>
        <footer><div class="Footer"></div></footer>
    </body>
    
</html>
