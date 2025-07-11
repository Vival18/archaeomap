<?php
// Registrazione Custom Post Type "Sito Archeologico"
function archaeomap_register_cpt_siti_archeologici() {
    $labels = [
        'name'               => 'Siti Archeologici',
        'singular_name'      => 'Sito Archeologico',
        'menu_name'          => 'Siti Archeologici',
        'name_admin_bar'     => 'Sito Archeologico',
        'add_new'            => 'Aggiungi nuovo',
        'add_new_item'       => 'Aggiungi nuovo sito',
        'new_item'           => 'Nuovo sito',
        'edit_item'          => 'Modifica sito',
        'view_item'          => 'Visualizza sito',
        'all_items'          => 'Tutti i siti',
        'search_items'       => 'Cerca sito',
        'not_found'          => 'Nessun sito trovato',
        'not_found_in_trash' => 'Nessun sito nel cestino',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-location-alt',
        'supports'           => ['title', 'editor', 'thumbnail'],
        'has_archive'        => false,
        'rewrite'            => ['slug' => 'sito-archeologico'],
        'show_in_rest'       => true,
    ];

    register_post_type('sito_archeologico', $args);
}
add_action('init', 'archaeomap_register_cpt_siti_archeologici');
