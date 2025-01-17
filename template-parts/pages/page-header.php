<?php
$intro_image_id = get_field( 'intro_image' );
if ( $intro_image_id ) :
	?><section class="page-header flex items-center bg-brown-shade-4 text-brown-shade-1 relative min-h-[100vh]" style="background-image: url(<?php echo esc_url( wp_get_attachment_image_url( $intro_image_id, 'full' ) ); ?>); background-size: cover; background-position: center;"><div class="absolute inset-0 bg-overlay"></div><!-- Overlay --><?php
else :
	?>
	<section class="page-header flex items-center bg-brown-shade-4 text-brown-shade-1 relative pt-28 lg:pt-64 pb-20 lg:pb-40" >
	<?php
endif;
?>
	<div class="theme-container relative z-10">
		<div class="flex flex-col w-full text-center items-center">
			<div class="page-header--breadcrumbs invisible fade-in--noscroll">
				<?php do_action( 'breadcrumbs' ); ?>
			</div>
			<div class="page-header--title invisible fade-in--noscroll">
				<?php
				$page_header_title = get_field( 'intro_title' );
				if ( $page_header_title ) :
					?><h1 class="page-header--title max-w-[840px] mx-auto py-4"><?php echo $page_header_title; ?></h1><?php
				endif;
				?>
			</div>
			<div class="page-header--separator mx-auto">
				<?php
				if ( get_field( 'intro_template' ) === 'secondary' || is_404() ) :
					echo '<svg class="page-header--separator__light" width="254" height="14" viewBox="0 0 254 14" fill="none" xmlns="http://www.w3.org/2000/svg" >
									<rect x="125.75" y="1" width="8" height="8" transform="rotate(45 125.75 1)" stroke="#8E827B"/>
									<path d="M0.75 7H101.25" stroke="#8E827B"/>
									<path d="M152.75 7H253.25" stroke="#8E827B"/>
								</svg>';
				else :
					echo '<svg class="page-header--separator__light" width="253" height="13" viewBox="0 0 253 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="Group 169">
									<rect id="Rectangle 49" x="125.25" y="0.843262" width="8" height="8" transform="rotate(45 125.25 0.843262)" stroke="#F5F0EF"/>
									<path id="Line 10" d="M0.25 6.84326H100.75" stroke="#F5F0EF"/>
									<path id="Line 11" d="M152.25 6.84326H252.75" stroke="#F5F0EF"/>
									</g>
								</svg>';
				endif;
				?>
			</div>
			<div class="page-header--description w-3/4 mx-auto invisible fade-in--noscroll pt-4">
				<?php
				$page_header_desc = get_field( 'intro_subtitle' );
				if ( $page_header_desc ) :
					?><p class="page-header--subtitle"><?php echo $page_header_desc; ?></p><?php
				endif;
				?>
			</div>
		</div>
	</div>
	<?php if ( $intro_image_id ) : ?>
		<a href="javascript:void(0);" id="scroll-down-link" class="scroll-down-arrows absolute left-1/2 -translate-x-1/2 bottom-20"></a>
	<?php endif; ?>
</section>

<?php /*
$is_hidden = is_page_template( 'page-templates/page-solothurn-what-to-see.php' ) || is_page_template( 'page-templates/page-solothurn-what-to-do.php' );
if ( ! $is_hidden ) :
	?>
	<span class="diamond -top-3 relative<?php
	if (is_page_template('page-templates/page-stay.php')):
		echo ' diamond--red';
	elseif (is_page_template('page-templates/page-perfect-for.php')):
		echo ' diamond--orange';
	elseif (is_page_template('page-templates/page-solothurn.php')):
		echo ' diamond--green z-10';
	endif;
	?>">
	</span>
	<?php
endif; */
