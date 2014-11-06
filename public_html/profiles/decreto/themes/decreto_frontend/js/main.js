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
