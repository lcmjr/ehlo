<?php

use Illuminate\Database\Seeder;

class SeederClientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++){
            DB::table('clientes')->insert(
                array(
                    'logo' => "logo.png",
                    'nome_pessoa' => str_random(100),
                    'nome_empresa' => str_random(100),
                    'resumo_depoimento' => str_random(300),
                    'titulo_depoimento' => str_random(100),
                    'depoimento' => ''
                )
            );
        }
        //
    }
}
