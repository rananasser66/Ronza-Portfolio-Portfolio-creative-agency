<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
function get_img_url($img){
  return get_stylesheet_directory_uri()."/src/assets/images/".$img;
}

function custom_archive_sort_order($query) {
  if (is_admin() || !$query->is_main_query() || !is_archive()) {
    return;
  }

  if (isset($_GET['sort_order'])) {
    switch ($_GET['sort_order']) {
      case 'date_desc':
        $query->set('orderby', 'date');
        $query->set('order', 'DESC');
        break;
      case 'date_asc':
        $query->set('orderby', 'date');
        $query->set('order', 'ASC');
        break;
      case 'priority_desc':
        $query->set('meta_key', 'set_priority');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'DESC');
        break;
      case 'priority_asc':
        $query->set('meta_key', 'set_priority');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        break;
      case 'status':
        $query->set('meta_key', 'status');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        break;
      default:
        // Default setting or other options can be added here
      break;
   }
 }
}
add_action('pre_get_posts', 'custom_archive_sort_order');

// Add custom columns to the posts table
function my_custom_columns($columns) {
  $columns['request_type'] = __('Request Type', 'requests'); 
  $columns['priority'] = __('Priority', 'requests'); 
  $columns['hotel'] = __('Hotel', 'requests'); 
  $columns['status'] = __('Status', 'requests'); 
  $columns['request_assignee'] = __('Assign to', 'requests'); 
  return $columns;
}
add_filter('manage_posts_columns', 'my_custom_columns');

// Populate custom columns with data
function my_custom_columns_data($column, $post_id) {
  switch ($column) {
    case 'request_type':
      echo get_post_meta($post_id, 'request_type', true); 
      break;
    case 'priority':
      echo get_post_meta($post_id, 'set_priority', true);
      break;
    case 'hotel':
      echo get_post_meta($post_id, 'hotel', true);
      break;
    case 'status':
      $status = get_post_meta($post_id, 'status', true);
      if($status == 0){
        echo 'To Do';
      }elseif($status == 1){
        echo 'In Progress';
      }else{
        echo 'Completed';
      }
      break;
    case 'request_assignee':
      $user = get_post_meta($post_id, 'assign_to', true);
      if($user == 1){
        echo 'Rana Nasser';
      }elseif($user == 2){
        echo 'Mostafa Gomaa';
      }elseif($user == 5){
        echo 'Hadeel Mahanna';
      }
      break;
  }
}
add_action('manage_posts_custom_column', 'my_custom_columns_data', 10, 2);



add_action( 'gform_advancedpostcreation_post_after_creation_1', 'assign_user_based_on_request_type', 10, 4 );

function assign_user_based_on_request_type( $post_id, $feed, $entry, $form ) {
    // Get field values
    $request_type = trim( rgar( $entry, '9' ) ); // Request Type field ID
    $destination  = trim( rgar( $entry, '1' ) ); // Destination field ID
    $hotel  = trim( rgar( $entry, '3' ) ); // Hotel field ID

    // User IDs
    $users = [
      'rana'    => 1,
      'mostafa' => 2,
      'hadeel'  => 5,
      'engy'    => 6, 
    ];

    $user_id = null;

    if ( $request_type === 'Technical' ) {
      if ( $destination === 'Jebel Sifah' ) {
         $user_id = $users['mostafa'];
      } elseif($destination === 'Hawana Salalah' || $destination === 'Taba Heights' || $destination === 'Andermatt'){
        if($destination === 'Andermatt' && $hotel !="Alpine Apartments"){
          $user_id = null;
        }else{
          $user_id = $users['rana'];
        }
      }
    } elseif ( $request_type === 'Content' ) {
      $user_id = $users['hadeel'];
    }

    if ( $user_id ) {
      update_post_meta( $post_id, 'assign_to', $user_id );
    }
}


// Send email when status is set to completed
add_action('updated_postmeta', 'send_request_completed_email', 10, 4);

function send_request_completed_email($meta_id, $post_id, $meta_key, $meta_value) {
    // Only listen to the request status field.
    if ($meta_key !== 'status') {
        return;
    }

    // Only send when status becomes Completed.
    if ($meta_value !== 'Completed') {
        return;
    }

    // Make sure this is your request post type.
    if (get_post_type($post_id) !== 'request') {
        return;
    }

    // Prevent sending the email more than once.
    if (get_post_meta($post_id, '_completed_email_sent', true)) {
        return;
    }

    // Get the requester's email from your ACF field.
    $requester_email = get_field('email', $post_id);
    $requester_name = get_field('name', $post_id);

    if (!$requester_email || !is_email($requester_email)) {
        return;
    }

    // Fixed recipients.
    $fixed_emails = [
        'celine.montefusco@orascomdh.com',
        'george.salib@orascomdh.com',
    ];

    $assign_to = get_field('assign_to');
    if ($assign_to && !empty($assign_to['user_email'])) {
        $assign_to_email = $assign_to['user_email'];
    }

    // Combine assigned_to + fixed recipients.
    $cc_emails = array_merge([$assign_to_email], $fixed_emails);

    $subject = 'Your Orascom hotels request has been completed';

    $message = "Hello,\n\n" . $requester_name ;
    $message .= "Your request has been marked as completed.\n\n";
    $message .= 'Request: ' . get_the_title($post_id) . "\n";
    $message .= 'View request: ' . get_permalink($post_id) . "\n\n";
    $message .= "Thank you.";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Cc: ' . implode(', ', $cc_emails),
    ];

    $sent = wp_mail(
        $requester_email,
        $subject,
        $message,
        $headers
    );

    if ($sent) {
        update_post_meta($post_id, '_completed_email_sent', 1);
    }
}

//save status history
function ohm_status_label($value) {
    $statuses = [
        '0' => 'To Do',
        '1' => 'In Progress',
        '2' => 'Completed',
    ];

    return $statuses[(string) $value] ?? $value;
}

add_filter('update_post_metadata', 'ohm_log_request_status_change', 10, 5);

function ohm_log_request_status_change($check, $post_id, $meta_key, $new_value, $prev_value) {
    // Must match your ACF field NAME.
    if ($meta_key !== 'status') {
        return $check;
    }

    // Replace "request" if your request post type has a different name.
    if (get_post_type($post_id) !== 'request') {
        return $check;
    }

    $old_value = get_post_meta($post_id, 'status', true);
    $new_value = (string) $new_value;

    // Do not add activity if the user saved the same status.
    if ((string) $old_value === $new_value) {
        return $check;
    }

    $user = wp_get_current_user();

    add_post_meta($post_id, '_request_status_history', [
        'from'      => (string) $old_value,
        'to'        => $new_value,
        'user_name' => $user->exists() ? $user->display_name : 'System',
        'date'      => current_time('mysql'),
    ]);

    return $check;
}
