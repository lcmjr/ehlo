@extends('includes.principal')

@section('conteudo')
<?php foreach($secoes_home as $secao){?>
<section class="secao-home secao-home-<?= $secao->id?>">
    <div class="icone-secao-home"></div>
    <a class="link-secao-home"><?= $secao->btn_text?></a>
    <div class="ctd-secao-home"><?= $secao->texto?></div>
</section>
<?php }?>
@stop