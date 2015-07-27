// TinyNav.js
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
    // Primary Menu
    jQuery('#menu-primary-items').tinyNav({
        active: 'current-menu-item', // Set the "active" class
        label: '', // String: Sets the <label> text for the <select> (if not set, no label will be added)
        header: tinynav_settings_vars.header_primary // String: Specify text for "header" and show header instead of the active item
    });
    // Secondary Menu
    jQuery('#menu-secondary-items').tinyNav({
        active: 'current-menu-item', // Set the "active" class
        label: '', // String: Sets the <label> text for the <select> (if not set, no label will be added)
        header: tinynav_settings_vars.header_secondary // String: Specify text for "header" and show header instead of the active item
    });
});