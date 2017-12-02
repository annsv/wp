<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MogulTheme
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" class="no-js no-svg">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/wp-content/themes/mogultheme/style.css" type="text/css" media="screen" />
</head>
<body>
<header>
	<nav class="navbar navbar-default top-menu">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Menu</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand book-button" href="#"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="#">Home</a></li>
	        <li><a href="#">About</a></li><!--rename to rewiews-->
	        <li><a href="#">Services</a></li>
	        <li><a href="#">Portfolio</a></li>
	        <li><a href="#">Blog</a></li>
	        <li><a href="#">Contact</a></li>        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>	

	<div class="jumbotron jumbotron--main">
		<div class="site-logo"><img src="/wp-content/themes/mogultheme/img/mogul-logo-big.png">
			
		</div>
	</div>	
</header>
<main>
	<div class="container content-on-main">
		<h1>Professional makeup services throughout New England</h1>
		<div class="content-block">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim		
		</div> 
		<div class="img-block1">
			<img src="/wp-content/themes/mogultheme/img/blonde.jpg">
		</div> 
		<div class="content-block">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim	
		</div>	
		<div class="img-block2">
			<img src="/wp-content/themes/mogultheme/img/makeup-master.jpg">
		</div> 
		<div class="contacts-block">
<p>Allison Humeniuk, Makeup Artist
Portland, Maine</p>
<p>allison@mogulmakeup.com
207.370.4427</p>

		</div>	
	</div>
</main>
<footer>
	<div class="container-fluid footer-blocks">
		<div class="col-md-3 pull-left">
			<div class="footer-block-title">Sing up for e-mail updates</div>
			<p>Sing up for blah blah blah and yeah blah</p>
		</div>
		<div class="col-md-5">
			<div class="footer-block-title">Mogul Makeup Artistry</div>
			<p>Allison Humeniuk</p>
			<p>On-location Makeup Artist</p>
			<div class="footer-contacts">
				<div class="city-icon">Portland, Maine</div>
				<div class="city-email">allison@mogulmakeup.com</div>
				<div class="city-tel">[207]370.4427</div>
			</div>				
		</div>
		<div class="col-md-4 pull-right">
			<div class="footer-block-title">Stay connected with us!</div>
			<p>Stay up to date with blah blah for blah blah and yeah blah</p>
			<ul class="social-links">
				<li class="facebook"></li>
				<li class="twitter"></li>
				<li class="insta"></li>
				<li class="pinterest"></li>				
				<li class="linkedin"></li>
				<li class="email"></li>
			</ul>
		</div>		
	</div>
</footer>
</body>
</html>