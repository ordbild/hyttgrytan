;(function(window, document, $, undefined){
    'use strict';
    
    $(document).ready(function(){

        $('.slider').slick({
            arrows: false,
            slidesToShow: 1,
            dots: true,
            infinite: false
        });
        $('a.js-next-slide').on('click', function (e) {
            e.preventDefault();
            $(this).parents('div.slider').slick('slickNext');
        });
        
        var $menuBar = $('header.site-header');
        $('#intro h1').hitsTop(function(hasHitTop){
            if (hasHitTop) {
               $menuBar.addClass('fixed');
            } else {
               $menuBar.removeClass('fixed');
            }
        });

    });

})(window, document, jQuery);
