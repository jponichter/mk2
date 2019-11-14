<?php

function mk2_files() {
    wp_enqueue_script('jquery_js', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', NULL, '1.0', true);
    wp_enqueue_script('popper_js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap_js', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper_js'), '1.0', true);
    wp_enqueue_script('mdbootstrap_js', '//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js', array('jquery', 'popper_js', 'bootstrap_js'), '1.0', true);
    wp_enqueue_script('anime_min_js', get_theme_file_uri('/js/anime.min.js'), NULL, '1.0', true);
    wp_enqueue_script('app_js', get_theme_file_uri('/js/app.js'), array('jquery', 'popper_js', 'bootstrap_js', 'mdbootstrap_js', 'anime_min_js'), '1.0', true);
    wp_enqueue_script('recaptcha_js', '//www.google.com/recaptcha/api.js', NULL, '1.0', true);
    wp_enqueue_style('font_awesome_css', '//use.fontawesome.com/releases/v5.8.2/css/all.css');
    wp_enqueue_style('bootstrap_css', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('mdbootstrap_css', '//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css');
    wp_enqueue_style('style_css', get_stylesheet_uri('./style.css'));
}

add_action('wp_enqueue_scripts', 'mk2_files');

function my_enqueue() {

    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/app.js', array('jquery') );

    wp_localize_script( 'ajax-script', 'my_ajax_object',
            array( 'ajax_url' => get_template_directory_uri( 'mail.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );

?>