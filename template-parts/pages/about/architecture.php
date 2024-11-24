<section class="section-architecture bg-brown-shade-2 pb-20 lg:pb-24 pt-24 relative">
<span
class="diamond diamond--dark-brown absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 h-full"></span>
	<div class="relative pb-20">
		<?php if (have_rows('architecture_slides')):
			$counter = 1; // Initialize counter to 1
			?>
			<div class="swiper aboutSwiper">
				<div class="swiper-wrapper">
					<?php while (have_rows('architecture_slides')):
						the_row();
						?>
						<div class="swiper-slide">
							<?php
								$img = get_sub_field('image');
								if ($img):
									echo wp_get_attachment_image($img, 'full', false, array('class' => 'block w-full h-[60vh] object-cover '));
								endif; 
							?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		<?php endif; ?>
	</div>
</section>