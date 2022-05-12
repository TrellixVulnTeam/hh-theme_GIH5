<?php
$post_types = array(
	array(
		'name' => 'solution',
		'args' => array(
			'labels'            => array(
				'name'          => __( 'Solutions', 'hulahoop' ),
				'singular_name' => __( 'Solution', 'hulahoop' ),
				'add_new'       => __( 'Ajouter une solution', 'hulahoop' ),
				'not_found'     => __( 'Aucune solution trouvée', 'textdomain' ),

			),
			'has_archive'       => false,
			'rewrite'           => array(
				'slug'       => 'solution',
				'with_front' => true,
			),
			'menu_icon'         => 'dashicons-editor-ul',
			'show_in_rest'      => true,
			'publicy_queriable' => true,
			'public'            => true,
			'supports'          => array(
				'excerpt',
				'title',
				'thumbnail',
				'custom-fields',
				'editor',
			),
		),
	),
);


/**
 * Register post_types
 *
 */
if ( $post_types ) :
	foreach ( $post_types as $cpt ) :
		$post_type_name = acf_maybe_get( $cpt, 'name' );
		$post_type_args = acf_maybe_get( $cpt, 'args' );
		register_post_type(
			$post_type_name,
			$post_type_args
		);
	endforeach;
endif;
