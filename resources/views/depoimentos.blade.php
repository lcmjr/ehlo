@extends('includes.principal')

@section('title', '- Depoimento - '.$data_view['cliente-principal']['nome_empresa'])
@section('classe-pg', 'page-nossos-clientes')
@section('conteudo')
    <div class="container-banner container-banner-depoimento <?php
    if($data_view['cliente-principal']['foto_fundo']==NULL){
        echo "depoimento-sem-foto";
    }?>">
        <?php if($data_view['cliente-principal']['foto_fundo']!=NULL){?>
        <div class="container-imagens"><img src="uploads/{{$data_view['cliente-principal']['foto_fundo']}}" alt="{{$data_view['cliente-principal']['nome_empresa']}}"/></div>
            <?php }?>
        <div class="central">
            {{$data_view['cliente-id']}}
            <div id="logo-banner" class="cliente"><img src="uploads/{{$data_view['cliente-principal']['logo']}}" alt="{{$data_view['cliente-principal']['nome_empresa']}}"/></div>
        </div>
    </div>
    <div class="central ctd-depoimento-txt">
        <h1 class="titulos"><?=$data_view['cliente-principal']['titulo_depoimento'];?></h1>
        <?=$data_view['cliente-principal']['depoimento'];?>
    </div>
    @include('includes.nossos-clientes')
    @include('includes.chamada-fale-conosco')
@stop