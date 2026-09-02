<?php

/**
 * Enqueue theme assets.
 *
 * @package Ronza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue theme styles and scripts.
 */
function ronza_enqueue_assets() {

	$theme_version = wp_get_theme()->get( 'Version' );
	$theme_uri     = get_template_directory_uri();

	$google_font_map = array(
		'Open Sans, sans-serif'        => 'Open Sans:wght@400;500;600;700',
		'Roboto, sans-serif'           => 'Roboto:wght@400;500;700',
		'Lato, sans-serif'             => 'Lato:wght@400;700',
		'Montserrat, sans-serif'       => 'Montserrat:wght@400;500;600;700',
		'Poppins, sans-serif'          => 'Poppins:wght@400;500;600;700',
		'Playfair Display, serif'      => 'Playfair Display:wght@400;500;600;700',
		'Merriweather, serif'          => 'Merriweather:wght@400;700',
	);

	$selected_fonts = array_unique(
		array(
			get_theme_mod( 'ronza_body_font', 'Arial, sans-serif' ),
			get_theme_mod( 'ronza_heading_font', 'Arial, sans-serif' ),
		)
	);

	$google_font_families = array();

	foreach ( $selected_fonts as $selected_font ) {
		if ( isset( $google_font_map[ $selected_font ] ) ) {
			$google_font_families[] = 'family=' . rawurlencode( $google_font_map[ $selected_font ] );
		}
	}

	if ( ! empty( $google_font_families ) ) {
		$google_fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $google_font_families ) . '&display=swap';
		wp_enqueue_style('ronza-google-fonts',$google_fonts_url,array(),null);
	}

	/* Global styles */
	wp_enqueue_style('ronza-style',get_stylesheet_uri(),array(),$theme_version);
	wp_enqueue_style('ronza-fontawesome', $theme_uri . '/assets/vendor/fontawesome/css/all.min.css', array(), '6.7.2');
	//wp_enqueue_style('ronza-main',$theme_uri . '/assets/css/main.css',array( 'ronza-style', 'ronza-fontawesome' ),$theme_version);
	//wp_enqueue_style('ronza-main',$theme_uri . '/assets/css/main.css',array( 'ronza-style', 'ronza-fontawesome', 'ronza-google-fonts' ),$theme_version);
	$ronza_main_dependencies = array( 'ronza-style', 'ronza-fontawesome' );
	if ( ! empty( $google_font_families ) ) {
		$ronza_main_dependencies[] = 'ronza-google-fonts';
	}
	wp_enqueue_style('ronza-main',$theme_uri . '/assets/css/main.css',$ronza_main_dependencies,$theme_version);

	/* Homepage */
	if ( is_front_page() ) {
		wp_enqueue_style('ronza-homepage',$theme_uri . '/assets/css/homepage.css',array( 'ronza-main' ),$theme_version);
		wp_enqueue_script('ronza-homepage',$theme_uri . '/assets/js/home.js',array(),$theme_version,array('in_footer' => true,'strategy'   => 'defer',));
	}

	/* About */
	if ( is_page( 'about' ) ) {
		wp_enqueue_style('ronza-about',$theme_uri . '/assets/css/about.css',array( 'ronza-main' ),$theme_version);
		wp_enqueue_script('ronza-about',$theme_uri . '/assets/js/about.js',array(),$theme_version,array('in_footer' => true,'strategy'   => 'defer',));
	}

	/* Contact */
	if ( is_page( 'contact' ) ) {
		wp_enqueue_style('ronza-contact',$theme_uri . '/assets/css/contact.css',array( 'ronza-main' ),$theme_version);
	}

	/* Search results */
	if ( is_search() ) {
		wp_enqueue_style('ronza-search',$theme_uri . '/assets/css/search.css',array( 'ronza-main' ),$theme_version);
	}

	/* 404 */
	if ( is_404() ) {
		wp_enqueue_style('ronza-404',$theme_uri . '/assets/css/404.css',array( 'ronza-main' ),$theme_version);
	}

	/* Projects archive */
	if ( is_post_type_archive( 'ronza_project' ) ) {
		wp_enqueue_style('ronza-projects',$theme_uri . '/assets/css/projects.css',array( 'ronza-main' ),$theme_version);
	}

	/* Single project */
	if ( is_singular( 'ronza_project' ) ) {
		wp_enqueue_style('ronza-projects',$theme_uri . '/assets/css/projects.css',array( 'ronza-main' ),$theme_version);
	}

	/* Blog archive */
	if ( is_home() ) {
		wp_enqueue_style('ronza-blog',$theme_uri . '/assets/css/blog.css',array( 'ronza-main' ),$theme_version);
	}

	/* Single blog post */
	if ( is_singular( 'post' ) ) {
		wp_enqueue_style('ronza-blog',$theme_uri . '/assets/css/blog.css',array( 'ronza-main' ),$theme_version);
	}

	/* JavaScript */
	wp_enqueue_script('ronza-main',$theme_uri . '/assets/js/main.js',array(),$theme_version,array('in_footer' => true,'strategy'   => 'defer',));

	wp_enqueue_script('ronza-navigation',$theme_uri . '/assets/js/navigation.js',array(),$theme_version,array('in_footer' => true,'strategy'   => 'defer',));

	if ( is_page( 'about' ) ) {
		
	}
}

add_action( 'wp_enqueue_scripts', 'ronza_enqueue_assets' );

function ronza_enqueue_customizer_font_previews() {
	wp_enqueue_style(
		'ronza-customizer-font-previews',
		'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Merriweather:wght@400;700&family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap',
		array(),
		null
	);

	wp_add_inline_style(
		'customize-controls',
		'
		.ronza-font-picker {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			gap: 8px;
			margin-top: 10px;
		}

		.ronza-font-picker__option {
			position: relative;
			cursor: pointer;
		}

		.ronza-font-picker__option input {
			position: absolute;
			opacity: 0;
		}

		.ronza-font-picker__option span {
			display: block;
			padding: 10px;
			border: 1px solid #dcdcde;
			background: #fff;
			font-size: 15px;
			line-height: 1.3;
			transition: border-color 0.2s ease, box-shadow 0.2s ease;
		}

		.ronza-font-picker__option input:checked + span {
			border-color: #2271b1;
			box-shadow: 0 0 0 1px #2271b1;
		}

		.ronza-font-picker__option input:focus + span {
			outline: 2px solid #2271b1;
			outline-offset: 2px;
		}
		'
	);
}
add_action( 'customize_controls_enqueue_scripts', 'ronza_enqueue_customizer_font_previews' );
