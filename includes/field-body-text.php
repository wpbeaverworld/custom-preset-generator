<?php 

function getBodyTextFields()
{
	return array(
		'fl_body_text_color' => array(
			'label' => __( 'Color', 'fl-automator'),
			'type' => 'color',
			'default' => '808080',
			'show_reset' => true
		),
		'fl_body_font_family' => array(
			'label' => __( 'Font', 'fl-automator' ),
			'type' => 'font',
			'default' => array(
				'family' => 'Helvetica',
				'weight' => 400
			),
			'preview' => array(
				'type' => 'none'
			)
		),
		'fl_body_font_size' => array(
			'type' => 'text',
			'label' => __( 'Font Size', 'fl-automator' ),
			'default' => '16',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
			'sanitize' => 'absint',
		),
		'fl_body_line_height' => array(
			'type' => 'text',
			'label' => __( 'Line Height', 'fl-automator' ),
			'default' => '1.45',
			'maxlength' => '4',
			'size' => '4'
		)
	);
}