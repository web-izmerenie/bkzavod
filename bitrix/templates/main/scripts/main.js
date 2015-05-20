$(document).ready(function(){
	
	var header = $('header .main');
	var active = $('.active');
	
	function elementColor(){
		var atribute = $('.color').data('color');
		var otherItem = $('.other-item');
		
		header.css('background', atribute);
		active.css('background', atribute);
		otherItem.css('background', atribute);
	}
	
	//init function
	elementColor();

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

	$('.svg').inlineSVG({
	  eachAfter: function () {
        $(this).find('path').removeAttr('fill');
      }
	});
	
	$(".portfolio ul li a").fancybox({
		padding : 0,
			helpers: {
				overlay: {
					locked: false
				}
			}
	});
});
