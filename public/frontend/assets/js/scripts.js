/*
Author       : theme_ocean
Template Name: Eduleb - Education HTML Template
Version      : 1.0
*/
(function ($) {
    'use strict';

    jQuery(document).on('ready', function () {

        /* START COURSE CAROUSEL */
        $('.course-carousel').owlCarousel({
            autoPlay: 2800,
            items: 3,                       // paksa 3 card
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [768, 2],
            itemsMobile: [480, 1],
            pagination: true,
            navigation: false,
            slideSpeed: 800,
            loop: true,
            autoplayHoverPause: true
        });
        /* END COURSE CAROUSEL */

        /*PRELOADER JS*/
        $(window).on('load', function () {
            setTimeout(function () {
                $('.preloaders').fadeToggle();
            }, 1500);
        });
        /*END PRELOADER JS*/

        /*START MENU JS*/
        $(".mobile_menu").simpleMobileMenu({
            "menuStyle": "slide"
        });
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 70) {
                $('.site-navigation, .header-white, .header').addClass('navbar-fixed');
            } else {
                $('.site-navigation, .header-white, .header').removeClass('navbar-fixed');
            }
        });
        /*END MENU JS*/

        /*START VIDEO JS*/
        $('.magnific_popup').magnificPopup({
            type: 'iframe'
        });
        /*END VIDEO JS*/

        /* START COUNTDOWN JS*/
        $('.counter_feature').on('inview', function (event, visible) {
            if (visible) {
                $(this).find('.counter-num').each(function () {
                    var $this = $(this);
                    var text = $this.text().trim();              // contoh: "4000+"
                    var target = parseInt(text.replace(/\D/g, ''), 10); // ambil angka saja: 4000
                    var suffix = text.replace(/[0-9]/g, '');     // ambil sisanya: "+"

                    $({ Counter: 0 }).animate({ Counter: target }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.ceil(this.Counter) + suffix);
                        },
                        complete: function () {
                            $this.text(target + suffix);
                        }
                    });
                });

                $(this).unbind('inview');
            }
        });
        /* END COUNTDOWN JS */

        /*START TESTIMONIAL JS*/
        $("#testimonial-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [980, 1],
            itemsTablet: [768, 1],
            itemsMobile: [650, 1],
            pagination: true,
            navigation: true,
            navigationText: ["", ""],
            slideSpeed: 1000,
            autoPlay: false
        });
        /*END TESTIMONIAL JS*/

        /*START TESTIMONIAL JS*/
        $("#testimonial-slider2").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [980, 2],
            itemsTablet: [768, 2],
            itemsMobile: [650, 1],
            pagination: true,
            navigation: true,
            navigationText: ["", ""],
            slideSpeed: 1000,
            autoPlay: false
        });
        /*END TESTIMONIAL JS*/

        /*START PARTNER LOGO*/
        $('.partner').owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
        /*END PARTNER LOGO*/
        $('.awards-carousel').owlCarousel({
            autoPlay: 3000,
            items: 4,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [768, 2],
            itemsMobile: [480, 1],

            pagination: true,
            navigation: false
        });
    });


    $('.client-carousel').owlCarousel({
        autoPlay: 3000,
        items: 5,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [480, 1],

        pagination: false,
        navigation: false
    });

    


    /*START WOW ANIMATION JS*/
    new WOW().init();
    /*END WOW ANIMATION JS*/

})(jQuery);



