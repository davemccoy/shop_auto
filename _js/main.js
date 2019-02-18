jQuery(document).ready(function($) {
	$('a[href^="#"]').bind('click.smoothscroll', function (e) {
		e.preventDefault();
		
		var target = this.hash,
		$target = $(target),
		$offset =  $target.offset().top + 75;
		console.log($offset);
		$('.stiky-menu').slideUp();
		$('html, body').stop().animate({
			'scrollTop': $offset
		}, 1000, 'swing', function () {
			window.location.hash = target;
		});
	});
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

	$('.js-show-menu').click(function() {
		$(this).toggleClass('open').next().slideToggle();
	})

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

	$('#rst-oldcars-form-make').on('change',function(e){

		var carproducer_id = jQuery(this).find('option:selected').val();
		$.post(
			'http://drops.s-host.net/avto/wp-admin/admin-ajax.php', {
				action: 'get_carproducers',
				carproducer_id: carproducer_id,
			}).success(function(response) {
				console.log(response);
				jQuery("#rst-oldcars-form-model").prop('disabled', false);
				jQuery("#rst-oldcars-form-model").children('option').remove();
				jQuery("#rst-oldcars-form-model").append(response).niceSelect('update');
			});

		});

	$('#rst-oldcars-form-make_bottom').on('change',function(e){

		var carproducer_id = jQuery(this).find('option:selected').val();
		$.post(
			'http://drops.s-host.net/avto/wp-admin/admin-ajax.php', {
				action: 'get_carproducers',
				carproducer_id: carproducer_id,
			}).success(function(response) {
				console.log(response);
				jQuery("#rst-oldcars-form-model_bottom").prop('disabled', false);
				jQuery("#rst-oldcars-form-model_bottom").children('option').remove();
				jQuery("#rst-oldcars-form-model_bottom").append(response).niceSelect('update');
			});

		});

	

	$('.call_back a').click(function() {
		$('.js-call-back-popup').fadeIn();
		$('body').addClass('no-scroll');
	})

	$('.js-call-back-popup .overlay').click(function() {
		$(this).parent().fadeOut();
		$('body').removeClass('no-scroll');
	})


	if ($(window).width() > 992) {
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();    
			if (scroll > 100) {
				$(".js-check-stiky").addClass("sticky"); 
			} else {
				$(".js-check-stiky").removeClass("sticky"); 
			}
		})
	}
	$(window).load(function() {
		equalheight('.same_height article');
	});


	$(window).resize(function(){
		equalheight('.same_height article');
	});
	equalheight = function(container){

		var currentTallest = 0,
		currentRowStart = 0,
		rowDivs = new Array(),
		$el,
		topPosition = 0;
		$(container).each(function() {

			$el = $(this);
			$($el).height('auto')
			topPostion = $el.position().top;

			if (currentRowStart != topPostion) {
				for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
					rowDivs[currentDiv].height(currentTallest);
				}
				rowDivs.length = 0; // empty the array
				currentRowStart = topPostion;
				currentTallest = $el.height();
				rowDivs.push($el);
			} else {
				rowDivs.push($el);
				currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
			}
			for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
				rowDivs[currentDiv].height(currentTallest);
			}
		});
	}
});
