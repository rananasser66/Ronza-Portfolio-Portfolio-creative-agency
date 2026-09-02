<?php

/**
 * Template part for displaying single posts.
 *
 * @package Ronza
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?> >
	<header class="single-post__header">
		<div class="container">
			<h1 class="single-post__title"><?php the_title(); ?></h1>
			<div class="single-post__meta">
				<span><?php echo esc_html( get_the_date() ); ?></span>
				<?php if ( get_the_category() ) : ?>
					<span><?php esc_html_e( ' · ', 'ronza' ); ?></span>
					<span><?php the_category( ', ' ); ?></span>
				<?php endif; ?>
			</div>
		</div>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="single-post__image">
			<div class="container">
				<?php the_post_thumbnail( 'full', array( 'class' => 'single-post__thumbnail', ));?>
			</div>
		</div>
	<?php endif; ?>

	<div class="single-post__content">
		<div class="container"><?php the_content(); ?></div>
	</div>
</article>