<?php

namespace App\Http\Controllers;

use App\ModelClientes;
use bar\baz\source_with_namespace;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NossosClientesController extends Controller
{
    function pagina(){
        $data_view['clientes-banner'] = ModelClientes::orderBy('id', 'desc')->take(5)->get(['id','foto_fundo','logo','nome_pessoa','nome_empresa','resumo_depoimento']);
        $data_view['clientes'] = ModelClientes::all(['id','logo','nome_empresa']);
        return view("nossos-clientes")->with('data_view',$data_view);
    }

    function depoimentos($id){
        $clientes = ModelClientes::find($id)->get(['logo','titulo_depoimento','foto_fundo','depoimento','nome_empresa']);
        foreach($clientes as $cliente){
            $data_view['cliente-principal']['logo'] = $cliente['logo'];
            $data_view['cliente-principal']['titulo_depoimento'] = $cliente['titulo_depoimento'];
            $data_view['cliente-principal']['foto_fundo'] = $cliente['foto_fundo'];
            $data_view['cliente-principal']['depoimento'] = $cliente['depoimento'];
            $data_view['cliente-principal']['nome_empresa'] = $cliente['nome_empresa'];
        }
        $data_view['clientes'] = ModelClientes::where('id','!=',$id)->get(['id','logo','nome_empresa']);
        return view("depoimentos")->with('data_view',$data_view);
    }
}
