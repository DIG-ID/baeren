<section class="section-zimmer-teaser bg-white pt-36 pb-20 lg:pb-40">
	<div class="theme-container">
		<ul class="zimmer__list">
		<?php
		if( have_rows('zimmer') ):
			while( have_rows('zimmer') ) : the_row(); 
		?>
			<li class="zimmer__item">
    			<div class="zimmer__item--body section-container">
        			<div class="zimmer__item--wrapper">
            			<h2 class="zimmer__item--title section-title">
                			<?php the_sub_field( 'title' ); ?>
            			</h2>
            			<div class="zimmer__item--info">
                			<ul>
								<li>
									2 rooms
								</li>
								<li>
									THE HOUSE AREA: 80 SQ.M
								</li>
								<li>
									200$ / PER NIGHT
								</li>
							</ul>
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
		
					<div class="zimmer__item--wrapper">
						<h2 class="zimmer__item--title section-title">
							<?php the_sub_field( 'title' ); ?>
						</h2>
						<div class="zimmer__item--info">
							<ul>
								<li>
									2 rooms
								</li>
								<li>
									THE HOUSE AREA: 80 SQ.M
								</li>
								<li>
									200$ / PER NIGHT
								</li>
							</ul>
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
