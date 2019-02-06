<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage shop_auto
 */
?>
<footer class="footer">
	<div class="container">
		<div class="row top-row">
			<div class="col-md-3">
				<?php $args = array(
					'theme_location' => 'top',
					'container'=> 'nav',
					'menu_class' => 'nav nav-pills footer-menu',
					'menu_id' => 'header-nav',
					'fallback_cb' => false
				);
				wp_nav_menu($args);
				?>
			</div>
			<div class="col-md-9">
				<div class="nav-links">
					<ul>
						<li><a href="#">выкуп авто</a></li>
						<li><a href="#">продать авто</a></li>
						<li><a href="#">выкуп проблемных авто</a></li>
						<li><a href="#">выкуп авто после дтп</a></li>
						<li><a href="#">продать авто самому</a></li>
						<li><a href="#">выкуп авто</a></li>
						<li><a href="#">продать авто</a></li>
						<li><a href="#">выкуп проблемных авто</a></li>
						<li><a href="#">выкуп авто после дтп</a></li>
						<li><a href="#">продать авто самому</a></li>
						<li><a href="#">выкуп авто</a></li>
						<li><a href="#">продать авто</a></li>
						<li><a href="#">выкуп проблемных авто</a></li>
						<li><a href="#">выкуп авто после дтп</a></li>
						<li><a href="#">продать авто самому</a></li>
						<li><a href="#">выкуп авто</a></li>
						<li><a href="#">продать авто</a></li>
						<li><a href="#">выкуп проблемных авто</a></li>
						<li><a href="#">выкуп авто после дтп</a></li>
						<li><a href="#">продать авто самому</a></li>
						<li><a href="#">выкуп авто</a></li>
						<li><a href="#">продать авто</a></li>
						<li><a href="#">выкуп проблемных авто</a></li>
						<li><a href="#">выкуп авто после дтп</a></li>
						<li><a href="#">продать авто самому</a></li>

					</ul>
				</div>
			</div>
		</div>
		<div class="row bottom-row">
			<div class="col-md-12">
				<div class="logo">
					<?php if( is_front_page() ){ ?>
						<img src="<?php echo get_template_directory_uri();?>/_images/logo.png" alt="">
					<?php }
					else { ?>
						<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/_images/logo.png" alt=""></a>
					<?php }
					?>
				</div>
				<ul class="phones">
					<li><a class="mail" href="mailto:<?php the_field('email', 'template-setings'); ?>"><?php the_field('email', 'template-setings'); ?></a></li>
					<li><a class="tel vdf" href="tel:<?php the_field('phone_vodaphone', 'template-setings'); ?>"><?php the_field('phone_vodaphone', 'template-setings'); ?></a></li>
					<li><a class="tel ks" href="tel:<?php the_field('phone_kyivstar', 'template-setings'); ?>"><?php the_field('phone_kyivstar', 'template-setings'); ?></a></li>
					<li class="call_back">						
						<a href="javascript:void('0')">заказать обратный звонок</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
</div>




<div class="popup js-call-back-popup">
	<div class="overlay"></div>
	<div class="popup-content">
		<form class="price_request">
			<div class="thx-message" style="display: none">
				Спасибо за заявку. Мы скоро свяжемся с Вами
			</div>
			<div class="form_title">
				Наш менеджер перезвонит вам 
				через пару минут
			</div>
			<div class="inputs_wrapper">
				<input type="text" class="input" name="name" placeholder="Имя">
				<input class="input" type="tel" name="tel" placeholder="Номер телефона">
			</div>
			<div class="send_btn">
				<button class="btn">Отправить</button>
			</div>
		</form>
	</div>
</div>



<div class="map-tooltip"></div>
<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function($) {
		$("form").submit(function() {
			var th = $(this);
			$.ajax({
				type: "POST",
				url: "<?php echo get_template_directory_uri();?>/mail.php",
				data: th.serialize()
			}).done(function() {
				th.find('.thx-message').fadeIn();

				setTimeout(function() {
					th.find('.thx-message').fadeOut();
					if (th.closest('.js-call-back-popup').length) {
						$('.js-call-back-popup').fadeOut();
					}
					th.trigger("reset");
					th.find('select').niceSelect('update')
				}, 3000);
			});
			return false;
		});
	})
</script>
</body>
</html>
