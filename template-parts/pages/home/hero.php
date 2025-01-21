<section class="section-hero bg-brown-shade-4">
	<div class="section-hero--wrapper">
		<?php
			$hero_image = get_field( 'hero_section_hero_image' );
			if ( $hero_image ) :
				echo wp_get_attachment_image( $hero_image, 'full', false, array( 'class' => 'section-hero--img w-full object-cover' ) );
			endif;
			$hero_image_sm = get_field( 'hero_section_hero_image_mobile' );
			if ( $hero_image_sm ) :
				echo wp_get_attachment_image( $hero_image_sm, 'full', false, array( 'class' => 'section-hero--img w-full block lg:hidden max-h-none md:max-h-[75vh] lg:max-h-none' ) );
			endif;
		?>
		<div class="section-hero--overlay w-full h-full"></div>
		<div class="section-hero--content text-brown-shade-1 flex flex-col justify-center items-center">

				<div class="flex flex-col items-center justify-center">
					<p class="section-hero--title font-utopia font-normal text-base xl:text-2xl tracking-[0.24rem] invisible mb-8"><?php the_field( 'hero_section_before_title' ); ?></p>
					<h1 class="section-hero--title font-poppins font-light text-5xl xl:text-8xl tracking-[0.48rem] uppercase invisible"><?php the_field( 'hero_section_title' ); ?></h1>
					<p class="section-hero--title font-utopia font-normal text-base xl:text-2xl tracking-[0.24rem] invisible mt-4"><?php the_field( 'hero_section_after_title' ); ?></p>
				</div>

				<div class="w-full text-center pt-7">
				<?php
				$booking_url = get_field( 'booking_url', 'options' );
				if ( $booking_url ) :
					?><a href="<?php echo esc_url( $booking_url ); ?>" target="_blank" class="btn btn--header mt-7 inline-block lg:hidden"><?php esc_html_e( 'Jetzt Buchen', 'baeren' ); ?></a><?php
				endif;
				?>
			</div>
		</div>
	</div>

</section>
<div class="separator">
	<span class="separator__diamond separator__diamond--brown-shade-3"></span>
</div>

