<?php 

function getAccentColorFields()
{
	return  array(
		'fl_accent' => array(
			'label' 		=> __( 'Color', 'fl-automator'),
			'type' 			=> 'color',
			'default' 		=> '666666',
			'show_reset' 	=> true
		),
		'fl_accent_hover' => array(
			'label' 		=> __( 'Hover Color', 'fl-automator'),
			'type' 			=> 'color',
			'default' 		=> '333333',
			'show_reset' 	=> true
		)
	);
}