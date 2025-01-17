<div class="separator">
	<span class="separator__diamond separator__diamond--brown-shade-3"></span>
</div>
<section class="section-team py-20 lg:py-40">
	<div class="theme-container">
		<h2 class="text-title-h2 text-center text-brown-shade-4 mb-6 fade-in uppercase"><?php the_field('team_title'); ?></h2>
		<div class="mt-6 mb-12 mx-auto">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dark-separator.svg"
				alt="decorative separator">
		</div>
		<div class="w-full relative">
			<span class="diamond diamond--brown absolute left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
			<?php
			$img = get_field('team_image');
			if ($img):
				echo wp_get_attachment_image($img, 'full', false, array('class' => 'w-full object-fit max-h-[704px] lg:h-full'));
			else:
				?>
				<span class="flex items-center justify-center w-full h-full bg-brown-shade-5 min-h-[704px]">
				</span>
				<?php
			endif;
			?>
			<span class="diamond diamond--brown absolute left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
		</div>
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-10 lg:col-start-2 px-8 py-16 lg:pt-24 xl:px-28 fade-in">
				<?php
				if (have_rows('team_list')):
					$counter = 0;
					?>
					<div class="flex justify-center flex-wrap gap-7">
						<?php
						while (have_rows('team_list')):
							the_row();
							$counter++;
							?>
							<div class="flex flex-col items-center mb-7">
								<h3 class="text-title-h3 mb-0"><?php the_sub_field('name'); ?></h3>
								<p class="text-body mb-8 lg:mb-20 last:mb-0">
									<?php the_sub_field('position'); ?>
								</p>
							</div>
							<?php
						endwhile;
						?>

					</div>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>