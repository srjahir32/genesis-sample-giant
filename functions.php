<?php
/**
 * Genesis Giant.
 *
 * This file adds functions to the Genesis Giant Theme.
 *
 * @package Genesis Giant
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Defines constants to help enqueue scripts and styles.
define('CHILD_THEME_HANDLE', sanitize_title_with_dashes(wp_get_theme()->get('Name')));
define('CHILD_THEME_VERSION', wp_get_theme()->get('Version'));

// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

add_action('after_setup_theme', 'genesis_giant_localization_setup');
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function genesis_giant_localization_setup()
{
    
    load_child_theme_textdomain('genesis-giant', get_stylesheet_directory() . '/languages');
    
}

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';
// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';
// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';
// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';


// Adds header
// require_once get_stylesheet_directory() . '/lib/structure/header.php';

add_action('after_setup_theme', 'genesis_child_gutenberg_support');
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 2.7.0
 */
function genesis_child_gutenberg_support() // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
{
    require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}



add_action('wp_enqueue_scripts', 'genesis_giant_enqueue_scripts_styles');
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function genesis_giant_enqueue_scripts_styles()
{ 
    $body_font     = esc_html(get_theme_mod('body_font'));
    $headings_font = esc_html( get_theme_mod( 'custom_headings_font' ) );
    $header_site_title_font = esc_html(get_theme_mod('header_site_title_font'));
    $header_site_description_font  = esc_html(get_theme_mod('header_site_description_font'));
    $navigation_font  = esc_html(get_theme_mod('navigation_font'));
    $button_font  = esc_html(get_theme_mod('button_font'));
    $h1_font  = esc_html(get_theme_mod('h1_font'));
    $h2_font  = esc_html(get_theme_mod('h2_font'));
    $h3_font  = esc_html(get_theme_mod('h3_font'));
    $h4_font  = esc_html(get_theme_mod('h4_font'));
    $h6_font  = esc_html(get_theme_mod('h6_font'));
    $footer_widget_font  = esc_html(get_theme_mod('footer_widget_font'));
    $footer_font  = esc_html(get_theme_mod('footer_font'));
    
    
    if ($body_font) {
        wp_enqueue_style('body_font', '//fonts.googleapis.com/css?family=' . $body_font);
    }else {
        wp_enqueue_style('custom_body_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($headings_font) {
        wp_enqueue_style('headings_font', '//fonts.googleapis.com/css?family=' . $headings_font);
    } else {
        wp_enqueue_style('custom_headings_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($header_site_title_font) {
        wp_enqueue_style('header_site_title_font', '//fonts.googleapis.com/css?family=' . $header_site_title_font);
    } else {
        wp_enqueue_style('custom_header_site_title_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($header_site_description_font) {
        wp_enqueue_style('header_site_description_font', '//fonts.googleapis.com/css?family=' . $header_site_description_font);
    } else {
        wp_enqueue_style('custom_header_site_description_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($navigation_font) {
        wp_enqueue_style('navigation_font', '//fonts.googleapis.com/css?family=' . $navigation_font);
    } else {
        wp_enqueue_style('custom_navigation_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($button_font) {
        wp_enqueue_style('button_font', '//fonts.googleapis.com/css?family=' . $button_font);
    } else {
        wp_enqueue_style('custom_button_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($h1_font) {
        wp_enqueue_style('h1_font', '//fonts.googleapis.com/css?family=' . $h1_font);
    } else {
        wp_enqueue_style('custom_h1_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($h2_font) {
        wp_enqueue_style('h2_font', '//fonts.googleapis.com/css?family=' . $h2_font);
    } else {
        wp_enqueue_style('custom_h2_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($h3_font) {
        wp_enqueue_style('h3_font', '//fonts.googleapis.com/css?family=' . $h3_font);
    } else {
        wp_enqueue_style('custom_h3_font', '//fonts.googleapis.com/css?family=Montserrat:400,500,600,700');
    }
    if ($h4_font) {
        wp_enqueue_style('h4_font', '//fonts.googleapis.com/css?family=' . $h4_font);
    } else {
        wp_enqueue_style('custom_h4_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($h5_font) {
        wp_enqueue_style('h5_font', '//fonts.googleapis.com/css?family=' . $h5_font);
    } else {
        wp_enqueue_style('custom_h5_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($h6_font) {
        wp_enqueue_style('h6_font', '//fonts.googleapis.com/css?family=' . $h6_font);
    } else {
        wp_enqueue_style('custom_h6_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($footer_widget_font) {
        wp_enqueue_style('footer_widget_font', '//fonts.googleapis.com/css?family=' . $footer_widget_font);
    } else {
        wp_enqueue_style('custom_footer_widget_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    if ($footer_font) {
        wp_enqueue_style('footer_font', '//fonts.googleapis.com/css?family=' . $footer_font);
    } else {
        wp_enqueue_style('custom_footer_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
    }
    
    
    wp_enqueue_style('dashicons');
    
    $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';
    wp_enqueue_script('genesis-giant-responsive-menu', get_stylesheet_directory_uri() . "/js/responsive-menus{$suffix}.js", array(
        'jquery'
    ), CHILD_THEME_VERSION, true);
    
    wp_localize_script('genesis-giant-responsive-menu', 'genesis_responsive_menu', genesis_giant_responsive_menu_settings());
    
    wp_enqueue_script('genesis-giant', get_stylesheet_directory_uri() . '/js/genesis-giant.js', array(
        'jquery'
    ), CHILD_THEME_VERSION, true);
    
}

/**
 * Defines responsive menu settings.
 *
 * @since 2.3.0
 */
function genesis_giant_responsive_menu_settings()
{
    
    $settings = array(
        'mainMenu' => __('', 'genesis-giant'),
        'menuIconClass' => 'dashicons-before dashicons-menu',
        'subMenu' => __('Submenu', 'genesis-giant'),
        'subMenuIconClass' => 'dashicons-before dashicons-arrow-down-alt2',
        'menuClasses' => array(
            'combine' => array(
                '.nav-primary',
                '.nav-custom'
            ),
            'others' => array()
        )
    );
    
    return $settings;
    
}

// Adds support for HTML5 markup structure.
add_theme_support('html5', genesis_get_config('html5'));

// Adds support for accessibility.
add_theme_support('genesis-accessibility', genesis_get_config('accessibility'));

// Adds viewport meta tag for mobile browsers.
add_theme_support('genesis-responsive-viewport');

// Adds custom logo in Customizer > Site Identity.
add_theme_support('custom-logo', genesis_get_config('custom-logo'));

add_filter('genesis_seo_title', 'genesis_giant_header_title', 10, 3);
/**
 * Removes the link from the hidden site title if a custom logo is in use.
 *
 * Without this filter, the site title is hidden with CSS when a custom logo
 * is in use, but the link it contains is still accessible by keyboard.
 *
 * @since 1.2.0
 *
 * @param string $title  The full title.
 * @param string $inside The content inside the title element.
 * @param string $wrap   The wrapping element name, such as h1.
 * @return string The site title with anchor removed if a custom logo is active.
 */
function genesis_giant_header_title($title, $inside, $wrap)
{
    
    if (has_custom_logo()) {
        $inside = get_bloginfo('name');
    }
    
    return sprintf('<%1$s class="site-title">%2$s</%1$s>', $wrap, $inside);
    
}

// Renames primary and secondary navigation menus.
// add_theme_support( 'genesis-menus', genesis_get_config( 'menus' ) );
add_theme_support('genesis-menus', array(
    'primary' => __('Header Menu', 'genesis-giant'),
    'secondary' => __('Footer Menu', 'genesis-giant'),
    'custom' => __('Custom Menu', 'genesis-giant')
));

// Adds image sizes.
add_image_size('sidebar-featured', 75, 75, true);

// Adds support for after entry widget.
add_theme_support('genesis-after-entry-widget-area');

// Adds support for 3-column footer widgets.
add_theme_support('genesis-footer-widgets', 6);



// Removes secondary sidebar.
unregister_sidebar('sidebar-alt');

// Removes site layouts.
genesis_unregister_layout('content-sidebar-sidebar');
genesis_unregister_layout('sidebar-content-sidebar');
genesis_unregister_layout('sidebar-sidebar-content');

// Removes output of primary navigation right extras.
remove_filter('genesis_nav_items', 'genesis_nav_right', 10, 2);
remove_filter('wp_nav_menu_items', 'genesis_nav_right', 10, 2);

add_action('genesis_theme_settings_metaboxes', 'genesis_giant_remove_metaboxes');
/**
 * Removes output of unused admin settings metaboxes.
 *
 * @since 2.6.0
 *
 * @param string $_genesis_admin_settings The admin screen to remove meta boxes from.
 */
function genesis_giant_remove_metaboxes($_genesis_admin_settings)
{
    
    remove_meta_box('genesis-theme-settings-header', $_genesis_admin_settings, 'main');
    remove_meta_box('genesis-theme-settings-nav', $_genesis_admin_settings, 'main');
    
}

add_filter('genesis_customizer_theme_settings_config', 'genesis_giant_remove_customizer_settings');
/**
 * Removes output of header and front page breadcrumb settings in the Customizer.
 *
 * @since 2.6.0
 *
 * @param array $config Original Customizer items.
 * @return array Filtered Customizer items.
 */
function genesis_giant_remove_customizer_settings($config)
{
    
    unset($config['genesis']['sections']['genesis_header']);
    unset($config['genesis']['sections']['genesis_breadcrumbs']['controls']['breadcrumb_front_page']);
    return $config;
    
}

// Displays custom logo.
add_action('genesis_site_title', 'the_custom_logo', 0);

// Repositions primary navigation menu.
remove_action('genesis_after_header', 'genesis_do_nav');
add_action('genesis_header', 'genesis_do_nav', 12);

// Repositions the secondary navigation menu.
remove_action('genesis_after_header', 'genesis_do_subnav');
add_action('genesis_footer', 'genesis_do_subnav', 10);

add_filter('wp_nav_menu_args', 'genesis_giant_secondary_menu_args');
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_giant_secondary_menu_args($args)
{
    
    if ('secondary' !== $args['theme_location']) {
        return $args;
    }
    
    $args['depth'] = 1;
    return $args;
    
}

add_filter('genesis_author_box_gravatar_size', 'genesis_giant_author_box_gravatar');
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 2.2.3
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function genesis_giant_author_box_gravatar($size)
{
    
    return 90;
    
}

add_filter('genesis_comment_list_args', 'genesis_giant_comments_gravatar');
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 2.2.3
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function genesis_giant_comments_gravatar($args)
{   
    $args['avatar_size'] = 60;
    return $args;    
}


genesis_register_sidebar(array(
    'id' => 'header_social_icon',
    'name' => __('Header Social Icon', 'genesis-child'),
    'description' => __('This is the widget area for a front page.', 'genesis-child')
));






register_sidebar( 'header-right' );





/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/lib/tgmpa/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
	
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'WPBakery Page Builder',
			'slug'               => 'js_composer', 
			'source'             => get_stylesheet_directory() . '/lib/plugin/js_composer.zip', 
			'required'           => true, 
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false,
			'external_url'       => '', 
			'is_callable'        => '', 
        ),
        array(
            'name' => 'Slider Revolution',
            'slug' => 'revslider',
            'source' => get_stylesheet_directory() . '/lib/plugin/revslider.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false,
            'external_url' => '',
            'is_callable' => '',
        ),
	);
	$config = array(
		'id'           => 'tgmpa',                 
		'default_path' => '',                      
		'menu'         => 'tgmpa-install-plugins', 
		'parent_slug'  => 'themes.php',            
		'capability'   => 'edit_theme_options',  
        'has_notices'  => true,                 
        'dismissable'  => true,                   
		'dismiss_msg'  => '',                     
		'is_automatic' => false,                  
		'message'      => '',                     
		
	);

	tgmpa( $plugins, $config );

}



