<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage shop_auto
 */
get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="not_found_404">
					404 <br>
					не найдено
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>