<?php

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Widgets Labs',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
  )
);

?>