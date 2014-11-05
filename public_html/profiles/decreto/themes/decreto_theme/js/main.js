// Document ready
jQuery(function($){


    // --------------------------------------------------
    // Set element heights
    // -------------------------------------------------

    // Get height
    var sidebar_left = jQuery('.sidebar-left'),
        sidebar_right = jQuery('.sidebar-right'),
        content = jQuery('#content'),
        sidebar_planner = jQuery('#edit-bullet-points-fieldset-order'),
        sidebar_left_height = sidebar_left.outerHeight(true),
        sidebar_right_height = sidebar_right.outerHeight(true),
        content_height = content.outerHeight(true),
        document_height = $(document).height(),
        window_height = $(window).height();

    // Window height is larger than document height
    if (window_height > document_height) {
        document_height = window_height;
    }

    // Apply min height to elements
    sidebar_left.css('min-height', document_height);
    sidebar_right.css('min-height', document_height);
    content.css('min-height', document_height);
    sidebar_planner.css('min-height', document_height);

    //jQuery('body').addClass('sidebar-open').addClass('sidebar-left-open');



    // Sidebar content exists - open right sidebar
    if(sidebar_planner.length != 0) {
        jQuery('body').addClass('sidebar-open').addClass('sidebar-right-open');
    }

    // Open left sidebar
    else {
        jQuery('body').addClass('sidebar-open').addClass('sidebar-left-open');
    }


    // --------------------------------------------------
    // Enable sidebar
    // --------------------------------------------------
    sidebar.init();


});
