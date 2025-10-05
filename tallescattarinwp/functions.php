<?php
function tallescattarin_enqueue_assets() {
  wp_enqueue_style(
    'tallescattarin-style',
    get_template_directory_uri() . '/assets/css/main.css'
  );

}
add_filter('show_admin_bar', '__return_false');
add_action('wp_enqueue_scripts', 'tallescattarin_enqueue_assets');