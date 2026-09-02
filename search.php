<?php

/**
 * The template for displaying search results.
 *
 * @package Ronza
 */

get_header();

if ( have_posts() ) :
	?>
	<header class="page-header">
		<div class="container">
			<p class="page-header__eyebrow"><?php esc_html_e( 'Search Results', 'ronza' ); ?></p>
			<h1 class="page-header__title"><?php printf( esc_html__( 'Results for: %s', 'ronza' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
		</div>
	</header>

	<section class="search-results-page">
		<div class="container">
			<div class="search-results-page__grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'search-result' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="search-result__image" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'medium_large' ); ?>
							</a>
						<?php endif; ?>

						<div class="search-result__content">
							<p class="search-result__type"><?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?></p>
							<h2 class="search-result__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="search-result__excerpt"><?php the_excerpt(); ?></div>
							<a class="button button--secondary" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'ronza' ); ?></a>
						</div>
					</article>
					<?php
				endwhile;
				?>
			</div>

			<?php the_posts_pagination(); ?>
		</div>
	</section>
	<?php
else :
	?>
	<section class="search-no-results">
		<div class="container">
			<h1><?php esc_html_e( 'Nothing Found', 'ronza' ); ?></h1>
			<p><?php esc_html_e( 'Sorry, we could not find anything matching your search.', 'ronza' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</section>
	<?php
endif;

get_footer();