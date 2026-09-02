<?php
/*--------------------------------------------------------------
# Home Hero.
--------------------------------------------------------------*/
$wp_customize->add_section('ronza_hero',array(
	'title'=>esc_html__('Ronza Home Hero','ronza'),
	'description'=>esc_html__('Customize the homepage hero section.','ronza'),
	'priority'=>30,
));

$wp_customize->add_setting('ronza_hero_show',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_hero_show',array(
	'label'=>esc_html__('Show Hero Section','ronza'),
	'section'=>'ronza_hero',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_hero_background_type',array(
	'default'=>'color',
	'sanitize_callback'=>function($value){
		return in_array($value,array('color','image'),true)?$value:'color';
	},
));

$wp_customize->add_control('ronza_hero_background_type',array(
	'label'=>esc_html__('Background Type','ronza'),
	'section'=>'ronza_hero',
	'type'=>'select',
	'choices'=>array(
		'color'=>esc_html__('Color','ronza'),
		'image'=>esc_html__('Image','ronza'),
	),
));

$wp_customize->add_setting('ronza_hero_background_color',array(
	'default'=>'#111111',
	'sanitize_callback'=>'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ronza_hero_background_color',array(
	'label'=>esc_html__('Background Color','ronza'),
	'section'=>'ronza_hero',
)));

$wp_customize->add_setting('ronza_hero_background_image',array(
	'default'=>0,
	'sanitize_callback'=>'absint',
));

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,'ronza_hero_background_image',array(
	'label'=>esc_html__('Background Image','ronza'),
	'description'=>esc_html__('Optional image used when Background Type is set to Image.','ronza'),
	'section'=>'ronza_hero',
	'mime_type'=>'image',
)));

$wp_customize->add_setting('ronza_hero_overlay_color',array(
	'default'=>'#000000',
	'sanitize_callback'=>'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ronza_hero_overlay_color',array(
	'label'=>esc_html__('Overlay Color','ronza'),
	'section'=>'ronza_hero',
)));

$wp_customize->add_setting('ronza_hero_overlay_opacity',array(
	'default'=>45,
	'sanitize_callback'=>function($value){return min(100,max(0,absint($value)));},
));

$wp_customize->add_control('ronza_hero_overlay_opacity',array(
	'label'=>esc_html__('Overlay Opacity','ronza'),
	'description'=>esc_html__('Enter a value from 0 to 100.','ronza'),
	'section'=>'ronza_hero',
	'type'=>'number',
	'input_attrs'=>array(
		'min'=>0,
		'max'=>100,
		'step'=>1,
	),
));

$wp_customize->add_setting('ronza_hero_eyebrow',array(
	'default'=>'Modern WordPress Theme',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_hero_eyebrow',array(
	'label'=>esc_html__('Hero Eyebrow','ronza'),
	'section'=>'ronza_hero',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_hero_title',array(
	'default'=>'Build a better digital presence.',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_hero_title',array(
	'label'=>esc_html__('Hero Title','ronza'),
	'section'=>'ronza_hero',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_hero_description',array(
	'default'=>'A modern, flexible and performance-focused WordPress theme designed for businesses, creators and agencies.',
	'sanitize_callback'=>'sanitize_textarea_field',
));

$wp_customize->add_control('ronza_hero_description',array(
	'label'=>esc_html__('Hero Description','ronza'),
	'section'=>'ronza_hero',
	'type'=>'textarea',
));

$wp_customize->add_setting('ronza_hero_show_primary_button',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_hero_show_primary_button',array(
	'label'=>esc_html__('Show Hero Primary Button','ronza'),
	'section'=>'ronza_hero',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_hero_primary_text',array(
	'default'=>'Get Started',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_hero_primary_text',array(
	'label'=>esc_html__('Primary Button Text','ronza'),
	'section'=>'ronza_hero',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_hero_primary_url',array(
	'default'=>'#services',
	'sanitize_callback'=>'esc_url_raw',
));

$wp_customize->add_control('ronza_hero_primary_url',array(
	'label'=>esc_html__('Primary Button URL','ronza'),
	'section'=>'ronza_hero',
	'type'=>'url',
));

$wp_customize->add_setting('ronza_hero_show_secondary_button',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_hero_show_secondary_button',array(
	'label'=>esc_html__('Show Hero Secondary Button','ronza'),
	'section'=>'ronza_hero',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_hero_secondary_text',array(
	'default'=>'Explore More',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_hero_secondary_text',array(
	'label'=>esc_html__('Secondary Button Text','ronza'),
	'section'=>'ronza_hero',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_hero_secondary_url',array(
	'default'=>'#portfolio',
	'sanitize_callback'=>'esc_url_raw',
));

$wp_customize->add_control('ronza_hero_secondary_url',array(
	'label'=>esc_html__('Secondary Button URL','ronza'),
	'section'=>'ronza_hero',
	'type'=>'url',
));