<?php

/**
 * Include the TGM_Plugin_Activation class.
 */
// require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
// add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
// function my_theme_register_required_plugins() {
// 	/*
// 	 * Array of plugin arrays. Required keys are name and slug.
// 	 * If the source is NOT from the .org repo, then source is also required.
// 	 */
// 	$plugins = array(

// 		// This is an example of how to include a plugin bundled with a theme.
// 		array(
// 			'name'               => 'WPBakery Page Builder', // The plugin name.
// 			'slug'               => 'js_composer', // The plugin slug (typically the folder name).
// 			'source'             => get_stylesheet_directory() . '/lib/plugin/js_composer.zip', // The plugin source.
// 			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
// 			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
// 			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
// 			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
// 			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
// 			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
// 		),
// 	);

// 	/*
// 	 * Array of configuration settings. Amend each line as needed.
// 	 *
// 	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
// 	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
// 	 * sending in a pull-request with .po file(s) with the translations.
// 	 *
// 	 * Only uncomment the strings in the config array if you want to customize the strings.
// 	 */
// 	$config = array(
// 		'id'           => 'tgmpa',                 
// 		'default_path' => '',                      
// 		'menu'         => 'tgmpa-install-plugins', 
// 		'parent_slug'  => 'themes.php',            
// 		'capability'   => 'edit_theme_options',     
// 		'has_notices'  => true,                    
// 		'dismissable'  => true,                    
// 		'dismiss_msg'  => '',                      
// 		'is_automatic' => false,                   
// 		'message'      => '',                      
// 		/*
// 		'strings'      => array(
// 			'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
// 			'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
// 			// <snip>...</snip>
// 			'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
// 		)
// 		*/
// 	);

// 	tgmpa( $plugins, $config );

// }
?>