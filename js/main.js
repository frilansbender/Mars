//  $('.wrapper').mousemove(function(e){
//     let winWidth = window.innerWidth;
//     let winHeight = window.innerHeight;
//     let moveOnX = e.pageX / (winWidth / 5 );
//     let moveOnY = e.pageY / (winHeight / 5);
//     $(this).css('transform', 'translate(-' + moveOnX +'%, -' + moveOnY + '%)');
//     })


$(document).ready(function() { 
 
    // Движение фона от мышки   
      
   $( document ).on( 'mousemove', function( e ) {
               var amountMovedX = 160 * ( (e.pageX - 1) / $( document ).width() ) - 60;             
   
               $( '.overlay h1' ).css( 'background-position', amountMovedX + 'px '  );
   } );   
   
   });


