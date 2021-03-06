;(function(window, document, $, undefined){
    'use strict';
    
    $(document).ready(function(){

        document.getElementById('intro').className += ' begin-animation';

        FontFaceOnload('HelveticaNeueLTStd-Lt', {
            success: function () {
                document.documentElement.className += 'helvetica-neue';
            },
        });

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

        var $menu = $('nav.main-menu');
        $('#mobile-menu-toggle').on('click', function (e) {
            e.preventDefault();
            $menu.toggleClass('open');
        });

        $('a.js-slide-to-section').on('click', function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href'));
            $('html, body').animate({
                scrollTop: $target.offset().top 
            }, 500);
        });

        $('.js-animation-trigger').on('lazyshow', function () {
            var id = this.getAttribute('data-animate');
           document.getElementById(id).className += ' begin-animation';
        }).lazyLoadXT({visibleOnly: false});

    });

})(window, document, jQuery);
