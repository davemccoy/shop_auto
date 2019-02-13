<section class="slide-cars">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title center">
					<?php _e('примеры выкупленных авто', 'shop_auto')?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">



				<div class="owl-carousel slider3item cars-slider">
					<?php 
					$wpdb2 = new wpdb('shopavto_db', 'BsDsJFhE', 'shopavto_db', 'shopavto.mysql.tools');

					$query = "SELECT sale_posts.*
					FROM sale_posts
					WHERE 1=1 
					AND sale_posts.post_type = 'car'
					ORDER BY sale_posts.post_date DESC";
					$cars = $wpdb2->get_results($query, OBJECT);
					// print_r($cars);
					foreach($cars as $car) { ?>
						<div class="slide">
						<img src="<?php echo get_template_directory_uri();?>/_images/car.jpg" alt="">
						<div class="brand"><?php echo $car->post_name?></div>
						<div class="text">1,6 МТ 2012 г.в.</div>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</div>
</section>