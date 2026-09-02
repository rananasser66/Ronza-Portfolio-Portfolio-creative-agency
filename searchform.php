<?php

/**
 * Search form.
 *
 * @package Ronza
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="search-form__label">
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'ronza' ); ?></span>
		<input type="search" class="search-form__input" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'ronza' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
	</label>
	<button type="submit" class="button button--primary"><?php esc_html_e( 'Search', 'ronza' ); ?></button>
</form>