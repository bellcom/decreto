// |--------------------------------------------------------------------------
// | Sidebar
// |--------------------------------------------------------------------------
// |
// | This jQuery script is written by
// | Morten Nissen
// |

// Sidebar
var sidebar = {

    // Set default configurations
    config: {
        overlay:                            true, // True/false

        animation: {
            duration:                       400,
            easing:                         "easeOutSine",
        },

        // Sidebar
        sidebar: {
            base: {
                id: {
                    raw:                    "sidebar",
                    operator:               ".sidebar"
                },
                body_id: {
                    open: {
                        raw:                "sidebar-open",
                        operator:           ".sidebar-open"
                    }
                },
            },
            left: {
                id: {
                    raw:                    "sidebar-left",
                    operator:               ".sidebar-left"
                },
                body_id: {
                    open: {
                        raw:                "sidebar-left-open",
                        operator:           ".sidebar-left-open"
                    }
                },
                animation_css: {
                    open: {
                        content: {
                            "left":  "280px"
                        },
                    },
                    close: {
                        content: {
                            "left":  "0"
                        },
                    }
                }
            }
        }
    },

    // |-------------------------------------------
    // | Initializing
    // |-------------------------------------------
    // |
    // | Initializes important startup functions
    // | and launches nescessary event listeners.
    // |

    // Initialization
    init: function (config) {

        // Override default configurations
        jQuery.extend(sidebar.config, config);

        // Event listener
        sidebar.event_listener();

    },

    // |-------------------------------------------
    // | Event listeners
    // |-------------------------------------------
    // |
    // | Initializes important startup functions
    // | and launches nescessary event listeners.
    // |

    // Event listener
    event_listener: function () {

        // Sidebar toggle
        sidebar.sidebar_toggle_event_listener();

        // Dropdown toggle
        sidebar.dropdown_menu_toggle_event_listener();

    },

    // |-------------------------------------------
    // | Sidebar toggle
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Get configurations
    sidebar_get_config: function(attribute) {

        // Get configurations
        var config = sidebar.config.sidebar;

        // Left
        if (attribute == "left") return config.left;

        // Right
        else return config.right;

    },

    // Event listener
    sidebar_toggle_event_listener: function() {

        // Button
        jQuery("[data-toggle-sidebar]").on("click", function (event) {

            // Attribute
            var attribute = jQuery(this).attr("data-toggle-sidebar");

            // Validate attribute
            if (attribute != "left" && attribute != "right") return false;

            // Start toggling
            sidebar.sidebar_toggle(attribute);

            // Prevent URL hashing
            event.preventDefault();

        });

    },

    // Toggle
    sidebar_toggle: function(attribute) {

        // Get configurations
        var config              = sidebar.config,
            body_object         = jQuery("body"),
            sidebar_base_config = config.sidebar.base,
            sidebar_type_config = sidebar.sidebar_get_config(attribute);

        // Open - close sidebar
        if (body_object.hasClass(sidebar_base_config.body_id.open.raw)) sidebar.sidebar_close(sidebar_type_config);

        // Closed - open sidebar
        else sidebar.sidebar_open(sidebar_type_config);

    },

    // Open
    sidebar_open: function(sidebar_type_config) {

        // Get configurations
        var config = sidebar.config,
            body_object = jQuery("body"),
            sidebar_base_config = config.sidebar.base;

        // Overlay
        if(config.overlay) {

        }

        // Add open class to body
        body_object
            .addClass(sidebar_base_config.body_id.open.raw)
            .addClass(sidebar_type_config.body_id.open.raw);

    },

    // Close
    sidebar_close: function(sidebar_type_config) {

        // Get configurations
        var config = sidebar.config,
            body_object = jQuery("body"),
            sidebar_base_config = config.sidebar.base;

        // Overlay
        if(config.overlay) {

        }

        // Remove open class from body
        body_object
            .removeClass(sidebar_base_config.body_id.open.raw)
            .removeClass(sidebar_type_config.body_id.open.raw);

    },

    // |-------------------------------------------
    // | Dropdown menu
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Event listener
    dropdown_menu_toggle_event_listener: function() {

        // Dropdown click
        jQuery(".sidebar .sidebar-nav-dropdown > a").on("click", function(event) {

            // Toggle
            sidebar.dropdown_menu_toggle(jQuery(this));

            // Prevent URL hashing
            event.preventDefault();

        });

    },

    // Toggle
    dropdown_menu_toggle: function(scope) {

        // Get configurations
        var parent_object = scope.parent();

        // Active - hide it
        if(parent_object.hasClass("sidebar-nav-active")) sidebar.dropdown_menu_close(scope);

        // Not active - show it
        else sidebar.dropdown_menu_show(scope);

    },

    // Show
    dropdown_menu_show: function(scope) {

        // Set configurations
        var parent_object = scope.parent(),
            dropdown_menu_object = parent_object.find("> .sidebar-nav-dropdown-menu"),
            dropdown_menu_object_height = dropdown_menu_object.outerHeight(true),
            pre_animation_css = { opacity: .1, height: 0, top: -20 },
            animation_css = { opacity: 1, height: dropdown_menu_object_height, top: 0 },
            callback_function = function() {

                // Remove all styles from dropdown menu
                dropdown_menu_object.attr("style", "");

            };

        // Close all open siblings
        sidebar.dropdown_menu_close_siblings(parent_object);

        // Add active class
        parent_object.addClass("sidebar-nav-active");

        // Dropdown
        dropdown_menu_object
            .addClass("sidebar-nav-active")
            .css(pre_animation_css);

        // Show with animation
        sidebar.animated_toggle(dropdown_menu_object, animation_css, callback_function);

    },

    // Close
    dropdown_menu_close: function(scope) {

        // Set configurations
        var parent_object = scope.parent(),
            dropdown_menu_object = parent_object.children(".sidebar-nav-dropdown-menu"),
            animation_css = { height: 0, opacity: .1 },
            callback_function = function() {

                // Remove all active class' from
                // dropdown menu and all child elements
                // with active states
                dropdown_menu_object
                    .removeClass("sidebar-nav-active")
                    .attr("style", "")
                    .find(".sidebar-nav-active")
                        .removeClass("sidebar-nav-active")
                        .attr("style", "");

            };

        // Remove active state from parent
        parent_object.removeClass("sidebar-nav-active");

        // Close - animated
        sidebar.animated_toggle(dropdown_menu_object, animation_css, callback_function);

    },

    // Close siblings
    dropdown_menu_close_siblings: function(parent_object) {

        // Run through all siblings
        parent_object
            .siblings(".sidebar-nav-dropdown.sidebar-nav-active")
            .each(function() {

                // Grab scope
                var scope = jQuery(this).find("> a");

                // Close
                sidebar.dropdown_menu_close(scope);

            });

        // Return
        return true;

    },

    // |-------------------------------------------
    // | Helper functions
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Animated toggle
    animated_toggle: function(scope, animation_css, callback_function) {

        // Perform animation
        scope.animate(
            animation_css,
            {
                duration: 400, // how fast we are animating
                easing: "easeOutSine", // the type of easing
                complete: callback_function
            });

    }

}