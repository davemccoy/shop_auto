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
					$response = wp_remote_get( add_query_arg( array(
						'per_page' => 10
					), 'http://shopavto/sale/wp-json/wp/v2/car' ) );

					if( !is_wp_error( $response ) && $response['response']['code'] == 200 ) {
						$remote_posts = json_decode( $response['body'] ); 
						foreach( $remote_posts as $remote_post ) { ?>

							<?php $name =$remote_post->slug;
								$pretty_name = str_replace('-', ' ', $name)
							?>
							<div class="slide">
								<img src="http://shopavto/sale/wp-content/uploads/thememakers/cardealer/<?php echo $remote_post->author ?>/<?php echo $remote_post->id ?>/thumb/<?php echo $remote_post->metadata->car_cover_image[0] ?>" alt="">
								<div class="brand"><?php echo $pretty_name ?></div>
								<div class="text">Обьем <?php echo $remote_post->metadata->car_engine_size[0] ?> - <?php echo $remote_post->metadata->car_year[0] ?> г.в.</div>
							</div>
						<?php }
					}
					?>

				</div>
			</div>
		</div>
	</div>
</section>