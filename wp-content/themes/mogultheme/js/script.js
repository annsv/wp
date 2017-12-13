(function($) {

      $(document).on("click", '.popup', function(e) { 
      e.preventDefault();
      
      var href = $(this).attr('href');

      $('.imagepreview').attr('src', href);
      $('#imagemodal').modal('show');   
      return false;
    });


    $('.term-item').on('click', function(e) {
        if ($(this).siblings('.term-item').hasClass('active')) {  
            $(this).siblings('.term-item').removeClass('active')
        }
                    
        var id = $(this).attr('id');
        $(this).addClass('active');
        console.log("Clicked");

      $.ajax({
         url: my_ajax_object.ajax_url,
         type: 'POST',
         data: {
            action: 'ajaxSelectPortfolio',
            id: id
            },
         success: function( data ){
               //console.log("successfully");
               //console.log(data);
               $('#portfolio-results').html(data);
         },
         error: function ( error ) {
            console.log( error );
         }
      });

    });

 
      
})(jQuery);