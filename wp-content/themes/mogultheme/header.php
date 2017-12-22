<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" class="no-js no-svg">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php //body_class(); ?>>
<header>
	<nav class="navbar navbar-default top-menu" id="site-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'mogultheme' ); ?>">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Menu</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
<? if( get_theme_mod( 'mogultheme_dropdownpages_setting_id') != "" ): 
	$book_page_id = get_theme_mod( 'mogultheme_dropdownpages_setting_id');?>
        	      <a class="navbar-brand book-button top-button" href="<?php echo get_page_link($book_page_id); ?>"></a>    
                
            
<?php endif;   ?>		      

	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	    <?php wp_nav_menu( array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
			'menu_class'      => 'nav navbar-nav', 
		) ); ?>	
	
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
		<div class="custom-header<?php if (!is_front_page()) echo ' inner-header'; ?>">
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			
			<div class="site-logo">
				<?php the_custom_logo(); ?>	
			</div>				
		</div>		
		
</header>
<main>


