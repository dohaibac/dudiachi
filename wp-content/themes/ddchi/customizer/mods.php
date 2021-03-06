<?php
/**
 * Functions used to implement options
 *
 * @package Customizer Library Ddchi
 */

/**
 * Enqueue Google Fonts Example
 */
function customizer_ddchi_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'ddchi-title-font', customizer_library_get_default( 'ddchi-title-font' ) ),
		get_theme_mod( 'ddchi-tagline-font', customizer_library_get_default( 'ddchi-tagline-font' ) ),
		get_theme_mod( 'ddchi-body-font', customizer_library_get_default( 'ddchi-body-font' ) ),
		get_theme_mod( 'ddchi-heading-font', customizer_library_get_default( 'ddchi-heading-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'customizer_ddchi_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'customizer_ddchi_fonts' );
