<?php

/**
 * Ronza theme functions and definitions.
 *
 * @package Ronza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load theme setup.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Load theme assets.
 */
require get_template_directory() . '/inc/enqueue.php';

require_once get_template_directory() . '/inc/customizer.php';

require_once get_template_directory() . '/inc/projects.php';

if ( get_theme_mod( 'ronza_about_show_team', true ) ) : 
	require_once get_template_directory() . '/inc/team.php';
endif;



function ronza_customizer_css() {
	$primary = get_theme_mod( 'ronza_primary_color', '#111111' );
	$accent = get_theme_mod( 'ronza_accent_color', '#c9a227' );
	$secondary = get_theme_mod( 'ronza_secondary_color', '#f5f5f2' );
	$text = get_theme_mod( 'ronza_text_color', '#333333' );
	$background = get_theme_mod( 'ronza_background_color', '#ffffff' );
	$body_font = get_theme_mod( 'ronza_body_font', 'Arial, sans-serif' );
	$heading_font = get_theme_mod( 'ronza_heading_font', 'Arial, sans-serif' );
	$body_font_size = get_theme_mod( 'ronza_body_font_size', '16px' );
	$heading_weight = get_theme_mod( 'ronza_heading_weight', '700' );
	$button_primary_background = get_theme_mod( 'ronza_button_primary_background', $accent );
	$button_primary_text       = get_theme_mod( 'ronza_button_primary_text', $primary );
	$button_secondary_text     = get_theme_mod( 'ronza_button_secondary_text', $background );
	$button_secondary_border   = get_theme_mod( 'ronza_button_secondary_border', $background );
	$button_light_background   = get_theme_mod( 'ronza_button_light_background', $background );
	$button_light_text         = get_theme_mod( 'ronza_button_light_text', $primary );
	$button_primary_hover_background   = get_theme_mod( 'ronza_button_primary_hover_background', 'transparent' );
	$button_primary_hover_text         = get_theme_mod( 'ronza_button_primary_hover_text', $background );
	$button_primary_hover_border       = get_theme_mod( 'ronza_button_primary_hover_border', $accent );
	$button_secondary_hover_background = get_theme_mod( 'ronza_button_secondary_hover_background', $background );
	$button_secondary_hover_text       = get_theme_mod( 'ronza_button_secondary_hover_text', $primary );
	$button_secondary_hover_border     = get_theme_mod( 'ronza_button_secondary_hover_border', $background );
	$button_light_hover_background     = get_theme_mod( 'ronza_button_light_hover_background', 'transparent' );
	$button_light_hover_text           = get_theme_mod( 'ronza_button_light_hover_text', $background );
	$button_light_hover_border         = get_theme_mod( 'ronza_button_light_hover_border', $background );
	$button_border_radius              = min( 50, absint( get_theme_mod( 'ronza_button_border_radius', 4 ) ) );
	?>
	<style id="ronza-customizer-css">
		:root {
			--ronza-primary: <?php echo esc_attr( $primary ); ?>;
			--ronza-accent: <?php echo esc_attr( $accent ); ?>;
			--ronza-secondary: <?php echo esc_attr( $secondary ); ?>;
			--ronza-text: <?php echo esc_attr( $text ); ?>;
			--ronza-background: <?php echo esc_attr( $background ); ?>;
			--ronza-body-font: <?php echo esc_attr( $body_font ); ?>;
			--ronza-heading-font: <?php echo esc_attr( $heading_font ); ?>;
			--ronza-body-font-size: <?php echo esc_attr( $body_font_size ); ?>;
			--ronza-heading-weight: <?php echo esc_attr( $heading_weight ); ?>;
			--ronza-button-primary-background: <?php echo esc_attr( $button_primary_background ); ?>;
			--ronza-button-primary-text: <?php echo esc_attr( $button_primary_text ); ?>;
			--ronza-button-secondary-text: <?php echo esc_attr( $button_secondary_text ); ?>;
			--ronza-button-secondary-border: <?php echo esc_attr( $button_secondary_border ); ?>;
			--ronza-button-light-background: <?php echo esc_attr( $button_light_background ); ?>;
			--ronza-button-light-text: <?php echo esc_attr( $button_light_text ); ?>;
			--ronza-button-primary-hover-background: <?php echo esc_attr( $button_primary_hover_background ); ?>;
			--ronza-button-primary-hover-text: <?php echo esc_attr( $button_primary_hover_text ); ?>;
			--ronza-button-primary-hover-border: <?php echo esc_attr( $button_primary_hover_border ); ?>;
			--ronza-button-secondary-hover-background: <?php echo esc_attr( $button_secondary_hover_background ); ?>;
			--ronza-button-secondary-hover-text: <?php echo esc_attr( $button_secondary_hover_text ); ?>;
			--ronza-button-secondary-hover-border: <?php echo esc_attr( $button_secondary_hover_border ); ?>;
			--ronza-button-light-hover-background: <?php echo esc_attr( $button_light_hover_background ); ?>;
			--ronza-button-light-hover-text: <?php echo esc_attr( $button_light_hover_text ); ?>;
			--ronza-button-light-hover-border: <?php echo esc_attr( $button_light_hover_border ); ?>;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'ronza_customizer_css' );

function ronza_preload_hero_image() {
	if ( ! is_front_page() ) {
		return;
	}
	if ( 'image' !== get_theme_mod( 'ronza_hero_background_type', 'color' ) ) {
		return;
	}
	$hero_image_id = absint( get_theme_mod( 'ronza_hero_background_image', 0 ) );
	if ( ! $hero_image_id ) {
		return;
	}
	$hero_image_url = wp_get_attachment_image_url( $hero_image_id, 'large' );
	if ( ! $hero_image_url ) {
		return;
	}
	?>
	<link rel="preload" as="image" href="<?php echo esc_url( $hero_image_url ); ?>" fetchpriority="high">
	<?php
}

add_action( 'wp_head', 'ronza_preload_hero_image', 1 );