jQuery(window).load(function(){
	//Top Slider
	$('.flexslider.top_slider').flexslider({
		animation: "slide",
		controlNav: true,
		directionNav: false,
		animationLoop: true,
		slideshow: true,
		slideshowSpeed: 8000,
		//animationSpeed: 600,
		//initDelay: 1000,
		randomize: true,
		prevText: "",
		nextText: "",
		keyboard: true,
		touch: true,
		sync: "#carousel"
	});
	$('#carousel').flexslider({
		animation: "fade",
		controlNav: false,
		animationLoop: false,
		directionNav: false,
		slideshow: false,
		itemWidth: 1000,
		itemMargin: 5,
		asNavFor: '.top_slider'
	});
	
	homeHeight();
	
	
	jQuery('.flexslider.top_slider .flex-direction-nav').addClass('container');
	
	
	//Vision Slider
	$('.flexslider.portfolio_single_slider').flexslider({
		animation: "fade",
		controlNav: true,
		directionNav: true,
		animationLoop: true,
		slideshow: true,
	});
	
	
});

jQuery(window).resize(function(){
	homeHeight();
	
});

jQuery(document).ready(function(){
	homeHeight();
	
});

function homeHeight(){
	var wh = jQuery(window).height() - 0;
	jQuery('.top_slider, .top_slider .slides section').css('height', wh);
}