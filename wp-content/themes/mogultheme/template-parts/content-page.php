<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since MogulTheme 1.0
 */
?>

<article>
	<?php the_title( '<h1>', '</h1>' ); ?>
	
	<div class="content"><?php the_content();?></div>
</article>	
