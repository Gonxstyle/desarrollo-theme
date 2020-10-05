<?php 
///------------------------------NAVWALKER-----------------------------
if (!class_exists('wp-bootstrap-navwalker')) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

//-------------AÑADIMOS SOPORTE PARA CUSTOM HEADER---------------------
function imagen_custom_header() {
    $args = array(
        'default-image'  	=> get_template_directory_uri() . '/img/default.jpg',
        'default-text-color' => '000',
        'width'          	=> 1500,
        'height'         	=> 250,
        'flex-width'     	=> true,
        'flex-height'    	=> true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'imagen_custom_header' );


///---------------WP_HEAD Y WP_FOOTER-------------------------------------
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

///---------------------thumbnail-------------------------------------------
add_theme_support( 'post-thumbnails' );
///----------------------WIDGET-----------------------
function agregar_widgets() {
                register_sidebar( [
                                'name'          => 'widget-footer-1',
                                'id'            => 'wf1',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>'
                                ] );
                                 register_sidebar( [
                                'name'          => 'widget-footer-2',
                                'id'            => 'wf2',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>'
                                ] );
                                 register_sidebar( [
                                'name'          => 'widget-footer-3',
                                'id'            => 'wf3',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>'
                                ] );
                                 register_sidebar( [
                                'name'          => 'widget-footer-4',
                                'id'            => 'wf4',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>'
                                ] );
}

// Hook o gancho del widget para que se inicie
add_action( 'widgets_init', 'agregar_widgets' );

//--------------registrar menu--------------

function agregar_menus(){
register_nav_menus([
    'principal'=>__('principal'),
    'footer'=>__('footer')

]);
}
add_action('init','agregar_menus');
function mostrar_menu_principal(){
wp_nav_menu([
    'theme_location'    => 'principal',
        'container'       => 'div',
        'container_id'    => 'principal',
        'container_class' => 'collapse navbar-collapse justify-content-end',
        'menu_class'      => 'navbar-nav mr-auto',
        'depth'           => 2,
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
    
    
    ]);
}
function mostrar_menu_footer(){
wp_nav_menu([
    'theme_location'    => 'footer',
        'container'       => 'div',
        'container_id'    => 'footer',
        'container_class' => 'nav',
        'menu_class'      => 'navbar',
        'depth'           => 2,
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
    
    ]);
}