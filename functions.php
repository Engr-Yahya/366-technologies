<?php

function theme_assets()
{

  wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');

  wp_enqueue_style('responsive-style', get_template_directory_uri() . '/responsive.css', array('main-style'));

}
add_action('wp_enqueue_scripts', 'theme_assets');

