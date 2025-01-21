<div class="separator">
		<span class="separator__diamond separator__diamond--brown-shade-2"></span>
</div>
<section class="section-jobs-content p-16 lg:p-28">
	<?php
	if (have_rows('jobs')):
		$i = 0;
		while (have_rows('jobs')):
			the_row();
			?>
			<div class="theme-container">
				<div class="flex items-center flex-col gap-9 lg:flex-row lg:gap-28 justify-center invisible fade-in--noscroll">
					<div class="text-body text-center text-brown-shade-4 lg:text-left max-w-[36rem]"><?php the_sub_field('description'); ?></div>
					<?php
					$ilink = get_sub_field('link');
					if ($ilink):
						$link_url = $ilink['url'];
						$link_title = $ilink['title'];
						$link_target = $ilink['target'] ? $ilink['target'] : '_self';
						?>
						<span>
							<a class="btn btn--external" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
								<?php echo esc_html($link_title); ?>
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
									<path d="M0.828125 1L7.82812 5L0.828125 9M10.8281 1L17.8281 5L10.8281 9" stroke="#34302D"/>
								</svg>
							</a>
						</span>
					<?php endif; ?>
				</div>
			</div>

			<?php
		endwhile;
	endif;
	?>
</section>