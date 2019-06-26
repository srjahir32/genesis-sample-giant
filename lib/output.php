<?php
/**
 * Genesis Sample.
 *
 * This file adds the required CSS to the front end to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_action( 'wp_enqueue_scripts', 'genesis_sample_css' );
/**
 * Checks the settings for the link color, and accent color.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 2.2.3
 */
function genesis_sample_css() {
	$font_size = esc_html( get_theme_mod( 'font_size' ) )."px";
	$h1_font_size = esc_html( get_theme_mod( 'h1_font_size' ) )."px";
	$h2_font_size = esc_html( get_theme_mod( 'h2_font_size' ) )."px";
	$h3_font_size = esc_html( get_theme_mod( 'h3_font_size' ) )."px";
	$h4_font_size = esc_html( get_theme_mod( 'h4_font_size' ) )."px";
	$h5_font_size = esc_html( get_theme_mod( 'h5_font_size' ) )."px";
	$h6_font_size = esc_html( get_theme_mod( 'h6_font_size' ) )."px";
	// echo($font_size);
	// Fonts.
$headings_font = esc_html( get_theme_mod( 'custom_headings_font' ) );
$body_font     = esc_html( get_theme_mod( 'custom_body_font' ) );

	$color_link   = get_theme_mod( 'genesis_sample_link_color', genesis_sample_customizer_get_default_link_color() );
	$color_accent = get_theme_mod( 'genesis_sample_accent_color', genesis_sample_customizer_get_default_accent_color() );
	$logo         = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );

	if ( $logo ) {
		$logo_height           = absint( $logo[2] );
		$logo_max_width        = get_theme_mod( 'genesis_sample_logo_width', 350 );
		$logo_width            = absint( $logo[1] );
		$logo_ratio            = $logo_width / max( $logo_height, 1 );
		$logo_effective_height = min( $logo_width, $logo_max_width ) / max( $logo_ratio, 1 );
		$logo_padding          = max( 0, ( 60 - $logo_effective_height ) / 2 );
	}

	$css = '';

	$css .= ( genesis_sample_customizer_get_default_link_color() !== $color_link ) ? sprintf(
		'

		a,
		.entry-title a:focus,
		.entry-title a:hover,
		.genesis-nav-menu a:focus,
		.genesis-nav-menu a:hover,
		.genesis-nav-menu .current-menu-item > a,
		.genesis-nav-menu .sub-menu .current-menu-item > a:focus,
		.genesis-nav-menu .sub-menu .current-menu-item > a:hover,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.sub-menu-toggle:focus,
		.sub-menu-toggle:hover {
			color: %s;
		}

		',
		$color_link
	) : '';

	$css .= ( genesis_sample_customizer_get_default_accent_color() !== $color_accent ) ? sprintf(
		'

		button:focus,
		button:hover,
		input[type="button"]:focus,
		input[type="button"]:hover,
		input[type="reset"]:focus,
		input[type="reset"]:hover,
		input[type="submit"]:focus,
		input[type="submit"]:hover,
		input[type="reset"]:focus,
		input[type="reset"]:hover,
		input[type="submit"]:focus,
		input[type="submit"]:hover,
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"]:focus,
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"]:hover,
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"]:focus,
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"]:hover,
		.button:focus,
		.button:hover {
			background-color: %1$s;
			color: %2$s;
		}

		@media only screen and (min-width: 960px) {
			.genesis-nav-menu > .menu-highlight > a:hover,
			.genesis-nav-menu > .menu-highlight > a:focus,
			.genesis-nav-menu > .menu-highlight.current-menu-item > a {
				background-color: %1$s;
				color: %2$s;
			}
		}
		',
		$color_accent,
		genesis_sample_color_contrast( $color_accent )
	) : '';

	$css .= ( has_custom_logo() && ( 200 <= $logo_effective_height ) ) ?
		'
		.site-header {
			position: static;
		}
		'
	: '';

	$css .= ( has_custom_logo() && ( 350 !== $logo_max_width ) ) ? sprintf(
		'
		.wp-custom-logo .site-container .title-area {
			max-width: %spx;
		}
		',
		$logo_max_width
	) : '';

	// Place menu below logo and center logo once it gets big.
	$css .= ( has_custom_logo() && ( 600 <= $logo_max_width ) ) ?
		'
		.wp-custom-logo .title-area,
		.wp-custom-logo .menu-toggle,
		.wp-custom-logo .nav-primary {
			float: none;
		}

		.wp-custom-logo .title-area {
			margin: 0 auto;
			text-align: center;
		}

		@media only screen and (min-width: 960px) {
			.wp-custom-logo .nav-primary {
				text-align: center;
			}

			.wp-custom-logo .nav-primary .sub-menu {
				text-align: left;
			}
		}
		'
	: '';

	$css .= ( has_custom_logo() && $logo_padding && ( 1 < $logo_effective_height ) ) ? sprintf(
		'
		.wp-custom-logo .title-area {
			padding-top: %spx;
		}
		',
		$logo_padding + 5
	) : '';

	if ( $font_size ) {
		$font_pieces = explode( ':', $font_size );
	
		$css .= "body, button, input, select, textarea { font-size: {$font_pieces[0]}; }";
	}
	if ( $h1_font_size ) {
		$h1_font = explode( ':', $h1_font_size );
	
		$css .= "h1 { font-size: {$h1_font[0]}; }";
	}
	if ( $h2_font_size ) {
		$h2_font = explode( ':', $h2_font_size );
	
		$css .= "h2 { font-size: {$h2_font[0]}; }";
	}
	if ( $h3_font_size ) {
		$h3_font = explode( ':', $h3_font_size );
	
		$css .= "h3 { font-size: {$h3_font[0]}; }";
	}
	if ( $h4_font_size ) {
		$h4_font = explode( ':', $h4_font_size );
	
		$css .= "h4 { font-size: {$h4_font[0]}; }";
	}
	if ( $h5_font_size ) {
		$h5_font = explode( ':', $h5_font_size );
	
		$css .= "h5 { font-size: {$h5_font[0]}; }";
	}
	if ( $h6_font_size ) {
		$h6_font = explode( ':', $h6_font_size );
	
		$css .= "h6 { font-size: {$h6_font[0]}; }";
	}
	if ( $headings_font ) {
		$font_pieces = explode( ':', $headings_font );
	
		$css .= "h1, h2, h3, h4, h5, h6 { font-family: {$font_pieces[0]}; }";
	}
	
	if ( $body_font ) {
		$font_pieces = explode( ':', $body_font );
	
		$css .= "body, button, input, select, textarea { font-family: {$font_pieces[0]}; }";
	}
	if ( $css ) {
		wp_add_inline_style( CHILD_THEME_HANDLE, $css );
	}

}
