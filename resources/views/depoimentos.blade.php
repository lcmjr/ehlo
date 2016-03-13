@extends('includes.principal')

@section('title', '- Nossos Clientes')
@section('classe-pg', 'page-nossos-clientes')
@section('conteudo')
    <?php $cliente = $data_view['cliente-principal'];?>
    <div class="container-banner container-banner-depoimento">
        <div class="container-imagens"><img src="uploads/{{$data_view['cliente-principal']['foto_fundo']}}" alt="{{$data_view['cliente-principal']['nome_empresa']}}"/></div>
        <div class="central">
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