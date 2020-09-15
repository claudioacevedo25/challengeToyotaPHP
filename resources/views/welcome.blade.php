<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Challenge</title>
    <link rel="stylesheet" href="{{asset('css/navegacion.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="Rectangle">
       <div class="Rectangle-2-Copy">
           <div class="Rectangle-2">
            <img src="{{asset('img/fill-1.svg')}}" class="Fill-1"><br>
               <ul>
               <li><a class="Modelos" href="{{route('modelos')}}">Modelos</a></li>
                   <li><a href="" class="Boton-2">Servicios y Accesorios</a></li>
                   <li><a href="" class="Boton-3">Aplicacion</a></li>
                   <li><a href="" class="Boton-4">Reviws y Comunidad</a></li><br>
                   <hr><br>
                   <li><a href="" class="Toyota-Mobility-Serv" >Toyota Mobility Service</a></li>
                   <li><a href="" class="Toyota-Gazoo-Racing">Toyota Gazoo Racing</a></li>
                   <li><a href="" class="Toyota-Hbridos">Toyota Híbridos</a></li><br>
                   <hr><br>
                   <li><a href="" class="Boton-1">Consesiornarios</a></li>
                   <li><a href="" class="Test-Drive">Test Drive</a></li>
                   <li><a href="" class="Contacto">Contacto</a></li>
               </ul>
            </div>
            <div>
                <ul>
                    <li><a class="Boton-1">Actividades</a></li>
                    <li><a class="Servicios-al-Cliente">Servicios al Client</a></li>
                    <li><a class="Boton-3">Ventas Especiales</a></li>
                    <li><a class="Boton-4">Innovacion</a></li>
                    <li><a class="Boton-5">Prensa</a></li>
                    <li><a class="Boton-6">Acerca de...</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
