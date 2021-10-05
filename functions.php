<?php

//LOAD CSS
function loadCSS()
{

    //HEADER
    wp_register_style(
        'header_css',
        get_template_directory_uri() . '/css/header/header.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('header_css');


    //PAGE
    wp_register_style(
        'page_css',
        get_template_directory_uri() . '/css/page/page.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('page_css');

    //BLOG
    wp_register_style(
        'blog_css',
        get_template_directory_uri() . '/css/blog/blog.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('blog_css');

    //CONTACT
    wp_register_style(
        'contact_css',
        get_template_directory_uri() . '/css/contact/contact.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('contact_css');

    //MOBILE MENU
    wp_register_style(
        'mobile_menu_css',
        get_template_directory_uri() . '/css/mobile_menu/mobile_menu.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('mobile_menu_css');


    //FOOTER
    wp_register_style(
        'footer_css',
        get_template_directory_uri() . '/css/footer/footer.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('footer_css');

    //HOMEPAGE
    wp_register_style(
        'frontpage_css',
        get_template_directory_uri() . '/css/frontpage/frontpage.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('frontpage_css');

    //GENERAL
    wp_register_style(
        'main_css',
        get_template_directory_uri() . '/css/main/main.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('main_css');
};

add_action('wp_enqueue_scripts', 'loadCSS');


add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
}




//LOAD JS
function loadJS()
{
    wp_register_script(
        'mainJS',
        get_template_directory_uri() . '/js/main.js',
        'jquery',
        false,
        true
    );
    wp_enqueue_script('mainJS');
};

add_action('wp_enqueue_scripts', 'loadJS');


//THEME OPTIONS

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);


//REGISTER SIDEBARS


function register_widget_areas()
{


    register_sidebar(array(
        'name'          => 'Page sidebar',
        'id'            => 'page-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class = "widget__title">',
        'after_title'   => '</h4>',
    ));


    register_sidebar(array(
        'name'          => 'Blog sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class = "widget__title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'register_widget_areas');
