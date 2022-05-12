<?php
$post_types = array(
	array(
		'name' => 'project',
		'args' => array(
			'label'             => 'Projets',
			'has_archive'       => 'projets',
			'rewrite'           => array(
				'slug'       => 'projet',
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
