<?php
/*
Plugin Name: ArchaeoMap
Description: Plugin per mappare siti archeologici su WordPress.
Version: 1.0
Author: Fabio Vivaldi
*/

defined('ABSPATH') or die('Accesso non consentito.');

// Includi il Custom Post Type
require_once plugin_dir_path(__FILE__) . 'includes/cpt-sito-archeologico.php';

// Includi gli shortcode
require_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';

// Enqueue CSS e JS e passa i dati dinamici
function archaeomap_enqueue_assets() {
    wp_enqueue_style('leaflet-css', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css');
    wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', [], null, true);
    wp_enqueue_style('archaeomap-css', plugin_dir_url(__FILE__) . 'assets/css/archaeomap.css');
    wp_enqueue_script('archaeomap-js', plugin_dir_url(__FILE__) . 'assets/js/archaeomap.js', ['leaflet-js', 'jquery'], null, true);

    // Passa i dati solo se siamo sulla pagina con shortcode (modifica 'mappa-archeologica' con lo slug reale)
    if (is_page('mappa-archeologica')) {
        $args = [
            'post_type' => 'sito_archeologico',
            'posts_per_page' => -1,
        ];
        $query = new WP_Query($args);

        $sites = [];

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $sites[] = [
                    'title' => get_the_title(),
                    'content' => get_the_content(),
                    'lat' => get_field('latitudine'),
                    'lng' => get_field('longitudine'),
                    'epoca' => get_field('epoca'),
                    'permalink' => get_permalink(),
                    'thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'medium'),
                ];
            }
            wp_reset_postdata();
        }

        wp_localize_script('archaeomap-js', 'archaeoData', $sites);
    }
}
add_action('wp_enqueue_scripts', 'archaeomap_enqueue_assets');


