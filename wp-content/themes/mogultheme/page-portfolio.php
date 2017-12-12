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

			<h1>
				<?php the_title(); ?>
			</h1>

			<div id="portfolio-nav">
			    <?php echo get_portfolio_nav(); ?>
			</div>

			<div id="portfolio-results"></div>
			<?php 
			//$terms = array('beauty','bridal','fashion','candid');
			//Beauty
			$args = array(
    			'post_type'=> 'portfolio',
    			'nopaging' => 'true',
    			'order' => 'ASC',

    			'tax_query' => array(
					array(
						'taxonomy' => 'portfolio_category',
						'field'    => 'slug',
						'terms'    => 'beauty',
					),
    			
				)		
    		);              

			$portfolio = new WP_Query( $args );
			//var_dump($portfolio);
			if($portfolio->have_posts() ) : ?>

				<div class="container">
					<div class="row">
			

				<?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

					<div class="col-md-20">
						<div class="portfolio-content">
							<?php //the_title();?>
							<a href="<?php the_post_thumbnail_url('large'); ?>" class="popup"><?php the_post_thumbnail(); ?></a>

						</div>
					</div>
			
				<?php endwhile; ?>
			
					</div>
				</div>
			
			<? endif;

			wp_reset_postdata(); 

			$description = get_term_field( 'description', 12, 'portfolio_category' );  
			if( is_wp_error( $description ) ) {
				 echo 'описание термина не найдено';
			} else { ?>
				 <div class="container">
				 <?php echo $description;?>
					</div>
			<?php } ?>


<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="portfolio-image" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>
      
</div>
<?php get_footer();