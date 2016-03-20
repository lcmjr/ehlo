<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FaleConoscoController extends Controller
{
    public function pagina(){
        $link_chamada_fale_conosco = "";
        return view('fale-conosco')->with('link_chamada_fale_conosco',$link_chamada_fale_conosco);
    }
}
