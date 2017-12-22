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

<div class="content contact-page">
	<div class="container">

		<div class="text-center">
        <?php the_title( '<h1>', '</h1>' ); ?>
  <div class="tab-content">
    <div id="form1" class="tab-pane fade in active">

	  <?php echo do_shortcode( '[contact-form-7 id="174" title="Contact"]' ); ?>
    </div>

  </div>
<div class="buttons-block">
<a data-href="<?php the_field('book_an_appoinment');?>" class="book-button callform"></a>
<a data-href="<?php the_field('leave_a_review_link');?>" class="review-button callform"></a>
</div>
		</div>
	</div>
</div>
<?php get_footer();