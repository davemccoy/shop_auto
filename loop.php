<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage shop_auto
 */ 
?>
<article id="post-<?php the_ID(); ?>" class="col-xs-4">
	<div class="arcticle">
		<div class="thumb">
			<?php 
			if( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
				echo '<img src="'.get_bloginfo("template_url").'/_images/no_Image.png" />';
			}
			?>
			<a href="<?php the_permalink() ?>"><?php _e('Читать', 'shop_auto')?></a>
		</div>
		<div class="brand"><?php the_title(); ?></div>
		<!-- <div class="text">1,6 МТ 2012 г.в.</div> -->
	</div>
</article>