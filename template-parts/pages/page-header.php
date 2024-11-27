<?php
global $is_secondary_header;
$is_secondary_header = is_page_template([
    'page-templates/page-impressum.php',
    'page-templates/page-conditions.php',
    'page-templates/page-data-policy.php',
    'page-templates/page-360-tour.php',
    'page-templates/page-partners.php',
    'page-templates/page-jobs.php',
]);

// Determine header classes
$intro_image_id = get_field('intro_image');
$page_header_classes = [
    'page-header',
    'flex',
    'items-center',
    'relative',
    $is_secondary_header ? 'bg-brown-shade-1 text-brown-shade-4' : 'bg-brown-shade-4 text-brown-shade-1',
    $intro_image_id ? 'min-h-[100vh]' : 'pt-28 lg:pt-64 pb-20 lg:pb-40',
];
$page_header_classes = implode(' ', $page_header_classes);

// Determine header styles
$page_header_styles = $intro_image_id
    ? 'background-image: url(' . wp_get_attachment_image_url($intro_image_id, 'full') . '); background-size: cover; background-position: center;'
    : '';

// Determine if the diamond should be hidden
$is_diamond_hidden = is_page_template([
    'page-templates/page-solothurn-what-to-see.php',
    'page-templates/page-solothurn-what-to-do.php',
]);

// Determine diamond class
$diamond_class = '';
if (is_page_template('page-templates/page-stay.php')) {
    $diamond_class = 'diamond--red';
} elseif (is_page_template('page-templates/page-perfect-for.php')) {
    $diamond_class = 'diamond--orange';
} elseif (is_page_template('page-templates/page-solothurn.php')) {
    $diamond_class = 'diamond--green z-10';
} elseif ($is_secondary_header) {
    $diamond_class = 'diamond--brown z-10';
}
?>
<section class="<?php echo $page_header_classes; ?>" style="<?php echo $page_header_styles; ?>">

    <!-- Overlay -->
    <?php if ($intro_image_id): ?>
        <div class="absolute inset-0 bg-overlay"></div>
    <?php endif; ?>

    <div class="theme-container relative z-10">
        <div class="flex flex-col w-full text-center items-center">
            <!-- Breadcrumbs -->
            <div class="page-header--breadcrumbs invisible fade-in--noscroll">
                <?php do_action('breadcrumbs'); ?>
            </div>

            <!-- Page Title -->
            <?php if ($page_header_title = get_field('intro_title')): ?>
                <div class="page-header--title invisible fade-in--noscroll">
                    <h1 class="page-header--title max-w-[840px] mx-auto py-4"><?php echo $page_header_title; ?></h1>
                </div>
            <?php endif; ?>

            <!-- Subtitle -->
            <?php if ($intro_subtitle = get_field('intro_subtitle')): ?>
                <div class="page-header--separator mx-auto">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/<?php echo $is_secondary_header ? 'dark-separator.svg' : 'page-header-separator.svg'; ?>"
                         alt="decorative separator">
                </div>
                <div class="page-header--description w-3/4 mx-auto invisible fade-in--noscroll pt-4">
                    <p class="page-header--subtitle"><?php echo $intro_subtitle; ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Scroll Down Link -->
    <?php if ($intro_image_id): ?>
        <a href="javascript:void(0);" id="scroll-down-link"
           class="scroll-down-arrows absolute left-1/2 -translate-x-1/2 bottom-20"></a>
    <?php endif; ?>
</section>

<?php if (!$is_diamond_hidden): ?>
    <span class="diamond -top-3 relative <?php echo $diamond_class; ?>"></span>
<?php endif; ?>
