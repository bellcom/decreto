/**
 * Parallax function
 *
 * @param  jQuery $
 * @param  object document
 * @param  object window
 */
(function($, document, window) {
    var $window = $(window);

    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);
        var offset = $scroll.css('backgroundPosition').split(' ');
        offset[0] = parseInt(offset[0], 10);
        offset[1] = parseInt(offset[1], 10);

        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $scroll.data('speed'));
            var coords = offset[0] + 'px ' + (offset[1]+yPos) + 'px';

            $scroll.css({ backgroundPosition: coords });
        });
    });
})(jQuery, document, window);

(function($, document, window) {
    $('#signup input[type="radio"]').on('change', function() {
        $('#signup label').removeClass('checked');
        $(this).parent().addClass('checked');
    });
})(jQuery, document, window);

