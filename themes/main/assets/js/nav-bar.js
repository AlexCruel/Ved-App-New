$(window).resize(function () {
    let windowSize = $(window).width();

    if (windowSize <= 1200) {
        $('ul').removeClass('gap-5');
    } else {
        $('ul').addClass('gap-5');
    }
});
