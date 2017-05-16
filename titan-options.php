<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'growthspark_create_options' );

/**
 * Initialize Titan & options here
 */
function growthspark_create_options() {

	$titan = TitanFramework::getInstance( 'growthspark' );
	
	
	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	
	$section = $titan->createThemeCustomizerSection( array(
	    'name' => __( 'Spark Options', 'growthspark' ),
	) );
	$section->createOption( array(
		'type' => 'note',
		'desc' => '<hr><h3>SITE WIDE OPTIONS</h3><hr>',
	) );
	$section->createOption( array(
		'name' => __( 'Website Logo (optional, site name used if no logo is uploaded.)', 'growthspark' ),
		'id' => 'site_logo',
		'type' => 'upload',
		'desc' => 'Upload your file',
		'default' => '#',
		'placeholder' => 'Upload a Logo - 140 x 40 pixels is ideal'
	) );
	$section->createOption( array(
		'name' => __( 'Align menu items to the right?', 'growthspark' ),
		'id' => 'main_nav_left_or_right',
		'type' => 'checkbox',
		'desc' => 'Check this box to align the menu right, great if you are only using one menu item,',
		'default' => false,
	) );
	$section->createOption( array(
	    'name' => __( 'Sitewide Font Style (professional font pairings)', 'growthspark' ),
	    'id' => 'typo',
	    'type' => 'select',
	    'desc' => 'Select a Font Theme',
		'options' => array(
			'f_oswald' => 'Mr Oswald',
			'f_libre_r' => 'Libre Roboto',
			'f_julius' => 'Julius Archivo',
			'f_hound' => 'Hound of the Baskerville',
			'f_libre_r' => 'Libre Roboto',
			'f_open' => 'So Open',
			'f_domo' => 'Domo',
			'f_default' => 'Open Default',
		),
		'default' => 'f_default',
	    
	) );
	$section->createOption( array(
	    'name' => __( 'Sidebar Style', 'growthspark' ),
	    'id' => 'sb_style',
	    'type' => 'select',
	    'desc' => 'Some optional light styling for the sidebar and comments area.',
		'options' => array(
			'sb_default' => 'Default (No Decoration)',
			'sb_border' => 'Border',
			'sb_shadow' => 'Shadow',
			'sb_gray' => 'Gray Background',
		),
		'default' => 'sb_default',
	) );
	$section->createOption( array(
		'name' => __( 'Activate Header Image* on sub pages? *Header Image has it\'s own setting in the customizer. It is the main banner image for the home page.', 'growthspark' ),
		'id' => 'sub_page_head',
		'type' => 'checkbox',
		'desc' => 'Check this box to have a narrow version of the header image show up on the rest of the site.',
		'default' => false,
	) );


	$section->createOption( array(
		'type' => 'note',
		'desc' => '<hr><h3>HOME PAGE OPTIONS</h3><p>NOTE: The banner area text in controlled by a <a target="_blank" href="../wp-admin/widgets.php">widget</a>. The button (CTA) is controlled below.</p><hr>',
	) );

	$section->createOption( array(	
		'name' => __( 'Top CTA Text', 'growthspark' ),
		'id' => 'top_cta_text',
		'type' => 'text',
		'desc' => '"Click here" is a classic, "Learn More" is good too.'
	) );
	$section->createOption( array(	
		'name' => __( 'Top CTA Link', 'growthspark' ),
		'id' => 'top_cta_url',
		'type' => 'text',
		'desc' => 'Full URL where you want the CTA link to go.'
	) );
	$section->createOption( array(
		'name' => 'Color for the top call to action button',
		'id' => 'cta_top_color',
		'type' => 'color',
		'desc' => 'Pick a color',
		'default' => '#1e73be',
	) );
	$section->createOption( array(
		'name' => 'Background color for the call to action button',
		'id' => 'cta_top_background_color',
		'type' => 'color',
		'desc' => 'Pick a color',
		'default' => '#ffffff',
	) );





	$section->createOption( array(
		'name' => __( 'Activate Client Logos section', 'growthspark' ),
		'id' => 'activate_clients',
		'type' => 'checkbox',
		'desc' => 'Check this box to activate this section',
		'default' => false,
	) );
	$section->createOption( array(
		'name' => __( 'Client Logo One', 'growthspark' ),
		'id' => 'logo_one',
		'type' => 'upload',
		'desc' => 'Upload your file',
		'placeholder' => 'Upload a Logo - 350x60 pixels is ideal'
	) );
	$section->createOption( array(
		'name' => __( 'Client Logo Two', 'growthspark' ),
		'id' => 'logo_two',
		'type' => 'upload',
		'desc' => 'Upload your file',
		'placeholder' => 'Upload a Logo - 350x60 pixels is ideal'
	) );
	$section->createOption( array(
		'name' => __( 'Client Logo Three', 'growthspark' ),
		'id' => 'logo_three',
		'type' => 'upload',
		'desc' => 'Upload your file.<hr><br>',
		'placeholder' => 'Upload a Logo - 350x60 pixels is ideal'
	) );




	$section->createOption( array(
		'name' => __( 'Activate Front Page Content area?', 'growthspark' ),
		'id' => 'content_active',
		'type' => 'checkbox',
		'desc' => 'The content is controlled under "Pages" and will be the one labelled "Front Page".',
		'default' => false,
	) );
	$section->createOption( array(
		'name' => __( 'Give this section a "container"? You may need one if not using a page builder', 'growthspark' ),
		'id' => 'content_active_container',
		'type' => 'checkbox',
		'desc' => 'Check box to put content in a container. <hr>',
		'default' => true,
	) );



	$section->createOption( array(
		'name' => __( 'Activate Testimonial Section', 'growthspark' ),
		'id' => 'activate_testimonial',
		'type' => 'checkbox',
		'desc' => 'Check this box to activate this section',
		'default' => false,
	) );
	$section->createOption( array(	
		'name' => __( 'Testimonial', 'growthspark' ),
		'id' => 'testimonial',
		'type' => 'textarea',
		'desc' => 'Enter your testimonial here. Accepts basic HTML if you want more than just a line of text. <hr>'
	) );



	$section->createOption( array(
		'name' => __( 'Activate About Us Section?', 'growthspark' ),
		'id' => 'activate_about_us',
		'type' => 'checkbox',
		'desc' => 'Check this box to activate this section',
		'default' => false,
	) );
	$section->createOption( array(	
		'name' => __( 'About Us Section Title', 'growthspark' ),
		'id' => 'about_us_title',
		'type' => 'text',
		'desc' => 'It doesn\'t have to be ABOUT US, you can put whatever here.'
	) );
	$section->createOption( array(	
		'name' => __( 'About Us Section Text', 'growthspark' ),
		'id' => 'about_us_text',
		'type' => 'textarea',
		'desc' => 'Enter your text here. '
	) );
	$section->createOption( array(
		'name' => __( 'About Us Image', 'growthspark' ),
		'id' => 'about_us_image',
		'type' => 'upload',
		'desc' => 'Upload your file',
		'placeholder' => 'Upload a large image - 2200px wide by 1200px tall approximately. Remember, there will be text on top of it on the right side.'
	) );
	$section->createOption( array(
		'name' => __( 'Make the text white instead of black?', 'growthspark' ),
		'id' => 'about_us_white',
		'type' => 'checkbox',
		'desc' => 'Check this box to make it white.<br><hr>',
		'default' => false,
	) );




	$section->createOption( array(
		'name' => __( 'Activate Secondary CTA?', 'growthspark' ),
		'id' => 'activate_cta_2',
		'type' => 'checkbox',
		'desc' => 'Check this box to activate a second CTA.',
		'default' => false,
	) );
	$section->createOption( array(
		'name' => 'Background color for the secondary call to action section',
		'id' => 'secondary_cta_background_color',
		'type' => 'color',
		'desc' => 'Pick a color',
		'default' => 'darkgreen',
	) );
	$section->createOption( array(	
		'name' => __( 'Mid CTA Text', 'growthspark' ),
		'id' => 'mid_cta_text',
		'type' => 'text',
		'desc' => 'Add a "value prop" here, something to make people want to click your call to action.'
	) );
	$section->createOption( array(	
		'name' => __( 'Mid CTA Button Text', 'growthspark' ),
		'id' => 'mid_cta_button_text',
		'type' => 'text',
		'desc' => '"Get Started" is another good one, "Let\'s Do It!" is fun.'
	) );
	$section->createOption( array(	
		'name' => __( 'Mid CTA Link', 'growthspark' ),
		'id' => 'mid_cta_url',
		'type' => 'text',
		'desc' => 'Full URL.'
	) );
	$section->createOption( array(
		'name' => __( 'Activate BONUS CTA?', 'growthspark' ),
		'id' => 'activate_cta_3',
		'type' => 'checkbox',
		'desc' => 'Check this box to activate this second CTA in the footer sitewide. Great for extra conversions. <br><hr>',
		'default' => false,
	) );




	$section->createOption( array(
		'name' => __( 'Activate Another Fancy Content area?', 'growthspark' ),
		'id' => 'extra_content_active',
		'type' => 'checkbox',
		'desc' => 'Check this box to add a content area with an image background. <hr><br>',
		'default' => false,
	) );
	$section->createOption( array(	
		'name' => __( 'About Us Section Title', 'growthspark' ),
		'id' => 'extra_content_title',
		'type' => 'text',
		'desc' => 'Add a title.'
	) );
	$section->createOption( array(	
		'name' => __( 'About Us Section Text', 'growthspark' ),
		'id' => 'extra_content_text',
		'type' => 'textarea',
		'desc' => 'Enter your text here.'
	) );
	$section->createOption( array(
		'name' => __( 'Make the text white instead of black?', 'growthspark' ),
		'id' => 'extra_content_white',
		'type' => 'checkbox',
		'desc' => 'Check this box to make it white.<br><hr>',
		'default' => false,
	) );
	$section->createOption( array(
		'name' => __( 'Content Area Background Image', 'growthspark' ),
		'id' => 'ca_bg_image',
		'type' => 'upload',
		'desc' => 'Upload a large image - 2200px wide by 1200px tall approximately.',
	) );









	/**
	 * Create an admin panel & tabs
	 * You should put options here that do not change the look of your theme
	 */
	
	$adminPanel = $titan->createAdminPanel( array(
	    'name' => __( 'Spark Settings', 'growthspark' ),
	) );
	
	$generalTab = $adminPanel->createTab( array(
	    'name' => __( 'General', 'growthspark' ),
	) );
	$popupTab = $adminPanel->createTab( array(
	    'name' => __( 'Pop Up', 'growthspark' ),
	) );
	$slideoutTab = $adminPanel->createTab( array(
	    'name' => __( 'Slide Out', 'growthspark' ),
	) );




	$generalTab->createOption( array(
	    'name' => __( 'Custom Javascript Code', 'growthspark' ),
	    'id' => 'custom_js',
	    'type' => 'code',
	    'desc' => __( 'If you want to add some additional Javascript code (analytics for example) into your site, add them here and it will be included in the front end (bottom of page). No need to add <code>script</code> tags', 'growthspark' ),
	    'lang' => 'javascript',
	) );
	$generalTab->createOption( array(
	    'type' => 'save',
	) );
	


	$footerTab = $adminPanel->createTab( array(
	    'name' => __( 'Footer', 'growthspark' ),
	) );
	
	$footerTab->createOption( array(
		'name' => __( 'Copyright Area Text', 'growthspark' ),
		'id' => 'copyright',
		'type' => 'text',
		'desc' => __( 'Enter your copyright text here eg: &copy; MySite.com', 'growthspark' ),
	) );
	$footerTab->createOption( array(
	    'type' => 'save',
	) );



	$popupTab->createOption( array(
		'name' => __( 'Activate Pop Up', 'growthspark' ),
		'id' => 'pu_active',
		'type' => 'checkbox',
		'desc' => 'Check this box to turn on the pop up.',
		'default' => false,
	) );
	$popupTab->createOption( array(
		'name' => __( 'How many secunds until pop up is shown?', 'growthspark' ),
		'id' => 'pu_timeout',
		'type' => 'number',
		'desc' => 'Lower number means people will see it faster, but it\'s also more aggressive.',
		'default' => '3',
		'max' => '180',
	) );
	$popupTab->createOption( array(
		'name' => 'Pop Up Background Color',
		'id' => 'pop_up_bg_color',
		'type' => 'color',
		'desc' => 'Pick a color',
		'default' => 'green',
	) );
	$popupTab->createOption( array(
		'name' => __( 'Headline', 'growthspark' ),
		'id' => 'pu_headline',
		'type' => 'text',
		'desc' => __( 'Enter your headline', 'growthspark' ),
	) );
	$popupTab->createOption( array(
		'name' => __( 'Sub-heading', 'growthspark' ),
		'id' => 'pu_sub_head',
		'type' => 'text',
		'desc' => __( 'Enter your sub heading', 'growthspark' ),
	) );
	$popupTab->createOption( array(
		'name' => __( 'Form Code', 'growthspark' ),
		'id' => 'pu_code',
		'type' => 'textarea',
		'is_code' => true,
		'desc' => __( 'Paste in the form code from any provider (mailchimp, campaign monitor, etc) here', 'growthspark' ),
	) );
	$popupTab->createOption( array(
	    'type' => 'save',
	) );




	$slideoutTab->createOption( array(
		'name' => __( 'Activate Slide Out', 'growthspark' ),
		'id' => 'activate_slide_out',
		'type' => 'checkbox',
		'desc' => __( 'Activate the slide out, it shows up on blog posts. You can control it with the <a href="../wp-admin/widgets.php">widget</a> called "Bottom Slide Out" ', 'growthspark' ),
		'default' => false,
	) );
	/*
	$popupTab->createOption( array(
		'name' => __( 'Headline', 'growthspark' ),
		'id' => 'so_headline',
		'type' => 'text',
		'desc' => __( 'Enter your headline', 'growthspark' ),
	) );
	$popupTab->createOption( array(
		'name' => __( 'Sub-heading', 'growthspark' ),
		'id' => 'so_sub_head',
		'type' => 'text',
		'desc' => __( 'Enter your sub heading', 'growthspark' ),
	) );
	$popupTab->createOption( array(
		'name' => __( 'Link', 'growthspark' ),
		'id' => 'so_code',
		'type' => 'textarea',
		'is_code' => true,
		'desc' => __( 'Paste in the form code from any provider (mailchimp, campaign monitor, etc) here', 'growthspark' ),
	) );
	*/
	$slideoutTab->createOption( array(
	    'type' => 'save',
	) );	
}


