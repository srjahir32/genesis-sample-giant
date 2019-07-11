<?php
/**
 * Block Editor settings specific to Genesis Giant.
 *
 * @package Genesis Giant
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_giant_link_color            = get_theme_mod( 'genesis_giant_link_color', genesis_giant_customizer_get_default_link_color() );
$genesis_giant_link_color_contrast   = genesis_giant_color_contrast( $genesis_giant_link_color );
$genesis_giant_link_color_brightness = genesis_giant_color_brightness( $genesis_giant_link_color, 35 );

return array(
	'admin-fonts-url'              => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
	'content-width'                => 1062,
	'default-button-bg'            => $genesis_giant_link_color,
	'default-button-color'         => $genesis_giant_link_color_contrast,
	'default-button-outline-hover' => $genesis_giant_link_color_brightness,
	'default-link-color'           => $genesis_giant_link_color,
	'editor-color-palette'         => array(
		array(
			'name'  => __( 'Custom color', 'genesis-giant' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => get_theme_mod( 'genesis_giant_link_color', genesis_giant_customizer_get_default_link_color() ),
		),
		array(
			'name'  => __( 'Accent color', 'genesis-giant' ),
			'slug'  => 'theme-secondary',
			'color' => get_theme_mod( 'genesis_giant_accent_color', genesis_giant_customizer_get_default_accent_color() ),
		),
	),
	'editor-font-sizes'            => array(
		array(
			'name' => __( 'Small', 'genesis-giant' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', 'genesis-giant' ),
			'size' => 18,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Large', 'genesis-giant' ),
			'size' => 20,
			'slug' => 'large',
		),
		array(
			'name' => __( 'Larger', 'genesis-giant' ),
			'size' => 24,
			'slug' => 'larger',
		),
	),
);
