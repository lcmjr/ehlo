<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientesLink extends Migration{
    private $tabela = "clientes";
    public function up(){
        Schema::table($this->tabela, function (Blueprint $table) {
            $table->string('foto_fundo')->nullable()->change();
            $table->string('nome_pessoa')->nullable()->change();
            $table->string('nome_empresa')->nullable()->change();
            $table->string('resumo_depoimento')->nullable()->change();
            $table->string('titulo_depoimento')->nullable()->change();
            $table->text('depoimento')->nullable()->change();
            $table->string('link', 200)->nullable();
        });
    }

    public function down(){
        
    }
}
