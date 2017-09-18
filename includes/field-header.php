<?php 

function getHeaderLayoutFields()
{
	return array(
		'fl_header_layout' => array(
			'label' => __('Layout', 'fl-automator'),
			'type' => 'select',
			'default' => 'right',
			'options' => array(
				'none' => __('None', 'fl-automator'),
				'bottom' => __('Nav Bottom', 'fl-automator'),
				'right' => __('Nav Right', 'fl-automator'),
				'left' => __('Nav Left', 'fl-automator'),
				'centered' => __('Nav Centered', 'fl-automator'),
				'centered-inline-logo' => __('Nav Centered + Inline Logo', 'fl-automator'),
				'vertical-left' => __('Nav Vertical Left', 'fl-automator'),
				'vertical-right' => __('Nav Vertical Right', 'fl-automator')
			),
			'toggle' => array(
				'bottom' => array (
					'fields' => array( 'fl_fixed_header', 'fl_header_content_layout' )
				),
				'right' => array (
					'fields' => array( 'fl_fixed_header' )
				),
				'left' => array (
					'fields' => array( 'fl_fixed_header' )
				),
				'centered' => array (
					'fields' => array( 'fl_fixed_header' )
				),
				'centered-inline-logo' => array (
					'fields' => array( 'fl_inline_logo_side', 'fl_fixed_header' )
				),
				'vertical-right' => array (
					'fields' => array( 'fl_vertical_header_width', 'fl_header_logo_top_spacing', 'fl_nav_shadow_size', 'fl_nav_shadow_color' )
				),
				'vertical-left' => array (
					'fields' => array( 'fl_vertical_header_width', 'fl_header_logo_top_spacing', 'fl_nav_shadow_size', 'fl_nav_shadow_color' )
				)
			)
		),
		'fl_inline_logo_side' => array(
			'label' => __('Inline Logo Position', 'fl-automator'),
			'type' => 'select',
			'default' => 'right',
			'options' => array(
				'left'     => __('Left', 'fl-automator'),
				'right'    => __('Right', 'fl-automator')
			),
			'help' => __('The inline logo will appear on the left or right side of odd menu items.', 'fl-automator')
		),
		'fl_vertical_header_width' => array(
			'label' => __('Vertical Nav Width', 'fl-automator'),
			'type' => 'unit',
			'default' => 230,
			'description' => 'px',
			'help' => __('Max width would be 400px.', 'fl-automator')
		),
		'fl_header_padding' => array(
			'label' => __('Padding', 'fl-automator'),
			'type' => 'unit',
			'default' => 30,
			'description' => 'px'
		),
		'fl_fixed_header' => array(
			'label' => __('Fixed Header', 'fl-automator'),
			'type' => 'select',
			'default' => 'fadein',
			'options' => array(
				'hidden' => _x( 'Disabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', 'fl-automator' ),
				'fadein' => _x( 'Fade In', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', 'fl-automator' ),
				'shrink' => _x( 'Shrink', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', 'fl-automator' ),
				'fixed' => _x( 'Fixed', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', 'fl-automator' )
			),
			'toggle' => array(
				'hidden' => array (
					'fields' => array( 'fl_hide_until_scroll_header' )
				),
			)
		),
		'fl_hide_until_scroll_header' => array(
			'label' => __('Hide Header Until Scroll', 'fl-automator'),
			'type' => 'select',
			'default' => 'disable',
			'options' => array(
				'disable' => __( 'Disabled', 'fl-automator' ),
				'enable' => __( 'Enabled', 'fl-automator' )
			),
			'toggle' => array(
				'enable' => array (
					'fields' => array( 'fl_scroll_distance' )
				),
			)
		),
		'fl_scroll_distance' => array(
			'label' => __( 'Scroll Distance', 'fl-automator'),
			'type' => 'unit',
			'default' => '200',
			'placeholder' => '200',
			'sanitize' => 'absint'
		),
		'fl_header_content_layout' => array(
			'label' => __('Content Layout', 'fl-automator'),
			'type' => 'select',
			'default' => 'social',
			'options' => array(
				'none' => __('None', 'fl-automator'),
				'text' => __('Text', 'fl-automator'),
				'social' => __('Social Icons', 'fl-automator'),
				'social-text' => __('Text &amp; Social Icons', 'fl-automator')
			),
			'toggle' => array(
				'text' => array (
					'fields' => array( 'fl_header_content_text' )
				),
				'social-text' => array (
					'fields' => array( 'fl_header_content_text' )
				)
			)
		),
		'fl_header_content_text' => array(
			'label' => __('Content Text', 'fl-automator'),
			'type' => 'textarea',
			'rows' => 5,
			'default' => 'Call Us! 1-800-555-5555'
		)
	);
}

function getHeaderStyleFields()
{
	return array(
		'fl_header_bg_color' => array(
			'label' => __( 'Background Color', 'fl-automator'),
			'type' => 'color',
			'default' => 'ffffff',
			'show_reset' => true
		),
		'fl_header_bg_opacity' => array(
			'type' => 'text',
			'label' => __( 'Background Opacity', 'fl-automator' ),
			'default' => '100',
			'description' => '%',
			'maxlength' => '3',
			'size' => '5'
		),
		'fl_nav_shadow_size' => array(
			'label' => __('Drop Shadow Size', 'fl-automator'),
			'type' => 'unit',
			'default' => 4
		),
		'fl_nav_shadow_color' => array(
			'label' => __( 'Drop Shadow Color', 'fl-automator'),
			'type' => 'color',
			'default' => 'cecece',
			'show_reset' => true
		),
		'fl_header_bg_gradient' => array(
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
		'fl_header_bg_image' => array(
			'label' => __( 'Image', 'fl-automator'),
			'type' => 'photo'
		),
		'fl_header_bg_repeat'     => array(
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
		'fl_header_bg_position'   => array(
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
		'fl_header_bg_attachment' => array(
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
		'fl_header_bg_size'       => array(
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
		'fl_header_text_color' => array(
			'label' => __( 'Text Color', 'fl-automator'),
			'type' => 'color',
			'default' => '808080',
			'show_reset' => true
		),
		'fl_header_link_color' => array(
			'label' => __( 'Link Color', 'fl-automator'),
			'type' => 'color',
			'default' => '808080',
			'show_reset' => true
		),
		'fl_header_hover_color' => array(
			'label' => __( 'Hover Color', 'fl-automator'),
			'type' => 'color',
			'default' => '428bca',
			'show_reset' => true
		),
	);
}

function getHeaderLogoFields()
{
	return array(
		'fl_logo_type' => array(
			'type' => 'select',
			'label' => __( 'Logo Type', 'fl-automator' ),
			'default' => 'text',
			'options' => array(
				'text' => __( 'Text', 'fl-automator' ),
				'image' => __( 'Image', 'fl-automator' )
			),
			'toggle' => array(
				'text' => array(
					'fields' => array( 'fl_logo_text', 'fl_logo_font_family', 'fl_logo_font_size')
				),
				'image' => array(
					'fields' => array( 'fl_logo_image', 'fl_logo_image_retina', 'fl_sticky_header_logo')
				)
			)
		),
		'fl_logo_image' => array(
			'label' => __('Logo Image (Regular)', 'fl-automator'),
			'type' => 'photo'
		),
		'fl_logo_image_retina' => array(
			'label' => __('Logo Image (Retina)', 'fl-automator'),
			'type' => 'photo'
		),
		'fl_sticky_header_logo' => array(
			'label' => __('Fade In Header Logo', 'fl-automator'),
			'type' => 'photo',
			'help' => __( 'Use a different logo when you have a Fade In header', 'fl-automator' )
		),
		'fl_logo_text' => array(
			'label' => __('Logo Text', 'fl-automator'),
			'type' => 'text',
			'default' => get_bloginfo('name')
		),
		'fl_logo_font_family' => array(
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
		'fl_logo_font_size' => array(
			'type' => 'text',
			'label' => __('Font Size', 'fl-automator'),
			'default' => '30',
			'maxlength' => '3',
			'size' => '4',
			'description' => 'px',
			'sanitize' => 'absint',
		),
		'fl_header_logo_top_spacing' => array(
			'label' => __( 'Logo Top Spacing', 'fl-automator'),
			'type' => 'unit',
			'default' => '30',
			'placeholder' => '30',
			'sanitize' => 'absint'
		)
	);
}