<?php
get_header();
do_action( 'before_main_content' );
?>
<section class="text-brown-shade-4 flex flex-col items-center h-full">
	<div class="theme-container">
		<div class="notfound-content flex flex-col items-center w-full text-center">
			<h1 class="font-utopia font-light text-brown-shade-4 text-8xl xl:text-[250px] mb-6 xl:mb-0"><?php esc_html_e( '404', 'baeren' ) ?></h1>
			<svg class="page-header--separator__light mb-8" width="254" height="14" viewBox="0 0 254 14" fill="none" xmlns="http://www.w3.org/2000/svg" >
				<rect x="125.75" y="1" width="8" height="8" transform="rotate(45 125.75 1)" stroke="#8E827B"/>
				<path d="M0.75 7H101.25" stroke="#8E827B"/>
				<path d="M152.75 7H253.25" stroke="#8E827B"/>
			</svg>
			<div class="max-w-[600px] mx-auto flex flex-col justify-center items-center gap-y-8">
				<h2 class="font-poppins text-lg lx:text-4xl text-brown-shade-4 tracking-widest uppercase"><?php esc_html_e( 'Die von Ihnen gesuchte Seite existiert nicht oder wurde verschoben.', 'baeren' ); ?></h2>
				<p class="font-poppins text-base xl:text-xl text-brown-shade-4"><?php esc_html_e( 'Sieht aus, als würdest du in die falsche Richtung treiben. Keine Sorge, wir helfen dir, wieder auf Kurs zu kommen.', 'baeren' ); ?></p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--secondary !self-center">
					<?php esc_html_e( 'zurück zur Startseite', 'baeren' ); ?>
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
						<path d="M0.828125 1L7.82812 5L0.828125 9M10.8281 1L17.8281 5L10.8281 9" stroke="#34302D"/>
					</svg>
				</a>
			</div>

		</div>
	</div>
</section>
<?php
do_action( 'after_main_content' );
get_footer();
