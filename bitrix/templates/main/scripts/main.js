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
	
	function read(){
		var link = $('.catalog .text a');
		var target = $('.catalog .text span');
		var fade =  $('.catalog .text .fadeout');
		
		link.click(function(e){
			if($(this).attr('href') == '#add'){
				e.preventDefault();
				target.css('height', '100%').hide();
				target.slideDown(500);
				fade.fadeOut(500);
				$(this).html('Скрыть');
				$(this).attr('href', '#close');
			}else{
				e.preventDefault();
				fade.fadeIn(500);
				target.animate({height: 50}, 500);
				$(this).html('Читать еще');
				$(this).attr('href', '#add');
			}
		});
	}
	
	function YandexMap(placemarkPath){

		ymaps.ready(init);
		var map;

		function init(){
			map = new ymaps.Map("map", {
				center: [47.2982,39.9112],
				zoom: 16,
				controls: ["smallMapDefaultSet", "typeSelector"]
			});

			myPlacemark = new ymaps.Placemark([47.2973,39.9100],
											{ content: 'Аксайский Кирпичный Завод',
												balloonContent: '346710, Россия, Ростовская область, Аксайский район, хутор Большой Лог, ул. Калинина, 68'},
											{
													iconLayout: 'default#image',
													iconImageHref: placemarkPath,
													iconImageSize: [47, 68],
													iconImageOffset: [-21, -65]
												});

			map.geoObjects.add(myPlacemark);
			map.behaviors.disable("scrollZoom");
		}
	}
	
	//init function
	elementColor();
	read();
	YandexMap('/bitrix/templates/main/images/pointer.png');

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
