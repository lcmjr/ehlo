<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="DESCRIPTION" content="empresa de marketing, agencia de marketing, assessoria de marketing, marketing mentoring, marketing terceirizado, marketing outsourcing, marketing para PME, marketing para pequenas e medias empresas, marketing para startups, orientacao de marketing, marketing em são paulo, marketing sp, agência de marketing"/>
    <meta name="DISTRIBUTION" content="global"/>
    <meta name="publisher" content="Agência YOUP" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="www.youp.com.br" />
    <meta name="revisit-after" content="1" />
    <meta name="revisit-after" content="7 days" />
    <meta name="distribution" content="Global" />
    <meta name="language" content="portugues (portuguese)" />
    <meta name="expires" content="never" />
    <meta name="rating" content="Geral" />
    <meta name="robots" content="index,follow,ALL" />
    <meta name="doc-class" content="Completed" />
    <title>Ehlo house of marketing @yield('title')</title>
    <base href="http://ehlo.com.br/"/>
    <link href='https://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href='css/padrao.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/visible.js"></script>
    <script type="text/javascript" src="js/padrao.js"></script>
    @yield('javascript')
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-39883816-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body class="@yield('classe-pg')">
<header id="topo-principal">
    <div class="central">
        <a id="logo-rpsv" href="http://ehlo.com.br/" class="rpsv-mobile"></a>
        <div id="btn-menu-rpsv" class="rpsv-mobile"></div>
        <nav id="menu-principal">
            <a href="http://ehlo.com.br/por-que-existimos" class="link-menu cor-rosa">Por que existimos</a>
            <a href="http://ehlo.com.br/como-fazemos" class="link-menu cor-azul">Como fazemos</a>
            <a href="http://ehlo.com.br/quem-somos" class="link-menu cor-verde">Quem somos</a>
            <a href="http://ehlo.com.br/" class="logo-topo"></a>
            <a href="http://ehlo.com.br/nossos-clientes" class="link-menu cor-laranja">Nossos clientes</a>
            <a href="http://ehlo.com.br/nosso-blog" class="link-menu cor-roxo">Nosso blog</a>
            <a href="http://ehlo.com.br/fale-conosco" class="link-menu cor-cinza">Fale conosco</a>
        </nav>
    </div>
</header>
<div class="chamada chamada-topo"></div>
@yield('conteudo')
<div class="chamada" id="chamada-newsletter">
    <h1 class="titulos">Receba as <b>últimas do blog</b></h1>
    <form id="formulario-newsletter" action="https://www.rdstation.com.br/api/1.2/conversions" method="POST">
        <input type="hidden" name="redirect_to" value="http://ehlo.com.br/" />
        <input type="hidden" name="identificador" value="Newsletter Ehlo" />
        <input type="hidden" name="token_rdstation" value="4c9c0a9cbd2be95f457b1a3854748df5" />
        <input type="text" name="email" placeholder="cadastre aqui o seu e-mail" class="ipt-reset"/>
        <input type="submit" value="cadastrar" class="ipt-submit-reset"/>
    </form>
</div>
<footer id="rodape">
    <div class="central">
        <a id="link-contato-rodape" href="http://ehlo.com.br/fale-conosco"></a>
        <nav id="menu-rodape">
            <a href="http://ehlo.com.br/por-que-existimos" class="link-rodape">por que existimos</a>
            <span>&bull;</span>
            <a href="http://ehlo.com.br/como-fazemos" class="link-rodape">como fazemos</a>
            <span>&bull;</span>
            <a href="http://ehlo.com.br/quem-somos" class="link-rodape">quem somos</a>
            <span>&bull;</span>
            <a href="http://ehlo.com.br/nossos-clientes" class="link-rodape">nossos clientes</a>
            <span>&bull;</span>
            <a href="http://ehlo.com.br/nosso-blog" class="link-rodape">nosso blog</a>
            <span>&bull;</span>
            <a href="http://ehlo.com.br/fale-conosco" class="link-rodape">fale conosco</a>
        </nav>
        <div id="redes-social"><span>follow us</span>
            <a href="https://www.facebook.com/ehlomarketing/?fref=ts" id="facebook-btn" target="_blank"></a>
            <a href="https://www.linkedin.com/in/heloisa-poletto-48a69315" id="linkedin-btn" target="_blank"></a>
        </div>
        <div class="clear"></div>
        <div id="copyright">&copy; Copyright ehlo 2016</div>
    </div>
</footer>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TZ255Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TZ255Z');</script>
<!-- End Google Tag Manager -->
</body>
</html>