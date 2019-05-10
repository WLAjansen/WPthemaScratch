<?php

function themaLucas_bronnen() {
    wp_enqueue_script('lucas-scripts', get_theme_uri('/js/scriptLucas.js'), NULL, '1.0', true);
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaLucas_bronnen');



// registreer menu's van het thema

register_nav_menus( array (
    'hoofd' => __ ('Hoofd menu'),
    'footer' => __ ('Menu in footer'),
));

?>