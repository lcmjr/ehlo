@extends('includes.principal')

@section('classe-pg', 'page-home')
@section('conteudo')
    <div class="central">
        <?php
        $cor[1] = 'cor-rosa';
        $cor[2] = 'cor-verde';
        $cor[3] = 'cor-azul-1';
        $cor[4] = 'cor-azul-2';
        $cor[5] = 'cor-azul-2';
        ?>
        @foreach($secoes_home as $secao)
            <section class="secao-home secao-home-{{$secao->id}} <?php echo $cor[$secao->id]; ?> anima-entrada">
                <div class="icone-secao-home"></div>
                @if($secao->id > 1)<a class="link-secao-home"></a>@endif
                <div class="ctd-secao-home"><?= $secao->texto;?></div>
                @if($secao->id == 1)<a class="link-secao-home"></a>@endif
            </section>
            @if($secao->id == 3)
                <div id="container-logo">
                   <a id="logo-ctd"><img src="imagens/logo.png" alt="Logo Ehlo"/></a>
                </div>
            @endif
        @endforeach
        <div class="clear"></div>
    </div>
    @include('includes.chamada-fale-conosco')
@stop