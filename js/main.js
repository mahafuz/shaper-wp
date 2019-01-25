(function ($) {
    'use strict';

    $(window).load(function() {
        $('#preloader-wrapper').fadeOut('slow');
    });

    if($.fn.owlCarousel) {
        var slider     = $('.gallery-slider').eq(0),
        navigation = slider.data('slider-navigation'),
        pagination = slider.data('slider-pagination');

        slider.owlCarousel({
            pagination : pagination,
            navigation: navigation,
            autoPlay : 5000,
            itemsDesktop  :  [1500,4],
            itemsDesktopSmall :  [979,3]
        });
    }


    if($.fn.magnificPopup) {
        // Gallery Popup
        $('.image-popup').magnificPopup({type:'image'});
    }


    var a = $('.navbar-nav li').children('a');
        a.addClass('nav-link');

})(jQuery);







