<?php
/**
 * The template for displaying all pages.
 *
 * @package Ronza
 */

get_header(); ?>

<main id="primary" class="site-main page-content">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'page' ); ?>>
            <header class="page__header">
                <div class="container">
                    <p class="page__eyebrow"><?php esc_html_e( 'Ronza', 'ronza' ); ?></p>
                    <h1 class="page__title"><?php the_title(); ?></h1>
                </div>
            </header>
            <div class="page__content">
                <div class="container">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="page__featured-image">
                            <?php the_post_thumbnail( 'Large', array( 'class' => 'page__thumbnail' ) ); ?>
                        </div>
                    <?php endif; ?>
                    <div class="page__entry">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>