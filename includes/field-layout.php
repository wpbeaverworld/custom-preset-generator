<?php

function getLayoutFields()
{
	return array(
		'fl_layout_width' => array(
			'label' => __( 'Width', 'fl-automator'),
			'type' => 'select',
			'default' => 'full-width',
			'options' => array(
				'boxed' => __( 'Boxed', 'fl-automator' ),
				'full-width' => __( 'Full Width', 'fl-automator')
			),
			'preview' => array(
				'type' => 'none'
			),
			'toggle' => array(
				'boxed' => array( 
					'fields' => array( 'fl_layout_spacing', 'fl_layout_shadow_size', 'fl_layout_shadow_color' )
				)
			)
		),

		'fl_content_width' => array(
			'label' => __( 'Content Width', 'fl-automator'),
			'type' => 'unit',
			'default' => '1020',
			'placeholder' => '1020',
			'description' => 'px',
			'sanitize' => 'absint',
			'preview' => array(
				'type' => 'none'
			)
		),

		'fl_layout_spacing' => array(
			'label' => __( 'Spacing', 'fl-automator'),
			'type' => 'unit',
			'default' => '0',
			'placeholder' => '0',
			'description' => 'px',
			'sanitize' => 'absint',
			'preview' => array(
				'type' => 'none'
			)
		),

		'fl_layout_shadow_size' => array(
			'label' => __( 'Drop Shadow Size', 'fl-automator'),
			'type' => 'unit',
			'default' => '0',
			'placeholder' => '0',
			'description' => 'px',
			'sanitize' => 'absint',
			'preview' => array(
				'type' => 'none'
			)
		),

		'fl_layout_shadow_color' => array(
			'label' => __( 'Drop Shadow Color', 'fl-automator'),
			'type' => 'color',
			'default' => 'd9d9d9',
			'show_reset' => true
		),

		'fl_scroll_to_top' => array(
			'label' => __( 'Scroll To Top Button', 'fl-automator'),
			'type' => 'select',
			'default' => 'disable',
			'options' => array(
				'enable' => __('Enabled', 'fl-automator'),
				'disable' => __('Disabled', 'fl-automator')
			),
			'preview' => array(
				'type' => 'none'
			)
		)
	);
}