<?php
add_action( 'wp_enqueue_scripts', 'test_child_scripts');
function test_child_scripts(){
wp_enqueue_style( 'parent-styles', get_template_directory_uri() . '/style.css', array(),1.0 );
}
