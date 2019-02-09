<?php
/**
 * Functions for users wanting to upgrade to premium
 *
 * @package Ddchi
 */

/**
 * Display the upgrade to Premium page & load styles.
 */
function ddchi_premium_admin_menu() {
    global $ddchi_upgrade_page;
    $ddchi_upgrade_page = add_theme_page( __( 'About Ddchi', 'ddchi' ), '<span class="premium-link">' . __( 'About Ddchi', 'ddchi' ) . '</span>', 'edit_theme_options', 'theme_info', 'ddchi_render_upgrade_page' );
}
add_action( 'admin_menu', 'ddchi_premium_admin_menu' );

/**
 * Enqueue admin stylesheet only on upgrade page.
 */
function ddchi_load_upgrade_page_scripts() {
    global $pagenow;
	if ( $pagenow == 'themes.php' ) {
		wp_enqueue_style( 'ddchi-upgrade-css', get_template_directory_uri() . '/upgrade/css/upgrade-admin.css' );
	    wp_enqueue_script( 'caroufredsel', get_template_directory_uri() . '/js/caroufredsel/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), FESTIVE_THEME_VERSION, true );
	    wp_enqueue_script( 'ddchi-upgrade-js', get_template_directory_uri() . '/upgrade/js/upgrade-custom.js', array( 'jquery' ), FESTIVE_THEME_VERSION, true );
	}
}
add_action( 'admin_enqueue_scripts', 'ddchi_load_upgrade_page_scripts' );

/**
 * Render the premium page to download premium upgrade plugin
 */
function ddchi_render_upgrade_page() {
	get_template_part( 'upgrade/tpl/upgrade-page' );
}
