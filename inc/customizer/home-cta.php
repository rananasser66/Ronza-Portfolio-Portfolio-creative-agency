<?php
/*--------------------------------------------------------------
# Home CTA.
--------------------------------------------------------------*/
$wp_customize->add_section('ronza_home_cta',array(
	'title'=>esc_html__('Ronza Home CTA','ronza'),
	'description'=>esc_html__('Customize the homepage CTA section.','ronza'),
	'priority'=>60,
));

$wp_customize->add_setting('ronza_home_cta_show',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_home_cta_show',array(
	'label'=>esc_html__('Show CTA Section','ronza'),
	'section'=>'ronza_home_cta',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_home_cta_eyebrow',array(
	'default'=>'Ready to get started?',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_home_cta_eyebrow',array(
	'label'=>esc_html__('CTA Eyebrow','ronza'),
	'section'=>'ronza_home_cta',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_home_cta_title',array(
	'default'=>'Create something remarkable.',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_home_cta_title',array(
	'label'=>esc_html__('CTA Title','ronza'),
	'section'=>'ronza_home_cta',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_home_cta_button_text',array(
	'default'=>'Contact Us',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_home_cta_button_text',array(
	'label'=>esc_html__('Button Text','ronza'),
	'section'=>'ronza_home_cta',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_home_cta_button_url',array(
	'default'=>'/contact/',
	'sanitize_callback'=>'esc_url_raw',
));

$wp_customize->add_control('ronza_home_cta_button_url',array(
	'label'=>esc_html__('Button URL','ronza'),
	'section'=>'ronza_home_cta',
	'type'=>'url',
));