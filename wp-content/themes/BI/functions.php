<?php
/**
 * _mbbasetheme functions and definitions
 *
 * @package _mbbasetheme
 */

/****************************************
Theme Setup
*****************************************/

/**
 * Theme initialization
 */
require get_template_directory() . '/lib/init.php';

/**
 * Custom theme functions definited in /lib/init.php
 */
require get_template_directory() . '/lib/theme-functions.php';

/**
 * Helper functions for use in other areas of the theme
 */
require get_template_directory() . '/lib/theme-helpers.php';

// Main navigation
function register_main_nav() {
    register_nav_menu('main-nav',__( 'Main nav' ));
}
add_action( 'init', 'register_main_nav' );


function remove_post_type_title() {
    remove_post_type_support( 'audio', 'title' );
}
add_action( 'init', 'remove_post_type_title' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/lib/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/lib/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/lib/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/lib/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/lib/inc/jetpack.php';


/****************************************
Require Plugins
*****************************************/

require get_template_directory() . '/lib/class-tgm-plugin-activation.php';
require get_template_directory() . '/lib/theme-require-plugins.php';

// add_action( 'tgmpa_register', 'mb_register_required_plugins' );

function my_enqueue_styles() {
    wp_enqueue_style(
        'my-mediaelement',
        trailingslashit( get_template_directory_uri() ) . 'css/mediaelement/mediaelement.min.css',
        null,
        '20130902'
    );
}

add_action( 'wp_enqueue_scripts', 'my_deregister_styles' );

function my_deregister_styles() {
    wp_deregister_style( 'mediaelement' );
    wp_deregister_style( 'wp-mediaelement' );
}

/****************************************
Misc Theme Functions
*****************************************/

/**
 * Define custom post type capabilities for use with Members
 */
add_action( 'admin_init', 'mb_add_post_type_caps' );
function mb_add_post_type_caps() {
	// mb_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}
