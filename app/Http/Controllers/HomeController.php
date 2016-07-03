<?php

namespace App\Http\Controllers;

use App\Post;
use App\ModelClientes;
use App\Http\Requests;
use App\secao_home;

class HomeController extends Controller
{
    public function index(){
        $clientes = ModelClientes::orderBy('id', 'desc')->where("resumo_depoimento","!=","NULL")->take(2)->get(['logo','nome_pessoa','nome_empresa','resumo_depoimento']);
        $secoes_home = secao_home::all();
        $posts[] = Post::find(276);
        $posts[] = Post::find(270);
        //$stores = Post::type('store')->status('publish')->take(3)->get();
        foreach ($posts as $post) {
            $data[] = array('titulo' => $post->post_title,'texto' => $post->post_content,
                'foto' => $post->thumbnail->attachment->guid,'link' => $post->guid);
        }
        return view('index')->with('secoes_home',$secoes_home)->with('clientes',$clientes)->with('datas',$data);
    }
}
