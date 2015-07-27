jQuery(function() {
    //fix menu
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 300) {
            jQuery('.menu-wrapper').addClass("menu-fixed");
        }
        else {
            jQuery('.menu-wrapper').removeClass("menu-fixed");
        }
    });
});

