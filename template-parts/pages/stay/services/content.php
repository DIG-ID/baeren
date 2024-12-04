<section class="section-services-content pb-0 flex flex-col gap-12 lg:gap-40 my-20">
	<?php if (have_rows('services')): ?>
		<?php $i = 1; ?>
		<?php while (have_rows('services')):
			the_row(); ?>

			<?php
			$is_even = $i % 2 === 0;
			$fade_class = ($i === 1) ? 'invisible fade-in--noscroll' : 'invisible fade-in';
			$order_image_class = $is_even ? ' lg:order-1 lg:after:left-[0.62rem] lg:after:right-[-2rem] lg:mr-[-6rem] mt-[-4.5rem] lg:mt-[3rem]' : ' lg:order-2 lg:after:left-[-2rem] lg:after:right-[0.62rem] lg:ml-[-6rem]';
			?>

			<?php if ($is_even): ?>
				<div class="relative bg-brown-shade-1 lg:py-20 invisible fade-in">
				<?php endif; ?>

				<div class="theme-container !px-0 mx-auto">
					<div class="theme-grid"></div>
					<div
						class="relative card-services items-center grid grid-cols-2 mx-8 lg:grid-cols-12 col-span-2 lg:col-span-12 py-6 gap-x-6 lg:mx-16 <?php echo esc_attr($fade_class); ?>">

						<div
							class="card-services-content col-span-2 pt-16 px-4 lg:px-12 lg:col-span-6 order-2 <?php echo $is_even ? 'lg:order-2 lg:pl-40 lg:py-48' : 'lg:order-1 lg:pr-40 lg:py-44'; ?>">
							<h2 class="text-title-h2 lg:text-2xl text-center lg:text-left mb-10 mx-auto max-w-[355px]"><?php the_sub_field('title'); ?></h2>
							<div class="text-body mb-12 text-center lg:text-left mx-auto max-w-[355px]"><?php the_sub_field('description'); ?></div>
						</div>

						<div
							class="card-services-image col-span-2 lg:col-span-6 relative bg-white lg:my-12 order-1 <?php echo $order_image_class ?>">
							<div
								class="absolute lg:w-8 lg:h-16 w-16 h-8 flex justify-center items-center lg:bg-brown-shade-1 z-10 bottom-[-2rem] lg:bottom-1/2 left-1/2 translate-y-1/2 -translate-x-1/2 <?php echo $is_even ? 'lg:!right-[-2rem] lg:left-full lg:translate-x-1/2 ' : 'lg:!left-[-2rem] lg:-translate-x-1/2 bg-white ' ?>">
								<span class="block h-4 w-4 rotate-45 <?php echo $is_even ? 'diamond--light-brown' : 'diamond--white' ?> lg:!bg-brown-shade-1 "></span>
							</div>

							<?php
							$offer_image = get_sub_field('image');
							if ($offer_image):
								echo wp_get_attachment_image($offer_image, 'full', false, array('class' => 'w-full object-cover'));
							endif;
							?>
						</div>
					</div>

				</div>

				<?php if ($i % 2 === 0): ?>
				</div>
			<?php endif; ?>

			<?php $i++; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>