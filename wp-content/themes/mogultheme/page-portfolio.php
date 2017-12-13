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

			<?php the_title('<h1>', '</h1>'); ?>

			<div class="container portfolio-nav">
			    <?php echo get_portfolio_nav(); ?>
			</div>

			<div id="portfolio-results">
				
			<?php $args = array(
    			'post_type'=> 'portfolio',
    			'nopaging' => 'true',
    			'order' => 'ASC',

    			'tax_query' => array(
					array(
						'taxonomy' => 'portfolio_category',
						'field'    => 'term_id',
						'terms'    => 12,
					),
    			
				)		
    		);              

			$portfolio = new WP_Query( $args );

			if($portfolio->have_posts() ) : 

				echo '<div class="container"><div class="row">';
			

				while ( $portfolio->have_posts() ) : $portfolio->the_post(); 

					echo '<div class="col-md-20">';
					echo '<div class="portfolio-content">';
					$large_img_url = get_the_post_thumbnail_url($portfolio->ID,"large");
					$thumb_url = get_the_post_thumbnail($portfolio->ID);
					echo '<a href="'.$large_img_url.'" class="popup">'.$thumb_url.'</a>';
					echo '</div></div>';
			
				endwhile; 
			
				echo '</div></div>';
			
			endif;

			wp_reset_postdata(); 

			$description = get_term_field( 'description', 12, 'portfolio_category' );  
			if( is_wp_error( $description ) ) {
				 echo 'description is empty';
			} else { 
				 echo  '<div class="container">'.$description.'</div>';
			} ?>				
			</div>



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