$("#service-cta").hover(function() {
    $('.arrow-right').animate({
        marginLeft : "+=400px"
    }, 400, function() {
        $('.last-h3').animate({
            opacity : "1"
        }, 150);
    });
}, function() {
    $('.arrow-right').animate({
        marginLeft : "-=400px"
    }, 400, function() {
        $('.last-h3').animate({
            opacity : "0"
        }, 150);
    });
});