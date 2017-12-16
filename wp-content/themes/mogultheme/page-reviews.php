<?php
/**
 * Template name: Reviews
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="content reviews-page">
<?php
		if ( have_posts() ) : 

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; 
			wp_reset_postdata(); ?>

			<?php 

			$args = array(
    			'post_type'=> 'reviews',
        		'post_status' => 'publish',    			
        		'posts_per_page' => '10',    			
        		'paged' => 1,    			
    		);              

			$reviews = new WP_Query( $args );
			
			if($reviews->have_posts() ) : ?>

				<div class="container">
					<div class="row">
						<div class="reviews-block">		
						<?php while ( $reviews->have_posts() ) : $reviews->the_post(); ?>

							<div class="col-md-6 review-item">
								<div class="review-text">
									<?php the_title();?>,<?php the_field('review_text');?>
								</div>

								<div class="reviewer-info">
									<div class="reviewer-name"><?php the_field('reviewer_name');?></div>
								<div class="reviewer-location"><?php the_field('reviewer_location');?></div>
								</div>
							</div>
					
						<?php	endwhile; ?>
						</div>			
					</div>
				</div>
			
			<?php endif; ?>
			<div class="loadmore">Load More</div>

			<?php wp_reset_postdata(); 
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

</div>
<?php get_footer();