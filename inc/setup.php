<?php

/**
 * Theme setup.
 *
 * @package Ronza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up theme defaults and registers support for various
 * WordPress features.
 */
function ronza_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain('ronza',get_template_directory() . '/languages');

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable featured images.
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Enable custom logo.
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Enable HTML5 markup for common WordPress components.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/*
	 * Enable responsive embedded content.
	 */
	add_theme_support( 'responsive-embeds' );

	/*
	 * Enable WordPress block styles.
	 */
	add_theme_support( 'wp-block-styles' );

	/*
	 * Register navigation menus.
	 */
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'ronza' ),
			'footer'  => esc_html__( 'Footer Menu', 'ronza' ),
			'legal'   => esc_html__( 'Legal Menu', 'ronza' ),
		)
	);
}

add_action( 'after_setup_theme', 'ronza_setup' );

/**
 * Register widget areas.
 */
function ronza_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget Area', 'ronza' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets to the footer area.', 'ronza' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'ronza_widgets_init' );