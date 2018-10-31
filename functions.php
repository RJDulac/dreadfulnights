<?php
function DNFiles() {
    //microtime() is a php function used here to avoid caching. Replace with version or null later.
    wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    
    wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery-3.3.1.slim.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array( 'jquery' ), "4.1.3", true);
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    //null for no depedencies and microtime() to avoid caching. Remove before deploying
    wp_enqueue_style('DNMainStyles', get_stylesheet_uri(), null, microtime());
}   
add_action('wp_enqueue_scripts', 'DNFiles');
//dynamic title tag
function dreadful_features() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'dreadful_features')
?>

