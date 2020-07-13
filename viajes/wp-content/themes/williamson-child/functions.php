<?php
/**
 * Child-Theme functions and definitions
 */

function williamson_child_scripts() {
    wp_enqueue_style( 'williamson-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'williamson_child_scripts' );
?>