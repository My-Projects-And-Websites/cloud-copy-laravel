$(() => {
    var galleryImage = $(".hero-img-slide").find("img").first();
    var images = [
        "images/carousel1.jpg",
        "images/carousel2.jpg",
        "images/carousel3.jpg"
    ];

    var i = 0;
    setInterval(function() {
        i = (i + 1) % images.length;
        galleryImage.fadeOut(function() {
            $(this).attr("src", images[i]);
            $(this).fadeIn(4000);
        });
        console.log(galleryImage.attr("src"));
    }, 10000);
});