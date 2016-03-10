;(function(window, document, $, undefined){
    'use strict';
    
    $(document).ready(function(){

        $('.slider').slick({
            arrows: false,
            slidesToShow: 1,
            dots: true,
            infinite: false
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
