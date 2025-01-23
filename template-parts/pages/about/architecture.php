<section class="section-architecture bg-brown-shade-2 pb-20 lg:pb-24 pt-24 relative">
 <span class="diamond diamond--dark-brown absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 h-full"></span>
	<div class="relative pb-20">
		<?php
		$gallery = get_field( 'architecture_slides' );
		if ( $gallery ) :
			?>
			<div class="swiper aboutSwiper">
				<div class="swiper-wrapper">
					<?php foreach ( $gallery as $image_id ) : ?>
						<div class="swiper-slide">
							<?php echo wp_get_attachment_image( $image_id, 'full', false, array( 'class' => 'block w-full h-[60vh] object-cover ' ) ); ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		<?php endif; ?>
	</div>
</section>
