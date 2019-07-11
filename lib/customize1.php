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

add_action( 'wp_enqueue_scripts', 'genesis_giant_css' );
function genesis_giant_css() {
	//----------------------------- Typography panel -----------------------------

	// ********************* body fonts section ******************
	$body_font     = esc_html( get_theme_mod( 'body_font' ) );
	$body_font_size = esc_html( get_theme_mod( 'body_font_size' ) )."px";
	$body_font_weight = esc_html( get_theme_mod( 'body_font_weight' ) );
	$body_line_height = esc_html( get_theme_mod( 'body_line_height' ) )."px";
	$body_p_margin = esc_html( get_theme_mod( 'body_p_margin' ) )."px";
	// ********************* body fonts section end******************

	// ********************* header fonts section ******************
	$header_site_title_font     = esc_html( get_theme_mod( 'header_site_title_font' ) );
	$header_site_title_font_size = esc_html( get_theme_mod( 'header_site_title_font_size' ) )."px";
	$header_site_title_line_height = esc_html( get_theme_mod( 'header_site_title_line_height' ) )."px";
	$header_site_title_margin = esc_html( get_theme_mod( 'header_site_title_margin' ) )."px";
	$header_site_title_text_transform = esc_html( get_theme_mod( 'header_site_title_text_transform' ) );
	$header_site_description_font     = esc_html( get_theme_mod( 'header_site_description_font' ) );
	$header_site_description_font_size = esc_html( get_theme_mod( 'header_site_description_font_size' ) )."px";
	$header_site_description_line_height = esc_html( get_theme_mod( 'header_site_description_line_height' ) )."px";
	$header_site_description_margin = esc_html( get_theme_mod( 'header_site_description_margin' ) )."px";
	$header_site_description_text_transform = esc_html( get_theme_mod( 'header_site_description_text_transform' ) );
	// ********************* header fonts section end******************

	// ********************* navigation fonts section start******************
	$navigation_font = esc_html( get_theme_mod( 'navigation_font' ) );
	$navigation_font_size = esc_html( get_theme_mod( 'navigation_font_size' ) )."px";
	$navigation_font_weight = esc_html( get_theme_mod( 'navigation_font_weight' ) );
	$navigation_line_height = esc_html( get_theme_mod( 'navigation_line_height' ) )."px";
	$navigation_text_transform = esc_html( get_theme_mod( 'navigation_text_transform' ) );
	// ********************* navigation fonts section end******************

	// ********************* button fonts section start******************
	$button_font = esc_html( get_theme_mod( 'button_font' ) );
	$button_font_size = esc_html( get_theme_mod( 'button_font_size' ) )."px";
	$button_font_weight = esc_html( get_theme_mod( 'button_font_weight' ) );
	$button_line_height = esc_html( get_theme_mod( 'button_line_height' ) )."px";
	$button_text_transform = esc_html( get_theme_mod( 'button_text_transform' ) );
	// ********************* button fonts section end******************

	// ********************* headings fonts section start******************
	// h1 font size & line-height & margin & text-transform
    $h1_font  = esc_html(get_theme_mod('h1_font'));
	$h1_font_size = esc_html( get_theme_mod( 'h1_font_size' ) )."px";
	$h1_font_weight = esc_html( get_theme_mod( 'h1_font_weight' ) );
	$h1_line_height = esc_html( get_theme_mod( 'h1_line_height' ) )."px";
	$h1_margin_bottom = esc_html( get_theme_mod( 'h1_margin_bottom' ) )."px";
	$h1_text_transform = esc_html( get_theme_mod( 'h1_text_transform' ) );
	
	// h2 font size & line-height & margin & text-transform
	$h2_font  = esc_html(get_theme_mod('h2_font'));
	$h2_font_size = esc_html( get_theme_mod( 'h2_font_size' ) )."px";
	$h2_font_weight = esc_html( get_theme_mod( 'h2_font_weight' ) );
	$h2_line_height = esc_html( get_theme_mod( 'h2_line_height' ) )."px";
	$h2_margin_bottom = esc_html( get_theme_mod( 'h2_margin_bottom' ) )."px";
	$h2_text_transform = esc_html( get_theme_mod( 'h2_text_transform' ) );

	// h3 font size & line-height & margin & text-transform
	$h3_font  = esc_html(get_theme_mod('h3_font'));
	$h3_font_size = esc_html( get_theme_mod( 'h3_font_size' ) )."px";
	$h3_font_weight = esc_html( get_theme_mod( 'h3_font_weight' ) );
	$h3_line_height = esc_html( get_theme_mod( 'h3_line_height' ) )."px";
	$h3_margin_bottom = esc_html( get_theme_mod( 'h3_margin_bottom' ) )."px";
	$h3_text_transform = esc_html( get_theme_mod( 'h3_text_transform' ) );

	// h4 font size & line-height & margin & text-transform
	$h4_font  = esc_html(get_theme_mod('h4_font'));
	$h4_font_size = esc_html( get_theme_mod( 'h4_font_size' ) )."px";
	$h4_font_weight = esc_html( get_theme_mod( 'h4_font_weight' ) );
	$h4_line_height = esc_html( get_theme_mod( 'h4_line_height' ) )."px";
	$h4_margin_bottom = esc_html( get_theme_mod( 'h4_margin_bottom' ) )."px";
	$h4_text_transform = esc_html( get_theme_mod( 'h4_text_transform' ) );

	// h5 font size & line-height & margin & text-transform
	$h5_font  = esc_html(get_theme_mod('h5_font'));
	$h5_font_size = esc_html( get_theme_mod( 'h5_font_size' ) )."px";
	$h5_font_weight = esc_html( get_theme_mod( 'h5_font_weight' ) );
	$h5_line_height = esc_html( get_theme_mod( 'h5_line_height' ) )."px";
	$h5_margin_bottom = esc_html( get_theme_mod( 'h5_margin_bottom' ) )."px";
	$h5_text_transform = esc_html( get_theme_mod( 'h5_text_transform' ) );

	// h6 font size & line-height & margin & text-transform
	$h6_font  = esc_html(get_theme_mod('h6_font'));
	$h6_font_size = esc_html( get_theme_mod( 'h6_font_size' ) )."px";
	$h6_font_weight = esc_html( get_theme_mod( 'h6_font_weight' ) );
	$h6_line_height = esc_html( get_theme_mod( 'h6_line_height' ) )."px";
	$h6_margin_bottom = esc_html( get_theme_mod( 'h6_margin_bottom' ) )."px";
	$h6_text_transform = esc_html( get_theme_mod( 'h6_text_transform' ) );
	// ********************* headings fonts section end******************

	// ********************* widget fonts section start******************
	$footer_widget_font  = esc_html(get_theme_mod('footer_widget_font'));
	$footer_widget_font_size = esc_html( get_theme_mod( 'footer_widget_font_size' ) )."px";
	$footer_widget_font_weight = esc_html( get_theme_mod( 'footer_widget_font_weight' ) );
	$footer_widget_margin = esc_html( get_theme_mod( 'footer_widget_margin' ) )."px";
	$footer_widget_text_transform = esc_html( get_theme_mod( 'footer_widget_text_transform' ) );
	$footer_widget_text_font_size  = esc_html( get_theme_mod( 'footer_widget_text_font_size' ) )."px";
	$footer_widget_text_font_weight  = esc_html( get_theme_mod( 'footer_widget_text_font_weight' ) );

	// ********************* widget fonts section end******************

	// **************** footer fonts section start***********
	$footer_font = esc_html( get_theme_mod( 'footer_font' ) );
	$footer_font_size = esc_html( get_theme_mod( 'footer_font_size' ) )."px";
	$footer_font_weight = esc_html( get_theme_mod( 'footer_font_weight' ) );
	$footer_line_height = esc_html( get_theme_mod( 'footer_line_height' ) )."px";
	$footer_text_transform = esc_html( get_theme_mod( 'footer_text_transform' ) );
	// *************** footer fonts section end*************
	// ------------------------- Typography panrl end --------------------------



	// ------------------------- colors panel start-----------------------------
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
	//----------------------form color image panel end-----------------------
	


	//-------------------- background image panel start----------------------
	// ************ body background image section start************
	$body_bg_image = esc_html( get_theme_mod( 'body_bg_image' ) );
	$body_bg_repeat = esc_html( get_theme_mod( 'body_bg_repeat' ) );
	$body_bg_size = esc_html( get_theme_mod( 'body_bg_size' ) );
	$body_bg_attachment = esc_html( get_theme_mod( 'body_bg_attachment' ) );
	$body_bg_position = esc_html( get_theme_mod( 'body_bg_position' ) );	
	// ************ body background image section end************

	// ************ header background image section start************
	$header_bg_image = esc_html( get_theme_mod( 'header_bg_image' ) );
	$header_bg_repeat = esc_html( get_theme_mod( 'header_bg_repeat' ) );
	$header_bg_size = esc_html( get_theme_mod( 'header_bg_size' ) );
	$header_bg_attachment = esc_html( get_theme_mod( 'header_bg_attachment' ) );
	$header_bg_position = esc_html( get_theme_mod( 'header_bg_position' ) );	
	// ************ header background image section end************

	// ************ footer widget background image section start************
	$footer_widget_bg_image = esc_html( get_theme_mod( 'footer_widget_bg_image' ) );
	$footer_widget_bg_repeat = esc_html( get_theme_mod( 'footer_widget_bg_repeat' ) );
	$footer_widget_bg_size = esc_html( get_theme_mod( 'footer_widget_bg_size' ) );
	$footer_widget_bg_attachment = esc_html( get_theme_mod( 'footer_widget_bg_attachment' ) );
	$footer_widget_bg_position = esc_html( get_theme_mod( 'footer_widget_bg_position' ) );	
	// ************ footer widget background image section end************

	// ************ footer background image section start************
	$footer_bg_image = esc_html( get_theme_mod( 'footer_bg_image' ) );
	$footer_bg_repeat = esc_html( get_theme_mod( 'footer_bg_repeat' ) );
	$footer_bg_size = esc_html( get_theme_mod( 'footer_bg_size' ) );
	$footer_bg_attachment = esc_html( get_theme_mod( 'footer_bg_attachment' ) );
	$footer_bg_position = esc_html( get_theme_mod( 'footer_bg_position' ) );	
	// ************ footer background image section end************
	
	//------------------------ background image panel end----------------------

	
	$hide_site_identity =  get_theme_mod( 'hide_site_identity' );
	$logo         = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );

	if ( $logo ) {
		$logo_height           = absint( $logo[2] );
		$logo_max_width        = get_theme_mod( 'genesis_giant_logo_width', 350 );
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
	
    // Hide Site Title & Tagline
	if($hide_site_identity != ''){
		$css .= ".site-title, .site-description { display: none; }";
	}
	//------------------- fonts panel start -------------------

	//************ */body font css************
	if ( $body_font || $body_font_size || $body_font_weight || $body_line_height ) {
		$font_pieces = explode( ':', $body_font );
	
		$css .= "body, input, select, textarea { font-family: {$font_pieces[0]};
		font-size: {$body_font_size};
		font-weight: {$body_font_weight};
		line-height: {$body_line_height}; }";
	}
	if ( $body_p_margin ) {	
		$css .= "p { margin-bottom: {$body_p_margin} !important; }";
	}
	//************ */body font css end************

	//************ */header font css************

	if ( $header_site_title_font || $header_site_title_font_size || $header_site_title_line_height || $header_site_title_margin || $header_site_title_text_transform) {
		$font_pieces = explode( ':', $header_site_title_font );

		$css .= ".site-title {	font-family: {$font_pieces[0]};
								font-size: {$header_site_title_font_size};
								line-height: {$header_site_title_line_height};
								margin-bottom: {$header_site_title_margin}; 
								text-transform: {$header_site_title_text_transform}; }";
								
	}
	
	if ( $header_site_description_font || $header_site_description_font_size || $header_site_description_line_height || $header_site_description_margin || $header_site_description_text_transform) {
		$font_pieces = explode( ':', $header_site_description_font );

		$css .= ".site-description {	font-family: {$font_pieces[0]};
								font-size: {$header_site_description_font_size};
								line-height: {$header_site_description_line_height};
								margin-bottom: {$header_site_description_margin}; 
								text-transform: {$header_site_description_text_transform}; }";
								
	}	
	//************ */header font css end************

	//************ */navigation font css************
	if ( $navigation_font || $navigation_font_size || $navigation_font_weight || $navigation_line_height || $navigation_text_transform) {
		$font_pieces = explode( ':', $navigation_font );

		$css .= ".genesis-nav-menu a {	font-family: {$font_pieces[0]};
										font-size: {$navigation_font_size};
										font-weight: {$navigation_font_weight};
										line-height: {$navigation_line_height};
										text-transform: {$navigation_text_transform}; }";
								
	}	
	//************ */navigation font css end************

	//************ */button font css************
	if ( $button_font || $button_font_size || $button_font_weight || $button_line_height || $button_text_transform) {
		$font_pieces = explode( ':', $button_font );

		$css .= "button {	font-family: {$font_pieces[0]};
							font-size: {$button_font_size};
							font-weight: {$button_font_weight};
							line-height: {$button_line_height};
							text-transform: {$button_text_transform}; }";
								
	}	
	//************ */button font css end************	

	//************ */heading css************
	if ( $h1_font || $h1_font_size || $h1_font_weight || $h1_line_height || $h1_margin_bottom || $h1_text_transform || $h1_text ) {
		$font_pieces = explode( ':', $h1_font );
	
		$css .= "h1 { 	font-family: {$font_pieces[0]};
						font-size: {$h1_font_size};
						font-weight: {$h1_font_weight};
					  	line-height: {$h1_line_height};
						margin-bottom: {$h1_margin_bottom};
						text-transform: {$h1_text_transform};
						color: {$h1_text};}";
	}

	// h2 font size & line-height & margin & text-transform css
	if ( $h2_font || $h2_font_size || $h2_font_weight || $h2_line_height || $h2_margin_bottom || $h2_text_transform || $h2_text ) {
		$font_pieces = explode( ':', $h2_font );
	
		$css .= "h2 { 	font-family: {$font_pieces[0]};
						font-size: {$h2_font_size};
						font-weight: {$h2_font_weight};
					  	line-height: {$h2_line_height};
						margin-bottom: {$h2_margin_bottom};
						text-transform: {$h2_text_transform};
						color: {$h2_text};}";
	}
	// h3 font size & line-height & margin & text-transform css
	if ( $h3_font || $h3_font_size || $h3_font_weight || $h3_line_height || $h3_margin_bottom || $h3_text_transform || $h3_text ) {
		$font_pieces = explode( ':', $h3_font );
	
		$css .= "h3 { 	font-family: {$font_pieces[0]};
						font-size: {$h3_font_size};
						font-weight: {$h3_font_weight};
					  	line-height: {$h3_line_height};
						margin-bottom: {$h3_margin_bottom};
						text-transform: {$h3_text_transform};
						color: {$h3_text};}";
	}

	// h4 font size & line-height & margin & text-transform css
	if ( $h4_font || $h4_font_size || $h4_font_weight || $h4_line_height || $h4_margin_bottom || $h4_text_transform || $h4_text ) {
		$font_pieces = explode( ':', $h4_font );
	
		$css .= "h4 { 	font-family: {$font_pieces[0]};
						font-size: {$h4_font_size};
						font-weight: {$h4_font_weight};
					  	line-height: {$h4_line_height};
						margin-bottom: {$h4_margin_bottom};
						text-transform: {$h4_text_transform};
						color: {$h4_text};}";
	}

	// h5 font size & line-height & margin & text-transform css
	if ( $h5_font || $h5_font_size || $h5_font_weight || $h5_line_height || $h5_margin_bottom || $h5_text_transform || $h5_text ) {
		$font_pieces = explode( ':', $h5_font );
	
		$css .= "h5 { 	font-family: {$font_pieces[0]};
						font-size: {$h5_font_size};
						font-weight: {$h5_font_weight};
					  	line-height: {$h5_line_height};
						margin-bottom: {$h5_margin_bottom};
						text-transform: {$h5_text_transform};
						color: {$h5_text};}";
	}

	// h6 font size & line-height & margin & text-transform css
	if ( $h6_font || $h6_font_size || $h6_font_weight || $h6_line_height || $h6_margin_bottom || $h6_text_transform || $h6_text ) {
		$font_pieces = explode( ':', $h6_font );
	
		$css .= "h6 { 	font-family: {$font_pieces[0]};
						font-size: {$h6_font_size};
						font-weight: {$h6_font_weight};
					  	line-height: {$h6_line_height};
						margin-bottom: {$h6_margin_bottom};
						text-transform: {$h6_text_transform};
						color: {$h6_text};}";
	}

	// footer widget font size & line-height & margin & text-transform css
	if ( $footer_widget_font || $footer_widget_font_size || $footer_widget_font_weight || $footer_widget_margin || $footer_widget_text_transform) {
		$font_pieces = explode( ':', $footer_widget_font );
	
		$css .= ".widget-title { 	font-family: {$font_pieces[0]};
						font-size: {$footer_widget_font_size};
						font-weight: {$footer_widget_font_weight};
						margin-bottom: {$footer_widget_margin};
						text-transform: {$footer_widget_text_transform};
						color: {$footer_widget_title};
					}";
	}
	if($footer_widget_text_font_size || $footer_widget_text_font_weight){
		$css.= ".widget_text { font-size: {$footer_widget_text_font_size};
							   font-weight: {$footer_widget_text_font_weight}; }";
	}
	//************ */footer font css************
	if ( $footer_font || $footer_font_size || $footer_font_weight || $footer_line_height || $footer_text_transform) {
		$font_pieces = explode( ':', $footer_font );

		$css .= ".site-footer {	font-family: {$font_pieces[0]};
							font-size: {$footer_font_size};
							font-weight: {$footer_font_weight};
							line-height: {$footer_line_height};
							text-transform: {$footer_text_transform}; }";
								
	}	
	//************ */footer font css end************
	//---------fonts panel end----------


	//---------------------color panel----------------------
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
    // -------------------color panel end ---------------------------

    // -------------------background image panel start -----------------------
	// ************* body background image css  *************
	if($body_bg_image || $body_bg_repeat || $body_bg_attachment|| $body_bg_size || $body_bg_position){
		$css.= "body { background-image: url('{$body_bg_image}');
					   background-repeat: {$body_bg_repeat}; 
					   background-attachment: {$body_bg_attachment};
					   background-size: {$body_bg_size};
					   background-position: {$body_bg_position};  }";
					   
	}
	// ************* body background image css end *************

	// ************* header background image css  *************
	if($header_bg_image || $header_bg_repeat || $header_bg_attachment|| $header_bg_size || $header_bg_position){
		$css.= ".site-header { background-image: url('{$header_bg_image}');
					   background-repeat: {$header_bg_repeat}; 
					   background-attachment: {$header_bg_attachment};
					   background-size: {$header_bg_size};
					   background-position: {$header_bg_position};  }";
					   
	}
	// ************* header background image css end *************

	// ************* footer widget background image css  *************
	if($footer_widget_bg_image || $footer_widget_bg_repeat || $footer_widget_bg_attachment|| $footer_widget_bg_size || $footer_widget_bg_position){
		$css.= ".footer-widgets { background-image: url('{$footer_widget_bg_image}');
					   background-repeat: {$footer_widget_bg_repeat}; 
					   background-attachment: {$footer_widget_bg_attachment};
					   background-size: {$footer_widget_bg_size};
					   background-position: {$footer_widget_bg_position};  }";
					   
	}
	// ************* footer widget background image css end *************

	// ************* footer background image css  *************
	if($footer_bg_image || $footer_bg_repeat || $footer_bg_attachment|| $footer_bg_size || $footer_bg_position){
		$css.= ".site-footer { background-image: url('{$footer_bg_image}');
					   background-repeat: {$footer_bg_repeat}; 
					   background-attachment: {$footer_bg_attachment};
					   background-size: {$footer_bg_size};
					   background-position: {$footer_bg_position};  }";
					   
	}
	// ************* footer background image css end *************
	if ( $css ) {
		wp_add_inline_style( CHILD_THEME_HANDLE, $css );
	}

}



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








//--------------- add Header Layout section-----------------
// add_action('customize_register', 'header_layout_customizer');
// function header_layout_customizer($wp_customize)
// {
//     //adding section in wordpress customizer 
//     $wp_customize->add_section('header_layout_sec', array(
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
//         'section' => 'header_layout_sec', 
//         'type' => 'select',
//         'choices' => array(
//             'default' => __('Navigation Left', 'genesis-giant'),
//             'nav-center' => __('Navigation Center', 'genesis-giant'),
//             'nav-right' => __('Navigation right', 'genesis-giant')
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
        'default' => $body_font
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
        'default' => $body_font_size,
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
        'default' => $body_font_weight
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
        'default' => $body_line_height,
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
        'default' => $body_p_margin,
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
        'default' => $header_site_title_font
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
        'default' => $header_site_title_font_size,
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
        'default' => $header_site_title_line_height,
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
        'default' => $header_site_title_margin,
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
        'default' => $header_site_title_text_transform, 
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
        'default' => $header_site_description_font
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
        'default' => $header_site_description_font_size,
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
        'default' => $header_site_description_line_height,
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
        'default' => $header_site_description_margin,
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
        'default' => $header_site_description_text_transform, 
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
        'default' => $navigation_font
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
        'default' => $navigation_font_size,
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
        'default' => $navigation_font_weight
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
        'default' => $navigation_line_height,
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
        'default' => $navigation_text_transform,
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
        'default' => $button_font
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
        'default' => $button_font_size,
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
        'default' => $button_font_weight
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
        'default' => $button_line_height,
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
        'default' => $button_text_transform, 
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
        'default' => $h1_font
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
        'default' => $h1_font_size,
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
        'default' => $h1_font_weight
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
        'default' => $h1_line_height,
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
        'default' => $h1_margin_bottom,
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
        'default' => $h1_text_transform, 
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
        'default' => $h2_font
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
        'default' => $h2_font_size,
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
        'default' => $h2_font_weight
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
        'default' => $h2_line_height,
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
        'default' => $h2_margin_bottom,
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
        'default' => $h2_text_transform, 
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
        'default' => $h3_font
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
        'default' => $h3_font_size,
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
        'default' => $h3_font_weight
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
        'default' => $h3_line_height,
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
        'default' => $h3_margin_bottom,
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
        'default' => $h3_text_transform, 
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
        'default' => $h4_font
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
        'default' => $h4_font_size,
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
        'default' => $h4_font_weight
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
        'default' => $h4_line_height,
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
        'default' => $h4_margin_bottom,
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
        'default' => $h4_text_transform, 
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
        'default' => $h5_font
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
        'default' => $h5_font_size,
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
        'default' => $h5_font_weight
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
        'default' => $h5_line_height,
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
        'default' => $h5_margin_bottom,
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
        'default' => $h5_text_transform, 
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
        'default' => $h6_font
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
        'default' => $h6_font_size,
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
        'default' => $h6_font_weight
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
        'default' => $h6_line_height,
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
        'default' => $h6_margin_bottom,
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
        'default' => $h6_text_transform, 
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
        'default' => $footer_widget_font
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
        'default' => $footer_widget_font_size,
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
        'default' => $footer_widget_font_weight
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
        'default' => $footer_widget_margin,
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
        'default' => $footer_widget_text_transform, 
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
        'default' => $footer_widget_text_font_size,
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
        'default' => $footer_widget_text_font_weights
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
        'default' => $footer_font
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
        'default' => $footer_font_size,
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
        'default' => $footer_font_weight
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
        'default' => $footer_line_height,
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
        'default' => $footer_text_transform, 
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
        'default' => $body_background
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'body_color_sec',
        'settings' => 'body_background'
    )));
    
    // text color
    $wp_customize->add_setting('body_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $body_text
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_text', array(
        'label' => __('Text Color', 'genesis-giant'),
        'section' => 'body_color_sec',
        'settings' => 'body_text'
    )));
    
    // link color
    $wp_customize->add_setting('body_link', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $body_link
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_link', array(
        'label' => __('Link Color', 'genesis-giant'),
        'section' => 'body_color_sec',
        'settings' => 'body_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('body_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $body_link_hover
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-giant'),
        'section' => 'body_color_sec',
        'settings' => 'body_link_hover'
    )));
    
    // link visited color
    $wp_customize->add_setting('body_link_visited', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $body_link_visited
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
        'default' => $header_background
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'header_color_sec',
        'settings' => 'header_background'
    )));
    
    // link color
    $wp_customize->add_setting('header_link', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $header_link
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_link', array(
        'label' => __('Link Color', 'genesis-giant'),
        'section' => 'header_color_sec',
        'settings' => 'header_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('header_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $header_link_hover
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-giant'),
        'section' => 'header_color_sec',
        'settings' => 'header_link_hover'
    )));
    
    // Site Title color
    $wp_customize->add_setting('header_site_title', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $header_site_title
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_site_title', array(
        'label' => __('Site Title Color', 'genesis-giant'),
        'section' => 'header_color_sec',
        'settings' => 'header_site_title'
    )));
    
    // Site Description color
    $wp_customize->add_setting('header_site_description', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $header_site_description
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
        'default' => $nav_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text', array(
        'label' => __('Text Color', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text'
    )));
    
    // text hover color
    $wp_customize->add_setting('nav_text_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $nav_text_hover
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_hover', array(
        'label' => __('Text Hover Color', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text_hover'
    )));
    
    // background color
    $wp_customize->add_setting('nav_text_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $nav_text_background
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text_background'
    )));
    
    // background hover color
    $wp_customize->add_setting('nav_text_background_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $nav_text_background_hover
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_background_hover', array(
        'label' => __('Background Hover Color', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'nav_text_background_hover'
    )));
    
    // current text  color
    $wp_customize->add_setting('current_nav_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $current_nav_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'current_nav_text', array(
        'label' => __('Current Text', 'genesis-giant'),
        'section' => 'nav_color_sec',
        'settings' => 'current_nav_text'
    )));
    
    // current text background color
    $wp_customize->add_setting('current_nav_text_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $current_nav_text_background
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
        'default' => $button_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text', array(
        'label' => __('Text Color', 'genesis-giant'),
        'section' => 'button_color_sec',
        'settings' => 'button_text'
    )));
    
    // text hover color
    $wp_customize->add_setting('button_text_hover', array(
        'default' => $button_text_hover,
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
        'default' => $button_background
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'button_color_sec',
        'settings' => 'button_background'
    )));
    
    // background hover color
    $wp_customize->add_setting('button_background_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $button_background_hover
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
        'default' => $h1_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h1_text', array(
        'label' => __('Heading H1 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h1_text'
    )));
    // heading h2 color
    $wp_customize->add_setting('h2_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $h2_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h2_text', array(
        'label' => __('Heading H2 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h2_text'
    )));
    // heading h3 color
    $wp_customize->add_setting('h3_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $h3_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h3_text', array(
        'label' => __('Heading H3 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h3_text'
    )));
    // heading h4 color
    $wp_customize->add_setting('h4_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $h4_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h4_text', array(
        'label' => __('Heading H4 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h4_text'
    )));
    // heading h5 color
    $wp_customize->add_setting('h5_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $h5_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h5_text', array(
        'label' => __('Heading H5 Color', 'genesis-giant'),
        'section' => 'heading_color_sec',
        'settings' => 'h5_text'
    )));
    // heading h6 color
    $wp_customize->add_setting('h6_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $h6_text
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
        'default' => $footer_background
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_background'
    )));
    
    // Site Title color
    $wp_customize->add_setting('footer_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $footer_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text', array(
        'label' => __('Text', 'genesis-giant'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_text'
    )));
    
    // link color
    $wp_customize->add_setting('footer_link', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $footer_link
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link', array(
        'label' => __('Link Color', 'genesis-giant'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_link'
    )));
    
    // link hover color
    $wp_customize->add_setting('footer_link_hover', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $footer_link
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link_hover', array(
        'label' => __('Link Hover Color', 'genesis-giant'),
        'section' => 'footer_color_sec',
        'settings' => 'footer_link_hover'
    )));
    
    // Site Description color
    $wp_customize->add_setting('footer_widget_title', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $footer_widget_title
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
        'default' => $form_background
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_background', array(
        'label' => __('Background Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_background'
    )));
    
    // label color
    $wp_customize->add_setting('form_label_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $form_label_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_label_text', array(
        'label' => __('Label Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_label_text'
    )));
    
    // text color
    $wp_customize->add_setting('form_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $form_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_text', array(
        'label' => __('Text Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_text'
    )));
    
    // palceholder text color
    $wp_customize->add_setting('form_placeholder_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $form_placeholder_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_placeholder_text', array(
        'label' => __('Placeholder Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_placeholder_text'
    )));
    
    // background color
    $wp_customize->add_setting('form_field_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $form_field_background
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_background', array(
        'label' => __('Field Background Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_background'
    )));
    
    // border color
    $wp_customize->add_setting('form_field_border', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $form_field_border
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_border', array(
        'label' => __('Border Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_border'
    )));
    
    // focus_text color
    $wp_customize->add_setting('form_focus_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $form_focus_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_focus_text', array(
        'label' => __('Focus Text Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_focus_text'
    )));
    
    // focus palceholder text color
    $wp_customize->add_setting('form_placeholder_focus_text', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $form_placeholder_focus_text
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_placeholder_focus_text', array(
        'label' => __('Focus Placeholder Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_placeholder_focus_text'
    )));
    
    // focus background color
    $wp_customize->add_setting('form_field_focus_background', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $form_field_focus_background
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'form_field_focus_background', array(
        'label' => __('Focus Field Background Color', 'genesis-giant'),
        'section' => 'form_color_sec',
        'settings' => 'form_field_focus_background'
    )));
    
    // focus border color
    $wp_customize->add_setting('form_field_focus_border', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => $form_field_focus_border
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
        'default' => $body_bg_image
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control ( $wp_customize, 'body_bg_image', array(
        'description' => __('Select your background image for the body.', 'genesis-giant'),
        'section' => 'body_bg_image_sec',
        'settings' => 'body_bg_image'
        )));



        // body background repeat
        $wp_customize->add_setting('body_bg_repeat', array(
        'default' => $body_bg_repeat, 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'body_bg_repeat', 
        array(
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
        'default' => $body_bg_size, 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'body_bg_size', 
        array(
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
        'default' => $body_bg_attachment, 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'body_bg_attachment', 
        array(
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
            'default' => $body_bg_position,
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
        'default' => $header_bg_image
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control ( $wp_customize, 'header_bg_image', array(
        'description' => __('Select your background image for the header.', 'genesis-giant'),
        'section' => 'header_bg_image_sec',
        'settings' => 'header_bg_image'
        )));
        // header background repeat
        $wp_customize->add_setting('header_bg_repeat', array(
        'default' => 'no-repeat', 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' ,
        'default' => $header_bg_repeat
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'header_bg_repeat', 
        array(
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
        'default' => $header_bg_size, 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'header_bg_size', 
        array(
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
        'default' => $header_bg_attachment, 
        'type' => 'theme_mod', 
        'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'header_bg_attachment', 
        array(
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
            'default' => $header_bg_position,
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
        'default' => $footer_widget_bg_image 
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control ( $wp_customize, 'footer_widget_bg_image', array(
        'description' => __('Select your background image for the footer widget.', 'genesis-giant'),
        'section' => 'footer_widget_bg_image_sec',
        'settings' => 'footer_widget_bg_image'
        )));



        // footer widget background repeat
        $wp_customize->add_setting('footer_widget_bg_repeat', array(
            'default' => $footer_widget_bg_repeat, 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
            'footer_widget_bg_repeat', 
            array(
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
            'default' => $footer_widget_bg_size, 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_widget_bg_size', 
            array(
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
            'default' => $footer_widget_bg_attachment, 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_widget_bg_attachment', 
            array(
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
            'default' => $footer_widget_bg_position,
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
            'default' => $footer_bg_image 
        ));

            $wp_customize->add_control(new WP_Customize_Image_Control ( $wp_customize, 'footer_bg_image', array(
            'description' => __('Select your background image for the footer.', 'genesis-giant'),
            'section' => 'footer_bg_image_sec',
            'settings' => 'footer_bg_image'
        )));



        // footer background repeat
        $wp_customize->add_setting('footer_bg_repeat', array(
            'default' => $footer_bg_repeat, 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_bg_repeat', 
            array(
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
            'default' => $footer_bg_size, 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_bg_size', 
            array(
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
            'default' => $footer_bg_attachment, 
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options' 
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 
        'footer_bg_attachment', 
            array(
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
            'default' => $footer_bg_position,
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