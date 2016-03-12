<?php

namespace App\Http\Controllers;

use App\ModelEquipe;
use App\ModelQuemSomos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuemSomosController extends Controller
{
    function pagina(){
        $data_view['equipe'] = ModelEquipe::all();
        $data_view['quem_somos'] = ModelQuemSomos::find(1);
        return view("quem-somos")->with('data_view',$data_view);
    }
}
