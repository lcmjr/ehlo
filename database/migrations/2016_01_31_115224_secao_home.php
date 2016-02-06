<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecaoHome extends Migration{
    private $tabela = "secao_home";

    public function up(){
        Schema::create($this->tabela, function (Blueprint $table) {
            $table->increments('id');
            $table->text('texto');
        });
    }

    public function down(){
        Schema::drop($this->tabela);
    }
}
