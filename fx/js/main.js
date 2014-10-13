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

(function($, document, window) {
    $('#signup form').on('submit', function(event) {
        event.preventDefault();

        $form = $(this);

        $('.alert span', $form).text('');
        $('.alert', $form).text('');
        $('.alert', $form).addClass('hidden');
        $('.alert div', $form).removeClass('has-error');

        var xhr = $.ajax({
            url: this.action,
            data: $form.serialize(),
            dataType: 'json',
            type: 'POST'
        });

        xhr.done(function(data, textStatus, jqXHR) {
            if (false == data.status) {
                $('.alert', $form)
                    .text(data.message)
                    .removeClass('hidden');

                if (undefined !== data.errors) {
                    $.each(Object.keys(data.errors), function(i, key) {
                        var $input = $('input[name="'+key+'"]', $form);

                        $input.closest('div').addClass('has-error');
                        $input.prev('span').text(data.errors[key]);
                    });
                }
            } else {
                var $container = $form.parent();

                $container.slideUp(400, function() {
                    $container.html('<div class="text-center spacer"><h2>Tak for tilmendingen</h2><p>Du vil modtage en mail med yderliger instruktioner om hvad der nu skal ske for at dine møder At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p></div>');
                    $container.slideDown();
                });
            }
        });

        xhr.fail(function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR, textStatus, errorThrown);
        });
    });
})(jQuery, document, window);
