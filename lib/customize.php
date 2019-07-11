<?php
/**
 * Genesis Giant.
 *
 * This file adds the Customizer additions to the Genesis Giant Theme.
 *
 * @package Genesis Giant
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */
?>

 <?php
 
/**
 * This function adds some styles to the WordPress Customizer
 */

///////////////////////////////////////////////////
//////   customizer option with css start    //////
//////////////////////////////////////////////////

function my_customizer_styles() { ?>
	<style>
        .range-slider-area .range-slider {
            width: 68% !important;
            height: 12px;
        }

        .range-slider-area .range-text {
            width: 15% !important;    
        }

        .range-slider-area .range-value {
            width: 13% !important;
            text-align: center;
        }
        p.customizer_desc {
            font-size: 13px;
            font-style: italic;
            font-weight: normal;
        }

    </style>
<?php

}
add_action( 'customize_controls_print_styles', 'my_customizer_styles', 999 );



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
            echo esc_html($this->label);?>
           <p class='customizer_desc'><?php echo "".esc_html($this->description);?></p>
            </span>
            <div class="range-slider-area">
                    <input class='range-slider' id="slider" min="<?php
                echo $this->min; ?>" max="<?php
                echo $this->max;?>" step="<?php
                echo $this->step;?>" type='range' <?php
                $this->link();?> value="<?php
                echo esc_attr($this->value());?>" oninput="jQuery(this).next('input').val( jQuery(this).val() )">
                <input class="range-text" onKeyUp="jQuery(this).prev('input').val( jQuery(this).val() )" type='text' <?php
                $this->link();?> value='<?php
                echo esc_attr($this->value());?>'>
                <input class="range-value" type="text" placeholder="px" disabled>
            </div>
        </label>
        <?php
        }
    }
}
add_action('customize_register', 'genesis_giant_customizer_register');
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function genesis_giant_customizer_register($wp_customize)
{
    
    
    $wp_customize->add_setting('genesis_giant_logo_width', array(
        'default' => 350,
        'sanitize_callback' => 'absint'
    ));
    
    // Add a control for the logo size.
    $wp_customize->add_control('genesis_giant_logo_width', array(
        'label' => __('Logo Width', 'genesis-giant'),
        'description' => __('The maximum width of the logo in pixels.', 'genesis-giant'),
        'priority' => 9,
        'section' => 'title_tagline',
        'settings' => 'genesis_giant_logo_width',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 100
        )
        
    ));

    // Hide Site Title & Tagline
    $wp_customize->add_setting( 'hide_site_identity', array(
        'default' => true,
            ) );
        
        $wp_customize->add_control(
        'hide_site_identity',
        array(
            'section'   => 'title_tagline',
            'label'     => 'Hide Site Title & Tagline',
            'type'      => 'checkbox'
        ));
    
}








//--------------- add header navigation section-----------------
// add_action('customize_register', 'theme_footer_customizer');
// function theme_footer_customizer($wp_customize)
// {
//     //adding section in wordpress customizer 
//     $wp_customize->add_section('footer_settings_section', array(
//         'title' => 'Header Layout'
//     ));
    
    
//     //header
//     $wp_customize->add_setting('header_position',
//         array(
//         'default' => 'default',
//         'type' => 'theme_mod', 
//         'capability' => 'edit_theme_options' 
//     ));
//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,
//         'header_position', 
//         array(
//         'label' => __('Header Position', 'genesis-giant'), 
//         'description' => __('Using this option you can change the nav menu position'),
//         'settings' => 'header_position', 
//         'priority' => 10,
//         'section' => 'footer_settings_section', 
//         'type' => 'select',
//         'choices' => array(
//             'default' => __('Navigation Left', 'genesis-giant'),
//             'nav-center' => __('Navigation Center', 'genesis-giant'),
//             'nav-right' => __('Navigation right', 'genesis-giant')
//         )
//     )));
    

//     $wp_customize->add_setting('blog_column',
//     array(
//     'default' => '1',
//     'type' => 'theme_mod', 
//     'capability' => 'edit_theme_options' 
//     ));
//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,
//         'blog_column', 
//         array(
//         'label' => __('Blog Column', 'genesis-giant'), 
//         'settings' => 'blog_column', 
//         'section' => 'footer_settings_section', 
//         'type' => 'select',
//         'choices' => array(
//             '1' => __( '1' ),
//             '2' => __( '2' ),
//             '3' => __( '3' )
//         )
//     )));
    
// }
//-------------------header navigation end-------------------


//-------------------- add Typography panel--------------------
add_action('customize_register', 'fonts_panel');
function fonts_panel($wp_customize){

    global $custom_google_fonts;
    $wp_customize->add_panel('font_panels', array(
        'title' => 'Typography',
        'priority' => 24
    ));
     
    //********** body font section start**********
    
    $wp_customize->add_section('body_fonts_sec', array(
        'title' => 'Body ',
        'panel' => 'font_panels'
 
    ));
    
    // body font-family
    $wp_customize->add_setting('body_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Open Sans:400italic,700italic,400,700'
    ));
    
    $wp_customize->add_control('body_font', array(
        'type' => 'select',
        'description' => __('Select your desired font for the body.', 'genesis-giant'),
        'section' => 'body_fonts_sec',
        'label' => __('Font family'),
        'choices' => $custom_google_fonts
    ));

    



    //  body font size
    $wp_customize->add_setting('body_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '17',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'body_font_size', array(
        'label' => 'Font size',
        'min' => 8,
        'max' => 30,
        'step' => 1,
        'section' => 'body_fonts_sec'
    )));

    //  body font weight
    $wp_customize->add_setting('body_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '400'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'body_font_weight', array(
        'label' => 'Font weight',
        'section' => 'body_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

    // body line height
    $wp_customize->add_setting('body_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '27',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'body_line_height', array(
        'label' => 'Line height',
        'min' => 10,
        'max' => 36,
        'step' => 1,
        'section' => 'body_fonts_sec'
    )));

    // body Paragraph margin
    $wp_customize->add_setting('body_p_margin', array(
        'capability' => 'edit_theme_options',
        'default' => '15',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'body_p_margin', array(
        'label' => 'Paragraph Margin',
        'min' => 0,
        'max' => 50,
        'step' => 1,
        'section' => 'body_fonts_sec'
    )));

    
    //********** header font section start**********
    $wp_customize->add_section('header_fonts_sec', array(
        'title' => 'Header ',
        'panel' => 'font_panels'
    ));
    
    // header  Site Title font-family
    $wp_customize->add_setting('header_site_title_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('header_site_title_font', array(
        'type' => 'select',
        'section' => 'header_fonts_sec',
        'label' => __('Site Title (font family)'),
        'choices' => $custom_google_fonts
    ));

    //  header  Site Title font size
    $wp_customize->add_setting('header_site_title_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'header_site_title_font_size', array(
        'label' => 'Site Title (font size)',
        'min' => 8,
        'max' => 100,
        'step' => 1,
        'section' => 'header_fonts_sec'
    )));

    // header  Site Title line height
    $wp_customize->add_setting('header_site_title_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'header_site_title_line_height', array(
        'label' => 'Site Title (line height)',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'header_fonts_sec'
    )));

    // site title margin
    $wp_customize->add_setting('header_site_title_margin', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'header_site_title_margin', array(
        'label' => 'Site Title Margin',
        'min' => 0,
        'max' => 50,
        'step' => 1,
        'section' => 'header_fonts_sec'
    )));

    // header site title text transform
    $wp_customize->add_setting('header_site_title_text_transform', array(
        'default' => '', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'header_site_title_text_transform', 
        array(
        'label' => 'Site Title (text transform)', 
        'settings' => 'header_site_title_text_transform',         
        'section' => 'header_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ), 
          'lowercase' => __( 'lowercase' ),
        )
    )));

    // header  Site Description font-family
    $wp_customize->add_setting('header_site_description_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800',
    ));
    
    $wp_customize->add_control('header_site_description_font', array(
        'type' => 'select',
        'section' => 'header_fonts_sec',
        'label' => __('Site Description (font family)'),
        'choices' => $custom_google_fonts
    ));

    //  header  Site Description font size
    $wp_customize->add_setting('header_site_description_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'header_site_description_font_size', array(
        'label' => 'Site Description (font size)',
        'min' => 8,
        'max' => 30,
        'step' => 1,
        'section' => 'header_fonts_sec'
    )));

    // header  Site Description line height
    $wp_customize->add_setting('header_site_description_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'header_site_description_line_height', array(
        'label' => 'Site Description (line height)',
        'min' => 5,
        'max' => 40,
        'step' => 1,
        'section' => 'header_fonts_sec'
    )));

    // header Site Description margin
    $wp_customize->add_setting('header_site_description_margin', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'header_site_description_margin', array(
        'label' => 'Site Description (margin)',
        'min' => 0,
        'max' => 50,
        'step' => 1,
        'section' => 'header_fonts_sec'
    )));

    // header site title text transform
    $wp_customize->add_setting('header_site_description_text_transform', array(
        'default' => '',
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'header_site_description_text_transform', 
        array(
        'label' => 'Site Description (text transform)', 
        'settings' => 'header_site_description_text_transform',         
        'section' => 'header_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));
    //********** navigation font section start**********
    $wp_customize->add_section('navigation_fonts_sec', array(
        'title' => 'Navigation ',
        'panel' => 'font_panels'
    ));
    // navigation font-family
    $wp_customize->add_setting('navigation_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('navigation_font', array(
        'type' => 'select',
        'section' => 'navigation_fonts_sec',
        'label' => __('Font Family'),
        'choices' => $custom_google_fonts
    ));
    //  navigation font size
    $wp_customize->add_setting('navigation_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '14',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'navigation_font_size', array(
        'label' => 'Font Size',
        'min' => 8,
        'max' => 30,
        'step' => 1,
        'section' => 'navigation_fonts_sec'
    )));

    //  navigation font weight
    $wp_customize->add_setting('navigation_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '600'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navigation_font_weight', array(
        'label' => 'Font weight',
        'section' => 'navigation_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

     // navigation line height
     $wp_customize->add_setting('navigation_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '14',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'navigation_line_height', array(
        'label' => 'line Height',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'navigation_fonts_sec'
    )));

    // navigation text transform
    $wp_customize->add_setting('navigation_text_transform', array(
        'default' => 'uppercase',
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'navigation_text_transform', 
        array(
        'label' => 'Text Transform', 
        'settings' => 'navigation_text_transform',         
        'section' => 'navigation_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));
    //********** navigation font section end**********

    //********** button font section start**********
    $wp_customize->add_section('button_fonts_sec', array(
        'title' => 'Button ',
        'panel' => 'font_panels'
    ));
    // button font-family
    $wp_customize->add_setting('button_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('button_font', array(
        'type' => 'select',
        'section' => 'button_fonts_sec',
        'label' => __('Font family'),
        'choices' => $custom_google_fonts
    ));
    //  button font size
    $wp_customize->add_setting('button_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '16',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'button_font_size', array(
        'label' => 'Font size',
        'min' => 8,
        'max' => 30,
        'step' => 1,
        'section' => 'button_fonts_sec'
    )));

    //  button font weight
    $wp_customize->add_setting('button_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '600'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'button_font_weight', array(
        'label' => 'Font weight',
        'section' => 'button_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

     // button line height
     $wp_customize->add_setting('button_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '27',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'button_line_height', array(
        'label' => 'Line height',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'button_fonts_sec'
    )));

    // button text transform
    $wp_customize->add_setting('button_text_transform', array(
        'default' => 'uppercase', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'button_text_transform', 
        array(
        'label' => 'Text transform', 
        'settings' => 'button_text_transform',         
        'section' => 'button_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));
    //********** button font section end**********

    //********** heading font section start**********
    $wp_customize->add_section('headings_fonts_sec', array(
        'title' => 'Headings ',
        'panel' => 'font_panels'
    ));
    // h1 font-family
    $wp_customize->add_setting('h1_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('h1_font', array(
        'label' => 'Heading 1 (H1)',
        'type' => 'select',
        'section' => 'headings_fonts_sec',
        'description' => 'Font family',
        'choices' => $custom_google_fonts
    ));
    //  h1 font size
    $wp_customize->add_setting('h1_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '48',
        'sanitize_callback' => 'sanitize_text_field'
        
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h1_font_size', array(
        'description' => 'Font size',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));

    //  h1 font weight
    $wp_customize->add_setting('h1_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'unset'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'h1_font_weight', array(
        'description' => 'Font weight',
        'section' => 'headings_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

     // h1 line height
     $wp_customize->add_setting('h1_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '60',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h1_line_height', array(
        'description' => 'Line height',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h1 margin bottom
    $wp_customize->add_setting('h1_margin_bottom', array(
        'capability' => 'edit_theme_options',
        'default' => '40',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h1_margin_bottom', array(
        'description' => 'Margin bottom',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h1 text transform
    $wp_customize->add_setting('h1_text_transform', array(
        'default' => 'none', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'h1_text_transform', 
        array(
        'description' => 'Text transform',
        'settings' => 'h1_text_transform',         
        'section' => 'headings_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));

    // h2 font-family
    $wp_customize->add_setting('h2_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('h2_font', array(
        'label' => 'Heading 2 (H2)',
        'type' => 'select',
        'section' => 'headings_fonts_sec',
        'description' => 'Font family',
        'choices' => $custom_google_fonts
    ));
    //  h2 font size
    $wp_customize->add_setting('h2_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '40',
        'sanitize_callback' => 'sanitize_text_field'
        
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h2_font_size', array(
        'description' => 'Font size',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));

    //  h2 font weight
    $wp_customize->add_setting('h2_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '600'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'h2_font_weight', array(
        'description' => 'Font weight',
        'section' => 'headings_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

     // h2 line height
     $wp_customize->add_setting('h2_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '44',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h2_line_height', array(
        'description' => 'Line height',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h2 margin bottom
    $wp_customize->add_setting('h2_margin_bottom', array(
        'capability' => 'edit_theme_options',
        'default' => '40',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h2_margin_bottom', array(
        'description' => 'Margin bottom',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h2 text transform
    $wp_customize->add_setting('h2_text_transform', array(
        'default' => 'none', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'h2_text_transform', 
        array(
        'description' => 'Text transform',
        'settings' => 'h2_text_transform',         
        'section' => 'headings_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));

    // h3 font-family
    $wp_customize->add_setting('h3_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('h3_font', array(
        'label' => 'Heading 3 (H3)',
        'type' => 'select',
        'section' => 'headings_fonts_sec',
        'description' => 'Font family',
        'choices' => $custom_google_fonts
    ));
    //  h3 font size
    $wp_customize->add_setting('h3_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '36',
        'sanitize_callback' => 'sanitize_text_field'
        
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h3_font_size', array(
        'description' => 'Font size',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));

    //  h3 font weight
    $wp_customize->add_setting('h3_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '600'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'h3_font_weight', array(
        'description' => 'Font weight',
        'section' => 'headings_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

     // h3 line height
     $wp_customize->add_setting('h3_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '48',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h3_line_height', array(
        'description' => 'Line height',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h3 margin bottom
    $wp_customize->add_setting('h3_margin_bottom', array(
        'capability' => 'edit_theme_options',
        'default' => '35',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h3_margin_bottom', array(
        'description' => 'Margin bottom',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h3 text transform
    $wp_customize->add_setting('h3_text_transform', array(
        'default' => 'none', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'h3_text_transform', 
        array(
        'description' => 'Text transform',
        'settings' => 'h3_text_transform',         
        'section' => 'headings_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));

    // h4 font-family
    $wp_customize->add_setting('h4_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('h4_font', array(
        'label' => 'Heading 4 (H4)',
        'type' => 'select',
        'section' => 'headings_fonts_sec',
        'description' => 'Font family',
        'choices' => $custom_google_fonts
    ));
    //  h4 font size
    $wp_customize->add_setting('h4_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '30',
        'sanitize_callback' => 'sanitize_text_field'
        
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h4_font_size', array(
        'description' => 'Font size',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));

    //  h4 font weight
    $wp_customize->add_setting('h4_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '600'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'h4_font_weight', array(
        'description' => 'Font weight',
        'section' => 'headings_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

     // h4 line height
     $wp_customize->add_setting('h4_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '36',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h4_line_height', array(
        'description' => 'Line height',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h4 margin bottom
    $wp_customize->add_setting('h4_margin_bottom', array(
        'capability' => 'edit_theme_options',
        'default' => '30',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h4_margin_bottom', array(
        'description' => 'Margin bottom',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h4 text transform
    $wp_customize->add_setting('h4_text_transform', array(
        'default' => 'capitalize', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'h4_text_transform', 
        array(
        'description' => 'Text transform',
        'settings' => 'h4_text_transform',         
        'section' => 'headings_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));

    // h5 font-family
    $wp_customize->add_setting('h5_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('h5_font', array(
        'label' => 'Heading 5 (H5)',
        'type' => 'select',
        'section' => 'headings_fonts_sec',
        'description' => 'Font family',
        'choices' => $custom_google_fonts
    ));

    //  h5 font size
    $wp_customize->add_setting('h5_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '26',
        'sanitize_callback' => 'sanitize_text_field'
        
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h5_font_size', array(
        'description' => 'Font size',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));

    //  h5 font weight
    $wp_customize->add_setting('h5_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '600'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'h5_font_weight', array(
        'description' => 'Font weight',
        'section' => 'headings_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

     // h5 line height
     $wp_customize->add_setting('h5_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '30',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h5_line_height', array(
        'description' => 'Line height',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h5 margin bottom
    $wp_customize->add_setting('h5_margin_bottom', array(
        'capability' => 'edit_theme_options',
        'default' => '15',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h5_margin_bottom', array(
        'description' => 'Margin bottom',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h5 text transform
    $wp_customize->add_setting('h5_text_transform', array(
        'default' => 'capitalize', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'h5_text_transform', 
        array(
        'description' => 'Text transform',
        'settings' => 'h5_text_transform',         
        'section' => 'headings_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));

    // h6 font-family
    $wp_customize->add_setting('h6_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('h6_font', array(
        'label' => 'Heading 6 (H6)',
        'type' => 'select',
        'section' => 'headings_fonts_sec',
        'description' => 'Font family',
        'choices' => $custom_google_fonts
    ));
    //  h6 font size
    $wp_customize->add_setting('h6_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '22',
        'sanitize_callback' => 'sanitize_text_field'
        
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h6_font_size', array(
        'description' => 'Font size',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));

    //  h6 font weight
    $wp_customize->add_setting('h6_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '600'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'h6_font_weight', array(
        'description' => 'Font weight',
        'section' => 'headings_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

     // h6 line height
     $wp_customize->add_setting('h6_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '30',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h6_line_height', array(
        'description' => 'Line height',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h6 margin bottom
    $wp_customize->add_setting('h6_margin_bottom', array(
        'capability' => 'edit_theme_options',
        'default' => 30,
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'h6_margin_bottom', array(
        'description' => 'Margin bottom',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'headings_fonts_sec'
    )));
    // h6 text transform
    $wp_customize->add_setting('h6_text_transform', array(
        'default' => 'none', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'h6_text_transform', 
        array(
        'description' => 'Text transform',
        'settings' => 'h6_text_transform',         
        'section' => 'headings_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));
    //********** heading font section end**********

    //********** footer_widget font section start**********
    $wp_customize->add_section('footer_widget_fonts_sec', array(
        'title' => 'Footer Widget ',
        'panel' => 'font_panels'
    ));
    
    // footer widget font-family
    $wp_customize->add_setting('footer_widget_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('footer_widget_font', array(
        'type' => 'select',
        'section' => 'footer_widget_fonts_sec',
        'label' => __('Widget Title (font family)'),
        'choices' => $custom_google_fonts
    ));

    //  footer widget font size
    $wp_customize->add_setting('footer_widget_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '26',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'footer_widget_font_size', array(
        'label' => 'Widget Title (font size)',
        'min' => 8,
        'max' => 100,
        'step' => 1,
        'section' => 'footer_widget_fonts_sec'
    )));

    //  footer widget font weight
    $wp_customize->add_setting('footer_widget_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '600'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_widget_font_weight', array(
        'label' => 'Widget Title (font weight)',
        'section' => 'footer_widget_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

    // footer widget margin
    $wp_customize->add_setting('footer_widget_margin', array(
        'capability' => 'edit_theme_options',
        'default' => '15',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'footer_widget_margin', array(
        'label' => 'Widget (margin bottom)',
        'min' => 0,
        'max' => 50,
        'step' => 1,
        'section' => 'footer_widget_fonts_sec'
    )));

    // footer widget text transform
    $wp_customize->add_setting('footer_widget_text_transform', array(
        'default' => 'none', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_widget_text_transform', 
        array(
        'label' => 'Widget (text transform)', 
        'settings' => 'footer_widget_text_transform',         
        'section' => 'footer_widget_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));

    $wp_customize->add_setting('footer_widget_text_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '17',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'footer_widget_text_font_size', array(
        'label' => 'Widget Content (font size)',
        'min' => 10,
        'max' => 36,
        'step' => 1,
        'section' => 'footer_widget_fonts_sec'
    )));

    //  footer widget text font weight
    $wp_customize->add_setting('footer_widget_text_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '400'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_widget_text_font_weight', array(
        'label' => 'Widget Content (font weight)',
        'section' => 'footer_widget_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

    //********** footer_widget font section start**********


    //********** footer font section start**********
    $wp_customize->add_section('footer_fonts_sec', array(
        'title' => 'Footer ',
        'panel' => 'font_panels'
    ));
    // footer font-family
    $wp_customize->add_setting('footer_font', array(
        'sanitize_callback' => 'custom_sanitize_fonts',
        'default' => 'Montserrat:400,500,600,700,800'
    ));
    
    $wp_customize->add_control('footer_font', array(
        'type' => 'select',
        'section' => 'footer_fonts_sec',
        'label' => __('Font family'),
        'choices' => $custom_google_fonts
    ));
    //  footer font size
    $wp_customize->add_setting('footer_font_size', array(
        'capability' => 'edit_theme_options',
        'default' => '27',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'footer_font_size', array(
        'label' => 'Font size',
        'min' => 8,
        'max' => 30,
        'step' => 1,
        'section' => 'footer_fonts_sec'
    )));

     //  footer font weight
     $wp_customize->add_setting('footer_font_weight', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '400'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_font_weight', array(
        'label' =>  'Font weight',
        'section' => 'footer_fonts_sec',
        'type' => 'select',
        'choices' => array(
          '100' => __( '100' ),
          '200' => __( '200' ),
          '300' => __( '300' ), 
          '400' => __( '400' ),
          '500' => __( '500' ),
          '600' => __( '600' ),
          '700' => __( '700' ), 
          '800' => __( '800' ),
          '900' => __( '900' ),
          'bold' => __( 'bold' ),
          'bolder' => __( 'bolder' ), 
          'lighter' => __( 'lighter' ),
          'normal' => __( 'normal' ), 
          'unset' => __( 'unset' ),
        )
    )));

     // footer line height
     $wp_customize->add_setting('footer_line_height', array(
        'capability' => 'edit_theme_options',
        'default' => '27',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Range($wp_customize, 'footer_line_height', array(
        'label' => 'Line height',
        'min' => 10,
        'max' => 100,
        'step' => 1,
        'section' => 'footer_fonts_sec'
    )));

    // footer text transform
    $wp_customize->add_setting('footer_text_transform', array(
        'default' => 'none', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_text_transform', 
        array(
        'label' => 'Text transform', 
        'settings' => 'footer_text_transform',         
        'section' => 'footer_fonts_sec', 
        'type' => 'select',
        'choices' => array(
          'none' => __( 'none' ),
          'capitalize' => __( 'capitalize' ),
          'uppercase' => __( 'uppercase' ),
          'lowercase' => __( 'lowercase' ),
        )
    )));
    //********** footer font section end**********


}
//-------------------- Typography panel end -------------------


//-------------------- add color panel-------------------
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
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'body_color_sec',
        'settings' => 'body_background'
    )));
    
    // text color
    $wp_customize->add_setting('body_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#373737'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_text', array(
        'label' => __('Text Color', 'genesis-giant'),
        'section' => 'body_color_sec',
        'settings' => 'body_text'
    )));
    
    // link color
    $wp_customize->add_setting('body_link', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#373737'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_link', array(
        'label' => __('Link Color', 'genesis-giant'),
        'section' => 'body_color_sec',
        'settings' => 'body_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('body_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#f32838'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-giant'),
        'section' => 'body_color_sec',
        'settings' => 'body_link_hover'
    )));
    
    // link visited color
    $wp_customize->add_setting('body_link_visited', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#373737'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_link_visited', array(
        'label' => __('Link Visited Color', 'genesis-giant'),
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
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#000000'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'header_color_sec',
        'settings' => 'header_background'
    )));
    
    // link color
    $wp_customize->add_setting('header_link', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#f32838'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_link', array(
        'label' => __('Link Color', 'genesis-giant'),
        'section' => 'header_color_sec',
        'settings' => 'header_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('header_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#999999'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-giant'),
        'section' => 'header_color_sec',
        'settings' => 'header_link_hover'
    )));
    
    // Site Title color
    $wp_customize->add_setting('header_site_title', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#000000'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_site_title', array(
        'label' => __('Site Title Color', 'genesis-giant'),
        'section' => 'header_color_sec',
        'settings' => 'header_site_title'
    )));
    
    // Site Description color
    $wp_customize->add_setting('header_site_description', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#ffffff'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_site_description', array(
        'label' => __('Site Description Color', 'genesis-giant'),
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
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#ffffff'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text', array(
        'label' => __('Text Color', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text'
    )));
    
    // text hover color
    $wp_customize->add_setting('nav_text_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#9b9b9b'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_hover', array(
        'label' => __('Text Hover Color', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text_hover'
    )));
    
    // background color
    $wp_customize->add_setting('nav_text_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text_background'
    )));
    
    // background hover color
    $wp_customize->add_setting('nav_text_background_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_background_hover', array(
        'label' => __('Background Hover Color', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text_background_hover'
    )));
    
    // current text  color
    $wp_customize->add_setting('current_nav_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#f32838'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'current_nav_text', array(
        'label' => __('Current Text', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'current_nav_text'
    )));
    
    // current text background color
    $wp_customize->add_setting('current_nav_text_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'current_nav_text_background', array(
        'label' => __('Current Background', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'current_nav_text_background'
    )));
    
    // ************navigation color section end************
    
    
   
    
    // ************Button color section ************
    $wp_customize->add_section('button_color_sec', array(
        'title' => 'Buttons ',
        'panel' => 'some_panel'
    ));
    // text color
    $wp_customize->add_setting('button_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#ffffff'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text', array(
        'label' => __('Text Color', 'genesis-giant'),
        'section' => 'button_color_sec',
        'settings' => 'button_text'
    )));
    
    // text hover color
    $wp_customize->add_setting('button_text_hover', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text_hover', array(
        'label' => __('Text Hover Color', 'genesis-giant'),
        'section' => 'button_color_sec',
        'settings' => 'button_text_hover'
    )));
    
    // background color
    $wp_customize->add_setting('button_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#f32838'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'button_color_sec',
        'settings' => 'button_background'
    )));
    
    // background hover color
    $wp_customize->add_setting('button_background_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#ffffff'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_background_hover', array(
        'label' => __('Background Hover Color', 'genesis-giant'),
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
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#000000'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h1_text', array(
        'label' => __('Heading H1 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h1_text'
    )));
    // heading h2 color
    $wp_customize->add_setting('h2_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#000000'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h2_text', array(
        'label' => __('Heading H2 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h2_text'
    )));
    // heading h3 color
    $wp_customize->add_setting('h3_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#000000'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h3_text', array(
        'label' => __('Heading H3 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h3_text'
    )));
    // heading h4 color
    $wp_customize->add_setting('h4_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#000000'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h4_text', array(
        'label' => __('Heading H4 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h4_text'
    )));
    // heading h5 color
    $wp_customize->add_setting('h5_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#000000'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h5_text', array(
        'label' => __('Heading H5 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h5_text'
    )));
    // heading h6 color
    $wp_customize->add_setting('h6_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#000000'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h6_text', array(
        'label' => __('Heading H6 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h6_text'
    )));
    
    
    // ************footer color section ************
    
    // footer color section start
    $wp_customize->add_section('footer_color_sec', array(
        'title' => 'Footer & Widgets ',
        'panel' => 'some_panel'
    ));
    
    // background color
    $wp_customize->add_setting('footer_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#222222'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_background'
    )));
    
    // Footer Text color
    $wp_customize->add_setting('footer_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#ffffff'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text', array(
        'label' => __('Text', 'genesis-giant'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_text'
    )));
    
    // link color
    $wp_customize->add_setting('footer_link', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#ffffff'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link', array(
        'label' => __('Link Color', 'genesis-giant'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('footer_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#f32838'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-giant'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_link_hover'
    )));
    
    // Site Description color
    $wp_customize->add_setting('footer_widget_title', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_widget_title', array(
        'label' => __('Widget Title Color', 'genesis-giant'),
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
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_background'
    )));
    
    // label color
    $wp_customize->add_setting('form_label_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_label_text', array(
        'label' => __('Label Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_label_text'
    )));
    
    // text color
    $wp_customize->add_setting('form_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_text', array(
        'label' => __('Text Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_text'
    )));
    
    // palceholder text color
    $wp_customize->add_setting('form_placeholder_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_placeholder_text', array(
        'label' => __('Placeholder Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_placeholder_text'
    )));
    
    // background color
    $wp_customize->add_setting('form_field_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_background', array(
        'label' => __('Field Background Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_background'
    )));
    
    // border color
    $wp_customize->add_setting('form_field_border', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_border', array(
        'label' => __('Border Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_border'
    )));
    
    // focus_text color
    $wp_customize->add_setting('form_focus_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_focus_text', array(
        'label' => __('Focus Text Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_focus_text'
    )));
    
    // focus palceholder text color
    $wp_customize->add_setting('form_placeholder_focus_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_placeholder_focus_text', array(
        'label' => __('Focus Placeholder Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_placeholder_focus_text'
    )));
    
    // focus background color
    $wp_customize->add_setting('form_field_focus_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_focus_background', array(
        'label' => __('Focus Field Background Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_focus_background'
    )));
    
    // focus border color
    $wp_customize->add_setting('form_field_focus_border', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_focus_border', array(
        'label' => __('Focus Border Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_focus_border'
    )));
}
//-------------------colors panel end----------------------



//--------------------- add background image panel------------------
add_action('customize_register', 'bg_image_panel');
function bg_image_panel($wp_customize){


        $wp_customize->add_panel('bg_image_panels', array(
        'title' => 'Background Images',
        'description' => 'This is panel Description',
        'priority' => 26
        ));

        //********* body background image section start*********
        $wp_customize->add_section('body_bg_image_sec', array(
        'title' => 'Body ',
        'panel' => 'bg_image_panels'
        ));

        // body background image
        $wp_customize->add_setting('body_bg_image', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => ''
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control ( $wp_customize, 'body_bg_image', array(
        'label' => __( 'Background Image' ),
        'description' => __('Select your background image for the body.', 'genesis-giant'),
        'section' => 'body_bg_image_sec',
        'settings' => 'body_bg_image'
        )));



        // body background repeat
        $wp_customize->add_setting('body_bg_repeat', array(
        'default' => 'no-repeat', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'body_bg_repeat', 
        array(
        'label' => __( 'Background Repeat' ),
        'settings' => 'body_bg_repeat', 
        'section' => 'body_bg_image_sec', 
        'type' => 'select',
        'choices' => array(
        'no-repeat' => __( 'No Repeat' ),
        'repeat-x' => __( 'Repeat x' ),
        'repeat-y' => __( 'Repeat y' ),
        'repeat' => __( 'Repeat' ),
        )
        )));

        // body background size
        $wp_customize->add_setting('body_bg_size', array(
        'default' => 'auto', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'body_bg_size', 
        array(
        'label' => __( 'Background Size' ),
        'settings' => 'body_bg_size', 
        'section' => 'body_bg_image_sec', 
        'type' => 'select',
        'choices' => array(
        'auto' => __( 'Auto' ),
        'cover' => __( 'Cover' ),
        'contain' => __( 'Contain' ),
        'unset' => __( 'Unset' ),
        )
        )));


        // body background attachment
        $wp_customize->add_setting('body_bg_attachment', array(
        'default' => 'unset', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'body_bg_attachment', 
        array(
        'label' => __( 'Background Attachment' ),
        'settings' => 'body_bg_attachment', 
        'section' => 'body_bg_image_sec', 
        'type' => 'select',
        'choices' => array(
        'unset' => __( 'Unset' ),
        'fixed' => __( 'Fixed' ),
        'local' => __( 'Local' ),
        'scroll' => __( 'Scroll' ),
        )
        )));

        //  body background position
        $wp_customize->add_setting('body_bg_position', array(
            'capability' => 'edit_theme_options',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        
        $wp_customize->add_control('body_bg_position', array(
            'label' => 'Background Position',
            'description' => 'left top, x% y%, xpos ypos (px)',
            'section' => 'body_bg_image_sec'
        ));
        //********* body background image section end*********


        //********* header background image section start*********
        $wp_customize->add_section('header_bg_image_sec', array(
        'title' => 'Header ',
        'panel' => 'bg_image_panels'
        ));

        // header background image
        $wp_customize->add_setting('header_bg_image', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => ''
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control ( $wp_customize, 'header_bg_image', array(
        'label' => __( 'Background Image' ),
        'description' => __('Select your background image for the header.', 'genesis-giant'),
        'section' => 'header_bg_image_sec',
        'settings' => 'header_bg_image'
        )));
        // header background repeat
        $wp_customize->add_setting('header_bg_repeat', array(
        'default' => 'no-repeat', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' ,
        'default' => 'no-repeat'
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'header_bg_repeat', 
        array(
        'label' => __( 'Background Repeat' ),
        'settings' => 'header_bg_repeat', 
        'section' => 'header_bg_image_sec', 
        'type' => 'select',
        'choices' => array(
        'no-repeat' => __( 'No Repeat' ),
        'repeat-x' => __( 'Repeat x' ),
        'repeat-y' => __( 'Repeat y' ),
        'repeat' => __( 'Repeat' ),
        )
        )));
        // header background size
        $wp_customize->add_setting('header_bg_size', array(
        'default' => 'auto', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'header_bg_size', 
        array(
        'label' => __( 'Background Size' ),
        'settings' => 'header_bg_size', 
        'section' => 'header_bg_image_sec', 
        'type' => 'select',
        'choices' => array(
        'auto' => __( 'Auto' ),
        'cover' => __( 'Cover' ),
        'contain' => __( 'Contain' ),
        'unset' => __( 'Unset' ),
        )
        )));
        // header background attachment
        $wp_customize->add_setting('header_bg_attachment', array(
        'default' => 'unset', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'header_bg_attachment', 
        array(
        'label' => __( 'Background Attachment' ),
        'settings' => 'header_bg_attachment', 
        'section' => 'header_bg_image_sec', 
        'type' => 'select',
        'choices' => array(
        'unset' => __( 'Unset' ),
        'fixed' => __( 'Fixed' ),
        'local' => __( 'Local' ),
        'scroll' => __( 'Scroll' ),
        )
        )));
        //  header background position
        $wp_customize->add_setting('header_bg_position', array(
            'capability' => 'edit_theme_options',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        
        $wp_customize->add_control('header_bg_position', array(
            'label' => 'Background Position',
            'description' => 'left top, x% y%, xpos ypos (px)',
            'section' => 'header_bg_image_sec'
        ));
        //********* header background image section end*********

        //********* footer widget background image section start*********
        $wp_customize->add_section('footer_widget_bg_image_sec', array(
            'title' => 'Footer Widget ',
            'panel' => 'bg_image_panels'
        ));

        // footer widget background image
        $wp_customize->add_setting('footer_widget_bg_image', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '' 
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control ( $wp_customize, 'footer_widget_bg_image', array(
        'label' => __( 'Background Image' ),
        'description' => __('Select your background image for the footer widget.', 'genesis-giant'),
        'section' => 'footer_widget_bg_image_sec',
        'settings' => 'footer_widget_bg_image'
        )));



        // footer widget background repeat
        $wp_customize->add_setting('footer_widget_bg_repeat', array(
            'default' => 'no-repeat', 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
            'footer_widget_bg_repeat', 
            array(
            'label' => __( 'Background Repeat' ),
            'settings' => 'footer_widget_bg_repeat', 
            'section' => 'footer_widget_bg_image_sec', 
            'type' => 'select',
            'choices' => array(
            'no-repeat' => __( 'No Repeat' ),
            'repeat-x' => __( 'Repeat x' ),
            'repeat-y' => __( 'Repeat y' ),
            'repeat' => __( 'Repeat' ),
            )
        )));

        // footer widget background size
        $wp_customize->add_setting('footer_widget_bg_size', array(
            'default' => 'auto', 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_widget_bg_size', 
            array(
            'label' => __( 'Background Size' ),
            'settings' => 'footer_widget_bg_size', 
            'section' => 'footer_widget_bg_image_sec', 
            'type' => 'select',
            'choices' => array(
            'auto' => __( 'Auto' ),
            'cover' => __( 'Cover' ),
            'contain' => __( 'Contain' ),
            'unset' => __( 'Unset' ),
            )
        )));


        // footer widget background attachment
        $wp_customize->add_setting('footer_widget_bg_attachment', array(
            'default' => 'unset', 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_widget_bg_attachment', 
            array(
            'label' => __( 'Background Attachment' ),
            'settings' => 'footer_widget_bg_attachment', 
            'section' => 'footer_widget_bg_image_sec', 
            'type' => 'select',
            'choices' => array(
            'unset' => __( 'Unset' ),
            'fixed' => __( 'Fixed' ),
            'local' => __( 'Local' ),
            'scroll' => __( 'Scroll' ),
            )
        )));

        //  footer widget background position
        $wp_customize->add_setting('footer_widget_bg_position', array(
            'capability' => 'edit_theme_options',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        
        $wp_customize->add_control('footer_widget_bg_position', array(
            'label' => 'Background Position',
            'description' => 'left top, x% y%, xpos ypos (px)',
            'section' => 'footer_widget_bg_image_sec'
        ));

        //********* footer widget background image section end*********


        //********* footer background image section start*********
        $wp_customize->add_section('footer_bg_image_sec', array(
            'title' => 'Footer ',
            'panel' => 'bg_image_panels'
        ));

        // footer background image
        $wp_customize->add_setting('footer_bg_image', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '' 
        ));

            $wp_customize->add_control(new WP_Customize_Image_Control ( $wp_customize, 'footer_bg_image', array(
            'label' => __( 'Background Image' ),
            'description' => __('Select your background image for the footer.', 'genesis-giant'),
            'section' => 'footer_bg_image_sec',
            'settings' => 'footer_bg_image'
        )));



        // footer background repeat
        $wp_customize->add_setting('footer_bg_repeat', array(
            'default' => 'no-repeat', 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_bg_repeat', 
            array(
            'label' => __( 'Background Repeat' ),
            'settings' => 'footer_bg_repeat', 
            'section' => 'footer_bg_image_sec', 
            'type' => 'select',
            'choices' => array(
            'no-repeat' => __( 'No Repeat' ),
            'repeat-x' => __( 'Repeat x' ),
            'repeat-y' => __( 'Repeat y' ),
            'repeat' => __( 'Repeat' ),
            )
        )));

        // footer background size
        $wp_customize->add_setting('footer_bg_size', array(
            'default' => 'auto', 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_bg_size', 
            array(
            'label' => __( 'Background Size' ),   
            'settings' => 'footer_bg_size', 
            'section' => 'footer_bg_image_sec', 
            'type' => 'select',
            'choices' => array(
            'auto' => __( 'Auto' ),
            'cover' => __( 'Cover' ),
            'contain' => __( 'Contain' ),
            'unset' => __( 'Unset' ),
            )
        )));


        // footer background attachment
        $wp_customize->add_setting('footer_bg_attachment', array(
            'default' => 'unset', 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_bg_attachment', 
            array(
            'label' => __( 'Background Attachment' ),
            'settings' => 'footer_bg_attachment', 
            'section' => 'footer_bg_image_sec', 
            'type' => 'select',
            'choices' => array(
            'unset' => __( 'Unset' ),
            'fixed' => __( 'Fixed' ),
            'local' => __( 'Local' ),
            'scroll' => __( 'Scroll' ),
            )
        )));

        //  footer background position
        $wp_customize->add_setting('footer_bg_position', array(
            'capability' => 'edit_theme_options',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        
        $wp_customize->add_control('footer_bg_position', array(
            'label' => 'Background Position',
            'description' => 'left top, x% y%, xpos ypos (px)',
            'section' => 'footer_bg_image_sec'
        ));

        //********* footer background image section end*********               
        
}
//------------------background image panel end--------------------------