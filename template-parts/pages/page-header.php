<?php
$is_secondary_header = is_page_template([
    'page-templates/page-impressum.php',
    'page-templates/page-conditions.php',
    'page-templates/page-data-policy.php',
    'page-templates/page-360-tour.php',
    'page-templates/page-partners.php',
    'page-templates/page-jobs.php',
]);
?>

<section class="page-header flex items-center bg-brown-shade-4 text-brown-shade-1 relative <?php
$intro_image_id = get_field('intro_image');
if ($intro_image_id):
    echo 'min-h-[100vh]';
else:
    echo 'pt-28 lg:pt-64 pb-20 lg:pb-40';
endif;
?>" style="<?php
if ($intro_image_id):
    echo 'background-image: url(' . wp_get_attachment_image_url($intro_image_id, 'full') . '); background-size: cover; background-position: center;';
endif;
?>">

    <!-- Overlay -->
    <?php if ($intro_image_id): ?>
        <div class="absolute inset-0 bg-overlay"></div>
    <?php endif; ?>

    <div class="theme-container relative z-10">
        <div class="flex flex-col w-full text-center items-center">
            <div class="page-header--breadcrumbs invisible fade-in--noscroll">
                <?php do_action('breadcrumbs'); ?>
            </div>
            <div class="page-header--title invisible fade-in--noscroll">
                <?php
                $page_header_title = get_field('intro_title');
                if ($page_header_title): ?>
                    <h1 class="page-header--title max-w-[840px] mx-auto py-4"><?php echo $page_header_title; ?></h1>
                <?php endif; ?>
            </div>
            <div class="page-header--separator mx-auto">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/<?php echo $is_secondary_header ? 'dark-separator.svg' : 'page-header-separator.svg'; ?>"
            alt="decorative separator">
            </div>
            <div class="page-header--description w-3/4 mx-auto invisible fade-in--noscroll pt-4">
                <?php
                $page_header_desc = get_field('intro_subtitle');
                if ($page_header_desc):
                    ?>
                    <p class="page-header--subtitle"><?php echo $page_header_desc; ?></p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
    <?php if ($intro_image_id): ?>
        <a href="javascript:void(0);" id="scroll-down-link"
            class="scroll-down-arrows absolute left-1/2 -translate-x-1/2 bottom-20"></a>
    <?php endif; ?>
    <script>

    </script>
</section>

<?php 
$is_hidden = is_page_template('page-templates/page-solothurn-what-to-see.php') || is_page_template('page-templates/page-solothurn-what-to-do.php');
if (!$is_hidden): ?>
    <span class="diamond -top-3 relative<?php
    if (is_page_template('page-templates/page-stay.php')):
        echo ' diamond--red';
    elseif (is_page_template('page-templates/page-perfect-for.php')):
        echo ' diamond--orange';
    elseif (is_page_template('page-templates/page-solothurn.php')):
        echo ' diamond--green z-10';
    endif;
    ?>">
    </span>
<?php endif; ?>