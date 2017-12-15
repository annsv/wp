<?php
/**
 * Template name: Reviews
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'page' );

			endwhile; 
			wp_reset_postdata(); ?>

			<?php 

			$args = array(
    			'post_type'=> 'reviews',
    		);              

			$reviews = new WP_Query( $args );
			
			if($reviews->have_posts() ) : ?>

				<div class="container">
					<div class="row">

				<?php while ( $reviews->have_posts() ) : $reviews->the_post(); ?>

					<div class="col-md-6">
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
			
			<? endif;

			wp_reset_postdata(); 
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

</div>
<?php get_footer();