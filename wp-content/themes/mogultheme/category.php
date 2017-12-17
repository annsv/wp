<?php
/**
 * Template name: Caterogy
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
		<?php $args = array(
		    			'post_type'=> 'post',
		        		'post_status' => 'publish',    			
		        		'posts_per_page' => '3',    			
		        		'paged' => 1,   
				
		    		);              

					$blogposts = new WP_Query( $args );

					if($blogposts->have_posts() ) : 

						while ( $blogposts->have_posts() ) : $blogposts->the_post(); ?>
							<article>
								<p class="blog-post-title"><?php the_title(); ?></p>
								<div class="blog-content"><?php the_content(); ?></div>
							</article>
						<?php endwhile; 
					
					endif;

					wp_reset_postdata(); ?>
		</section>	
			<?php get_sidebar(); ?>
	</div>
</div><!-- .wrap -->

<?php get_footer();
