<section class="section-cyclists-blocks bg-brown-shade-1 -mt-10 pb-14 lg:pb-0 pt-16 lg:pt-28 xl:pt-40">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			if (have_rows('extras')):
				while (have_rows('extras')):
					the_row();
					?>
					<div class="col-span-2 lg:col-span-12 flex flex-col justify-between lg:flex-row  mb-32 lg:mb-20 bg-white fade-in">
						<div class="flex flex-col justify-center lg:ml-28 px-8 pt-6 pb-14 lg:px-0 lg:py-0 order-2 lg:order-1">
							<h2 class="text-title-h3--serif text-brown-shade-4 mb-4 md:mb-6"><?php the_sub_field('title'); ?></h2>
							<p class="text-body text-brown-shade-4 lg:max-w-[433px]"><?php the_sub_field('description'); ?>
							</p>
							<?php
							$link = get_sub_field('link');
							if ($link):
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a href="<?php echo esc_url($link_url); ?>"
									class="btn btn--secondary mb-4 mt-6 lg:mb-0" target="<?php echo esc_attr( $link_target ); ?>">
									<h3 class="text-body text-brown-shade-4 hover:transform-scale">
										<?php echo esc_html($link_title); ?></h3>
									<svg class="" width="19" height="10" viewBox="0 0 19 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1L8 5L1 9M11 1L18 5L11 9" stroke="#34302D" />
									</svg>
								</a>
								<?php
							endif;
							?>
						</div>
						<div class="cyclists-extra-card-container order-1 lg:order-2">
							<?php
							$img = get_sub_field('image');
							if ($img):
								echo wp_get_attachment_image($img, 'full', false, array('class' => 'w-full object-cover min-h-[274px] lg:h-[300px] lg:w-[542px]'));
							else:
								?>
								<span class="flex items-center justify-center bg-gray-shade-1 w-full lg:w-[542px] h-[300px]">
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
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>