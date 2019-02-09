<footer id="colophon" class="site-footer site-footer-social" role="contentinfo">
	
	<div class="site-footer-icons">
        <div class="site-container">
        	
            <?php
			if( get_theme_mod( 'ddchi-social-email' ) ) :
			    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'ddchi-social-email' ), 1 ) ) . '" title="' . esc_attr__( 'Send Us an Email', 'ddchi' ) . '" class="footer-social-icon footer-social-email"><i class="fa fa-envelope-o"></i></a>';
			endif;

			if( get_theme_mod( 'ddchi-social-skype' ) ) :
			    echo '<a href="skype:' . esc_html( get_theme_mod( 'ddchi-social-skype' ) ) . '?userinfo" title="' . esc_attr__( 'Contact Us on Skype', 'ddchi' ) . '" class="footer-social-icon footer-social-skype"><i class="fa fa-skype"></i></a>';
			endif;

			if( get_theme_mod( 'ddchi-social-facebook' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'ddchi-social-facebook' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Facebook', 'ddchi' ) . '" class="footer-social-icon footer-social-facebook"><i class="fa fa-facebook"></i></a>';
			endif;

			if( get_theme_mod( 'ddchi-social-twitter' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'ddchi-social-twitter' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Twitter', 'ddchi' ) . '" class="footer-social-icon footer-social-twitter"><i class="fa fa-twitter"></i></a>';
			endif;

			if( get_theme_mod( 'ddchi-social-pinterest' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'ddchi-social-pinterest' ) ) . '" target="_blank" title="' . esc_attr__( 'Pin Us on Pinterest', 'ddchi' ) . '" class="footer-social-icon footer-social-pinterest"><i class="fa fa-pinterest"></i></a>';
			endif;
			
			if( get_theme_mod( 'ddchi-social-etsy' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'ddchi-social-etsy' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Etsy', 'ddchi' ) . '" class="footer-social-icon footer-social-etsy"><i class="fa fa-etsy"></i></a>';
			endif;
			
			if( get_theme_mod( 'ddchi-social-medium' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'ddchi-social-medium' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Medium', 'ddchi' ) . '" class="footer-social-icon social-medium"><i class="fa fa-medium"></i></a>';
			endif;
			
			if( get_theme_mod( 'ddchi-social-behance' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'ddchi-social-behance' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Behance', 'ddchi' ) . '" class="footer-social-icon social-behance"><i class="fa fa-behance"></i></a>';
			endif;

			if( get_theme_mod( 'ddchi-social-tumblr' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'ddchi-social-tumblr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Tumblr', 'ddchi' ) . '" class="footer-social-icon footer-social-tumblr"><i class="fa fa-tumblr"></i></a>';
			endif;

			if( get_theme_mod( 'ddchi-social-flickr' ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'ddchi-social-flickr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Flickr', 'ddchi' ) . '" class="footer-social-icon footer-social-flickr"><i class="fa fa-flickr"></i></a>';
			endif; ?>
			
        	<div class="site-footer-social-ad">
        		&copy; <?php echo wp_kses_post( get_theme_mod( 'ddchi-website-footer-add', 'Copyright DuDiaChi' ) ) ?>
        	
            <?php printf( __( '</div><div class="site-footer-social-copy"></div><div class="clearboth"></div></div>', 'ddchi' ), 'Ddchi', '<a href="https://sourceweb.com/">DuDiaChi</a>' ); ?>
    </div>
    
</footer>
<div class="site-footer-bottom-bar">

	<div class="site-container">
		
        <?php wp_nav_menu( array( 'theme_location' => 'ddchi-footer-menu','container' => false, 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
        
    </div>
	
    <div class="clearboth"></div>
</div>
