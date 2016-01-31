<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Equipe extends Migration{
    private $tabela;

    public function up(){
        Schema::create($this->tabela, function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->text('texto');
            $table->string('linkedin', 100);
        });
    }

    public function down(){
        Schema::drop($this->tabela);
    }
}
