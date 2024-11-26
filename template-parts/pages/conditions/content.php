<section class="section-conditions-content p-16 lg:p-28">
<?php if (have_rows('conditions_sections')): ?>
    <div class="theme-container">
        <?php
        while (have_rows('conditions_sections')):
            the_row();
            $conditionTitle = get_sub_field('title');
            $conditionSubTitle = get_sub_field('subtitle');
            $conditionDescription = get_sub_field('description');
        ?>
            <div class="lg:mr-48 invisible fade-in--noscroll pb-8">
                <?php if ($conditionTitle): ?>
                    <h3 class="text-title-h3 pb-4"><?php echo esc_html($conditionTitle); ?></h3>
                <?php endif; ?>
                <?php if ($conditionSubTitle): ?>
                    <h4 class="font-bold text-sm"><?php echo esc_html($conditionSubTitle); ?></h4>
                <?php endif; ?>
                <?php if ($conditionDescription): ?>
                    <div class="text-body">
                        <?php echo wpautop($conditionDescription); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

</section>