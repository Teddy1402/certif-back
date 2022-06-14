$(document).ready(function() {
  $('.modal').on('show.bs.modal', function(){
      if ( !$(this).parent().is('body') ) {
          $(this).appendTo('body');
      }
      $(this).removeClass('blur');

      $('body').children().not(this).addClass('blur');
  })
  .on('hide.bs.modal', function() {
     var modal = $('.modal.show').not(this);
     modal = modal.eq(modal.length - 1);
    
     var blurItems = $('body').children().not(this);
     
     if (modal.length) {
         modal.removeClass('blur');
         blurItems = blurItems.not(modal);
     } else{
          blurItems.removeClass('blur');
     }
    
  })
})

