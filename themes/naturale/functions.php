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
  
 // Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'articulos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'articulo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Nombre del menú', 'text_domain' ),
		'name_admin_bar'        => __( 'Nombre de la barra de administración', 'text_domain' ),
		'archives'              => __( 'Archivo', 'text_domain' ),
		'attributes'            => __( 'Atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'Artículo principal', 'text_domain' ),
		'all_items'             => __( 'Todos los artículos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
		'edit_item'             => __( 'Editar elemento', 'text_domain' ),
		'update_item'           => __( 'Actualizar artículo', 'text_domain' ),
		'view_item'             => __( 'Ver ítem', 'text_domain' ),
		'view_items'            => __( 'Ver artículos', 'text_domain' ),
		'search_items'          => __( 'Buscar artículo', 'text_domain' ),
		'not_found'             => __( 'Extraviado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
		'featured_image'        => __( 'Foto principal', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
		'items_list'            => __( 'Lista de artículos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'articulo', 'text_domain' ),
		'description'           => __( 'personalizando mi sitio', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'articulo', $args );

}
add_action( 'init', 'custom_post_type', 0 );

?>
