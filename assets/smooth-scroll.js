$(".contact-us-button").click(function() {
    $('html,body').animate({
        scrollTop: $("#our-services-container").offset().top},
        'slow');
});

$(".contact-us-button-mobile").click(function() {
    $('html,body').animate({
        scrollTop: $("#contact-us").offset().top},
        'slow');
});
