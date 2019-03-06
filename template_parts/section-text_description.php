<?php
if (get_field('additional_description')) {
?>

<section class="text-description">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="content">
					<?php the_field('additional_description') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>