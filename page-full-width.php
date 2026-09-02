<?php

/**
 * Template Name: Full Width
 *
 * @package Ronza
 */

get_header();

while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile;

get_footer();