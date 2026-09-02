<?php
/*--------------------------------------------------------------
# About Page
--------------------------------------------------------------*/


$wp_customize->add_section(
	'ronza_about',
	array(
		'title' => esc_html__( 'Ronza About Page', 'ronza' ),
		'description' => esc_html__( 'Customize the About page sections.', 'ronza' ),
		'priority' => 65,
	)
);

$wp_customize->add_setting(
	'ronza_about_hero_eyebrow',
	array(
		'default' => 'About Ronza',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_hero_eyebrow',
	array(
		'label' => esc_html__( 'Hero Eyebrow', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_hero_description',
	array(
		'default' => 'We are a team of designers, developers and problem solvers passionate about creating digital experiences that make an impact.',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);

$wp_customize->add_control(
	'ronza_about_hero_description',
	array(
		'label' => esc_html__( 'Hero Description', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'textarea',
	)
);

$wp_customize->add_setting( 
	'ronza_about_show_story', 
	array( 
		'default' => true, 
		'sanitize_callback' => 'wp_validate_boolean' 
	) 
);

$wp_customize->add_control( 
	'ronza_about_show_story', 
	array(
		'label' => esc_html__( 'Show Story Section', 'ronza' ),
		'section' => 'ronza_about', 
		'type' => 'checkbox',
	) 
);

$wp_customize->add_setting(
	'ronza_about_story_eyebrow',
	array(
		'default' => 'Our Story',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_story_eyebrow',
	array(
		'label' => esc_html__( 'Story Eyebrow', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_story_title',
	array(
		'default' => 'Building better digital experiences.',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_story_title',
	array(
		'label' => esc_html__( 'Story Title', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);




$wp_customize->add_setting( 'ronza_about_show_values', array( 'default' => true, 'sanitize_callback' => 'wp_validate_boolean' ) );

$wp_customize->add_control( 'ronza_about_show_values', array('label' => esc_html__( 'Show Mission & Vision', 'ronza' ),'section' => 'ronza_about','type' => 'checkbox',) );

$wp_customize->add_setting(
	'ronza_about_values_eyebrow',
	array(
		'default' => 'What Drives Us',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_values_eyebrow',
	array(
		'label' => esc_html__( 'Mission & Vision Eyebrow', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_values_title',
	array(
		'default' => 'Our mission and vision.',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_values_title',
	array(
		'label' => esc_html__( 'Mission & Vision Title', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_mission_title',
	array(
		'default' => 'Our Mission',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_mission_title',
	array(
		'label' => esc_html__( 'Mission Title', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_mission_text',
	array(
		'default' => 'To help businesses create powerful digital experiences through thoughtful design and reliable technology.',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);

$wp_customize->add_control(
	'ronza_about_mission_text',
	array(
		'label' => esc_html__( 'Mission Text', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'textarea',
	)
);

$wp_customize->add_setting(
	'ronza_about_vision_title',
	array(
		'default' => 'Our Vision',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_vision_title',
	array(
		'label' => esc_html__( 'Vision Title', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_vision_text',
	array(
		'default' => 'To make professional, high-performing websites accessible to businesses of every size.',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);

$wp_customize->add_control(
	'ronza_about_vision_text',
	array(
		'label' => esc_html__( 'Vision Text', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'textarea',
	)
);


$wp_customize->add_setting( 'ronza_about_show_stats', array( 'default' => true, 'sanitize_callback' => 'wp_validate_boolean' ) );

$wp_customize->add_control( 'ronza_about_show_stats', array('label' => esc_html__( 'Show Statistics', 'ronza' ),'section' => 'ronza_about','type' => 'checkbox',) );

$wp_customize->add_setting(
	'ronza_about_stat_1_icon',
	array(
		'default' => 'fa-solid fa-award',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_stat_1_icon',
	array(
		'label' => esc_html__( 'Statistic 1 Icon', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_stat_1_number',
	array(
		'default' => '10+',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_stat_1_number',
	array(
		'label' => esc_html__( 'Statistic 1 Number', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_stat_1_label',
	array(
		'default' => 'Years Experience',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_stat_1_label',
	array(
		'label' => esc_html__( 'Statistic 1 Label', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_stat_2_icon',
	array(
		'default' => 'fa-solid fa-briefcase',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_stat_2_icon',
	array(
		'label' => esc_html__( 'Statistic 2 Icon', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_stat_2_number',
	array(
		'default' => '100+',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_stat_2_number',
	array(
		'label' => esc_html__( 'Statistic 2 Number', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_stat_2_label',
	array(
		'default' => 'Projects Completed',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_stat_2_label',
	array(
		'label' => esc_html__( 'Statistic 2 Label', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_stat_3_icon',
	array(
		'default' => 'fa-solid fa-earth-europe',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_stat_3_icon',
	array(
		'label' => esc_html__( 'Statistic 3 Icon', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_stat_3_number',
	array(
		'default' => '20+',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_stat_3_number',
	array(
		'label' => esc_html__( 'Statistic 3 Number', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_stat_3_label',
	array(
		'default' => 'Countries Reached',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_stat_3_label',
	array(
		'label' => esc_html__( 'Statistic 3 Label', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting( 'ronza_about_show_team', array( 'default' => true, 'sanitize_callback' => 'wp_validate_boolean' ) );

$wp_customize->add_control( 'ronza_about_show_team', array('label' => esc_html__( 'Show Team', 'ronza' ),'section' => 'ronza_about','type' => 'checkbox',) );

$wp_customize->add_setting(
	'ronza_about_team_eyebrow',
	array(
		'default' => 'Our Team',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_team_eyebrow',
	array(
		'label' => esc_html__( 'Team Eyebrow', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_team_title',
	array(
		'default' => 'People behind the work.',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_team_title',
	array(
		'label' => esc_html__( 'Team Title', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting( 'ronza_about_show_cta', array( 'default' => true, 'sanitize_callback' => 'wp_validate_boolean' ) );

$wp_customize->add_control( 'ronza_about_show_cta', array('label' => esc_html__( 'Show CTA', 'ronza' ),'section' => 'ronza_about','type' => 'checkbox',) );

$wp_customize->add_setting(
	'ronza_about_cta_eyebrow',
	array(
		'default' => 'Ready to get started?',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_cta_eyebrow',
	array(
		'label' => esc_html__( 'CTA Eyebrow', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_cta_title',
	array(
		'default' => 'Create something remarkable.',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_cta_title',
	array(
		'label' => esc_html__( 'CTA Title', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_cta_button_text',
	array(
		'default' => 'Contact Us',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_about_cta_button_text',
	array(
		'label' => esc_html__( 'CTA Button Text', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_about_cta_button_url',
	array(
		'default' => '/contact/',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'ronza_about_cta_button_url',
	array(
		'label' => esc_html__( 'CTA Button URL', 'ronza' ),
		'section' => 'ronza_about',
		'type' => 'url',
	)
);