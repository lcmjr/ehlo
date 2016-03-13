$(window).scroll(function(event) {
    $(".anima-entrada").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("anima-start");
        }else{
            el.removeClass("anima-start");
        }
    });

    if($(window).scrollTop()>100){
        $("#topo-principal").addClass("topo-scroll");
    }else{
        $("#topo-principal").removeClass("topo-scroll");
    }
});