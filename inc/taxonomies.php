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
				'not_found'     => __( 'Aucun type de public trouvé', 'textdomain' ),

			),
			'hierarchical' => false,
		),
	),
);

/**
 * Register Taxonomies
 */
if ( $taxonomies ) :
	foreach ( $taxonomies as $taxonomy ) :
		$taxonomy_name = acf_maybe_get( $taxonomy, 'name' );
		$taxonomy_cpt  = acf_maybe_get( $taxonomy, 'post_type' );
		$taxonomy_args = acf_maybe_get( $taxonomy, 'args' );
		register_taxonomy( $taxonomy_name, $taxonomy_cpt, $taxonomy_args );
	endforeach;
endif;
