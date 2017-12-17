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

			<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'mogultheme' ); ?>">
				<?php
				if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
					<div class="footer-subscription col-md-4 col-lg-3 pull-left">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				<?php }
				if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
					<div class="footer-contacts col-md-4 col-lg-6">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div>
				<?php }
				if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
					<div class="footer-social col-md-4 col-lg-3 pull-right">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					</div>
				<?php } ?>				
			</aside><!-- .widget-area -->

		<?php endif; ?>
	
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>