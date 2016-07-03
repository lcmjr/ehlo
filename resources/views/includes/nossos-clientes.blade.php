<h1 class="titulos">Nossos <b>clientes:</b></h1>
<div class="central container-logos"><?php
    foreach($data_view['clientes'] as $cliente){
        if($cliente['link']!=NULL){
            $link = $cliente['link'];
            $target = "_blank";
        }else{
            $target = "_self";
            $link = "depoimentos/{$cliente['id']}";
        }?><a class="cliente" href="<?= $link;?>" target="<?= $target;?>"><img src="uploads/<?= $cliente['logo']?>" alt="<?= $cliente['nome_empresa']?>"/></a><?php }?></div>