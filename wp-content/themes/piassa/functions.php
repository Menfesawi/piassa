<?php
/**
 * 
 * Theme Functions
 * @package Piassa
 * 
 */

 function piassa_scripts(){

  wp_register_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js', [], '2.11.8', true);
wp_enqueue_script('popper-js');


    // Register styles
    wp_register_style('main-styles', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

    // Register scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery', 'popper-js'], false, true);

    // Enqueue styles
    wp_enqueue_style('main-styles');
    wp_enqueue_style('bootstrap-css');

    // Enqueue scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
 }
 add_action('wp_enqueue_scripts','piassa_scripts');