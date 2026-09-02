<?php
/*--------------------------------------------------------------
# Home Blog.
--------------------------------------------------------------*/
$wp_customize->add_section('ronza_blog',array(
	'title'=>esc_html__('Ronza Home Blog','ronza'),
	'description'=>esc_html__('Customize the homepage blog section.','ronza'),
	'priority'=>55,
));

$wp_customize->add_setting('ronza_blog_show',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_blog_show',array(
	'label'=>esc_html__('Show Blog Section','ronza'),
	'section'=>'ronza_blog',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_blog_eyebrow',array(
	'default'=>'From the Blog',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_blog_eyebrow',array(
	'label'=>esc_html__('Section Eyebrow','ronza'),
	'section'=>'ronza_blog',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_blog_title',array(
	'default'=>'Latest articles.',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_blog_title',array(
	'label'=>esc_html__('Section Title','ronza'),
	'section'=>'ronza_blog',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_blog_description',array(
	'default'=>'Insights, ideas and practical tips for building better digital experiences.',
	'sanitize_callback'=>'sanitize_textarea_field',
));

$wp_customize->add_control('ronza_blog_description',array(
	'label'=>esc_html__('Section Description','ronza'),
	'section'=>'ronza_blog',
	'type'=>'textarea',
));

$wp_customize->add_setting('ronza_blog_count',array(
	'default'=>3,
	'sanitize_callback'=>function($value){return min(12,max(1,absint($value)));},
));

$wp_customize->add_control('ronza_blog_count',array(
	'label'=>esc_html__('Number of Posts','ronza'),
	'section'=>'ronza_blog',
	'type'=>'number',
	'input_attrs'=>array(
		'min'=>1,
		'max'=>12,
		'step'=>1,
	),
));

$wp_customize->add_setting('ronza_blog_show_image',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_blog_show_image',array(
	'label'=>esc_html__('Show Featured Images','ronza'),
	'section'=>'ronza_blog',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_blog_show_date',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_blog_show_date',array(
	'label'=>esc_html__('Show Date','ronza'),
	'section'=>'ronza_blog',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_blog_show_excerpt',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_blog_show_excerpt',array(
	'label'=>esc_html__('Show Excerpt','ronza'),
	'section'=>'ronza_blog',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_blog_show_read_more',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_blog_show_read_more',array(
	'label'=>esc_html__('Show Read More','ronza'),
	'section'=>'ronza_blog',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_blog_read_more_text',array(
	'default'=>'Read Article',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_blog_read_more_text',array(
	'label'=>esc_html__('Read More Text','ronza'),
	'section'=>'ronza_blog',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_blog_show_button',array(
	'default'=>true,
	'sanitize_callback'=>'wp_validate_boolean',
));

$wp_customize->add_control('ronza_blog_show_button',array(
	'label'=>esc_html__('Show View All Button','ronza'),
	'section'=>'ronza_blog',
	'type'=>'checkbox',
));

$wp_customize->add_setting('ronza_blog_button_text',array(
	'default'=>'View All Articles',
	'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('ronza_blog_button_text',array(
	'label'=>esc_html__('Button Text','ronza'),
	'section'=>'ronza_blog',
	'type'=>'text',
));

$wp_customize->add_setting('ronza_blog_button_url',array(
	'default'=>'',
	'sanitize_callback'=>'esc_url_raw',
));

$wp_customize->add_control('ronza_blog_button_url',array(
	'label'=>esc_html__('Button URL','ronza'),
	'description'=>esc_html__('Leave empty to use the WordPress posts page.','ronza'),
	'section'=>'ronza_blog',
	'type'=>'url',
));