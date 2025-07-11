<?php
function archaeomap_shortcode_map() {
    // Output solo il contenitore della mappa
    return '<div id="archaeomap" style="height: 600px; width: 100%;"></div>';
}
add_shortcode('archaeomap', 'archaeomap_shortcode_map');
