<?php
/*--------------------------------------------------------------
# Global Header.
--------------------------------------------------------------*/
$wp_customize->add_section(
	'ronza_header',
	array(
		'title' => esc_html__( 'Ronza Header', 'ronza' ),
		'description' => esc_html__( 'Customize the global header behavior and actions.', 'ronza' ),
		'priority' => 20,
	)
);

$wp_customize->add_setting( 'ronza_header_sticky', array(
	'default' => true,
	'sanitize_callback' => 'wp_validate_boolean',
) );

$wp_customize->add_control( 'ronza_header_sticky', array(
	'label' => esc_html__( 'Sticky Header', 'ronza' ),
	'description' => esc_html__( 'Keep the header visible while scrolling.', 'ronza' ),
	'section' => 'ronza_header',
	'type' => 'checkbox',
) );

$wp_customize->add_setting( 'ronza_header_transparent', array(
	'default' => false,
	'sanitize_callback' => 'wp_validate_boolean',
) );

$wp_customize->add_control( 'ronza_header_transparent', array(
	'label' => esc_html__( 'Transparent Header', 'ronza' ),
	'description' => esc_html__( 'Allow the header to overlay the page hero.', 'ronza' ),
	'section' => 'ronza_header',
	'type' => 'checkbox',
) );

$wp_customize->add_setting( 'ronza_header_search', array(
	'default' => true,
	'sanitize_callback' => 'wp_validate_boolean',
) );

$wp_customize->add_control( 'ronza_header_search', array(
	'label' => esc_html__( 'Show Search', 'ronza' ),
	'section' => 'ronza_header',
	'type' => 'checkbox',
) );

$wp_customize->add_setting( 'ronza_header_cta', array(
	'default' => true,
	'sanitize_callback' => 'wp_validate_boolean',
) );

$wp_customize->add_control( 'ronza_header_cta', array(
	'label' => esc_html__( 'Show CTA Button', 'ronza' ),
	'section' => 'ronza_header',
	'type' => 'checkbox',
) );

$wp_customize->add_setting( 'ronza_header_cta_text', array(
	'default' => 'Get Started',
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'ronza_header_cta_text', array(
	'label' => esc_html__( 'CTA Button Text', 'ronza' ),
	'section' => 'ronza_header',
	'type' => 'text',
) );

$wp_customize->add_setting( 'ronza_header_cta_url', array(
	'default' => '/contact/',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( 'ronza_header_cta_url', array(
	'label' => esc_html__( 'CTA Button URL', 'ronza' ),
	'section' => 'ronza_header',
	'type' => 'url',
) );