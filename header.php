<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GrowthSpark
 */


$titan = TitanFramework::getInstance( 'growthspark' );
$sub_page_head = $titan->getOption( 'sub_page_head' );
$typo = $titan->getOption( 'typo' );
$main_nav_left_or_right = $titan->getOption( 'main_nav_left_or_right' );

$sb_style = $titan->getOption( 'sb_style' );



$imageIDl = $titan->getOption( 'site_logo' );

$imageSrcl = $imageIDl; 
if ( is_numeric( $imageIDl ) ) {
  $imageAttachmentl = wp_get_attachment_image_src( $imageIDl, 'full' );
  $imageSrcl = $imageAttachmentl[0];
} 


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>


<?php if ($typo == "f_oswald") { ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
<style>
/*
Mr Oswald
*/

h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: 'Oswald', sans-serif;
	text-transform: uppercase;

}

body,
button,
input,
select,
textarea {
	font-family: 'Montserrat', sans-serif;
	text-transform: none;
}
</style>
<?php } elseif ($typo == "f_libre_r") { ?>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto:900" rel="stylesheet">
<style>
/*
Libre Roboto
*/
h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: 'Roboto', sans-serif;
	text-transform: none;
}

body,
button,
input,
select,
textarea {
	font-family: 'Libre Baskerville', serif;
	text-transform: none;
}
</style>
<?php } elseif ($typo == "f_julius") { ?>
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Julius+Sans+One|Source+Sans+Pro" rel="stylesheet">
<style>
/*
Julius Archivo
*/
h1,
h3,
h5,{
	font-family: 'Julius Sans One', sans-serif;
	text-transform: uppercase;
	text-transform: none;
}
h2,
h4,
h6 {
	font-family: 'Archivo Narrow', sans-serif;
	text-transform: uppercase;
}
body{
	font-family: 'Source Sans Pro', sans-serif;
	text-transform: none;
}
</style>
<?php } elseif ($typo == "f_hound") { ?>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
<style>
/*
Hound of the Baskerville
*/
h1,
h3,
h5,
body,
button,
input,
select,
textarea {
	font-family: 'Libre Baskerville', serif;
	text-transform: none;
}
h2,
h4,
h6 {
	font-family: 'Libre Baskerville', serif;
	text-transform: uppercase;
}
</style>
<?php } elseif ($typo == "f_open") { ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
<style>
/*
So Open
*/
h1,
h3,
h5,
body,
button,
input,
select,
textarea {
	font-family: 'Open Sans', sans-serif;
	text-transform: none;
}
h2,
h4,
h6 {
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
}
</style>
<?php } elseif ($typo == "f_domo") { ?>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<style>

/*
Domo
*/
h1,
h3,
h5,
h2,
h4,
h6,
body,
button,
input,
select,
textarea {
	font-family: 'Roboto Condensed', sans-serif;
	text-transform: none;
}

</style>
<?php } else { ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
/*
Open Default
*/
h1,
h3,
h5,
body,
button,
input,
select,
textarea {
	font-family: 'Open Sans', sans-serif;
	text-transform: none;
}
h2,
h4,
h6 {
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
}
</style>
<?php } ?>



<style>


<?php if ($main_nav_left_or_right == true  ) { ?>
.main-navigation li {
	float: right;
	position: relative;
}
<?php } else { ?>
.main-navigation li {
	float: left;
	position: relative;
}
<?php } ?>


/*
Sidebar and Comment area options
*/
<?php if ($sb_style == 'sb_shadow'  ) { ?>
.widget {
    padding: 12px;
    box-shadow: #333 0 0 4px 0;
}
#comments {
    padding: 20px;
    box-shadow: #333 0 0 4px 0;
}
<?php } elseif ($sb_style == 'sb_gray'  ) { ?>
.widget {
    padding: 12px;
    background: #efefef;
}
#comments {
    padding: 20px;
    background: #efefef;
}
<?php } elseif ($sb_style == 'sb_border'  ) { ?>
.widget {
    padding: 12px;
    border: 2px solid #333;
}
#comments {
    padding: 20px;
    border: 2px solid #333;
}
<?php } ?>


</style>





</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'growthspark' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="two columns">
				<div class="site-branding">

					<?php if ( !is_front_page() && !is_home() ) : ?>
						
							<?php if ($imageSrcl !="#" && $imageSrcl !="") { ?>
							<div class="site-title-logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img id="site-logo" src="<?php echo esc_url( $imageSrcl ); ?>" alt="<?php bloginfo( 'name' ); ?> logo">
								</a>
							</div>
							<?php } else { ?>
							<div class="site-title-logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							</div>
							<?php } ?>
						
					<?php else : ?>
						<div class="site-title-logo">
							<?php if ($imageSrcl !="#" && $imageSrcl !="") { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img id="site-logo" src="<?php echo esc_url( $imageSrcl ); ?>" alt="<?php bloginfo( 'name' ); ?> logo">
							</a>
							<?php } else { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php } ?>
						</div>
					<?php endif; ?>
					
				</div><!-- .site-branding -->
			</div><!-- two col -->
			<div class="ten columns">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'growthspark' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- ten col -->
		</div><!-- container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php if(!is_front_page()) { ?>

		<?php
		if ( $sub_page_head == true ) { ?>
			<style>
			#slider {
			  <?php if ( get_header_image() ) : ?>
			    background: url(<?php header_image(); ?>) no-repeat;
			  <?php endif; // End header image check. ?>
			    padding-top: 25px;
			    height: 100px;
			    position: relative;
			    color: #fff;
			    background-color: #111;
			    background-position: 50%;
			    background-size: cover;
			}
			#content {
			    margin-top: 0px !important;
			}
			</style>

		    <!-- Slider Start -->
		    <section id="slider">
		      <div class="overlay">

		      </div>
		    </section>

		<?php } ?>

		<div class="container">
		<?php } ?>