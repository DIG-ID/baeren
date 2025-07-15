<?php
/**
 * Template Name: Home Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/home/hero' );
			get_template_part( 'template-parts/pages/home/intro' );
			get_template_part( 'template-parts/pages/home/banner' );	
			get_template_part( 'template-parts/pages/home/rooms' );
			get_template_part( 'template-parts/components/services' );
			get_template_part( 'template-parts/components/teaser-default' );
			get_template_part( 'template-parts/pages/home/solothurn' );
			get_template_part( 'template-parts/pages/home/cta' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
