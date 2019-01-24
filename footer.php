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
					<li><a class="mail" href="mailto:9953@ukr.net">9953@ukr.net</a></li>
					<li><a class="tel vdf" href="tel:+380505450081">+38 (050) 545 00 81</a></li>
					<li><a class="tel ks" href="tel:+380505450081">+38 (050) 545 00 81</a></li>
					<li class="call_back">						
						<a href="javascript:void('0')">заказать обратный звонок</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
