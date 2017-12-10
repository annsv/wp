<?php
/**
 * The template used for displaying home-page content
 *
 * @package WordPress
 * @subpackage mogultheme
 * @since MogulTheme 1.0
 */
?>

<article>
	<div class="container content-on-main">
	<?php the_title( '<h1>', '</h1>' ); 
	
if( get_theme_mod( 'mogultheme_textarea_home1') != "" ): ?>
            <div class="content-block">
                <?php echo get_theme_mod( 'mogultheme_textarea_home1'); ?>
            </div>
<?php endif; ?>


		<div class="img-block1">
			<img src="/wp-content/themes/mogultheme/img/blonde.jpg">
		</div> 

<?php /*if( get_theme_mod( 'mogultheme_textarea_home1') != "" ): ?>
            <div class="content-block">
                <?php echo get_theme_mod( 'mogultheme_textarea_home1'); ?>
            </div>
<?php endif;   */

if( get_theme_mod( 'mogultheme_textarea_home2') != "" ): ?>
            <div class="content-block">
                <?php echo get_theme_mod( 'mogultheme_textarea_home2'); ?>
            </div>
<?php endif;  ?>

		<div class="img-block1">
			<img src="/wp-content/themes/mogultheme/img/makeup-master.jpg">
		</div> 
<? if( get_theme_mod( 'mogultheme_textarea_contacts') != "" ): ?>
            <div class="content-block">
                <?php echo get_theme_mod( 'mogultheme_textarea_contacts'); ?>
            </div>
<?php endif;   ?>			
	
	</div>
</article>