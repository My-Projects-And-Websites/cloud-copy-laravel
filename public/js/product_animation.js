$('#service-cta').on('mouseenter', function() {
    $('.arrow-right').animate({
        right : "-=150px"
    }, 250);
});

$('#service-cta').on('mouseleave', function() {
    $('.arrow-right').animate({
        right : "+=150px"
    }, 250);
});