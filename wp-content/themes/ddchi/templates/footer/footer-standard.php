<footer id="colophon" class="site-footer site-footer-standard" role="contentinfo">
	
	<div class="site-footer-widgets">
        <div class="site-container">
            <?php if ( is_active_sidebar( 'ddchi-site-footer-standard' ) ) : ?>
	            <ul>
	                <?php dynamic_sidebar( 'ddchi-site-footer-standard' ); ?>
	            </ul>
	        <?php else : ?>
	        	<div class="site-footer-no-widgets">
	        		<?php _e( 'Add your own widgets here', 'ddchi' ); ?>
	        	</div>
	    	<?php endif; ?>
            <div class="clearboth"></div>
        </div>
    </div>
    
	<?php printf( __( '<div class="site-footer-bottom-bar"><div class="site-container"><div class="site-footer-bottom-bar-left"></div>', 'ddchi' ), 'Ddchi', '<a href="https://sourceweb.com/">DuDiaChi</a>' ); ?>
            
	        <div class="site-footer-bottom-bar-right">
	            <?php wp_nav_menu( array( 'theme_location' => 'ddchi-footer-menu','container' => false, 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
	            
	            <?php get_template_part( '/templates/social-links' ); ?>
	        </div>
	        
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
</footer>
