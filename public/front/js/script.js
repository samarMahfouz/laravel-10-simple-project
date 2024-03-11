$(function () {
    'use strict';
    
    
    $('img').on('click', function() { 
       $(this).addClass('showimg');
       $(this).parent().addClass('showimgd');
       $(this).removeClass('main-image');
       $(this).siblings('.hide-show').css('display', 'block')
    });
     
      $('.hide-show').on('click', function() {
        $(this).siblings('img').removeClass('showimg');
        $(this).siblings('img').addClass('main-image');
        $(this).parent().removeClass('showimgd');
        $(this).css('display', 'none');
     });

});