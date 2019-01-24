<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage shop_auto
 */

add_theme_support('title-tag');

register_nav_menus(array(
	'top' => 'Верхнее',
	'bottom' => 'Внизу'
));

add_theme_support('post-thumbnails');


if (!function_exists('pagination')) {
	function pagination() {
		global $wp_query;
		$big = 999999999;
		$links = paginate_links(array(
			'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'type' => 'array',
			'prev_text'    => 'Назад',
	    	'next_text'    => 'Вперед',
			'total' => $wp_query->max_num_pages,
			'show_all'     => false,
			'end_size'     => 15,
			'mid_size'     => 15,
			'add_args'     => false,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''
		));
	 	if( is_array( $links ) ) {
		    echo '<ul class="pagination">';
		    foreach ( $links as $link ) {
		    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>";
		        else echo "<li>$link</li>"; 
		    }
		   	echo '</ul>';
		 }
	}
}

add_action('wp_footer', 'add_scripts');
if (!function_exists('add_scripts')) {
	function add_scripts() {
	    if(is_admin()) return false;
	    wp_deregister_script('jquery');
	    wp_enqueue_script('jquery', get_template_directory_uri().'/_libs/jquery/jquery-1.11.2.min.js','','',true);
	    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/_libs/owl/owl.carousel.min.js','','',true);
		wp_enqueue_script('mmenu-js', get_template_directory_uri().'/_libs/mmenu/jquery.mmenu.all.js');
		wp_enqueue_script('niceselect-js', get_template_directory_uri().'/_libs/niceselect/jquery.nice-select.min.js');
	    wp_enqueue_script('main-js', get_template_directory_uri().'/_js/main.js','','',true);
	}
}

add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
	function add_styles() {
	    if(is_admin()) return false;

	    wp_enqueue_script('modernizr', get_template_directory_uri().'/_libs/modernizr/modernizr.js','','',true);
		wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri().'/_libs/bootstrap/css/bootstrap-grid.min.css' );
		wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri().'/_libs/owl/assets/owl.carousel.min.css' );
		wp_enqueue_style('mmenu-css', get_template_directory_uri().'/_libs/mmenu/jquery.mmenu.all.css');
		wp_enqueue_style( 'main-css', get_template_directory_uri().'/_css/main.css' );
		wp_enqueue_style( 'style-css', get_template_directory_uri().'/style.css' );
	}
}

add_filter( 'auto_update_theme', '__return_false' );
add_filter( 'auto_update_plugin', '__return_false' );

