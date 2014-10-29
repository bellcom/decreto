// |--------------------------------------------------------------------------
// | Sidebar
// |--------------------------------------------------------------------------
// |
// | This jQuery script is written by
// | Morten Nissen
// |
// | Adds functionality such as:
// | - menu toggling (with animation)
// |


// Sidebar
var sidebar = {

    // Set default configurations
    config: {

        toggleOptions: {
            direction:                              "left", // Default (left/right)
            duration:                               .4,
            opacity:                                .1,
            easing:                                 Sine.easeInOut,

            show: {
                pre: {
                    opacity:                        .1,
                    height:                         0,
                    top:                            -20
                }
            }
        }
    },




    // |-------------------------------------------
    // | Create
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Initialization
    init: function(config) {

        // Override default configurations
        jQuery.extend(sidebar.config, config);

        // Event listener
        sidebar.events();

    },

    // Events
    events: function() {

        // Get configurations
        var config                          =   sidebar.config;

        // Sidebar toggle
        jQuery("[data-toggle-sidebar]").on("click", function(event) {

            //
            sidebar.toggleSidebar(jQuery(this));

            // Prevent URL hashing
            event.preventDefault();

        });

        // Dropdown toggle
        jQuery(".sidebar-dropdown > a, .sidebar-dropdown-submenu > a").on("click", function(event) {

            // Toggle dropdown
            sidebar.dropdownToggle(jQuery(this));

            // Prevent URL hashing
            event.preventDefault();

        });

    },



    // Toggle sidebar
    toggleSidebar: function(scope) {

        // Get configurations
        var config                              =   sidebar.config,
            body                                =   jQuery("body"),
            sidebar_identifier                  =   scope.attr("data-toggle-sidebar"),
            options                             =   config.options;

        // Open - close it
        if(body.hasClass("sidebar-open") || body.hasClass(sidebar_identifier + "-open")) {

            // Close
            sidebar.toggleSidebarClose(scope);

        }

        // Closed - open it
        else {

            // Open
            sidebar.toggleSidebarOpen(scope);

        }

    },

    // Open sidebar
    toggleSidebarOpen: function(scope) {

        // Get configurations
        var config                              =   sidebar.config,
            options                             =   config.toggleOptions,
            body                                =   jQuery("body"),
            wrapper_object                      =   jQuery("#wrapper"),
            sidebar_identifier                  =   scope.attr("data-toggle-sidebar"),
            sidebar_object                      =   jQuery("." + sidebar_identifier),
            width                               =   sidebar_object.outerWidth(true),
            direction                           =   sidebar_object.attr("data-sidebar-direction"),
            sidebar_animation_css               =   {
                                                        left:           0
                                                    },
            wrapper_animation_css               =   {
                                                        left:           width
                                                    };

        // Direction
        if(direction != "left" && direction != "right") direction = config.toggleOptions.direction;



        // Show - sidebar
        TweenMax.to(
            sidebar_object,
            options.duration,
            {
                css:                            sidebar_animation_css,
                ease:                           options.easing,
                onComplete: function() {

                    // Add open class to body
                    body.addClass("sidebar-open");

                    // Add sidebar identifier open class to body
                    body.addClass(sidebar_identifier + "-open");

                }
            }
        );

        // Show - wrapper
        TweenMax.to(
            wrapper_object,
            options.duration,
            {
                css:                            wrapper_animation_css,
                ease:                           options.easing
            }
        );









    },

    // Close sidebar
    toggleSidebarClose: function(scope) {},

    // Slide content in/out
    slideContent: function(object, direction, distance) {},




    // |-------------------------------------------
    // | Toggling
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Toggle dropdown menu (open/close)
    dropdownToggle: function(scope) {

        // Get configurations
        var config                          =   sidebar.config,
            parent                          =   scope.parent();

        // Hide dropdown menu
        if( parent.hasClass("sidebar-dropdown-visible") ) {

            // Hide
            sidebar.dropdownToggleHide(scope);

        }

        // Show dropdown menu
        else {

            // Show
            sidebar.dropdownToggleShow(scope);

        }

    },

    // Show dropdown menu
    dropdownToggleShow: function(scope) {

        // Get configurations
        var config                          =   sidebar.config,
            options                         =   config.toggleOptions,
            parent                          =   scope.parent(),
            dropdown_menu                   =   parent.find("> .sidebar-dropdown-menu"),
            dropdown_menu_height            =   dropdown_menu.outerHeight(true),
            pre_animation_css               =   {
                                                    opacity:        options.show.pre.opacity,
                                                    height:         options.show.pre.height,
                                                    top:            options.show.pre.top
                                                },
            animation_css                   =   {
                                                    opacity:        1,
                                                    height:         dropdown_menu_height,
                                                    top:            0
                                                };

        // Run through all visible dropdowns
        jQuery(".sidebar")
            .find(".sidebar-navigation")
            .find(".sidebar-dropdown-visible > a")
            .each(function() {

                // Hide
                sidebar.dropdownToggleHide(jQuery(this));

            });

        // Show with animation
        parent.addClass("sidebar-dropdown-visible");

        // Add dropdown menu visibility
        dropdown_menu.addClass("sidebar-dropdown-menu-visible");

        // Apply pre-animation CSS
        TweenMax.set(dropdown_menu, {css: pre_animation_css});

        // Show with animation
        TweenMax.to(
            dropdown_menu,
            options.duration,
            {
                css:                            animation_css,
                ease:                           options.easing,
                onComplete: function() {

                    // Remove all styles from dropdown menu
                    dropdown_menu.attr("style", "");

                }
            }
        );

    },

    // Hide dropdown menu
    dropdownToggleHide: function(scope) {

        // Get configurations
        var config                          =   sidebar.config,
            options                         =   config.toggleOptions,
            parent                          =   scope.parent(),
            dropdown_menu                   =   parent.find("> .sidebar-dropdown-menu");

        // Remove visibility
        parent.removeClass("sidebar-dropdown-visible");

        // Hide with animation
        TweenMax.to(
            dropdown_menu,
            options.duration,
            {
                css: {
                    height:                     0,
                    opacity:                    options.opacity
                },
                ease:                           options.easing,
                onComplete: function() {

                    // Remove dropdown menu visibility
                    dropdown_menu.removeClass("sidebar-dropdown-menu-visible");

                    // Remove all styles from dropdown menu
                    dropdown_menu.attr("style", "");

                }
            }
        );
    }
}
