<?php 
/*--------------------------------------------------------------
# Global Branding.
--------------------------------------------------------------*/
$wp_customize->add_section(
	'ronza_branding',
	array(
		'title' => esc_html__( 'Ronza Branding', 'ronza' ),
		'description' => esc_html__( 'Customize the global branding used throughout the theme.', 'ronza' ),
		'priority' => 1,
	)
);

$wp_customize->add_setting( 'ronza_logo', array(
	'default' => 0,
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'ronza_logo', array(
	'label' => esc_html__( 'Logo', 'ronza' ),
	'description' => esc_html__( 'Upload the main logo used in the header.', 'ronza' ),
	'section' => 'ronza_branding',
	'mime_type' => 'image',
) ) );

$wp_customize->add_setting( 'ronza_secoundary_logo', array(
	'default' => 0,
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'ronza_secoundary_logo', array(
	'label' => esc_html__( 'Secoundary Logo', 'ronza' ),
	'description' => esc_html__( 'Optional logo for different backgrounds.', 'ronza' ),
	'section' => 'ronza_branding',
	'mime_type' => 'image',
) ) );