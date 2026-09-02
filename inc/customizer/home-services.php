<?php
/*--------------------------------------------------------------
# Home Services.
--------------------------------------------------------------*/
$wp_customize->add_section('ronza_services',array(
	'title'=>esc_html__('Ronza Home Services','ronza'),
	'description'=>esc_html__('Customize the homepage services section.','ronza'),
	'priority'=>45,
));

$wp_customize->add_setting('ronza_services_show',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_services_show',array(
	'label'=>esc_html__('Show Services Section','ronza'),
	'section'=>'ronza_services',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_services_eyebrow',array(
	'default'=>'What We Offer',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_services_eyebrow',array(
	'label'=>esc_html__('Section Eyebrow','ronza'),
	'section'=>'ronza_services',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_services_title',array(
	'default'=>'Everything you need to grow online.',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_services_title',array(
	'label'=>esc_html__('Section Title','ronza'),
	'section'=>'ronza_services',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_services_description',array(
	'default'=>'Powerful tools and flexible layouts designed to help you create a professional website.',
	'sanitize_callback'=>'sanitize_textarea_field',
));

$wp_customize->add_control('ronza_services_description',array(
	'label'=>esc_html__('Section Description','ronza'),
	'section'=>'ronza_services',
	'type'=>'textarea',
));

for($i=1;$i<=3;$i++){
	$defaults=array(
		1=>array('Modern Design','Clean and modern layouts that look beautiful across every screen size.'),
		2=>array('Performance','Built with performance and a lightweight frontend architecture in mind.'),
		3=>array('Fully Responsive','Your website will look great on desktops, tablets and mobile devices.'),
	);

	$wp_customize->add_setting("ronza_service_{$i}_show",array(
		'default'=>true,
		'sanitize_callback'=>'wp_validate_boolean',
	));

	$wp_customize->add_control("ronza_service_{$i}_show",array(
		'label'=>sprintf(esc_html__('Show Service %d','ronza'),$i),
		'section'=>'ronza_services',
		'type'=>'checkbox',
	));

	$wp_customize->add_setting("ronza_service_{$i}_title",array(
		'default'=>$defaults[$i][0],
		'sanitize_callback'=>'sanitize_text_field',
	));

	$wp_customize->add_control("ronza_service_{$i}_title",array(
		'label'=>sprintf(esc_html__('Service %d Title','ronza'),$i),
		'section'=>'ronza_services',
		'type'=>'text',
	));

	$wp_customize->add_setting("ronza_service_{$i}_description",array(
		'default'=>$defaults[$i][1],
		'sanitize_callback'=>'sanitize_textarea_field',
	));

	$wp_customize->add_control("ronza_service_{$i}_description",array(
		'label'=>sprintf(esc_html__('Service %d Description','ronza'),$i),
		'section'=>'ronza_services',
		'type'=>'textarea',
	));
}