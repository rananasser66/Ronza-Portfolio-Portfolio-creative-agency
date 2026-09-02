<?php

/**
 * The template for displaying the footer.
 *
 * @package Ronza
 */

?>

</main>

<?php if ( get_theme_mod('ronza_footer_show',true) ) : ?>
	<footer class="site-footer">
		<div class="container">
			<div class="site-footer__main">
				<div class="site-footer__brand">
					<?php $logo = get_theme_mod( 'ronza_secoundary_logo', 0 ); ?>
					<?php if ( $logo ) : ?>
						<?php echo wp_get_attachment_image( $logo, 'medium', false, array( 'alt' => get_bloginfo( 'name' ) ) ); ?>
					<?php else : ?>
						<a class="site-footer__title" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
					<?php endif; ?>
					<p class="site-footer__description"><?php echo esc_html(get_theme_mod('ronza_footer_description','Build better websites with Ronza.')); ?></p>
				</div>

				<div class="site-footer__navigation">
					<h2 class="site-footer__heading"><?php echo esc_html(get_theme_mod('ronza_footer_links_title','Quick Links')); ?></h2>
					<?php
					wp_nav_menu(array(
						'theme_location'=>'footer',
						'menu_class'=>'footer-menu',
						'container'=>false,
						'fallback_cb'=>false,
					));
					?>
				</div>

				<?php if ( get_theme_mod('ronza_footer_show_widgets',true) ) : ?>
					<div class="site-footer__widgets">
						<h2 class="site-footer__heading"><?php echo esc_html(get_theme_mod('ronza_footer_widgets_title','Stay Connected')); ?></h2>
						<?php if ( is_active_sidebar('footer-1') ) : ?>
							<?php dynamic_sidebar('footer-1'); ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="site-footer__bottom">
				<p class="site-footer__copyright">&copy; <?php echo esc_html(gmdate('Y')); ?> <?php bloginfo('name'); ?>. <?php echo esc_html(get_theme_mod('ronza_footer_copyright','All rights reserved.')); ?></p>

				<?php if ( get_theme_mod('ronza_footer_show_legal',true) ) : ?>
					<nav class="site-footer__legal" aria-label="<?php esc_attr_e('Legal Menu','ronza'); ?>">
						<?php
						wp_nav_menu(array(
							'theme_location'=>'legal',
							'menu_class'=>'footer-legal-menu',
							'container'=>false,
							'fallback_cb'=>false,
						));
						?>
					</nav>
				<?php endif; ?>
			</div>
		</div>
	</footer>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>