<?php
/**
 * Plugin Name: 3PM MIDI Commons
 * Description: Open MIDI starting points with local audio previews, paired playback and downloads. Embed with [threepm_midi_library].
 * Version: 1.2.3
 * Author: 3PM
 * License: MIT
 * Requires at least: 6.5
 * Requires PHP: 8.0
 * Text Domain: threepm-midi-commons
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/generator.php';

// Loaded on every page so the persistent site shell can switch players during AJAX navigation.
add_action('wp_enqueue_scripts', static function () {
    wp_enqueue_script('threepm-midi-frame', plugins_url('assets/frame.js', __FILE__), [], '1.2.3', true);
    wp_enqueue_style('threepm-midi-dock', plugins_url('assets/dock.css', __FILE__), [], '1.2.3');
});

// Activation does not enable generation. Provider calls require configuration and consent.
add_action('init', static function () {
    add_shortcode('threepm_midi_library', static function () {
        $id = wp_unique_id('threepm-midi-');
        $url = add_query_arg('api', rest_url('threepm-midi/v1/'), plugins_url('assets/library/index.html', __FILE__));
        return sprintf(
            '<div class="threepm-midi-embed"><iframe id="%1$s" class="threepm-midi-frame" title="3PM MIDI Commons: browse, preview and download MIDI loops" src="%2$s" width="100%%" height="1600" loading="lazy" allow="autoplay" style="display:block;border:0;width:100%%;min-height:700px;border-radius:16px;background:#11160f"></iframe><noscript><p>The audio player needs JavaScript. <a href="%3$s">Download the MIDI collection</a> to use it in your music software.</p></noscript></div>',
            esc_attr($id),
            esc_url($url),
            esc_url(plugins_url('assets/library/downloads/3pm-midi-commons-midi.zip', __FILE__))
        );
    });
});
