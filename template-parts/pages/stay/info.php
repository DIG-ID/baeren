<section class="section-zimmer-teaser bg-white pt-32 pb-28">
	<div class="theme-container theme-grid">
        <div class="col-span-2 md:col-span-6 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-4 text-center">
            <h2 class="text-title-h2 uppercase invisible fade-in--noscroll"><?php the_field( 'info_title' ); ?></h2>
            <p class="text-description mt-[68px] mb-[72px] invisible fade-in--noscroll"><?php the_field( 'info_text' ); ?></p>
            <?php
            $ilink = get_field( 'info_button' );
            if ( $ilink ) :
                $link_url    = $ilink['url'];
                $link_title  = $ilink['title'];
                $link_target = $ilink['target'] ? $ilink['target'] : '_self';
                ?>
                <a class="btn__moreinfo font-poppins font-light text-[16px] leading-[22.4px] tracking-[1.28px] invisible fade-in--noscroll" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>