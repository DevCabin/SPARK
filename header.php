<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Growth_Spark
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php wp_title(''); ?></title>  
<?php 
if (function_exists('ot_get_option'))
	{
	$upload_logo = ot_get_option('upload_logo');
	$top_left = ot_get_option('top_left');
	$logo = ot_get_option('logo');
	$icon = ot_get_option('favicon');
	}
if ($icon !="") {	
?>  
<link rel="shortcut icon" href="<?php echo $icon; ?>"/>
<link rel="apple-touch-icon" href="<?php echo $icon; ?>"/>
<?php } ?>


<!--link rel='stylesheet' id='growthspark-style-css'  href='http://spark.growthhit.com/wp-content/themes/growthspark/inc/animatedModal/demo/css/animate.min.css' type='text/css' media='all' /-->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
<link rel='stylesheet' id='growthspark-style-css'  href='http://spark.growthhit.com/wp-content/themes/growthspark/style.css?ver=11112222222211233' type='text/css' media='all' />
<style>

/*--------------------------------------------------------------
# Typography
----------------------------------------------------------------
font-family: 'Oswald', sans-serif;
font-family: 'Montserrat', sans-serif;
*/
body,
button,
input,
select,
textarea {
	font-family: 'Montserrat', sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: 'Oswald', sans-serif;
	text-transform: uppercase;
}
/*--------------------------------------------------------------
# Colors
----------------------------------------------------------------
*/
a {
	color: royalblue;
}
a:visited {
	color: purple;
}
a:hover,
a:focus,
a:active {
	color: midnightblue;
}
nav a:hover {
  background-color: #000000;
  color: #FFF;
}
.sub-menu {
	background: #fff;
}

body {
  color: #222; 
}
.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
  display: inline-block;
  color: #555;
  border: 1px solid #bbb;
}
#masthead {
	background: #fff;
}
/*
Bottom Right Slide Out
*/
#slidebox{
    background-color:#fff;
    border-top:3px solid #71b753;   
}
#slidebox p, a.more{
    color:#555;
}
a.more{
    color:#71b753;
}
#slidebox h2{
    color:#71b753;
}

a.close{
    color:#71b753; 
}
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'growthspark' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="two columns">
				<div class="site-branding">
					<a class="site-title" href="<?php echo site_url(); ?>/">	                
					<?php
					if ($top_left == "logo"){ ?><img id="top-left-logo" src="<?php
						echo $upload_logo; ?>" alt="Logo for <?php
						echo get_bloginfo('name'); ?>">
						<?php } else
						{
						echo get_bloginfo('name');
					} ?>
					</a>
				</div><!-- .site-branding -->
			</div>
			<div class="ten columns">
				<nav id="site-navigation" class="main-navigation main_menu " role="navigation">
					<div class="av-main-nav-wrap ">
						<div class="av-main-nav">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'growthspark' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
						</div>
					</div>
				</nav><!-- #site-navigation -->
			</div>
		</div><!-- container -->
	</header><!-- #masthead -->

<div class="clear clearfix"></div>

	<div id="content" class="site-content">
		<div class="row">
