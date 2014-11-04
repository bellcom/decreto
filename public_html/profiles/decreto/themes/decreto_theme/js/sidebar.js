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
        // Default animation options
        animation: {
            duration: 400,
            easing: 'easeOutSine',
        },

        // Sidebar configurations
        sidebar: {

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
                }
            },

            // Sidebar right
            right: {
                raw: 'sidebar-right',
                identifier: '.sidebar-right',
                open: {
                    raw: 'sidebar-right-open',
                    identifier: '.sidebar-right-open'
                }
            }
        },

        // Navigation
        navigation: {
            animation: {
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

            // Toggle sidebar left
            if (attribute == 'left') sidebar.sidebar_left_toggle();

            // Toggle sidebar right
            else if (attribute == 'right') sidebar.sidebar_right_toggle();

            // None of the above - abort
            else return false;

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

    // Toggle - sidebar left
    sidebar_left_toggle: function () {

        // Get configurations
        var config = sidebar.config,
            config_sidebar = config.sidebar,
            body = jQuery('body');

        // A sidebar is open - close it
        if (body.hasClass(config_sidebar.main.open.raw)) {

            // Sidebar left is not the open sidebar - so open it
            if ( ! body.hasClass(config_sidebar.left.open.raw)) {

                // Close the open sidebar
                sidebar.sidebar_close();

                // Open sidebar left
                sidebar.sidebar_left_open();

            }

            // Sidebar left is the open sidebar - close it
            else {

                // Close the open sidebar
                sidebar.sidebar_close();

            }

        }

        // Open sidebar left - it's currently closed
        else sidebar.sidebar_left_open();

    },

    // Toggle - sidebar right
    sidebar_right_toggle: function () {

        // Get configurations
        var config = sidebar.config,
            config_sidebar = config.sidebar,
            body = jQuery('body');

        // A sidebar is open - close it
        if (body.hasClass(config_sidebar.main.open.raw)) {

            // Sidebar right is not the open sidebar - so open it
            if ( ! body.hasClass(config_sidebar.right.open.raw)) {

                // Close the open sidebar
                sidebar.sidebar_close();

                // Open sidebar right
                sidebar.sidebar_right_open();

            }

            // Sidebar right is the open sidebar - close it
            else {

                // Close the open sidebar
                sidebar.sidebar_close();

            }

        }

        // Open sidebar right - it's currently closed
        else sidebar.sidebar_right_open();

    },

    // |-------------------------------------------
    // | Sidebar (open)
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Open - sidebar left
    sidebar_left_open: function () {

        // Get configurations
        var config = sidebar.config,
            config_sidebar = config.sidebar,
            body = jQuery('body'),
            content_object = jQuery('#content'),
            navigation_object = jQuery('.header'),
            sidebar_object = jQuery(config_sidebar.left.identifier),
            animation_css = {
                left: sidebar_object.outerWidth(true)
            },
            callback_function = function() {

                // Add open class to body
                body
                    .addClass(config_sidebar.main.open.raw)
                    .addClass(config_sidebar.left.open.raw);

            };

        // Animate sidebar
        sidebar.animated_toggle(content_object, animation_css, callback_function);

        // Animate navigation
        sidebar.animated_toggle(navigation_object, animation_css, callback_function);

    },

    // Open - sidebar right
    sidebar_right_open: function () {

        // Get configurations
        var config = sidebar.config,
            config_sidebar = config.sidebar,
            body = jQuery('body'),
            content_object = jQuery('#content'),
            navigation_object = jQuery('.header'),
            sidebar_object = jQuery(config_sidebar.right.identifier),
            animation_css = {
                right: sidebar_object.outerWidth(true)
            },
            callback_function = function() {

                // Add open class to body
                body
                    .addClass(config_sidebar.main.open.raw)
                    .addClass(config_sidebar.right.open.raw);

            };

        // Animate sidebar
        sidebar.animated_toggle(content_object, animation_css, callback_function);

        // Animate navigation
        sidebar.animated_toggle(navigation_object, animation_css, callback_function);

    },

    // |-------------------------------------------
    // | Sidebar (close)
    // |-------------------------------------------
    // |
    // | Creates a modal with one button. The
    // | button closes the modal on click.
    // |

    // Close all sidebars
    sidebar_close: function () {

        // Get configurations
        var config = sidebar.config,
            config_sidebar = config.sidebar,
            body = jQuery('body');

        // A sidebar is open
        if(body.hasClass(config_sidebar.main.open.raw)) {

            // Sidebar left
            if(body.hasClass(config_sidebar.left.open.raw)) sidebar.sidebar_left_close();

            // Sidebar right
            if(body.hasClass(config_sidebar.right.open.raw)) sidebar.sidebar_right_close();

        }

    },

    // Close - sidebar left
    sidebar_left_close: function () {

        // Get configurations
        var config = sidebar.config,
            config_sidebar = config.sidebar,
            body = jQuery('body'),
            content_object = jQuery('#content'),
            navigation_object = jQuery('.header'),
            animation_css = {
                left: 0
            },
            callback_function = function() {

                // Remove open class from body
                body
                    .removeClass(config_sidebar.main.open.raw)
                    .removeClass(config_sidebar.left.open.raw);

            };

        // Animate sidebar
        sidebar.animated_toggle(content_object, animation_css, callback_function);

        // Animate navigation
        sidebar.animated_toggle(navigation_object, animation_css, callback_function);

    },

    // Close - sidebar right
    sidebar_right_close: function () {

        // Get configurations
        var config = sidebar.config,
            config_sidebar = config.sidebar,
            body = jQuery('body'),
            content_object = jQuery('#content'),
            navigation_object = jQuery('.header'),
            animation_css = {
                right: 0
            },
            callback_function = function() {

                // Remove open class from body
                body
                    .removeClass(config_sidebar.main.open.raw)
                    .removeClass(config_sidebar.right.open.raw);

            };

        // Animate sidebar
        sidebar.animated_toggle(content_object, animation_css, callback_function);

        // Animate navigation
        sidebar.animated_toggle(navigation_object, animation_css, callback_function);

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
            animation_config = config.animation;

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