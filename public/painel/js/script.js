$(document).on('click', '#btn-menu', function () {
    $(".side-menu").animate({ "left": "0" }, 300);
    // $(".menu-mobile").animate({ opacity: 1 }, 150);
    $(".fade-line").animate({ width: '100%' }, 0);
});
$(document).on('click', '.fade-line', function () {
    $(".side-menu").animate({ "left": "-100%" }, 300);
    // $(".menu-mobile").animate({ opacity: 0 }, 0);
    $(".fade-line").animate({ width: '0' }, 0);
});
