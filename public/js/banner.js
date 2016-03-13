var qtd_banner=0;
var anima_banner=false;
var banner_atual = 0;
var tempo_anima = 500;
$(window).ready(function(){
    $('.container-imagens img').each(function(){
        $(this).attr('id','banner_'+(++qtd_banner));
    });
    banner_proximo= 1;
    anima_banner_saida();
    $('#seta-direita').click(function(){
        banner_proximo=(banner_atual<qtd_banner)?banner_atual+1:1;
        anima_banner_entrada();
    })
    $('#seta-esquerda').click(function(){
        banner_proximo=(banner_atual>1)?banner_atual-1:qtd_banner;
        anima_banner_entrada();
    })
});
function anima_banner_entrada(){
    $('#banner_'+banner_atual).fadeTo(tempo_anima,0,function(){anima_banner_saida();});
    $('#resumo-banner,#logo-banner').fadeTo(tempo_anima,0);
}
function anima_banner_saida(){
    banner_atual =banner_proximo;
    var resumo = $('#banner_'+banner_proximo).attr('data-resumo');
    var logo = $('#banner_'+banner_proximo).fadeTo(tempo_anima,1).attr('data-logo');
    $('#resumo-banner').html(resumo).fadeTo(tempo_anima,1);
    $('#logo-banner').html("<img src='uploads/"+logo+"' alt=''/>").fadeTo(1,tempo_anima,function(){
        anima_banner = false;
    });

}