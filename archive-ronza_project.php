<?php

/**
 * The template for displaying the Projects archive.
 *
 * @package Ronza
 */

get_header(); ?>
<section class="innerPage-hero">
    <div class="container">
    	<header class="projects-archive__header">
        	<p class="innerPage-hero__eyebrow"><?php esc_html_e( 'Our Work', 'ronza' ); ?></p>
        	<h1 class="innerPage-hero__title"><?php esc_html_e( 'Featured Projects', 'ronza' ); ?><span class="fullStop">.</span></h1>
        	<p class="innerPage-hero__description">
				<?php esc_html_e('Explore our latest projects and discover how we create modern digital experiences.','ronza'); ?>
			</p>
    </div>
</section>
<section class="projects-archive">
	<div class="container">
		<div class="projects-archive__grid reveal">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'project-card' ); ?>>
						<a class="project-card__link" href="<?php echo esc_url( get_permalink() ); ?>" >
							<div class="project-card__image">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'medium_large', array( 'class' => 'project-card__thumbnail', ) ); ?>
								<?php else : ?>
									<div class="project-card__placeholder"><?php esc_html_e( 'Project Image', 'ronza' ); ?> </div>
								<?php endif; ?>
							</div>
							<div class="project-card__content">
								<?php $type = get_the_terms(get_the_ID(), 'project_type'); ?>
								<p class="project-card__category"><?php esc_html_e( $type[0]->name); ?></p>
								<h2 class="project-card__title"><?php the_title(); ?></h2>
								<span class="project-card__link-text"><?php esc_html_e( 'View Project', 'ronza' ); ?></span>
							</div>
						</a>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php esc_html_e('No projects found.','ronza'); ?></p>
			<?php endif; ?>
		</div>

		<?php the_posts_pagination( array('mid_size'  => 1, 'prev_text' => esc_html__( 'Previous', 'ronza' ), 'next_text' => esc_html__( 'Next', 'ronza' ), )); ?>
	</div>
</section>

<?php get_footer();