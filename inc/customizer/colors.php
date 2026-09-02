<?php
/*--------------------------------------------------------------
# Global Colors.
--------------------------------------------------------------*/
$wp_customize->add_section(
	'ronza_colors',
	array(
		'title' => esc_html__( 'Ronza Colors', 'ronza' ),
		'description' => esc_html__( 'Customize the global colors used throughout the theme.', 'ronza' ),
		'priority' => 5,
	)
);

$wp_customize->add_setting( 'ronza_primary_color', array(
	'default' => '#111111',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ronza_primary_color', array(
	'label' => esc_html__( 'Primary Color', 'ronza' ),
	'description' => esc_html__( 'Main brand color used for headers, dark sections and important elements.', 'ronza' ),
	'section' => 'ronza_colors',
) ) );

$wp_customize->add_setting( 'ronza_accent_color', array(
	'default' => '#c9a227',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ronza_accent_color', array(
	'label' => esc_html__( 'Accent Color', 'ronza' ),
	'description' => esc_html__( 'Highlight color used for links, buttons and accents.', 'ronza' ),
	'section' => 'ronza_colors',
) ) );

$wp_customize->add_setting( 'ronza_secondary_color', array(
	'default' => '#f5f5f2',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ronza_secondary_color', array(
	'label' => esc_html__( 'Secondary Color', 'ronza' ),
	'description' => esc_html__( 'Supporting background color used for light sections.', 'ronza' ),
	'section' => 'ronza_colors',
) ) );

$wp_customize->add_setting( 'ronza_text_color', array(
	'default' => '#333333',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ronza_text_color', array(
	'label' => esc_html__( 'Text Color', 'ronza' ),
	'description' => esc_html__( 'Default color used for body text.', 'ronza' ),
	'section' => 'ronza_colors',
) ) );

$wp_customize->add_setting( 'ronza_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ronza_background_color', array(
	'label' => esc_html__( 'Background Color', 'ronza' ),
	'description' => esc_html__( 'Main background color used throughout the website.', 'ronza' ),
	'section' => 'ronza_colors',
) ) );