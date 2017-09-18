<?php 

function getTopbarFields()
{
	return array(
		'fl_topbar_layout' => array(
			'label' => __( 'Layout', 'fl-automator'),
			'type' => 'select',
			'default' => 'none',
			'options' => array(
				'none' => __('None', 'fl-automator'),
				'1-col' => __('1 Columns', 'fl-automator'),
				'2-cols' => __('2 Columns', 'fl-automator')
			),
			'toggle' => array(
				'1-col' => array(
					'fields' => array( 'fl_topbar_col1_layout' )
				),
				'2-cols' => array(
					'fields' => array( 'fl_topbar_col1_layout', 'fl_topbar_col2_layout' )
				)
			),
			'preview' => array(
				'type' => 'none'
			)
		),
		'fl_topbar_col1_layout' => array(
			'label' => sprintf( _x( 'Column %d Layout', '%d stands for column order number.', 'fl-automator' ), 1 ),
			'type' => 'select',
			'default' => 'social',
			'options' => array(
				'text' => __('Text', 'fl-automator'),
				'text-social' => __('Text &amp; Social Icons', 'fl-automator'),
				'menu' => __('Menu', 'fl-automator'),
				'menu-social' => __('Menu &amp; Social Icons', 'fl-automator'),
				'social' => __('Social Icons', 'fl-automator')
			),
			'toggle' => array(
				'text' => array(
					'fields' => array( 'fl_topbar_col1_text' )
				),
				'text-social' => array(
					'fields' => array( 'fl_topbar_col1_text' )
				)
			)
		),
		'fl_topbar_col1_text' => array(
			'label' => sprintf( _x( 'Column %d Text', '%d stands for column order number.', 'fl_buildera' ), 1 ),
			'type'  => 'textarea'
		),
		'fl_topbar_col2_layout' => array(
			'label' => sprintf( _x( 'Column %d Layout', '%d stands for column order number.', 'fl-automator' ), 2 ),
			'type' => 'select',
			'default' => 'menu',
			'options' => array(
				'text' => __('Text', 'fl-automator'),
				'text-social' => __('Text &amp; Social Icons', 'fl-automator'),
				'menu' => __('Menu', 'fl-automator'),
				'menu-social' => __('Menu &amp; Social Icons', 'fl-automator'),
				'social' => __('Social Icons', 'fl-automator')
			),
			'toggle' => array(
				'text' => array(
					'fields' => array( 'fl_topbar_col2_text' )
				),
				'text-social' => array(
					'fields' => array( 'fl_topbar_col2_text' )
				)
			)
		),
		'fl_topbar_col2_text' => array(
			'label' => sprintf( _x( 'Column %d Text', '%d stands for column order number.', 'fl_buildera' ), 2 ),
			'type'  => 'textarea',
			'rows' => 5
		)
	);
}

function getTopbarStyleFields()
{
	return array(
		'fl_topbar_bg_color' => array(
			'label' => __( 'Background Color', 'fl-automator'),
			'type' => 'color',
			'default' => 'ffffff',
			'show_reset' => true
		),
		'fl_topbar_bg_opacity' => array(
			'type' => 'text',
			'label' => __( 'Background Opacity', 'fl-automator' ),
			'default' => '100',
			'description' => '%',
			'maxlength' => '3',
			'size' => '5',
			'preview' => array(
				'type'            => 'none',
			),
		),
		'fl_topbar_bg_gradient' => array(
			'label' => __( 'Background Gradient', 'fl-automator'),
			'type' => 'select',
			'default' => '0',
			'options' => array(
				'0' => _x( 'Disabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', 'fl-automator'),
				'1' => _x( 'Enabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', 'fl-automator')
			),
			'preview' => array(
				'type' => 'none'
			)
		),
		'fl_topbar_bg_image' => array(
			'label' => __( 'Image', 'fl-automator'),
			'type' => 'photo'
		),
		'fl_topbar_bg_repeat'     => array(
			'type'          => 'select',
			'label'         => __( 'Repeat', 'fl-automator' ),
			'default'       => 'none',
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
		'fl_topbar_bg_position'   => array(
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
		'fl_topbar_bg_attachment' => array(
			'type'          => 'select',
			'label'         => __( 'Attachment', 'fl-automator' ),
			'default'       => 'scroll',
			'options'       => array(
				'scroll'        => __( 'Scroll', 'fl-automator' ),
				'fixed'         => __( 'Fixed', 'fl-automator' ),
			),
			'help'          => __( 'Attachment will specify how the image reacts when scrolling a page. When scrolling is selected, the image will scroll with page scrolling. This is the default setting. Fixed will allow the image to scroll within the background if fill is selected in the scale setting.', 'fl-automator' ),
			'preview'         => array(
				'type'            => 'none',
			),
		),
		'fl_topbar_bg_size'       => array(
			'type'          => 'select',
			'label'         => __( 'Scale', 'fl-automator' ),
			'default'       => 'auto',
			'options'       => array(
				'auto'          => _x( 'None', 'Background scale.', 'fl-automator' ),
				'contain'       => __( 'Fit', 'fl-automator' ),
				'cover'         => __( 'Fill', 'fl-automator' ),
			),
			'help'          => __( 'Scale applies to how the image should display in the background. You can select either fill or fit to the background.', 'fl-automator' ),
			'preview'         => array(
				'type'            => 'none',
			),
		),
		'fl_topbar_text_color' => array(
			'label' => __( 'Text Color', 'fl-automator'),
			'type' => 'color',
			'default' => '808080',
			'show_reset' => true
		),
		'fl_topbar_link_color' => array(
			'label' => __( 'Link Color', 'fl-automator'),
			'type' => 'color',
			'default' => '428bca',
			'show_reset' => true
		),
		'fl_topbar_hover_color' => array(
			'label' => __( 'Hover Color', 'fl-automator'),
			'type' => 'color',
			'default' => '428bca',
			'show_reset' => true
		),
	);
}