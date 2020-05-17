$(function() {
    $(".btn-mobile").click(function() {
        $(".navbar__menu").toggleClass("hide");

    });

    $(window).scroll(function(e) {
        let scrollTop = $(this).scrollTop();
        if (scrollTop > 200) {
            $("[data-navbar-area]").addClass("fixed top-0");
            $("[data-nav-area]").removeClass("xl:px-24 xl:mx-6 lg:container lg:px-10 lg:mx-auto px-8");
            $("[data-nav-menu]").removeClass("rounded-lg");

        } else {
             $("[data-navbar-area]").removeClass("fixed top-0");
             $("[data-nav-area]").addClass("xl:px-24 xl:mx-6 lg:container lg:mx-auto px-8");
             $("[data-nav-menu]").addClass("rounded-lg");
        }
    });

    let slickSlideshow = {
        infinite: true,
        slidesToShow: 1,
        autoplay: true,
        fade: true,
        prevArrow: $(".prev"),
        nextArrow: $(".next")
    };
    $(".slide").slick(slickSlideshow);

    let slickPartner = {
        infinite: true,
        slidesToShow: 4,
        autoplay: true,
        prevArrow: $(".prev"),
        nextArrow: $(".next"),
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },

            {
                breakpoint: 641,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    };
    $(".partner-slider").slick(slickPartner);
});

new WOW().init();
