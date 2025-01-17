<div class="separator">
	<span class="separator__diamond separator__diamond--brown-shade-2"></span>
</div>
<section class="section-jobs-content p-16 lg:p-28">
    <?php
    if (have_rows('jobs')):
        $i = 0;
        while (have_rows('jobs')):
            the_row();
            ?>
            <div class="theme-container">
                <div class="flex items-center lg:items-start flex-col gap-9 lg:flex-row lg:gap-28 justify-center invisible fade-in--noscroll">
                    <div class="text-body text-center lg:text-left mb-12 max-w-[36rem]"><?php the_sub_field('description'); ?></div>
                    <?php
                    $ilink = get_sub_field('link');
                    if ($ilink):
                        $link_url = $ilink['url'];
                        $link_title = $ilink['title'];
                        $link_target = $ilink['target'] ? $ilink['target'] : '_self';
                        ?>
                        <span>
                            <a class="float-center btn-custom--double-arrows font-light w-[11.2rem]" href="<?php echo esc_url($link_url); ?>"
                                target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <?php
        endwhile;
    endif;
    ?>
</section>