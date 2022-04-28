<?php
if (function_exists('acf_add_local_field_group')) :

	acf_add_local_field_group(
		array(
			'key' => 'group_626aa42ee09f4',
			'title' => 'Paramètres',
			'fields' => array(
				array(
					'key' => 'field_626aa445c9ea2',
					'label' => 'Tracking',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_626aa451c9ea3',
					'label' => '',
					'name' => 'hh_tracking_gtm_id',
					'type' => 'text',
					'instructions' => 'Remplissez votre identifiant Google Tag Manager pour effectuer le suivis sur votre site',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'XXXXX',
					'prepend' => 'GTM-',
					'append' => '',
					'maxlength' => 5,
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-configuration',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
		)
	);

endif;
