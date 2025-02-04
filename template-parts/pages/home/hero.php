<section class="section-hero bg-brown-shade-4">
	<div class="section-hero--wrapper">
		<?php
			$hero_image = get_field( 'hero_section_hero_image' );
			if ( $hero_image ) :
				echo wp_get_attachment_image( $hero_image, 'full', false, array( 'class' => 'section-hero--img w-full h-[100svh] object-cover' ) );
			endif;
			$hero_image_sm = get_field( 'hero_section_hero_image_mobile' );
			if ( $hero_image_sm ) :
				echo wp_get_attachment_image( $hero_image_sm, 'full', false, array( 'class' => 'section-hero--img w-full h-[100svh] block lg:hidden max-h-none md:max-h-[75vh] lg:max-h-none' ) );
			endif;
		?>
		<div class="section-hero--overlay w-full h-full"></div>
		<div class="section-hero--content text-brown-shade-1 flex flex-col justify-center items-center mt-[72px] relative z-10">

				<div class="flex flex-col items-center justify-center">
					<p class="section-hero--title font-utopia font-normal text-base xl:text-2xl tracking-[0.24rem] invisible mb-4 lg:mb-8"><?php the_field( 'hero_section_before_title' ); ?></p>
					<h1 class="section-hero--title font-poppins font-extralight text-5xl xl:text-8xl tracking-normal uppercase invisible text-center"><?php the_field( 'hero_section_title' ); ?></h1>
					<p class="section-hero--title font-utopia font-normal text-base xl:text-2xl tracking-[0.24rem] invisible mt-2 lg:mt-4"><?php the_field( 'hero_section_after_title' ); ?></p>
				</div>

				<div class="w-full text-center pt-7">
				<?php
				$booking_url = get_field( 'booking_url', 'options' );
				if ( $booking_url ) :
					?><a href="<?php echo esc_url( $booking_url ); ?>" target="_blank" class="btn btn--transparent mt-7 inline-block lg:hidden">
						<?php esc_html_e( 'Jetzt Buchen', 'baeren' ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
						<path d="M0.828125 1L7.82812 5L0.828125 9M10.8281 1L17.8281 5L10.8281 9" stroke="#34302D"/>
					</svg>
					</a><?php
				endif;
				?>
			</div>
		</div>
	</div>

</section>
<div class="separator">
	<span class="separator__diamond separator__diamond--brown-shade-3"></span>
</div>

