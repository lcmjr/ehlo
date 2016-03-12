@extends('includes.principal')

@section('title', '- Quem Somos')
@section('classe-pg', 'page-quem-somos')
@section('conteudo')
    <div class="central">
        <section class="item-central item-central-quem-somos">
            <div class="icone-secao-home"></div>
            <div class="ctd-quem-somos">
                <h1 class="titulos cor-verde"><?= $data_view['quem_somos']['titulo'];?></h1>
            </div>
            <div class="clear"></div>
            <h1 class="titulos cor-verde"><?= $data_view['quem_somos']['sub_titulo'];?></h1>
            <?= $data_view['quem_somos']['texto'];?>
        </section>
    </div>
    <h1 class="titulos" style="margin-top: 120px;">Conheça <b>nossa equipe</b></h1>
    <div id="container-equipe" class="central">
        @foreach($data_view['equipe'] as $equipe)
            <div class="equipe <?php if($equipe['id'] <=2){echo "equipe-diretoras";}?>">
                <div class="container-equipe-img">
                    <img src="uploads/<?= $equipe['foto'];?>" alt="<?= $equipe['titulo'];?>"/>
                </div>
                <div class="ctd-equipe">
                    <h1 class="titulos cor-verde"><?= $equipe['titulo'];?></h1>
                    <div class="ctd-txt-equipe"><?= $equipe['texto'];?></div>
                    <a href="<?= $equipe['linkedin'];?>" target="_blank" class="btn-linkedin cor-cinza">saiba mais</a>
                </div>
                <div class="clear"></div>
            </div>
        @endforeach
        <div class="clear"></div>
    </div>
    @include('includes.chamada-fale-conosco')
@stop