@extends('includes.principal')

@section('classe-pg', 'page-home')
@section('conteudo')
    <div class="central" id="ctd-secoes-home">
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
    <div id="home-blog-clientes">
        <div class="central">
            <section id="home-blog">
                <div id="titulo-blog"></div>
                @foreach($datas as $data)
                    <div class="post-blog-home">
                        <div class="foto-blog-clientes-home"><div class="esconde-blog-clientes-home"><img src="<?php echo str_replace("/beta","",$data['foto']);?>" alt="<?php echo $data['titulo'];?>"/></div></div>
                        <div class="ctd-post-blog">
                            <h1 class="titulo-blog-home cor-roxo"><?php echo $data['titulo'];?></h1>
                            <p><?php echo $data['texto'];?></p>
                        </div>
                        <div class="clear"></div>
                        <a href="<?php echo str_replace("/beta","",$data['link']);?>" class="btn-veja-mais btn-blog-home"></a>
                    </div>
                @endforeach
                <!--
                <div class="post-blog-home">
                    <div class="foto-blog-clientes-home"><div class="esconde-blog-clientes-home"><img src="uploads/foto-blog.jpg" alt=""/></div></div>
                    <div class="ctd-post-blog">
                        <h1 class="titulo-blog-home cor-roxo">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</h1>
                        <p>nonummy nibh euismod tincidunt ut l aliquam erat volutpat euismod.</p>
                    </div>
                    <div class="clear"></div>
                    <a href="#" class="btn-veja-mais btn-blog-home"></a>
                </div>
                <div class="post-blog-home">
                    <div class="foto-blog-clientes-home"><div class="esconde-blog-clientes-home"><img src="uploads/foto-blog.jpg" alt=""/></div></div>
                    <div class="ctd-post-blog">
                        <h1 class="titulo-blog-home cor-roxo">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</h1>
                        <p>nonummy nibh euismod tincidunt ut l aliquam erat volutpat euismod.</p>
                    </div>
                    <div class="clear"></div>
                    <a href="#" class="btn-veja-mais btn-blog-home"></a>
                </div>-->
            </section>
            <section id="home-clientes">
                <div id="titulo-clientes-home"></div>
                @foreach($clientes as $cliente)
                    <div class="ctd-home-clientes">
                        <div class="foto-blog-clientes-home"><div class="esconde-blog-clientes-home"><img width="126" height="126" src="uploads/{{$cliente->logo}}" alt=""/></div></div>
                        <div class="ctd-post-clientes">
                            <h1 class="titulo-clientes-home cor-laranja"><?php echo substr($cliente->resumo_depoimento, 0, strrpos(substr($cliente->resumo_depoimento, 0, 100), ' ')).'...';?></h1>
                            <p>{{$cliente->nome_pessoa}}<br/>
                                <b>{{$cliente->nome_empresa}}</b></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                @endforeach
                <a href="nossos-clientes" class="btn-veja-mais btn-clientes-home"></a>
            </section>
            <div class="clear"></div>
        </div>
    </div>
@stop