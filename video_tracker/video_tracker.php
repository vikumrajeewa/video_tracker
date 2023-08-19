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