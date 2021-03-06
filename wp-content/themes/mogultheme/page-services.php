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
				<div class="outer-container">
				    <hr class="divider divider--EFEFEF">
				</div>	
			<div class="container category-nav">
			
				<?php echo get_services_nav(); ?>
		    
			</div>
				<div class="outer-container">
				    <hr class="divider divider--EFEFEF">
				</div>	
				<div class="bubblingG">
					<span id="bubblingG_1">
					</span>
					<span id="bubblingG_2">
					</span>
					<span id="bubblingG_3">
					</span>
				</div>
			<div id="services-result">
				
			<?php $args = array(
    			'post_type' => 'service',
				'meta_key'	=> '',  

				'meta_query' => array(
					'relation' => 'AND',
				array(
					'key'	 => 'service_name',
					'value'     => '',
            		'compare'   => '!='
				),
				array(
					'key'	 => 'service_price',
					'value'     => '',
            		'compare'   => '!='
				),	
				array(
					'key'	 => 'service_description',
					'value'     => '',
            		'compare'   => '!='
				),
				),  			
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

			<?php $args = array(
    			'post_type' => 'service',
				'meta_key'	=> '',  

				'meta_query' => array(
					'relation' => 'AND',
				array(
					'key'	 => 'additional_option',
					'value'     => '0',
            		'compare'   => '!='
				),
				array(
					'key'	 => 'option_price',
					'value'     => '',
            		'compare'   => '!='
				),				
				),

    			'nopaging' => 'true',
    			//'order' => 'ASC',

    			'tax_query' => array(
					array(
						'taxonomy' => 'services_category',
						'field'    => 'term_id',
						'terms'    => 16,
					),
    			
				)		
    		);              

			$services_additional = new WP_Query( $args );
			//var_dump($services);

			if($services_additional->have_posts() ) : ?>
				<div class="outer-container">
				    <hr class="divider divider--EFEFEF">
				</div>
				<?php echo '<div class="container additional-services"><p class="additional-services-title">Additional</p>';
			

				while ( $services_additional->have_posts() ) : $services_additional->the_post(); 

					echo '<div class="col-md-3">';
					echo '<div class="service-content">';
					echo '<p class="service-name">'.get_field('additional_option').'</p>';
					echo '<p class="service-price">'.get_field('option_price').'</p>';
					echo '</div></div>';
			
				endwhile; 
			
				echo '</div>';
			
			endif;

			wp_reset_postdata(); 
			?>

			<?php $args = array(
    			'post_type' => 'service',
				'meta_key'	=> '',  

				'meta_query' => array(
					'relation' => 'AND',
				array(
					'key'	 => 'travel_option',
					'value'     => '',
            		'compare'   => '!='
				),
				array(
					'key'	 => 'travel_price',
					'value'     => '0',
            		'compare'   => '!='
				),				
				),

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

			$services_travel = new WP_Query( $args );
			//var_dump($services);

			if($services_travel->have_posts() ) : ?>
				<div class="outer-container">
				    <hr class="divider divider--EFEFEF">
				</div>
			<?php echo '<div class="container additional-services"><p class="additional-services-title">Travel</p>';
			

				while ( $services_travel->have_posts() ) : $services_travel->the_post(); 

					echo '<div class="col-md-3">';
					echo '<div class="service-content">';
					echo '<p class="service-name">'.get_field('travel_option').'</p>';
					echo '<p class="service-price">'.get_field('travel_price').'</p>';
					echo '</div></div>';
			
				endwhile; 
			
				echo '</div>';
			
			endif;

			wp_reset_postdata(); 
			?>			

			</div>	
				<div class="outer-container">
				    <hr class="divider divider--EFEFEF">
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