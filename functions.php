<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // THEME ENFANT
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css-scss/style.css', array('parent-style'), time(), 'all');

    // ANIMATIONS JAVASCRIPT 
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/script-animation.js', array(), time(), true);
}

// Get customizer options from parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);

    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

// SKROLLR - PARALLAX LOGO
function enqueue_skrollr()
{
    wp_enqueue_script('skrollr', get_stylesheet_directory_uri() . '/js/skrollr.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_skrollr');

// FAVICON - CHAT BLEU
function add_favicon()
{
    echo '<link rel="icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" />' . "\n";
}
add_action('wp_head', 'add_favicon');

// CHARGER SWIPER INIT
function enqueue_theme_styles_scripts()
{
    // Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null);

    // Enqueue Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);

    // Enqueue your existing JavaScript file (script.js)
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles_scripts');
?>
