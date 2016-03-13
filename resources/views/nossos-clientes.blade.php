@extends('includes.principal')

@section('title', '- Nossos Clientes')
@section('classe-pg', 'page-nossos-clientes')
@section('javascript')
    <script type="text/javascript" src="js/banner.js"></script>
@stop
@section('conteudo')
    <div class="container-banner">
        <div class="container-imagens">
            @foreach($data_view['clientes-banner'] as $cliente)
                <?php  $resumo = "<p>{$cliente['resumo_depoimento']}<br/><a class='leia-mais-clientes' href='depoimentos/{$cliente['id']}'>leia mais</a></p>
                <span class='nome-pessoa'>{$cliente['nome_pessoa']}</span><br/><span class='nome-pessoa'>{$cliente['nome_empresa']}</span>";?>
                <img src="uploads/{{$cliente['foto_fundo']}}" alt="{{$cliente['nome_empresa']}}" data-logo="{{$cliente['logo']}}" data-resumo="{{$resumo}}"/>
            @endforeach
        </div>
        <div class="central">
            <div id="resumo-banner">
                <p>Para o meu negócio, a área de marketing sempre foi muito importante, porém nunca havia sido feita de maneira profissional.<br/><a class='leia-mais-clientes' href='depoimentos/8'>leia mais</a></p>
                <span class='nome-pessoa'>testestest</span><br/><span class='nome-empresa'>GlitzMania</span>
            </div>
            <div id="container-setas">
                <div class="setas-banner" id="seta-esquerda"></div>
                <div class="setas-banner" id="seta-direita"></div>
            </div>
            <div id="logo-banner" class="cliente"><img src="uploads/logo.png" alt=""/></div>
        </div>
    </div>
    @include('includes.nossos-clientes')
    @include('includes.chamada-fale-conosco')
@stop