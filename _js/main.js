jQuery(document).ready(function($) {
	if ($(".mobile-nav").length) {
		$(".mobile-nav").mmenu({
			"extensions": [
			// "fx-menu-zoom",
			"fx-panels-zoom",
			"pagedim-black",
			"position-right",
			"theme-dark"	
			],
			"counters": true,
			"navbar" : {
				"title" : 'Меню'
			}
		});
		var API = $(".mobile-nav").data( "mmenu" );
		
		$(".js-open-nav").click(function() {
			API.open();
		});

		$('.mm-page').click(function() {
			API.close();
		})
	}

	$('select').niceSelect();

	if ($('.promo-slider').length) {
		$('.promo-slider').owlCarousel({
			items: 1,
			singleItem : true,
			animateOut : "fadeOut",
			animateIn : "fadeIn",
			mouseDrag: false,
			touchDrag: false,
			pullDrag: false,
			autoplay: true,
			loop: true,
			autoplayHoverPause: true
		})
	}
	if ($('.js-brands-slider').length) {
		$('.js-brands-slider').owlCarousel({
			items: 1,
			nav: true, 
			dots: false,
			loop: true,
			responsive:	{
				993: {
					nav: true
				},
				0: {
					nav: false
				}
			}
		})
	}

	if ($('.testimonilas_slider').length) {
		$('.testimonilas_slider').owlCarousel({
			items: 3,
			nav: true, 
			dots: false,
			loop: true,
			responsive:	{
				993: {
					items: 3,
					nav: true
				},
				767: {
					items: 2,
				},
				0: {
					items: 1,
					nav: false
				}
			}
		})
	}

	if ($('.slider3item').length) {
		$('.slider3item').owlCarousel({
			items: 3,
			nav: true, 
			dots: false,
			loop: true,
			responsive:	{
				993: {
					items: 3,
					nav: true
				},
				767: {
					items: 2,
				},
				0: {
					items: 1,
					nav: false
				}
			}
		})
	}

	$(".faq_acradeon .item .inner > a").on("click", function(){
		if($(this).hasClass('active')){
			$(this).removeClass("active");
			$(this).siblings('.answer').slideUp(200);
			$(".item .inner > a").text("+");
		}else{
			$(".item .inner > a").text("+");
			$(this).text("-");
			$(".item .inner > a").removeClass("active");
			$(this).addClass("active");
			$('.answer').slideUp(200);
			$(this).siblings('.answer').slideDown(200);
		}
	});

});