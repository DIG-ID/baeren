<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N326TKPV');</script>
		<!-- End Google Tag Manager -->
		<?php wp_head(); ?>
	</head>

	<?php
	$header_template = get_field( 'intro_template' );
	$header_template = ( 'secondary' === $header_template ) ? 'page-header__secondary' : '';
	?>
	<body <?php body_class( 'relative ' . $header_template ); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N326TKPV"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php do_action( 'wp_body_open' ); ?>
		<?php get_template_part( 'template-parts/header', 'main' ); ?>
