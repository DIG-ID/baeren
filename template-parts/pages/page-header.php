<section class="page-header bg-brown-shade-4 text-brown-shade-1 pt-28 lg:pt-64 pb-20 lg:pb-40">
	<div class="theme-container">
		<div class="flex flex-col w-full text-center">
			<div class="page-header--breadcrumbs invisible fade-in--noscroll">
				<?php do_action( 'breadcrumbs' ); ?>
			</div>
			<div class="page-header--title invisible fade-in--noscroll">
				<?php
				$page_header_title = get_field( 'intro_title' );
				if( $page_header_title ) : ?>
					<h1 class="page-header--title max-w-[840px] mx-auto py-4"><?php echo $page_header_title; ?></h1>
				<?php endif; ?>
			</div>
			<div class="page-header--separator mx-auto">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page-header-separator.svg" alt="decorative separator">
			</div>
			<div class="page-header--description w-3/4 mx-auto invisible fade-in--noscroll pt-4">
				<?php
				$page_header_desc = get_field( 'intro_subtitle' );
				if ( $page_header_desc ) :
					?>
					<p class="page-header--subtitle"><?php echo $page_header_desc; ?></p>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
