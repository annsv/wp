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
			//$terms = array('beauty','bridal','fashion','candid');
			$args = array(
    			'post_type'=> 'portfolio',
    			'nopaging' => 'true',
    			'order' => 'DESC',

    			'tax_query' => array(
					'relation' => 'AND',
					array(
						'taxonomy' => 'portfolio_category',
						'field'    => 'slug',
						'terms'    => array('beauty','bridal','fashion','candid'),
					),
    			
				)		
    		);              

			$portfolio = new WP_Query( $args );
			//var_dump($portfolio);
			if($portfolio->have_posts() ) : ?>

				<div class="container">
					<div class="row">



<?php
$description = term_description();
echo $description;
?>						

				<?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

					<div class="col-md-20">
						<div class="portfolio-content">
							<?php //the_title();?>
							<?php the_post_thumbnail(); ?>
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