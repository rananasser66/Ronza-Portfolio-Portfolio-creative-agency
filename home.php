<?php
/**
 * The template for displaying the blog posts index.
 *
 * @package Ronza
 */

get_header();
?>
<section class="innerPage-hero">
    <div class="container">
        <header class="projects-archive__header">
            <p class="innerPage-hero__eyebrow"><?php esc_html_e( 'From the Blog', 'ronza' ); ?></p>
            <h1 class="innerPage-hero__title">
                <?php
                if ( is_home() && ! is_front_page() ) {
                    echo esc_html( get_the_title( get_option( 'page_for_posts' ) ) );
                } else {
                    esc_html_e( 'Latest Articles', 'ronza' );
                }
                ?>
                <span class="fullStop">.</span>
            </h1>
            <?php $archive_description = get_the_archive_description();
            if ( $archive_description ) : ?>
                <p class="innerPage-hero__description"><?php esc_html_e( 'Insights, ideas and practical tips for building better digital experiences.', 'ronza' ); ?></p>
            <?php endif; ?>
    </div>
</section>
<main id="primary" class="site-main blog-archive">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="blog-archive__grid reveal">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
                        <a class="blog-card__link" href="<?php the_permalink(); ?>">
                            <div class="blog-card__image">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium_large', array( 'class' => 'blog-card__thumbnail' ) ); ?>
                                <?php else : ?>
                                    <div class="blog-card__placeholder"><?php esc_html_e( 'Ronza', 'ronza' ); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <?php echo esc_html( get_the_date() ); ?>
                                    <?php $categories = get_the_category(); ?>
                                    <?php if ( ! empty( $categories ) ) : ?>
                                        <span class="blog-card__category"><?php echo esc_html( $categories[0]->name ); ?></span>
                                    <?php endif; ?>
                                </div>

                                <h2 class="blog-card__title"><?php the_title(); ?></h2>
                                <div class="blog-card__excerpt"><?php the_excerpt(); ?></div>
                                <span class="blog-card__read-more"><?php esc_html_e( 'Read Article', 'ronza' ); ?></span>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Blog pagination', 'ronza' ); ?>">
                <?php
                the_posts_pagination(
                    array(
                        'mid_size' => 2,
                        'prev_text' => __( 'Previous', 'ronza' ),
                        'next_text' => __( 'Next', 'ronza' ),
                    )
                );
                ?>
            </nav>
        <?php else : ?>
            <div class="blog-empty">
                <h2><?php esc_html_e( 'No articles found.', 'ronza' ); ?></h2>
                <p><?php esc_html_e( 'There are no blog posts available yet.', 'ronza' ); ?></p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>