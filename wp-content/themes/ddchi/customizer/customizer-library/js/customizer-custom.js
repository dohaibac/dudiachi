/**
 * Customizer Custom Functionality
 *
 */
( function( $ ) {
    
    $( window ).load( function() {
        
        // Show / Hide Color selector for slider setting
        var ddchi_slider_select_value = $( '#customize-control-ddchi-slider-type select' ).val();
        ddchi_customizer_slider_check( ddchi_slider_select_value );
        
        $( '#customize-control-ddchi-slider-type select' ).on( 'change', function() {
            var slider_select_value = $( this ).val();
            ddchi_customizer_slider_check( slider_select_value );
        } );
        
        function ddchi_customizer_slider_check( slider_select_value ) {
            if ( slider_select_value == 'ddchi-slider-default' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-shortcode' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-cats' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-size' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-style' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-style-spacing' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-direction' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-remove-title' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-auto-scroll' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-duration' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-upsell-slider' ).show();
            } else if ( slider_select_value == 'ddchi-shortcode-slider' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-cats' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-size' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-style' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-style-spacing' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-direction' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-remove-title' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-auto-scroll' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-duration' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-shortcode' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-upsell-slider' ).hide();
            } else {
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-cats' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-size' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-style' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-style-spacing' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-direction' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-remove-title' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-auto-scroll' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-shortcode' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-slider-duration' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-slider #customize-control-ddchi-upsell-slider' ).hide();
            }
        }
        
        // Show / Hide Center Navigation
        var ddchi_center_nav_valign_select_value = $( '#customize-control-ddchi-set-header-layout select' ).val();
        ddchi_center_nav_valign_check( ddchi_center_nav_valign_select_value );
        
        $( '#customize-control-ddchi-set-header-layout select' ).on( 'change', function() {
            var ddchi_center_nav_valign_select_value = $( this ).val();
            ddchi_center_nav_valign_check( ddchi_center_nav_valign_select_value );
        });
        
        function ddchi_center_nav_valign_check( ddchi_center_nav_valign_select_value ) {
            if ( ddchi_center_nav_valign_select_value == 'ddchi-header-layout-six' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-header-split-six' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-bg-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-font-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-v-align' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-nav-center-align' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-align-right' ).hide();
            } else if ( ddchi_center_nav_valign_select_value == 'ddchi-header-layout-five' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-nav-center-align' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-bg-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-font-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-v-align' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-header-split-six' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-align-right' ).show();
            } else if ( ddchi_center_nav_valign_select_value == 'ddchi-header-layout-four' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-nav-center-align' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-bg-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-font-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-v-align' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-header-split-six' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-align-right' ).show();
            } else if ( ( ddchi_center_nav_valign_select_value == 'ddchi-header-layout-two' ) || ( ddchi_center_nav_valign_select_value == 'ddchi-header-layout-three' ) ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-v-align' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-bg-color' ).hide();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-font-color' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-nav-center-align' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-header-split-six' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-align-right' ).show();
            } else if ( ddchi_center_nav_valign_select_value == 'ddchi-header-layout-one' ) {
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-bg-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-font-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-align-right' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-v-align' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-nav-center-align' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-header-split-six' ).hide();
            } else {
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-align-right' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-bg-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-nav #customize-control-ddchi-nav-font-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-header-split-six' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-v-align' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-nav-center-align' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-header #customize-control-ddchi-set-header-align-right' ).hide();
            }
        }
        
        // Show / Hide Color selector for Site Boxed layout
        var ddchi_blog_value = $( '#customize-control-ddchi-set-blog-layout select' ).val();
        ddchi_blog_type_check( ddchi_blog_value );
        
        $( '#customize-control-ddchi-set-blog-layout select' ).on( 'change', function() {
            var ddchi_blog_select_value = $( this ).val();
            ddchi_blog_type_check( ddchi_blog_select_value );
        });
        
        function ddchi_blog_type_check( ddchi_blog_select_value ) {
            if ( ddchi_blog_select_value == 'blog-grid-layout' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-blog-column-spacing' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-blog-top-center' ).hide();
            } else if ( ddchi_blog_select_value == 'blog-top-layout' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-blog-top-center' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-blog-column-spacing' ).hide();
            } else {
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-blog-top-center' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-blog-column-spacing' ).hide();
            }
        }
        
        // Show / Hide Blog Summary Settings
        var ddchi_blg_value = $( '#customize-control-ddchi-article-content-display select' ).val();
        ddchi_blg_type_check( ddchi_blg_value );
        
        $( '#customize-control-ddchi-article-content-display select' ).on( 'change', function() {
            var ddchi_blg_select_value = $( this ).val();
            ddchi_blg_type_check( ddchi_blg_select_value );
        });
        
        function ddchi_blg_type_check( ddchi_blg_select_value ) {
            if ( ddchi_blg_select_value == 'blog-display-summary' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-article-content-word-count' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-article-content-readmore' ).show();
            } else {
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-article-content-word-count' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-list #customize-control-ddchi-article-content-readmore' ).hide();
            }
        }
        
        // Show / Hide Page Featured Image Layout
        var ddchi_page_layout_value = $( '#customize-control-ddchi-page-fimage-layout select' ).val();
        ddchi_page_layout_type_check( ddchi_page_layout_value );
        
        $( '#customize-control-ddchi-page-fimage-layout select' ).on( 'change', function() {
            var ddchi_page_select_value = $( this ).val();
            ddchi_page_layout_type_check( ddchi_page_select_value );
        });
        
        function ddchi_page_layout_type_check( ddchi_page_select_value ) {
            if ( ddchi_page_select_value == 'ddchi-page-fimage-layout-banner' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-single-page #customize-control-ddchi-page-fimage-size' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-single-page #customize-control-ddchi-page-fimage-fullwidth' ).show();
            } else {
                $( '#sub-accordion-section-ddchi-panel-website-section-single-page #customize-control-ddchi-page-fimage-size' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-single-page #customize-control-ddchi-page-fimage-fullwidth' ).hide();
            }
        }
        
        // Show / Hide Single Post Featured Image Layout
        var ddchi_single_page_layout_value = $( '#customize-control-ddchi-single-page-fimage-layout select' ).val();
        ddchi_single_page_layout_type_check( ddchi_single_page_layout_value );
        
        $( '#customize-control-ddchi-single-page-fimage-layout select' ).on( 'change', function() {
            var ddchi_single_page_select_value = $( this ).val();
            ddchi_single_page_layout_type_check( ddchi_single_page_select_value );
        });
        
        function ddchi_single_page_layout_type_check( ddchi_single_page_select_value ) {
            if ( ddchi_single_page_select_value == 'ddchi-single-page-fimage-layout-banner' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-single #customize-control-ddchi-single-page-fimage-size' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-single #customize-control-ddchi-single-page-fimage-fullwidth' ).show();
            } else {
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-single #customize-control-ddchi-single-page-fimage-size' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-blog-single #customize-control-ddchi-single-page-fimage-fullwidth' ).hide();
            }
        }
        
        // Show / Hide footer layout settings
        var ddchi_foot_select_value = $( '#customize-control-ddchi-footer-layout select' ).val();
        ddchi_foot_value_check( ddchi_foot_select_value );
        
        $( '#customize-control-ddchi-footer-layout select' ).on( 'change', function() {
            var foot_select_value = $( this ).val();
            ddchi_foot_value_check( foot_select_value );
        } );
        
        function ddchi_foot_value_check( foot_select_value ) {
            if ( foot_select_value == 'ddchi-footer-layout-custom' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-custom-note' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-footer #customize-control-ddchi-footer-heading-font-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-text-section-footer #customize-control-ddchi-website-footer-icon' ).hide();
                $( '#sub-accordion-section-ddchi-panel-text-section-footer #customize-control-ddchi-website-footer-add' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-standard-note' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-social-note' ).hide();
            } else if ( foot_select_value == 'ddchi-footer-layout-standard' ) {
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-standard-note' ).show();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-footer #customize-control-ddchi-footer-heading-font-color' ).show();
                $( '#sub-accordion-section-ddchi-panel-text-section-footer #customize-control-ddchi-website-footer-icon' ).hide();
                $( '#sub-accordion-section-ddchi-panel-text-section-footer #customize-control-ddchi-website-footer-add' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-social-note' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-custom-note' ).hide();
            } else if ( foot_select_value == 'ddchi-footer-layout-social' ) {
                $( '#sub-accordion-section-ddchi-panel-text-section-footer #customize-control-ddchi-website-footer-icon' ).show();
                $( '#sub-accordion-section-ddchi-panel-text-section-footer #customize-control-ddchi-website-footer-add' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-social-note' ).show();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-standard-note' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-custom-note' ).hide();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-footer #customize-control-ddchi-footer-heading-font-color' ).hide();
            } else {
                $( '#customize-control-ddchi-footer-customize input[type=checkbox]' ).attr( 'checked', false );
                $( '#sub-accordion-section-ddchi-panel-text-section-footer #customize-control-ddchi-website-footer-icon' ).hide();
                $( '#sub-accordion-section-ddchi-panel-text-section-footer #customize-control-ddchi-website-footer-add' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-standard-note' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-social-note' ).hide();
                $( '#sub-accordion-section-ddchi-panel-website-section-footer #customize-control-ddchi-footer-custom-note' ).hide();
                $( '#sub-accordion-section-ddchi-panel-layout-colors-section-footer #customize-control-ddchi-footer-heading-font-color' ).hide();
            }
        }
        
    } );
    
} )( jQuery );