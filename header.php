<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package madebyc3
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/kh-logo.png" />
	<title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name', 'display' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php if( is_front_page() ): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/flexslider.css" rel="stylesheet">
	<?php endif; ?>

	<?php wp_head(); ?>



	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
	<?php if( is_front_page() ): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" charset="utf-8">
	jQuery(window).load(function() {
		jQuery('.flexslider').flexslider();
		jQuery('.home-testimonials-slider').flexslider();
	});
	</script>
	<?php endif; ?>
</head>

<body <?php body_class(); ?>>
