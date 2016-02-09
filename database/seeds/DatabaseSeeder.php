<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call(secao_home::class);
        $this->call(SeederClientes::class);
        $this->call(SeederEquipe::class);
        $this->call(SeederQuemSomos::class);
        $this->call(SeederTextos::class);
    }
}
