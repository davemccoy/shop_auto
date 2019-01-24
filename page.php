<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage shop_auto
 */
get_header(); ?>
<?php get_template_part('template_parts/section', 'promo')?>
<section class="section_after_promo">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>				
			</div>
		</div>
	</div>
</section>
<?php get_template_part('template_parts/section', 'howit')?>
<?php get_template_part('template_parts/section', 'slider_cars')?>
<?php get_template_part('template_parts/section', 'text_description')?>
<?php get_template_part('template_parts/section', 'infographics')?>
<?php get_template_part('template_parts/section', 'news_slider')?>
<?php get_footer(); ?>