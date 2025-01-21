<section class="section-what-to-see-content">
	<div class="theme-container">
		<div class="theme-grid pb-12">
			<?php
			$attractions = get_field('attractions');
			if ($attractions):
				?>
				<div
					class="col-span-2 lg:col-span-12 relative mb-6 lg:mb-20 invisible fade-in--noscroll mt-20 lg:-mt-28 h-[60vh]">
					<span class="diamond diamond--green !w-4 !h-4 absolute left-1/2 -translate-x-1/2 -translate-y-1/2 z-10"></span>
					<div class="bg-brown-shade-4 h-full overflow-hidden">
						<?php
						$attractions_image = get_field('attractions_hero_image');
						if ($attractions_image):
							echo wp_get_attachment_image($attractions_image, 'full', false, array('class' => 'w-full h-full opacity-20 object-cover'));
						endif;
						?>
					</div>
					<div class="absolute top-0 lg:top-0 left-0 bottom-0 right-0 flex justify-center items-center">
						<div
							class="text-white lg:w-[840px] flex flex-col justify-center items-center py-9 px-9 lg:py-20 lg:px-9">
							<h2 class="text-title-h2 !text-2xl text-center mb-6 lg:mb-9 lg:max-w-[645px]">
								<?php the_field('attractions_hero_title'); ?>
							</h2>
							<p class="text-body text-blu-shade-5 text-center lg:max-w-[410px]">
								<?php the_field('attractions_hero_description'); ?>
							</p>
						</div>
					</div>
					<span class="diamond diamond--brown absolute left-1/2 -translate-x-1/2 -translate-y-1/2 z-30"></span>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
<div class="section-what-do-see--attractions-list">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			if (have_rows('attractions_list')):
				while (have_rows('attractions_list')):
					the_row();
					?>
					<div class="col-span-2 lg:col-span-12 flex flex-col lg:flex-row  mb-6 lg:mb-20 bg-white fade-in ">
						<div class="attraction-img-container">
							<?php
							$img = get_sub_field('image');
							if ($img):
								echo wp_get_attachment_image($img, 'full', false, array('class' => 'w-full object-cover lg:w-[542px] h-[300px] '));
							else:
								?>
								<span class="flex items-center justify-center w-full bg-gray-shade-1 lg:w-[542px] h-[300px] ">
									<svg width="68" height="60" viewBox="0 0 68 60" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M34.7205 15.9319L44.2 0L68 40H47.3586C47.5177 38.9113 47.6 37.7983 47.6 36.6667C47.6 27.6452 42.3691 19.8142 34.7205 15.9319ZM34.7205 15.9319C31.4492 14.2715 27.7357 13.3333 23.8 13.3333C10.6624 13.3333 0 23.7867 0 36.6667C0 49.5467 10.6624 60 23.8 60C35.7833 60 45.7073 51.3029 47.3586 40H20.4L34.7205 15.9319Z"
											fill="#B3B3B3" />
									</svg>

								</span>
								<?php
							endif;
							?>
						</div>
						<div class="flex flex-col justify-center lg:ml-28 px-8 pt-6 pb-14 lg:px-0 lg:py-0">
							<h2 class="text-title-h3 text-brown-shade-4 mb-6"><?php the_sub_field('title'); ?></h2>
							<p class="text-body text-brown-shade-4 lg:max-w-[433px]"><?php the_sub_field('description'); ?>
							</p>
							<?php
							$link = get_sub_field('link');
							if ($link):
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="btn btn--external mt-6 w-full justify-between lg:justify-start"
									href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span
										class="whitespace-normal"><?php echo esc_html($link_title); ?></span></a>
								<?php
							endif;
							?>
						</div>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>