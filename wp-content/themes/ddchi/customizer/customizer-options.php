<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Ddchi
 */

function customizer_library_ddchi_options() {

	$primary_color = '#ec6b5f';
	$secondary_color = '#bc2b2b';

	$body_font_color = '#3C3C3C';
	$heading_font_color = '#1d1d1d';

    $slider_bg_color = '#f6f6f6';

	// Stores all the controls that will be added
	$options = array();
    
	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();
    
	// Header Image
    $section = 'title_tagline';
    
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Site Identity', 'ddchi' ),
        'priority' => '10',
        'description' => 'Change/edit the <a href="#ddchi-panel-website-section-header" rel="tc-section">Header</a> & <a href="#ddchi-panel-website-section-footer" rel="tc-section">Footer</a> Layouts<br />Change/edit <a href="#ddchi-panel-layout-colors" rel="tc-panel">Theme Colors</a><br />Add a <a href="#ddchi-panel-website-section-slider" rel="tc-section">Home Page Slider</a><br />Change/edit the <a href="#ddchi-panel-website-section-blog-list" rel="tc-section">Blog Layout</a><br />Add/edit <a href="#ddchi-panel-website-section-single-page" rel="tc-section">Pages Featured Image</a><br />Add/edit <a href="#ddchi-panel-website-section-blog-single" rel="tc-section">Single Posts featured image</a><br />Add <a href="#ddchi-section-social" rel="tc-section">Social Links</a> to your site'
    );
    
    $options['ddchi-logo-max-width'] = array(
        'id' => 'ddchi-logo-max-width',
        'label'   => __( 'Set a max-width for the logo', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'description' => __( 'This only applies if a logo image is uploaded', 'ddchi' ),
    );
    
    $options['ddchi-set-logo-padding-top'] = array(
        'id' => 'ddchi-set-logo-padding-top',
        'label'   => __( 'Logo Padding Top', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 20
    );
    $options['ddchi-set-logo-padding-bottom'] = array(
        'id' => 'ddchi-set-logo-padding-bottom',
        'label'   => __( 'Logo Padding Bottom', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 30
    );

    $panel = 'ddchi-panel-website';

    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Ddchi Settings', 'ddchi' ),
        'priority' => '30'
    );

    $section = 'ddchi-panel-website-section-website'; // --------------------------------- Website Layout Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Layout Settings', 'ddchi' ),
        'priority' => '10',
        'description' => 'Change/edit the <a href="#ddchi-panel-website-section-header" rel="tc-section">Header</a> & <a href="#ddchi-panel-website-section-footer" rel="tc-section">Footer</a> Layouts<br />Change/edit <a href="#ddchi-panel-layout-colors" rel="tc-panel">Theme Colors</a><br />Add a <a href="#ddchi-panel-website-section-slider" rel="tc-section">Home Page Slider</a><br />Change/edit the <a href="#ddchi-panel-website-section-blog-list" rel="tc-section">Blog Layout</a><br />Add/edit <a href="#ddchi-panel-website-section-single-page" rel="tc-section">Pages Featured Image</a><br />Add/edit <a href="#ddchi-panel-website-section-blog-single" rel="tc-section">Single Posts featured image</a><br />Add <a href="#ddchi-section-social" rel="tc-section">Social Links</a> to your site',
        'panel' => $panel
    );
    
    $options['ddchi-turn-on-snow'] = array(
        'id' => 'ddchi-turn-on-snow',
        'label'   => __( 'Turn on Background Snow', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
        'description' => __( 'This animation might not work in the Customizer', 'ddchi' )
    );
    $options['ddchi-remove-round-corners'] = array(
        'id' => 'ddchi-remove-round-corners',
        'label'   => __( 'Remove Site Rounded Corners', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    
    $options['ddchi-set-content-padding-top'] = array(
        'id' => 'ddchi-set-content-padding-top',
        'label'   => __( 'Content Padding Top', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 30
    );
    $options['ddchi-set-content-padding-bottom'] = array(
        'id' => 'ddchi-set-content-padding-bottom',
        'label'   => __( 'Content Padding Bottom', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 30
    );
    $options['ddchi-upsell-layout'] = array(
        'id' => 'ddchi-upsell-layout',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Set custom website Conatiner width<br />- Set custom Sidebar width', 'ddchi' )
    );
    // ---------------------------------------------------------------------------- Website Layout Settings

    $section = 'ddchi-panel-website-section-header'; // ---------------------------------- Header Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'ddchi' ),
        'priority' => '20',
        'description' => 'Change/edit the <a href="#ddchi-panel-layout-colors-section-header" rel="tc-section">Header Colors</a><br />Add/Edit <a href="#ddchi-panel-text-section-header" rel="tc-section">header Text</a><br />',
        'panel' => $panel
    );
    
    $options['ddchi-set-header-remove-topbar'] = array(
        'id' => 'ddchi-set-header-remove-topbar',
        'label'   => __( 'Remove Top Bar', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['ddchi-set-topbar-switch'] = array(
        'id' => 'ddchi-set-topbar-switch',
        'label'   => __( 'Switch Top Bar', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['ddchi-set-header-align-right'] = array(
        'id' => 'ddchi-set-header-align-right',
        'label'   => __( 'Switch Header Main', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $choices = array(
        'ddchi-header-layout-default' => __( 'Default Header Layout', 'ddchi' ),
        'ddchi-header-layout-one' => __( 'Centered Layout', 'ddchi' ),
        'ddchi-header-layout-two' => __( 'Standard Layout', 'ddchi' ),
        'ddchi-header-layout-three' => __( 'Standard Info Layout', 'ddchi' ),
        'ddchi-header-layout-four' => __( 'Standard Big Layout', 'ddchi' ),
        'ddchi-header-layout-five' => __( 'Standard Social Layout', 'ddchi' ),
        'ddchi-header-layout-six' => __( 'Logo Under Layout', 'ddchi' )
    );
    $options['ddchi-set-header-layout'] = array(
        'id' => 'ddchi-set-header-layout',
        'label'   => __( 'Header Layout', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-header-layout-default'
    );
    $options['ddchi-set-header-v-align'] = array(
        'id' => 'ddchi-set-header-v-align',
        'label'   => __( 'Vertically Align Navigation', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['ddchi-set-header-nav-center-align'] = array(
        'id' => 'ddchi-set-header-nav-center-align',
        'label'   => __( 'Center Align Navigation', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['ddchi-header-split-six'] = array(
        'id' => 'ddchi-header-split-six',
        'label'   => __( 'Split Navigation & Cart', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $choices = array(
        'ddchi-navigation-style-blocks' => __( 'Navigation Style Blocks', 'ddchi' ),
        'ddchi-navigation-style-underline' => __( 'Navigation Style Underline', 'ddchi' ),
        'ddchi-navigation-style-plain' => __( 'Navigation Style Plain', 'ddchi' )
    );
    $options['ddchi-set-navigation-style'] = array(
        'id' => 'ddchi-set-navigation-style',
        'label'   => __( 'Navigation Styling', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-navigation-style-underline'
    );
    $options['ddchi-remove-nav-shadow'] = array(
        'id' => 'ddchi-remove-nav-shadow',
        'label'   => __( 'Remove Navigation Shadow', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );

    $options['ddchi-remove-search'] = array(
        'id' => 'ddchi-remove-search',
        'label'   => __( 'Remove Search', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $choices = array(
        'ddchi-search-icon-angle' => __( 'Angle Icon', 'ddchi' ),
        'ddchi-search-icon-magnify' => __( 'Magnify Icon', 'ddchi' ),
        'ddchi-search-icon-caret' => __( 'Caret Icon', 'ddchi' ),
        'ddchi-search-icon-arrow' => __( 'Arrow Icon', 'ddchi' )
    );
    $options['ddchi-set-search-icon'] = array(
        'id' => 'ddchi-set-search-icon',
        'label'   => __( 'Search Icon', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-search-icon-angle'
    );
    $options['ddchi-upsell-header'] = array(
        'id' => 'ddchi-upsell-header',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Sticky Navigation<br />- Remove WooCommerce Cart', 'ddchi' )
    );
    // --------------------------------------------------------------------------------------- Header Settings

    $section = 'ddchi-panel-website-section-slider'; // ------------------------------------- Slider Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Home Page Slider', 'ddchi' ),
        'priority' => '30',
        'description' => 'Change/edit the <a href="#ddchi-panel-layout-colors-section-slider" rel="tc-section">Slider Colors</a>',
        'panel' => $panel
    );

    $choices = array(
        'ddchi-slider-default' => __( 'Default Slider', 'ddchi' ),
        'ddchi-shortcode-slider' => __( 'Slider Shortcode', 'ddchi' ),
        'ddchi-no-slider' => __( 'None', 'ddchi' )
    );
    $options['ddchi-slider-type'] = array(
        'id' => 'ddchi-slider-type',
        'label'   => __( 'Choose a Slider', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-no-slider'
    );
    $options['ddchi-slider-cats'] = array(
        'id' => 'ddchi-slider-cats',
        'label'   => __( 'Slider Categories', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you want to display in the slider. Eg: "13,17,19" (no spaces and only comma\'s)<br /><br />Get the ID at <b>Posts -> Categories</b>.<br /><br />Or <a href="https://sourceweb.com/documentation/setting-up-the-default-slider/" target="_blank"><b>See more instructions here</b></a>', 'ddchi' )
    );
    $options['ddchi-slider-shortcode'] = array(
        'id' => 'ddchi-slider-shortcode',
        'label'   => __( 'Slider Shortcode', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the slider shortcode', 'ddchi' )
    );
    $options['ddchi-slider-style'] = array(
        'id' => 'ddchi-slider-style',
        'label'   => __( 'Remove Slider Border', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['ddchi-slider-style-spacing'] = array(
        'id' => 'ddchi-slider-style-spacing',
        'label'   => __( 'Slider Spacing', 'ddchi' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 150,
            'step'  => 1,
        ),
        'default' => 25
    );
    $choices = array(
        'ddchi-slider-size-small' => __( 'Small Slider', 'ddchi' ),
        'ddchi-slider-size-medium' => __( 'Medium Slider', 'ddchi' ),
        'ddchi-slider-size-large' => __( 'Large Slider', 'ddchi' )
    );
    $options['ddchi-slider-size'] = array(
        'id' => 'ddchi-slider-size',
        'label'   => __( 'Slider Size', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-slider-size-medium'
    );
    $choices = array(
        'crossfade' => __( 'Cross Fade', 'ddchi' ),
        'cover-fade' => __( 'Cover Fade', 'ddchi' ),
        'uncover-fade' => __( 'Uncover Fade', 'ddchi' ),
        'cover' => __( 'Cover', 'ddchi' ),
        'scroll' => __( 'Scroll', 'ddchi' )
    );
    $options['ddchi-slider-remove-title'] = array(
        'id' => 'ddchi-slider-remove-title',
        'label'   => __( 'Remove Slider Title', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['ddchi-slider-auto-scroll'] = array(
        'id' => 'ddchi-slider-auto-scroll',
        'label'   => __( 'Stop Auto Scroll', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['ddchi-upsell-slider'] = array(
        'id' => 'ddchi-upsell-slider',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Link Slider Posts to Post/Custom URL<br />- Change Slider scroll effect<br />- Change slider direction<br />- Change/Edit Slider timing/duration', 'ddchi' )
    );
    // --------------------------------------------------------------------------------------- Slider Settings


    $section = 'ddchi-panel-website-section-single-page'; // -------------------------- Single Pages Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Pages', 'ddchi' ),
        'priority' => '40',
        'description' => 'Change/edit the <a href="#ddchi-panel-layout-colors-section-pages" rel="tc-section">Title Bar & Widget Title Colors</a>',
        'panel' => $panel
    );

    $options['ddchi-page-remove-titlebar'] = array(
        'id' => 'ddchi-page-remove-titlebar',
        'label'   => __( 'Remove All Page Titles', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    
    $options['ddchi-blog-widget-title-size'] = array(
        'id' => 'ddchi-blog-widget-title-size',
        'label'   => __( 'Sidebar Title Size', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 24,
    );
    $options['ddchi-blog-widget-title-centeralign'] = array(
        'id' => 'ddchi-blog-widget-title-centeralign',
        'label'   => __( 'Center Align Title', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'widget-title-style-plain' => __( 'Underlined Dots', 'ddchi' ),
        'widget-title-style-underline-dots' => __( 'Underlined Dashed', 'ddchi' ),
        'widget-title-style-underline-solid' => __( 'Underlined Solid', 'ddchi' ),
        'widget-title-style-underline-short' => __( 'Short Underline', 'ddchi' )
    );
    $options['ddchi-blog-widget-title-style'] = array(
        'id' => 'ddchi-blog-widget-title-style',
        'label'   => __( 'Widget Title Styling', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'widget-title-style-plain'
    );
    
    $choices = array(
        'ddchi-page-fimage-layout-none' => __( 'None', 'ddchi' ),
        'ddchi-page-fimage-layout-standard' => __( 'Standard', 'ddchi' ),
        'ddchi-page-fimage-layout-banner' => __( 'Page Banner', 'ddchi' )
    );
    $options['ddchi-page-fimage-layout'] = array(
        'id' => 'ddchi-page-fimage-layout',
        'label'   => __( 'Featured Image Layout', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-page-fimage-layout-none'
    );
    $choices = array(
        'ddchi-page-fimage-size-extra-small' => __( 'Extra Small Banner', 'ddchi' ),
        'ddchi-page-fimage-size-small' => __( 'Small Banner', 'ddchi' ),
        'ddchi-page-fimage-size-medium' => __( 'Medium Banner', 'ddchi' ),
        'ddchi-page-fimage-size-large' => __( 'Large Banner', 'ddchi' ),
        'ddchi-page-fimage-size-actual' => __( 'Use Proper Image', 'ddchi' )
    );
    $options['ddchi-page-fimage-size'] = array(
        'id' => 'ddchi-page-fimage-size',
        'label'   => __( 'Page Banner Size', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-page-fimage-size-medium'
    );
    // --------------------------------------------------------------------------------- Single Pages Settings

    $section = 'ddchi-panel-website-section-blog-list'; // ------------------------------- Blog List Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog List', 'ddchi' ),
        'priority' => '50',
        'panel' => $panel
    );

    $choices = array(
        'blog-left-layout' => __( 'Left Layout', 'ddchi' ),
        'blog-right-layout' => __( 'Right Layout', 'ddchi' ),
        'blog-alt-layout' => __( 'Alternate Layout', 'ddchi' ),
        'blog-top-layout' => __( 'Top Layout', 'ddchi' ),
        'blog-grid-layout' => __( 'Grid/Blocks Layout', 'ddchi' )
    );
    $options['ddchi-set-blog-layout'] = array(
        'id' => 'ddchi-set-blog-layout',
        'label'   => __( 'Blog Posts Layout', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'blog-left-layout'
    );
    $choices = array(
        'blog-style-plain' => __( 'Plain Styling', 'ddchi' ),
        'blog-style-block' => __( 'Block Styling', 'ddchi' )
    );
    $options['ddchi-set-blog-styling'] = array(
        'id' => 'ddchi-set-blog-styling',
        'label'   => __( 'Blog Styling', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'blog-style-plain'
    );
    $options['ddchi-blog-top-center'] = array(
        'id' => 'ddchi-blog-top-center',
        'label'   => __( 'Center Align Text', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['ddchi-blog-column-spacing'] = array(
        'id' => 'ddchi-blog-column-spacing',
        'label'   => __( 'Column Spacing', 'ddchi' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 40,
            'step'  => 1,
        ),
        'default' => 15
    );
    $options['ddchi-set-blog-cats'] = array(
        'id' => 'ddchi-set-blog-cats',
        'label'   => __( 'Exclude Blog Categories', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you\'d like to EXCLUDE from the Blog, enter only the ID\'s with a minus sign (-) before them, separated by a comma (,)<br />Eg: "-13, -17, -19"<br /><br />If you enter the ID\'s without the minus then it\'ll show ONLY posts in those categories.<br /><br />Get the ID at <b>Posts -> Categories</b>.', 'ddchi' )
    );
    $choices = array(
        'blog-display-full-text' => __( 'Full Text', 'ddchi' ),
        'blog-display-summary' => __( 'Summary', 'ddchi' )
    );
    $options['ddchi-article-content-display'] = array(
        'id' => 'ddchi-article-content-display',
        'label'   => __( 'For each article display:', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'blog-display-full-text'
    );
    $options['ddchi-article-content-word-count'] = array(
        'id' => 'ddchi-article-content-word-count',
        'label'   => __( 'Amount of words displayed', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 40
    );
    $options['ddchi-article-content-readmore'] = array(
        'id' => 'ddchi-article-content-readmore',
        'label'   => __( 'Read More Text', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'default' => '...Read More'
    );
    $options['ddchi-blog-list-remove-meta'] = array(
        'id' => 'ddchi-blog-list-remove-meta',
        'label'   => __( 'Remove Meta Info', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    
    $options['ddchi-remove-cat-pre-title'] = array(
        'id' => 'ddchi-remove-cat-pre-title',
        'label'   => __( 'Remove text before Archive Title', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'This will not update in the Customizer. Exit the Customizer to view the change', 'ddchi' ),
        'default' => 0,
    );
    $options['ddchi-upsell-blog-list'] = array(
        'id' => 'ddchi-upsell-blog-list',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Change Blog Grid Layout Columns<br />- Set Blog, Archives & Post pages to Left Sidebar<br />- Set Blog, Archives & Post pages to Full Width', 'ddchi' )
    );
    // ----------------------------------------------------------------------------------- Blog List Settings

    $section = 'ddchi-panel-website-section-blog-single'; // -------------------------- Blog Single Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog Single Page', 'ddchi' ),
        'priority' => '60',
        'panel' => $panel
    );
    $options['ddchi-blog-single-remove-meta'] = array(
        'id' => 'ddchi-blog-single-remove-meta',
        'label'   => __( 'Remove Meta Info', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['ddchi-blog-single-remove-cats'] = array(
        'id' => 'ddchi-blog-single-remove-cats',
        'label'   => __( 'Remove Categories/Tags list', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['ddchi-single-author-block'] = array(
        'id' => 'ddchi-single-author-block',
        'label'   => __( 'Add Post Author Block', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'This will not update in the Customizer. Exit the Customizer to view the change on the blog post pages', 'ddchi' ),
        'default' => 0,
    );
    $choices = array(
        'ddchi-single-page-fimage-layout-none' => __( 'None', 'ddchi' ),
        'ddchi-single-page-fimage-layout-standard' => __( 'Standard', 'ddchi' ),
        'ddchi-single-page-fimage-layout-banner' => __( 'Page Banner', 'ddchi' )
    );
    $options['ddchi-single-page-fimage-layout'] = array(
        'id' => 'ddchi-single-page-fimage-layout',
        'label'   => __( 'Featured Image Layout', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-single-page-fimage-layout-none'
    );
    $choices = array(
        'ddchi-single-page-fimage-size-extra-small' => __( 'Extra Small Banner', 'ddchi' ),
        'ddchi-single-page-fimage-size-small' => __( 'Small Banner', 'ddchi' ),
        'ddchi-single-page-fimage-size-medium' => __( 'Medium Banner', 'ddchi' ),
        'ddchi-single-page-fimage-size-large' => __( 'Large Banner', 'ddchi' ),
        'ddchi-single-page-fimage-size-actual' => __( 'Use Proper Image', 'ddchi' )
    );
    $options['ddchi-single-page-fimage-size'] = array(
        'id' => 'ddchi-single-page-fimage-size',
        'label'   => __( 'Page Banner Size', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-single-page-fimage-size-medium'
    );
    // ---------------------------------------------------------------------------------- Blog Single Settings


    // WooCommerce style Layout
    if ( ddchi_is_woocommerce_activated() ) :

        $section = 'ddchi-panel-woocommerce-section-website'; // ---------------- WooCommerce Layout Settings

        $sections[] = array(
            'id' => $section,
            'title' => __( 'WooCommerce', 'ddchi' ),
            'priority' => '70',
            'panel' => $panel
        );
        
        $choices = array(
            'fa-shopping-cart' => __( 'Shopping Cart', 'ddchi' ),
            'fa-shopping-basket' => __( 'Shopping Basket', 'ddchi' ),
            'fa-shopping-bag' => __( 'Shopping Bag', 'ddchi' )
        );
        $options['ddchi-cart-icon'] = array(
            'id' => 'ddchi-cart-icon',
            'label'   => __( 'Cart Icon', 'ddchi' ),
            'section' => $section,
            'type'    => 'select',
            'description' => __( 'Due to the AJAX, This will only change when you open the site again in a new tab', 'ddchi' ),
            'choices' => $choices,
            'default' => 'fa-shopping-cart'
        );
        $options['ddchi-shop-remove-border'] = array(
            'id' => 'ddchi-shop-remove-border',
            'label'   => __( 'Remove Product list hover border', 'ddchi' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        
        $options['ddchi-upsell-woocommerce'] = array(
            'id' => 'ddchi-upsell-woocommerce',
            'section' => $section,
            'type'    => 'upsell',
            'description' => __( '<b>Premium Extra Features:</b><br />- Set WC Product Columns<br />- Set WC Products Per Page<br />- Set Shop, Archives & Product pages to Left Sidebar<br />- Set Shop, Archives & Product pages to Full Width', 'ddchi' )
        );

    endif;
    // -------------------------------------------------------------------------- WooCommerce Layout Settings

    $section = 'ddchi-panel-website-section-footer'; // ------------------------------------ Footer Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'ddchi' ),
        'priority' => '80',
        'description' => 'Change/edit the <a href="#ddchi-panel-layout-colors-section-footer" rel="tc-section">Footer Colors</a><br />Add/Edit <a href="#ddchi-panel-text-section-footer" rel="tc-section">Footer Text</a><br />',
        'panel' => $panel
    );
    
    $options['ddchi-footer-bottom-space'] = array(
        'id' => 'ddchi-footer-bottom-space',
        'label'   => __( 'Remove Footer Bottom Spacing', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'ddchi-footer-layout-standard' => __( 'Standard Layout', 'ddchi' ),
        'ddchi-footer-layout-social' => __( 'Social Layout', 'ddchi' ),
        'ddchi-footer-layout-none' => __( 'None', 'ddchi' )
    );
    $options['ddchi-footer-layout'] = array(
        'id' => 'ddchi-footer-layout',
        'label'   => __( 'Footer Layout', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'ddchi-footer-layout-social'
    );
    $options['ddchi-footer-standard-note'] = array(
        'id' => 'ddchi-footer-standard-note',
        'section' => $section,
        'type'    => 'note',
        'description' => __( 'The Standard Footer is divided into columns by the amount of widgets that are added under<br /><b><i>Dashboard -> Appearance -> Widgets</i></b>', 'ddchi' )
    );
    $options['ddchi-footer-social-note'] = array(
        'id' => 'ddchi-footer-social-note',
        'section' => $section,
        'type'    => 'note',
        'description' => __( 'Add your wanted <a href="#ddchi-section-social" rel="tc-section">Social Links</a>', 'ddchi' )
    );
    $options['ddchi-upsell-footer'] = array(
        'id' => 'ddchi-upsell-footer',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Advanced Custom Footer layout<br />- Remove/Edit Site Attribution text<br />- Remove the Footer Bottom Bar<br />- Remove Social Links', 'ddchi' )
    );
    // -------------------------------------------------------------------------------------- Footer Settings

    $panel = 'ddchi-panel-text';

    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Ddchi Text', 'ddchi' ),
        'priority' => '40'
    );

    $section = 'ddchi-panel-text-section-header'; // ------------------------------------------- Header Text

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'ddchi' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['ddchi-set-text-header-phone'] = array(
        'id' => 'ddchi-set-text-header-phone',
        'label'   => __( 'Phone Number', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Call Us: +2782 444 YEAH', 'ddchi' )
    );
    $options['ddchi-set-text-header-add'] = array(
        'id' => 'ddchi-set-text-header-add',
        'label'   => __( 'Address', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'ddchi' )
    );
    $options['ddchi-upsell-header-text'] = array(
        'id' => 'ddchi-upsell-header-text',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Add extra Custom Text and Icon', 'ddchi' )
    );
    // ----------------------------------------------------------------------------------------- Header Text

    $section = 'ddchi-panel-text-section-navigation'; // ---------------------------------- Navigation Text

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Navigation', 'ddchi' ),
        'priority' => '20',
        'panel' => $panel
    );

    // Navigation Text
    $options['ddchi-set-text-mobile-nav'] = array(
        'id' => 'ddchi-set-text-mobile-nav',
        'label'   => __( 'Mobile Navigation Button', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'MENU', 'ddchi' )
    );
    // ------------------------------------------------------------------------------------ Navigation Text

    $section = 'ddchi-panel-text-section-error'; // ---------------------------------- Navigation Text

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Error 404/No Results', 'ddchi' ),
        'priority' => '30',
        'panel' => $panel
    );

    $options['ddchi-website-error-head'] = array(
        'id' => 'ddchi-website-error-head',
        'label'   => __( '404 Error Page Heading', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Oops! <span>404</span>', 'ddchi'),
        'description' => __( 'Enter the heading for the 404 Error page', 'ddchi' )
    );
    $options['ddchi-website-error-msg'] = array(
        'id' => 'ddchi-website-error-msg',
        'label'   => __( 'Error 404 Message', 'ddchi' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'It looks like that page does not exist. <br />Return home or try a search', 'ddchi'),
        'description' => __( 'Enter the default text on the 404 error page (Page not found)', 'ddchi' )
    );

    $options['ddchi-website-nosearch-head'] = array(
        'id' => 'ddchi-website-nosearch-head',
        'label'   => __( 'No Search Results Heading', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Nothing Found', 'ddchi'),
        'description' => __( 'Enter the heading for when no search results are found', 'ddchi' )
    );
    $options['ddchi-website-nosearch-msg'] = array(
        'id' => 'ddchi-website-nosearch-msg',
        'label'   => __( 'No Search Results Message', 'ddchi' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ddchi'),
        'description' => __( 'Enter the default text for when no search results are found', 'ddchi' )
    );
    // ------------------------------------------------------------------------------------ Navigation Text

    $section = 'ddchi-panel-text-section-footer'; // ---------------------------------- Footer Text

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'ddchi' ),
        'priority' => '40',
        'panel' => $panel
    );
    $options['ddchi-website-footer-add'] = array(
        'id' => 'ddchi-website-footer-add',
        'label'   => __( 'Address', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'ddchi' )
    );
    $options['ddchi-website-footer-icon'] = array(
        'id' => 'ddchi-website-footer-icon',
        'label'   => __( 'Custom Icon', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Uses <a href="http://fontawesome.io/cheatsheet/" target="_blank">Font Awesome</a> class<br />Eg: fa-map-marker', 'ddchi' ),
        'default' => __( 'fa-map-marker', 'ddchi' )
    );
    $options['ddchi-upsell-footer-text'] = array(
        'id' => 'ddchi-upsell-footer-text',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Remove/Edit Site Attribution text<br />- Add Custom Text & Icon to Bottom Bar Left<br />- Add Custom Text & Icon to Bottom Bar Right', 'ddchi' )
    );
    // ------------------------------------------------------------------------------------ Footer Text


    $panel = 'ddchi-panel-font-options';

    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Ddchi Fonts', 'ddchi' ),
        'priority' => '50'
    );

    $section = 'ddchi-panel-font-section-site'; // ----------------------------------------- Default Fonts
    $font_choices = customizer_library_get_font_choices();

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Default Fonts', 'ddchi' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['ddchi-body-font'] = array(
        'id' => 'ddchi-body-font',
        'label'   => __( 'Body Font', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Open Sans'
    );
    $options['ddchi-body-font-color'] = array(
        'id' => 'ddchi-body-font-color',
        'label'   => __( 'Body Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $body_font_color,
    );
    $options['ddchi-heading-font'] = array(
        'id' => 'ddchi-heading-font',
        'label'   => __( 'Heading Font', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Indie Flower'
    );
    $options['ddchi-heading-font-color'] = array(
        'id' => 'ddchi-heading-font-color',
        'label'   => __( 'Heading Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $heading_font_color,
    );
    // -------------------------------------------------------------------------------------- Default Fonts

    $section = 'ddchi-panel-font-section-titles'; // ----------------------------------------- Title Fonts
    $font_choices = customizer_library_get_font_choices();

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Site Title & Description', 'ddchi' ),
        'priority' => '20',
        'panel' => $panel
    );

    $options['ddchi-title-font'] = array(
        'id' => 'ddchi-title-font',
        'label'   => __( 'Site Title Font', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Indie Flower'
    );
    $options['ddchi-title-font-size'] = array(
        'id' => 'ddchi-title-font-size',
        'label'   => __( 'Site Title Size', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 64,
    );
    $options['ddchi-tagline-font'] = array(
        'id' => 'ddchi-tagline-font',
        'label'   => __( 'Site Tagline Font', 'ddchi' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Roboto'
    );
    $options['ddchi-tagline-font-size'] = array(
        'id' => 'ddchi-tagline-font-size',
        'label'   => __( 'Site Tagline Size', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 13,
    );
    $options['ddchi-title-bottom-margin'] = array(
        'id' => 'ddchi-title-bottom-margin',
        'label'   => __( 'Site Title Bottom Margin', 'ddchi' ),
        'section' => $section,
        'type'    => 'number',
        'description' => __( 'This will set the space between the site title and the site tagline', 'ddchi' ),
        'default' => 0,
    );
    // ---------------------------------------------------------------------------------------- Title Fonts


    $panel = 'ddchi-panel-layout-colors';

    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Ddchi Colors', 'ddchi' ),
        'priority' => '40'
    );
    
    // --------------------------------------------------------------- Colors
    $section = 'colors';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Default Colors', 'ddchi' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['ddchi-boxed-bg-color'] = array(
        'id' => 'ddchi-boxed-bg-color',
        'label'   => __( 'Site Boxed Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['ddchi-primary-color'] = array(
        'id' => 'ddchi-primary-color',
        'label'   => __( 'Primary Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['ddchi-secondary-color'] = array(
        'id' => 'ddchi-secondary-color',
        'label'   => __( 'Secondary Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    // --------------------------------------------------------------- Colors

    $section = 'ddchi-panel-layout-colors-section-header'; // ------------------------------ Header Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'ddchi' ),
        'priority' => '20',
        'panel' => $panel
    );

    $options['ddchi-header-bg-color'] = array(
        'id' => 'ddchi-header-bg-color',
        'label'   => __( 'Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['ddchi-header-font-color'] = array(
        'id' => 'ddchi-header-font-color',
        'label'   => __( 'Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#8a8a8a',
    );

    $options['ddchi-topbar-bg-color'] = array(
        'id' => 'ddchi-topbar-bg-color',
        'label'   => __( 'Top Bar Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#3C3C3C',
    );
    $options['ddchi-topbar-font-color'] = array(
        'id' => 'ddchi-topbar-font-color',
        'label'   => __( 'Top Bar Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#f2f2f2',
    );
    // -------------------------------------------------------------------------------------- Header Colors

    $section = 'ddchi-panel-layout-colors-section-nav'; // -------------------------- Navigation Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Navigation', 'ddchi' ),
        'priority' => '30',
        'panel' => $panel
    );

    $options['ddchi-nav-bg-color'] = array(
        'id' => 'ddchi-nav-bg-color',
        'label'   => __( 'Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#157299',
    );
    $options['ddchi-nav-font-color'] = array(
        'id' => 'ddchi-nav-font-color',
        'label'   => __( 'Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['ddchi-nav-drop-bg-color'] = array(
        'id' => 'ddchi-nav-drop-bg-color',
        'label'   => __( 'Drop Down Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['ddchi-nav-drop-font-color'] = array(
        'id' => 'ddchi-nav-drop-font-color',
        'label'   => __( 'Drop Down Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#1d1d1d',
    );
    $options['ddchi-nav-font-hover-color'] = array(
        'id' => 'ddchi-nav-font-hover-color',
        'label'   => __( 'Hover/Selected Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['ddchi-nav-font-hover-selected-color'] = array(
        'id' => 'ddchi-nav-font-hover-selected-color',
        'label'   => __( 'Hover/Selected Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    // ---------------------------------------------------------------------------------- Navigation Colors

    $section = 'ddchi-panel-layout-colors-section-slider'; // ------------------------------ Slider Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Home Page Slider', 'ddchi' ),
        'priority' => '40',
        'panel' => $panel
    );

    $options['ddchi-slider-bg-color'] = array(
        'id' => 'ddchi-slider-bg-color',
        'label'   => __( 'Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#f6f6f6',
    );

    $options['ddchi-slider-block-bg-color'] = array(
        'id' => 'ddchi-slider-block-bg-color',
        'label'   => __( 'Block Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['ddchi-slider-block-font-color'] = array(
        'id' => 'ddchi-slider-block-font-color',
        'label'   => __( 'Block Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#333333',
    );
    $options['ddchi-slider-block-opacity'] = array(
        'id' => 'ddchi-slider-block-opacity',
        'label'   => __( 'Block Opacity', 'ddchi' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 99,
            'step'  => 1,
        ),
        'default' => 50
    );
    // -------------------------------------------------------------------------------------- Slider Colors

    $section = 'ddchi-panel-layout-colors-section-pages'; // ------------------------------ Titlebar Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Pages', 'ddchi' ),
        'priority' => '50',
        'panel' => $panel
    );

    $options['ddchi-page-titlebar-bgcolor'] = array(
        'id' => 'ddchi-page-titlebar-bgcolor',
        'label'   => __( 'Title Bar Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#f6f6f6',
    );
    $options['ddchi-page-titlebar-fontcolor'] = array(
        'id' => 'ddchi-page-titlebar-fontcolor',
        'label'   => __( 'Title Bar Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#1d1d1d',
    );
    $options['ddchi-page-widgets-title-color'] = array(
        'id' => 'ddchi-page-widgets-title-color',
        'label'   => __( 'Sidebar Headings Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#1d1d1d',
    );
    // ------------------------------------------------------------------------------------- Titlebar Colors

    $section = 'ddchi-panel-layout-colors-section-footer'; // ------------------------------- Footer Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'ddchi' ),
        'priority' => '60',
        'panel' => $panel
    );

    $options['ddchi-footer-bg-color'] = array(
        'id' => 'ddchi-footer-bg-color',
        'label'   => __( 'Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['ddchi-footer-heading-font-color'] = array(
        'id' => 'ddchi-footer-heading-font-color',
        'label'   => __( 'Heading Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#000000',
    );
    $options['ddchi-footer-font-color'] = array(
        'id' => 'ddchi-footer-font-color',
        'label'   => __( 'Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#1d1d1d',
    );

    $options['ddchi-bottombar-bg-color'] = array(
        'id' => 'ddchi-bottombar-bg-color',
        'label'   => __( 'Bottom Bar Background Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#3C3C3C',
    );
    $options['ddchi-bottombar-font-color'] = array(
        'id' => 'ddchi-bottombar-font-color',
        'label'   => __( 'Bottom Bar Font Color', 'ddchi' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#f2f2f2',
    );
    // -------------------------------------------------------------------------------------- Footer Colors


    // ------------------------------------------------------- Social Options
    $section = 'ddchi-section-social';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Ddchi Social Links', 'ddchi' ),
        'priority' => '60'
    );

    $options['ddchi-social-email'] = array(
        'id' => 'ddchi-social-email',
        'label'   => __( 'Email Address', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['ddchi-social-skype'] = array(
        'id' => 'ddchi-social-skype',
        'label'   => __( 'Skype Name', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['ddchi-social-facebook'] = array(
        'id' => 'ddchi-social-facebook',
        'label'   => __( 'Facebook', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['ddchi-social-twitter'] = array(
        'id' => 'ddchi-social-twitter',
        'label'   => __( 'Twitter', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['ddchi-social-pinterest'] = array(
        'id' => 'ddchi-social-pinterest',
        'label'   => __( 'Pinterest', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['ddchi-social-etsy'] = array(
        'id' => 'ddchi-social-etsy',
        'label'   => __( 'Etsy', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['ddchi-social-medium'] = array(
        'id' => 'ddchi-social-medium',
        'label'   => __( 'Medium', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['ddchi-social-behance'] = array(
        'id' => 'ddchi-social-behance',
        'label'   => __( 'Behance', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['ddchi-social-tumblr'] = array(
        'id' => 'ddchi-social-tumblr',
        'label'   => __( 'Tumblr', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['ddchi-social-flickr'] = array(
        'id' => 'ddchi-social-flickr',
        'label'   => __( 'Flickr', 'ddchi' ),
        'section' => $section,
        'type'    => 'text',
    );
    
    $options['ddchi-upsell-social'] = array(
        'id' => 'ddchi-upsell-social',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Add over 20 different Social Links<br />- Add your own custom social icon & url', 'ddchi' )
    );
    // ------------------------------------------------------- Social Options
    
    $section = 'background_image';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Background Image', 'ddchi' )
    );

    $options['ddchi-remove-body-bg-image'] = array(
        'id' => 'ddchi-remove-body-bg-image',
        'label'   => __( 'Remove Background Image', 'ddchi' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_ddchi_options' );
