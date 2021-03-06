// |--------------------------------------------------------------------------
// | Mandatory
// |--------------------------------------------------------------------------
// |
// | This jQuery script is written by
// | Morten Nissen
// |
// | And enhances the Bootstrap modal. Furthermore adds functionality such as:
// |
// | Layout
// | - Footer
// | -- Attached to bottom
// |
// | - Appear (animation)
// |
// | Miscellaneous
// | - Enable Boostrap tooltips
// | - Disable form autocomplete
// |

// Mandatory
var mandatory = {

    // Initialization
    init: function() {

        // Events
        mandatory.events();

        // Always
        mandatory.always();

    },

    // Events - functions that should be run on certain events
    events: function() {

        // Window resizing
        jQuery(window).resize( function() {

            // Footer
            mandatory.footer();

        });

        // Button clicked
        jQuery(".btn-loader").on("click", function() {

            // Enable button loader
            mandatory.enable_button_loader(jQuery(this));

        });

    },

    // Always - functions that need to be run at all times.
    always: function() {

        // Footer
        mandatory.footer();

        // Enable Bootstrap tooltips
        mandatory.enable_bootstrap_tooltips();

        // Disable form autocomplete
        mandatory.disable_form_autocomplete();

    },

    // |-------------------------------------------
    // | Footer
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Footer
    footer: function() {

        // Validate touch state - only non touch devices
        if (Modernizr.touch) return false;

        // Footer - attached to bottom
        mandatory.footer_attached_to_bottom();

    },

    // Attached to bottom
    footer_attached_to_bottom: function() {

        // Get configurations
        var content_object = jQuery("#content"),
            footer_object = jQuery(".footer"),
            footer_height = footer_object.outerHeight(true);

        // Apply padding to the content
        content_object.css("padding-bottom", footer_height);

    },

    // |-------------------------------------------
    // | Appear (animation)
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Enable appear
    enable_appear: function() {

        // Get objects
        var appear_object = jQuery(".appear"),
            animation_object = jQuery(".animation"),
            animation_delay_class = "animation-delay-";

        // Touch device - disallowed
        if (Modernizr.touch || ! Modernizr.cssanimations) {

            // Remove all types of animation classes
            jQuery(".animation")
                .removeClass("animation")
                .removeClass("animation-appear-from-top")
                .removeClass("animation-appear-from-right")
                .removeClass("animation-appear-from-left")
                .removeClass("animation-appear-from-bottom")
                .removeClass("animation-appear-from-center");

            // Abort
            return false;

        }

        // Enable appear
        appear_object.appear();

        // Force processing on animation objects
        animation_object.appear({
            force_process: true
        });

        // Animation object has appeared
        animation_object.on("appear", function (data) {

            var element = jQuery(this);

            // Get delay
            if (element.hasClass(animation_delay_class + "0-1")) { delay = 100; }
            else if (element.hasClass(animation_delay_class + "0-2")) { delay = 200; }
            else if (element.hasClass(animation_delay_class + "0-3")) { delay = 300; }
            else if (element.hasClass(animation_delay_class + "0-4")) { delay = 400; }
            else if (element.hasClass(animation_delay_class + "0-5")) { delay = 500; }
            else if (element.hasClass(animation_delay_class + "0-6")) { delay = 600; }
            else if (element.hasClass(animation_delay_class + "0-7")) { delay = 700; }
            else if (element.hasClass(animation_delay_class + "0-8")) { delay = 800; }
            else if (element.hasClass(animation_delay_class + "0-9")) { delay = 900; }
            else if (element.hasClass(animation_delay_class + "1-0")) { delay = 1000; }

            else if (element.hasClass(animation_delay_class + "1-1")) { delay = 1100; }
            else if (element.hasClass(animation_delay_class + "1-2")) { delay = 1200; }
            else if (element.hasClass(animation_delay_class + "1-3")) { delay = 1300; }
            else if (element.hasClass(animation_delay_class + "1-4")) { delay = 1400; }
            else if (element.hasClass(animation_delay_class + "1-5")) { delay = 1500; }
            else if (element.hasClass(animation_delay_class + "1-6")) { delay = 1600; }
            else if (element.hasClass(animation_delay_class + "1-7")) { delay = 1700; }
            else if (element.hasClass(animation_delay_class + "1-8")) { delay = 1800; }
            else if (element.hasClass(animation_delay_class + "1-9")) { delay = 1900; }
            else if (element.hasClass(animation_delay_class + "2-0")) { delay = 2000; }
            else { delay = 0; }

            // Add animation after the given delay
            setTimeout(function () {
                element.addClass("animation-start");
            }, delay);

        });

    },

    // --------------------------------------------------
    // Miscellaneous
    // --------------------------------------------------

    // Enable Bootstrap tooltips
    enable_bootstrap_tooltips: function() {

        // Validate touch state - only non touch devices
        if (Modernizr.touch) {

            // Hide tooltips
            jQuery("[data-toggle=tooltip]").tooltip("hide");

            // Abort
            return false;

        }

        // Enable tooltips
        jQuery("[data-toggle=tooltip]").tooltip();

    },

    // Disable form autocomplete
    disable_form_autocomplete: function() {

        // Validate touch state - only non touch devices
        if (Modernizr.touch) return false;

        // Disable autocomplete
        jQuery("form").attr("autocomplete", "off");

    },

    // Enable button loader
    enable_button_loader: function(scope) {

        // Add "icon-spin" class to icon
        scope.find(".icon").addClass("icon-spin");

    }

}