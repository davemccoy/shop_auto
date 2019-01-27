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

	$('#rst-oldcars-form-make').on('change',function(e){

        var carproducer_id = jQuery(this).find('option:selected').val();
        $.post(
            '/wp-admin/admin-ajax.php', {
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
            '/wp-admin/admin-ajax.php', {
                action: 'get_carproducers',
                carproducer_id: carproducer_id,
            }).success(function(response) {
            	console.log(response);
                jQuery("#rst-oldcars-form-model_bottom").prop('disabled', false);
                jQuery("#rst-oldcars-form-model_bottom").children('option').remove();
                jQuery("#rst-oldcars-form-model_bottom").append(response).niceSelect('update');
        });

    });

    $("form").submit(function() {
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/shop_auto/mail.php",
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				th.trigger("reset");
				th.find('select').niceSelect('update')
			}, 1000);
		});
		return false;
	});

});