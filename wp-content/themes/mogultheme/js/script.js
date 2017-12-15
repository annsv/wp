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
        var actionSelect,result,parentId;
        parentId = $(this).closest('ul').attr('id');
        if (parentId==='services-nav'){
          actionSelect = 'ajaxSelectServices';
          result = $('#services-result');
          //console.log('result');
        } else {
          actionSelect = 'ajaxSelectPortfolio';
          result =$('#portfolio-result');
        }
                    
        var id = $(this).attr('id');
        $(this).addClass('active');
        //console.log(id);

      $.ajax({
         url: my_ajax_object.ajax_url,
         type: 'POST',
         data: {
            action: actionSelect,
            id: id
            },
         success: function( data ){
               console.log("successfully");
               console.log(data);
               result.html(data);
         },
         error: function ( error ) {
            console.log( error );
         }
      });

    });

 
      
})(jQuery);