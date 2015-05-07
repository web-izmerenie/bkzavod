$(document).ready(function(){

	//init plugins
	$('.main-slider').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		arrows: false,
		autoplay: true,
	});

	$('.svg').inlineSVG();
});