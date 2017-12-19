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
  <div class="tab-content">
    <div id="form1" class="tab-pane fade in active">

	  <?php echo do_shortcode( '[contact-form-7 id="174" title="Contact"]' ); ?>
    </div>
    <div id="form2" class="tab-pane fade">

      <?php echo do_shortcode( '[contact-form-7 id="171" title="Book your appointment"]' ); ?>
    </div>
    <div id="form3" class="tab-pane fade">

      <?php echo do_shortcode( '[contact-form-7 id="173" title="Leave a review"]' ); ?>
    </div>
  </div>
<div class="pull-right">
<a data-toggle="pill" href="#form2">form 2</a>
<a data-toggle="pill" href="#form3">form 3</a>
</div>
		</div>
	</div>
</div>
<?php get_footer();