<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ddchi
 */
get_header(); ?>
	
	<?php if ( is_home() ) : ?>
	<div id="primary" class="content-area <?php echo ( get_theme_mod( 'ddchi-blog-full-width' ) ) ? sanitize_html_class( ' content-area-full' ) : ''; ?>">
    <?php else : ?>
    <div id="primary" class="content-area">
    <?php endif; ?>
    	<main id="main" class="site-main" role="main">
			
			<?php if ( have_posts() ) : ?>
			
				<?php
				// IF blog is grid layout
				echo ( get_theme_mod( 'ddchi-set-blog-layout' ) == 'blog-grid-layout' ) ? '<div class="blog-grid-layout-wrap blog-grid-layout-wrap-remove"><div class="blog-grid-layout-wrap-inner">' : ''; ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'templates/contents/content' );
						?>

					<?php endwhile; ?>
					
				<?php
				// IF blog is grid layout
				echo ( get_theme_mod( 'ddchi-set-blog-layout' ) == 'blog-grid-layout' ) ? '<div class="clearboth"></div></div></div>' : ''; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'templates/contents/content', 'none' ); ?>

			<?php endif; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php if ( is_home() ) : ?>
    
        <?php if ( get_theme_mod( 'ddchi-blog-full-width' ) ) : ?>
            <!-- No Sidebar -->
        <?php else : ?>
            <?php get_sidebar(); ?>
        <?php endif; ?>
        
    <?php else : ?>
    <?php get_sidebar(); ?>
    <?php endif; ?>
	
<?php get_footer(); ?>
