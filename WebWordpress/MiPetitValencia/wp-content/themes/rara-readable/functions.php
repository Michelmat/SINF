<?php
/**
 * Rara Readable Pro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rara_Readable
 */

// Define theme version
if ( ! defined( 'RARA_READABLE_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();
	
	define ( 'RARA_READABLE_THEME_VERSION', $theme_data->get( 'Version' ) );
}

// Use unminified libraries if SCRIPT_DEBUG is true
if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
	define( 'UNMINIFY', '/unminify' );
	define( 'SUFFIX', '' );
} else {
	define( 'UNMINIFY', '' );
	define( 'SUFFIX', '.min' );
}

/**
 * Implement the Custom functions.
 */
require get_template_directory() . '/inc/custom-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Sanitization functions.
 */
require get_template_directory() . '/inc/customizer/sanitization-functions.php';

/**
 * Customizer Custom controls.
 */
require get_template_directory() . '/inc/custom-controls/custom-control.php';

/**
 * Customizer default theme options.
 */
require get_template_directory() . '/inc/customizer/default-theme-options.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Customizer selective refresh additions.
 */
require get_template_directory() . '/inc/customizer/selective-refresh.php';

/**
 * Widgets additions.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Typography Functions
 */
require get_template_directory() . '/inc/typography-functions.php';

if ( rara_readable_is_woocommerce_activated() ) :
	/**
	 * Load woocommerce
	 */
	require get_template_directory() . '/inc/woocommerce-functions.php';
endif;