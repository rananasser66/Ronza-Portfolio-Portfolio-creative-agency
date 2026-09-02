<?php
/*--------------------------------------------------------------
# Footer Settings
--------------------------------------------------------------*/
$wp_customize->add_section('ronza_footer',array(
	'title'=>esc_html__('Ronza Footer','ronza'),
	'priority'=>25,
	'description'=>esc_html__('Customize the global footer settings.','ronza'),
));

$wp_customize->add_setting('ronza_footer_show',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_footer_show',array(
	'label'=>esc_html__('Show Footer','ronza'),
	'section'=>'ronza_footer',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_footer_description',array(
	'default'=>'Build better websites with Ronza.',
	'sanitize_callback'=>'sanitize_textarea_field',
));

$wp_customize->add_control('ronza_footer_description',array(
	'label'=>esc_html__('Footer Description','ronza'),
	'section'=>'ronza_footer',
	'type'=>'textarea',
));

$wp_customize->add_setting('ronza_footer_links_title',array(
	'default'=>'Quick Links',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_footer_links_title',array(
	'label'=>esc_html__('Quick Links Heading','ronza'),
	'section'=>'ronza_footer',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_footer_show_widgets',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_footer_show_widgets',array(
	'label'=>esc_html__('Show Footer Widgets','ronza'),
	'section'=>'ronza_footer',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_footer_widgets_title',array(
	'default'=>'Stay Connected',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_footer_widgets_title',array(
	'label'=>esc_html__('Widgets Heading','ronza'),
	'section'=>'ronza_footer',
	'type'=>'text',
));

$wp_customize->add_control('ronza_footer_widget_fallback',array(
	'label'=>esc_html__('Widget Fallback Text','ronza'),
	'section'=>'ronza_footer',
	'type'=>'textarea',
));

$wp_customize->add_setting('ronza_footer_copyright',array(
	'default'=>'All rights reserved.',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_footer_copyright',array(
	'label'=>esc_html__('Copyright Text','ronza'),
	'section'=>'ronza_footer',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_footer_show_legal',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_footer_show_legal',array(
	'label'=>esc_html__('Show Legal Menu','ronza'),
	'section'=>'ronza_footer',
	'type'=>'checkbox',
));
