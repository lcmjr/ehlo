<?php

namespace App\Http\Controllers;

use App\ModelTextos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PorQueExistimos extends Controller
{
    function pagina(){
        $texto = ModelTextos::find(1);
        return view("por-que-existimos")->with('texto',$texto);
    }
}
