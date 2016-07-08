//fondu
   $(document).ready(function(){
           $(".fondu").animate({opacity:"1"}, 3000 );
   });


//flip favoris
    $('.flip').click(function(){
        $(this).find('.card').addClass('flipped').mouseleave(function(){
            $(this).removeClass('flipped');
        });
        return false;
    });


    $(document).ready(function(){
    	$(".ligne").animate({width:"30%"}, 6000 );

    	 });

    

    $(document).ready(function(){
    	$("header h1").animate({width:"100%"}, 2500 );

    	 });

    


$(document).ready(function(){
      blink();
   });
   
   function blink(){
      $(".clignotement").animate({opacity:0.2},1000).animate({opacity:1}, 1000);
      setTimeout("blink()",4000);
   }


   $(document).ready(function(){
      hautBas();
   });

   function hautBas(){
      $(".hautBas").animate({bottom:'10'},1000).animate({bottom:'30px'}, 1000);
      setTimeout("hautBas()",6000);
   }


   /*$(document).ready(function(){
      $("#navigation ul li a").animate({'marginLeft':'30px'}, 2500 );

       });*/


  // etirer les titre lorsque visible à l'écran
  
    $(document).ready(function(){  
       $('.titre h1').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {  
       
          if (isInView) {  
             // l'élément est visible  
       $(this).animate({width:"100%"}, 2500 );
           
              
        
          }   
       
         
       });  
    });  

  





    





