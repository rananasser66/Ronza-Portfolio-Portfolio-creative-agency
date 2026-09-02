<?php
/*--------------------------------------------------------------
# Home Stat
--------------------------------------------------------------*/
$wp_customize->add_section('ronza_home_stats',array(
	'title'=>esc_html__('Ronza Home Statistic','ronza'),
	'description'=>esc_html__('Customize the homepage statistic section.','ronza'),
	'priority'=>35,
));

$wp_customize->add_setting( 'ronza_home_show_stats', array( 'default' => true, 'sanitize_callback' => 'wp_validate_boolean' ) );

$wp_customize->add_control( 'ronza_home_show_stats', array('label' => esc_html__( 'Show Statistics', 'ronza' ),'section' => 'ronza_home_stats','type' => 'checkbox',) );

$wp_customize->add_setting(
	'ronza_home_stat_1_icon',
	array(
		'default' => 'fa-solid fa-users',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_home_stat_1_icon',
	array(
		'label' => esc_html__( 'Statistic 1 Icon', 'ronza' ),
		'section' => 'ronza_home_stats',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_home_stat_1_number',
	array(
		'default' => '200+',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_home_stat_1_number',
	array(
		'label' => esc_html__( 'Statistic 1 Number', 'ronza' ),
		'section' => 'ronza_home_stats',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_home_stat_1_label',
	array(
		'default' => 'Specialised Consultants',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_home_stat_1_label',
	array(
		'label' => esc_html__( 'Statistic 1 Label', 'ronza' ),
		'section' => 'ronza_home_stats',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_home_stat_2_icon',
	array(
		'default' => 'fa-solid fa-thumbs-up',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_home_stat_2_icon',
	array(
		'label' => esc_html__( 'Statistic 2 Icon', 'ronza' ),
		'section' => 'ronza_home_stats',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_home_stat_2_number',
	array(
		'default' => '100%',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_home_stat_2_number',
	array(
		'label' => esc_html__( 'Statistic 2 Number', 'ronza' ),
		'section' => 'ronza_home_stats',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_home_stat_2_label',
	array(
		'default' => 'Customer Satisfaction',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_home_stat_2_label',
	array(
		'label' => esc_html__( 'Statistic 2 Label', 'ronza' ),
		'section' => 'ronza_home_stats',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_home_stat_3_icon',
	array(
		'default' => '<fa-solid fa-briefcase',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_home_stat_3_icon',
	array(
		'label' => esc_html__( 'Statistic 3 Icon', 'ronza' ),
		'section' => 'ronza_home_stats',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_home_stat_3_number',
	array(
		'default' => '1K+',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_home_stat_3_number',
	array(
		'label' => esc_html__( 'Statistic 3 Number', 'ronza' ),
		'section' => 'ronza_home_stats',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_home_stat_3_label',
	array(
		'default' => 'Projects Completed',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_home_stat_3_label',
	array(
		'label' => esc_html__( 'Statistic 3 Label', 'ronza' ),
		'section' => 'ronza_home_stats',
		'type' => 'text',
	)
);