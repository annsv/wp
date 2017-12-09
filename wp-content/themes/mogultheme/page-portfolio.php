<?php
/**
 * Template name: Portfolio
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="portfolio-page">
<?php
		if ( have_posts() ) : 

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
			<h1>
				<?php the_title(); ?>
			</h1>
			<?php endwhile; 
			wp_reset_postdata(); ?>

			<?php 

			$args = array(
    			'post_type'=> 'portfolio',
    		);              

			$portfolio = new WP_Query( $args );
			
			if($portfolio->have_posts() ) : ?>

				<div class="container">
					<div class="row">

				<?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

					<div class="col-md-12">
						<div class="portfolio-content">
							<?php the_title();?>
							<?php the_content();?>
						</div>
					</div>
			
			<?php	endwhile; ?>
			
					</div>
				</div>
			
			<? endif;

			wp_reset_postdata(); 
			?>
		<div class="">			
		<?php the_content(); ?>
		</div>
		<? else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 



		?>

</div>
<?php get_footer();