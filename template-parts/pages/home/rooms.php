<section class="section-room-teaser bg-brown-shade-1 pt-0 pb-20 lg:py-36 relative overflow-hidden">
	<div class="theme-container !px-0 lg:!px-6">
		<div class="section-room-teaser--wrapper">
			<div class="room-content bg-white z-20 px-12 py-12 lg:py-16 flex flex-col justify-between lg:h-2/3 -mt-8">
				<div>
					<h2 class="text-subtitle text-brown-shade-3 mb-4 lg:mb-6"><?php the_field( 'rooms_title' ); ?></h2>
					<p class="text-body !text-xl !leading-relaxed text-brown-shade-4 mb-4"><?php the_field( 'rooms_description' ); ?></p>
				</div>
				<?php
				$room_btn = get_field( 'rooms_link' );
				if ( $room_btn ) :
					$link_url    = $room_btn['url'];
					$link_title  = $room_btn['title'];
					$link_target = $room_btn['target'] ? $room_btn['target'] : '_self';
					?>
					<a class="btn btn--secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php echo esc_html( $link_title ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
							<path d="M0.828125 1L7.82812 5L0.828125 9M10.8281 1L17.8281 5L10.8281 9" stroke="#34302D"/>
						</svg>
					</a>
					<?php
				endif;
				?>
			</div>
			<?php
			$room_image = get_field( 'rooms_image' );
			if ( $room_image ) :
				echo '<div class="room-image">' . wp_get_attachment_image( $room_image, 'full', false, array( 'class' => 'object-cover w-full max-h-[665px] h-[400px] lg:h-auto' ) ) . '</div>';
			else :
				echo '<div class="room-image"><img src="https://picsum.photos/1100/700" alt="" class="object-cover w-full max-h-[665px] h-auto"></div>';
			endif;
			?>
		</div>
	</div>
	<span class="room-text-overlay inline-block absolute top-[40%] lg:top-[initial] lg:bottom-20 right-0 translate-x-1/2 font-utopia text-8xl lg:text-9xl text-[#D3DADD] uppercase tracking-[0.64rem] mix-blend-luminosity z-10 select-none"><?php esc_html_e( 'Hotelzimmer', 'baeren' ); ?></span>
</section>
<div class="separator">
	<span class="separator__diamond separator__diamond--brown-shade-2"></span>
</div>