<?php
/*--------------------------------------------------------------
# Buttons.
--------------------------------------------------------------*/

$wp_customize->add_section(
	'ronza_buttons',
	array(
		'title'       => esc_html__( 'Ronza Buttons', 'ronza' ),
		'description' => esc_html__( 'Customize the colors used by primary, secondary, and light buttons.', 'ronza' ),
		'priority'    => 10,
	)
);

$ronza_button_colors = array(
	'ronza_button_primary_background' => array(
		'label'       => esc_html__( 'Primary Background', 'ronza' ),
		'description' => esc_html__( 'Default: Accent Color.', 'ronza' ),
		'default'     => '#c9a227',
	),
	'ronza_button_primary_text' => array(
		'label'       => esc_html__( 'Primary Text', 'ronza' ),
		'description' => esc_html__( 'Default: Primary Color.', 'ronza' ),
		'default'     => '#111111',
	),
	'ronza_button_primary_hover_background' => array(
		'label'       => esc_html__( 'Primary Hover Background', 'ronza' ),
		'description' => esc_html__( 'Default: Transparent.', 'ronza' ),
		'default'     => '',
	),
	'ronza_button_primary_hover_text' => array(
		'label'       => esc_html__( 'Primary Hover Text', 'ronza' ),
		'description' => esc_html__( 'Default: Background Color.', 'ronza' ),
		'default'     => '#c9a227',
	),
	'ronza_button_primary_hover_border' => array(
		'label'       => esc_html__( 'Primary Hover Border', 'ronza' ),
		'description' => esc_html__( 'Default: Accent Color.', 'ronza' ),
		'default'     => '#c9a227',
	),
	'ronza_button_secondary_text' => array(
		'label'       => esc_html__( 'Secondary Text', 'ronza' ),
		'description' => esc_html__( 'Default: White.', 'ronza' ),
		'default'     => '#ffffff',
	),
	'ronza_button_secondary_border' => array(
		'label'       => esc_html__( 'Secondary Border', 'ronza' ),
		'description' => esc_html__( 'Default: White.', 'ronza' ),
		'default'     => '#ffffff',
	),
	'ronza_button_secondary_hover_background' => array(
		'label'       => esc_html__( 'Secondary Hover Background', 'ronza' ),
		'description' => esc_html__( 'Default: Background Color.', 'ronza' ),
		'default'     => '#ffffff',
	),
	'ronza_button_secondary_hover_text' => array(
		'label'       => esc_html__( 'Secondary Hover Text', 'ronza' ),
		'description' => esc_html__( 'Default: Primary Color.', 'ronza' ),
		'default'     => '#111111',
	),
	'ronza_button_secondary_hover_border' => array(
		'label'       => esc_html__( 'Secondary Hover Border', 'ronza' ),
		'description' => esc_html__( 'Default: Background Color.', 'ronza' ),
		'default'     => '#ffffff',
	),
	'ronza_button_light_background' => array(
		'label'       => esc_html__( 'Light Background', 'ronza' ),
		'description' => esc_html__( 'Default: Background Color.', 'ronza' ),
		'default'     => '#ffffff',
	),
	'ronza_button_light_text' => array(
		'label'       => esc_html__( 'Light Text', 'ronza' ),
		'description' => esc_html__( 'Default: Primary Color.', 'ronza' ),
		'default'     => '#111111',
	),
	'ronza_button_light_hover_background' => array(
		'label'       => esc_html__( 'Light Hover Background', 'ronza' ),
		'description' => esc_html__( 'Default: Transparent.', 'ronza' ),
		'default'     => '',
	),
	'ronza_button_light_hover_text' => array(
		'label'       => esc_html__( 'Light Hover Text', 'ronza' ),
		'description' => esc_html__( 'Default: Background Color.', 'ronza' ),
		'default'     => '#ffffff',
	),
	'ronza_button_light_hover_border' => array(
		'label'       => esc_html__( 'Light Hover Border', 'ronza' ),
		'description' => esc_html__( 'Default: Background Color.', 'ronza' ),
		'default'     => '#ffffff',
	),
);

foreach ( $ronza_button_colors as $setting_id => $button_color ) {
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => $button_color['default'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$setting_id,
			array(
				'label'       => $button_color['label'],
				'description' => $button_color['description'],
				'section'     => 'ronza_buttons',
			)
		)
	);
}
