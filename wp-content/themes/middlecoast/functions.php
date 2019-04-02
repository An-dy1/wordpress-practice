<?php

function add_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
}

// tell WP that, when loading the scripts and stylesheets, add parent theme's stylesheet
add_action('wp_enqueue_scripts', 'add_parent_styles');