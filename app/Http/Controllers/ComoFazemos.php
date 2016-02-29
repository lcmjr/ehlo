<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelTextos;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ComoFazemos extends Controller{
    function pagina(){
        $textos = ModelTextos::where('id','>',1);
        return view("como-fazemos")->with('textos',$textos);
    }
}
