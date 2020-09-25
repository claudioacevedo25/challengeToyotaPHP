<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;
use App\Models\Categoria;

class ModelosController extends Controller
{
    public function listarModelos(){
        $categorias = Categoria::all();
        $autos = Modelo::all();
        $vac = compact('autos', 'categorias');
        return view('modelos', $vac);
    }

    public function fichaModelo(){
        return view('fichaModelo');
    }
    
    public function fitroModelo($id){
        $categorias = Categoria::all();
        $autos = Modelo::all()->where('id_categoria', '=', $id);
        $vac = compact('autos', 'categorias');
        return view ('modelos', $vac);
    }
}
