(function($) {

      $(document).on("click", '.popup', function(e) { 
      e.preventDefault();
      
      var href = $(this).attr('href');

      $('.imagepreview').attr('src', href);
      $('#imagemodal').modal('show');   
      return false;
    });

//categories menu on portfolio and services pages
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
        $('.bubblingG').show();

      $.ajax({
         url: my_ajax_object.ajax_url,
         type: 'POST',
         data: {
            action: actionSelect,
            id: id
            },
         success: function( data ){
            console.log("successfully");
            result.html(data);
            $('.bubblingG').hide();
         },
         error: function ( error ) {
            console.log( error );
         }
      });

    });
//load pages with forms on contact page
/*
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
        $('.bubblingG').show();

      $.ajax({
         url: my_ajax_object.ajax_url,
         type: 'POST',
         data: {
            action: actionSelect,
            id: id
            },
         success: function( data ){
            console.log("successfully");
            result.html(data);
            $('.bubblingG').hide();
         },
         error: function ( error ) {
            console.log( error );
         }
      });

    });
    */







//ajax load more function
var page = 2;
  $('body').on('click', '.loadmore', function() {
    var data = {
      'action': 'load_reviews_by_ajax',
      'page': page
    };
    $('.bubblingG').show();

    $.post(
      my_ajax_object.ajax_url, 
      data, 
      function(response) {
        $('.reviews-block').append(response);
        page++;
        $('.bubblingG').hide();
      });
    });    
 
      
})(jQuery);