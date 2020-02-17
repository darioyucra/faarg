<?php

function agregar_css_js(){
wp_enqueue_style('style', get_stylesheet_uri());

wp_enqueue_style('nota', get_template_directory_uri() . '/css/nota.css');
wp_enqueue_style('notas', get_template_directory_uri() . '/css/notas.css');
wp_enqueue_style('roster', get_template_directory_uri() . '/css/roster.css');
wp_enqueue_style('torneo', get_template_directory_uri() . '/css/torneo.css');
wp_enqueue_style('fotos', get_template_directory_uri() . '/css/fotos.css');
wp_enqueue_style('estadisticas', get_template_directory_uri() . '/css/estadisticas.css');
wp_enqueue_style('contacto', get_template_directory_uri() . '/css/contacto.css');

wp_enqueue_script('slider', get_template_directory_uri() . '/js/sliderprincipal.js', array ( 'jquery' ), 1.1, false);
wp_enqueue_script('aside', get_template_directory_uri() . '/js/aside.js', array ( 'jquery' ), 1.1, false);
wp_enqueue_script('menuEquipos', get_template_directory_uri() . '/js/bannerlogos.js', array ( 'jquery' ), 1.1, false);
wp_enqueue_script('menu', get_template_directory_uri() . '/js/menu.js', array ( 'jquery' ), 1.1, false);
}
add_action('wp_enqueue_scripts', 'agregar_css_js');


//soporte imagenes destacadas

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }

 function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
function wpdocs_excerpt_more( $more ) {
    return '...Click para ver mas';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//agregar sidebar
function widgets(){
    register_sidebar(array(
        'id' => 'widgets-derecha',
        'name' => __('widgets derecha'),
        'description'   => __( 'Estadisticas liga' ),
        'before_widget' => '<div class="bloqueWidget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'widgets');

function register_my_menus() {
    register_nav_menus(
      array(
        'menu-principal' => __( 'Menu Principal' ),
        'menu-logos' => __( 'Menu Equipos' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
   
   add_filter( 'user_contactmethods', 'perfil_usuario_personalizado' );
    function perfil_usuario_personalizado( $user_contact ) {
    $user_contact['perfil_rol'] = __('Rol-Usuario'); 
    return $user_contact;

    


    
}