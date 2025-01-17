<section class="section-philosophie py-20 lg:py-32 bg-brown-shade-1 relative">
	<span class="diamond diamond--brown absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 h-full"></span>
	<div class="theme-container">
		<div class="flex flex-col items-center justify-center invisible fade-in--noscroll md:mx-32 lg:mx-64">
			<h2 class="text-title-h2 text-brown-shade-4"><?php the_field('philosophie_title'); ?></h2>
			<div class="mt-6 mb-12 mx-auto">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dark-separator.svg"
					alt="decorative separator">
			</div>
			<div class="flex flex-col lg:flex-row justify-center gap-8 text-center lg:text-left">
				<p class="text-body mb-16 max-w-[404px]"><?php the_field('philosophie_text_left'); ?></p>
				<p class="text-body mb-16"><?php the_field('philosophie_text_right'); ?></p>
			</div>
		</div>
	</div>
</section>