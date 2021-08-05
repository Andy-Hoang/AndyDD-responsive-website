<?php
// ---Adding CSS and JS files----
// create a function ad_setup
function ad_setup(){
    // using Hooks
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('main', get_theme_file_uri( './js/main.js' ), NULL, '1.0.1', true);
}
// add action to tell WordPress execute 'ad-setup' 
add_action('wp_enqueue_scripts','ad_setup');


// --- Adding Theme Support---
function ad_init(){
    add_theme_support('post-thumbnails');
    // change Page Title according to each Page |need to delete <title> in header.php
    add_theme_support('title-tag');
    // add HTML to some specific elements
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}
add_action('after_setup_theme', 'ad_init');


//---Add a post type named Projects---
function ad_custom_post_type(){
    //register a new type: Project
    register_post_type('project',
        array(
            'rewrite' => array('slug' => 'projects'),
            // set lable names for options on dashboard
            'labels'  => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item'  =>  'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            // add icon for our post type
            // go to //developer.wordpress.org to know the icon names
            'menu_icon' => 'dashicons-clipboard',
            // set public so all users can see Projects post type
            'public'    => true,
            // using archive so can search by date/ category...
            'has_archive'  => true,
            // set what supports on Wordpress for this post type Projects
            'supports'  => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}
add_action('init', 'ad_custom_post_type');



//---Add Sidebar---
function ad_widgets(){
    //register Sidebar
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
    }
add_action('widgets_init', 'ad_widgets');



//--- Add Search Filters---
function search_filter($query) {
    if($query->is_search()) {
        // set query belongs to 2 post types: post or project
        $query->set('post_type', array('post', 'project'));
    }
}
add_filter('pre_get_posts', 'search_filter');
