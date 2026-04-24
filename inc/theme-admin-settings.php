<?php
/**
 * Customize WordPress Admin look and feel.
 */

/**
 * Removes default dashboard widgets using the proper API.
 */
function baeren_disable_default_dashboard_widgets() {
	remove_meta_box( 'dashboard_activity',         'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now',        'dashboard', 'normal' );
	remove_meta_box( 'dashboard_recent_comments',  'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins',          'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary',          'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary',        'dashboard', 'side' );
	remove_meta_box( 'dashboard_quick_press',      'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts',    'dashboard', 'side' );
}

add_action( 'wp_dashboard_setup', 'baeren_disable_default_dashboard_widgets', 999 );


/************* CUSTOM LOGIN PAGE *****************/


/**
 * Enqueues the custom login stylesheet and inlines the logo override.
 */
function baeren_theme_login_css() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'admin-login-css', get_theme_file_uri( '/dist/css/admin-login.css' ), array(), $theme_version );
	wp_add_inline_style(
		'admin-login-css',
		'h1 a { background-image: url(' . esc_url( get_template_directory_uri() ) . '/assets/svg/mega-menu__logo.svg) !important; }'
	);
}

add_action( 'login_enqueue_scripts', 'baeren_theme_login_css', 10 );

// Changing the logo link from wordpress.org to your site.
function baeren_theme_login_url() {
	return home_url();
}

add_filter( 'login_headerurl', 'baeren_theme_login_url' );

// Changing the alt text on the logo to show your site name.
function baeren_theme_login_title() {
	return get_option( 'blogname' );
}

add_filter( 'login_headertext', 'baeren_theme_login_title' );


/************* CUSTOMIZE ADMIN *******************/

// Custom Backend Footer.
function baeren_theme_custom_admin_footer() {
	printf(
		'<span id="footer-thankyou">%s <a href="%s" target="_blank">%s</a></span>.',
		esc_html__( 'Developed by', 'baeren' ),
		esc_url( 'https://dig.id' ),
		esc_html( 'dig.id' )
	);
}

add_filter( 'admin_footer_text', 'baeren_theme_custom_admin_footer' );


// Remove WordPress logo from admin bar.
function baeren_remove_wp_links( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

add_action( 'admin_bar_menu', 'baeren_remove_wp_links', 999 );


/**
 * Allow SVG uploads for administrator users only.
 *
 * @param array $upload_mimes Allowed mime types.
 * @return array
 */
add_filter(
	'upload_mimes',
	function ( $upload_mimes ) {
		if ( ! current_user_can( 'manage_options' ) ) {
			return $upload_mimes;
		}

		$upload_mimes['svg']  = 'image/svg+xml';
		$upload_mimes['svgz'] = 'image/svg+xml';

		return $upload_mimes;
	}
);

/**
 * Add SVG files mime check.
 *
 * @param array        $wp_check_filetype_and_ext Values for the extension, mime type, and corrected filename.
 * @param string       $file                      Full path to the file.
 * @param string       $filename                  The name of the file.
 * @param string[]     $mimes                     Array of mime types keyed by their file extension regex.
 * @param string|false $real_mime                 The actual mime type or false if the type cannot be determined.
 */
add_filter(
	'wp_check_filetype_and_ext',
	function ( $wp_check_filetype_and_ext, $file, $filename, $mimes, $real_mime ) {

		if ( ! $wp_check_filetype_and_ext['type'] ) {

			$check_filetype  = wp_check_filetype( $filename, $mimes );
			$ext             = $check_filetype['ext'];
			$type            = $check_filetype['type'];
			$proper_filename = $filename;

			if ( $type && 0 === strpos( $type, 'image/' ) && 'svg' !== $ext ) {
				$ext  = false;
				$type = false;
			}

			$wp_check_filetype_and_ext = compact( 'ext', 'type', 'proper_filename' );
		}

		return $wp_check_filetype_and_ext;

	},
	10,
	5
);

// Completely Disable Comments.
add_action(
	'admin_init',
	function () {
		global $pagenow;

		if ( 'edit-comments.php' === $pagenow ) {
			wp_safe_redirect( admin_url() );
			exit;
		}

		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );

		foreach ( get_post_types() as $post_type ) {
			if ( post_type_supports( $post_type, 'comments' ) ) {
				remove_post_type_support( $post_type, 'comments' );
				remove_post_type_support( $post_type, 'trackbacks' );
			}
		}
	}
);

// Close comments on the front-end.
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );

// Hide existing comments.
add_filter( 'comments_array', '__return_empty_array', 10, 2 );

// Remove comments page in menu.
add_action(
	'admin_menu',
	function () {
		remove_menu_page( 'edit-comments.php' );
	}
);

// Remove comments links from admin bar.
add_action(
	'init',
	function () {
		if ( is_admin_bar_showing() ) {
			remove_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 60 );
		}
	}
);


// Disable Attachment Pages.
add_action(
	'template_redirect',
	function () {
		global $post;
		if ( ! is_attachment() || ! isset( $post->post_parent ) || ! is_numeric( $post->post_parent ) ) {
			return;
		}

		if ( 0 !== $post->post_parent && 'trash' !== get_post_status( $post->post_parent ) ) {
			wp_safe_redirect( get_permalink( $post->post_parent ), 301 );
		} else {
			wp_safe_redirect( get_bloginfo( 'wpurl' ), 302 );
		}
		exit;
	},
	1
);
