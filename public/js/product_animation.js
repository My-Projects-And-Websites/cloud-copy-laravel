$('#service-cta').on('mouseenter', function() {
    $('.arrow-right').animate({
        marginLeft : "+=400px"
    }, 400, function() {
        $('.last-h3').animate({
            opacity : "1"
        }, 100);
    });
});

$('#service-cta').on('mouseleave', function() {
    $('.arrow-right').animate({
        marginLeft : "-=400px"
    }, 400, function() {
        $('.last-h3').animate({
            opacity : "0"
        }, 100);
    });
});