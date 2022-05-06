<?php
$taxonomies = array(
	array(
		'name'  =>  'domain',
		'post_type' => 'project',
		'public'    =>  true,
		'show_ui'   =>  true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'args'  =>  array(
			'label' =>  __('Domaine d\'activités', 'hh'),
			'hierarchical'  =>  true,
		)
	)
);

/**
 * Register Taxonomies
 */
if ($taxonomies) :
	foreach ($taxonomies as $taxonomy) :
		$taxonomy_name = acf_maybe_get($taxonomy, 'name');
		$taxonomy_cpt = acf_maybe_get($taxonomy, 'post_type');
		$taxonomy_args = acf_maybe_get($taxonomy, 'args');
		register_taxonomy($taxonomy_name, $taxonomy_cpt, $taxonomy_args);
	endforeach;
endif;
