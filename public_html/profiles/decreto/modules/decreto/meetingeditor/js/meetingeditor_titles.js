(function ($) {
  Drupal.behaviors.meetingeditor = {
    attach: function (context, settings) {
      $('.js-point-title').each(function(){
        Drupal.behaviors.meetingeditor.settitle($(this));
      });

      $('.js-point-title').bind('keyup', function(){
        Drupal.behaviors.meetingeditor.settitle($(this));
      });

      $('.js-point-attach-title').each(function(){
        Drupal.behaviors.meetingeditor.settitle($(this));
      });

      $('.js-point-attach-title').bind('keyup', function(){
        Drupal.behaviors.meetingeditor.settitle($(this));
      });
    },
    settitle: function(el) {
      var title = el.val();

      var tmp = el.attr('id').split('-');
      var point_id = 0;
      var attach_id = 0;

      point_id = tmp[5];

      if (tmp.length > 7 && tmp[8] == 'title') {
        attach_id = tmp[7];
        $('.ph-point-attach-title-' + point_id + '-' + attach_id).text(title);
      }
      else {
        $('.ph-point-title-' + point_id).text(title);
      }
    }
  };
})(jQuery);
