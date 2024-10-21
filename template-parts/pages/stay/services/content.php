<section class="section-services-content bg-brown-shade-2 py-8 lg:py-16">
	<div class="theme-container">
		<div class="theme-grid invisible fade-in--noscroll">
			<?php
			if ( have_rows( 'services' ) ) :
				while ( have_rows( 'services' ) ) :
					the_row();
					?>
						<div class="card-service col-span-2 lg:col-span-6 bg-white py-12 lg:py-20 px-9 lg:px-28 rounded-[20px] mb-6">
							<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_sub_field( 'title' ); ?></h2>
							<p class="text-body"><?php the_sub_field( 'description' ); ?></p>
						</div>
					<?php
				endwhile;
			endif;
			$info = get_field( 'info' );
			if ( $info ) :
				?>
				<div class="card-service col-span-2 lg:col-span-6 bg-white py-12 lg:py-20 px-9 lg:px-28 rounded-[20px] mb-6 self-start">
					<div class="flex flex-col lg:flex-row">
						<div class="mb-2 lg:mb-0 lg:mr-3">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<path d="M9 15H11V9H9V15ZM10 7C10.2833 7 10.521 6.904 10.713 6.712C10.905 6.52 11.0007 6.28267 11 6C11 5.71667 10.904 5.47933 10.712 5.288C10.52 5.09667 10.2827 5.00067 10 5C9.71667 5 9.47933 5.096 9.288 5.288C9.09667 5.48 9.00067 5.71733 9 6C9 6.28333 9.096 6.521 9.288 6.713C9.48 6.905 9.71733 7.00067 10 7ZM10 20C8.61667 20 7.31667 19.7373 6.1 19.212C4.88333 18.6867 3.825 17.9743 2.925 17.075C2.025 16.175 1.31267 15.1167 0.788 13.9C0.263333 12.6833 0.000666667 11.3833 0 10C0 8.61667 0.262667 7.31667 0.788 6.1C1.31333 4.88333 2.02567 3.825 2.925 2.925C3.825 2.025 4.88333 1.31267 6.1 0.788C7.31667 0.263333 8.61667 0.000666667 10 0C11.3833 0 12.6833 0.262667 13.9 0.788C15.1167 1.31333 16.175 2.02567 17.075 2.925C17.975 3.825 18.6877 4.88333 19.213 6.1C19.7383 7.31667 20.0007 8.61667 20 10C20 11.3833 19.7373 12.6833 19.212 13.9C18.6867 15.1167 17.9743 16.175 17.075 17.075C16.175 17.975 15.1167 18.6877 13.9 19.213C12.6833 19.7383 11.3833 20.0007 10 20ZM10 18C12.2333 18 14.125 17.225 15.675 15.675C17.225 14.125 18 12.2333 18 10C18 7.76667 17.225 5.875 15.675 4.325C14.125 2.775 12.2333 2 10 2C7.76667 2 5.875 2.775 4.325 4.325C2.775 5.875 2 7.76667 2 10C2 12.2333 2.775 14.125 4.325 15.675C5.875 17.225 7.76667 18 10 18Z" fill="#0E324A"/>
							</svg>
						</div>
						<p class="text-body"><?php the_field( 'info_description' ); ?></p>
					</div>
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</section>
