<?php
/**
 * Template Name: Stay Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/page-header' );
			get_template_part( 'template-parts/pages/stay/zimmer' );
			get_template_part( 'template-parts/components/services' );
			get_template_part( 'template-parts/pages/stay/info' );
			get_template_part( 'template-parts/components/teaser-default' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
