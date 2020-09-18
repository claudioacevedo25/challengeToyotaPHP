<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelosController extends Controller
{
    public function listarModelos(){
        $autos = [
            ["nombre"=>'Etios','descripcion'=>'2019 | $815900','img'=>'img/etios.jpg'],
            ["nombre"=>'Yaris','descripcion'=>'2020 | $815900','img'=>'img/yaris.jpg'],
            ["nombre"=>'Corolla','descripcion'=>'2018 | $815900','img'=>'img/corolla.jpg'],
            ["nombre"=>'Prius','descripcion'=>'2019 | $815900','img'=>'img/corolla.jpg'],
            ["nombre"=>'Camry','descripcion'=>'2018 | $815900','img'=>'img/camry.jpg'],
            ["nombre"=>'Toyota 86','descripcion'=>'2020 | $815900','img'=>'img/toyota-86.jpg'],
            ["nombre"=>'Innova','descripcion'=>'2019 | $815900','img'=>'img/innova.jpg'],
            ["nombre"=>'SW4','descripcion'=>'2019 | $815900','img'=>'img/sw-4.jpg'],
            ["nombre"=>'RAV4','descripcion'=>'2017 | $815900','img'=>'img/rav-4.jpg'],
            ["nombre"=>'Land Cruiser Prado','descripcion'=>'2018 | $815900','img'=>'img/prado.jpg'],
            ["nombre"=>'Land Cruiser 200','descripcion'=>'2020| $815900','img'=>'img/cruiser.jpg'],
            ["nombre"=>'Hilux','descripcion'=>'2020 | $815900','img'=>'img/hilux.jpg']
        ];
        $vac = compact('autos');
        return view('modelos', $vac);
    }

    public function fichaModelo(){
        return view('fichaModelo');
    }
}
