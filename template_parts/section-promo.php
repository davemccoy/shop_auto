<section class="promo">
	<div class="container-fluid container-800" style="padding-left: 0">
		<div class="row">
			<div class="col-md-9 col-sm-8 hide-800">
				<div class="promo-slider owl-carousel">
					<div class="slide">
						<div class="text container">Мы готовы приехать и <span>купить</span> Ваш автомобиль </div>
						<div class="img">
							<img src="<?php echo get_template_directory_uri();?>/_images/car1.png" alt="">
						</div>
					</div>
					<div class="slide">
						<div class="text container">Автовыкуп - Дорого, Быстро. Выкуп сразу в день осмотра</div>
						<div class="img">
							<img src="<?php echo get_template_directory_uri();?>/_images/car2.png" alt="">
						</div>
					</div>
					<div class="slide">
						<div class="text container"></div>
						<div class="img">
							<img src="<?php echo get_template_directory_uri();?>/_images/car3.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 center-block-800">
				<div class="call_back">
					<a href="javascript:void('0')">заказать обратный звонок</a>
				</div>
				
				<form class="price_request">
					<div class="form_title">
						Узнать стоимость своего авто
						в пару кликов 
					</div>
					<div class="inputs_wrapper">
						<select class="input" name="year" id="">
							<option value="0" style="color:#CCC;">Год выпуска</option>
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
						<button class="btn">Узнать</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
