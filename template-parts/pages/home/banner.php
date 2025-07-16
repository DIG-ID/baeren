<?php if (get_field('banner_show_section')): ?>
<section class="section-cta bg-[#63584F] h-[500px] md:h-[262px] w-full relative overflow-hidden">
    <div class="w-full h-full">
        <div class="flex flex-col items-center text-center 
            md:grid md:grid-cols-6 md:col-span-6 xl:grid-cols-12 xl:col-span-12 
            md:items-center md:text-left 
            w-full h-full px-4 xl:px-12">
            <?php 
                $image = get_field('banner_image');
                if ($image) :
                    $image_url = esc_url(wp_get_attachment_image_url($image, 'full'));
            ?>
                <div class="order-1 md:order-none  md:col-start-1 xl:col-start-2 w-[75px] h-[75px] md:w-[83px] md:h-[83px] bg-cover bg-center md:mx-8 xl:mx-0 mt-14 md:mt-0"
                     style="background-image: url('<?php echo $image_url; ?>');">
                </div>
            <?php endif; ?>

            <div class="order-2 md:order-none col-start-1 md:col-start-2 md:col-span-3 xl:col-start-3 xl:col-span-4">
                <p class="font-poppins font-normal text-[15px] md:text-[15px] xl:text-[24px] leading-[31px] text-[#FFF] mx-auto md:w-[280px] xl:w-full mt-14 md:mt-0">
                    <?php the_field('banner_text'); ?>
                </p>
            </div>

            <div class="order-3 md:order-none col-start-1 md:col-start-5 md:col-span-2 xl:col-start-10 xl:col-span-2 flex justify-center md:justify-start -mx-6 mt-14 md:mt-0">
                <?php
                $blink = get_field('banner_button');
                if ($blink) :
                    $link_url    = $blink['url'];
                    $link_title  = $blink['title'];
                    $link_target = $blink['target'] ? $blink['target'] : '_self';
                    ?>
                    <a class="btn btn--primary !border-[#FFF] !bg-transparent" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                        <?= esc_html($link_title); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                            <path d="M0.828125 1L7.82812 5L0.828125 9M10.8281 1L17.8281 5L10.8281 9" stroke="#34302D"/>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<div class="separator">
    <span class="separator__diamond separator__diamond--brown-shade-2"></span>
</div>
<?php endif; ?>