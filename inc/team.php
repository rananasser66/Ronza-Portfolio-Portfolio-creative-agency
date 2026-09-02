<?php

/**
 * Team functionality.
 *
 * @package Ronza
 */

/**
 * Register team custom post type.
 */
function ronza_register_team_post_type() {

	$labels = array(
		'name'               => esc_html__( 'Team', 'ronza' ),
		'singular_name'      => esc_html__( 'Team', 'ronza' ),
		'add_new'            => esc_html__( 'Add New', 'ronza' ),
		'add_new_item'       => esc_html__( 'Add New Team', 'ronza' ),
		'edit_item'          => esc_html__( 'Edit Team', 'ronza' ),
		'new_item'           => esc_html__( 'New Team', 'ronza' ),
		'view_item'          => esc_html__( 'View Team', 'ronza' ),
		'search_items'       => esc_html__( 'Search Team', 'ronza' ),
		'not_found'          => esc_html__( 'No team found.', 'ronza' ),
		'menu_name'          => esc_html__( 'Team', 'ronza' ),
	);

	$args = array(
		'labels'       => $labels,
		'public'       => true,
		'show_ui'      => true,
		'show_in_menu' => true,
		'menu_icon'    => 'dashicons-admin-users',
		'supports'     => array(
			'title',
			'editor',
			'thumbnail',
		),
		'has_archive'  => true,
		'rewrite'      => array(
			'slug' => 'team',
		),
		'show_in_rest' => true,
	);

	register_post_type( 'ronza_team', $args );
}

add_action( 'init', 'ronza_register_team_post_type' );


function ronza_team_meta_box() {
    add_meta_box(
        'ronza_team_details',
        'Team Member Details',
        'ronza_team_meta_box_callback',
        'ronza_team',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'ronza_team_meta_box');

function ronza_team_meta_box_callback($post) {
    wp_nonce_field('ronza_save_team_details', 'ronza_team_nonce');

    $role = get_post_meta($post->ID, '_ronza_team_role', true);
    $linkedin = get_post_meta($post->ID, '_ronza_team_linkedin', true);
    ?>
    <p>
        <label for="ronza_team_role"><strong>Team Member Role</strong></label>
        <input type="text" id="ronza_team_role" name="ronza_team_role" value="<?php echo esc_attr($role); ?>" class="widefat">
    </p>
    <p>
        <label for="ronza_team_linkedin"><strong>LinkedIn URL</strong></label>
        <input type="url" id="ronza_team_linkedin" name="ronza_team_linkedin" value="<?php echo esc_attr($linkedin); ?>" class="widefat">
    </p>
    <?php
}

function ronza_save_team_details($post_id) {
    if (!isset($_POST['ronza_team_nonce']) || !wp_verify_nonce($_POST['ronza_team_nonce'], 'ronza_save_team_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (get_post_type($post_id) !== 'ronza_team') {
        return;
    }

    if (isset($_POST['ronza_team_role'])) {
        update_post_meta(
            $post_id,
            '_ronza_team_role',
            sanitize_text_field($_POST['ronza_team_role'])
        );
    }

    if (isset($_POST['ronza_team_linkedin'])) {
        update_post_meta(
            $post_id,
            '_ronza_team_linkedin',
            esc_url_raw($_POST['ronza_team_linkedin'])
        );
    }
}
add_action('save_post', 'ronza_save_team_details');