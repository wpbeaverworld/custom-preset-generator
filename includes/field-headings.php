<?php 

function getHeadingsFields()
{
	return array(
		'fl_heading_text_color' => array(
			'label' 		=> __( 'Color', 'fl-automator'),
			'type' 			=> 'color',
			'default' 		=> '333333',
			'show_reset' 	=> true
		),
		'fl_heading_font_family' => array(
			'label' 		=> __( 'Font', 'fl-automator' ),
			'type' 			=> 'font',
			'default' 		=> array(
				'family' 		=> 'Helvetica',
				'weight' 		=> 400
			),
			'preview' 		=> array(
				'type' 			=> 'none'
			)
		),
		'fl_heading_font_format' => array(
			'label' 		=> __('Font Format', 'fl-automator'),
			'type' 			=> 'select',
			'default' 		=> 'none',
			'options' 		=> array(
				'none' 			=> __('Regular', 'fl-automator'),
				'capitalize' 	=> __('Capitalize', 'fl-automator'),
				'uppercase' 	=> __('Uppercase', 'fl-automator'),
				'lowercase' 	=> __('Lowercase', 'fl-automator')
			),
			'preview' 		=> array(
				'type' 			=> 'none'
			)
		),
		'fl_h1_font_size' => array(
			'type' 			=> 'text',
			'label' 		=> sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', 'fl-automator' ), 'H1' ),
			'default' 		=> '36',
			'maxlength' 	=> '3',
			'size' 			=> '4',
			'description' 	=> 'px',
			'sanitize' 		=> 'absint',
		),
		'fl_h1_line_height' => array(
			'type' 			=> 'text',
			'label' 		=> sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', 'fl-automator' ), 'H1' ),
			'default' 		=> '1.4',
			'maxlength' 	=> '4',
			'size' 			=> '4'
		),
		'fl_h1_letter_spacing' => array(
			'type' 			=> 'text',
			'label' 		=> sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', 'fl-automator' ), 'H1' ),
			'default' 		=> '0',
			'maxlength' 	=> '3',
			'size' 			=> '4',
			'description' 	=> 'px',
		),
		'fl_h2_font_size' => array(
			'type' 			=> 'text',
			'label' 		=> sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', 'fl-automator' ), 'H2' ),
			'default' 		=> '30',
			'maxlength' 	=> '3',
			'size' 			=> '4',
			'description' 	=> 'px',
			'sanitize' 		=> 'absint',
		),
		'fl_h2_line_height' => array(
			'type' 			=> 'text',
			'label' 		=> sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', 'fl-automator' ), 'H2' ),
			'default' 		=> '1.4',
			'maxlength' 	=> '4',
			'size' 			=> '4'
		),
		'fl_h2_letter_spacing' => array(
			'type' 			=> 'text',
			'label' 		=> sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', 'fl-automator' ), 'H2' ),
			'default' 		=> '0',
			'maxlength' 	=> '3',
			'size' 			=> '4',
			'description' 	=> 'px',
		),
		'fl_h3_font_size' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', 'fl-automator' ), 'H3' ),
			'default' => '24',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
			'sanitize' => 'absint',
		),
		'fl_h3_line_height' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', 'fl-automator' ), 'H3' ),
			'default' => '1.4',
			'maxlength' => '4',
			'size' => '4'
		),
		'fl_h3_letter_spacing' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', 'fl-automator' ), 'H3' ),
			'default' => '0',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
		),
		'fl_h4_font_size' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', 'fl-automator' ), 'H4' ),
			'default' => '20',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
			'sanitize' => 'absint',
		),
		'fl_h4_line_height' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', 'fl-automator' ), 'H4' ),
			'default' => '1.4',
			'maxlength' => '4',
			'size' => '4'
		),
		'fl_h4_letter_spacing' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', 'fl-automator' ), 'H4' ),
			'default' => '0',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
		),
		'fl_h5_font_size' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', 'fl-automator' ), 'H5' ),
			'default' => '18',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
			'sanitize' => 'absint',
		),
		'fl_h5_line_height' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', 'fl-automator' ), 'H5' ),
			'default' => '1.4',
			'maxlength' => '4',
			'size' => '4'
		),
		'fl_h5_letter_spacing' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', 'fl-automator' ), 'H5' ),
			'default' => '0',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
		),
		'fl_h6_font_size' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', 'fl-automator' ), 'H6' ),
			'default' => '16',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
			'sanitize' => 'absint',
		),
		'fl_h6_line_height' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', 'fl-automator' ), 'H6' ),
			'default' => '1.4',
			'maxlength' => '4',
			'size' => '4'
		),
		'fl_h6_letter_spacing' => array(
			'type' => 'text',
			'label' => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', 'fl-automator' ), 'H6' ),
			'default' => '0',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
		)
	);
}