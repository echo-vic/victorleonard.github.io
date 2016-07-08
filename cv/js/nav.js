// JavaScript Document
$ (document).ready(function(){
	$('#navigation ul li a').click(function(){
	
		var id = $(this).attr('href');
		scrollTo(id);
		return false;

	});
	
	function scrollTo(target){
		if($(target).length>=1){
			height=$(target).offset().top;
		}
				$('html,body').animate({scrollTop: height}, 1200);
				return false;
	
			}
			
			
	
});

