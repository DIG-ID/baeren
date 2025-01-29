<section class="section-info py-32 lg:py-40 flex justify-center items-center px-6">
	<div class="max-w-2xl flex flex-col justify-around items-center text-center">
		<h2 class="text-title-h2 uppercase mb-4 lg:mb-16"><?php the_field( 'informations_title' ); ?></h2>
		<p class="text-description mb-16"><?php the_field( 'informations_description' ); ?></p>
		<div class="info-buttons flex gap-x-4 lg:gap-x-6">
			<?php
			$mainlink = get_field( 'informations_button_main' );
			if ( $mainlink ) :
				$link_url    = $mainlink['url'];
				$link_title  = $mainlink['title'];
				$link_target = $mainlink['target'] ? $mainlink['target'] : '_self';
				?>
				<a class="btn btn--primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
					<?php echo esc_html( $link_title ); ?>
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
						<path d="M0.828125 1L7.82812 5L0.828125 9M10.8281 1L17.8281 5L10.8281 9" stroke="#34302D"/>
					</svg>
					</a>
				<?php
			endif;
			$seclink = get_field( 'informations_button_secondary' );
			if ( $seclink ) :
				$link_url    = $seclink['url'];
				$link_title  = $seclink['title'];
				$link_target = $seclink['target'] ? $seclink['target'] : '_self';
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
	</div>
</section>
