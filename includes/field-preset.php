<?php

function getPresetFields()
{
	return array(
		'custom_preset' => array(
			'label' => __('Name', 'fl-automator'),
			'type' => 'text',
			'default' => '',
			'placeholder' => __( 'My Custom', 'fl-automator' ),
			'require' => true,
		),
		'fl_custom_preset_default' => array(
			'label' => __('Set as Default?', 'fl-automator'),
			'type' => 'select',
			'default' => 'yes',
			'options' => array(
				'yes' => __('Yes', 'fl-automator'),
				'no' => __('No', 'fl-automator')
			)
		),
		'fl_presets_remove' => array(
			'label' => __('Remove All Existing Presets?', 'fl-automator'),
			'type' => 'select',
			'default' => 'no',
			'options' => array(
				'yes' => __('Yes', 'fl-automator'),
				'no' => __('No', 'fl-automator')
			)
		)
	);
}