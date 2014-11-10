// Document ready
jQuery(function($){

    $ = jQuery;







    // Variables
    var header = $(".header"),
        header_height = header.outerHeight(true),
        offset_tolerance = 300;

    // Detecting user's scroll
    $(window).scroll(function() {

        // Scroll position
        scroll_position	= $(this).scrollTop();

        // Move trough each menu and check its position with scroll position then add selected-nav class
        header.find(".header-nav > .header-nav-link > a").each(function() {

            var link_href = $(this).attr("data-scroll-to");

            if( !link_href) return true;

            var current_position = $(link_href).offset().top,
                element_position = current_position - header_height - offset_tolerance;

            if(scroll_position >= element_position) {

                console.log("activate " + link_href);

                header
                    .find(".header-nav > .header-nav-link.active")
                    .removeClass("active");

                header.find(".header-nav > .header-nav-link > a[href=" + link_href + "]")
                    .parent()
                    .addClass("active");

            }

        });

        //If we're at the bottom of the page, move pointer to the last section
        bottomPage	= parseInt($(document).height()) - parseInt($(window).height());

        if(scroll_position == bottomPage || scroll_position >= bottomPage) {

            $('.selected-nav').removeClass('selected-nav');
            $('.navbar-nav > li > a:last').addClass('selected-nav');
        }

    });

    // --------------------------------------------------
    // Parallax (Stellar)
    // --------------------------------------------------

    // Only enable Parallax on non-touch devices
    if ( ! Modernizr.touch ) {

        // Enable Stellar
        $.stellar({
            horizontalOffset:                           50
        });

    }

    // --------------------------------------------------
    // Appear
    // --------------------------------------------------

    // Appear function
    function animation_appear() {

        // Remove animations on mobile devices
        if (!Modernizr.touch) {

            $(".appear").appear();

            $(".animation").appear({
                force_process: true
            });

            $(".animation").on("appear", function (data) {

                var item = $(this),
                    delay = 0;

                // Get delay
                if (item.hasClass("animation-delay-0-1")) delay = 100;
                if (item.hasClass("animation-delay-0-2")) delay = 200;
                if (item.hasClass("animation-delay-0-3")) delay = 300;
                if (item.hasClass("animation-delay-0-4")) delay = 400;
                if (item.hasClass("animation-delay-0-5")) delay = 500;
                if (item.hasClass("animation-delay-0-6")) delay = 600;
                if (item.hasClass("animation-delay-0-7")) delay = 700;
                if (item.hasClass("animation-delay-0-8")) delay = 800;
                if (item.hasClass("animation-delay-0-9")) delay = 900;
                if (item.hasClass("animation-delay-1-0")) delay = 1000;

                if (item.hasClass("animation-delay-1-1")) delay = 1100;
                if (item.hasClass("animation-delay-1-2")) delay = 1200;
                if (item.hasClass("animation-delay-1-3")) delay = 1300;
                if (item.hasClass("animation-delay-1-4")) delay = 1400;
                if (item.hasClass("animation-delay-1-5")) delay = 1500;
                if (item.hasClass("animation-delay-1-6")) delay = 1600;
                if (item.hasClass("animation-delay-1-7")) delay = 1700;
                if (item.hasClass("animation-delay-1-8")) delay = 1800;
                if (item.hasClass("animation-delay-1-9")) delay = 1900;
                if (item.hasClass("animation-delay-2-0")) delay = 2000;


                // Add animation after the given delay
                setTimeout(function () {

                    item
                        .addClass("animation-start");

                }, delay);

            });

        }


        else {

            // Remove all animation types
            $(".animation")
                .removeClass("animation")
                .removeClass("animation-appear-from-top")
                .removeClass("animation-appear-from-right")
                .removeClass("animation-appear-from-left")
                .removeClass("animation-appear-from-bottom")
                .removeClass("animation-appear-from-center");

        }

    }

    animation_appear();




    // --------------------------------------------------
    // Owl carousel (banner)
    // --------------------------------------------------

    // Enable owl carousel
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        smartSpeed: 700,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
    });




    // --------------------------------------------------
    // Local scroll
    // --------------------------------------------------


    function local_scroll(duration) {

        // Set default duration
        if( ! duration) var duration = 800;

        // Set default offset
        var offset = 0;

        // Header is sticky
        if($(".header").hasClass("header-sticky")) {

            // Calculate offset
            var offset = -$(".header").outerHeight(true) - 20;

        }

        // Get height of navbar
        var options = {
                hash: false,
                offset: {
                    top: offset
                },
                duration: duration
            };

        // Enable local scroll
        $(document).localScroll(options);

        // Allow for data-attribute too
        $("[data-scroll-to]").on("click", function(event) {

            // Scroll to element
            $.scrollTo($(this).attr("data-scroll-to"), options);

            // Prevent URL hashing
            event.preventDefault();

        });

    }

    local_scroll();



    // --------------------------------------------------
    // Skrollr
    // --------------------------------------------------

    // Only enable skrollr on non-touch devices
    if ( ! Modernizr.touch ) {

        // Create skrollr object
        skrollr.init({

            mobileDeceleration:                         1,
            edgeStrategy:                               "set",
            forceHeight:                                false,
            smoothScrolling:                            true,
            smoothScrollingDuration:                    200,
            easing: {
                WTF:                                    Math.random,
                inverted:                               function( p ) {
                                                            return 1-p;
                                                        }
            }

        });

    }

    // --------------------------------------------------
    // Attach footer
    // --------------------------------------------------

    // Attach footer function
    function attach_footer() {

        // Get height of footer
        var footer_height = $(".footer").outerHeight(true); // Height with border and padding

        // Append the footer to the #wrapper
        $("#wrapper").css("margin-bottom", footer_height);

    }

    // Only attach footer if not touch
    if ( ! Modernizr.touch) {

        // Attach footer
        attach_footer();

        // Window is resized
        $(window).resize(function() {
            attach_footer();
        });

    }

    // --------------------------------------------------
    // Enable Bootstrap tooltips
    // --------------------------------------------------

    // Only enable on non-touch devices
    if ( ! Modernizr.touch ) {
        $( "[data-toggle=tooltip]" ).tooltip();
    }

    // --------------------------------------------------
    // Disable form autocomplete
    // --------------------------------------------------

    // Disable only on non-touch devices - autocomplete,
    // can be a big help on touch devices.
    if( ! Modernizr.touch ) {
        $( "form" ).attr( "autocomplete", "off" );
    }

    // --------------------------------------------------
    // Sticky header
    // --------------------------------------------------

});