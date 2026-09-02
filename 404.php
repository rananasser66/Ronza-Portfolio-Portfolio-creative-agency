<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Ronza
 */

get_header();
?>

<section class="error-page">
	<div class="container">
		<div class="error-page__content">
			<p class="error-page__eyebrow"><?php esc_html_e( '404 Error', 'ronza' ); ?></p>
			<h1 class="error-page__title"><?php esc_html_e( 'Page not found.', 'ronza' ); ?></h1>
			<p class="error-page__description"><?php esc_html_e( 'The page you are looking for does not exist or may have been moved.', 'ronza' ); ?></p>
			<div class="error-page__actions">
				<a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'ronza' ); ?></a>
				<a class="button button--secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'ronza' ); ?></a>
			</div>
			<div class="error-page__search">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();