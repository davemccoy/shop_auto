<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage shop_auto
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav class="mobile-nav">
		<?php $args = array( 
			'theme_location' => 'top',
			'container'=> false,
			'menu_id' => 'mobile-nav-list',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'menu_class' => 'mobile-menu',  		
		);
		wp_nav_menu($args);
		?>
	</nav>
	<div class="mm-page">
		<header class="header">
			<div class="top_header_row">
				<div class="container no-before no-after">
					<div class="row">
						<div class="col-xs-12">
							<ul class="phones">
								<li><a class="mail" href="mailto:<?php the_field('email', 'template-setings'); ?>"><?php the_field('email', 'template-setings'); ?></a></li>
								<li><a class="tel vdf" href="tel:<?php the_field('phone_vodaphone', 'template-setings'); ?>"><?php the_field('phone_vodaphone', 'template-setings'); ?></a></li>
								<li><a class="tel ks" href="tel:<?php the_field('phone_kyivstar', 'template-setings'); ?>"><?php the_field('phone_kyivstar', 'template-setings'); ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="bottom_header_row">
					<div class="logo">
						<?php if( is_front_page() ){ ?>
							<img src="<?php echo get_template_directory_uri();?>/_images/logo.png" alt="">
						<?php }
						else { ?>
							<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/_images/logo.png" alt=""></a>
						<?php }
						?>
					</div>
					<ul class="phones">
						<li><a class="tel vdf" href="tel:<?php the_field('phone_vodaphone', 'template-setings'); ?>"><?php the_field('phone_vodaphone', 'template-setings'); ?></a></li>
						<li><a class="tel ks" href="tel:<?php the_field('phone_kyivstar', 'template-setings'); ?>"><?php the_field('phone_kyivstar', 'template-setings'); ?></a></li>
					</ul>
					<button class="hamburger hamburger--collapse js-open-nav" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<div class="menu">
						<?php $args = array(
							'theme_location' => 'top',
							'container'=> 'nav',
							'menu_class' => 'nav nav-pills header-menu',
							'menu_id' => 'header-nav',
							'fallback_cb' => false
						);
						wp_nav_menu($args);
						?>
					</div>
				</div>
			</div>
		</header>