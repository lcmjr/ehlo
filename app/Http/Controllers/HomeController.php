<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\secao_home;

class HomeController extends Controller
{
    public function index(){
        $secoes_home = secao_home::all();
        return view('index')->with('secoes_home',$secoes_home);
    }
}
