<?php
/*--------------------------------------------------------------
# Home About
--------------------------------------------------------------*/
$wp_customize->add_section('ronza_home_about',array(
	'title'=>esc_html__('Ronza Home - About','ronza'),
	'description'=>esc_html__('Customize the homepage about section.','ronza'),
	'priority'=>40,
));

$wp_customize->add_setting( 'ronza_home_show_about', array( 'default' => true, 'sanitize_callback' => 'wp_validate_boolean' ) );

$wp_customize->add_control( 'ronza_home_show_about', array('label' => esc_html__( 'Show About Section', 'ronza' ),'section' => 'ronza_home_about','type' => 'checkbox',) );

$wp_customize->add_setting('ronza_about_eyebrow',array(
	'default'=>'Who We Are',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_about_eyebrow',array(
	'label'=>esc_html__('Section Eyebrow','ronza'),
	'section'=>'ronza_home_about',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_about_title',array(
	'default'=>'Built on experience. Focused on results.',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_about_title',array(
	'label'=>esc_html__('Section Title','ronza'),
	'section'=>'ronza_home_about',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_about_description',array(
	'default'=>'We combine practical expertise, clear thinking, and a commitment to quality to deliver solutions that create lasting value.',
	'sanitize_callback'=>'sanitize_textarea_field',
));

$wp_customize->add_control('ronza_about_description',array(
	'label'=>esc_html__('Section Description','ronza'),
	'section'=>'ronza_home_about',
	'type'=>'textarea',
));

$wp_customize->add_setting('ronza_home_about_image',array(
	'default'=>0,
	'sanitize_callback'=>'absint',
));

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,'ronza_home_about_image',array(
	'label'=>esc_html__('Image','ronza'),
	'description'=>esc_html__('About section image.','ronza'),
	'section'=>'ronza_home_about',
	'mime_type'=>'image',
)));