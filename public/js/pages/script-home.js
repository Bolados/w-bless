(function ($) {
    var screenWidth = $(window).width();
    var screenHeight = $(window).height();
    var carouselHeight = screenHeight * 0.80;
    if (screenWidth < screenHeight) {
        carouselHeight = screenHeight * 0.60
    }

    $('.carousel-inner-ajust').css({
        height: carouselHeight + 'px'
    });

})(jQuery);
