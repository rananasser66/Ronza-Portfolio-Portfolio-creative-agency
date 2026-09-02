<?php

/**
 * The template for displaying all single posts.
 *
 * @package Ronza
 */

get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', 'single' );
	}
}

get_footer();
