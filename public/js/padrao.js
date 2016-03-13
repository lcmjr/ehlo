$(window).scroll(function(event) {
    $(".anima-entrada").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("anima-start");
        }else{
            el.removeClass("anima-start");
        }
    });
});