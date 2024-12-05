<section class="section-info py-28 flex justify-center items-center bg-white">
	<div class="max-w-2xl flex flex-col justify-around items-center text-center">
		<h2 class="font-sans text-4xl tracking-widest uppercase mb-16"><?php the_field( 'single_zimmer_information_title', 'options' ); ?></h2>
		<p class="font-sans text-xl tracking-wide mb-16"><?php the_field( 'single_zimmer_information_description', 'options' ); ?></p>
		<div class="info-buttons flex gap-x-10">
			<?php
			$mainlink = get_field( 'single_zimmer_information_button_main', 'options' );
			if ( $mainlink ) :
				$link_url    = $mainlink['url'];
				$link_title  = $mainlink['title'];
				$link_target = $mainlink['target'] ? $mainlink['target'] : '_self';
				?>
				<a class="font-sans text-base tracking-wide" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			$seclink = get_field( 'single_zimmer_information_button_secondary', 'options' );
			if ( $seclink ) :
				$link_url    = $seclink['url'];
				$link_title  = $seclink['title'];
				$link_target = $seclink['target'] ? $seclink['target'] : '_self';
				?>
				<a class="font-sans text-base tracking-wide" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			?>
		</div>

	</div>
</section>
