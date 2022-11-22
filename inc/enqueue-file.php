<?php

// =====>load theme styleenqueue
function load_styles(){
  wp_register_style('aos-style', get_template_directory_uri().'/assets/vendor/aos/aos.css', [], '1.0', 'all');
  wp_enqueue_style('aos-style');
  wp_register_style('bootstrap-style', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css', [], '1.0', 'all');
  wp_enqueue_style('bootstrap-style');
  wp_register_style('bootstrap-icons-style', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css', [], '1.0', 'all');
  wp_enqueue_style('bootstrap-icons-style');
  wp_register_style('boxicons-style', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css', [], '1.0', 'all');
  wp_enqueue_style('boxicons-style');
  wp_register_style('glightbox-style', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css', [], '1.0', 'all');
  wp_enqueue_style('glightbox-style');
  wp_register_style('remixicon-style', get_template_directory_uri().'/assets/vendor/remixicon/remixicon.css', [], '1.0', 'all');
  wp_enqueue_style('remixicon-style');
  wp_register_style('swiper-style', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', [], '1.0', 'all');
  wp_enqueue_style('swiper-style');
  wp_register_style('app-style', get_template_directory_uri().'/assets/css/style.css', [], '1.0', 'all');
  wp_enqueue_style('app-style');
  wp_register_style('theme-style', get_template_directory_uri().'/style.css', [], '1.0', 'all');
  wp_enqueue_style('theme-style');

}
add_action('wp_enqueue_scripts', 'load_styles');
// =====>load theme scripts
function load_scripts(){
 
  wp_register_script('purecounter_vanilla-style', get_template_directory_uri().'/assets/vendor/purecounter/purecounter_vanilla.js', [], '1.0.0', true);
  wp_enqueue_script('purecounter_vanilla-style');
  wp_register_script('aos-style', get_template_directory_uri().'/assets/vendor/aos/aos.js', [], '1.0.0', true);
  wp_enqueue_script('aos-style');
  wp_register_script('bootstrap-style', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [], '1.0.0', true);
  wp_enqueue_script('bootstrap-style');
  wp_register_script('glightbox-style', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', [], '1.0.0', true);
  wp_enqueue_script('glightbox-style');
  wp_register_script('isotope-style', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js', [], '1.0.0', true);
  wp_enqueue_script('isotope-style');
  wp_register_script('swiper-style', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', [], '1.0.0', true);
  wp_enqueue_script('swiper-style');
  wp_register_script('validate-style', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', [], '1.0.0', true);
  wp_enqueue_script('validate-style');
  wp_register_script('app-style', get_template_directory_uri().'/assets/js/main.js', [], '1.0.0', true);
  wp_enqueue_script('app-style');
  
  
}
add_action('wp_enqueue_scripts', 'load_scripts');