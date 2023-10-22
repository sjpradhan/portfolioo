<?php
/**
 * Block Patterns
 *
 * @package fse_education_school
 * @since 1.0
 */

function fse_education_school_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-education-school' => array( 'label' => esc_html__( 'FSE Education School', 'fse-education-school' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-education-school' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_education_school_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_education_school_register_block_patterns', 9 );