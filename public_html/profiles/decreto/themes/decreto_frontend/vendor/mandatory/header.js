// |--------------------------------------------------------------------------
// | Header
// |--------------------------------------------------------------------------
// |
// | This jQuery script is written by
// | Morten Nissen
// |
// | And enhances the Bootstrap modal. Furthermore adds functionality such as:
// | - responsive navigation
// | - sticky header
// |

var header = {

    // Set default configurations
    config: {
        centered:                               false
    },

    // Initialization
    init: function() {

        // Stuff that needs to be handled prior to the loading
        this.launch();

    },

    // Launch
    launch: function() {

        // Launch sticky header
        header.sticky();

    },

    // |-------------------------------------------
    // | Sticky header
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Sticky
    sticky: function() {

        // Get variables
        var wrapper                         =   $("#wrapper"),
            header                          =   $(".header"),
            header_height                   =   header.outerHeight(true),
            header_top                      =   header.find(".header-top");

        // Header contains a top
        if(header_top.length > 0) {

            // The top should NOT stick
            if(header_top.hasClass("not-sticky")) this.top_sticky();

        }

        // Header should not be sticky
        if( ! header.hasClass("header-sticky")) {

            // Remove wrapper padding
            wrapper.css("padding-top", 0);

            // Return
            return false;

        }

        // Faceless - do not add padding
        if(header.hasClass("header-faceless")) return false;

        // Add padding to the wrapper
        wrapper.css("padding-top", header_height);

    },

    // Top
    top_sticky: function() {

        // Get variables
        var header                          =   $(".header"),
            header_top                      =   header.find(".header-top"),
            header_top_height               =   header_top.outerHeight(true);

        // Top should be visible
        if ($(document).scrollTop() <= header_top_height) {

            // Remove stickyness from header
            header.removeClass("header-sticky").css("top", 0);

        }

        // Top should not be visible
        else {

            // It's already attached - do nothing
            if( header.hasClass("header-sticky")) return false;

            // It's not attached - attach it
            header.addClass("header-sticky").css("top", -header_top_height);

        }

    }

}