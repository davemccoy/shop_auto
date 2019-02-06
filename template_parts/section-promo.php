<section class="promo">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
				<div class="section-title center">
					
					<?php _e('Выкуп авто в любом состоянии', 'shop_auto')?>
					<div class="section-sub-title">
						<?php _e('Выезд в любую точку Украины', 'shop_auto')?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid container-800" style="padding-left: 0">
		<div class="row">
			<div class="col-md-9 col-sm-8 hide-800">
				<div class="promo-slider owl-carousel">
					<div class="slide">
						<div class="text">
							<?php _e('Мы готовы приехать и <span>купить</span> Ваш автомобиль ', 'shop_auto')?>
						</div>
						<div class="img">
							<img src="<?php echo get_template_directory_uri();?>/_images/car1.png" alt="">
						</div>
					</div>
					<div class="slide">
						<div class="text">
							<?php _e('Автовыкуп - Дорого, Быстро. Выкуп сразу в день осмотра', 'shop_auto')?>
						</div>
						<div class="img">
							<img src="<?php echo get_template_directory_uri();?>/_images/car2.png" alt="">
						</div>
					</div>
					<div class="slide">
						<div class="text"></div>
						<div class="img">
							<img src="<?php echo get_template_directory_uri();?>/_images/car3.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 center-block-800">
				<div class="call_back">
					<a href="javascript:void('0')">
						<?php _e('заказать обратный звонок', 'shop_auto')?>
					</a>
				</div>
				
				<form class="price_request">
					<div class="thx-message" style="display: none">
						<?php _e('Спасибо за заявку. Мы скоро свяжемся с Вами', 'shop_auto')?>
					</div>
					<div class="form_title">
						<?php _e('Узнать стоимость своего авто в пару кликов ', 'shop_auto')?>
					</div>
					<div class="inputs_wrapper">
						<select class="input" name="year" id="">
							<option value="0" style="color:#CCC;"><?php _e('Год выпуска', 'shop_auto')?></option>
							<script>
								var year = new Date().getFullYear();
								for (var i = year; i>=1910;i--) {
									document.write('<option value="'+i+'">'+i+'</option>');
								}
							</script>
						</select>
						<select class="input" name="brand" id="rst-oldcars-form-make">
							<?php
							$wpdb_sale = new wpdb( "shopavto_db", "BsDsJFhE", "shopavto_db", "shopavto.mysql.tools" );
							$q = $wpdb_sale->get_results("SELECT t.term_id, t.name, t.slug FROM sale_terms AS t INNER JOIN sale_term_taxonomy AS tt ON (t.term_id = tt.term_id AND tt.parent = 0) WHERE tt.taxonomy IN ('carproducer') ORDER BY t.name ASC");
							echo '<option selected="selected" value="0">Марка авто</option>';
							foreach($q as $row) {
								echo '<option value="'.$row->term_id.'">'.$row->name.'</option>';
							}?>

						</select>
						<select class="input" name="model" id="rst-oldcars-form-model" disabled="true">
							<option value="">Модель авто</option>
						</select>

						<input class="input" type="tel" name="tel" placeholder="Номер телефона">
					</div>
					<div class="send_btn">
						<button class="btn"><?php _e('Узнать', 'shop_auto')?></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
