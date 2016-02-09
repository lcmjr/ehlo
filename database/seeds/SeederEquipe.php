<?php

use Illuminate\Database\Seeder;

class SeederEquipe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('equipe')->insert(
            array(
                ['titulo' => "Heloísa Poletto",
                    'foto' => "heloisa.jpg",
                    'texto' => "Mais de 12 anos de experiência em marketing para mercados B2B (para empresa) e B2C (para consumidor).",
                    'linkedin' => "https://www.linkedin.com/in/heloisa-poletto-48a69315"],
                ['titulo' => "Roberta Cascione",
                    'foto' => "roberta.jpg",
                    'texto' => "Lorem ipsum dolor sit amet, consecteu adipiscing elit, sed diam louris nummy noibh euismod tincidunt ut laoreet dolore magna aliquam et volutpat olor sit amet.",
                    'linkedin' => "https://www.linkedin.com/in/roberta-cascione-4b41107"],
                ['titulo' => "Rafael D`Elia",
                    'foto' => "rafael.jpg",
                    'texto' => "Lorem ipsum dolor sit amet, consecteu adipiscing elit, sed diam louris nummy noibh euismod tincidunt ut laoreet dolore magna aliquam et volutpat olor sit amet.",
                    'linkedin' => "https://www.linkedin.com/in/rafaeldelia?authType=name&authToken=q-2o&trk=prof-sb-browse_map-name"],
                ['titulo' => "Nathália Gomes",
                    'foto' => "nathalia.jpg",
                    'texto' => "Lorem ipsum dolor sit amet, consecteu adipiscing elit, sed diam louris nummy noibh euismod tincidunt ut laoreet dolore magna aliquam et volutpat olor sit amet.",
                    'linkedin' => "https://www.linkedin.com/in/nath%C3%A1lia-gandolfo-gomes-742b0b4a?authType=name&authToken=0AuZ&trk=prof-sb-browse_map-name"],
            )
        );
    }
}
