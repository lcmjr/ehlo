$(window).ready(function(){
    $('.bolinha-mais').click(function(){
        var andar = ($('.container-itens-como-fazemos').attr('data-andar')!='0')?0:1;
        troca_andar(andar);
    });
    $('.bolinha-igual').click(function(){
        var andar = ($('.container-itens-como-fazemos').attr('data-andar')!='2')?2:1;
        troca_andar(andar);
    });
});
function troca_andar(troca){
    $('.container-itens-como-fazemos').attr('data-andar',troca);
}