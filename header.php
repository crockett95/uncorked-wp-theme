<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Uncorked
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<nav>
			<?php get_template_part( 'partials/navbar' , 'fixedtop' ); ?>
		</nav>
		<div id="page" class="hfeed site">
			<?php do_action( 'before' ); if (is_front_page()){ ?>
				<div class="hidden">
					<?php } get_template_part('partials/header' , 'masthead' ); if (is_front_page()){ ?>
				</div>
			<?php  } ?>
			<div id="main" class="site-main container-fluid">