$('.product-grid').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    // centerMode: true,
    // variableWidth: true,
    // adaptiveHeight: true,
    responsive: [

        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
            }
        },

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('#logos').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    // centerMode: true,
    variableWidth: true,
    // adaptiveHeight: true,
    responsive: [

        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: false,
            }
        },

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$(document).on('click', '#btn-menu', function () {
    $(".menu-mobile").animate({ "left": "0" }, 150);
    // $(".menu-mobile").animate({ opacity: 1 }, 150);
});
$(document).on('click', '.btn0close', function () {
    $(".menu-mobile").animate({ "left": "-100%" }, 150);
    // $(".menu-mobile").animate({ opacity: 0 }, 0);
});
