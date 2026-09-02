<?php

/**
 * Ronza Customizer.
 *
 * @package Ronza
 */

/**
 * Register Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */


function ronza_customize_register( $wp_customize ) {
	class Ronza_Font_Picker_Control extends WP_Customize_Control {
		public $type = 'ronza_font_picker';
		public function render_content() {
			if ( empty( $this->choices ) ) {
				return;
			}
			?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php endif; ?>
			<div class="ronza-font-picker">
				<?php foreach ( $this->choices as $font_stack => $font_name ) : ?>
					<label class="ronza-font-picker__option" style="font-family: <?php echo esc_attr( $font_stack ); ?>;">
						<input type="radio" name="_customize-radio-<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $font_stack ); ?>" <?php $this->link(); ?> <?php checked( $this->value(), $font_stack ); ?>>
						<span><?php echo esc_html( $font_name ); ?></span>
					</label>
				<?php endforeach; ?>
			</div>
			<?php
		}
	}

	$wp_customize->remove_control('custom_logo');

	require get_template_directory() . '/inc/customizer/branding.php';
	require get_template_directory() . '/inc/customizer/colors.php';
	require get_template_directory() . '/inc/customizer/buttons.php';
	require get_template_directory() . '/inc/customizer/typography.php';
	require get_template_directory() . '/inc/customizer/header.php';
	require get_template_directory() . '/inc/customizer/footer.php';
	require get_template_directory() . '/inc/customizer/home-hero.php';
	require get_template_directory() . '/inc/customizer/home-stats.php';
	require get_template_directory() . '/inc/customizer/home-about.php';
	require get_template_directory() . '/inc/customizer/home-services.php';
	require get_template_directory() . '/inc/customizer/home-portfolio.php';
	require get_template_directory() . '/inc/customizer/home-blog.php';
	require get_template_directory() . '/inc/customizer/home-cta.php';
	require get_template_directory() . '/inc/customizer/about.php';
	require get_template_directory() . '/inc/customizer/contact.php';


}

add_action( 'customize_register', 'ronza_customize_register' );

