<?php 

function getContentFields()
{
	return array(
		'fl_content_bg_color' => array(
			'label' => __( 'Background Color', 'fl-automator'),
			'type' => 'color',
			'default' => 'ffffff',
			'show_reset' => true
		),
		'fl_content_bg_opacity' => array(
			'type' => 'text',
			'label' => __( 'Background Opacity', 'fl-automator' ),
			'default' => '100',
			'description' => '%',
			'maxlength' => '3',
			'size' => '5'
		),
		'fl_content_bg_image' => array(
			'label' => __( 'Background Image', 'fl-automator'),
			'type' => 'photo'
		),
		'fl_content_bg_repeat'     => array(
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
		'fl_content_bg_position'   => array(
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
		'fl_content_bg_attachment' => array(
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
		'fl_content_bg_size' => array(
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
	);
}

function getBlogLayoutFields()
{
	return array(
		'fl_blog_layout' => array(
			'type' => 'select',
			'label' => __( 'Sidebar Position', 'fl-automator' ),
			'default' => 'sidebar_right',
			'options' => array(
				'sidebar-right' => __( 'Sidebar Right', 'fl-automator' ),
				'sidebar-left' => __( 'Sidebar Left', 'fl-automator' ),
				'no-sidebar' => __( 'No Sidebar', 'fl-automator' ),
			),
		),
		'fl_blog_sidebar_size' => array(
			'type' => 'select',
			'label' => __( 'Sidebar Position', 'fl-automator' ),
			'default' => 'sidebar_right',
			'options' => array(
				'4'      => _x( 'Large', 'Sidebar size.', 'fl-automator' ),
				'3'      => _x( 'Medium', 'Sidebar size.', 'fl-automator' ),
				'2'      => _x( 'Small', 'Sidebar size.', 'fl-automator' ),
				'custom' => _x( 'Custom', 'Sidebar size.', 'fl-automator' ),
			),
			'toggle' => array(
				'custom' => array(
					'fields' => array( 'fl_blog_custom_sidebar_size' )
				)
			)
		),
		'fl_blog_custom_sidebar_size' => array(
			'label' => __( 'Custom Sidebar Width', 'fl-automator'),
			'type' => 'unit',
			'default' => '25',
			'placeholder' => '25',
			'sanitize' => 'absint'
		),
		'fl_blog_sidebar_display' => array(
			'type' => 'select',
			'label' => __( 'Sidebar Display', 'fl-automator' ),
			'default' => 'desktop',
			'options' => array(
				'desktop' => __( 'Desktop Only', 'fl-automator' ),
				'always' => __( 'Always', 'fl-automator' )
			)
		),
		'fl_blog_sidebar_location' => array(
			'type' => 'select',
			'label' => __( 'Sidebar Location', 'fl-automator' ),
			'default' => array( 'single','blog','search','archive'),
			'multi-select' => true,
			'options' => array(
				'blog' => __( 'Blog', 'fl-automator' ),
				'single' => __( 'Single Post', 'fl-automator' ),
				'search' => __( 'Search page', 'fl-automator' ),
				'archive' => __( 'Archives', 'fl-automator' ),
			)
		),
		'fl_blog_sidebar_location_post_types' => array(
			'type' => 'select',
			'label' => __( 'Apply Sidebar To Post Types', 'fl-automator' ),
			'default' => array_keys(cpg_get_post_types()),
			'multi-select' => true,
			'options' => cpg_get_post_types()
		),
		'fl_blog_post_author' => array(
			'type' => 'select',
			'label' => __( 'Post Author', 'fl-automator' ),
			'default' => 'visible',
			'options' => array(
				'visible' => __( 'Visible', 'fl-automator' ),
				'hidden' => __( 'Hidden', 'fl-automator' )
			)
		),
		'fl_blog_post_date' => array(
			'type' => 'select',
			'label' => __( 'Post Date', 'fl-automator' ),
			'default' => 'visible',
			'options' => array(
				'visible' => __( 'Visible', 'fl-automator' ),
				'hidden' => __( 'Hidden', 'fl-automator' )
			)
		),
		'fl_blog_comment_count' => array(
			'type' => 'select',
			'label' => __( 'Comment Count', 'fl-automator' ),
			'default' => 'visible',
			'options' => array(
				'visible' => __( 'Visible', 'fl-automator' ),
				'hidden' => __( 'Hidden', 'fl-automator' )
			)
		),
	);
}

function getPostLayoutFields()
{
	return array(
		'fl_posts_show_thumbs' => array(
			'type' => 'select',
			'label' => __( 'Featured Image', 'fl-automator' ),
			'default' => '',
			'options' => array(
				'' => __( 'Hidden', 'fl-automator' ),
				'above-title' => __( 'Above Titles', 'fl-automator' ),
				'above' => __( 'Above Posts', 'fl-automator' ),
				'beside' => __( 'Beside Posts', 'fl-automator' )
			),
			'toggle' => array(
				'beside' => array(
					'fields' => array('fl_posts_thumb_size')
				)
			)
		),
		'fl_posts_thumb_size' => array(
			'type' => 'select',
			'label' => __( 'Image Size', 'fl-automator' ),
			'default' => 'thumbnail',
			'options' => single_post_image_sizes()
		),
		'fl_posts_show_cats' => array(
			'type' => 'select',
			'label' => __( 'Post Categories', 'fl-automator' ),
			'default' => 'visible',
			'options' => array(
				'visible' => __( 'Visible', 'fl-automator' ),
				'hidden' => __( 'Hidden', 'fl-automator' )
			)
		),
		'fl_posts_show_tags' => array(
			'type' => 'select',
			'label' => __( 'Post Tags', 'fl-automator' ),
			'default' => 'visible',
			'options' => array(
				'visible' => __( 'Visible', 'fl-automator' ),
				'hidden' => __( 'Hidden', 'fl-automator' )
			)
		),
		'fl_posts_show_nav' => array(
			'type' => 'select',
			'label' => __( 'Prev/Next Post Links', 'fl-automator' ),
			'default' => 'hidden',
			'options' => array(
				'visible' => __( 'Visible', 'fl-automator' ),
				'hidden' => __( 'Hidden', 'fl-automator' )
			)
		),
		'fl_posts_author_box' => array(
			'type' => 'select',
			'label' => __( 'Author Box', 'fl-automator' ),
			'default' => 'hidden',
			'options' => array(
				'visible' => __( 'Visible', 'fl-automator' ),
				'hidden' => __( 'Hidden', 'fl-automator' )
			)
		)
	);
}

function getArchiveLayoutFields()
{
	return array(
		'fl_archive_show_full' => array(
			'type' => 'select',
			'label' => __( 'Show Full Text', 'fl-automator' ),
			'help' => __( 'Whether or not to show the full post. If no, the excerpt will be shown.', 'fl-automator' ),
			'default' => '0',
			'options' => array(
				'1' => __( 'Yes', 'fl-automator' ),
				'0' => __( 'No', 'fl-automator' )
			)
		),
		'fl_archive_readmore_text' => array(
			'type' => 'text',
			'label' => __( '"Read More" Text', 'fl-automator' ),
			'default' => __( 'Read More', 'fl-automator' )
		),
		'fl_archive_show_thumbs' => array(
			'type' => 'select',
			'label' => __( 'Featured Image', 'fl-automator' ),
			'default' => 'beside',
			'options' => array(
				'' => __( 'Hidden', 'fl-automator' ),
				'above-title' => __( 'Above Titles', 'fl-automator' ),
				'above' => __( 'Above Posts', 'fl-automator' ),
				'beside' => __( 'Beside Posts', 'fl-automator' )
			),
			'toggle' => array(
				'beside' => array(
					'fields' => array('fl_archive_thumb_size')
				)
			)
		),
		'fl_archive_thumb_size' => array(
			'type' => 'select',
			'label' => __( 'Image Size', 'fl-automator' ),
			'default' => 'thumbnail',
			'options' => archive_post_image_sizes()
		)
	);
}

function getLightboxFields()
{
	return array(
		'fl_lightbox' => array(
			'type' => 'select',
			'label' => __( 'Lightbox', 'fl-automator' ),
			'default' => 'enabled',
			'options' => array(
				'disabled' => __( 'Disabled', 'fl-automator' ),
				'enabled' => __( 'Enabled', 'fl-automator' )
			)
		)
	);
}

/**
 * Get all post types
 * Excluding page & templates post type
 */
function cpg_get_post_types() {
	$ptypes = array();
	$post_types = get_post_types(array(
		'public'	=> true,
	), 'objects');

	if ( $post_types ) {
		foreach ( $post_types as $key => $post_type ) {
			$ptypes[ $post_type->name ] = $post_type->label;
		}

		// Remove post_type `product` for woocommerce since we have separate sidebar control for WooCommerce
		unset( $ptypes['product'] );
		// Remove post type `page` since sidebar is set per page where default has no sidebar.
		unset( $ptypes['page'] );
		// Remove BB plugin templates
		unset( $ptypes['fl-builder-template'] );
	}

	return $ptypes;
}