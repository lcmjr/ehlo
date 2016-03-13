<!DOCTYPE html>
<html>
<head>
    <title>Ehlo @yield('title')</title>
    <base href="http://localhost:8000/"/>
    <link href='https://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href='css/padrao.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/visible.js"></script>
    <script type="text/javascript" src="js/padrao.js"></script>
    @yield('javascript')
</head>
<body class="@yield('classe-pg')">
<header id="topo-principal">
    <div class="central">
        <nav id="menu-principal">
            <a href="/por-que-existimos" class="link-menu cor-rosa">Por que existimos</a>
            <a href="/como-fazemos" class="link-menu cor-azul">Como fazemos</a>
            <a href="/quem-somos" class="link-menu cor-verde">Quem somos</a>
            <a href="/" class="logo-topo"></a>
            <a href="/nossos-clientes" class="link-menu cor-laranja">Nossos clientes</a>
            <a href="/nosso-blog" class="link-menu cor-roxo">Nosso blog</a>
            <a href="/fale-conosco" class="link-menu cor-cinza">Fale conosco</a>
        </nav>
    </div>
</header>
<div class="chamada chamada-topo"></div>
@yield('conteudo')
<div class="chamada" id="chamada-newsletter">
    <h1 class="titulos">Receba as <b>últimas do blog</b></h1>
    <form id="formulario-newsletter" method="post" action="">
        <input type="text" placeholder="cadastre aqui o seu e-mail" class="ipt-reset"/>
        <input type="submit" value="cadastrar" class="ipt-submit-reset"/>
    </form>
</div>
<footer id="rodape">
    <div class="central">
        <a id="link-contato-rodape"></a>
        <nav id="menu-rodape">
            <a href="/por-que-existimos" class="link-rodape">por que existimos</a>
            <span>&bull;</span>
            <a href="/como-fazemos" class="link-rodape">como fazemos</a>
            <span>&bull;</span>
            <a href="/quem-somos" class="link-rodape">quem somos</a>
            <span>&bull;</span>
            <a href="/nossos-clientes" class="link-rodape">nossos clientes</a>
            <span>&bull;</span>
            <a href="/nosso-blog" class="link-rodape">nosso blog</a>
            <span>&bull;</span>
            <a href="/fale-conosco" class="link-rodape">fale conosco</a>
        </nav>
        <div id="redes-social"><span>follow us</span>
            <a href="https://www.facebook.com/ehlomarketing/?fref=ts" id="facebook-btn" target="_blank"></a>
            <a href="https://www.linkedin.com/in/heloisa-poletto-48a69315" id="linkedin-btn" target="_blank"></a>
        </div>
        <div class="clear"></div>
        <div id="copyright">&copy; Copyright ehlo 2016</div>
    </div>
</footer>
</body>
</html>