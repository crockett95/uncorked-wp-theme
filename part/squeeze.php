<?php
/**
 * Template Name: Squeeze Page
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Uncorked
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
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
		<?php wp_head(); ?>
		<style>
		    html    {height: 100%;}
		    body {
		        height: 100%;
		        background-image: url("<?php echo get_template_directory_uri() . '/img/squeezebg.png'; ?>");
		        background-position: center center;
		        background-repeat: no-repeat;
		        background-attachment: scroll;
		        background-size: contain;
		    }
		    .entry-header   {
		        text-align: center;
		        margin: 50px 0 0;
		    }
		    .entry-title {
		        font-size:  8em;
		        line-height: 1em;
		        font-family: 'komu-a';
		    }
		    .squeeze-text {
		        max-width: 500px;
		        margin: 20px auto 0;
		        text-align: center;
		    }
		    input[type="submit"]    {
		        margin: 0 auto;
		    }
		    
		</style>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<?php 
				do_action( 'before' ); 
			?>
			<div id="main" class="site-main container-fluid">
			    <?php // The Loop
            		if ( have_posts() ) :

            			// Get post content
            			while ( have_posts() ) : the_post(); ?>
            				<main>

                            	<?php ?>
                            	<header class="entry-header">
                            		<h1 class="entry-title"><?php the_title(); ?></h1>
                            	</header><!-- .entry-header -->

                            	<div class="lead squeeze-text">
                            		<?php the_content(); ?>
                            	</div><!-- .entry-content -->
                            	<?php edit_post_link( __( 'Edit', 'uncorked' ), '<footer class="entry-meta"><span class="edit-link label label-important">', '</span></footer>' ); ?>

                            </main>
                		<script>
                			var $ = jQuery.noConflict();
            				$('input[type="submit"]').addClass('btn btn-primary btn-large');
                		</script><!-- #post-## -->
            			<?php endwhile;
            		endif; ?>
			    			</div><!-- #main -->
                		</div><!-- #page -->
                		<?php wp_footer(); ?>
                	</body>
                </html>