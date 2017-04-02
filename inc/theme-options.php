<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => __( 'General Site Settings', 'growthspark' )
      ),
      array(
        'id'          => 'front_page',
        'title'       => __( 'Front Page', 'growthspark' )
      ),
      array(
        'id'          => 'pop_up',
        'title'       => __( 'Pop Up', 'growthspark' )
      ),
      array(
        'id'          => 'footer_area',
        'title'       => __( 'Footer Area', 'growthspark' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'top_left',
        'label'       => __( 'Site Name or Upload a Logo?', 'growthspark' ),
        'desc'        => __( 'Do you want to use the name of your site in text (from Settings &gt; General) or a graphic logo in the top left?', 'growthspark' ),
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'site_name',
            'label'       => __( 'Site name works for me.', 'growthspark' ),
            'src'         => ''
          ),
          array(
            'value'       => 'logo',
            'label'       => __( 'I have a logo I just have to use.', 'growthspark' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'upload_logo',
        'label'       => __( 'Upload Logo', 'growthspark' ),
        'desc'        => __( 'Upload your graphic, not too big of a file (less that 5mb) and wide rectangle works best.', 'growthspark' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_left:is(logo)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'favicon',
        'label'       => __( 'Favicon', 'growthspark' ),
        'desc'        => __( 'Upload a square image you want to show up in the browser tab when people visit your site. DO NOT upload an image over 300px wide, in reality, a 32px square will work in most cases.', 'growthspark20' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'google_analytics',
        'label'       => __( 'Google Analytics', 'growthspark' ),
        'desc'        => __( 'Paste in your analytics code here. It can be Google analytics, or any analytics code you want to be in the footer of the site. Be sure to include "script" tags. What you paste in the box is what will appear in the site code.', 'growthspark' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'main_hero_image',
        'label'       => __( 'Main Hero Image', 'growthspark' ),
        'desc'        => __( 'Ideal dimensions are 1400 x 492 pixels.', 'growthspark' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'hero_area_headline',
        'label'       => __( 'Hero Area Headline', 'growthspark' ),
        'desc'        => __( 'Enter your custom message here. If you choose not to enter a custom message, the site title (Settings &gt; General) will be used.', 'growthspark' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'hero_area_sub_title',
        'label'       => __( 'Hero Area Sub Title', 'growthspark' ),
        'desc'        => __( 'Enter your custom message here. If you choose not to enter a custom message, the site description (Settings &gt; General) will be used.', 'growthspark' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pu_active',
        'label'       => __( 'Do you want to activate the pop up?', 'growthspark' ),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'pop_up',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'pu_active_yes',
            'label'       => __( 'Yes', 'growthspark' ),
            'src'         => ''
          ),
          array(
            'value'       => 'pu_active_no',
            'label'       => __( 'No', 'growthspark' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'pu_test',
        'label'       => __( 'Pop Up Testing Mode Active?', 'growthspark' ),
        'desc'        => __( 'If test mode is ON, you will see the pop up every time you refresh the page. If it\'s OFF it will not be shown again once it\'s closed.', 'growthspark' ),
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'pop_up',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'pu_active:is(on)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'pu_test_on',
            'label'       => __( 'Test Mode ON', 'growthspark' ),
            'src'         => ''
          ),
          array(
            'value'       => 'pu_test_off',
            'label'       => __( 'Test mode OFF', 'growthspark' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'timeout',
        'label'       => __( 'How many seconds until pop up displays?', 'growthspark' ),
        'desc'        => __( '<div id="slide_val_alert"></div>', 'growthspark' ),
        'std'         => '5',
        'type'        => 'numeric-slider',
        'section'     => 'pop_up',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '0,30,1',
        'class'       => 'pu_timer_slide',
        'condition'   => 'pu_active:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pu_settings',
        'label'       => __( 'Settings', 'growthspark' ),
        'desc'        => __( 'How much control over the pop up content would you like?', 'growthspark' ),
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'pop_up',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'pu_active:is(on)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'pu_simple',
            'label'       => __( 'Simple', 'growthspark' ),
            'src'         => ''
          ),
          array(
            'value'       => 'pu_full',
            'label'       => __( 'Full Control', 'growthspark' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'full_design',
        'label'       => __( 'Full Design', 'growthspark' ),
        'desc'        => __( 'Here you can use any html design elements your heart desires. For more advanced users. Even works with form plugin shortcodes.', 'growthspark' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'pop_up',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'pu_settings:is(pu_full)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pop_up_title',
        'label'       => __( 'Title', 'growthspark' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'pop_up',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'pu_settings:is(pu_simple)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pop_up_description',
        'label'       => __( 'Description', 'growthspark' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'pop_up',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'pu_settings:is(pu_simple)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'form_code',
        'label'       => __( 'Form Code', 'growthspark' ),
        'desc'        => __( 'To be fully compatible with as many providers as possible, you may paste in any html sign up form code here. I recommend MailChimp, but there are many out there like Campaign Manager, Wufoo, typeform ... the list goes on. Even works with form plugin shortcodes.', 'growthspark' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'pop_up',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'pu_settings:is(pu_simple)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'twitter',
        'label'       => __( 'Twitter', 'growthspark' ),
        'desc'        => __( 'Your full twitter url goes here.', 'growthspark' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_area',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'facebook',
        'label'       => __( 'Facebook', 'growthspark' ),
        'desc'        => __( 'Full facebook page url.', 'growthspark' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_area',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_social',
        'label'       => __( 'Any Other Custom Icon and link you want', 'growthspark' ),
        'desc'        => __( 'Use any of the icons found here: http://fontawesome.io/examples/

Using the default code below, put the link you want where the # currently is, use the link above to find an appropriate icon. Or, you can pretty much put whatever you want here.', 'growthspark' ),
        'std'         => '<a href="#">
   <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-github fa-stack-1x fa-inverse"></i>
   </span>
</a>',
        'type'        => 'textarea',
        'section'     => 'footer_area',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}

function growthspark_setup() {
    function growthspark_path_notice() {
    
    echo '<div class="notice notice-success is-dismissible"><p>' . __( 'Thanks for using Growth Spark by GrowthHit.com! <a href="../wp-admin/themes.php?page=ot-theme-options">Click here</a> to get started! <br>Remember you can find the theme options at any time under <strong>Appearance -> Growth Spark Options</strong>. ', 'option-tree' ) . '</p></div>';
    
  }
  
  add_action( 'admin_notices', 'growthspark_path_notice' );
  
}

add_action( 'after_setup_theme', 'growthspark_setup' );