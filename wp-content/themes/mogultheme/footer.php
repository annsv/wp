<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 * @version 1.0
 */

?>
<footer>
	<div class="container-fluid footer">
		<div class="footer-subscription col-md-3 pull-left">
			<div class="footer-block-title">Sing up for e-mail updates</div>
				<div class="footer-block-message">
					<p>Stay up to date with blah blah for</p>
					<p>blah blah and yeah blah</p>
				</div>
			<input type="text" name="subscribe">
		</div>
		<div class="footer-contacts col-md-5">
			<div class="footer-block-title">Mogul Makeup Artistry</div>
				<div class="footer-block-message">				
					<p>Allison Humeniuk</p>
					<p>On-location Makeup Artist</p>
				</div>
			<ul class="footer-contact">
				<li class="icon-city"><span></span>Portland, Maine</li>
				<li class="icon-email"><span></span>allison@mogulmakeup.com</li>
				<li class="icon-tel"><span></span>[207]370.4427</li>
			</ul>				
		</div>
		<div class="footer-social col-md-4 pull-right">
			<div class="footer-block-title">Stay connected with us!</div>
				<div class="footer-block-message">			
					<p>Stay up to date with blah blah</p>
					<p>for blah blah and yeah blah</p>
				</div>
			<ul class="social-links">
				<li><a class="facebook" href=""></a></li>
				<li><a class="twitter" href=""></a></li>
				<li><a class="insta" href=""></a></li>
				<li><a class="pinterest" href=""></a></li>	
				<li><a class="linkedin" href=""></a></li>
				<li><a class="email" href=""></a></li>
			</ul>
		</div>		
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>