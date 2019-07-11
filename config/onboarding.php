<?php
/**
 * Genesis Giant.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * @package Genesis Giant
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

return array(
	'dependencies'     => array(
		'plugins' => array(
			array(
				'name'       => __( 'Atomic Blocks', 'genesis-giant' ),
				'slug'       => 'atomic-blocks/atomicblocks.php',
				'public_url' => 'https://atomicblocks.com/',
			),
			array(
				'name'       => __( 'Simple Social Icons', 'genesis-giant' ),
				'slug'       => 'simple-social-icons/simple-social-icons.php',
				'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
			),
			array(
				'name'       => __( 'Genesis eNews Extended (Third Party)', 'genesis-giant' ),
				'slug'       => 'genesis-enews-extended/plugin.php',
				'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
			),
			array(
				'name'       => __( 'WPForms Lite (Third Party)', 'genesis-giant' ),
				'slug'       => 'wpforms-lite/wpforms.php',
				'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
			),
		),
	),
	'content'          => array(
		'home'  => array(
			'post_title'     => 'Home',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/home-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => array( '_genesis_layout' => 'full-width-content' ),
		),
	),
	'navigation_menus' => array(
		'primary' => array(
			'home'  => array(
				'title' => 'Home',
			),
		),
	),
);
