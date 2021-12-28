<?php 
/*
*   Function definitions for Tranquil Spa theme.
*/
?>

<?php

if(!isset($content_width)){
    $content_width = 660;
}
function tranquilwp_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
        'primary' => __( 'Main header menu', 'tranquilqp' ),
    ) );
}

add_action('after_setup_theme','tranquilwp_setup');

function tranquil_scripts() {
    /*
    Add styles
    */

    wp_enqueue_style('bootstrap-core', get_template_directory_uri() .'/css/bootstrap.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() .'/css/custom.css');

    //Script
    wp_enqueue_script('boostrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('fontawesome', get_template_directory_uri() .'/js/fontawesome.js');
    
}

add_action('wp_enqueue_scripts','tranquil_scripts');


?>