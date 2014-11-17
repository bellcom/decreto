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
    // Base
    // --------------------------------------------------

    // Enable mandatory base
    mandatory.init();

    // --------------------------------------------------
    // Parallax
    // --------------------------------------------------

    // Enable parallax
    mandatory.enable_parallax();

    // --------------------------------------------------
    // Appear
    // --------------------------------------------------

    // Enable appear
    mandatory.enable_appear();

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

});