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
	// fonts section
	$font_size = esc_html( get_theme_mod( 'font_size' ) )."px";
	$headings_font = esc_html( get_theme_mod( 'custom_headings_font' ) );
	$body_font     = esc_html( get_theme_mod( 'custom_body_font' ) );
	// h1 font size & line-height & margin
	$h1_font_size = esc_html( get_theme_mod( 'h1_font_size' ) )."px";
	$h1_line_height = esc_html( get_theme_mod( 'h1_line_height' ) )."px";
	$h1_margin_bottom = esc_html( get_theme_mod( 'h1_margin_bottom' ) )."px";

	// h2 font size & line-height & margin
	$h2_font_size = esc_html( get_theme_mod( 'h2_font_size' ) )."px";
	$h2_line_height = esc_html( get_theme_mod( 'h2_line_height' ) )."px";
	$h2_margin_bottom = esc_html( get_theme_mod( 'h2_margin_bottom' ) )."px";

	// h3 font size & line-height & margin
	$h3_font_size = esc_html( get_theme_mod( 'h3_font_size' ) )."px";
	$h3_line_height = esc_html( get_theme_mod( 'h3_line_height' ) )."px";
	$h3_margin_bottom = esc_html( get_theme_mod( 'h3_margin_bottom' ) )."px";

	// h4 font size & line-height & margin
	$h4_font_size = esc_html( get_theme_mod( 'h4_font_size' ) )."px";
	$h4_line_height = esc_html( get_theme_mod( 'h4_line_height' ) )."px";
	$h4_margin_bottom = esc_html( get_theme_mod( 'h4_margin_bottom' ) )."px";

	// h5 font size & line-height & margin
	$h5_font_size = esc_html( get_theme_mod( 'h5_font_size' ) )."px";
	$h5_line_height = esc_html( get_theme_mod( 'h5_line_height' ) )."px";
	$h5_margin_bottom = esc_html( get_theme_mod( 'h5_margin_bottom' ) )."px";

	// h6 font size & line-height & margin
	$h6_font_size = esc_html( get_theme_mod( 'h6_font_size' ) )."px";
	$h6_line_height = esc_html( get_theme_mod( 'h6_line_height' ) )."px";
	$h6_margin_bottom = esc_html( get_theme_mod( 'h6_margin_bottom' ) )."px";

	// fonts section end

	// ------- colors panel--------

	// ************body color section end************
	$body_background = esc_html( get_theme_mod( 'body_background' ) );
	$body_text = esc_html( get_theme_mod( 'body_text' ) );
	$body_link = esc_html( get_theme_mod( 'body_link' ) );
	$body_link_hover = esc_html( get_theme_mod( 'body_link_hover' ) );
	$body_link_visited = esc_html( get_theme_mod( 'body_link_visited' ) );	
	// ************Body color section end************

	// ************header color section ************
	$header_background = esc_html( get_theme_mod( 'header_background' ) );
	$header_link = esc_html( get_theme_mod( 'header_link' ) );
	$header_link_hover = esc_html( get_theme_mod( 'header_link_hover' ) );
	$header_link_visited = esc_html( get_theme_mod( 'header_link_visited' ) );	
	$header_site_title = esc_html( get_theme_mod( 'header_site_title' ) );
	$header_site_description = esc_html( get_theme_mod( 'header_site_description' ) );
	// ************header color section end************

	// ************header color section ************
	$nav_text = esc_html( get_theme_mod( 'nav_text' ) );
	$nav_text_hover = esc_html( get_theme_mod( 'nav_text_hover' ) );
	$nav_text_background = esc_html( get_theme_mod( 'nav_text_background' ) );
	$nav_text_background_hover = esc_html( get_theme_mod( 'nav_text_background_hover' ) );
	$current_nav_text = esc_html( get_theme_mod( 'current_nav_text' ) );
	$current_nav_text_background = esc_html( get_theme_mod( 'current_nav_text_background' ) );
	
	// ************header color section end************

	// ************button color section ************
	$button_text = esc_html( get_theme_mod( 'button_text' ) );
	$button_text_hover = esc_html( get_theme_mod( 'button_text_hover' ) );
	$button_background = esc_html( get_theme_mod( 'button_background' ) );
	$button_background_hover = esc_html( get_theme_mod( 'button_background_hover' ) );
	// ************button color section ************

	// ************heading color section ************
	$h1_text = esc_html( get_theme_mod( 'h1_text' ) );
	$h2_text = esc_html( get_theme_mod( 'h2_text' ) );
	$h3_text = esc_html( get_theme_mod( 'h3_text' ) );
	$h4_text = esc_html( get_theme_mod( 'h4_text' ) );
	$h5_text = esc_html( get_theme_mod( 'h5_text' ) );
	$h6_text = esc_html( get_theme_mod( 'h6_text' ) );

	// ************heading color section end************

	// ************footer color section ************
	$footer_background = esc_html( get_theme_mod( 'footer_background' ) );
	$footer_link = esc_html( get_theme_mod( 'footer_link' ) );
	$footer_link_hover = esc_html( get_theme_mod( 'footer_link_hover' ) );
	$footer_link_visited = esc_html( get_theme_mod( 'footer_link_visited' ) );	
	$footer_text = esc_html( get_theme_mod( 'footer_text' ) );
	$footer_widget_title = esc_html( get_theme_mod( 'footer_widget_title' ) );
	// ************footer color section end************
	
	// ************form color section ************
	$form_background = esc_html( get_theme_mod( 'form_background' ) );
	$form_label_text = esc_html( get_theme_mod( 'form_label_text' ) );
	$form_text = esc_html( get_theme_mod( 'form_text' ) );
	$form_placeholder_text = esc_html( get_theme_mod( 'form_placeholder_text' ) );
	$form_field_background = esc_html( get_theme_mod( 'form_field_background' ) );
	$form_field_border = esc_html( get_theme_mod( 'form_field_border' ) );
	$form_focus_text = esc_html( get_theme_mod( 'form_focus_text' ) );
	$form_placeholder_focus_text = esc_html( get_theme_mod( 'form_placeholder_focus_text' ) );
	$form_field_focus_background = esc_html( get_theme_mod( 'form_field_focus_background' ) );
	$form_field_focus_border = esc_html( get_theme_mod( 'form_field_focus_border' ) );
	
	
	// ************form color section end************
	
	// $color_link   = get_theme_mod( 'genesis_sample_link_color', genesis_sample_customizer_get_default_link_color() );
	// $color_accent = get_theme_mod( 'genesis_sample_accent_color', genesis_sample_customizer_get_default_accent_color() );
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

	//---------fonts panel start----------

	if ( $font_size ) {
		$font_pieces = explode( ':', $font_size );
	
		$css .= "body, button, input, select, textarea { font-size: {$font_pieces[0]}; }";
	}
	if ( $body_font ) {
		$font_pieces = explode( ':', $body_font );
	
		$css .= "body, button, input, select, textarea { font-family: {$font_pieces[0]}; }";
	}
	

	//************ */heading css************
	if ( $headings_font ) {
		$font_pieces = explode( ':', $headings_font );
	
		$css .= "h1, h2, h3, h4, h5, h6 { font-family: {$font_pieces[0]}; }";
	}
	// h1 font size & line-height & margin css
	if ( $h1_font_size || $h1_line_height || $h1_margin_bottom ) {
	
		$css .= "h1 { font-size: {$h1_font_size};
					  line-height: {$h1_line_height};
					  margin-bottom: {$h1_margin_bottom};  }";
	}

	// h2 font size & line-height & margin css
	if ( $h2_font_size || $h2_line_height || $h2_margin_bottom ) {
	
		$css .= "h2 { font-size: {$h2_font_size};
					  line-height: {$h2_line_height};
					  margin-bottom: {$h2_margin_bottom};  }";
	}

	// h3 font size & line-height & margin css
	if ( $h3_font_size || $h3_line_height || $h3_margin_bottom ) {
	
		$css .= "h3 { font-size: {$h3_font_size};
					  line-height: {$h3_line_height};
					  margin-bottom: {$h3_margin_bottom};  }";
	}

	// h4 font size & line-height & margin css
	if ( $h4_font_size || $h4_line_height || $h4_margin_bottom ) {
	
		$css .= "h4 { font-size: {$h4_font_size};
					  line-height: {$h4_line_height};
					  margin-bottom: {$h4_margin_bottom};  }";
	}

	// h5 font size & line-height & margin css
	if ( $h5_font_size || $h5_line_height || $h5_margin_bottom ) {

		$css .= "h5 { font-size: {$h5_font_size};
						line-height: {$h5_line_height};
						margin-bottom: {$h5_margin_bottom};  }";
	}

	// h6 font size & line-height & margin css
	if ( $h6_font_size || $h6_line_height || $h6_margin_bottom ) {
	
		$css .= "h6 { font-size: {$h6_font_size};
					  line-height: {$h6_line_height};
					  margin-bottom: {$h6_margin_bottom};  }";
	}
	
	//---------fonts panel end----------

	//---------color panel----------

	// *************body css *************
	// body background color css
	if($body_background){
		$css.= "body { background-color: {$body_background}; }";
	}
	// body text color css
	if($body_text){
		$css.= "body { color: {$body_text}; }";
	}
	// body link color css
	if($body_link){
		$css.= "a { color: {$body_link}; }";
	}
	// body link hover color css
	if($body_link_hover){
		$css.= "a:hover { color: {$body_link_hover}; }";
	}
	// body link visited color css
	if($body_link_visited){
		$css.= "a:visited { color: {$body_link_visited}; }";
	}
	// *************body css end*************

	// *************header css *************
	// header background color css
	if($header_background){
		$css.= ".site-header { background-color: {$header_background}; }";
	}
	// header link color css
	if($header_link){
		$css.= ".site-header a { color: {$header_link}; }";
	}
	// header link hover color css
	if($header_link_hover){
		$css.= ".site-header a:hover { color: {$header_link_hover}; }";
	}
	//site title color css
	if($header_site_title){
		$css.= ".site-title a { color: {$header_site_title}; }";
	}
	// site description text color css
	if($header_site_description){
		$css.= ".site-description { color: {$header_site_description}; }";
	}
	// *************header css end *************


	// *************navigation css *************
	// navigation  text color css
	if($nav_text){
		$css.= "nav li a span { color: {$nav_text}; }";
	}

	// navigation  text hover color css
	if($nav_text_hover){
		$css.= "li a:hover span { color: {$nav_text_hover}; }";
	}

	// navigation  text background color css
	if($nav_text_background){
		$css.= "nav li a { background-color: {$nav_text_background}; }";
	}

	// navigation  text background hover color css
	if($nav_text_background_hover){
		$css.= "nav li:hover a { background-color: {$nav_text_background_hover}; }";
	}

	// current navigation  text background hover color css
	if($current_nav_text){
		$css.= "nav li.current-menu-item a span{ color: {$current_nav_text}; }";
	}

	// current navigation  text background color css
	if($current_nav_text_background){
		$css.= "nav li.current-menu-item a { background-color: {$current_nav_text_background}; }";
	}	
	// *************navigation css end *************


	// *************button css *************
	// button  text color css
	if($button_text){
		$css.= "button { color: {$button_text} !important ;
				background-color: {$button_background} !important;}";
	}

	// button  text hover color css
	if($button_text_hover || $button_background_hover){
		$css.= "button:hover { color: {$button_text_hover} !important; 
							   background-color: {$button_background_hover} !important;}";
	}

	// *************button css  end *************


	// *************heading css  *************
	// Heading H1 color css
	if($h1_text){
		$css.= "h1 { color: {$h1_text}; }";
	}
	// Heading H2 color css
	if($h2_text){
		$css.= "h2 { color: {$h2_text}; }";
	}
	// Heading H3 color css
	if($h3_text){
		$css.= "h3 { color: {$h3_text}; }";
	}
	// Heading H4 color css
	if($h4_text){
		$css.= "h4 { color: {$h4_text}; }";
	}
	// Heading H5 color css
	if($h5_text){
		$css.= "h5 { color: {$h5_text}; }";
	}
	// Heading H6 color css
	if($h6_text){
		$css.= "h6 { color: {$h6_text}; }";
	}
	// *************heading css end *************


	// *************footer css *************
	// footer background color css
	if($footer_background){
		$css.= ".footer-widgets, .site-footer { background-color: {$footer_background}; }";
	}
	// footer link color css
	if($footer_link){
		$css.= ".widget_text a, .site-footer a { color: {$footer_link}; }";
	}
	// footer link hover color css
	if($footer_link_hover){
		$css.= ".widget_text a:hover, .site-footer a:hover { color: {$footer_link_hover}; }";
	}
	//site title color css
	if($footer_text){
		$css.= ".widget_text, .site-footer { color: {$footer_text}; }";
	}
	// // site description text color css
	if($footer_widget_title){
		$css.= ".widget-title { color: {$footer_widget_title}; }";
	}
	// *************footer css end *************
	

	// *************form css  *************
	// form background color
	if($form_background){
		$css.= ".wpforms-form { background-color: {$form_background}; }";
	}
	//form label color
	if($form_label_text){
		$css.= ".wpforms-form label { color: {$form_label_text}; }";
	}

	//form text color & backgroud & border
	if($form_text){
		$css.= ".wpforms-form input, .wpforms-form select, .wpforms-form textarea { 
			color: {$form_text} !important;
			background-color: {$form_field_background} !important;
			border-color: {$form_field_border} !important; }";
	}

	//form palceholder color
	if($form_placeholder_text){
		$css.= ".wpforms-form input::placeholder, .wpforms-form select::placeholder, .wpforms-form textarea::placeholder { color: {$form_placeholder_text} !important }";
	}
	//form focus text color
	if($form_focus_text){
		$css.= ".wpforms-form input:focus, .wpforms-form select:focus, .wpforms-form textarea:focus { color: {$form_focus_text} !important;
						 background-color: {$form_field_focus_background} !important;
						 border-color: {$form_field_focus_border} !important; }";
	}
	//form focus text color
	if($form_placeholder_focus_text){
		$css.= ".wpforms-form input:focus::placeholder, .wpforms-form select:focus::placeholder, .wpforms-form textarea:focus::placeholder { color: {$form_placeholder_focus_text} !important }";
	}
	
	// *************form css end *************
	if ( $css ) {
		wp_add_inline_style( CHILD_THEME_HANDLE, $css );
	}

}
