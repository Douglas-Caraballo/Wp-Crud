<?php
function LoadCustomScrits($hook){
    wp_register_style('wp-crud-style',plugin_dir_url(__FILE__) . 'admin/css/index.css', false);
    wp_enqueue_style('wp-crud-style');
}

function LoadCustomScritsFront(){
    wp_register_style('wp-crud-style-public',plugin_dir_url(__FILE__) . 'public/css/estilos.css', false);
    wp_enqueue_style('wp-crud-style-public');
}

add_action('admin_enqueue_scripts', 'LoadCustomScrits');
add_action('wp_enqueue_scripts', 'LoadCustomScritsFront');