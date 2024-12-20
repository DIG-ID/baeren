<section class="section-room-teaser bg-brown-shade-1 py-36 relative overflow-hidden">
	<div class="theme-container">
		<div class="section-room-teaser--wrapper">
			<div class="room-content bg-white z-10 px-12 py-16 flex flex-col justify-between h-2/3">
				<div>
					<h2 class="text-subtitle text-brown-shade-3 mb-6"><?php the_field( 'rooms_title' ); ?></h2>
					<p class="text-body !text-xl !leading-relaxed text-brown-shade-4"><?php the_field( 'rooms_description' ); ?></p>
				</div>
				<?php
				$room_btn = get_field( 'rooms_link' );
				if ( $room_btn ) :
					$link_url    = $room_btn['url'];
					$link_title  = $room_btn['title'];
					$link_target = $room_btn['target'] ? $room_btn['target'] : '_self';
					?>
					<a class="btn-custom btn-custom--double-arrows self-start" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
			<?php
			$room_image = get_field( 'rooms_image' );
			if ( $room_image ) :
				echo '<div class="room-image">' . wp_get_attachment_image( $room_image, 'full', false, array( 'class' => 'object-cover w-full max-h-[665px] h-auto' ) ) . '</div>';
			else :
				echo '<div class="room-image"><img src="https://picsum.photos/1100/700" alt="" class="object-cover w-full max-h-[665px] h-auto"></div>';
			endif;
			?>
		</div>
	</div>
	<span class="room-text-overlay inline-block absolute bottom-20 right-0 translate-x-1/2 font-utopia text-9xl text-[#D3DADD] uppercase tracking-[10.24px] mix-blend-luminosity z-10 select-none"><?php esc_html_e( 'Hotelzimmer', 'baeren' ); ?></span>
</section>
<div class="separator">
	<span class="separator__diamond separator__diamond--brown-shade-2"></span>
</div>