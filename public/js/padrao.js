$(window).scroll(function(event) {
    $(".anima-entrada").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("anima-start");
        }
    });

    if($(window).scrollTop()>100){
        $("#topo-principal").addClass("topo-scroll");
    }else{
        $("#topo-principal").removeClass("topo-scroll");
    }
}).ready(function(){
    $(this).scroll();
    $('#btn-menu-rpsv').click(function(){
       $('#menu-principal').slideToggle(200);
    });
    //btn-menu-rpsv" class="rpsv-mobile"></div>
    //<nav id="menu-principal"
});