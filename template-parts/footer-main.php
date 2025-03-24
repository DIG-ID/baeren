<footer class="footer-main bg-blue-shade-1">
	<section class="grid grid-cols-2 lg:grid-cols-6 gap-x-6 lg:gap-x-8 lg:max-w-2xl mx-auto pt-20 pb-24 lg:py-36 px-6">
		<div class="col-span-2 lg:col-span-6 flex justify-center items-center mb-10 lg:mb-14">
			<div class="site-branding">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><?php do_action( 'footer_theme_logo' ); ?></a>
			</div>
		</div>
		<div class="col-span-2 lg:col-span-2 flex lg:block flex-col justify-center items-center address mb-6">
			<p class="text-body text-brown-shade-4 text-center lg:text-left"><?php the_field( 'footer_address', 'options' ); ?></p>
		</div>
		<div class="col-span-2 lg:col-span-2 flex lg:block flex-col items-center contact mb-6">
			<?php
			$phone = get_field( 'footer_phone', 'options' );
			if ( $phone ) :
				?> <p class="text-body text-brown-shade-4"><a href="tel:<?php echo $phone; ?>"><?php esc_html_e( 'Phone', 'baeren' );?> <?php echo $phone; ?></a></p><?php
			endif;
			$email = get_field( 'footer_email', 'options' );
			if ( $email ) :
				?> <p class="text-body text-brown-shade-4"><a href="mailto:<?php echo antispambot( $email ); ?>"><?php echo antispambot( $email ); ?></a></p><?php
			endif;
			?>
		</div>
		<div class="col-span-2 lg:col-span-2 flex justify-center items-start">
			 <!-- TrustYou Widget -->
			<iframe src="https://api.trustyou.com/hotels/9587b006-19a2-4b2a-8fb0-709d76a6ffa1/trust_score.html?key=b323b050-5554-4fcf-b169-0a019fb9fe5d&size=m&scale=100"
			scrolling="no"
			height="56"
			width="205"
			style="border:none"></iframe>

			<!-- /TrustYou Widget -->
		</div>
		<!--<div class="col-span-2 lg:col-span-1 text-center mt-10 lg:mt-0 flex justify-center lg:block" style="mix-blend-mode: multiply;">
			<?php
			$partner_logo = get_field( 'footer_partner_logo', 'options' );
			if ( $partner_logo ) :
				echo wp_get_attachment_image( $partner_logo, 'full', false, array( 'class' => 'max-w-full object-cover' ) );
			endif;
			?>
		</div>-->
	</section>
	<section class="footer-bunchen bg-blue-shade-2 text-brown-shade-4 pt-20 pb-16 lg:py-32">
		<div class="theme-container">
			<div class="theme-grid">
				<div class="col-span-2 md:col-span-6 lg:col-span-12 xl:col-span-6 xl:col-start-4 flex flex-col justify-center items-center gap-x-6">
					<h4 class="text-title text-brown-shade-4 mb-8 text-center"><?php the_field( 'footer_call_to_action_title', 'options' ); ?></h4>
					<div class="flex flex-col md:flex-row justify-center md:justify-between items-center md:max-w-[589px] gap-x-6">
						<p class="text-body text-brown-shade-4 mb-8 md:mb-0 text-center md:text-left w-3/5 lg:w-full"><?php the_field( 'footer_call_to_action_description', 'options' ); ?></p>
						<?php
						$booking_url = get_field( 'booking_url', 'options' );
						if ( $booking_url ) :
							?><a href="<?php echo esc_url( $booking_url ); ?>" target="_blank" class="btn btn--primary !self-center">
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
		</div>
	</section>
	<section class="footer-copyright bg-blue-shade-2 z-10">
		<div class="flex flex-col md:flex-row justify-center md:justify-between items-center py-4 max-w-7xl mx-auto px-6">
			<p class="text-body text-center text-brown-shade-4 mb-0 order-2 md:order-1">
			<?php
				$y = date( 'Y' );
				printf(
					esc_html__( 'Urheberrecht &copy; %d Hotel Bären', 'baeren' ),
					esc_html( $y )
				);
				?>
			</p>
			<a href="#header-main" id="back-to-top" class="text-body text-brown-shade-4 flex mb-4 md:mb-0 order-1 md:order-2">
				<?php esc_html_e( 'Zurück nach oben', 'baeren' ); ?>
				<svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
					<path d="M5.5 1L1 6M5.5 1L10 6M5.5 1V13.5" stroke="#34302D"/>
				</svg>
			</a>
		</div>
	</section>
</footer>
