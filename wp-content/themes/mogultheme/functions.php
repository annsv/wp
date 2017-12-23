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

	add_theme_support( 'post-thumbnails' );

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

	// Theme stylesheet.
	wp_enqueue_style( 'mogultheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/assets/javascripts/bootstrap.min.js', array('jquery'), '3.7.7', true );
	//Add script.js file
    wp_enqueue_script( 'mogultheme-script', get_template_directory_uri() . 
    '/js/script.js', array( 'jquery' ), '', true );
          
}
add_action( 'wp_enqueue_scripts', 'mogultheme_scripts' );

function mogultheme_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'theme_options', array(
		'title'    => __( 'Theme Options', 'mogultheme' ),
		'priority' => 130, // Before Additional CSS.
	) );
				$wp_customize->add_setting( 'mogultheme_text_facebook', array(
				  'capability' => 'edit_theme_options',
				  'sanitize_callback' => 'sanitize_text',
				) );

				$wp_customize->add_control( 'mogultheme_text_facebook', array(
				  'type' => 'text',
				  'section'        => 'theme_options',
				  'label' => __( 'Add Facebook page link' ),
				) );
				$wp_customize->add_setting( 'mogultheme_text_pinterest', array(
				  'capability' => 'edit_theme_options',
				  'sanitize_callback' => 'sanitize_text',
				) );

				$wp_customize->add_control( 'mogultheme_text_pinterest', array(
				  'type' => 'text',
				  'section'        => 'theme_options',
				  'label' => __( 'Add Pinterest page link' ),
				) );				

				$wp_customize->add_setting( 'mogultheme_text_insta', array(
				  'capability' => 'edit_theme_options',
				  'sanitize_callback' => 'sanitize_text',
				) );

				$wp_customize->add_control( 'mogultheme_text_insta', array(
				  'type' => 'text',
				  'section' => 'theme_options',
				  'label' => __( 'Add Instagram page link' ),
				) );
				$wp_customize->add_setting( 'mogultheme_text_linkeedin', array(
				  'capability' => 'edit_theme_options',
				  'sanitize_callback' => 'sanitize_text',
				) );

				$wp_customize->add_control( 'mogultheme_text_linkeedin', array(
				  'type' => 'text',
				  'section'        => 'theme_options',
				  'label' => __( 'Add LinkedIn page link' ),
				) );
				$wp_customize->add_setting( 'mogultheme_text_twitter', array(
				  'capability' => 'edit_theme_options',
				  'sanitize_callback' => 'sanitize_text',
				) );

				$wp_customize->add_control( 'mogultheme_text_twitter', array(
				  'type' => 'text',
				  'section'        => 'theme_options',
				  'label' => __( 'Add Twitter page link' ),
				) );
				$wp_customize->add_setting( 'mogultheme_text_contacts', array(
				  'capability' => 'edit_theme_options',
				  'sanitize_callback' => 'sanitize_text',
				) );

				$wp_customize->add_control( 'mogultheme_text_contacts', array(
				  'type' => 'text',
				  'section'        => 'theme_options',
				  'label' => __( 'Add Email' ),
				) );				

				$wp_customize->add_setting( 'mogultheme_dropdownpages_setting_id', array(
				  'capability' => 'edit_theme_options',
				  'sanitize_callback' => 'mogultheme_sanitize_dropdown_pages',
				) );

				$wp_customize->add_control( 'mogultheme_dropdownpages_setting_id', array(
				  'type' => 'dropdown-pages',
				  'section' => 'theme_options', 
				  'label' => __( 'Choose a booking page' ),
				) );

function mogultheme_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );

  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}


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

//Get Portfolio Navigation (show 4 terms)
function get_portfolio_nav(){
    $terms = get_terms('portfolio_category');
    $filters_html = false;
 
    if( $terms ):
        $filters_html = '<ul id="portfolio-nav">';
 
        foreach( $terms as $term )
        {
            $term_id = $term->term_id;
            $term_name = $term->name;
 
            $filters_html .= '<li class="term-item" id="'.$term_id.'">'.$term_name.'</li>';
        }
        $filters_html .= '</ul>';
 
        return $filters_html;
    endif;
}  

//Get Portfolio Navigation (show 4 terms)
function get_services_nav(){
    $terms = get_terms('services_category');
    $filters_html = false;
 
    if( $terms ):
        $filters_html = '<ul id="services-nav">';
 
        foreach( $terms as $term )
        {
            $term_id = $term->term_id;
            $term_name = $term->name;
 
            $filters_html .= '<li class="term-item" id="'.$term_id.'">'.$term_name.'</li>';
        }
        $filters_html .= '</ul>';
 
        return $filters_html;
    endif;
}

//Enqueue Ajax 
function enqueue_portfolio_ajax_scripts() {

    wp_enqueue_script( 'mogultheme-script' );
    wp_localize_script( 'mogultheme-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action('wp_enqueue_scripts', 'enqueue_portfolio_ajax_scripts');

//Add Ajax Actions
add_action('wp_ajax_ajaxSelectPortfolio', 'ajaxSelectPortfolio');
add_action('wp_ajax_nopriv_ajaxSelectPortfolio', 'ajaxSelectPortfolio');
function ajaxSelectPortfolio()
{

			$args = array(
    			'post_type'=> 'portfolio',
    			'nopaging' => 'true',
    			'order' => 'ASC',

    			'tax_query' => array(
					array(
						'taxonomy' => 'portfolio_category',
						'field'    => 'term_id',
						'terms'    => $_POST['id'],
					),
    			
				)		
    		);              

			$portfolio = new WP_Query( $args );

			if($portfolio->have_posts() ) : 

				echo '<div class="container"><div class="row">';
			

				while ( $portfolio->have_posts() ) : $portfolio->the_post(); 

					echo '<div class="col-md-20">';
					echo '<div class="portfolio-content">';
					$large_img_url = get_the_post_thumbnail_url($portfolio->ID,"large");
					$thumb_url = get_the_post_thumbnail($portfolio->ID);
					echo '<a href="'.$large_img_url.'" class="popup">'.$thumb_url.'</a>';
					echo '</div></div>';
			
				endwhile; 
			
				echo '</div></div>';
			
			endif;

			wp_reset_postdata(); 
			$description = get_term_field( 'description', $_POST['id'], 'portfolio_category','raw' );  
			if( is_wp_error( $description ) ) {
				 echo 'description is empty';
			} else { 
				echo  '<div class="container">'. $description .'</div>';
				
			} 
	
	die();
}


add_action('wp_ajax_ajaxSelectServices', 'ajaxSelectServices');
add_action('wp_ajax_nopriv_ajaxSelectServices', 'ajaxSelectServices');
function ajaxSelectServices()
{

			$args = array(
    			'post_type'=> 'service',
    			'nopaging' => 'true',
    			'order' => 'ASC',

    			'tax_query' => array(
					array(
						'taxonomy' => 'services_category',
						'field'    => 'term_id',
						'terms'    => $_POST['id'],
					),
    			
				)		
    		);              

			$services = new WP_Query( $args );

			if($services->have_posts() ) : 

				echo '<div class="container"><div class="row">';
			

				while ( $services->have_posts() ) : $services->the_post(); 

					echo '<div class="col-md-4">';
					echo '<div class="service-content">';
					echo '<p class="service-name">'.get_field('service_name').'</p>';
					echo '<p class="service-price">'.get_field('service_price').'</p>';
					echo '<div class="service-description">'.get_field('service_description').'</div>';					
					echo '</div></div>';
			
				endwhile; 
			
				echo '</div></div>';
			
			endif;

			wp_reset_postdata(); 

	
	die();
}
/*Load contact forms by click*/
add_action('wp_ajax_load_forms', 'load_forms');
add_action('wp_ajax_nopriv_load_forms', 'load_forms');
function load_forms() {

			$args = array(
			  'p'         => $_POST['id'], // ID of a page, post, or custom type
			  'post_type' => 'any'
    		); 

			$form = new WP_Query( $args );
			if ( $form->have_posts() ) :
				?>
				<?php while ( $form->have_posts() ) : $form->the_post() ?>
					<div class="content">
						<?php the_title( '<h1>', '</h1>' ); ?>

						<?php the_content(); ?>
					</div>
				<?php endwhile ?>
				<?php
			endif;

			wp_die();
}



/*Load reviews function*/
add_action('wp_ajax_load_reviews_by_ajax', 'load_reviews_by_ajax');
add_action('wp_ajax_nopriv_load_reviews_by_ajax', 'load_reviews_by_ajax');
function load_reviews_by_ajax() {
	$paged = $_POST['page'];
		$args = array(
    		'post_type'=> 'reviews',
        	'posts_per_page' => '10',    			
			'paged' => $paged,			
    	);
	$reviews = new WP_Query( $args );
	if ( $reviews->have_posts() ) :
		?>
		<?php while ( $reviews->have_posts() ) : $reviews->the_post() ?>
			<div class="col-md-6">
				<div class="review-text">
					<?php the_title();?>,<?php the_field('review_text');?>
				</div>

				<div class="reviewer-info">
					<div class="reviewer-name"><?php the_field('reviewer_name');?></div>
				<div class="reviewer-location"><?php the_field('reviewer_location');?></div>
				</div>
			</div>
		<?php endwhile ?>
		<?php
	endif;

	wp_die();
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

// html in term description
remove_filter('pre_term_description', 'wp_filter_kses');
remove_filter('pre_term_description', 'wp_kses_data');