<?php
/**
 * @package Ddchi
 */
global $woocommerce; ?>
<header id="masthead" class="site-header site-header-default header-boxed-in <?php echo ( get_theme_mod( 'ddchi-set-header-nav-center-align' ) ) ? sanitize_html_class( 'site-header-nav-center' ) : ''; ?> <?php echo ( get_theme_mod( 'ddchi-set-header-align-right' ) ) ? sanitize_html_class( 'site-header-align-right' ) : ''; ?> <?php echo ( get_theme_mod( 'ddchi-header-sticky' ) ) ? sanitize_html_class( 'site-sticky-header' ) : ''; ?>">
    
    <?php if ( !get_theme_mod( 'ddchi-remove-search' ) ) : ?>
        <div class="search-block">
            <?php get_search_form(); ?>
        </div>
    <?php endif; ?>
    
    <?php if ( ! get_theme_mod( 'ddchi-set-header-remove-topbar' ) ) : ?>
        <div class="header-top-bar <?php echo ( get_theme_mod( 'ddchi-set-topbar-switch' ) ) ? sanitize_html_class( 'header-top-bar-switch' ) : ''; ?>">
            
            <div class="site-container">
                <div class="header-top-bar-left">
                    
                    <?php if ( get_theme_mod( 'ddchi-set-text-header-add' ) ) : ?>
                        <span class="header-top-bar-right-ad"> <?php echo wp_kses_post( get_theme_mod( 'ddchi-set-text-header-add' ), __( 'Copyright DuDiaChi', 'ddchi' ) ); ?></span>
                    <?php endif; ?>
                    
                    <?php if ( get_theme_mod( 'ddchi-set-text-header-phone' ) ) : ?>
                        <span class="header-top-bar-right-no"><i class="fa fa-phone"></i> <?php echo wp_kses_post( get_theme_mod( 'ddchi-set-text-header-phone' ), __( 'Call Us: +2782 444 YEAH', 'ddchi' ) ); ?></span>
                    <?php endif; ?>
                    
                </div>
                <div class="header-top-bar-right">
                    
                    <?php wp_nav_menu( array( 'theme_location' => 'ddchi-header-menu', 'fallback_cb' => false, 'depth'  => 1, 'container_class' => 'header-menu-nav' ) ); ?>
                    
                    <?php get_template_part( '/templates/social-links' ); ?>
                    
                    <?php if ( !get_theme_mod( 'ddchi-remove-search' ) ) : ?>
                        <div class="search-button">
                            <i class="fa fa-search"></i>
                        </div>
                    <?php endif; ?>
                    
                </div>
                <div class="clearboth"></div>
                
            </div>
            
        </div>
    <?php endif; ?>
    
    <div class="header-bar">
        
        <div class="site-container">
            
            <div class="header-bar-inner">
                
                <div class="site-branding">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    <?php endif; ?>
                </div>
                
                <div class="clearboth"></div>
            </div>
            
        </div>
        
    </div>
    
    <nav id="site-navigation" class="main-navigation <?php echo ( get_theme_mod( 'ddchi-remove-nav-shadow' ) ) ? sanitize_html_class( 'no-shadow' ) : ''; ?> <?php echo ( get_theme_mod( 'ddchi-set-navigation-style' ) ) ? sanitize_html_class( get_theme_mod( 'ddchi-set-navigation-style' ) ) : sanitize_html_class( 'ddchi-navigation-style-underline' ); ?> <?php echo ( get_theme_mod( 'ddchi-header-split-six' ) ) ? sanitize_html_class( 'ddchi-split-nav-cart' ) : ''; ?>" role="navigation">
        
        <div class="site-container">
            
            <span class="header-menu-button"><i class="fa fa-bars"></i><span><?php echo esc_attr( get_theme_mod( 'ddchi-set-text-mobile-nav', __( 'MENU', 'ddchi' ) ) ); ?></span></span>
            <div id="main-menu" class="main-menu-container">
                <span class="main-menu-close"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></span>
                <?php wp_nav_menu( array( 'theme_location' => 'ddchi-main-menu', 'container_class' => 'ddchi-main-menu' ) ); ?>
                
                <?php if ( ddchi_is_woocommerce_activated() ) : ?>
                    <div class="header-cart">
                        
                        <a class="header-cart-contents" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'ddchi' ); ?>">
                            <span class="header-cart-amount">
                                <?php echo sprintf( _n( '%d item', '%d items', $woocommerce->cart->cart_contents_count, 'ddchi' ), $woocommerce->cart->cart_contents_count ); ?> <?php echo $woocommerce->cart->get_cart_total(); ?>
                            </span>
                            <span class="header-cart-checkout <?php echo ( $woocommerce->cart->cart_contents_count > 0 ) ? sanitize_html_class( 'cart-has-items' ) : ''; ?>">
                                <i class="fa <?php echo ( get_theme_mod( 'ddchi-cart-icon' ) ) ? sanitize_html_class( get_theme_mod( 'ddchi-cart-icon' ) ) : sanitize_html_class( 'fa-shopping-cart' ); ?>"></i>
                            </span>
                        </a>
                        
                    </div>
                <?php endif; ?>
                
                <div class="clearboth"></div>
            </div>
            
        </div>
        
    </nav> <!-- #site-navigation -->
    
    <div class="clearboth"></div>
</header><!-- #masthead -->
