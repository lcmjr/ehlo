@extends('includes.principal')

@section('title', '- Por que existimos')
@section('classe-pg', 'page-pq-existimos')
@section('conteudo')
    <div class="central">
        <div class="icone-pq-existimos"></div>
        <div class="ctd-pg">
            <h1 class="titulos cor-rosa"><?= $texto->titulo?></h1>
            <?= $texto->texto?>
        </div>
        <h1 class="titulos cor-rosa"><b>Boas razões</b> para contratar<br/> uma empresa de marketing</h1>
        <?php
        $razoes[0] = 'Consistência na comunicação';
        $razoes[1] = 'Otimização do investimento';
        $razoes[2] = 'People outsourcing';
        $razoes[3] = 'Mais Tempo';
        $razoes[4] = 'Seleção e gestão dos fornecedores de marketing';
        $link_chamada_fale_conosco = "como-fazemos";
        ?>
        <div id="razoes-container">
            @foreach($razoes as $key=>$razao)
                <div class="razao razao-<?= $key?>">
                    <div class="cor-rosa icone-container">
                        <div class="icone"></div>
                    </div>
                    <h1 class="titulo-pequeno cor-cinza"><?= $razao?></h1>
                </div>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>
    @include('includes.chamada-fale-conosco')
@stop