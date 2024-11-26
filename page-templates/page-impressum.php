<?php
/**
 * Template Name: Impressum Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/page-header' );
			get_template_part( 'template-parts/pages/impressum/content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();