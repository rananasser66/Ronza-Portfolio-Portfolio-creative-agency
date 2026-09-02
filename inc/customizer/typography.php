<?php
/*--------------------------------------------------------------
# Global Typography.
--------------------------------------------------------------*/
$ronza_font_choices = array(
	'Arial, sans-serif' => 'Arial',
	'Georgia, serif' => 'Georgia',
	'Verdana, sans-serif' => 'Verdana',
	'Trebuchet MS, sans-serif' => 'Trebuchet MS',
	'Open Sans, sans-serif' => 'Open Sans',
	'Roboto, sans-serif' => 'Roboto',
	'Lato, sans-serif' => 'Lato',
	'Montserrat, sans-serif' => 'Montserrat',
	'Poppins, sans-serif' => 'Poppins',
	'Playfair Display, serif' => 'Playfair Display',
	'Merriweather, serif' => 'Merriweather',
);

function ronza_sanitize_font_choice( $value ) {
	$allowed_fonts = array(
		'Arial, sans-serif',
		'Georgia, serif',
		'Verdana, sans-serif',
		'Trebuchet MS, sans-serif',
		'Open Sans, sans-serif',
		'Roboto, sans-serif',
		'Lato, sans-serif',
		'Montserrat, sans-serif',
		'Poppins, sans-serif',
		'Playfair Display, serif',
		'Merriweather, serif',
	);

	return in_array( $value, $allowed_fonts, true ) ? $value : 'Arial, sans-serif';
}

$wp_customize->add_section(
	'ronza_typography',
	array(
		'title' => esc_html__( 'Ronza Typography', 'ronza' ),
		'description' => esc_html__( 'Customize the typography used throughout the theme.', 'ronza' ),
		'priority' => 15,
	)
);

$wp_customize->add_setting( 'ronza_body_font', array(
	'default' => 'Arial, sans-serif',
	'sanitize_callback' => 'ronza_sanitize_font_choice',
) );

/*$wp_customize->add_control( 'ronza_body_font', array(
	'label' => esc_html__( 'Body Font', 'ronza' ),
	'section' => 'ronza_typography',
	'type' => 'select',
	'choices' => $ronza_font_choices,
) );*/

$wp_customize->add_control(
	new Ronza_Font_Picker_Control(
		$wp_customize,
		'ronza_body_font',
		array(
			'label'       => esc_html__( 'Body Font', 'ronza' ),
			'description' => esc_html__( 'Choose a font for normal text.', 'ronza' ),
			'section'     => 'ronza_typography',
			'choices'     => $ronza_font_choices,
		)
	)
);

$wp_customize->add_setting( 'ronza_heading_font', array(
	'default' => 'Arial, sans-serif',
	'sanitize_callback' => 'ronza_sanitize_font_choice',
) );

/*$wp_customize->add_control( 'ronza_heading_font', array(
	'label' => esc_html__( 'Heading Font', 'ronza' ),
	'section' => 'ronza_typography',
	'type' => 'select',
	'choices' => $ronza_font_choices,
) );*/

$wp_customize->add_control(
	new Ronza_Font_Picker_Control(
		$wp_customize,
		'ronza_heading_font',
		array(
			'label'       => esc_html__( 'Heading Font', 'ronza' ),
			'description' => esc_html__( 'Choose a font for headings.', 'ronza' ),
			'section'     => 'ronza_typography',
			'choices'     => $ronza_font_choices,
		)
	)
);

$wp_customize->add_setting( 'ronza_body_font_size', array(
	'default' => '16px',
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'ronza_body_font_size', array(
	'label' => esc_html__( 'Body Font Size', 'ronza' ),
	'description' => esc_html__( 'Example: 16px', 'ronza' ),
	'section' => 'ronza_typography',
	'type' => 'text',
) );

$wp_customize->add_setting( 'ronza_heading_weight', array(
	'default' => '700',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'ronza_heading_weight', array(
	'label' => esc_html__( 'Heading Font Weight', 'ronza' ),
	'section' => 'ronza_typography',
	'type' => 'select',
	'choices' => array(
		'400' => '400 - Regular',
		'500' => '500 - Medium',
		'600' => '600 - Semi Bold',
		'700' => '700 - Bold',
		'800' => '800 - Extra Bold',
	),
) );