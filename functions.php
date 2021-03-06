<?php
/**
 * GrowthSpark functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GrowthSpark
 */

if ( ! function_exists( 'growthspark_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function growthspark_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on GrowthSpark, use a find and replace
	 * to change 'growthspark' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'growthspark', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'growthspark' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	//add_theme_support( 'custom-background', apply_filters( 'growthspark_custom_background_args', array(
	//	'default-color' => 'ffffff',
	//	'default-image' => '',
	//) ) );
}
endif; // growthspark_setup
add_action( 'after_setup_theme', 'growthspark_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function growthspark_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'growthspark_content_width', 640 );
}
add_action( 'after_setup_theme', 'growthspark_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function growthspark_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'growthspark' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'growthspark' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Main CTA', 'growthspark' ),
		'id'            => 'main_cta',
		'description'   => esc_html__( 'Text widget only, A Header and a Sub-heading.', 'growthspark' ),
		'before_widget' => '<section class="site-description">',
		'after_widget'  => '</section>',
		'before_title'  => '<span class="hidden hide">',
		'after_title'   => '</span>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'growthspark' ),
		'id'            => 'first_footer',
		'description'   => esc_html__( 'Add widgets here.', 'growthspark' ),
		'before_widget' => '<div id="first-footer" class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'growthspark' ),
		'id'            => 'second_footer',
		'description'   => esc_html__( 'Add widgets here.', 'growthspark' ),
		'before_widget' => '<div id="second-footer" class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'growthspark' ),
		'id'            => 'third_footer',
		'description'   => esc_html__( 'Add widgets here.', 'growthspark' ),
		'before_widget' => '<div id="third-footer" class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Bottom Slide Out', 'growthspark' ),
		'id'            => 'bottom_slideout',
		'description'   => esc_html__( 'Add Content Here.', 'growthspark' ),
		'before_widget' => '<div id="slidebox"><a class="close">X</a>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'growthspark_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function growthspark_scripts() {

	// DEV MODE - stops cache of css to view changes on load
	$rightNow = date('Ymds');
	wp_enqueue_style( 'growthspark-style', get_stylesheet_uri() , false , $rightNow );

	// LIVE mode
	// wp_enqueue_style( 'growthspark-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'growthspark-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'growthspark-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/inc/animate.min.css', array(), '20170502', false );

	// wp_enqueue_script( 'animated-modal', get_template_directory_uri() . '/inc/animatedModal/animatedModal.min.js', array(), '20170502', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'growthspark_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Titan Framework plugin checker
 */
require get_template_directory() . '/titan-framework-checker.php';

/**
 * Load Titan Framework options
 */
require get_template_directory() . '/titan-options.php';




/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme GrowthSpark for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'growthspark_register_required_plugins' );

function growthspark_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'      => 'Titan Framework (All the cool Growth stuff needs this plugin to work. Please install it.)',
			'slug'      => 'titan-framework',
			'required'  => false,
		),
		array(
			'name'      => 'Page Builder Sandwich (Free Page builder with premium Features)',
			'slug'      => 'page-builder-sandwich',
			'required'  => false,
		),
		array(
			'name'      => 'Black Studio TinyMCE Widget (Adds easy content editor to the widget area)',
			'slug'      => 'black-studio-tinymce-widget',
			'required'  => false,
		),
		
		array(
			'name'      => 'Contact Form 7 (Simple and Reliable Forms)',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'Wordence (Incredible security)',
			'slug'      => 'wordfence',
			'required'  => false,
		),
		array(
			'name'      => 'WP Super Cache (After you\'re all ready to launch, speeds up the site)',
			'slug'      => 'wp-super-cache',
			'required'  => false,
		),
		array(
			'name'      => 'Smush (Easily optimize your uploaded images in bulk)',
			'slug'      => 'wp-smushit',
			'required'  => false,
		),
		array(
			'name'      => 'Yoast SEO (Extremely popular SEO plugin)',
			'slug'      => 'wordpress-seo',
			'required'  => false,
		),
		



	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'growthspark',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'growthspark' ),
			'menu_title'                      => __( 'Install Plugins', 'growthspark' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'growthspark' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'growthspark' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'growthspark' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'growthspark'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'growthspark'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'growthspark'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'growthspark'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'growthspark'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'growthspark'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'growthspark'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'growthspark'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'growthspark'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'growthspark' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'growthspark' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'growthspark' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'growthspark' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'growthspark' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'growthspark' ),
			'dismiss'                         => __( 'Dismiss this notice', 'growthspark' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'growthspark' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'growthspark' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}

