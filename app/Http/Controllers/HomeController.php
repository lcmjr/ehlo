<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelClientes;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\secao_home;

class HomeController extends Controller
{
    public function index(){
        $clientes = ModelClientes::orderBy('id', 'desc')->take(2)->get(['logo','nome_pessoa','nome_empresa','resumo_depoimento']);
        $secoes_home = secao_home::all();
        return view('index')->with('secoes_home',$secoes_home)->with('clientes',$clientes);
    }
}
