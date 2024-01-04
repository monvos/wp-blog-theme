<?php

function add_theme_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('main', get_template_directory_uri() . '/main.js');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');


function register_my_menus()
{
  register_nav_menus(array(
    'main-menu' => 'Main menu'
  ));
}
/* Registrerar meny */
add_action('init', 'register_my_menus');

/* Aktiverar thumbnails */
add_theme_support('post-thumbnails');
