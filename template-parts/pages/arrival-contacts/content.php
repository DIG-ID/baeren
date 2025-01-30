<div class="separator">
	<span class="separator__diamond separator__diamond--brown-shade-3"></span>
</div>
<section class="section-arrival-contact-content pt-28 lg:pb-16 -mt-6">
	<div class="theme-container lg:!px-48">
		<div class="relative text-title-h3 text-center mx-auto border-b border-brown-shade-3 max-w-[15.8rem] pb-7">
			<h3 class="uppercase"><?php the_field('title') ?></h3>
			<div class="flex justify-center items-center z-10 bg-brown-shade-1 absolute bottom-0 right-1/2 w-12 h-6 translate-y-1/2 translate-x-1/2">
				<span
					class="diamond diamond--light-brown !w-2 !h-2"></span>
			</div>
		</div>
		<div class="grid grid-cols-3 gap-6 pt-12">
			<div class="arrival-by-auto grid grid-cols-3 col-span-3 gap-6 mb-6 lg:mb-0 overflow-hidden fade-in">
				<div class="col-span-6 lg:col-span-1">
					<?php
					$bycar = get_field('arrival_by_auto_image');
					if ($bycar):
						echo wp_get_attachment_image($bycar, 'full', false, array('class' => 'w-full object-fit'));
					endif;
					?>
				</div>
				<div class="col-span-6 lg:col-span-2 lg:px-10">
					<h2 class="text-title-h3 text-brown-shade-4 mb-2 uppercase">
						<?php the_field('arrival_by_auto_title'); ?>
					</h2>
					<p class="text-body text-brown-shade-4"><?php the_field('arrival_by_auto_description'); ?></p>
				</div>
			</div>

			<div class="arrival-by-zug col-span-3 lg:col-span-1 mb-6 lg:mb-0 overflow-hidden fade-in">
				<?php
				$byzug = get_field('arrival_by_zug_image');
				if ($byzug):
					echo wp_get_attachment_image($byzug, 'full', false, array('class' => 'w-full object-fit mb-6 lg:mb-0'));
				endif;
				?>
				<div class="lg:py-10">
					<h2 class="text-title-h3 text-brown-shade-4 mb-2 uppercase">
						<?php the_field('arrival_by_zug_title'); ?>
					</h2>
					<p class="text-body text-brown-shade-4"><?php the_field('arrival_by_zug_description'); ?></p>
				</div>
			</div>

			<div class="arrival-by-bus col-span-3 lg:col-span-1 mb-6 lg:mb-0 overflow-hidden fade-in">
				<?php
				$bybus = get_field('arrival_by_bus_image');
				if ($bybus):
					echo wp_get_attachment_image($bybus, 'full', false, array('class' => 'w-full object-fit mb-6 lg:mb-0'));
				endif;
				?>
				<div class="lg:py-10">
					<h2 class="text-title-h3 text-brown-shade-4 mb-2 uppercase">
						<?php the_field('arrival_by_bus_title'); ?>
					</h2>
					<p class="text-body text-brown-shade-4"><?php the_field('arrival_by_bus_description'); ?></p>
				</div>
			</div>

			<div class="arrival-by-velo col-span-3 lg:col-span-1 mb-6 lg:mb-0 overflow-hidden fade-in">
				<?php
				$bybus = get_field('arrival_by_velo_image');
				if ($bybus):
					echo wp_get_attachment_image($bybus, 'full', false, array('class' => 'w-full object-fit mb-6 lg:mb-0'));
				endif;
				?>
				<div class="lg:py-10">
					<h2 class="text-title-h3 text-brown-shade-4 mb-2 uppercase">
						<?php the_field('arrival_by_velo_title'); ?>
					</h2>
					<p class="text-body text-brown-shade-4"><?php the_field('arrival_by_velo_description'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="map w-full overflow-hidden min-h-[35rem] fade-in mt-32">
		<?php
		$location = get_field('map');
		if ($location):
			?>
			<div class="acf-map w-full h-full !static" data-zoom="14">
				<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
					data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
			</div>
			<?php
		endif;
		?>
	</div>

	<div class="flex flex-col items-center gap-14 lg:flex-row bg-white overflow-hidden py-16 lg:py-40 px-4 lg:px-44">
		<div
			class="address my-auto border border-brown-shade-3 px-10 lg:px-28 pt-9 lg:pt-14 pb-14 lg:pb-28 text-xl invisible fade-in--noscroll">
			<img class="mb-8 lg:mb-16" src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo.png')); ?>"
				alt="logo">
			<p class="text-body--serif text-brown-shade-4 mb-4 lg:mb-8"><?php the_field('address_address'); ?></p>
			<?php
			$phone = get_field('address_phone');
			if ($phone):
				?>
				<p class="text-body--serif text-brown-shade-4 mb-4 lg:mb-8">
					<?php esc_html_e('Telefon:', 'baeren'); ?> <a class="inline-block"
						href="tel:<?php echo esc_url($phone); ?>"><?php echo esc_html($phone); ?></a>
				</p>
				<?php
			endif;
			$email = get_field('address_email');
			if ($email):
				?>
				<p class="text-body--serif text-brown-shade-4">
					<?php esc_html_e('Email:', 'baeren'); ?> <a class="inline-block"
						href="mailto:<?php echo esc_url($email); ?>"><?php echo esc_html($email); ?></a>
				</p>
				<?php
			endif;
			?>
			<div class="absolute flex items-center justify-center z-10 w-12 h-12 bg-white bottom-0 right-1/2 translate-x-1/2 translate-y-1/2 lg:right-0 lg:bottom-1/2 ">
				<span
					class="diamond diamond--white !w-4 !h-4">
				</span>
			</div>
		</div>
		<div class="contact-form invisible fade-in--noscroll pt-10 lg:pt-14 mx-auto">
			<h2 class="text-title-h3 text-2xl text-brown-shade-4 mb-8"><?php the_field('contact_form_title'); ?></h2>
			<?php
			$form_sc = get_field('contact_form_form');
			if ($form_sc):
				echo do_shortcode($form_sc);
			endif;
			?>
		</div>
	</div>

</section>