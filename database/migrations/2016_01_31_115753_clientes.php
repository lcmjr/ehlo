<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration{
    private $tabela = "clientes";

    public function up(){
        Schema::create($this->tabela, function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo', 100);
            $table->string('foto_fundo', 100);
            $table->string('nome_pessoa', 100);
            $table->string('nome_empresa',100);
            $table->string('resumo_depoimento', 300);
            $table->string('titulo_depoimento', 100);
            $table->text('depoimento');
        });
    }

    public function down(){
        Schema::drop($this->tabela);
    }
}
