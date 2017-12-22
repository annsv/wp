<?php
/**
 * Template name: Page with form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="content">
	<div class="container">
		<div class="text-center">
    <?php get_template_part( 'template-parts/content', 'page' );?>
   

		</div>
	</div>
</div>
<?php get_footer();