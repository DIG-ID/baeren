<section class="section-history bg-brown-shade-1 relative">
	<span class="diamond diamond--brown absolute left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
	<div class="history-container flex h-full">
		<div
			class="history-panel flex flex-col lg:flex-row items-center gap-12 lg:gap-36 p-12 lg:px-44 w-full ">
			<div class="flex flex-col gap-6 lg:gap-24 ">
				<h2 class="text-title-h2 text-center lg:text-left mb-8 fade-in"><?php the_field('history_title'); ?>
				</h2>
				<p class="text-description text-center lg:text-left max-w-[401px] fade-in">
					<?php the_field('history_description_1'); ?>
				</p>
			</div>
			<div class="w-full lg:w-[564px] lg:h-[409px] fade-in">
				<?php
				$img = get_field('history_image_1');
				if ($img):
					echo wp_get_attachment_image($img, 'full', false, array('class' => 'w-full object-fit max-h-[274px] lg:h-full'));
				else:
					?>
					<span class="flex items-center justify-center w-full h-full bg-gray-shade-1 min-h-[315px]">
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

		<div
			class="history-panel flex flex-col lg:flex-row items-center p-12 lg:p-44 gap-4 lg:gap-32">
			<div class="w-full flex flex-col items-center justify-center gap-24">
				<p class="text-description text-center lg:text-left max-w-[401px] fade-in">
					<?php the_field('history_description_2'); ?>
				</p>
				<div class="w-full lg:w-[564px] lg:h-[315px]">
					<?php
					$img = get_field('history_image_2');
					if ($img):
						echo wp_get_attachment_image($img, 'full', false, array('class' => 'w-full object-fit h-full'));
					else:
						?>
						<span class="flex items-center justify-center w-full bg-gray-shade-1 h-full min-h-[315px]">
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
			<div class="w-full lg:self-center lg:w-[418px] lg:h-[564px]">
				<?php
				$img = get_field('history_image_3');
				if ($img):
					echo wp_get_attachment_image($img, 'full', false, array('class' => 'w-full object-fit h-full'));
				else:
					?>
					<span class="flex items-center justify-center w-full bg-gray-shade-1 h-full lg:w-[300px] min-h-[315px]">
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

		<div
			class="history-panel flex flex-col justify-center items-center gap-12 lg:gap-36 p-12 lg:p-44 w-full lg:min-w-[100vw]">
			<p class="lg:self-start self-center text-description text-center lg:text-left max-w-[401px] fade-in">
				<?php the_field('history_description_3'); ?>
			</p>
			<div class="w-full lg:ml-36 lg:w-[564px] lg:h-[409px]">
				<?php
				$img = get_field('history_image_4');
				if ($img):
					echo wp_get_attachment_image($img, 'full', false, array('class' => 'w-full h-full object-fit'));
				else:
					?>
					<span class="flex items-center justify-center w-full bg-gray-shade-1 h-full min-h-[409px] ">
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
	</div>
</section>