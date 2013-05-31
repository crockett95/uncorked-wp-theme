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
<?php tha_html_before(); ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<?php tha_head_top(); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<script type="text/javascript" src="//use.typekit.net/fcm6dah.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width" />
		<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?><?php _e( ' | ', 'uncorked' ); ?><?php bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		<?php tha_head_bottom(); wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php tha_body_top(); ?>
		<div id="page" class="hfeed site">
			<nav class="navbar navbar-fixed-top navbar-inverse">
			<?php get_template_part( 'part/navbar' ); ?>
			</nav>
			<?php 
				tha_header_before(); 
				do_action( 'before' ); 
				if ( !is_front_page() ) { get_template_part( 'part/header' , 'masthead' ); }
				tha_header_after(); 
			?>
			<div id="main" class="site-main container-fluid">