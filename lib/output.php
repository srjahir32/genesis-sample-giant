<?php
/**
 * Genesis Giant.
 *
 * This file adds the required CSS to the front end to the Genesis Giant Theme.
 *
 * @package Genesis Giant
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// add_action( 'wp_enqueue_scripts', 'genesis_giant_css' );
/**
 * Checks the settings for the link color, and accent color.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 2.2.3
 */
add_action( 'wp_enqueue_scripts', 'genesis_giant_css' );
function genesis_giant_css() {
	//----------------------------- Typography panel -----------------------------

    // ********************* body fonts section ******************
    
    $body_font     = esc_html( get_theme_mod( 'body_font', 'Open Sans:400italic,700italic,400,700' ) );
    $body_font_size = esc_html( get_theme_mod( 'body_font_size', '17' ) )."px";
	$body_font_weight = esc_html( get_theme_mod( 'body_font_weight','400' ) );
	$body_line_height = esc_html( get_theme_mod( 'body_line_height', '27' ) )."px";
	$body_p_margin = esc_html( get_theme_mod( 'body_p_margin', '15' ) )."px";
	// ********************* body fonts section end******************

	// ********************* header fonts section ******************
	$header_site_title_font     = esc_html( get_theme_mod( 'header_site_title_font', 'Montserrat:400,500,600,700,800' ) );
	$header_site_title_font_size = esc_html( get_theme_mod( 'header_site_title_font_size', '' ) )."px";
	$header_site_title_line_height = esc_html( get_theme_mod( 'header_site_title_line_height', '' ) )."px";
	$header_site_title_margin = esc_html( get_theme_mod( 'header_site_title_margin', '' ) )."px";
	$header_site_title_text_transform = esc_html( get_theme_mod( 'header_site_title_text_transform', '' ) );
	$header_site_description_font     = esc_html( get_theme_mod( 'header_site_description_font', 'Montserrat:400,500,600,700,800' ) );
	$header_site_description_font_size = esc_html( get_theme_mod( 'header_site_description_font_size', '' ) )."px";
	$header_site_description_line_height = esc_html( get_theme_mod( 'header_site_description_line_height', '' ) )."px";
	$header_site_description_margin = esc_html( get_theme_mod( 'header_site_description_margin', '' ) )."px";
	$header_site_description_text_transform = esc_html( get_theme_mod( 'header_site_description_text_transform', '' ) );
	// ********************* header fonts section end******************

	// ********************* navigation fonts section start******************
	$navigation_font = esc_html( get_theme_mod( 'navigation_font', 'Montserrat:400,500,600,700,800' ) );
	$navigation_font_size = esc_html( get_theme_mod( 'navigation_font_size', '14' ) )."px";
	$navigation_font_weight = esc_html( get_theme_mod( 'navigation_font_weight', '600' ) );
	$navigation_line_height = esc_html( get_theme_mod( 'navigation_line_height', '14' ) )."px";
	$navigation_text_transform = esc_html( get_theme_mod( 'navigation_text_transform', 'uppercase' ) );
	// ********************* navigation fonts section end******************

	// ********************* button fonts section start******************
	$button_font = esc_html( get_theme_mod( 'button_font','Montserrat:400,500,600,700,800' ) );
	$button_font_size = esc_html( get_theme_mod( 'button_font_size', '16' ) )."px";
	$button_font_weight = esc_html( get_theme_mod( 'button_font_weight', '600' ) );
	$button_line_height = esc_html( get_theme_mod( 'button_line_height', '27' ) )."px";
	$button_text_transform = esc_html( get_theme_mod( 'button_text_transform', 'uppercase' ) );
	// ********************* button fonts section end******************

	// ********************* headings fonts section start******************
	// h1 font size & line-height & margin & text-transform
    $h1_font  = esc_html(get_theme_mod('h1_font', 'Montserrat:400,500,600,700,800'));
	$h1_font_size = esc_html( get_theme_mod( 'h1_font_size', '48' ) )."px";
	$h1_font_weight = esc_html( get_theme_mod( 'h1_font_weight', 'unset' ) );
	$h1_line_height = esc_html( get_theme_mod( 'h1_line_height', '60' ) )."px";
	$h1_margin_bottom = esc_html( get_theme_mod( 'h1_margin_bottom', '40' ) )."px";
	$h1_text_transform = esc_html( get_theme_mod( 'h1_text_transform', 'none' ) );
	
	// h2 font size & line-height & margin & text-transform
	$h2_font  = esc_html(get_theme_mod('h2_font', 'Montserrat:400,500,600,700,800'));
	$h2_font_size = esc_html( get_theme_mod( 'h2_font_size', '40' ) )."px";
	$h2_font_weight = esc_html( get_theme_mod( 'h2_font_weight', '600' ) );
	$h2_line_height = esc_html( get_theme_mod( 'h2_line_height', '44' ) )."px";
	$h2_margin_bottom = esc_html( get_theme_mod( 'h2_margin_bottom','40' ) )."px";
	$h2_text_transform = esc_html( get_theme_mod( 'h2_text_transform', 'none' ) );

	// h3 font size & line-height & margin & text-transform
	$h3_font  = esc_html(get_theme_mod('h3_font', 'Montserrat:400,500,600,700,800'));
	$h3_font_size = esc_html( get_theme_mod( 'h3_font_size', '36' ) )."px";
	$h3_font_weight = esc_html( get_theme_mod( 'h3_font_weight', '600' ) );
	$h3_line_height = esc_html( get_theme_mod( 'h3_line_height', '48' ) )."px";
	$h3_margin_bottom = esc_html( get_theme_mod( 'h3_margin_bottom', '35' ) )."px";
	$h3_text_transform = esc_html( get_theme_mod( 'h3_text_transform', 'none' ) );

	// h4 font size & line-height & margin & text-transform
	$h4_font  = esc_html(get_theme_mod('h4_font', 'Montserrat:400,500,600,700,800'));
	$h4_font_size = esc_html( get_theme_mod( 'h4_font_size', '30' ) )."px";
	$h4_font_weight = esc_html( get_theme_mod( 'h4_font_weight', '600' ) );
	$h4_line_height = esc_html( get_theme_mod( 'h4_line_height', '36' ) )."px";
	$h4_margin_bottom = esc_html( get_theme_mod( 'h4_margin_bottom', '30' ) )."px";
	$h4_text_transform = esc_html( get_theme_mod( 'h4_text_transform', 'capitalize' ) );

	// h5 font size & line-height & margin & text-transform
	$h5_font  = esc_html(get_theme_mod('h5_font', 'Montserrat:400,500,600,700,800'));
	$h5_font_size = esc_html( get_theme_mod( 'h5_font_size', '26' ) )."px";
	$h5_font_weight = esc_html( get_theme_mod( 'h5_font_weight', '600' ) );
	$h5_line_height = esc_html( get_theme_mod( 'h5_line_height', '30' ) )."px";
	$h5_margin_bottom = esc_html( get_theme_mod( 'h5_margin_bottom', '15' ) )."px";
	$h5_text_transform = esc_html( get_theme_mod( 'h5_text_transform', 'capitalize' ) );

	// h6 font size & line-height & margin & text-transform
	$h6_font  = esc_html(get_theme_mod('h6_font', 'Montserrat:400,500,600,700,800'));
	$h6_font_size = esc_html( get_theme_mod( 'h6_font_size', '22' ) )."px";
	$h6_font_weight = esc_html( get_theme_mod( 'h6_font_weight', '600' ) );
	$h6_line_height = esc_html( get_theme_mod( 'h6_line_height', '30' ) )."px";
	$h6_margin_bottom = esc_html( get_theme_mod( 'h6_margin_bottom', '30' ) )."px";
	$h6_text_transform = esc_html( get_theme_mod( 'h6_text_transform', 'none' ) );
	// ********************* headings fonts section end******************

	// ********************* widget fonts section start******************
	$footer_widget_font  = esc_html(get_theme_mod('footer_widget_font', 'Montserrat:400,500,600,700,800'));
	$footer_widget_font_size = esc_html( get_theme_mod( 'footer_widget_font_size', '26' ) )."px";
	$footer_widget_font_weight = esc_html( get_theme_mod( 'footer_widget_font_weight', '600' ) );
	$footer_widget_margin = esc_html( get_theme_mod( 'footer_widget_margin', '15' ) )."px";
	$footer_widget_text_transform = esc_html( get_theme_mod( 'footer_widget_text_transform', 'none' ) );
	$footer_widget_text_font_size  = esc_html( get_theme_mod( 'footer_widget_text_font_size', '17' ) )."px";
	$footer_widget_text_font_weight  = esc_html( get_theme_mod( 'footer_widget_text_font_weight', '400' ) );

	// ********************* widget fonts section end******************

	// **************** footer fonts section start***********
	$footer_font = esc_html( get_theme_mod( 'footer_font', 'Montserrat:400,500,600,700,800' ) );
	$footer_font_size = esc_html( get_theme_mod( 'footer_font_size', '27' ) )."px";
	$footer_font_weight = esc_html( get_theme_mod( 'footer_font_weight','400' ) );
	$footer_line_height = esc_html( get_theme_mod( 'footer_line_height', '27' ) )."px";
	$footer_text_transform = esc_html( get_theme_mod( 'footer_text_transform', 'none' ) );
	// *************** footer fonts section end*************
	// ------------------------- Typography panrl end --------------------------



	// ------------------------- colors panel start-----------------------------
	// ************body color section end************
	$body_background = esc_html( get_theme_mod( 'body_background', '' ) );
    $body_text = esc_html( get_theme_mod( 'body_text' ), "#373737" );
	$body_link = esc_html( get_theme_mod( 'body_link', '#373737' ) );
	$body_link_hover = esc_html( get_theme_mod( 'body_link_hover', '#f32838' ) );
	$body_link_visited = esc_html( get_theme_mod( 'body_link_visited', '#373737' ) );	
	// ************Body color section end************

	// ************header color section ************
	$header_background = esc_html( get_theme_mod( 'header_background', '#000000' ) );
	$header_link = esc_html( get_theme_mod( 'header_link', '#f32838' ) );
	$header_link_hover = esc_html( get_theme_mod( 'header_link_hover', '#999999' ) );
	$header_site_title = esc_html( get_theme_mod( 'header_site_title', '#000000' ) );
	$header_site_description = esc_html( get_theme_mod( 'header_site_description', '#ffffff' ) );
	// ************header color section end************

	// ************header color section ************
	$nav_text = esc_html( get_theme_mod( 'nav_text', '#ffffff' ) );
	$nav_text_hover = esc_html( get_theme_mod( 'nav_text_hover', '#9b9b9b' ) );
	$nav_text_background = esc_html( get_theme_mod( 'nav_text_background', '' ) );
	$nav_text_background_hover = esc_html( get_theme_mod( 'nav_text_background_hover', '' ) );
	$current_nav_text = esc_html( get_theme_mod( 'current_nav_text', '#f32838' ) );
	$current_nav_text_background = esc_html( get_theme_mod( 'current_nav_text_background', '' ) );	
	// ************header color section end************

	// ************button color section ************
	$button_text = esc_html( get_theme_mod( 'button_text', "#ffffff" ) );
	$button_text_hover = esc_html( get_theme_mod( 'button_text_hover', "#000000" ) );
	$button_background = esc_html( get_theme_mod( 'button_background', '#f32838' ) );
	$button_background_hover = esc_html( get_theme_mod( 'button_background_hover', "#ffffff" ) );
	// ************button color section ************

	// ************heading color section ************
	$h1_text = esc_html( get_theme_mod( 'h1_text', '#000000' ) );
	$h2_text = esc_html( get_theme_mod( 'h2_text', '#000000' ) );
	$h3_text = esc_html( get_theme_mod( 'h3_text', '#000000' ) );
	$h4_text = esc_html( get_theme_mod( 'h4_text', '#000000' ) );
	$h5_text = esc_html( get_theme_mod( 'h5_text', '#000000' ) );
	$h6_text = esc_html( get_theme_mod( 'h6_text', '#000000' ) );
	// ************heading color section end************

	// ************footer color section ************
	$footer_background = esc_html( get_theme_mod( 'footer_background', '#222222' ) );
	$footer_text = esc_html( get_theme_mod( 'footer_text', 'ffffff' ) );
	$footer_link = esc_html( get_theme_mod( 'footer_link', '#ffffff' ) );
	$footer_link_hover = esc_html( get_theme_mod( 'footer_link_hover', '#f32838' ) );
	$footer_widget_title = esc_html( get_theme_mod( 'footer_widget_title', '' ) );
	// ************footer color section end************
	
	// ************form color section ************
	$form_background = esc_html( get_theme_mod( 'form_background', '') );
	$form_label_text = esc_html( get_theme_mod( 'form_label_text', '') );
	$form_text = esc_html( get_theme_mod( 'form_text', '') );
	$form_placeholder_text = esc_html( get_theme_mod( 'form_placeholder_text', '') );
	$form_field_background = esc_html( get_theme_mod( 'form_field_background', '') );
	$form_field_border = esc_html( get_theme_mod( 'form_field_border', '') );
	$form_focus_text = esc_html( get_theme_mod( 'form_focus_text', '') );
	$form_placeholder_focus_text = esc_html( get_theme_mod( 'form_placeholder_focus_text', '') );
	$form_field_focus_background = esc_html( get_theme_mod( 'form_field_focus_background', '') );
	$form_field_focus_border = esc_html( get_theme_mod( 'form_field_focus_border', '' ) );	
	// ************form color section end************
	//----------------------form color image panel end-----------------------
	


	//-------------------- background image panel start----------------------
	// ************ body background image section start************
	$body_bg_image = esc_html( get_theme_mod( 'body_bg_image', '' ) );
	$body_bg_repeat = esc_html( get_theme_mod( 'body_bg_repeat', 'no-repeat' ) );
	$body_bg_size = esc_html( get_theme_mod( 'body_bg_size', 'auto', 'auto' ) );
	$body_bg_attachment = esc_html( get_theme_mod( 'body_bg_attachment', 'unset', 'unset' ) );
	$body_bg_position = esc_html( get_theme_mod( 'body_bg_position', '', '' ) );	
	// ************ body background image section end************

	// ************ header background image section start************
	$header_bg_image = esc_html( get_theme_mod( 'header_bg_image', ''  ) );
	$header_bg_repeat = esc_html( get_theme_mod( 'header_bg_repeat', 'no-repeat' ) );
	$header_bg_size = esc_html( get_theme_mod( 'header_bg_size', 'auto' ) );
	$header_bg_attachment = esc_html( get_theme_mod( 'header_bg_attachment', 'unset' ) );
	$header_bg_position = esc_html( get_theme_mod( 'header_bg_position', '' ) );	
	// ************ header background image section end************

	// ************ footer widget background image section start************
	$footer_widget_bg_image = esc_html( get_theme_mod( 'footer_widget_bg_image', ''  ) );
	$footer_widget_bg_repeat = esc_html( get_theme_mod( 'footer_widget_bg_repeat', 'no-repeat' ) );
	$footer_widget_bg_size = esc_html( get_theme_mod( 'footer_widget_bg_size', 'auto' ) );
	$footer_widget_bg_attachment = esc_html( get_theme_mod( 'footer_widget_bg_attachment', 'unset' ) );
	$footer_widget_bg_position = esc_html( get_theme_mod( 'footer_widget_bg_position', '' ) );	
	// ************ footer widget background image section end************

	// ************ footer background image section start************
	$footer_bg_image = esc_html( get_theme_mod( 'footer_bg_image', ''  ) );
	$footer_bg_repeat = esc_html( get_theme_mod( 'footer_bg_repeat', 'no-repeat' ) );
	$footer_bg_size = esc_html( get_theme_mod( 'footer_bg_size', 'auto' ) );
	$footer_bg_attachment = esc_html( get_theme_mod( 'footer_bg_attachment', 'unset' ) );
	$footer_bg_position = esc_html( get_theme_mod( 'footer_bg_position', '' ) );	
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
	//------------------------ fonts panel end---------------------


	//-----------------------  color panel -------------------------
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
