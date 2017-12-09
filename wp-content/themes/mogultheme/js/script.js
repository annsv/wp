(function($) {
        
var cbSettings = {
      rel: 'cboxElement',
      width: '95%',
      height: 'auto',
      maxWidth: '660',
      maxHeight: 'auto',
      title: function() {
        return $(this).find('img').attr('alt');
      }
    }

 $('.gallery a[href$=".jpg"], .gallery a[href$=".jpeg"], .gallery a[href$=".png"], .gallery a[href$=".gif"]').colorbox(cbSettings);    
        
    })(jQuery);