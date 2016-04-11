@extends('includes.principal')

@section('title', '- Como Fazemos')
@section('classe-pg', 'page-como-fazemos')
@section('conteudo')
    <div class="central">
        <section class="item-central item-central-como-fazemos-2">
            <div class="icone-secao-home"></div>
            <div class="ctd-como-fazemos">
                <h1 class="titulos cor-azul-3"><?= $data_view['textos'][2]['texto'];?></h1>
            </div>
            <div class="clear"></div>
        </section>
        <h1 class="titulos">Atuamos em <b>duas etapas:</b></h1>
        <section class="item-central item-central-como-fazemos-3 item-como-fazemos-etapas">
            <div class="icone-secao-home"></div>
            <div class="ctd-como-fazemos">
                <h2 class="titulos cor-azul-2">Etapa I</h2>
                <h1 class="titulos cor-azul-3"><?= $data_view['textos'][3]['titulo'];?></h1>
                <?= $data_view['textos'][3]['texto'];?>
            </div>
            <div class="clear"></div>
        </section>
        <section class="container-itens-como-fazemos">
            <?php for($i=4;$i<7;$i++){
                if($i>4){
                    $mais_igual=(!isset($mais_igual))?"+":"=";
            ?>
                <div class="bolinha-mais-igual"><?= $mais_igual;?></div>
               <?php }
                ?>
                <div class="item-como-fazemos item-como-fazemos-<?php echo $i-3;?>">
                    <div class="borda-azul">
                        <div class="icone-como-fazemos"></div>
                    </div>
                    <div class="ctd-como-fazemos">
                        <h1 class="titulos cor-azul-3"><?= $data_view['textos'][$i]['titulo'];?></h1>
                        <?= $data_view['textos'][$i]['texto'];?>
                    </div>
                </div><?php
            }?>
            <div class="clear"></div>
        </section>
        <section class="item-central item-central-como-fazemos-7 item-como-fazemos-etapas">
            <div class="icone-secao-home"></div>
            <div class="ctd-como-fazemos">
                <h2 class="titulos cor-azul-2">Etapa II</h2>
                <h1 class="titulos cor-azul-3"><?= $data_view['textos'][7]['titulo'];?></h1>
                <?= $data_view['textos'][7]['texto'];?>
            </div>
            <div class="clear"></div>
        </section>
        <div class="borda-azul borda-dotted borda-dotted-1 borda-azul-ctd">
            <div class="borda-azul borda-dotted borda-dotted-2 borda-azul-ctd">
                <div class="borda-azul borda-azul-3 borda-azul-ctd">
                    <h1 class="titulos cor-azul-3"><?= $data_view['textos'][8]['titulo'];?></h1>
                    <?= $data_view['textos'][8]['texto'];?>
                </div>
            </div>
        </div>
        @foreach($data_view['itens'] as $key=>$item)
        <div class="itens-borda-azul borda-azul itens-borda-azul-<?=$key?>">
            <div class="icone"></div>
            <h2 class="titulo-itens-borda"><?= $item;?></h2>
        </div>
        @endforeach
        <div class="clear"></div>
        <h1 class="titulos titulo-etapas-como-fazemos">Aplicamos essas duas etapas <br/><b>nos formatos:</b></h1>
        <section class="item-central item-central-como-fazemos-9 item-como-fazemos-formatos">
            <div class="borda-azul">
                <div class="icone-como-fazemos"></div>
            </div>
            <div class="ctd-como-fazemos">
                <h1 class="titulos cor-azul-3"><?= $data_view['textos'][9]['titulo'];?></h1>
                <?= $data_view['textos'][9]['texto'];?>
            </div>
            <div class="clear"></div>
        </section>
        <section class="item-central item-central-como-fazemos-10 item-como-fazemos-formatos">
            <div class="borda-azul">
                <div class="icone-como-fazemos"></div>
            </div>
            <div class="ctd-como-fazemos">
                <h1 class="titulos cor-azul-3"><?= $data_view['textos'][10]['titulo'];?></h1>
                <?= $data_view['textos'][10]['texto'];?>
            </div>
            <div class="clear"></div>
        </section>
    </div>
    @include('includes.chamada-fale-conosco')
@stop