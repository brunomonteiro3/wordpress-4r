<?php
// Custom Post Type > Materia
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Matérias', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Matéria', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Matéria', 'text_domain' ),
		'name_admin_bar'        => __( 'Matéria', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar nova matéria', 'text_domain' ),
		'add_new'               => __( 'Nova matéria', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Editar matéria', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'Visualizar', 'text_domain' ),
		'search_items'          => __( 'Procurar matéria', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'materia',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Matéria', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'articles', $args );

}
add_action( 'init', 'custom_post_type', 0 );