<section class="section-solothurn-content pb-0 flex flex-col gap-28 mb-24 -mt-6 ">
	<?php
	if (have_rows('child_pages')):
		$i = 1;
		while (have_rows('child_pages')):
			the_row();
			$fade_class = '';
			if (0 === $i):
				$fade_class = 'invisible fade-in--noscroll';
			else:
				$fade_class = 'invisible fade-in';
			endif;
			?>

			<?php if ($i % 2 !== 0): ?>
				<div class="relative bg-brown-shade-1 py-10">
				<span class="diamond diamond--brown absolute left-1/2 bottom-[-0.75rem] z-10"></span>
				<?php endif; ?>

				<div class="theme-container !px-0 mx-auto">
					<div class="block lg:hidden min-h-60 -mt-1"></div>
					<div class="theme-grid"></div>
					<div
						class="relative card-solothurn grid grid-cols-2 lg:grid-cols-12 col-span-2 lg:col-span-12 gap-x-6 pb-14 lg:pb-0 <?php echo esc_attr($fade_class); ?>">
						<div
							class="card-solothurn-content col-span-2 lg:col-span-5 py-7 my-auto lg:pb-14 px-9 lg:px-28 self-end order-2 <?php echo ($i === 1) ? 'lg:order-2' : 'lg:order-1'; ?>">

							<h2 class="text-title-h2 mb-4 lg:mb-7"><?php the_sub_field('title'); ?></h2>
							<h3 class="text-title-h3 mb-4 lg:mb-7"><?php the_sub_field('subtitle'); ?></h3>
							<div class="text-body mb-12"><?php the_sub_field('description'); ?></div>

							<?php
							$ilink = get_sub_field('link');
							if ($ilink):
								$link_url = $ilink['url'];
								$link_title = $ilink['title'];
								$link_target = $ilink['target'] ? $ilink['target'] : '_self';
								?>
								<a class="btn-custom--double-arrows font-light w-[180px]" href="<?php echo esc_url($link_url); ?>"
									target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
								<?php
							endif;
							if ($i % 2 === 0): ?>
								<div class="diamond-container ">
									<span class="diamond diamond--white w-4 h-4 absolute top-1/2 right-1/2 -translate-y-1/2 translate-x-1/2"></span>
								</div>
							<?php endif; ?>
						</div>

						<div
							class="card-perfect-for-image col-start-1 col-span-2 lg:col-span-7 relative order-1 <?php echo ($i === 1) ? 'lg:order-1' : 'lg:order-2'; ?>">
							<?php
							$offer_image = get_sub_field('image');
							if ($offer_image):
								echo wp_get_attachment_image($offer_image, 'full', false, array('class' => 'min-h-[217px] lg:min-h-[432px] h-full w-full'));
							endif;
							?>
						</div>
					</div>
				</div>

				<?php if ($i === 1): ?>
				</div>
			<?php endif; ?>


			<?php
			$i++;
		endwhile;
	endif;
	?>

</section>
<section class="section-page-teasers py-8 lg:py-32 xl:pt-36 bg-brown-shade-1">
	<div class="theme-container">
		<div class="theme-grid">
			<?php get_template_part('template-parts/components/teaser-default'); ?>
		</div>
	</div>
</section>