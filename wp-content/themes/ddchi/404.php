<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Ddchi
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<section class="error-404 not-found">
			
			<div>
				<i class="fa fa-ban"></i>
			</div>
			
			<header class="page-header">
				<h1 class="page-title"><?php echo wp_kses_post( get_theme_mod( 'ddchi-website-error-head', __( 'Oops! <span>404</span>', 'ddchi' ) ) ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>
                    <?php echo wp_kses_post( get_theme_mod( 'ddchi-website-error-msg', __( 'It looks like that page does not exist. <br />Return home or try a search', 'ddchi' ) ) ); ?>
				</p>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->
			
	</div><!-- #primary -->

<?php get_footer(); ?>
