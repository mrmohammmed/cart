<?php
require_once('wp-bootstrap-navwalker.php');
require get_template_directory() . '/framework/bootstrap.php';

function load_style()
{


    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('rtl', get_template_directory_uri() . '/css/bootstrap-rtl.min.css');
    wp_enqueue_style('font', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style('hover', get_template_directory_uri() . '/css/hover.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css');

    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('mediaaa', get_template_directory_uri() . '/css/media.css');


    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), null, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), null, true);
    wp_enqueue_script('bootstraping', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);

    wp_enqueue_script('owlc', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'load_style');

function smart_post_content($my_postid)
{
    $content_post = get_post($my_postid);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);

    return $content;
}


function smart_get_setting($option_id, $default_value = null)
{
    if (function_exists('fw_get_db_settings_option')) {
        return fw_get_db_settings_option($option_id, $default_value);
    } else {
        return false;
    }
}
function smart_get_meta($post_id, $option_id, $default_value = null)
{
    if (function_exists('fw_get_db_post_option')) {
        return fw_get_db_post_option($post_id, $option_id, $default_value);
    } else {
        return false;
    }
}

function adding_important_things()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'adding_important_things');



function custom_menu()
{
    register_nav_menus(array(

        'bootstrap-menu' => 'navigation-bar',
        'footer-1' => 'footer-desktop',
        'footer-2' => 'footer-mobile'
    ));
}

function navbar_header()
{
    wp_nav_menu(array(

        'theme_location' => 'bootstrap-menu',
        'menu_class' => 'navbar-nav mr-auto',
        'container' => 'false',
        'depth' => 2,
        'walker' => new wp_bootstrap_navwalker()
    ));
}

function footer_first()
{
    wp_nav_menu(array(

        'theme_location' => 'footer-1',
        'menu_class' => 'list-group list-group-horizontal',
        'container' => 'false',
        'depth' => 2,
        'walker' => new wp_bootstrap_navwalker()
    ));
}


function footer_second()
{
    wp_nav_menu(array(

        'theme_location' => 'footer-2',
        'menu_class' => 'list-group',
        'container' => 'false',
        'depth' => 2,
        'walker' => new wp_bootstrap_navwalker()
    ));
}

add_action('init', 'custom_menu');


function create_post_why()
{
  $values = array(

    'public' => true,
    'labels' => array('name' => 'لماذا تختارنا'),
    'menu_postion' => 25,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => 'true'
  );
  register_post_type('why', $values);
}
add_action('init', 'create_post_why');



function create_post_works()
{
  $values = array(

    'public' => true,
    'labels' => array('name' => 'نماذج المتاجر'),
    'menu_postion' => 25,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => 'true'
  );
  register_post_type('works', $values);
}
add_action('init', 'create_post_works');







function create_post_package()
{
  $values = array(

    'public' => true,
    'labels' => array('name' => 'باقات سفن كارت'),
    'menu_postion' => 25,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => 'true'
  );
  register_post_type('package', $values);
}
add_action('init', 'create_post_package');



function create_post_clients()
{
  $values = array(

    'public' => true,
    'labels' => array('name' => 'متاجر عملائنا'),
    'menu_postion' => 25,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => 'true'
  );
  register_post_type('clients', $values);
}
add_action('init', 'create_post_clients');



function create_post_benefits()
{
  $values = array(

    'public' => true,
    'labels' => array('name' => 'المستفيدون من التسويق بالعموله'),
    'menu_postion' => 25,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => 'true'
  );
  register_post_type('benefits', $values);
}
add_action('init', 'create_post_benefits');


function create_post_advantages()
{
  $values = array(

    'public' => true,
    'labels' => array('name' => 'مزايا التسويق بالعموله'),
    'menu_postion' => 25,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => 'true'
  );
  register_post_type('advantages', $values);
}
add_action('init', 'create_post_advantages');


function create_post_slider()
{
  $values = array(

    'public' => true,
    'labels' => array('name' => 'اسليدر'),
    'menu_postion' => 25,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => 'true'
  );
  register_post_type('slider', $values);
}
add_action('init', 'create_post_slider');








function create_post_question()
{
  $values = array(

    'public' => true,
    'labels' => array('name' => 'الاسئله المتكرره'),
    'menu_postion' => 25,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => 'true'
  );
  register_post_type('question', $values);
}
add_action('init', 'create_post_question');