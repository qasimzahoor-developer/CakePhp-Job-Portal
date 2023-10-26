"use strict";
/* ==== Jquery Functions ==== */
(function($) {
	
	/* ==== Tool Tip ==== */	
    $('[data-toggle="tooltip"]').tooltip();	
		
	
	/* ==== Testimonials Slider ==== */	
  	$(".testimonialsList").owlCarousel({      
	   loop:true,
		margin:30,
		nav:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			768:{
				items:1,
				nav:false
			},
			1170:{
				items:1,
				nav:false,
				loop:true
			}
		}
  	});
	
	
	/* ==== Revolution Slider ==== */
	if($('.tp-banner').length > 0){
		$('.tp-banner').show().revolution({
			delay:6000,
	        startheight:550,
	        startwidth: 1140,
	        hideThumbs: 1000,
	        navigationType: 'none',
	        touchenabled: 'on',
	        onHoverStop: 'on',
	        navOffsetHorizontal: 0,
	        navOffsetVertical: 0,
	        dottedOverlay: 'none',
	        fullWidth: 'on'
		});
	}
	
})(jQuery);


$(document).ready(function(){
	 $('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		responsiveClass:true,
		nav:true,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
		navText: [
						   "<i class='fa fa-angle-left'></i>",
						   "<i class='fa fa-angle-right'></i>"
						],
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:6,
				nav:true,
				loop:false
			}
		}
	});
	
	////Calander Date Picker
	$('.apply_date').datepicker({format: 'yyyy-mm-dd', startDate: '+3d', endDate: '+30d'});
	$('.publish_date').datepicker({format: 'yyyy-mm-dd', startDate: '0d', endDate: '+30d'});
	 $('select').select2();
	
});
