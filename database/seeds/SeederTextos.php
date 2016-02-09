<?php

use Illuminate\Database\Seeder;

class SeederTextos extends Seeder{
    public function run(){
        DB::table('textos')->insert(array(
            [   'titulo' => "Se essas são algumas das suas questões,<b>você encontrou a empresa que irá te ajudar.</b>",
                'texto' => "<b>A ehlo - house of marketing</b> é uma empresa pioneira em marketing para pequenas e médias empresas. Não assumimos o papel da agência e não vendemos consultoria. Atuamos como o departamento de marketing no seu negócio, endereçando questões estratégicas, táticas ou operacionais."],
            [   'titulo' => "",
                'texto' => "Possuímos uma metodologia que parte do posicionamento da sua marca para direcionar e implementar seu plano
de marketing."],
            [   'titulo' => "Pensar",
                'texto' => "Implementação do plano, otimizando ao máximo seus investimentos em marketing com os recursos disponíveis."],
            [   'titulo' => "O que e como a marca vai comunicar?\"",
                'texto' => "Desenho do posicionamento e da mensagem de comunicação da marca."],
            [   'titulo' => "Quais seus objetivos de negócio, como alcançá-los no seu mercado de atuação?",
                'texto' => "Qual sua capacidade de investimento? Raio-X do negócio para elaboração da estratégia de marketing."],
            [   'titulo' => "Seu plano de marketing estruturado",
                'texto' => "Apresentação completa da estratégia, mensagem de comunicação da marca e plano de marketing com estimativas orçamentárias e cronogramas de implementação."],
            [   'titulo' => "Agir",
                'texto' => "Seu plano de marketing implementado com especialistas para cada atividade."],
            [   'titulo' => "<b>A ehlo amplia seu acesso aos fornecedores</b> de marketing ideais para suas necessidades.",
                'texto' => "Assumimos a gestão e/ou a orientação dos fornecedores de marketing de cada atividade do plano, sugerindo, recomendando ou até mesmo reavaliando fornecedores atuais, para melhor otimização dos seus recursos."],
            [   'titulo' => "Marketing outsourcing",
                'texto' => "<b>Assumimos a gestão de todas as atividades de marketing das empresas:</b> da profundidade na estratégia aos detalhes da implementação."],
            [   'titulo' => "Marketing mentoring",
                'texto' => "<b>Orientação e implementação inicial das ações,</b> para que o empresário possa dar sequência aos exercícios de marketing da marca. Ideal para microempresas e profissionais liberais."]
        ));
    }
}
