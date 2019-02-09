<footer id="colophon" class="site-footer site-footer-none" role="contentinfo">
	
	<?php printf( __( '<div class="site-footer-bottom-bar"><div class="site-container"><div class="site-footer-bottom-bar-left"></div><div class="site-footer-bottom-bar-right">', 'ddchi' ), 'Ddchi', '<a href="https://sourceweb.com/">DuDiaChi</a>' ); ?>
                
			<?php wp_nav_menu( array( 'theme_location' => 'ddchi-footer-menu','container' => false, 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
                
            <?php get_template_part( '/templates/social-links' ); ?>
                
	    </div></div><div class="clearboth"></div>
	</div>
	
</footer>
