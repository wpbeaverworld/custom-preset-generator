<?php

function getBackgroundFields()
{
	return array(
		'fl_body_bg_color' => array(
			'label' => __( 'Color', 'fl-automator'),
			'type' => 'color',
			'default' => 'ffffff',
			'show_reset' => true
		),
		'fl_body_bg_image' => array(
			'label' => __( 'Image', 'fl-automator'),
			'type' => 'photo'
		),
		'fl_body_bg_repeat'     => array(
			'type'          => 'select',
			'label'         => __( 'Repeat', 'fl-automator' ),
			'default'       => 'no-repeat',
			'options'       => array(
				'no-repeat'     => _x( 'None', 'Background repeat.', 'fl-automator' ),
				'repeat'        => _x( 'Tile', 'Background repeat.', 'fl-automator' ),
				'repeat-x'      => _x( 'Horizontal', 'Background repeat.', 'fl-automator' ),
				'repeat-y'      => _x( 'Vertical', 'Background repeat.', 'fl-automator' ),
			),
			'help'          => __( 'Repeat applies to how the image should display in the background. Choosing none will display the image as uploaded. Tile will repeat the image as many times as needed to fill the background horizontally and vertically. You can also specify the image to only repeat horizontally or vertically.', 'fl-automator' ),
			'preview'         => array(
				'type'            => 'none',
			),
		),
		'fl_body_bg_position'   => array(
			'type'          => 'select',
			'label'         => __( 'Position', 'fl-automator' ),
			'default'       => 'center top',
			'options'       => array(
				'left top'      => __( 'Left Top', 'fl-automator' ),
				'left center'   => __( 'Left Center', 'fl-automator' ),
				'left bottom'   => __( 'Left Bottom', 'fl-automator' ),
				'right top'     => __( 'Right Top', 'fl-automator' ),
				'right center'  => __( 'Right Center', 'fl-automator' ),
				'right bottom'  => __( 'Right Bottom', 'fl-automator' ),
				'center top'    => __( 'Center Top', 'fl-automator' ),
				'center center' => __( 'Center', 'fl-automator' ),
				'center bottom' => __( 'Center Bottom', 'fl-automator' ),
			),
			'help'          => __( 'Position will tell the image where it should sit in the background.', 'fl-automator' ),
			'preview'         => array(
				'type'            => 'none',
			),
		),
		'fl_body_bg_attachment' => array(
			'type'          => 'select',
			'label'         => __( 'Attachment', 'fl-automator' ),
			'default'       => 'scroll',
			'options'       => array(
				'scroll'        => __( 'Scroll', 'fl-automator' ),
				'fixed'         => __( 'Fixed', 'fl-automator' ),
			),
			'help' => __( 'Attachment will specify how the image reacts when scrolling a page. When scrolling is selected, the image will scroll with page scrolling. This is the default setting. Fixed will allow the image to scroll within the background if fill is selected in the scale setting.', 'fl-automator' )
		),
		'fl_body_bg_size'       => array(
			'type'          => 'select',
			'label'         => __( 'Scale', 'fl-automator' ),
			'default'       => 'auto',
			'options'       => array(
				'auto'          => _x( 'None', 'Background scale.', 'fl-automator' ),
				'contain'       => __( 'Fit', 'fl-automator' ),
				'cover'         => __( 'Fill', 'fl-automator' ),
			),
			'help' => __( 'Scale applies to how the image should display in the background. You can select either fill or fit to the background.', 'fl-automator' )
		)
	);
}