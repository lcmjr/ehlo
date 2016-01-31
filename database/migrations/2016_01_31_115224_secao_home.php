<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecaoHome extends Migration{

    public function up(){
        Schema::create('secao_home', function (Blueprint $table) {
            $table->increments('id');
            $table->text('texto');
        });
    }

    public function down(){
        Schema::drop('secao_home');
    }
}
