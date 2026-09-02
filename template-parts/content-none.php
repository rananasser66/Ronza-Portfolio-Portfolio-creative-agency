<?php

/**
 * Template part for displaying no content.
 *
 * @package Ronza
 */
?>

<section class="no-results">
	<header class="page-header">
		<h1 class="page-title">
			<?php esc_html_e( 'Nothing Found', 'ronza' ); ?>
		</h1>
	</header>
	<div class="page-content">
		<p><?php esc_html_e('Sorry, but nothing matched your search. Please try again with different keywords.','ronza'); ?></p>
	</div>
</section>