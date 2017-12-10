<?php
/**
 * MogulTheme functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 */

/**
 * MogulTheme only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Header image.
 */
function mogultheme_header_image( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'mogultheme_header_image', 10, 3 );


/**
 * Register widget area.
 */
function mogultheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'mogultheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog.', 'mogultheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'mogultheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'mogultheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="footer-block-title">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'mogultheme' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'mogultheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="footer-block-title">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'mogultheme' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'mogultheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="footer-block-title">',
		'after_title'   => '</p>',
	) );	

}
add_action( 'widgets_init', 'mogultheme_widgets_init' );

function mogultheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 */
	load_theme_textdomain( 'mogultheme' );


	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 1155,
		'height'      => 608,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * https://codex.wordpress.org/Custom_Headers
	 */
	$args = array(
		'flex-width'    => true,
		'width'         => 1920,
		'flex-height'    => true,
		'height'        => 670,
		'default-image' => get_template_directory_uri() . '/img/main-header-bg.jpg',
	);
	add_theme_support( 'custom-header', $args );

	/**
	 * Register menu.
	 */
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'mogultheme' ),
	) );	

}
add_action( 'after_setup_theme', 'mogultheme_setup' );


/**
 * Enqueue scripts and styles.
 */
function mogultheme_scripts() {

    //Colorbox stylesheet
    wp_enqueue_style( 'colorbox', get_template_directory_uri() . 
    '/colorbox/colorbox.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'mogultheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/assets/javascripts/bootstrap.min.js', array('jquery'), '3.7.7', true );
     
    //Colorbox jQuery plugin js file
    wp_enqueue_script( 'colorbox', get_template_directory_uri() . 
    '/colorbox/jquery.colorbox-min.js', array( 'jquery'   ), '', true );
    
    //Add main.js file
    wp_enqueue_script( 'themeslug-script', get_template_directory_uri() . 
    '/js/script.js', array( 'colorbox' ), '', true );
      
}
add_action( 'wp_enqueue_scripts', 'mogultheme_scripts' );


function mogultheme_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'theme_options', array(
		'title'    => __( 'Theme Options', 'mogultheme' ),
		'priority' => 130, // Before Additional CSS.
	) );
/*
	$wp_customize->add_setting( 'page_layout', array(
		'default'           => 'two-column',
		'sanitize_callback' => 'mogultheme_sanitize_page_layout',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'page_layout', array(
		'label'       => __( 'Page Layout', 'mogultheme' ),
		'section'     => 'theme_options',
		'type'        => 'radio',
		//'active_callback' => 'mogultheme_is_view_with_layout_option',
	) );

	//Filter number of front page sections in Twenty Seventeen.

	$num_sections = apply_filters( 'mogultheme_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			// translators: %d is the front page section number 
			'label'          => sprintf( __( 'Front Page Section %d Content', 'mogultheme' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'mogultheme' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'mogultheme_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'mogultheme_front_page_section',
			'container_inclusive' => true,
		) );
	}
*/


				$wp_customize->add_setting( 'mogultheme_textarea_home1', array(
				  'capability' => 'edit_theme_options',
				  'default' => 'Lorem Ipsum Dolor Sit amet',
				  'sanitize_callback' => 'sanitize_text',
				) );

				$wp_customize->add_control( 'mogultheme_textarea_home1', array(
				  'type' => 'textarea',
				  'section'        => 'theme_options',
				  'label' => __( 'Custom Text Area 1' ),
				  'description' => __( 'This is a custom textarea.' ),
				) );
				$wp_customize->add_setting( 'mogultheme_textarea_home2', array(
				  'capability' => 'edit_theme_options',
				  'default' => 'Lorem Ipsum Dolor Sit amet',
				  'sanitize_callback' => 'sanitize_text',
				) );

				$wp_customize->add_control( 'mogultheme_textarea_home2', array(
				  'type' => 'textarea',
				  'section'        => 'theme_options',
				  'label' => __( 'Custom Text Area 2' ),
				  'description' => __( 'This is a custom textarea.' ),
				) );				

				$wp_customize->add_setting( 'mogultheme_textarea_contacts', array(
				  'capability' => 'edit_theme_options',
				  'default' => 'Lorem Ipsum Dolor Sit amet',
				  'sanitize_callback' => 'sanitize_text',
				) );

				$wp_customize->add_control( 'mogultheme_textarea_contacts', array(
				  'type' => 'textarea',
				  'section'        => 'theme_options',
				  'label' => __( 'Custom Text Area 2' ),
				  'description' => __( 'This is a custom textarea.' ),
				) );




 	// Sanitize text
	function sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}				

}

add_action( 'customize_register', 'mogultheme_customize_register' );

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function mogultheme_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}
  

/**
 * Used by hook: 'customize_preview_init'
 * 
 * @see add_action('customize_preview_init',$func)
 */
function mogultheme_customizer_live_preview()
{
	wp_enqueue_script( 
		  'mogultheme-themecustomizer',			//Give the script an ID
		  get_template_directory_uri().'/js/theme-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',						//Define a version (optional) 
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'mogultheme_customizer_live_preview' );