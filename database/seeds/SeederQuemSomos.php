<?php

use Illuminate\Database\Seeder;

class SeederQuemSomos extends Seeder{
    public function run(){
        DB::table('quem_somos')->insert(
            array(
                'titulo' => "A ehlo é uma empresa pioneira em marketing outsourcing no Brasil.",
                'sub_titulo' => "Conta com profissionais experientes em marketing de grandes marcas, e, agora, em pequenas e médias empresas de diversos segmentos.",
                'texto' => "Gostamos de trocar, mediar e aprender sobre seu negócio para que possamos lhe entregar resultados consistentes. <b>Com maestria e transparência, fazemos o elo entre a empresa e os fornecedores de marketing,</b> respeitando sempre o espaço que cada parte deve assumir. Acreditamos que podemos ser parceiros de pequenas e médias empresas para perpetuar suas marcas por meio de inspirações e realizações, com dinamismo e excelência nas ações de marketing."
            )
        );
    }
}
