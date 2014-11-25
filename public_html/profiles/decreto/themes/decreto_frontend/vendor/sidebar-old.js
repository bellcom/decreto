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

        // Sidebar configurations
        sidebar: {

            // Default animation options
            animation: {
                duration: 400,
                easing: 'easeOutSine',
            },

            // Main (base)
            main: {
                raw: 'sidebar',
                identifier: '.sidebar',
                open: {
                    raw: 'sidebar-open',
                    identifier: '.sidebar-open'
                }
            },

            // Sidebar left
            left: {
                raw: 'sidebar-left',
                identifier: '.sidebar-left',
                open: {
                    raw: 'sidebar-left-open',
                    identifier: '.sidebar-left-open'
                },
                content_show_css: {
                    'margin-left': '280px'
                },
                content_hide_css: {
                    'margin-left': 0
                },
                sidebar_show_css: {
                    'margin-left': 0
                },
                sidebar_hide_css: {
                    'margin-left': '-280px'
                }
            },

            // Sidebar right
            right: {
                raw: 'sidebar-right',
                identifier: '.sidebar-right',
                open: {
                    raw: 'sidebar-right-open',
                    identifier: '.sidebar-right-open'
                },
                content_show_css: {
                    'margin-right': '320px'
                },
                content_hide_css: {
                    'margin-right': 0
                },
                sidebar_show_css: {
                    'margin-right': 0
                },
                sidebar_hide_css: {
                    'margin-right': '-320px'
                }
            }
        },

        // Navigation
        navigation: {
            animation: {
                duration: 400,
                easing: 'easeOutSine',
                pre: {
                    opacity: .1,
                    height: 0,
                    top: -20
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

        // Get configurations
        var config = sidebar.config;

        // Event listener - sidebar toggle
        sidebar.sidebar_toggle_event_listener();

        // Event listener - navigation toggle
        sidebar.navigation_toggle_event_listener();

    },

    // Sidebar toggle - event listener
    sidebar_toggle_event_listener: function () {

        // Button
        jQuery('[data-toggle-sidebar]').on('click', function (event) {

            // Attribute
            var attribute = jQuery(this).attr('data-toggle-sidebar');

            // Start toggling
            sidebar.sidebar_toggle(attribute);

            // Prevent URL hashing
            event.preventDefault();

        });

    },

    // Navigation toggle - event listener
    navigation_toggle_event_listener: function () {

        // Button
        jQuery('.sidebar-dropdown > a, .sidebar-dropdown-submenu > a').on('click', function(event) {

            // Toggle dropdown
            sidebar.navigation_toggle(jQuery(this));

            // Prevent URL hashing
            event.preventDefault();

        });

    },

    // |-------------------------------------------
    // | Sidebar toggle
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Toggle - sidebar
    sidebar_toggle: function(attribute) {

        // Validate attribute
        if (attribute != 'left' && attribute != 'right') return false;

        // Get default options
        var config = sidebar.config,
            sidebar_general_config = config.sidebar,
            sidebar_config = sidebar.sidebar_get_config(attribute),
            body_object = jQuery('body');

        // Close - it's currently open
        if (body_object.hasClass(sidebar_config.open.raw)) {
            sidebar.sidebar_close(sidebar_config);
        }

        // Open - it's currently close
        else {
            sidebar.sidebar_open(sidebar_config);
        }

    },

    // Sidebar - open
    sidebar_open: function(sidebar_config) {

        // Get default options
        var config = sidebar.config,
            sidebar_general_config = config.sidebar,
            content_css = sidebar_config.content_show_css,
            sidebar_css = sidebar_config.sidebar_show_css,
            body_object = jQuery('body'),
            sidebar_object = jQuery(sidebar_config.identifier),
            callback = function() {

                // Add open class to body
                body_object
                    .addClass(sidebar_general_config.main.open.raw)
                    .addClass(sidebar_config.open.raw);

            };

        // Sidebar does not exist - throw error
        if (sidebar_object.length == 0) {

            // Alert error
            alert('Sidebar does not exist.');

            // Abort
            return false;

        }

        // Toggle sidebar (and content)
        sidebar.sidebar_toggle_animated(sidebar_object, sidebar_css, content_css, callback);

    },

    // Sidebar - close
    sidebar_close: function(sidebar_config) {

        // Get default options
        var config = sidebar.config,
            sidebar_general_config = config.sidebar,
            content_css = sidebar_config.content_hide_css,
            sidebar_css = sidebar_config.sidebar_hide_css,
            body_object = jQuery('body'),
            sidebar_object = jQuery(sidebar_config.identifier),
            callback = function() {

                // Remove all open class' to body
                body_object
                    .removeClass(sidebar_general_config.main.open.raw)
                    .removeClass(sidebar_config.open.raw);

            };

        // Sidebar does not exist - throw error
        if (sidebar_object.length == 0) {

            // Alert error
            alert('Sidebar does not exist.');

            // Abort
            return false;

        }

        // Toggle sidebar (and content)
        sidebar.sidebar_toggle_animated(sidebar_object, sidebar_css, content_css, callback);

    },

    // |-------------------------------------------
    // | Sidebar (helpers)
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Sidebar - get correct configurations
    sidebar_get_config: function(attribute) {

        // Get default options
        var config = sidebar.config,
            sidebar_general_config = config.sidebar;

        // Sidebar left
        if (attribute == 'left') {
            return sidebar_general_config.left;
        }

        // Sidebar right
        else if (attribute == 'right') {
            return sidebar_general_config.right;
        }

        // None of the above
        else {
            return false;
        }

    },

    // Sidebar - toggle with animation
    sidebar_toggle_animated: function (sidebar_object, sidebar_css, content_css, callback) {

        // Get default options
        var config = sidebar.config,
            animation_config = config.sidebar.animation,
            content_object = jQuery('#content'),
            header_object = jQuery('.header-sticky');

        // Sidebar - animate
        sidebar_object
            .animate(
            // CSS
            sidebar_css,
            {
                // Duration - animation
                duration: animation_config.duration, // how fast we are animating

                // Easing - animation transition
                easing: animation_config.easing,

                // Animation complete - run callback
                complete: callback
            }
        );

        // Content - animate
        content_object
            .animate(
            // CSS
            content_css,
            {
                // Duration - animation
                duration: animation_config.duration, // how fast we are animating

                // Easing - animation transition
                easing: animation_config.easing
            }
        );

        // Header - animate
        header_object
            .animate(
            // CSS
            content_css,
            {
                // Duration - animation
                duration: animation_config.duration, // how fast we are animating

                // Easing - animation transition
                easing: animation_config.easing
            }
        );

    },

    // |-------------------------------------------
    // | Navigation toggle
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Navigation toggle
    navigation_toggle: function(scope) {

        // Get configurations
        var config = sidebar.config,
            parent = scope.parent();

        // Hide dropdown menu
        if(parent.hasClass("sidebar-dropdown-visible")) sidebar.navigation_hide(scope);

        // Show dropdown menu
        else sidebar.navigation_show(scope);

    },

    // Show dropdown menu
    navigation_show: function(scope) {

        // Get configurations
        var config = sidebar.config,
            navigation_config = config.navigation,
            parent = scope.parent(),
            dropdown_menu = parent.find('> .sidebar-dropdown-menu'),
            dropdown_menu_height = dropdown_menu.outerHeight(true),
            pre_animation_css = {
                opacity: navigation_config.animation.pre.opacity,
                height: navigation_config.animation.pre.height,
                top: navigation_config.animation.pre.top
            },
            animation_css = {
                opacity: 1,
                height: dropdown_menu_height,
                top: 0
            },
            callback_function = function() {

                // Remove all styles from dropdown menu
                dropdown_menu.attr('style', '');

            };

        // Run through all visible dropdowns
        jQuery('.sidebar')
            .find('.sidebar-navigation')
            .find('.sidebar-dropdown-visible > a')
            .each(function() {

                // Hide
                sidebar.navigation_hide(jQuery(this));

            });

        // Show with animation
        parent.addClass('sidebar-dropdown-visible');

        // Add dropdown menu visibility
        dropdown_menu.addClass('sidebar-dropdown-menu-visible');

        // Apply pre-animation CSS
        dropdown_menu.css(pre_animation_css);

        // Show with animation
        sidebar.animated_toggle(dropdown_menu, animation_css, callback_function);

    },

    // Hide dropdown menu
    navigation_hide: function(scope) {

        // Get configurations
        var config = sidebar.config,
            parent = scope.parent(),
            dropdown_menu = parent.find('> .sidebar-dropdown-menu'),
            animation_css = {
                height: 0,
                opacity: .1
            },
            callback_function = function() {

                // Remove dropdown menu visibility
                dropdown_menu.removeClass('sidebar-dropdown-menu-visible');

                // Remove all styles from dropdown menu
                dropdown_menu.attr('style', '');

            };

        // Remove visibility
        parent.removeClass('sidebar-dropdown-visible');

        // Show with animation
        sidebar.animated_toggle(dropdown_menu, animation_css, callback_function);

    },

    // |-------------------------------------------
    // | Helper functions
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Animated toggle
    animated_toggle: function (scope, animation_css, callback_function) {

        // Get configurations
        var config = sidebar.config
            animation_config = config.navigation.animation;

        // Perform animation
        scope.animate(
            animation_css,
            {
                duration: animation_config.duration, // how fast we are animating
                easing: animation_config.easing, // the type of easing
                complete: callback_function
            });

    }

}