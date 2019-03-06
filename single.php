<?php
/**
 * Шаблон отдельной записи (single.php)
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
					<?php
					if( have_rows('links_after_content') ): ?>
						<div class="links_after_content">
							<ul>
								<?php while ( have_rows('links_after_content') ) : the_row(); ?>
									<li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('name');?></a></li>
								<?php endwhile; ?>
							</ul>
						</div>
					<?php endif;
					?>
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
