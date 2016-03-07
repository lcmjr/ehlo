<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelTextos;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ComoFazemos extends Controller{
    function pagina(){
        $textos = ModelTextos::where('id','>',1)->get();
        foreach($textos as $texto){
            $data_view['textos'][$texto['id']]['titulo'] = $texto['titulo'];
            $data_view['textos'][$texto['id']]['texto'] = $texto['texto'];
        }
        $data_view['itens'] = array("Pesquisas","Assessorias","Agência","Plataformas","Outros","Designer");
        return view("como-fazemos")->with('data_view',$data_view);
    }
}
