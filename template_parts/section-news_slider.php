<section class="p50">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title center">
					Новости
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="owl-carousel slider3item news-slider">
					<?php 
					$wp_query = new WP_Query(array( 
						'post_type' => 'post', 
						'post_status' => 'publish',
						'orderby' => 'random',
						'posts_per_page' => 10) ); 
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<div class="slide">
								<div class="thumb">
									<?php the_post_thumbnail(); ?>
									<a href="<?php the_permalink() ?>"><?php _e('Читать', 'shop_auto')?></a>
								</div>
								<div class="brand"><?php the_title(); ?></div>
								<!-- <div class="text">1,6 МТ 2012 г.в.</div> -->
							</div>

						<?php endwhile; wp_reset_query(); ?>

					</div>
				</div>
			</div>
		</div>
	</section>