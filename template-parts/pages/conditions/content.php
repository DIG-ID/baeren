<section class="section-306-touur-content p-16 lg:p-28">
    <div class="theme-container">
        <?php
        $conditions = get_field('conditions_text');
        ?>
        <div
            class="lg:mr-48 invisible fade-in--noscroll">
            <div class="text-body">
                <?php echo wpautop($conditions); ?>
            </div>
        </div>
    </div>
</section>