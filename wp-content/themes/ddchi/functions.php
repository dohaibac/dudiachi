<?php
/**
 * Ddchi functions and definitions
 *
 * @package Ddchi
 */

define( 'FESTIVE_THEME_VERSION' , '1.0.3' );

// Get help / Premium Page
require get_template_directory() . '/upgrade/upgrade.php';

// Load WP included scripts
require get_template_directory() . '/includes/inc/template-tags.php';
require get_template_directory() . '/includes/inc/extras.php';
require get_template_directory() . '/includes/inc/customizer.php';

// Load Customizer Library scripts
require get_template_directory() . '/customizer/customizer-options.php';
require get_template_directory() . '/customizer/customizer-library/customizer-library.php';
require get_template_directory() . '/customizer/styles.php';
require get_template_directory() . '/customizer/mods.php';

// Load TGM plugin class
require_once get_template_directory() . '/includes/inc/class-tgm-plugin-activation.php';
// Add customizer Upgrade class
//require_once( get_template_directory() . '/includes/ddchi-pro/class-customize.php' );

if ( ! function_exists( 'ddchi_setup_theme' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ddchi_setup_theme() {

    /**
     * Set the content width based on the theme's design and stylesheet.
     */
    global $content_width;
    if ( ! isset( $content_width ) )
        $content_width = 870; /* pixels */

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Ddchi, use a find and replace
	 * to change 'ddchi' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ddchi', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'ddchi-main-menu' => __( 'Main Menu', 'ddchi' ),
		'ddchi-header-menu' => __( 'Top Bar Menu', 'ddchi' ),
		'ddchi-footer-menu' => __( 'Footer Menu', 'ddchi' )
	) );

	add_theme_support( 'post-thumbnails' );

	// The custom logo is used for the logo
	add_theme_support( 'custom-logo', array(
		'height'      => 105,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	add_editor_style();

    add_theme_support( 'custom-background' );

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
endif; // kaira_setup
add_action( 'after_setup_theme', 'ddchi_setup_theme' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function ddchi_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ddchi' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar(array(
		'name' => __( 'Ddchi Standard Footer', 'ddchi' ),
		'id' => 'ddchi-site-footer-standard',
	));

	register_sidebar( array(
		'name' => __( 'Ddchi Footer Custom 1', 'ddchi' ),
		'id' => 'ddchi-site-footer-custom-1'
	));
	register_sidebar( array(
		'name' => __( 'Ddchi Footer Custom 2', 'ddchi' ),
		'id' => 'ddchi-site-footer-custom-2'
	));
	register_sidebar( array(
		'name' => __( 'Ddchi Footer Custom 3', 'ddchi' ),
		'id' => 'ddchi-site-footer-custom-3'
	));
	register_sidebar( array(
		'name' => __( 'Ddchi Footer Custom 4', 'ddchi' ),
		'id' => 'ddchi-site-footer-custom-4'
	));
	register_sidebar( array(
		'name' => __( 'Ddchi Footer Custom 5', 'ddchi' ),
		'id' => 'ddchi-site-footer-custom-5'
	));
}
add_action( 'widgets_init', 'ddchi_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function ddchi_scripts() {
    wp_enqueue_style( 'ddchi-fonts-default', '//fonts.googleapis.com/css?family=Indie+Flower|Open+Sans:300,300i,400,400i,700,700i|Roboto:300,400,700', array(), FESTIVE_THEME_VERSION );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/includes/font-awesome/css/font-awesome.css', array(), '4.7.0' );
	wp_enqueue_style( 'ddchi-style', get_stylesheet_uri(), array(), FESTIVE_THEME_VERSION );

	if ( ddchi_is_woocommerce_activated() ) {
		wp_enqueue_style( 'ddchi-woocommerce-style', get_template_directory_uri().'/templates/css/ddchi-woocommerce-style.css', array(), FESTIVE_THEME_VERSION );
	}

	if ( get_theme_mod( 'ddchi-set-header-layout' ) == 'ddchi-header-layout-six' ) :
		wp_enqueue_style( 'ddchi-header-style-six', get_template_directory_uri().'/templates/css/header/header-six.css', array(), FESTIVE_THEME_VERSION );
	elseif ( get_theme_mod( 'ddchi-set-header-layout' ) == 'ddchi-header-layout-five' ) :
		wp_enqueue_style( 'ddchi-header-style-five', get_template_directory_uri().'/templates/css/header/header-five.css', array(), FESTIVE_THEME_VERSION );
	elseif ( get_theme_mod( 'ddchi-set-header-layout' ) == 'ddchi-header-layout-four' ) :
		wp_enqueue_style( 'ddchi-header-style-four', get_template_directory_uri().'/templates/css/header/header-four.css', array(), FESTIVE_THEME_VERSION );
	elseif ( get_theme_mod( 'ddchi-set-header-layout' ) == 'ddchi-header-layout-three' ) :
		wp_enqueue_style( 'ddchi-header-style-three', get_template_directory_uri().'/templates/css/header/header-three.css', array(), FESTIVE_THEME_VERSION );
	elseif ( get_theme_mod( 'ddchi-set-header-layout' ) == 'ddchi-header-layout-two' ) :
		wp_enqueue_style( 'ddchi-header-style-two', get_template_directory_uri().'/templates/css/header/header-two.css', array(), FESTIVE_THEME_VERSION );
	elseif ( get_theme_mod( 'ddchi-set-header-layout' ) == 'ddchi-header-layout-one' ) :
        wp_enqueue_style( 'ddchi-header-style-one', get_template_directory_uri().'/templates/css/header/header-one.css', array(), FESTIVE_THEME_VERSION );
    else :
		wp_enqueue_style( 'ddchi-header-style-default', get_template_directory_uri().'/templates/css/header/header-default.css', array(), FESTIVE_THEME_VERSION );
	endif;

	if ( get_theme_mod( 'ddchi-footer-layout' ) == 'ddchi-footer-layout-standard' ) :
	    wp_enqueue_style( 'ddchi-footer-standard-style', get_template_directory_uri().'/templates/css/footer/footer-standard.css', array(), FESTIVE_THEME_VERSION );
	elseif ( get_theme_mod( 'ddchi-footer-layout' ) == 'ddchi-footer-layout-none' ) :
	    wp_enqueue_style( 'ddchi-no-footer-style', get_template_directory_uri().'/templates/css/footer/footer-none.css', array(), FESTIVE_THEME_VERSION );
	else :
		wp_enqueue_style( 'ddchi-footer-standard-style', get_template_directory_uri().'/templates/css/footer/footer-social.css', array(), FESTIVE_THEME_VERSION );
	endif;

	wp_enqueue_script( 'caroufredSel', get_template_directory_uri() . '/js/caroufredsel/jquery.carouFredSel-6.2.1-packed.js', array('jquery'), FESTIVE_THEME_VERSION, true );

    if ( get_theme_mod( 'ddchi-set-blog-layout' ) == 'blog-grid-layout' ) {
	    if ( is_home() || is_archive() || is_search() ) {
	        wp_enqueue_script( 'jquery-masonry' );
	        wp_enqueue_script( 'ddchi-masonry-custom', get_template_directory_uri() . '/js/blog-layout.js', array('jquery'), FESTIVE_THEME_VERSION, true );
	    }
	}

    wp_enqueue_script( 'ddchi-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), FESTIVE_THEME_VERSION, true );

	wp_enqueue_script( 'ddchi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), FESTIVE_THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'kaira-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), FESTIVE_THEME_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'ddchi_scripts' );

/**
 * To maintain backwards compatibility with older versions of WordPress
 */
function ddchi_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}

/**
 * Add classes to the admin body class
 */
function ddchi_add_admin_body_class() {
	$ddchi_admin_class = '';

	if ( get_theme_mod( 'ddchi-footer-layout' ) ) {
		$ddchi_admin_class = sanitize_html_class( get_theme_mod( 'ddchi-footer-layout' ) );
	} else {
		$ddchi_admin_class = sanitize_html_class( 'ddchi-footer-layout-standard' );
	}

	return $ddchi_admin_class;
}
add_filter( 'admin_body_class', 'ddchi_add_admin_body_class' );

/**
 * Check if WooCommerce exists.
 */
if ( ! function_exists( 'ddchi_is_woocommerce_activated' ) ) :
    function ddchi_is_woocommerce_activated() {
        if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
    }
endif; // ddchi_is_woocommerce_activated

// If WooCommerce exists include ajax cart
if ( ddchi_is_woocommerce_activated() ) {
    require get_template_directory() . '/includes/inc/woocommerce-cart.php';
}

/**
 * Add classes to the blog list for styling.
 */
function ddchi_add_post_classes ( $classes ) {
	global $current_class;

	if ( is_home() || is_archive() || is_search() ) :
		$ddchi_blog_layout = 'blog-left-layout';
		if ( get_theme_mod( 'ddchi-set-blog-layout' ) ) {
		    $ddchi_blog_layout = get_theme_mod( 'ddchi-set-blog-layout' );
		}
		$classes[] = $ddchi_blog_layout;

		$ddchi_blog_style = 'blog-style-plain';
		if ( get_theme_mod( 'ddchi-set-blog-styling' ) ) {
		    $ddchi_blog_style = get_theme_mod( 'ddchi-set-blog-styling' );
		}
		$classes[] = $ddchi_blog_style;

		$classes[] = $current_class;
		$current_class = ( $current_class == 'blog-alt-odd' ) ? 'blog-alt-even' : 'blog-alt-odd';
	endif;

	return $classes;
}
global $current_class;
$current_class = 'blog-alt-odd';
add_filter ( 'post_class' , 'ddchi_add_post_classes' );

/**
 * Enqueue ddchi custom customizer styling.
 */
function ddchi_load_customizer_script() {
    wp_enqueue_script( 'ddchi-customizer-js', get_template_directory_uri() . '/customizer/customizer-library/js/customizer-custom.js', array('jquery'), FESTIVE_THEME_VERSION, true );
    wp_enqueue_style( 'ddchi-customizer-css', get_template_directory_uri() . '/customizer/customizer-library/css/customizer.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'ddchi_load_customizer_script' );

/**
 * Add classed to the body tag from settings
 */
function ddchi_add_body_class( $classes ) {
    if ( get_theme_mod( 'ddchi-turn-on-snow' ) ) {
        $classes[] = 'ddchi-background-snow';
    }

    return $classes;
}
add_filter( 'body_class', 'ddchi_add_body_class' );

/**
 * Adjust is_home query if ddchi-set-blog-cats is set
 */
function ddchi_set_blog_queries( $query ) {
    $blog_query_set = '';
    if ( get_theme_mod( 'ddchi-set-blog-cats', false ) ) {
        $blog_query_set = get_theme_mod( 'ddchi-set-blog-cats' );
    }

    if ( $blog_query_set ) {
        // do not alter the query on wp-admin pages and only alter it if it's the main query
        if ( !is_admin() && $query->is_main_query() ){
            if ( is_home() ){
                $query->set( 'cat', $blog_query_set );
            }
        }
    }
}
add_action( 'pre_get_posts', 'ddchi_set_blog_queries' );

/**
 * Display recommended plugins with the TGM class
 */
function ddchi_register_required_plugins() {
	$plugins = array(
		// The recommended WordPress.org plugins.
		array(
			'name'      => __( 'Elementor Page Builder', 'ddchi' ),
			'slug'      => 'elementor',
			'required'  => false,
		),
		array(
			'name'      => __( 'WooCommerce', 'ddchi' ),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => __( 'Breadcrumb NavXT', 'ddchi' ),
			'slug'      => 'breadcrumb-navxt',
			'required'  => false,
		),
		array(
			'name'      => __( 'Meta Slider', 'ddchi' ),
			'slug'      => 'ml-slider',
			'required'  => false,
		)
	);
	$config = array(
		'id'           => 'ddchi',
		'menu'         => 'tgmpa-install-plugins',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'ddchi_register_required_plugins' );

/**
 * Register a custom Post Categories ID column
 */
function ddchi_edit_cat_columns( $ddchi_cat_columns ) {
    $ddchi_cat_in = array( 'cat_id' => 'Category ID <span class="cat_id_note">For the Default Slider</span>' );
    $ddchi_cat_columns = ddchi_cat_columns_array_push_after( $ddchi_cat_columns, $ddchi_cat_in, 0 );
    return $ddchi_cat_columns;
}
add_filter( 'manage_edit-category_columns', 'ddchi_edit_cat_columns' );

/**
 * Print the ID column
 */
function ddchi_cat_custom_columns( $value, $name, $cat_id ) {
    if( 'cat_id' == $name )
        echo $cat_id;
}
add_filter( 'manage_category_custom_column', 'ddchi_cat_custom_columns', 10, 3 );

/**
 * Insert an element at the beggining of the array
 */
function ddchi_cat_columns_array_push_after( $src, $ddchi_cat_in, $pos ) {
    if ( is_int( $pos ) ) {
        $R = array_merge( array_slice( $src, 0, $pos + 1 ), $ddchi_cat_in, array_slice( $src, $pos + 1 ) );
    } else {
        foreach ( $src as $k => $v ) {
            $R[$k] = $v;
            if ( $k == $pos )
                $R = array_merge( $R, $ddchi_cat_in );
        }
    }
    return $R;
}

/**
 * Function to remove Category pre-title text
 */
function ddchi_cat_title_remove_pretext( $ddchi_cat_title ) {
	if ( is_category() ) {
        $ddchi_cat_title = the_archive_title( '', false );
    } elseif ( is_post_type_archive() ) {
		$ddchi_cat_title = post_type_archive_title( '', false );
    } elseif ( is_tag() ) {
        $ddchi_cat_title = the_archive_title( '', false );
    } elseif ( is_author() ) {
        $ddchi_cat_title = '<span class="vcard">' . get_the_author() . '</span>' ;
    }
    return $ddchi_cat_title;
}
if ( get_theme_mod( 'ddchi-remove-cat-pre-title' ) ) :
	add_filter( 'get_the_archive_title', 'ddchi_cat_title_remove_pretext' );
endif;

/**
 * Insert an element at the beggining of the array
 */
function ddchi_add_author_info_box( $content ) {
	global $post;

	if ( is_singular( 'post' ) && isset( $post->post_author ) ) {
		$display_name = get_the_author_meta( 'display_name', $post->post_author );

		if ( empty( $display_name ) )
			$display_name = get_the_author_meta( 'nickname', $post->post_author );
			$user_description = get_the_author_meta( 'user_description', $post->post_author );
			$user_website = get_the_author_meta( 'url', $post->post_author );
			$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author ) );

		if ( ! empty( $display_name ) )
			$author_details = '<p class="author_name">Author: ' . $display_name . '</p>';

		if ( ! empty( $user_description ) )
			$author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta( 'user_email' ) , 90 ) . nl2br( $user_description ). '</p>';
			$author_details .= '<p class="author_links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>';

		if ( ! empty( $user_website ) ) {
			$author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';
		} else {
			$author_details .= '</p>';
		}

		// Pass all this info to post content
		$content = $content . '<div class="clearboth"></div><footer class="author_bio_section" >' . $author_details . '</footer>';
	}

	return $content;
}
if ( get_theme_mod( 'ddchi-single-author-block' ) ) :
	add_action( 'the_content', 'ddchi_add_author_info_box' );
	remove_filter( 'pre_user_description', 'wp_filter_kses' );
endif;
