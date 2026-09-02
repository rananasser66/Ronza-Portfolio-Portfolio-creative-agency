<?php

/**
 * The template for displaying archive pages.
 *
 * @package Ronza
 */

get_header(); ?>
<section class="innerPage-hero">
    <div class="container">
    	<header class="projects-archive__header">
        	<p class="innerPage-hero__eyebrow"><?php esc_html_e( 'From the Blog', 'ronza' ); ?></p>
        	<h1 class="innerPage-hero__title">
        		<?php
				if ( is_category() ) {
					single_cat_title();
				} elseif ( is_tag() ) {
					single_tag_title();
				} elseif ( is_author() ) {
					the_post();
					printf( esc_html__( 'Posts by %s', 'ronza' ), esc_html( get_the_author() ));
					rewind_posts();
				} elseif ( is_year() ) {
					echo esc_html( get_the_date( 'Y' ) );
				} elseif ( is_month() ) {
					echo esc_html( get_the_date( 'F Y' ) );
				} else {
					esc_html_e( 'Latest Articles', 'ronza' );
				}
				?>
				<span class="fullStop">.</span>
			</h1>
			<?php $archive_description = get_the_archive_description();
			if ( $archive_description ) : ?>
	        	<p class="innerPage-hero__description"><?php echo wp_kses_post( $archive_description ); ?></p>
			<?php endif; ?>
    </div>
</section>

<section class="blog-archive">
		<div class="blog-archive__grid reveal">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
						<a class="blog-card__link" href="<?php echo esc_url( get_permalink() ); ?>">
							<div class="blog-card__image">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail('medium_large',array('class' => 'blog-card__thumbnail',));?>
								<?php else : ?>
									<div class="blog-card__placeholder"><?php esc_html_e( 'Article', 'ronza' ); ?></div>
								<?php endif; ?>
							</div>
							<div class="blog-card__content">
								<div class="blog-card__meta">
									<span><?php echo esc_html( get_the_date() ); ?></span>
								</div>
								<h2 class="blog-card__title"><?php the_title(); ?></h2>
								<div class="blog-card__excerpt"><?php the_excerpt(); ?></div>
								<span class="blog-card__read-more"><?php esc_html_e( 'Read Article', 'ronza' ); ?></span>
							</div>
						</a>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php esc_html_e('No articles found.','ronza'); ?></p>
			<?php endif; ?>
		</div>

		<?php the_posts_pagination(array('mid_size'  => 1, 'prev_text' => esc_html__( 'Previous', 'ronza' ), 'next_text' => esc_html__( 'Next', 'ronza' ),)); ?>
	</div>
</section>
<?php get_footer();