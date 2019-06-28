<?php
/**
 * Genesis Sample.
 *
 * This file adds the Customizer additions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */
?>
<!-- <style>
.range-slider-area .range-slider {
  width: 68% !important;
  height: 12px;
}

.range-slider-area .range-text {
    width: 15% !important;    
}

.range-slider-area .range-value {
  width: 12% !important;
  font-size: 14px;
}

 </style> -->
 <?php
$custom_google_fonts = require_once __DIR__ . '/google-fonts.php';

if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Range extends WP_Customize_Control
    {
        public $type = 'range';
        
        public function __construct($manager, $id, $args = array())
        {
            parent::__construct($manager, $id, $args);
            $defaults = array(
                'min' => 0,
                'max' => 10,
                'step' => 1
            );
            $args     = wp_parse_args($args, $defaults);
            
            $this->min  = $args['min'];
            $this->max  = $args['max'];
            $this->step = $args['step'];
        }
        
        public function render_content()
        {
?>


        <label>
            <span class="customize-control-title"><?php
            echo esc_html($this->label);
?></span>
        <div class="range-slider-area">
                  <input class='range-slider' id="slider" min="<?php
            echo $this->min;
?>" max="<?php
            echo $this->max;
?>" step="<?php
            echo $this->step;
?>" type='range' <?php
            $this->link();
?> value="<?php
            echo esc_attr($this->value());
?>" oninput="jQuery(this).next('input').val( jQuery(this).val() )">
            <input class="range-text" onKeyUp="jQuery(this).prev('input').val( jQuery(this).val() )" type='text' <?php
            $this->link();
?> value='<?php
            echo esc_attr($this->value());
?>'>
            <input class="range-value" type="text" placeholder="px" disabled>
        </div>
        </label>
        <?php
        }
    }
}
add_action('customize_register', 'genesis_sample_customizer_register');
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function genesis_sample_customizer_register($wp_customize)
{
    
    
    $wp_customize->add_setting('genesis_sample_logo_width', array(
        'default' => 350,
        'sanitize_callback' => 'absint'
    ));
    
    // Add a control for the logo size.
    $wp_customize->add_control('genesis_sample_logo_width', array(
        'label' => __('Logo Width', 'genesis-sample'),
        'description' => __('The maximum width of the logo in pixels.', 'genesis-sample'),
        'priority' => 9,
        'section' => 'title_tagline',
        'settings' => 'genesis_sample_logo_width',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 100
        )
        
    ));
}








// add header navigation section
add_action('customize_register', 'theme_footer_customizer');
function theme_footer_customizer($wp_customize)
{
    //adding section in wordpress customizer 
    $wp_customize->add_section('footer_settings_section', array(
        'title' => 'Test Section'
    ));
    
    
    //header
    $wp_customize->add_setting('header_position', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
        array(
        'default' => 'default', //Default setting/value to save
        'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
        'capability' => 'edit_theme_options' //Optional. Special permissions for accessing this setting.
        //'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, //Pass the $wp_customize object (required)
        'parsmizban_theme_name', //Set a unique ID for the control
        array(
        'label' => __('Header Position', 'parsmizban'), //Admin-visible name of the control
        'description' => __('Using this option you can change the nav menu position'),
        'settings' => 'header_position', //Which setting to load and manipulate (serialized is okay)
        'priority' => 10, //Determines the order this control appears in for the specified section
        'section' => 'footer_settings_section', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'default' => __('Navigation Left', 'genesis-sample'),
            'nav-center' => __('Navigation Center', 'genesis-sample'),
            'nav-right' => __('Navigation right', 'genesis-sample')
        )
    )));
    
    
}

// add fonts panel
add_action('customize_register', 'fonts_panel');
function fonts_panel($wp_customize)
{
    global $custom_google_fonts;
    
    $wp_customize->add_section('custom_google_fonts_section', array(
        'title' => __('Fonts', 'genesis-sample'),
        'priority' => 24
    ));
    // Heading Font.
    $wp_customize->add_setting('custom_headings_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts'
    ));
    
    $wp_customize->add_control('custom_headings_font', array(
        'type' => 'select',
        'description' => __('Select your desired font for the headings.', 'genesis-sample'),
        'label' => __('Heading font family'),
        'section' => 'custom_google_fonts_section',
        'choices' => $custom_google_fonts
    ));
    
    
    // Body Font.
    $wp_customize->add_setting('custom_body_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts'
    ));
    
    $wp_customize->add_control('custom_body_font', array(
        'type' => 'select',
        'description' => __('Select your desired font for the body.', 'genesis-sample'),
        'section' => 'custom_google_fonts_section',
        'label' => __('Body font family'),
        'choices' => $custom_google_fonts
    ));
    //  body font size
    $wp_customize->add_setting('font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('font_size', array(
        'type' => 'text',
        'section' => 'custom_google_fonts_section', // Add a default or your own section
        'label' => __('Body font size'),
        'description' => __('font size change in website all content')
    ));
    
    
    //  H1 font size
    $wp_customize->add_setting('h1_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '48',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    // $wp_customize->add_control( 'h1_font_size', array(
    //   'type' => 'text',
    //   'section' => 'custom_google_fonts_section', // Add a default or your own section
    //   'label' => __( 'H1 font size' ),
    //   'description' => __( 'font size change in H1 heading' ),
    // ) );
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h1_font_size', array(
        'label' => 'H1 font size',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    // H1 line height
    $wp_customize->add_setting('h1_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '52',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h1_line_height', array(
        'label' => 'H1 line height',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    
    // H1 margin bottom
    $wp_customize->add_setting('h1_margin_bottom', array(
        'capability' => 'edit_theme_options',
        'default' => '20'
    ));
    
    $wp_customize->add_control('h1_margin_bottom', array(
        'label' => 'H1 margin bottom',
        'type' => 'text',
        'section' => 'custom_google_fonts_section'
        
    ));
    
    // $wp_customize->add_control( 'posts_number_home', array(
    //   'section'  => 'mytheme_options',
    //   'settings' => 'posts_number_home',
    //   'type' => 'text',
    //   'priority' => 10,
    // ) 
    // ));
    
    //  H2 font size
    $wp_customize->add_setting('h2_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '40',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h2_font_size', array(
        'label' => 'H2 font size',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    // H2 line height
    $wp_customize->add_setting('h2_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '44',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h2_line_height', array(
        'label' => 'H2 line height',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    //  H3 font size
    $wp_customize->add_setting('h3_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '34',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h3_font_size', array(
        'label' => 'H3 font size',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    // H3 line height
    $wp_customize->add_setting('h3_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '38',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h3_line_height', array(
        'label' => 'H3 line height',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    //  H4 font size
    $wp_customize->add_setting('h4_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '30',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h4_font_size', array(
        'label' => 'H4 font size',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    // H4 line height
    $wp_customize->add_setting('h4_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '34',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h4_line_height', array(
        'label' => 'H4 line height',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    
    //  H5 font size
    $wp_customize->add_setting('h5_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '26',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h5_font_size', array(
        'label' => 'H5 font size',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    // H5 line height
    $wp_customize->add_setting('h5_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '30',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h5_line_height', array(
        'label' => 'H5 line height',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    //  H6 font size
    $wp_customize->add_setting('h6_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '20',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h6_font_size', array(
        'label' => 'H6 font size',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
    // H6 line height
    $wp_customize->add_setting('h6_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '24',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h6_line_height', array(
        'label' => 'H6 line height',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'custom_google_fonts_section'
    )));
    
}

// add color panel
add_action('customize_register', 'colors_panel');
function colors_panel($wp_customize)
{
    $wp_customize->add_panel('some_panel', array(
        'title' => 'Colors',
        'description' => 'This is panel Description',
        'priority' => 25
    ));
    
    //********** body color section start**********
    $wp_customize->add_section('body_color_sec', array(
        'title' => 'Body ',
        'panel' => 'some_panel'
    ));
    
    // background color
    $wp_customize->add_setting('body_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_background', array(
        'label' => __('Background Color', 'genesis-sample'),
        'section' => 'body_color_sec',
        'settings' => 'body_background'
    )));
    
    // text color
    $wp_customize->add_setting('body_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_text', array(
        'label' => __('Text Color', 'genesis-sample'),
        'section' => 'body_color_sec',
        'settings' => 'body_text'
    )));
    
    // link color
    $wp_customize->add_setting('body_link', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_link', array(
        'label' => __('Link Color', 'genesis-sample'),
        'section' => 'body_color_sec',
        'settings' => 'body_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('body_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-sample'),
        'section' => 'body_color_sec',
        'settings' => 'body_link_hover'
    )));
    
    // link visited color
    $wp_customize->add_setting('body_link_visited', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_link_visited', array(
        'label' => __('Link Visited Color', 'genesis-sample'),
        'section' => 'body_color_sec',
        'settings' => 'body_link_visited'
    )));
    
    // ************body color section end************
    
    
    // ************header color section ************
    
    // header color section start
    $wp_customize->add_section('header_color_sec', array(
        'title' => 'Header ',
        'panel' => 'some_panel'
    ));
    
    // background color
    $wp_customize->add_setting('header_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background', array(
        'label' => __('Background Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_background'
    )));
    
    // link color
    $wp_customize->add_setting('header_link', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_link', array(
        'label' => __('Link Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('header_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_link_hover'
    )));
    
    // Site Title color
    $wp_customize->add_setting('header_site_title', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_site_title', array(
        'label' => __('Site Title Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_site_title'
    )));
    
    // Site Description color
    $wp_customize->add_setting('header_site_description', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_site_description', array(
        'label' => __('Site Title Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_site_description'
    )));
    
    // ************header color section end************
    
    
    
    // ************navigation color section ************
    $wp_customize->add_section('nav_color_sec', array(
        'title' => 'Navigation ',
        'panel' => 'some_panel'
    ));
    // text color
    $wp_customize->add_setting('nav_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text', array(
        'label' => __('Text Color', 'genesis-sample'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text'
    )));
    
    // text hover color
    $wp_customize->add_setting('nav_text_hover', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_hover', array(
        'label' => __('Text Hover Color', 'genesis-sample'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text_hover'
    )));
    
    // background color
    $wp_customize->add_setting('nav_text_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_background', array(
        'label' => __('Background Color', 'genesis-sample'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text_background'
    )));
    
    // background hover color
    $wp_customize->add_setting('nav_text_background_hover', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_background_hover', array(
        'label' => __('Background Hover Color', 'genesis-sample'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text_background_hover'
    )));
    
    // current text  color
    $wp_customize->add_setting('current_nav_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'current_nav_text', array(
        'label' => __('Current Text', 'genesis-sample'),
        'section' => 'nav_color_sec',
        'settings' => 'current_nav_text'
    )));
    
    // current text background color
    $wp_customize->add_setting('current_nav_text_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'current_nav_text_background', array(
        'label' => __('Current Background', 'genesis-sample'),
        'section' => 'nav_color_sec',
        'settings' => 'current_nav_text_background'
    )));
    
    // ************navigation color section end************
    
    
    // ************header color section ************
    
    // header color section start
    $wp_customize->add_section('header_color_sec', array(
        'title' => 'Header ',
        'panel' => 'some_panel'
    ));
    
    // background color
    $wp_customize->add_setting('header_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background', array(
        'label' => __('Background Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_background'
    )));
    
    // link color
    $wp_customize->add_setting('header_link', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_link', array(
        'label' => __('Link Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('header_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_link_hover'
    )));
    
    // Site Title color
    $wp_customize->add_setting('header_site_title', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_site_title', array(
        'label' => __('Site Title Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_site_title'
    )));
    
    // Site Description color
    $wp_customize->add_setting('header_site_description', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_site_description', array(
        'label' => __('Site Title Color', 'genesis-sample'),
        'section' => 'header_color_sec',
        'settings' => 'header_site_description'
    )));
    // ************header color section end************
    
    
    
    // ************Button color section ************
    $wp_customize->add_section('button_color_sec', array(
        'title' => 'Buttons ',
        'panel' => 'some_panel'
    ));
    // text color
    $wp_customize->add_setting('button_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text', array(
        'label' => __('Text Color', 'genesis-sample'),
        'section' => 'button_color_sec',
        'settings' => 'button_text'
    )));
    
    // text hover color
    $wp_customize->add_setting('button_text_hover', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text_hover', array(
        'label' => __('Text Hover Color', 'genesis-sample'),
        'section' => 'button_color_sec',
        'settings' => 'button_text_hover'
    )));
    
    // background color
    $wp_customize->add_setting('button_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_background', array(
        'label' => __('Background Color', 'genesis-sample'),
        'section' => 'button_color_sec',
        'settings' => 'button_background'
    )));
    
    // background hover color
    $wp_customize->add_setting('button_background_hover', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_background_hover', array(
        'label' => __('Background Hover Color', 'genesis-sample'),
        'section' => 'button_color_sec',
        'settings' => 'button_background_hover'
    )));
    // ************Button color section  end************
    
    
    
    //  ************Heading  color section ************
    $wp_customize->add_section('heading_color_sec', array(
        'title' => 'Heading ',
        'panel' => 'some_panel'
    ));
    // heading h1 color
    $wp_customize->add_setting('h1_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h1_text', array(
        'label' => __('Heading H1 Color', 'genesis-sample'),
        'section' => 'heading_color_sec',
        'settings' => 'h1_text'
    )));
    // heading h2 color
    $wp_customize->add_setting('h2_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h2_text', array(
        'label' => __('Heading H2 Color', 'genesis-sample'),
        'section' => 'heading_color_sec',
        'settings' => 'h2_text'
    )));
    // heading h3 color
    $wp_customize->add_setting('h3_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h3_text', array(
        'label' => __('Heading H3 Color', 'genesis-sample'),
        'section' => 'heading_color_sec',
        'settings' => 'h3_text'
    )));
    // heading h4 color
    $wp_customize->add_setting('h4_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h4_text', array(
        'label' => __('Heading H4 Color', 'genesis-sample'),
        'section' => 'heading_color_sec',
        'settings' => 'h4_text'
    )));
    // heading h5 color
    $wp_customize->add_setting('h5_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h5_text', array(
        'label' => __('Heading H5 Color', 'genesis-sample'),
        'section' => 'heading_color_sec',
        'settings' => 'h5_text'
    )));
    // heading h6 color
    $wp_customize->add_setting('h6_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h6_text', array(
        'label' => __('Heading H6 Color', 'genesis-sample'),
        'section' => 'heading_color_sec',
        'settings' => 'h6_text'
    )));
    
    
    // ************footer color section ************
    
    // footer color section start
    $wp_customize->add_section('footer_color_sec', array(
        'title' => 'Footer ',
        'panel' => 'some_panel'
    ));
    
    // background color
    $wp_customize->add_setting('footer_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background', array(
        'label' => __('Background Color', 'genesis-sample'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_background'
    )));
    
    // Site Title color
    $wp_customize->add_setting('footer_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text', array(
        'label' => __('Text', 'genesis-sample'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_text'
    )));
    
    // link color
    $wp_customize->add_setting('footer_link', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link', array(
        'label' => __('Link Color', 'genesis-sample'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('footer_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-sample'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_link_hover'
    )));
    
    // Site Description color
    $wp_customize->add_setting('footer_widget_title', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_widget_title', array(
        'label' => __('Widget Title Color', 'genesis-sample'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_widget_title'
    )));
    // ************footer color section end************
    
    // ************Form color section ************
    
    // form color section start
    $wp_customize->add_section('form_color_sec', array(
        'title' => 'Form ',
        'panel' => 'some_panel'
    ));
    
    // Background color
    $wp_customize->add_setting('form_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_background', array(
        'label' => __('Background Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_background'
    )));
    
    // label color
    $wp_customize->add_setting('form_label_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_label_text', array(
        'label' => __('Label Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_label_text'
    )));
    
    // text color
    $wp_customize->add_setting('form_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_text', array(
        'label' => __('Text Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_text'
    )));
    
    // palceholder text color
    $wp_customize->add_setting('form_placeholder_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_placeholder_text', array(
        'label' => __('Placeholder Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_placeholder_text'
    )));
    
    // background color
    $wp_customize->add_setting('form_field_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_background', array(
        'label' => __('Field Background Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_background'
    )));
    
    // border color
    $wp_customize->add_setting('form_field_border', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_border', array(
        'label' => __('Border Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_border'
    )));
    
    // focus_text color
    $wp_customize->add_setting('form_focus_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_focus_text', array(
        'label' => __('Focus Text Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_focus_text'
    )));
    
    // focus palceholder text color
    $wp_customize->add_setting('form_placeholder_focus_text', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_placeholder_focus_text', array(
        'label' => __('Focus Placeholder Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_placeholder_focus_text'
    )));
    
    // focus background color
    $wp_customize->add_setting('form_field_focus_background', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_focus_background', array(
        'label' => __('Focus Field Background Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_focus_background'
    )));
    
    // focus border color
    $wp_customize->add_setting('form_field_focus_border', array(
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_focus_border', array(
        'label' => __('Focus Border Color', 'genesis-sample'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_focus_border'
    )));
}