<?php
/*--------------------------------------------------------------
# Home Portfolio.
--------------------------------------------------------------*/
$wp_customize->add_section('ronza_portfolio',array(
	'title'=>esc_html__('Ronza Home Portfolio','ronza'),
	'description'=>esc_html__('Customize the homepage portfolio section.','ronza'),
	'priority'=>50,
));

$wp_customize->add_setting('ronza_portfolio_show',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_portfolio_show',array(
	'label'=>esc_html__('Show Portfolio Section','ronza'),
	'section'=>'ronza_portfolio',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_portfolio_eyebrow',array(
	'default'=>'Selected Work',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_portfolio_eyebrow',array(
	'label'=>esc_html__('Section Eyebrow','ronza'),
	'section'=>'ronza_portfolio',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_portfolio_title',array(
	'default'=>'Featured projects.',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_portfolio_title',array(
	'label'=>esc_html__('Section Title','ronza'),
	'section'=>'ronza_portfolio',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_portfolio_description',array(
	'default'=>'',
	'sanitize_callback'=>'sanitize_textarea_field',
));

$wp_customize->add_control('ronza_portfolio_description',array(
	'label'=>esc_html__('Section Description','ronza'),
	'section'=>'ronza_portfolio',
	'type'=>'textarea',
));

$wp_customize->add_setting('ronza_portfolio_count',array(
	'default'=>3,
	'sanitize_callback'=>function($value){return min(12,max(1,absint($value)));},
));

$wp_customize->add_control('ronza_portfolio_count',array(
	'label'=>esc_html__('Number of Projects','ronza'),
	'section'=>'ronza_portfolio',
	'type'=>'number',
	'input_attrs'=>array(
		'min'=>1,
		'max'=>12,
		'step'=>1,
	),
));

$wp_customize->add_setting('ronza_portfolio_show_button',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_portfolio_show_button',array(
	'label'=>esc_html__('Show View All Button','ronza'),
	'section'=>'ronza_portfolio',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_portfolio_button_text',array(
	'default'=>'View All Projects',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_portfolio_button_text',array(
	'label'=>esc_html__('Button Text','ronza'),
	'section'=>'ronza_portfolio',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_portfolio_button_url',array(
	'default'=>'/projects/',
	'sanitize_callback'=>'esc_url_raw',
));

$wp_customize->add_control('ronza_portfolio_button_url',array(
	'label'=>esc_html__('Button URL','ronza'),
	'section'=>'ronza_portfolio',
	'type'=>'url',
));