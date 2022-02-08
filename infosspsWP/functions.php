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
    wp_enqueue_script('siteScript', get_template_directory_uri() . "assets/js/siteScript.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'infoSSPSRegisterScripts');

?>