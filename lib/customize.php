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
$custom_google_fonts = require_once __DIR__ . '/google-fonts.php';
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
    global $custom_google_fonts;
    $wp_customize->add_setting('genesis_sample_link_color', array(
        'default' => genesis_sample_customizer_get_default_link_color(),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'genesis_sample_link_color', array(
        'description' => __('Change the color of post info links and button blocks, the hover color of linked titles and menu items, and more.', 'genesis-sample'),
        'label' => __('Link Color', 'genesis-sample'),
        'section' => 'colors',
        'settings' => 'genesis_sample_link_color'
    )));
    
    $wp_customize->add_setting('genesis_sample_accent_color', array(
        'default' => genesis_sample_customizer_get_default_accent_color(),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'genesis_sample_accent_color', array(
        'description' => __('Change the default hover color for button links, menu buttons, and submit buttons. The button block uses the Link Color.', 'genesis-sample'),
        'label' => __('Accent Color', 'genesis-sample'),
        'section' => 'colors',
        'settings' => 'genesis_sample_accent_color'
    )));
    
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
    $wp_customize->add_section('custom_google_fonts_section', array(
        'title' => __('Google Fonts', 'genesis-sample'),
        'priority' => 24
    ));
    
    // Heading Font.
    $wp_customize->add_setting('custom_headings_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts'
    ));
    
    $wp_customize->add_control('custom_headings_font', array(
        'type' => 'select',
        'description' => __('Select your desired font for the headings.', 'genesis-sample'),
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
        'choices' => $custom_google_fonts
    ));
    
}
add_action('customize_register', 'theme_footer_customizer');
function theme_footer_customizer($wp_customize)
{
    //adding section in wordpress customizer 
    $wp_customize->add_section('footer_settings_section', array(
        'title' => 'Test Section'
	));
	


    //adding setting for footer text area
    $wp_customize->add_setting('text_setting', array(
        'default' => 'Default Text For Footer Section'
    ));
    $wp_customize->add_control('text_setting', array(
        'label' => 'Footer Text Here',
        'section' => 'footer_settings_section',
        'type' => 'textarea'
    ));
	
	

	$wp_customize->add_setting('footer_logo');
	$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'footer_logo',array(
		'label'      => __('Footer Logo', 'genesis-sample'),
		'section'    => 'footer_settings_section',
		'settings'   => 'footer_logo',
		'width' => 355,
    'height' => 200
	)));
    
    
    
    //header
    $wp_customize->add_setting( 'header_position', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
 array(
    'default'    => 'default', //Default setting/value to save
    'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
    'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
    //'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
 ) 
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize, //Pass the $wp_customize object (required)
        'parsmizban_theme_name', //Set a unique ID for the control
        array(
        'label'      => __( 'Header Position', 'parsmizban' ), //Admin-visible name of the control
        'description' => __( 'Using this option you can change the theme colors' ),
        'settings'   => 'header_position', //Which setting to load and manipulate (serialized is okay)
        'priority'   => 10, //Determines the order this control appears in for the specified section
        'section'    => 'footer_settings_section', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type'    => 'select',
        'choices' => array(
            'current' => __('Current', 'genesis-sample'),
            'default' => __('Default', 'genesis-sample'),
            'nav-before-centered' => __('Navigation Before - Centered', 'genesis-sample'),
            'nav-after-centered' => __('Navigation After - Centered', 'genesis-sample'),
            'nav-right' => __('Navigation Right', 'genesis-sample'),
            'nav-left' => __('Navigation Left', 'genesis-sample')
        )
    )
    ) );
        
}