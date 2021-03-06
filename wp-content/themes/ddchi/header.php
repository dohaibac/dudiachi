<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ddchi
 */
?><!DOCTYPE html><!-- Ddchi Premium -->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0, user-scalable=0" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page">
<div class="site-boxed <?php echo ( get_theme_mod( 'ddchi-remove-round-corners' ) ) ? sanitize_html_class( 'ddchi-nocorners' ) : ''; ?> <?php echo ( get_theme_mod( 'ddchi-footer-bottom-space' ) ) ? sanitize_html_class( 'ddchi-no-footer-space' ) : ''; ?>">

	<?php get_template_part( '/templates/header/header' ); ?>

<?php if ( is_front_page() ) : ?>

    <?php get_template_part( '/templates/slider/homepage-slider' ); ?>

<?php endif; ?>

<?php get_template_part( '/templates/title-bar' ); ?>

<?php if ( !is_front_page() && is_page() && get_theme_mod( 'ddchi-page-fimage-layout' ) == 'ddchi-page-fimage-layout-banner' ) : ?>

	<?php get_template_part( '/templates/page/page-banner' ); ?>

<?php elseif ( is_single() && get_theme_mod( 'ddchi-single-page-fimage-layout' ) == 'ddchi-single-page-fimage-layout-banner' ) : ?>

	<?php get_template_part( '/templates/page/page-banner-single' ); ?>

<?php endif; ?>

<div class="site-content site-container <?php echo ( ! is_active_sidebar( 'sidebar-1' ) ) ? sanitize_html_class( 'content-no-sidebar' ) : sanitize_html_class( 'content-has-sidebar' ); ?> <?php echo ( get_theme_mod( 'ddchi-set-blog-layout' ) == 'blog-top-layout' && get_theme_mod( 'ddchi-blog-top-center' ) == 1 ) ? sanitize_html_class( 'ddchi-blog-top-layout-center' ) : ''; ?> <?php echo ( get_theme_mod( 'ddchi-shop-remove-border' ) ) ? sanitize_html_class( 'ddchi-remove-product-borders' ) : ''; ?> <?php echo ( get_theme_mod( 'ddchi-blog-widget-title-centeralign' ) ) ? sanitize_html_class( 'ddchi-centeralign-widget-title' ) : ''; ?> <?php echo ( get_theme_mod( 'ddchi-blog-widget-title-style' ) ) ? sanitize_html_class( get_theme_mod( 'ddchi-blog-widget-title-style' ) ) : sanitize_html_class( 'widget-title-style-plain' ); ?>">