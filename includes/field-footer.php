<?php 

function getFooterWidgetsFields()
{
	return array(
		'fl_footer_widgets_display' => array(
			'label' => __('Visibility', 'fl-automator'),
			'type' => 'select',
			'default' => 'all',
			'options' => array(
				'disabled' => __('Disabled', 'fl-automator'),
				'all' => __('All Pages', 'fl-automator'),
				'home' => __('Homepage Only', 'fl-automator')
			)
		),
		'fl_footer_widgets_bg_color' => array(
			'label' => __( 'Background Color', 'fl-automator'),
			'type' => 'color',
			'default' => 'ffffff',
			'show_reset' => true
		),
		'fl_footer_widgets_bg_opacity' => array(
			'type' => 'text',
			'label' => __( 'Background Opacity', 'fl-automator' ),
			'default' => '100',
			'description' => '%',
			'maxlength' => '3',
			'size' => '5',
			'preview' => array(
				'type' => 'none',
			),
		),
		'fl_footer_widgets_bg_gradient' => array(
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
		'fl_footer_widgets_bg_image' => array(
			'label' => __( 'Background Image', 'fl-automator'),
			'type' => 'photo'
		),
		'fl_footer_widgets_bg_repeat'     => array(
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
		'fl_footer_widgets_bg_position'   => array(
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
		'fl_footer_widgets_bg_attachment' => array(
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
		'fl_footer_widgets_bg_size'       => array(
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
		'fl_footer_widgets_text_color' => array(
			'label' => __( 'Text Color', 'fl-automator'),
			'type' => 'color',
			'default' => '808080',
			'show_reset' => true
		),
		'fl_footer_widgets_link_color' => array(
			'label' => __( 'Link Color', 'fl-automator'),
			'type' => 'color',
			'default' => '808080',
			'show_reset' => true
		),
		'fl_footer_widgets_hover_color' => array(
			'label' => __( 'Hover Color', 'fl-automator'),
			'type' => 'color',
			'default' => '428bca',
			'show_reset' => true
		),
	);
}

function getFooterFields()
{
	return array(
		'fl_footer_layout' => array(
			'label' => __('Layout', 'fl-automator'),
			'type' => 'select',
			'default' => '1-col',
			'options' => array(
				'none' => __( 'None', 'fl-automator' ),
				'1-col' => __( '1 Column', 'fl-automator' ),
				'2-cols' => __( '2 Columns', 'fl-automator' )
			),
			'toggle' => array(
				'1-col' => array(
					'fields' => array( 'fl_footer_col1_layout' )
				),
				'2-cols' => array(
					'fields' => array( 'fl_footer_col1_layout', 'fl_footer_col2_layout' )
				)
			)
		),
		'fl_footer_col1_layout' => array(
			'label' => sprintf( _x( 'Column %d Layout', '%d stands for column order number.', 'fl-automator' ), 1 ),
			'type' => 'select',
			'default' => 'text',
			'options' => array(
				'text' => __('Text', 'fl-automator'),
				'social' => __('Social Icons', 'fl-automator'),
				'social-text' => __('Text &amp; Social Icons', 'fl-automator'),
				'menu' => __('Menu', 'fl-automator')
			),
			'toggle' => array(
				'text' => array(
					'fields' => array( 'fl_footer_col1_text' )
				),
				'social-text' => array(
					'fields' => array( 'fl_footer_col1_text' )
				)
			)
		),
		'fl_footer_col1_text' => array(
			'label' => sprintf( _x( 'Column %d Text', '%d stands for column order number.', 'fl-automator' ), 1 ),
			'type' => 'textarea',
			'default' => '',
			'rows' => 7
		),
		'fl_footer_col2_layout' => array(
			'label' => sprintf( _x( 'Column %d Layout', '%d stands for column order number.', 'fl-automator' ), 2 ),
			'type' => 'select',
			'default' => 'menu',
			'options' => array(
				'text' => __('Text', 'fl-automator'),
				'social' => __('Social Icons', 'fl-automator'),
				'social-text' => __('Text &amp; Social Icons', 'fl-automator'),
				'menu' => __('Menu', 'fl-automator')
			),
			'toggle' => array(
				'text' => array(
					'fields' => array( 'fl_footer_col2_text' )
				),
				'social-text' => array(
					'fields' => array( 'fl_footer_col2_text' )
				)
			)
		),
		'fl_footer_col2_text' => array(
			'label' => sprintf( _x( 'Column %d Text', '%d stands for column order number.', 'fl-automator' ), 2 ),
			'type' => 'textarea',
			'default' => '1_800_555_5555 &bull; <a href="mailto:info@mydomain.com">info@mydomain.com</a>',
			'rows' => 6
		),
		'fl_footer_bg_color' => array(
			'label' => __( 'Background Color', 'fl-automator'),
			'type' => 'color',
			'default' => 'ffffff',
			'show_reset' => true
		),
		'fl_footer_bg_opacity' => array(
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
		'fl_footer_bg_gradient' => array(
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
		'fl_footer_bg_image' => array(
			'label' => __( 'Background Image', 'fl-automator'),
			'type' => 'photo'
		),
		'fl_footer_bg_repeat'     => array(
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
		'fl_footer_bg_position'   => array(
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
		'fl_footer_bg_attachment' => array(
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
		'fl_footer_bg_size'       => array(
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
		'fl_footer_text_color' => array(
			'label' => __( 'Text Color', 'fl-automator'),
			'type' => 'color',
			'default' => '808080',
			'show_reset' => true
		),
		'fl_footer_link_color' => array(
			'label' => __( 'Link Color', 'fl-automator'),
			'type' => 'color',
			'default' => '808080',
			'show_reset' => true
		),
		'fl_footer_hover_color' => array(
			'label' => __( 'Hover Color', 'fl-automator'),
			'type' => 'color',
			'default' => '428bca',
			'show_reset' => true
		),
		'fl_footer_parallax_effect' => array(
			'label' => __( 'Parallax Effect', 'fl-automator'),
			'type' => 'select',
			'default' => 'disable',
			'options' => array(
				'disable' => __('Disabled', 'fl-automator'),
				'enable' => __('Enabled', 'fl-automator')
			),
			'preview' => array(
				'type' => 'none'
			)
		),
	);
}