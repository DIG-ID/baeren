<section class="section-what-to-do-events">
	<span class="diamond diamond--green !w-4 !h-4 absolute left-1/2 -translate-x-1/2 -translate-y-1/2 invisible fade-in--noscroll z-10"></span>
	<div class="overflow-hidden ml-6 lg:ml-20 -mt-40">
		<?php
		if (have_rows('events')):
			?>
			<div class="swiper eventSwiper invisible fade-in--noscroll">
				<div class="invisible hidden swiper-wrapper lg:flex lg:visible">
					<?php
					while (have_rows('events')):
						the_row();
						?>
						<article class="card-events swiper-slide bg-white overflow-hidden">
							<a href="<?php echo esc_url(get_sub_field('link')); ?>" target="_blank">
								<?php
								$img = get_sub_field('image');
								if ($img):
									echo wp_get_attachment_image($img, 'full', false, array('class' => 'w-full object-cover h-[238px] lg:h-[354px]'));
								else:
									?>
									<span
										class="flex flex-col justify-center items-center w-full h-[238px] lg:h-[354px] bg-brown-shade-1 text-brown-shade-2">no
										image</span>
									<?php
								endif;
								?>
							</a>
							<div
								class="card-event-content h-[175px] lg:h-[200px] flex flex-col justify-center gap-4 px-7 lg:px-12 pt-6 lg:pt-9 pb-6 lg:pb-14">
								<a href="<?php echo esc_url(get_sub_field('link')); ?>"
									class="flex gap-x-4 items-center  mb-4 lg:mb-0" target="_blank">
									<h2 class="text-title-h3 text-brown-shade-4 text-nowrap"><?php the_sub_field('title'); ?>
									</h2>
									<svg width="19" height="10" viewBox="0 0 19 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1L8 5L1 9M11 1L18 5L11 9" stroke="#34302D" />
									</svg>
								</a>
								<p class="text-body text-brown-shade-4"><?php the_sub_field('description'); ?></p>
							</div>
						</article>
						<?php
					endwhile;
					?>
				</div>
				<div class="lg:hidden lg:invisible flex flex-col gap-10 pr-6">
					<?php
					while (have_rows('events')):
						the_row();
						?>
						<article class="card-events swiper-slide bg-white overflow-hidden">
							<a href="<?php echo esc_url(get_sub_field('link')); ?>" target="_blank">
								<?php
								$img = get_sub_field('image');
								if ($img):
									echo wp_get_attachment_image($img, 'full', false, array('class' => 'w-full object-cover h-[238px] lg:h-[354px]'));
								else:
									?>
									<span
										class="flex flex-col justify-center items-center w-full h-[238px] lg:h-[354px] bg-brown-shade-1 text-brown-shade-2">no
										image</span>
									<?php
								endif;
								?>
							</a>
							<div
								class="card-event-content h-[175px] lg:h-[200px] flex flex-col justify-center gap-4 px-7 lg:px-12 pt-6 lg:pt-9 pb-6 lg:pb-14">
								<a href="<?php echo esc_url(get_sub_field('link')); ?>"
									class="flex gap-x-4 items-center  mb-4 lg:mb-0" target="_blank">
									<h2 class="text-title-h3 text-brown-shade-4 text-nowrap"><?php the_sub_field('title'); ?>
									</h2>
									<svg width="19" height="10" viewBox="0 0 19 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1L8 5L1 9M11 1L18 5L11 9" stroke="#34302D" />
									</svg>
								</a>
								<p class="text-body text-brown-shade-4"><?php the_sub_field('description'); ?></p>
							</div>
						</article>
						<?php
					endwhile;
					?>
				</div>
			</div>
			<?php
		endif;
		?>
	</div>
</section>