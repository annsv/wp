<?php
/**
 * Template for caterogy
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 */

get_header(); ?>

<div class="blog">
	<div class="container">
		<section id="primary" class="col-md-9">	
            <?php if ( have_posts() ) : ?>     

								<?php while ( have_posts() ) : the_post(); ?>
								
							<article>
								<p class="blog-post-title"><?php the_title(); ?></p>
								<div class="blog-content"><?php the_content(); ?></div>
							</article>
						<?php endwhile; 
					
					endif;	?>		
		</section>	
			<?php get_sidebar(); ?>
	</div>
</div><!-- .wrap -->

<?php get_footer();
