$(document).ready(function(){
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 120) {
			$('#top').hide();
		}else{
			$('#top').show();
		}
		return false;
	});	
	
	$('.nav-toggler').click(function() {
		$(this).toggleClass('nav-toggler-active');
		$('#menu').slideToggle(200);
	});


     $(window).resize(function() {
         if( $(window).width() >= 902 ){
            $("#menu").css("display", "table");
            $('.nav-toggler').removeClass('nav-toggler-active');
         }
        else if( $(window).width() < 902 ){

		   if( ! $('.nav-toggler').hasClass('nav-toggler-active')){
			   $("#menu").css("display", "none");
		   }
	   }

     });
	
	jQuery(document).ready(function(){
		jQuery('slippry-demo').slippry()
	});
	
	$(function() {
		var demo1 = $("#slippry-demo").slippry({
		transition: 'fade',
		// useCSS: true,
		speed: 800,
		pause: 1500,
		auto: true
		// preload: 'visible',
		// autoHover: false
		});
		/*$('.stop').click(function () {
			demo1.stopAuto();
		});*/
		//$('.start').click(function () {
		//	demo1.startAuto();
		//});
		/*$('.prev').click(function () {
			demo1.goToPrevSlide();
			return false;
		});
		$('.next').click(function () {
			demo1.goToNextSlide();
			return false;
		});
		$('.reset').click(function () {
			demo1.destroySlider();
			return false;
		});
		$('.reload').click(function () {
			demo1.reloadSlider();
			return false;
		});*/
		$('.init').click(function () {
			demo1 = $("#slippry-demo").slippry();
			return false;
		});
	});

});

