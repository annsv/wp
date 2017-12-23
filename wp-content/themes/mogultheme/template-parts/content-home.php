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
	
if( get_field( 'text_block_1') ): ?>
            <div class="content-block">
                
            <?php the_field( 'text_block_1');?>  

            </div>
<?php endif; 

$image = get_field('model_photo');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

?>
            <div class="img-block1">
                <?php if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>                
  
            </div>
<?php

if( get_field( 'text_block_2') ): ?>
            <div class="content-block">
                
            <?php echo get_field( 'text_block_2');?>  

            </div>
<?php endif; 
 


$photo = get_field('makeup_artist_photo');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>
            <div class="img-block1">
                <?php if( !empty($photo) ): ?>

                    <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />

                <?php endif; ?>                
  
            </div>


<?php if( get_field( 'makeup_artist_contacts') ): ?>
            <div class="content-block">
                
            <?php the_field( 'makeup_artist_contacts');?>  

            </div>
<?php endif; ?>


		
	
	</div>
</article>