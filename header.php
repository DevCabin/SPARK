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

<link rel='stylesheet' id='growthspark-style-css'  href='http://spark.growthhit.com/wp-content/themes/growthspark/inc/slideoutLead/css/slideout-form.css' type='text/css' media='all' />
<link rel='stylesheet' id='growthspark-style-css'  href='http://spark.growthhit.com/wp-content/themes/growthspark/inc/EndPageSlideOutBox/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='growthspark-style-css'  href='http://spark.growthhit.com/wp-content/themes/growthspark/inc/animatedModal/demo/css/animate.min.css' type='text/css' media='all' />

<link rel='stylesheet' id='growthspark-style-css'  href='http://spark.growthhit.com/wp-content/themes/growthspark/style.css?ver=55' type='text/css' media='all' />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'growthspark' ); ?></a>

	<header id="masthead" class="site-header container" role="banner">
		<div class="two columns">
			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<?php // SAVE FOR IF THEY USE AN IMAGE echo $description; ?>
				<?php
				endif; ?>
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
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
		<div class="row">
