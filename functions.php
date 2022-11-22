<?php
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');
add_theme_support('excerpt');
//==> add menu in theme
function ismail_menu_init(){
  register_nav_menu('main-menu', __('Main Menu'));
  register_nav_menu('footer-1', __('Useful Links'));
  register_nav_menu('footer-2', __('Our Services'));
}
add_action('init', 'ismail_menu_init');
// include scripts and styles
include_once 'inc/enqueue-file.php';
// include bootstrap 5 nav walker
include_once 'inc/nav_menu_walker.php';
// add widgets to footer
include_once 'inc/footer_widgets.php';
// include custom posts type 
include_once 'inc/custom_posts_type.php';