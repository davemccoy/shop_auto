<section class="how_it_works">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title center">
					<?php 
					if(get_locale() == 'ru_RU') { ?>
						Как происходит автовыкуп
					<?php } else { ?>
						Як відбувається автовикуп
					<?php } ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="steps-wrapper">
					<img src="<?php echo get_template_directory_uri();?>/_images/how_it_works.png" alt="">
					<div class="step step1">
						<?php 
						if(get_locale() == 'ru_RU') { ?>
							Обработка Вашей заявки<br>
							и обсуждение по телефону
						<?php } else { ?>
							Обробка Вашої заявки <br>
							і обговорення по телефону
						<?php } ?>
					</div>
					<div class="step step2">
						Вывод<br>
						взаимовыгодной<br>
						цены 
					</div>
					<div class="step step3">
						Осмотр авто<br>
						в удобном для Вас <br> 
						месте. (10-20 мин)  Мы не ездим <br>
						по СТО и не <br> 
						тратим Ваше время 
					</div>
					<div class="step step4">
						Заключение<br>
						сделки
					</div>
					<div class="step step5">
						Оформление документов <br>
						при согласии сторон <br>
						(договор купли-продажи, <br>
						переоформление, доверенность) <br>
						оплачиваем мы 
					</div>
					<div class="step step6">
						Расчёт <br>
						Ключи и документы <br>
						в обмен на деньги
					</div>
				</div>
			</div>
		</div>
	</div>
</section>