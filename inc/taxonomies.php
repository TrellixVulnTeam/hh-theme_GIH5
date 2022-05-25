<?php
$taxonomies = array(
	array(
		'name'              => 'public',
		'post_type'         => 'solution',
		'public'            => true,
		'show_ui'           => true,
		'show_in_menu'      => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'args'              => array(
			'labels'       => array(
				'name'          => __( 'Type de public', 'hulahoop' ),
				'singular_name' => __( 'Public', 'hulahoop' ),
				'add_new'       => __( 'Ajouter un type de public', 'hulahoop' ),
				'add_new_item'  => __( 'Ajouter un type de public', 'hulahoop' ),
				'not_found'     => __( 'Aucun type de public trouvé', 'hulahoop' ),

			),
			'hierarchical' => false,
		),
	),
);

/**
 * Register Taxonomies
 */
if ( $taxonomies ) :
	foreach ( $taxonomies as $current_tax ) :
		register_taxonomy( acf_maybe_get( $current_tax, 'name' ), acf_maybe_get( $current_tax, 'post_type' ), acf_maybe_get( $current_tax, 'args' ) );
	endforeach;
endif;
