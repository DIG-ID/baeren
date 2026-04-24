<?php
/**
 * Setup theme
 */
function baeren_theme_setup() {

	register_nav_menus(
		array(
			'main-menu'      => __( 'Main Menu', 'baeren' ),
			'main-mega-menu' => __( 'Main Mega Menu', 'baeren' ),
			'secondary-menu' => __( 'Secondary Menu', 'baeren' ),
			'copyright-menu' => __( 'Copyright Menu', 'baeren' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size( 'zimmer-image', 1400, 770, array( 'center', 'center' ) );

	add_image_size( 'zimmer-thumbnail', 1400, 300, array( 'center', 'center' ) );

	add_image_size( 'long-term-image', 975, 650, array( 'center', 'center' ) );

	add_image_size( 'teaser-image-thumbnail-vertical', 406, 860, array( 'center', 'center' ) );

	add_image_size( 'arrival-image', 544, 450, array( 'center', 'center' ) );

}

add_action( 'after_setup_theme', 'baeren_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function baeren_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

	register_sidebar(
		array(
			'name'          => 'Header Language Switcher',
			'id'            => 'header_ls',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}

add_action( 'widgets_init', 'baeren_theme_footer_widgets_init' );

if ( ! function_exists( 'baeren_preload_webfonts' ) ) :

	/**
	 * Outputs early resource hints for the Adobe Fonts (Typekit) CDN.
	 */
	function baeren_preload_webfonts() {
		?>
		<link rel="preconnect" href="https://use.typekit.net" crossorigin>
		<link rel="preload" href="https://use.typekit.net/bmp1ccb.css" as="style">
		<?php
	}

endif;

add_action( 'wp_head', 'baeren_preload_webfonts', 1 );

/**
 * Enqueue styles and scripts
 */
function baeren_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Enqueue Adobe Fonts (Typekit) — loaded directly to avoid the @import render-blocking waterfall.
	wp_enqueue_style( 'theme-fonts', 'https://use.typekit.net/bmp1ccb.css', array(), null );
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array( 'theme-fonts' ), $theme_version );

	wp_enqueue_script( 'jquery', false, array(), $theme_version, true );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, true );
	if ( is_page_template( 'page-templates/page-home.php' ) || is_page_template( 'page-templates/page-arrival-contacts.php' ) || is_admin() ) :
		wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array( 'jquery' ), $theme_version, true );
		wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo&callback=initMap', array(), $theme_version, true );
	endif;
}

add_action( 'wp_enqueue_scripts', 'baeren_theme_enqueue_styles' );

//Google Map Init
function baeren_theme_google_map_init() {
	if ( is_admin() ) :
		acf_update_setting( 'google_api_key', 'AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo' );
	endif;
}

add_action( 'acf/init', 'baeren_theme_google_map_init' );

/**
 * Remove <p> Tag From Contact Form 7.
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function baeren_theme_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'baeren_theme_lower_yoast_metabox_priority' );


// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings.
require get_template_directory() . '/inc/theme-admin-settings.php';

// The theme custom menu walker settings.
require get_template_directory() . '/inc/theme-custom-menu-walker.php';

// Performance optimizations.
require get_template_directory() . '/inc/performance.php';


