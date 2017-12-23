<?php
/**
 * Template name: Contacts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<?php
		$book_an_appoinment_link = get_field('book_an_appoinment');
	  	$book_an_appoinment_id = url_to_postid($book_an_appoinment_link);
		$leave_a_review_link = get_field('leave_a_review_link');
	  	$leave_a_review_id = url_to_postid($leave_a_review_link);  	
	?> 
<div class="content contact-page">
	<div class="container">

		<div class="text-center">

				<div class="buttons-block">
					<a id="<?php echo $book_an_appoinment_id;?>" class="book-button callform"></a>
					<a id="<?php echo $leave_a_review_id;?>" class="review-button callform"></a>
				</div>
			    <div id="form-block">
			        <?php the_title( '<h1>', '</h1>' ); ?>
				  	<?php echo do_shortcode( '[contact-form-7 id="174" title="Contact"]' ); ?>
			    </div>

		</div>
	</div>
</div>
<?php get_footer();