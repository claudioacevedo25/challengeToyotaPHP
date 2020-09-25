@extends('layouts.app')

@section('content')
    <h2 class="Descubr-todos-los-m">Descubri todos los modelos</h2><br>
    <div class="Rectangle">
        <div class="nav">
          <ul>
           
            <a href="{{route('modelos')}}"><li class="Filtrar-por">Todos</li></a>
            @foreach ($categorias as $item=>$key)
            
            <a href="/filtrado/{{$key['id']}}"><li class="Filtrar-por">{{$key['detalle']}}</li></a>
                 
                 
            @endforeach
         </ul> 
          
        </div>
        <div class="menu">
          <ul>
            <li class="Ordenar-por">Ordenar por</li>
          </ul>
        </div>
    </div><hr>
      @foreach ($autos as $key)
      <div class="row">
        <div class="column">
          <div>
            <h4>{{$key->nombre}}</h4>
            <small>{{$key->descripcion}}</small>
          </div>
          <img src="/img/{{$key->img}}" alt="">
        </div>
      </div>
      @endforeach
     
@endsection