// Document ready
jQuery(function($){

    // --------------------------------------------------
    // Base
    // --------------------------------------------------

    // Enable mandatory base
    mandatory.init();

    // --------------------------------------------------
    // Set element heights
    // -------------------------------------------------

    // Get height
    var content_object = $("#content"),
        document_height = $(document).height(),
        window_height = $(window).height();

    // Window height is larger than document height
    if (window_height > document_height) document_height = window_height;

    // Apply min height to elements
    content_object.css("min-height", document_height);

    // Window is resized
    $(window).resize( function() {

        // Apply min height to elements
        content_object.css("min-height", document_height);

    });

    // --------------------------------------------------
    // Sidebar
    // --------------------------------------------------

    // Enable sidebar
    sidebar.init();

});