<section class="section-impressum-content p-16 lg:p-28">
    <div class="theme-container">
        <div
            class="flex flex-col lg:flex-row gap-8 invisible fade-in--noscroll">
            <div class="text-body">
                <?php echo wpautop(get_field('impressum_left_text')) ?>
            </div>
            <div class="text-body">
                <?php echo wpautop(get_field('impressum_right_text')) ?>
            </div>
        </div>
    </div>
</section>