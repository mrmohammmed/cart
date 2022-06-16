$(document).ready(function() {

    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= 95 && !$('nav').hasClass('fixed')) {
            $('nav').addClass('fixed');
            $('.pagination-nav').removeClass("fixed");
        } else if ($(window).scrollTop() < 95 && $('nav').hasClass('fixed')) {
            $('nav').removeClass('fixed')
        }
    });






    $('#slider').owlCarousel({

        autoplay: true,
        rtl: true,
        loop: true,
        nav: true,
        dots: true,
        transitionStyle: true,
        autoplayTimeout: 6000,
        smartSpeed: 1000,
        navText: [
            "<i class='fa fa-arrow-right'></i>",
            "<i class='fa fa-arrow-left'></i>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });


    $('#slider2').owlCarousel({

        autoplay: true,
        rtl: true,
        loop: true,
        nav: true,
        dots: true,
        transitionStyle: true,
        autoplayTimeout: 6000,
        smartSpeed: 1000,
        navText: [
            "<i class='fa fa-arrow-right'></i>",
            "<i class='fa fa-arrow-left'></i>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });



    $('#matger').owlCarousel({

        autoplay: true,
        rtl: true,
        loop: true,
        nav: true,
        dots: true,
        transitionStyle: true,
        autoplayTimeout: 6000,
        smartSpeed: 1000,
        navText: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });



    $('#client').owlCarousel({

        autoplay: true,
        rtl: true,
        loop: true,
        nav: true,
        dots: true,
        margin: 20,
        transitionStyle: true,
        autoplayTimeout: 6000,
        smartSpeed: 1000,
        navText: [
            "<i class='fa fa-arrow-right'></i>",
            "<i class='fa fa-arrow-left'></i>"
        ],
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });








});