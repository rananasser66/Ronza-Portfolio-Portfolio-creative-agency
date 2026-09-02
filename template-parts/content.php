<?php

/**
 * Template part for displaying posts.
 *
 * @package Ronza
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?> >
	<header class="post-card__header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="post-card__title">', '</h1>' );
		else :
			the_title(
				'<h2 class="post-card__title"><a href="' . esc_url( get_permalink() ) . '">',
				'</a></h2>'
			);
		endif;
		?>
	</header>
	<div class="post-card__content">
		<?php
		if ( is_singular() ) {
			the_content();
		} else {
			the_excerpt();
		}
		?>
	</div>
</article>