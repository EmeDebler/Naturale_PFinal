<?php
//REgistro de Estilos

function register_style(){
	$theme_data = wp_get_theme();

/*Registrando estilos*/
wp_register_style('bootstrap',
get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null,'4.1.3', 'screen');
wp_register_style('fontawesome','https://use.fontawesome.com/releases/v5.1.0/css/all.css', null, '1.0.0', 'screen');
wp_register_style('googlefonts','https://fonts.googleapis.com/css?family=Dancing+Script:700|Gabriela|Vollkorn:400i,700i');
wp_register_style('main',
get_parent_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen');

/*enqueue estilos*/
wp_enqueue_style('bootstrap');
wp_enqueue_style('fontawesome');
wp_enqueue_style('googlefonts');
wp_enqueue_style('main');

}

add_action( 'wp_enqueue_scripts', 'register_style' );

//Registro de scripts

function register_scripts() {
	$theme_data = wp_get_theme();

/*deregister Scripts*/
wp_deregister_script('jquery' );
wp_deregister_script('jquery_migrate' );

/*Registrando Scripts*/

wp_register_script('bootstrap',
get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jquery_migrate'), null, true);
wp_register_script('jquery3',
get_parent_theme_file_uri('/assets/vendor/js/jquery-3.3.1.min.js'), null, '1.0.0', true);
wp_register_script('jquery_migrate', get_parent_theme_file_uri('/assets/vendor/js/jquery-migrate-3.0.1.min.js'), array('jquery3'), null, true);
wp_register_script('easingjquery', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.min.js'), array('jquery_migrate'), null, true);
wp_register_script('magnificpopup', get_parent_theme_file_uri('/assets/vendor/js/jquery.magnific-popup.min.js'), array('jquery_migrate'), null, true);
wp_register_script('mainjs', get_parent_theme_file_uri('/assets/js/scripts.js'), array('jquery3'), null, true);

//Enqueue Scripts
wp_enqueue_script('bootstrap');
wp_enqueue_script('jquery3');
wp_enqueue_script('jquery-migrate');
wp_enqueue_script('easingjquery');
wp_enqueue_script('magnificpopup');
wp_enqueue_script('mainjs');

}
add_action( 'wp_enqueue_scripts', 'register_scripts' );

//desactiva bufer de salida
remove_action ('shutdown', 'wp_ob_end_flush_all', 1);

//tamaño de img

function thumbnails_setup() {
 add_theme_support( 'post-thumbnails' );
 }
 function dl_image_sizes( $sizes ) {

 $add_sizes = array(
 'portfolio-home'    => __( 'Tamaño de las imágenes del portafolio en el home' ),
 'square'        => __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
 'post-custom-size'  => __( 'Tamaño personalizado para la imagen destada de los post' ),
 'custom-size-blog'  => __( 'Tamaño personalizado para la imagen destada de los post' )
 );
    
 return array_merge( $sizes, $add_sizes );
    
  }
  if ( function_exists( 'add_theme_support' ) ) {
  
 add_image_size( 'portfolio-home', 465, 250, true );
 add_image_size( 'square', 400, 400, true );
 add_image_size( 'post-custom-size', 800, 600, true );
 add_image_size( 'custom-size-blog', 400, 300, true );

 add_filter( 'image_size_names_choose', 'dl_image_sizes' );
  
  }
  add_action( 'after_setup_theme', 'thumbnails_setup' );

?>
