<section class="section-intro text-brown-shade-4 w-full h-full min-h-svh flex justify-center items-center">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-6 flex flex-col justify-between">
				<div>
					<p class="text-subtitle text-brown-shade-3 mb-6"><?php the_field( 'intro_subtitle' ); ?></p>
					<h2 class="text-title-h2 mb-4"><?php the_field( 'intro_title' ); ?></h2>
					<p class="text-body"><?php the_field( 'intro_description' ); ?></p>
				</div>
				<?php
				if ( have_rows( 'intro_highlights' ) ) :
					echo '<ul class="highlights-items">';
					while ( have_rows( 'intro_highlights' ) ) :
						the_row();
						echo '<li>' . get_sub_field( 'title' ) . ' </li>';
					endwhile;
					echo '</ul>';
				endif;
				?>
			</div>
			<div class="col-span-6 flex justify-end">
				<?php
				if ( have_rows( 'intro_highlights' ) ) :
					echo '<div class="images-wrapper relative w-[578px] h-[578px]">';
					while ( have_rows( 'intro_highlights ' ) ) :
						the_row();
						?>
						<figure class="intro-image intro-image-1 bg-brown-shade-2 w-[578px] h-[578px] rounded-full flex justify-center items-center overflow-hidden absolute left-0 top-0 z-40">
							<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'max-w-full w-full h-full object-cover' ) ); ?>
						</figure>
						<?php
					endwhile;
					echo '</div>';
				else :
					?>
					<div class="images-wrapper relative w-[578px] h-[578px]">
						<figure class="intro-image intro-image-1 bg-brown-shade-2 w-[578px] h-[578px] rounded-full flex justify-center items-center overflow-hidden absolute left-0 top-0 z-40">
							<img src="https://picsum.photos/700/700?random=1" alt="img 1" class="max-w-full w-full h-full object-cover">
						</figure>
						<figure class="intro-image intro-image-2 bg-brown-shade-2 w-[578px] h-[578px] rounded-full flex justify-center items-center overflow-hidden absolute left-0 translate-x-1/2 top-0 z-30">
							<img src="https://picsum.photos/700/700?random=2" alt="img 2" class="max-w-full w-full h-full object-cover">
						</figure>
						<figure class="intro-image intro-image-3 bg-brown-shade-2 w-[578px] h-[578px] rounded-full flex justify-center items-center overflow-hidden absolute left-0 translate-x-full top-0 z-20">
							<img src="https://picsum.photos/700/700?random=3" alt="img 3" class="max-w-full w-full h-full object-cover">
						</figure>
						<figure class="intro-image intro-image-4 bg-brown-shade-2 w-[578px] h-[578px] rounded-full flex justify-center items-center overflow-hidden absolute left-0 translate-x-[150%] top-0 z-10">
							<img src="https://picsum.photos/700/700?random=4" alt="img 4" class="max-w-full w-full h-full object-cover">
						</figure>
						<figure class="intro-image intro-image-5 bg-brown-shade-2 w-[578px] h-[578px] rounded-full flex justify-center items-center overflow-hidden absolute translate-x-[200%] left-0 top-0 z-0">
							<img src="https://picsum.photos/700/700?random=5" alt="img 5" class="max-w-full w-full h-full object-cover">
						</figure>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<div class="separator">
	<span class="separator__diamond separator__diamond--brown-shade-2"></span>
</div>