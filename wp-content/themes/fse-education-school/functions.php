<?php
/**
 * FSE Education School functions and definitions
 *
 * @package fse_education_school
 * @since 1.0
 */

if ( ! function_exists( 'fse_education_school_support' ) ) :
	function fse_education_school_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
endif;

add_action( 'after_setup_theme', 'fse_education_school_support' );

if ( ! function_exists( 'fse_education_school_styles' ) ) :
	function fse_education_school_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'fse-education-school-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_education_school_styles' );

/* Theme Credit link */
define('FSE_EDUCATION_SCHOOL_BUY_NOW',__('https://www.cretathemes.com/gutenberg/school-wordpress-theme/','fse-education-school'));
define('FSE_EDUCATION_SCHOOL_PRO_DEMO',__('https://www.cretathemes.com/preview/fse-education-school/','fse-education-school'));
define('FSE_EDUCATION_SCHOOL_THEME_DOC',__('https://www.cretathemes.com/pro-guide/fse-education-school/','fse-education-school'));
define('FSE_EDUCATION_SCHOOL_SUPPORT',__('https://wordpress.org/support/theme/fse-education-school/','fse-education-school'));
define('FSE_EDUCATION_SCHOOL_REVIEW',__('https://wordpress.org/support/theme/fse-education-school/reviews/#new-post','fse-education-school'));

//redirect
Function fse_education_school_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
   		wp_safe_redirect( admin_url("themes.php?page=fse-education-school-guide-page") );
   	}
}
add_action('after_setup_theme', 'fse_education_school_notice');

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';