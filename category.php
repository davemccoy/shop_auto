<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage shop_auto
 */
get_header(); ?> 
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><?php single_cat_title(); ?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('loop'); ?>
				<?php endwhile;
				else: echo '<p>Нет записей.</p>'; endif; ?>	 
				<?php pagination(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>