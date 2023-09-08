<?php
/* 
*them functions
*/

//Title for site
add_theme_support("title-tag");

//Theme JS and CSS Enquing
function altf_css_js_enque()
{

    //CSS
    wp_enqueue_style('altf_theme_style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), '5.3.1', 'all');
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');

    //JQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.3.1', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'altf_css_js_enque');


//Theme Function


function altf_customizer_register($wp_customize)
{
    //Logo Change
    $wp_customize->add_section('altf_header_area', array(
        'title' => __('Header Logo', 'twentytwentytwo'),
        'description' => 'Chnage logo from here.'
    ));

    $wp_customize->add_setting('altf_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/altf_logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'altf_logo', array(
        'lebel' => 'Upload your Logo',
        'setting' => 'altf_logo',
        'section' => 'altf_header_area',
    )));

    //Menu Position Control
    $wp_customize->add_section('altf_menu_align', array(
        'title' => __('Navigation Menu Position Alignment', 'twentytwentytwo'),
        'description' => 'Align Navigation menu',
    ));

    $wp_customize->add_setting('altf_menu_set', array(
        'default' => 'right_align',
    ));

    $wp_customize->add_control('altf_menu_set', array(
        'lebel' => 'Nav menu alignment',
        'description' => 'Adjust your nav menu position',
        'setting' => 'altf_menu_set',
        'section' => 'altf_menu_align',
        'type' => 'radio',
        'choices' => array(
            'left_align' => 'Left Align',
            'right_align' => 'Right Align',
            'center_align' => 'Center',

        )
    ));
}

add_action('customize_register', 'altf_customizer_register');


//Menu options
register_nav_menu('altf_main_menu', 'Main menu');
