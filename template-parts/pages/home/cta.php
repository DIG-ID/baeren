<section class="section-cta bg-brown-shade-2 py-16 relative overflow-hidden">
	<div class="theme-container">
		<div class="flex justify-between">
			<div class="text max-w-96">
				<h2 class="font-poppins font-normal text-2xl tracking-wider text-brown-shade-4"><?php the_field( 'call_to_action_text' ); ?></h2>
			</div>
			<?php
			$blink = get_field( 'call_to_action_button' );
			if ( $blink ) :
				$link_url    = $blink['url'];
				$link_title  = $blink['title'];
				$link_target = $blink['target'] ? $link['target'] : '_self';
				?>
				<a class="btn btn--primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
					<?php echo esc_html( $link_title ); ?>
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
						<path d="M0.828125 1L7.82812 5L0.828125 9M10.8281 1L17.8281 5L10.8281 9" stroke="#34302D"/>
					</svg>
				</a>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
