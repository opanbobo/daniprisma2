<?php

add_theme_support( 'post-thumbnails' );
	
add_image_size( 'img-slider-bfb', 432, 202 ); 

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
add_action( 'init', 'wpb_custom_new_menu' );