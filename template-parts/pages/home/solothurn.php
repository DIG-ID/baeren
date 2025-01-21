<section class="section-solothurn-teaser bg-white relative overflow-hidden">
	<div class="solothurn-teaser-wrapper grid grid-cols-12">
		<div class="solothurn-teaser-content max-h-[680px] h-[680px] col-span-5 flex flex-col pl-20 py-32 pr-10 justify-between">
			<div>
				<p class="text-subtitle text-brown-shade-3 mb-7"><?php the_field( 'solothurn_subtitle' ); ?></p>
				<h2 class="text-title-h2 text-brown-shade-4 mb-7"><?php the_field( 'solothurn_title' ); ?></h2>
				<p class="text-body text-brown-shade-4"><?php the_field( 'solothurn_description' ); ?></p>
			</div>
			<?php
			$blink = get_field( 'solothurn_button' );
			if ( $blink ) :
				$link_url    = $blink['url'];
				$link_title  = $blink['title'];
				$link_target = $blink['target'] ? $link['target'] : '_self';
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
		<div class="solothurn-teaser-image col-span-7">
			<?php
			$image = get_field( 'solothurn_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover  max-h-[680px]' ) );
			else :
				echo '<img src="https://picsum.photos/1200/800?random=1" alt="" class="w-full h-full max-h-[680px] object-cover">';
			endif;
			?>
		</div>
	</div>
</section>
