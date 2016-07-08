// One page system
	
$(document).ready(function(){

	$('body').pageScroller({
		navigation: '#menu'
	});


//slide realisations
	$(function(){
	     $('#slider-id').liquidSlider();
	});

	



	//slide menu gauche


 	


        




//menu


	$('ul#menu li a').hover(
		function(){
		$(this).stop().animate({paddingLeft:"20px"},400 );
	},
		function() {
		$(this).stop().animate({paddingLeft:"0"},200);
	});
	
	


	$('#menu li a').click(
		function(){
		$('#menu li').removeClass('active');
		$(this).parent().addClass('active');
	});




	$('li#activeComp a').click(
		function(){
		$('#menu li').removeClass('active');
		$(this).parent().addClass('active');
		$('#content-competences .full').animate({backgroundColor : '#ea5234',color : '#ea5234'},3000);
	});



	

//timeliner

        $(function(){
            $().timelinr({	
                arrowKeys: 'true'
            })
        });
   

//Page slide

$('.slidenews').pageslide({ direction :"left", modal:true });


});

//shuffle letter

function shuffle(target) {
  if (target=="page") {
    var container = $("h1,h2")
  }
  container.shuffleLetters();
}
shuffle("page");



