<?php
/*
Plugin Name: Video Tracker
Description: Track video playtime and display view count for each video.
Version: 1.0
Author: vikum rajeewa 
*/
// Step 1: Create Shortcode for Video Embedding
add_shortcode('video_embed', 'video_embed_shortcode');

function video_embed_shortcode($atts) {
    $atts = shortcode_atts(array(
        'src' => '',
        'id' => '',
    ), $atts);

    $video_src = esc_url($atts['src']);
    $video_id = esc_attr($atts['id']);

    if ($video_src && $video_id) {
        return '<video id="' . $video_id . '" controls><source src="' . $video_src . '"></video>';
    }

    return '';
}
// Step 2: Set Up Custom Database Table
global $wpdb;
$table_name = $wpdb->prefix . 'video_tracker';
$charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE $table_name (
    id INT NOT NULL AUTO_INCREMENT,
    video_id VARCHAR(255) NOT NULL,
    playtime INT NOT NULL,
    view_count INT NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);

// Step 3: Track Video Playtime
add_action('wp_enqueue_scripts', 'video_tracker_enqueue_scripts');
function video_tracker_enqueue_scripts()
{
    wp_enqueue_script('jquery'); // Ensure jQuery is loaded
    wp_enqueue_script('video_tracker_script', plugins_url('/video_tracker.js', __FILE__), array('jquery'), '1.0', true);

    wp_localize_script('video_tracker_script', 'video_tracker_data', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
