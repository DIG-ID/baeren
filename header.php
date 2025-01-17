<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>

	<?php
	$header_template = get_field( 'intro_template' );
	$header_template = ( 'secondary' === $header_template ) ? 'page-header__secondary' : '';
	?>
	<body <?php body_class( 'relative ' . $header_template ); ?>>
		<?php do_action( 'wp_body_open' ); ?>
		<?php get_template_part( 'template-parts/header', 'main' ); ?>
