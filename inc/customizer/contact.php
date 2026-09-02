<?php
/*--------------------------------------------------------------
# Contact Page.
--------------------------------------------------------------*/

$wp_customize->add_section(
	'ronza_contact',
	array(
		'title' => esc_html__( 'Ronza Contact Page', 'ronza' ),
		'description' => esc_html__( 'Customize the Contact page sections.', 'ronza' ),
		'priority' => 70,
	)
);

$wp_customize->add_setting(
	'ronza_contact_hero_eyebrow',
	array(
		'default' => 'Get In Touch',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_hero_eyebrow',
	array(
		'label' => esc_html__( 'Hero Eyebrow', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'text',
	)
);

$wp_customize->add_setting( 'ronza_contact_show_info', array( 'default' => true, 'sanitize_callback' => 'wp_validate_boolean' ) );

$wp_customize->add_control( 'ronza_contact_show_info', array('label' => esc_html__( 'Show Contact Information', 'ronza' ),'section' => 'ronza_contact','type' => 'checkbox',) );


$wp_customize->add_setting(
	'ronza_contact_info_eyebrow',
	array(
		'default' => 'Contact Us',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_info_eyebrow',
	array(
		'label' => esc_html__( 'Contact Info Eyebrow', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_contact_info_title',
	array(
		'default' => 'Let’s start a conversation.',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_info_title',
	array(
		'label' => esc_html__( 'Contact Info Title', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_contact_info_description',
	array(
		'default' => 'Have a project in mind or simply want to learn more? We would love to hear from you.',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_info_description',
	array(
		'label' => esc_html__( 'Contact Info Description', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'textarea',
	)
);

$wp_customize->add_setting(
	'ronza_contact_email',
	array(
		'default' => 'example@email.com',
		'sanitize_callback' => 'sanitize_email',
	)
);

$wp_customize->add_control(
	'ronza_contact_email',
	array(
		'label' => esc_html__( 'Email', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'email',
	)
);

$wp_customize->add_setting(
	'ronza_contact_phone',
	array(
		'default' => '+1234567890',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_phone',
	array(
		'label' => esc_html__( 'Phone', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_contact_address',
	array(
		'default' => '123 Main Street, NY',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_address',
	array(
		'label' => esc_html__( 'Address', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_contact_hours',
	array(
		'default' => 'Monday–Thursday 9am–5pm',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_hours',
	array(
		'label' => esc_html__( 'Working Hours', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'text',
	)
);

$wp_customize->add_setting( 'ronza_contact_show_form', array( 'default' => true, 'sanitize_callback' => 'wp_validate_boolean' ) );

$wp_customize->add_control( 'ronza_contact_show_form', array('label' => esc_html__( 'Show Contact Form', 'ronza' ),'section' => 'ronza_contact','type' => 'checkbox',) );

$wp_customize->add_setting(
	'ronza_contact_form_title',
	array(
		'default' => 'Tell us about your project.',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_form_title',
	array(
		'label' => esc_html__( 'Form Title', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_contact_form_shortcode',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_form_shortcode',
	array(
		'label' => esc_html__( 'Contact Form Shortcode', 'ronza' ),
		'description' => esc_html__( 'Paste the shortcode provided by your contact form plugin.', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'textarea',
	)
);

$wp_customize->add_setting( 'ronza_contact_show_cta', array( 'default' => true, 'sanitize_callback' => 'wp_validate_boolean' ) );

$wp_customize->add_control( 'ronza_contact_show_cta', array('label' => esc_html__( 'Show CTA', 'ronza' ),'section' => 'ronza_contact','type' => 'checkbox',) );

$wp_customize->add_setting(
	'ronza_contact_cta_eyebrow',
	array(
		'default' => 'Let’s work together',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_cta_eyebrow',
	array(
		'label' => esc_html__( 'CTA Eyebrow', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'text',
	)
);

$wp_customize->add_setting(
	'ronza_contact_cta_title',
	array(
		'default' => 'Have a project in mind?',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ronza_contact_cta_title',
	array(
		'label' => esc_html__( 'CTA Title', 'ronza' ),
		'section' => 'ronza_contact',
		'type' => 'text',
	)
);