!function(e,t,$,i){"use strict";$(t).ready(function(){$(".slider").slick({arrows:!1,slidesToShow:1,dots:!0,infinite:!1}),$("a.js-next-slide").on("click",function(e){e.preventDefault(),$(this).parents("div.slider").slick("slickNext")});var e=$("header.site-header");$("#intro h1").hitsTop(function(t){t?e.addClass("fixed"):e.removeClass("fixed")});var t=$("nav.main-menu");$("#mobile-menu-toggle").on("click",function(e){e.preventDefault(),t.toggleClass("open")}),$("a.js-slide-to-section").on("click",function(e){e.preventDefault();var t=$($(this).attr("href"));$("html, body").animate({scrollTop:t.offset().top},500)})})}(window,document,jQuery);