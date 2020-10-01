<?php 
///wp_head y wp_footer

wp_register_style('bootstrap',get_theme_file_uri() . '/inc/bootstrap.min.css');
wp_register_style('dt_style',get_stylesheet_uri(),array('bootstrap'));


function encolar_estilos(){wp_enqueue_style('dt_style');
}

add_action('wp_enqueue_scripts','encolar_estilos');


wp_register_script ('jquery',get_theme_file_uri().'/inc/jquery.min.js','','3.5.1',true);
wp_register_script ('bootstrapjs',get_theme_file_uri().'/inc/bootstrap.min.js',['jquery'],'4.0.0',true);
wp_register_script ('dt_script',get_theme_file_uri().'/script.js',['bootstrapjs','jquery'],'',true);

function encolar_script(){

wp_enqueue_script('dt_script');
}
add_action('wp_enqueue_scripts','encolar_script');




