<?php
/*
 * Plugin Name: Video Gallery
 */

register_post_type('video', array(
    'labels' => 'Video',
    'public' => true,
    'show_ui' => true,
    '_builtin' =>  true,
    'capability_type' => 'page',
    'hierarchical' => true,
    'rewrite' => false,
    'query_var' => "acf",
    'supports' => array(
        'title',
    ),
    'show_in_menu'	=> true,
));
?>