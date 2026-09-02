<?php

/**
 * The template for displaying a single Project.
 *
 * @package Ronza
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'project-single' ); ?> >
			<header class="project-single__header">
				<div class="container">
					<p class="project-single__eyebrow"><?php esc_html_e( 'Featured Project', 'ronza' ); ?></p>
					<h1 class="project-single__title"><?php the_title(); ?></h1>
				</div>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="project-single__featured">
					<div class="container">
						<?php the_post_thumbnail('full',array('class' => 'project-single__image','loading' => 'eager','decoding' => 'async',)); ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="project-single__body">
				<div class="container">
					<div class="project-single__meta">
						<span><?php echo esc_html( get_the_date() ); ?></span>
						<?php $categories = get_the_terms( get_the_ID(), 'project_category' ); ?>
						<?php if ( $categories && ! is_wp_error( $categories ) ) : ?>
							<span><?php echo esc_html( $categories[0]->name ); ?></span>
						<?php endif; ?>
					</div>
					<div class="project-single__content">
						<?php the_content(); ?>
					</div>
					<nav class="project-single__navigation" aria-label="<?php esc_attr_e( 'Project navigation', 'ronza' ); ?>">
						<div class="project-single__navigation-item project-single__navigation-item--previous">
							<?php previous_post_link( '%link', '<span class="project-single__navigation-label">' . esc_html__( 'Previous Project', 'ronza' ) . '</span><span class="project-single__navigation-title">%title</span>' ); ?>
						</div>
						<div class="project-single__navigation-back">
							<a href="<?php echo esc_url( get_post_type_archive_link( 'ronza_project' ) ); ?>"><?php esc_html_e( 'Back to Projects', 'ronza' ); ?></a>
						</div>
						<div class="project-single__navigation-item project-single__navigation-item--next">
							<?php next_post_link( '%link', '<span class="project-single__navigation-label">' . esc_html__( 'Next Project', 'ronza' ) . '</span><span class="project-single__navigation-title">%title</span>' ); ?>
						</div>
					</nav>
					</nav>
				</div>
			</div>
		</article>
		<?php
	endwhile;
endif;

get_footer();