<section class="section-sustainability-content pb-0 flex flex-col gap-40 my-20">
	<?php if (have_rows('child_pages')): ?>
		<?php $i = 1; ?>
		<?php while (have_rows('child_pages')):
			the_row(); ?>

			<?php
			$is_odd = $i % 2 === 0;
			$fade_class = ($i === 1) ? 'invisible fade-in--noscroll' : 'invisible fade-in';
			$order_image_class = $is_odd ? 'lg:order-1 lg:after:left-[0.62rem] lg:after:right-[-2rem] lg:mr-[-6rem]' : 'lg:order-2 lg:after:left-[-2rem] lg:after:right-[0.62rem] lg:ml-[-6rem]';
			?>

			<?php if ($i % 2 === 0): ?>
				<div class="relative bg-brown-shade-1 lg:py-10">
					<span class="diamond--brown -top-[0.75rem] absolute left-1/2 transform -translate-x-1/2 z-10"></span>
					<span class="diamond--brown -bottom-[0.75rem] absolute left-1/2 transform -translate-x-1/2 z-10"></span>
				<?php endif; ?>

				<div class="theme-container !px-0 mx-auto">
					<div class="block lg:hidden min-h-60 -mt-1"></div>
					<div class="theme-grid"></div>
					<div
						class="relative card-sustainability grid grid-cols-2 lg:grid-cols-12 col-span-2 lg:col-span-12 gap-x-6 lg:pb-0 lg:mx-16 <?php echo esc_attr($fade_class); ?>">

						<div
							class="card-sustainability-content col-span-2 py-28 px-9 lg:col-span-6 order-2 <?php echo $is_odd ? 'lg:order-2 lg:pl-40' : 'lg:order-1 lg:pr-40'; ?>">
							<h2 class="text-title-h2 text-left mb-4"><?php the_sub_field('title'); ?></h2>
							<h3 class="text-title-h3 mb-4 lg:mb-7"><strong><?php the_sub_field('subtitle'); ?></strong></h3>

							<?php
							$list = get_sub_field('list');
							if ($list):
								echo '<ul class="list-none">';
								foreach ($list as $list_item):
									echo '<li class="mt-4" ><span class="inline-block mr-2 w-2 h-2 rotate-45 bg-brown-shade-2"></span> ' . esc_html($list_item['text']) . '</li>';
								endforeach;
								echo '</ul>';
							endif;
							?>

							<div class="text-body mb-12"><?php the_sub_field('description'); ?></div>
						</div>

						<div
							class="card-sustainability-image lg:my-8 col-span-2 lg:col-span-6 relative order-1 mb-[-2rem] <?php echo $order_image_class ?>">
							<div
								class="absolute lg:w-8 lg:h-16 w-16 h-8 flex justify-center items-center  bg-brown-shade-1 z-10 bottom-[-2rem] lg:bottom-1/2 left-1/2 translate-y-1/2 -translate-x-1/2 <?php echo $is_odd ? 'lg:!right-[-2rem] lg:left-full lg:translate-x-1/2' : 'lg:!left-[-2rem] lg:-translate-x-1/2' ?>">
								<span class="diamond--light-brown"></span>
							</div>

							<?php
							$offer_image = get_sub_field('image');
							$image_class = $is_odd ? 'w-full h-full' : 'w-full h-full';
							if ($offer_image):
								echo wp_get_attachment_image($offer_image, 'full', false, array('class' => $image_class));
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