<?php 

function fantastic_init(){
    load_theme_textdomain('fantastic');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','fantastic_init');


function fantastic_assets(){
    wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('fantastic-style-css', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts','fantastic_assets');

function fantastic_sidebar(){
    register_sidebar([
        'name'          => __('Footer Left','fantastic'),
        'id'            => '_footer_left',
        'description'   => __('This is the left section of footer','fantastic'),
        'before_widget' => '<section id="" class="widget-container">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5',
        'after_title'   => '</h5>'
    ]);
}
add_action( 'widgets_init', 'fantastic_sidebar' );