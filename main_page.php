<?php
/**
 * @package WordPress
 * @subpackage shop_auto
 * Template Name: Главная
 */
get_header(); ?>


<?php get_template_part('template_parts/section', 'promo')?>
<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title center">
					<?php _e('О нас', 'shop_auto')?>
				</div>
			</div>
		</div>
	</div>
	<div class="bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="italic-top-text">
						<?php _e('Мы знаем, что Вы здесь не случайно...', 'shop_auto')?>
					</div>
					<p>
					<?php _e('И сейчас, пожалуй, самое время представиться. ShopAvto — это компания по выкупу, обмену и продаже подержанных авто по всей Украине. На рынке мы уже более 11 лет и за это время мы выкупили более 2000 как свежих так и заезженных авто. Цена в большинстве случаев доходит до 95% от рыночной стоимости автомобиля.', 'shop_auto')?></p>
					<p>
					<?php _e('Самостоятельная продажа аварийного или любого проблемного авто – сложный процесс, на который требуется временные затраты. С компанией «ShopAvto» все гораздо проще – вы оставили заявку, мы произвели оценку и выдали деньги на руки.', 'shop_auto')?></p>
					<p>
					<?php _e('Наши представители есть в каждой области, поэтому мы можем сами приехать в любую точку Украины и купить ваш автомобиль, уладив все вопросы с финансовыми компаниями, если это, например, залоговое авто.', 'shop_auto')?></p>
					<p>
						<?php _e('Позвоните или оставьте заявку для продажи своего автомобиля прямо сейчас –  а мы сделаем всё чтобы оправдать Ваши ожидания.', 'shop_auto')?>
					</p>
				</div>
				<div class="col-sm-4">
					<div class="small-title">
						<?php _e('Какие машины мы выкупаем:', 'shop_auto')?>
					</div>
					<ul class="wheels-list">
						<li><?php _e('Б/у машины', 'shop_auto')?></li>
						<li><?php _e('Новые машины', 'shop_auto')?></li>
						<li><?php _e('Машины без документов на разборку', 'shop_auto')?></li>
						<li><?php _e('Нерастаможенные машины', 'shop_auto')?></li>
						<li><?php _e('Машины после ДТП', 'shop_auto')?></li>
						<li><?php _e('Проблемные машины', 'shop_auto')?></li>
						<li><?php _e('Кредитные машины', 'shop_auto')?></li>
						<li><?php _e('Залоговые машины', 'shop_auto')?></li>
						<li><?php _e('Лизинговые машины', 'shop_auto')?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="triagle"></div>
</section>
<section class="count">
	<div class="container">
		<div class="row">
			<div class="col-md-12 numbers">
				<div class="number-item">
					<div class="number">
						<img src="<?php echo get_template_directory_uri();?>/_images/count1.png" alt="">
					</div>
					<div class="text">
						
						<?php _e('лет на<br>рынке', 'shop_auto')?>
					</div>
				</div>
				<div class="number-item">
					<div class="number">
						<img src="<?php echo get_template_directory_uri();?>/_images/count2.png" alt="">
					</div>
					<div class="text">
						<?php _e('выкуплено<br>автомобилей', 'shop_auto')?>
						
					</div>
				</div>
				<div class="number-item">
					<div class="number">
						<img src="<?php echo get_template_directory_uri();?>/_images/count3.png" alt="">
					</div>
					<div class="text">
						<?php _e('продано<br>автомобилей', 'shop_auto')?>
						
					</div>
				</div>
				<div class="number-item">
					<div class="number">
						<img src="<?php echo get_template_directory_uri();?>/_images/count4.png" alt="">
					</div>
					<div class="text">
						<?php _e('представителей<br>в регионах', 'shop_auto')?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="gradient-section">
	<?php _e('Вы можете все сделать самостоятельно, <br>
	пока другие уже получили оплату от нас за своё авто.', 'shop_auto')?>
</section>
<?php get_template_part('template_parts/section', 'infographics')?>
<?php get_template_part('template_parts/section', 'howit')?>
<section class="by_brand">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title center">
					<?php _e('Марки авто на выбор', 'shop_auto')?>
				</div>
				<div class="section-description">
					<?php _e('Здесь Вы можете выбрать конкретную марку авто<br> и прочитать о его автовыкупе подробнее', 'shop_auto')?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="js-brands-slider brands_slider owl-carousel">
					<div class="slide">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_1.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_2.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_3.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_4.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_5.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_6.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_7.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_8.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_9.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_10.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_11.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_12.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_13.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_14.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_15.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_16.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_17.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_18.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_19.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_20.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_21.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_22.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_23.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_24.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_25.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_26.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_27.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_28.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_29.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_30.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_31.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_32.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_33.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_34.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_35.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_36.png" alt=brand""></a>
					</div>
					<div class="slide">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_37.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_38.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_39.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_40.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_41.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_42.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_43.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_44.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_45.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_46.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_47.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_48.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_49.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_50.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_51.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_52.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_53.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_54.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_55.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_56.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_57.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_58.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_59.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_60.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_61.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_62.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_63.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_64.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_65.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_66.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_67.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_68.png" alt=brand""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_69.png" alt=brand""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title center">
					<?php _e('ОТЗЫВЫ', 'shop_auto')?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-ms-12">
				<div class="testimonilas_slider owl-carousel">
					<?php 
					$wp_query = new WP_Query(array( 
						'post_type' => 'testimonials', 
						'post_status' => 'publish', 
						'posts_per_page' => -1) ); 
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<div class="slide">
								<div class="photo">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="name">
									<?php the_title() ?>
								</div>
								<div class="text">
									<?php the_content()?>
								</div>
							</div>

						<?php endwhile; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="map_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title center">
						
						<?php _e('наши представители по всех регионах', 'shop_auto')?>
					</div>
					<div class="section-description">
						<?php _e('Выберите Ваш регион и узнайте <br>о выкупе авто в этом регионе более подробно', 'shop_auto')?>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="map-holder">
						<?php include_once('template_parts/interactive-map.svg.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="faq_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title center">
						
						<?php _e('часто задаваемые вопросы', 'shop_auto')?>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="faq_acradeon">
						<?php 
						$wp_query = new WP_Query(array( 
							'post_type' => 'faq', 
							'post_status' => 'publish', 
							'posts_per_page' => -1) ); 
							while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<div class="item">
									<div class="inner">
										<?php the_title(); ?>
										<a href="javascript:void('0')">+</a>
										<div class="answer" style="display: none;">
											<?php the_content(); ?>
										</div>
									</div>
								</div>

							<?php endwhile; wp_reset_query(); ?>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-1 col-sm-6 col-sm-offset-3">
						<div class="call_back">
							<a href="javascript:void('0')"><?php _e('заказать обратный звонок', 'shop_auto')?></a>
						</div>

						<form class="price_request">
							<div class="thx-message" style="display: none">
								<?php _e('Спасибо за заявку. Мы скоро свяжемся с Вами', 'shop_auto')?>
							</div>
							<div class="form_title">
								
								<?php _e('Узнать стоимость своего авто в пару кликов ', 'shop_auto')?>
							</div>
							<div class="inputs_wrapper">
								<select class="input" name="" id="">
									<option value="0" style="color:#CCC;"><?php _e('Год выпуска', 'shop_auto')?></option>
									<script>
										var year = new Date().getFullYear();
										for (var i = year; i>=1910;i--) {
											document.write('<option value="'+i+'">'+i+'</option>');
										}
									</script>
								</select>
								<select class="input" name="" id="rst-oldcars-form-make_bottom">
									<?php
									$wpdb_sale = new wpdb( "shopavto_db", "BsDsJFhE", "shopavto_db", "shopavto.mysql.tools" );
									$q = $wpdb_sale->get_results("SELECT t.term_id, t.name, t.slug FROM sale_terms AS t INNER JOIN sale_term_taxonomy AS tt ON (t.term_id = tt.term_id AND tt.parent = 0) WHERE tt.taxonomy IN ('carproducer') ORDER BY t.name ASC");
									echo '<option selected="selected" value="0">Марка авто</option>';
									foreach($q as $row) {
										echo '<option value="'.$row->term_id.'">'.$row->name.'</option>';
									}?>

								</select>
								<select class="input" name="" id="rst-oldcars-form-model_bottom" disabled="true">
									<option value="">Модель авто</option>
								</select>

								<input class="input" type="tel" placeholder="Номер телефона">
							</div>
							<div class="send_btn">
								<button class="btn"><?php _e('Узнать', 'shop_auto')?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php get_footer(); ?>