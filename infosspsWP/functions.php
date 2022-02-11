<?php

//dinamické přiřazování title stránky
function infoSSPSDynamicTitle(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'infoSSPSDynamicTitle');

//dinamické přiřazování stylů
function infoSSPSRegisterStyles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('infoSSPSStyle', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('infoSSPSFontAwesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css", array(), '5.15.4', 'all');
}

add_action('wp_enqueue_scripts', 'infoSSPSRegisterStyles');

//dinamické přiřazování scriptů
function infoSSPSRegisterScripts(){
    wp_enqueue_script('siteScript', get_template_directory_uri() . "/assets/js/siteScript.js", array(), false, true);
}

add_action('wp_enqueue_scripts', 'infoSSPSRegisterScripts');

function infoSSPSAkceType(){

$args = array(
    'labels' => array(
        'name' => 'Akce',
        'singular_name' => 'Akci',
    ),
    'hierarchical' => true,
    'menu_icon' => 'dashicons-calendar',
    'public' => true,
    'has_archive' => false,
    'supports' => array('title'),


);

register_post_type('akce', $args);

$args2 = array(
    'labels' => array(
        'name' => 'eachTeacher',
        'singular_name' => 'Učitel',
    ),
    'hierarchical' => true,
    'menu_icon' => 'dashicons-businessperson',
    'public' => true,
    'has_archive' => false,
    'supports' => array('title'),
);

register_post_type('eachteacher', $args2);

}

add_action('init', 'infoSSPSAkceType');




?>