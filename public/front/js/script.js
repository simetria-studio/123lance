$('#products').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 2000,
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
    autoplay: true,
    autoplaySpeed: 3000,
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
    $(".menu-mobile").animate({ "left": "0" }, 300);
    // $(".menu-mobile").animate({ opacity: 1 }, 150);
    $(".fade-line").animate({ width: '100%' }, 0);
});
$(document).on('click', '.btn0close', function () {
    $(".menu-mobile").animate({ "left": "-100%" }, 300);
    // $(".menu-mobile").animate({ opacity: 0 }, 0);
    $(".fade-line").animate({ width: '0' }, 0);
});


$(".uv-accordinaton-list").on( "click", function() {
    $(".uv-accordinaton-list>:first-child").text("+");
    $(".uv-accordinaton-list h2").removeClass("hilighted");
    $(".uv-accordition-detail").slideUp();
    if($(this).find(">:first-child").text() == "+") {
     $(this).next().slideToggle(200);
       $(this).find(">:first-child").text("-");
      $(this).find("h2").addClass("hilighted");
    }
  });
