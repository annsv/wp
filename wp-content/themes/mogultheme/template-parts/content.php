<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since MogulTheme 1.0
 */
?>

<div class="container">
	<div class="text-center">
        <?php the_title( '<h1>', '</h1>' ); ?>
	
		<div class="content"><?php the_content();?></div>
		
	</div>
</div>	
