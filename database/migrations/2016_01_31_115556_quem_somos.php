<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuemSomos extends Migration{
    private $tabela;

    public function up(){
        Schema::create($this->tabela, function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 200);
            $table->string('sub_titulo', 300);
            $table->text('texto');
        });
    }

    public function down(){
        Schema::drop($this->tabela);
    }
}
