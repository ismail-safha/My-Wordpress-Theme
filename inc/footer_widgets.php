<?php
function ismail_widgets_init(){
  for($i = 1; $i < 5; $i++){
    register_sidebar([
      'name' => 'Footer '. $i,
      'id' => 'footer_'. $i,
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h4>',
      'after_title' => '</h4>', 
    ]);
  }

}
add_action('widgets_init', 'ismail_widgets_init');