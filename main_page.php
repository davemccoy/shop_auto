<?php
/**
 * @package WordPress
 * @subpackage shop_auto
 * Template Name: Главная
 */
get_header(); ?>


<?php get_template_part('template_parts/section', 'promo')?>
<section class="about" id="about_us">
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
					<?php _e('И сейчас, пожалуй, самое время представиться. ShopAvto — это компания по выкупу, обмену и продаже подержанных авто по всей Украине. На рынке мы уже более 11 лет и за это время мы выкупили более 1950 как свежих так и заезженных авто. Цена в большинстве случаев доходит до 95% от рыночной стоимости автомобиля.', 'shop_auto')?></p>
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
<?php get_template_part('template_parts/section', 'count')?>
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
					<?php _e('Выкуп всех марок авто', 'shop_auto')?>
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
						<a href="https://shopavto.com/vykup-avto-toyota/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_29.png" alt="Выкуп авто Тойота"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_2.png" alt=brand""></a>
						<a href="https://shopavto.com/vykup-avto-bmw/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_56.png" alt="Выкуп авто БМВ"></a>
						<a href="https://shopavto.com/vykup-avto-volkswagen/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_22.png" alt="Выкуп авто Фольксваген"></a>
						<a href="https://shopavto.com/vykup-avto-hyundai/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_48.png" alt="Выкуп авто Хендай"></a>
						<a href="https://shopavto.com/vykup-avto-honda/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_14.png" alt="Выкуп авто Хонда"></a>
						<a href="https://shopavto.com/vykup-avto-kia/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_35.png" alt="Выкуп авто Киа"></a>
						<a href="https://shopavto.com/vykup-avto-chevrolet/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_47.png" alt="Выкуп авто Шевроле"></a>
						<a href="https://shopavto.com/vykup-avto-vaz/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_13.png" alt="Выкуп авто ВАЗ"></a>
						<a href="https://shopavto.com/vykup-avto-renault/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_21.png" alt="Выкуп авто Рено"></a>
						<a href="https://shopavto.com/vykup-avto-skoda/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_10.png" alt="Выкуп авто Шкода"></a>
						<a href="https://shopavto.com/vykup-avto-mazda/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_57.png" alt="Выкуп авто Мазда"></a>
						<a href="https://shopavto.com/vykup-avto-mercedes/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_58.png" alt="Выкуп авто Мерседес"></a>
						<a href="https://shopavto.com/vykup-avto-mitsubishi/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_68.png" alt="Выкуп авто Мицубиси"></a>
						<a href="https://shopavto.com/vykup-avto-nissan/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_28.png" alt="Выкуп авто Ниссан"></a>
						<a href="https://shopavto.com/vykup-avto-opel/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_46.png" alt="Выкуп авто Опель"></a>
						<a href="https://shopavto.com/vykup-avto-ford/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_49.png" alt="Выкуп авто Форд"></a>
						<a href="https://shopavto.com/vykup-avto-infinity/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_45.png" alt="Выкуп авто Инфинити"></a>
						<a href="https://shopavto.com/vykup-avto-lexus/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_43.png" alt="Выкуп авто Лексус"></a>
						<a href="https://shopavto.com/vykup-avto-daewoo/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_26.png" alt="Выкуп авто Деу"></a>
						<a href="https://shopavto.com/vykup-avto-subaru/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_31.png" alt="Выкуп авто Субару"></a>
						<a href="https://shopavto.com/vykup-avto-zaz/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_26.png" alt="Выкуп авто ЗАЗ"></a>
						<a href="https://shopavto.com/vykup-avto-acura/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_16.png" alt="Выкуп авто Акура"></a>
						<a href="https://shopavto.com/vykup-avto-citroen/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_30.png" alt="Выкуп авто Ситроен"></a>
						<a href="https://shopavto.com/vykup-avto-suzuki/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_34.png" alt="Выкуп авто Сузуки"></a>
						<a href="https://shopavto.com/vykup-avto-volvo/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_23.png" alt="Выкуп авто Вольво"></a>
						<a href="https://shopavto.com/vykup-avto-land-rover/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_1.png" alt="Выкуп авто Ленд Ровер"></a>
						<a href="https://shopavto.com/vykup-avto-porsche/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_2.png" alt="Выкуп авто Порше"></a>
						<a href="https://shopavto.com/vykup-avto-peugeot/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_38.png" alt="Выкуп авто Пежо"></a>
						<a href="https://shopavto.com/vykup-avto-geely/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_24.png" alt="Выкуп авто Джили"></a>
						<a href="https://shopavto.com/vykup-avto-chery/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_54.png" alt="Выкуп авто Чери"></a>
						<a href="https://shopavto.com/vykup-avto-ssangyong/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_36.png" alt="Выкуп авто Санг Йонг"></a>
						<a href="https://shopavto.com/vykup-avto-ferrari/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_18.png" alt="Выкуп авто Феррари"></a>
						<a href="https://shopavto.com/vykup-avto-bentley/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_20.png" alt="Выкуп авто Бентли"></a>
						<a href="https://shopavto.com/vykup-avto-maserati/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_53.png" alt="Выкуп авто Мазерати"></a>
						<a href="https://shopavto.com/vykup-avto-bugatti/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_69.png" alt="Выкуп авто Бугатти"></a>
					</div>
					<div class="slide">
						<a href="https://shopavto.com/vykup-avto-lamborghini/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_50.png" alt="Выкуп авто Lamborghini"></a>
						<a href="https://shopavto.com/vykup-avto-rolls-royce/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_8.png" alt="Выкуп авто Ролс Ройс"></a>
						<a href="https://shopavto.com/vykup-avto-mclaren/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_39.png" alt="Выкуп авто McLaren"></a>
						<a href="https://shopavto.com/vykup-avto-cadillac/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_40.png" alt="Выкуп авто Кадиллак"></a>
						<a href="https://shopavto.com/vykup-avto-jaguar/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_27.png" alt="Выкуп авто Ягуар"></a>
						<a href="https://shopavto.com/vykup-avto-hummer/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_51.png" alt="Выкуп авто Хаммер"></a>
						<a href="https://shopavto.com/vykup-avto-maybach/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_19.png" alt="Выкуп авто Майбах"></a>
						<a href="https://shopavto.com/vykup-avto-fiat/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_55.png" alt="Выкуп авто Фиат"></a>
						<a href="https://shopavto.com/vykup-avto-seat/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_3.png" alt="Выкуп авто Сеат"></a>
						<a href="https://shopavto.com/vykup-avto-dodge/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_4.png" alt="Выкуп авто Додж"></a>
						<a href="https://shopavto.com/vykup-avto-chrysler/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_25.png" alt="Выкуп авто Крайслер"></a>
						<a href="https://shopavto.com/vykup-avto-jeep/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_5.png" alt="Выкуп авто Джип"></a>
						<a href="https://shopavto.com/vykup-avto-xin-kai/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_33.png" alt="Выкуп авто Хин Кай"></a>
						<a href="https://shopavto.com/vykup-avto-great-wall/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_65.png" alt="Выкуп авто Грейт Вол"></a>
						<a href="https://shopavto.com/vykup-avto-dadi/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_42.png" alt="Выкуп авто Дади"></a>
						<a href="https://shopavto.com/vykup-avto-byd/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_15.png" alt="Выкуп авто Бид"></a>
						<a href="https://shopavto.com/vykup-avto-lifan/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_11.png" alt="Выкуп авто Лифан"></a>
						<a href="https://shopavto.com/vykup-avto-saab/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_62.png" alt="Выкуп авто Сааб"></a>
						<a href="https://shopavto.com/vykup-avto-rover/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_66.png" alt="Выкуп авто Ровер"></a>
						<a href="https://shopavto.com/vykup-avto-lancia/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_41.png" alt="Выкуп авто Лянча"></a>
						<a href="https://shopavto.com/vykup-avto-pontiac/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_9.png" alt="Выкуп авто Понтиак"></a>
						<a href="https://shopavto.com/vykup-avto-dacia/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_52.png" alt="Выкуп авто Дачия"></a>
						<a href="https://shopavto.com/vykup-avto-smart/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_60.png" alt="Выкуп авто Смарт"></a>
						<a href="https://shopavto.com/vykup-avto-iveco/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_61.png" alt="Выкуп авто Ивеко"></a>
						<a href="https://shopavto.com/vykup-avto-tata/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_7.png" alt="Выкуп авто Тата"></a>
						<a href="https://shopavto.com/vykup-avto-isuzu/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_63.png" alt="Выкуп авто Изуцу"></a>
						<a href="https://shopavto.com/vykup-avto-tatra/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_32.png" alt="Выкуп авто Татра"></a>
						<a href="https://shopavto.com/vykup-avto-kamaz/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_6.png" alt="Выкуп авто Камаз"></a>
						<a href="https://shopavto.com/vykup-avto-zil/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_64.png" alt="Выкуп авто ЗИЛ"></a>
						<a href="https://shopavto.com/vykup-avto-uaz/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_37.png" alt="Выкуп авто УАЗ"></a>
						<a href="https://shopavto.com/vykup-avto-moskvich/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_44.png" alt="Выкуп авто Москвич"></a>
						<a href="https://shopavto.com/vykup-avto-gaz/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_12.png" alt="Выкуп авто ГАЗ"></a>
						<a href="https://shopavto.com/vykup-avto-izh/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_67.png" alt="Выкуп авто ИЖ"></a>
						<a href="https://shopavto.com/vykup-avto-luaz/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_59.png" alt="Выкуп авто Луаз"></a>
						<a href="https://shopavto.com/vykup-avto-bogdan/"><img src="<?php echo get_template_directory_uri();?>/_images/brands/brand_17.png" alt="Выкуп авто Богдан"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials" id="testimonials">
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
								<div class="text js-testimonails-content">
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

	<section class="faq_section" id="faq">
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