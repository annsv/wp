<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 * @version 1.0
 */

?>

<footer>
	<div class="container-fluid footer">

		<?php
		if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) ||
	is_active_sidebar( 'sidebar-4' ) ) :
		?>

			<aside class="widget-area centered-block" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'mogultheme' ); ?>">
				<?php
				if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
					<div class="footer-subscription col-md-4 col-lg-3 ">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				<?php }
				if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
					<div class="footer-contacts col-md-4 col-lg-5">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div>
				<?php }
				if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
					<div class="footer-social col-md-4 col-lg-3 ">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
<ul class="social-links">
			<?php if( get_theme_mod( 'mogultheme_text_facebook') != "" ): ?>
	            <li><a class="facebook" href="<?php echo get_theme_mod( 'mogultheme_text_facebook'); ?>" target="_blank"></a></li>
			<?php endif;?>
			<?php if( get_theme_mod( 'mogultheme_text_twitter') != "" ): ?>						
				<li><a class="twitter" href="<?php echo get_theme_mod( 'mogultheme_text_twitter'); ?>" target="_blank"></a></li>
			<?php endif;?>
			<?php if( get_theme_mod( 'mogultheme_text_insta') != "" ): ?>	
				<li><a class="insta" href="<?php echo get_theme_mod( 'mogultheme_text_insta'); ?>" target="_blank"></a></li>
			<?php endif;?>
			<?php if( get_theme_mod( 'mogultheme_text_pinterest') != "" ): ?>				   
				<li><a class="pinterest" href="<?php echo get_theme_mod( 'mogultheme_text_pinterest'); ?>" target="_blank"></a></li>
			<?php endif;?>	
			<?php if( get_theme_mod( 'mogultheme_text_linkeedin') != "" ): ?>				  	
				<li><a class="linkedin" href="<?php echo get_theme_mod( 'mogultheme_text_linkeedin'); ?>" target="_blank"></a></li>
			<?php endif;?>	
			<?php if( get_theme_mod( 'mogultheme_text_contacts') != "" ): ?>					
				<li><a class="email" href="mailto:<?php echo get_theme_mod( 'mogultheme_text_contacts'); ?>" target="_blank"></a></li>
			<?php endif;?>	
</ul>						
					</div>
				<?php } ?>				
			</aside><!-- .widget-area -->

		<?php endif; ?>
	
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>