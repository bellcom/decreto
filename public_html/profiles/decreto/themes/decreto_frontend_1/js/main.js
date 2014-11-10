// Document ready
jQuery(function($){

    // --------------------------------------------------
    // Owl Carousel
    // --------------------------------------------------

    // Enable Owl Carousel
    jQuery(".owl-carousel").owlCarousel({

        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: 3000,

    });

    // --------------------------------------------------
    // Attach footer
    // --------------------------------------------------

    // Attach footer function
    function attach_footer() {

        // Get height of footer
        var footer_height                           =   $( ".footer" ).outerHeight( true ); // Height with border and padding

        // Append the footer to the #wrapper
        $( "#wrapper" ).css( "margin-bottom", footer_height );

    }

    // Only attach footer if not touch
    if ( ! Modernizr.touch ) {

        // Attach footer
        attach_footer();

        // Window is resized
        $( window ).resize( function() {
            attach_footer();
        });

    }

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

    // Radio
    (function($, document, window) {
        $('#signup input[type="radio"]').on('change', function() {
            $('#signup label').removeClass('checked');
            $(this).parent().addClass('checked');
        });
    })(jQuery, document, window);

});
