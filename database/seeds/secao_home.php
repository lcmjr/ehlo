<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class secao_home extends Seeder{

    public function run(){
        DB::table('secao_home')->insert(array(
            [ 'texto' => "Quer performar melhor seu negócio, organizando suas ações de marketing? Atuamos como um departamento de marketing para sua empresa. Não somos agência, nem consultoria."],
            [ 'texto' => "A ehlo é uma empresa pioneira em marketing outsourcing no Brasil, que conta com profissionais experientes em marketing em grandes marcas, e, agora, em pequenas e médias empresas de diversos segmentos."],
            [ 'texto' => "Possuímos uma metodologia que parte do posicionamento da sua marca para dar rumo ao gerenciamento das atividades de <b>marketing</b>. Trabalhamos em duas etapas aplicadas em dois formatos de atuação."],
            [ 'texto' => "<p><b>Etapa I:</b> construímos com a empresa a mensagem de comunicação e o plano de marketing.</p><p><b>Etapa II:</b> implementação do plano, otimizando ao máximo seus investimentos em marketing com os recursos disponíveis.</p>"],
            [ 'texto' => "<p><b>Marketing Outsourcing:</b> Assumimos a gestão de todas as atividades de marketing da empresa.</p><p><b>Marketing Mentoring:</b> Orientação e implementação inicial das ações.</p>"]
        ));
    }
}
