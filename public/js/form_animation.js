// Focus Ins
$('input:first').on('focusin', function() {
    $('input:first').css(
        "border-color" , "#97c8c9",
    );
    $('input:first').animate({
        "margin-left" :  "+=20px",
    }, 250);
});

$('input').eq(1).on('focusin', function() {
    $('input').eq(1).css(
        "border-color" , "#97c8c9"
    );
    $('input').eq(1).animate({
        "margin-left" :  "+=20px",
    }, 250);
});

$('textarea').on('focusin', function() {
    $('textarea').css(
        "border-color" , "#97c8c9"
    );
    $('textarea').animate({
        "margin-left" :  "+=20px",
    }, 250);
});


// Focus Out
$('input:first').on('focusout', function() {
    $('input:first').css(
        "border-color" , "#dcdcdc"
    );
    $('input:first').animate({
        "margin-left" :  "-=20px"
    }, 250)
});

$('input').eq(1).on('focusout', function() {
    $('input').eq(1).css(
        "border-color" , "#dcdcdc"
    );
    $('input').eq(1).animate({
        "margin-left" :  "-=20px"
    }, 250)
});

$('textarea').on('focusout', function() {
    $('textarea').css(
        "border-color" , "#dcdcdc"
    );
    $('textarea').animate({
        "margin-left" :  "-=20px"
    }, 250)
});