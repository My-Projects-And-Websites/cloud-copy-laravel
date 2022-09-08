$(() => {
    var galleryImage = $(".hero-img-container").find("img").first();
    var images = [
        "images/new_carousel1.jpeg",
        "images/new_carousel2.jpeg",
        "images/new_carousel3.jpeg"
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