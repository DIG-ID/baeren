<section class="section-what-to-do-activities bg-brown-shade-1 pt-28 lg:pt-40 pb-28 lg:pb-40 ">
	<div class="theme-container mb-28 lg:mb-40">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-12 flex flex-col justify-center items-center mx-20">
				<h2 class="text-title-h2 text-center mb-6 fade-in"><?php the_field('activities_title'); ?></h2>
				<div class="my-6 mx-auto">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/solothurn-what-to-do-separator.svg"
						alt="decorative separator">
				</div>
				<p class="text-description text-center max-w-[635px] fade-in">
					<?php the_field('activities_description'); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="overflow-hidden ml-6 lg:ml-20">
		<?php
		if (have_rows('activities_list')):
			?>
			<div class="swiper activitiesSwiper fade-in">
				<div class="hidden invisible swiper-wrapper lg:flex lg:visible">
					<?php
					while (have_rows('activities_list')):
						the_row();
						?>
						<article class="card-activities swiper-slide bg-white overflow-hidden">
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
								class="card-activities-content h-[300px] lg:h-[200px] flex flex-col justify-center gap-4 px-7 lg:px-12 pt-6 lg:pt-9 pb-6 lg:pb-14">
								<a href="<?php echo esc_url(get_sub_field('link')); ?>"
									class="flex gap-x-4 items-center mb-4 lg:mb-0" target="_blank">
									<h2 class="text-title-h3 text-brown-shade-4"><?php the_sub_field('title'); ?></h2>
									<svg class="" width="19" height="10" viewBox="0 0 19 10" fill="none"
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
				<div class="lg:hidden lg:invisible visible flex flex-col gap-10 pr-6">
					<?php
					while (have_rows('activities_list')):
						the_row();
						?>
						<article class="card-activities swiper-slide bg-white overflow-hidden">
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
								class="card-activities-content h-[300px] lg:h-[200px] flex flex-col justify-center gap-4 px-7 lg:px-12 pt-6 lg:pt-9 pb-6 lg:pb-14">
								<a href="<?php echo esc_url(get_sub_field('link')); ?>"
									class="flex gap-x-4 items-center mb-4 lg:mb-0" target="_blank">
									<h2 class="text-title-h3 text-brown-shade-4"><?php the_sub_field('title'); ?></h2>
									<svg class="" width="19" height="10" viewBox="0 0 19 10" fill="none"
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