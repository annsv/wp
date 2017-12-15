<?php
/**
 * Template name: Services
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="content services-page">

			<?php the_title('<h1>', '</h1>'); ?>

			<div class="container category-nav">
			    <?php echo get_services_nav(); ?>
			</div>

			<div id="services-result">
				
			<?php $args = array(
    			'post_type'=> 'service',
    			'nopaging' => 'true',
    			'order' => 'ASC',

    			'tax_query' => array(
					array(
						'taxonomy' => 'services_category',
						'field'    => 'term_id',
						'terms'    => 16,
					),
    			
				)		
    		);              

			$services = new WP_Query( $args );

			if($services->have_posts() ) : 

				echo '<div class="container"><div class="row">';
			

				while ( $services->have_posts() ) : $services->the_post(); 

					echo '<div class="col-md-4">';
					echo '<div class="service-content">';
					echo '<p class="service-name">'.get_field('service_name').'</p>';
					echo '<p class="service-price">'.get_field('service_price').'</p>';
					echo '<div class="service-description">'.get_field('service_description').'</div>';					
					echo '</div></div>';
			
				endwhile; 
			
				echo '</div></div>';
			
			endif;

			wp_reset_postdata(); 
			?>
			</div>	
			<div class="container service-examples">
				<?php the_content();?>
			</div>
						




<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="services-image" aria-hidden="true">
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