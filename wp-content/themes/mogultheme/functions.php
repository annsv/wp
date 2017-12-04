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
}
add_action( 'widgets_init', 'mogultheme_widgets_init' );

/**
 * Register menu.
 */
register_nav_menus( array(
	'top'    => __( 'Top Menu', 'mogultheme' ),
) );

/**
 * Enqueue scripts and styles.
 */
function mogultheme_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'mogultheme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/assets/javascripts/bootstrap.min.js', array('jquery'), '3.7.7', true );

}
add_action( 'wp_enqueue_scripts', 'mogultheme_scripts' );