<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.1.0
 */
?><!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-touch-icon-iphone.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-touch-icon-iphone.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-touch-icon-ipad.png" />

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript" src="//use.typekit.net/kdy0fgv.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body <?php body_class(); ?>>
	<!-- Start the main container -->
	<div id="container" class="container" role="document">
		<div class="wrap">
		<!-- Row for blog navigation -->
		<div class="row">
			<header id="required-header" class="twelve required-header" role="banner">
				<div class="row">
					<hgroup class="six columns text-center">
						<h1 class="logom">The Animal House Pet Supplies and Grooming</h1>
					</hgroup>
					<div class="six columns show-for-medium-up text-center"><h2 class="phonenum"><a href="tel:207.563.5595">207-563-5595</a></h2></div>
					<div class="six columns show-for-medium-up text-center"><h2 class="phonenum dama">Damariscotta, Maine</h2></div>
					
				</div>
				<?php get_template_part( 'nav' ); ?>
				<?php get_template_part( 'custom-header' ); ?>
			</header>
		</div><!-- // header.php -->