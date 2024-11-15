<section class="section-zimmer-teaser bg-white pt-36 pb-20 lg:pb-40">
	<div class="theme-container">
		<ul class="zimmer__list relative">
		<?php
		if( have_rows('zimmer') ):
			while( have_rows('zimmer') ) : the_row(); 
		?>
			<li class="zimmer__item">
    			<div class="zimmer__item--body section-container">
        			<div class="zimmer__item--wrapper py-12 px-11 theme-grid">
            			<div class="col-span-2 md:col-span-6 xl:col-span-8">
                            <h3 class="zimmer__item--title text-title-h3 uppercase">
								<?php the_sub_field( 'title' ); ?>
							</h3>
							<div class="zimmer__item--info !block text-body pt-3 pb-6">
								<ul>
									<?php do_action( 'stay_room_features' ); ?>
								</ul>
							</div>
							<div class="zimmer__item--description !block text-body pt-2 max-w-[530px]">
								<?php the_sub_field( 'description' ); ?>
							</div>
						</div>
						<div class="col-span-2 md:col-span-6 xl:col-span-4 flex justify-end">
							<?php
							$zlink = get_sub_field( 'button' );
							if ( $zlink ) :
								$link_url    = $zlink['url'];
								$link_title  = $zlink['title'];
								$link_target = $zlink['target'] ? $zlink['target'] : '_self';
								?>
								<a class="zimmer__item--btn font-poppins font-light text-[16px] leading-[22.4px] tracking-[1.28px]" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
					</div>
				</div>
				<div class="zimmer__item--body section-container _clone">
					<div class="zimmer__item--bg">
						<picture>
						<?php
						$zimmer_image = get_sub_field( 'background' );
						if ( $zimmer_image ) :
							echo wp_get_attachment_image( $zimmer_image, 'full', false, array( 'class' => 'w-full object-cover' ) );
						endif;
						?>
						</picture>
					</div>
		
					<div class="zimmer__item--wrapper py-12 px-11 theme-grid">
						<div class="col-span-2 md:col-span-6 xl:col-span-8">
							<h3 class="zimmer__item--title text-title-h3 uppercase">
								<?php the_sub_field( 'title' ); ?>
							</h3>
							<div class="zimmer__item--info !block text-body pt-3 pb-6">
								<ul>
									<?php do_action( 'stay_room_features' ); ?>
								</ul>
							</div>
							<div class="zimmer__item--description !block text-body pt-2 max-w-[530px]">
								<?php the_sub_field( 'description' ); ?>
							</div>
						</div>
						<div class="col-span-2 md:col-span-6 xl:col-span-4 flex justify-end">
							<?php
							$zlink = get_sub_field( 'button' );
							if ( $zlink ) :
								$link_url    = $zlink['url'];
								$link_title  = $zlink['title'];
								$link_target = $zlink['target'] ? $zlink['target'] : '_self';
								?>
								<a class="zimmer__item--btn font-poppins font-light text-[16px] leading-[22.4px] tracking-[1.28px]" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
					</div>
    			</div>
			</li>
		<?php
			endwhile;
		endif;
		?>
		</ul>
	</div>
</section>
