(function($) {
        

    $('.popup').on('click', function(e) {
      e.preventDefault();
      $('.imagepreview').attr('src', $(this).attr('href'));
      $('#imagemodal').modal('show');   
      return false;
    });
      
})(jQuery);