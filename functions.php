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

add_action( 'wp_ajax_get_carproducers', 'get_carproducers_callback' );
add_action( 'wp_ajax_nopriv_get_carproducers', 'get_carproducers_callback' );

function get_carproducers_callback(){
	$carproducer_id = isset($_POST['carproducer_id'])? (int)$_POST['carproducer_id']: 0;
	if ( $carproducer_id == 0) {
		return;
	}
	$wpdb_sale = new wpdb( "shopavto_db", "BsDsJFhE", "shopavto_db", "shopavto.mysql.tools" );
	$q = $wpdb_sale->get_results("SELECT t.term_id, t.name, t.slug FROM sale_terms AS t INNER JOIN sale_term_taxonomy AS tt ON (t.term_id = tt.term_id AND tt.parent = ".$carproducer_id.") WHERE tt.taxonomy IN ('carproducer') ORDER BY t.name ASC");
	echo '<option selected="selected" value="0">Модель авто</option>';
	foreach($q as $row) {
		echo '<option value="'.$row->term_id.'">'.$row->name.'</option>';
	}
	exit();
}

// Register Custom Post Type
function tesimonials_post_type() {

	$labels = array(
		'name'                  => _x( 'Отзывы', 'Post Type General Name', 'shop_auto' ),
		'singular_name'         => _x( 'Отзыв', 'Post Type Singular Name', 'shop_auto' ),
		'menu_name'             => __( 'Отзывы', 'shop_auto' ),
		'name_admin_bar'        => __( 'Отзывы', 'shop_auto' ),
		'archives'              => __( 'Архиви Отзывов', 'shop_auto' ),
		'attributes'            => __( 'Отзывы атрибуты', 'shop_auto' ),
		'parent_item_colon'     => __( 'Родительсктй', 'shop_auto' ),
		'all_items'             => __( 'Все', 'shop_auto' ),
		'add_new_item'          => __( 'Добавить', 'shop_auto' ),
		'add_new'               => __( 'Добавить', 'shop_auto' ),
		'new_item'              => __( 'Новый', 'shop_auto' ),
		'edit_item'             => __( 'Редактировать', 'shop_auto' ),
		'update_item'           => __( 'Обновить', 'shop_auto' ),
		'view_item'             => __( 'Посмотреть', 'shop_auto' ),
		'view_items'            => __( 'Посмотреть все', 'shop_auto' ),
		'search_items'          => __( 'Искать', 'shop_auto' ),
		'not_found'             => __( 'Не найдено', 'shop_auto' ),
		'not_found_in_trash'    => __( 'Не найдено', 'shop_auto' ),
		'featured_image'        => __( 'Миниатюра', 'shop_auto' ),
		'set_featured_image'    => __( 'Уставить миниатюру', 'shop_auto' ),
		'remove_featured_image' => __( 'Удалить миниатюру', 'shop_auto' ),
		'use_featured_image'    => __( 'Использовать как миниатюру', 'shop_auto' ),
		'insert_into_item'      => __( 'Вставить в', 'shop_auto' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'shop_auto' ),
		'items_list'            => __( 'Items list', 'shop_auto' ),
		'items_list_navigation' => __( 'Items list navigation', 'shop_auto' ),
		'filter_items_list'     => __( 'Filter items list', 'shop_auto' ),
	);
	$args = array(
		'label'                 => __( 'Отзыв', 'shop_auto' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'tesimonials_post_type', 0 );



// Register Custom Post Type
function faq_post_type() {

	$labels = array(
		'name'                  => _x( 'Вопросы и ответы', 'Post Type General Name', 'shop_auto' ),
		'singular_name'         => _x( 'Вопрос и ответ', 'Post Type Singular Name', 'shop_auto' ),
		'menu_name'             => __( 'Вопросы и ответы', 'shop_auto' ),
		'name_admin_bar'        => __( 'Вопросы и ответы', 'shop_auto' ),
		'archives'              => __( 'Архиви Вопросы и ответы', 'shop_auto' ),
		'attributes'            => __( 'Вопросы и ответы атрибуты', 'shop_auto' ),
		'parent_item_colon'     => __( 'Родительсктй', 'shop_auto' ),
		'all_items'             => __( 'Все', 'shop_auto' ),
		'add_new_item'          => __( 'Добавить', 'shop_auto' ),
		'add_new'               => __( 'Добавить', 'shop_auto' ),
		'new_item'              => __( 'Новый', 'shop_auto' ),
		'edit_item'             => __( 'Редактировать', 'shop_auto' ),
		'update_item'           => __( 'Обновить', 'shop_auto' ),
		'view_item'             => __( 'Посмотреть', 'shop_auto' ),
		'view_items'            => __( 'Посмотреть все', 'shop_auto' ),
		'search_items'          => __( 'Искать', 'shop_auto' ),
		'not_found'             => __( 'Не найдено', 'shop_auto' ),
		'not_found_in_trash'    => __( 'Не найдено', 'shop_auto' ),
		'featured_image'        => __( 'Миниатюра', 'shop_auto' ),
		'set_featured_image'    => __( 'Уставить миниатюру', 'shop_auto' ),
		'remove_featured_image' => __( 'Удалить миниатюру', 'shop_auto' ),
		'use_featured_image'    => __( 'Использовать как миниатюру', 'shop_auto' ),
		'insert_into_item'      => __( 'Вставить в', 'shop_auto' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'shop_auto' ),
		'items_list'            => __( 'Items list', 'shop_auto' ),
		'items_list_navigation' => __( 'Items list navigation', 'shop_auto' ),
		'filter_items_list'     => __( 'Filter items list', 'shop_auto' ),
	);
	$args = array(
		'label'                 => __( 'Вопросы и ответы', 'shop_auto' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'faq_post_type', 0 );	