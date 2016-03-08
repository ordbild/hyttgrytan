;(function(window, document, $, undefined){
    'use strict';
    
    $(document).ready(function(){
        $('.slider').slick({
            arrows: false,
            slidesToShow: 1,
            dots: true,
            infinite: false
        });
    });

})(window, document, jQuery);
