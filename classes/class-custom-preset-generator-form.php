<?php

/**
 * Creating Settings Form
 */
final class CustomPresetGeneratorForm {
	/**
	 * Sets up the plugins_loaded action to load the plugin.
	 */ 
	static public function init()
	{
		add_action( 'init', __CLASS__ . '::cpg_add_preset_settings_form' );
	}

	/**
	 * Creating the preset settings form
	 */
	static public function cpg_add_preset_settings_form()
	{
		FLBuilder::register_settings_form('preset', array(
			'title' => __( 'Preset Settings', 'custom-preset-generator' ),
			'tabs' => array(
				'custom-preset'  => array(
					'title'         => __( 'Preset', 'custom-preset-generator' ),
					'description' => __('Add or edit a custom preset for Beaver Builder Theme.', 'custom-preset-generator'),
					'sections'      => array(
						'bb_preset' => array(
							'title' => __('Preset', 'custom-preset-generator'),
							'fields' => getPresetFields()
						),
					)
				),

				'general'  => array(
					'title'         => __( 'General', 'custom-preset-generator' ),
					'sections'      => array(
						'layout' => array(
							'title' => __('Layout', 'custom-preset-generator'),
							'fields' => getLayoutFields()
						),

						'background' => array(
							'title' => __('Background', 'custom-preset-generator'),
							'fields' => getBackgroundFields()
						),

						'accent-color' => array(
							'title' => __('Accent Color', 'custom-preset-generator'),
							'fields' => getAccentColorFields()
						),

						'heading' => array(
							'title' => __('Headings', 'custom-preset-generator'),
							'fields' => getHeadingsFields()
						),

						'text' => array(
							'title' => __('Body Text', 'custom-preset-generator'),
							'fields' => getBodyTextFields()
						),

						'social-links' => array(
							'title' => __('Social Links', 'custom-preset-generator'),
							'fields' => getSocialLinks()
						),
					)
				),

				'header'  => array(
					'title'         => __( 'Header', 'custom-preset-generator' ),
					'sections'      => array(
						'topbar' => array(
							'title' => __('Topbar Layout', 'custom-preset-generator'),
							'fields' => getTopbarFields()
						),

						'topbar-style' => array(
							'title' => __('Topbar Style', 'custom-preset-generator'),
							'fields' => getTopbarStyleFields()
						),

						'header-layout' => array(
							'title' => __('Header Layout', 'custom-preset-generator'),
							'fields' => getHeaderLayoutFields()
						),
						'header-style' => array(
							'title' => __('Header Style', 'custom-preset-generator'),
							'fields' => getHeaderStyleFields()
						),

						'header-logo' => array(
							'title' => __('Header Logo', 'custom-preset-generator'),
							'fields' => getHeaderLogoFields()
						),
					)
				),

				'content'  => array(
					'title'         => __( 'Content', 'custom-preset-generator' ),
					'sections'      => array(
						'content-bg' => array(
							'title' => __('Content Background', 'custom-preset-generator'),
							'fields' => getContentFields()
						),

						'blog-layout' => array(
							'title' => __('Blog Layout', 'custom-preset-generator'),
							'fields' => getBlogLayoutFields()
						),
						
						'archive-layout' => array(
							'title' => __('Archive Layout', 'custom-preset-generator'),
							'fields' => getArchiveLayoutFields()
						),

						'posts-layout' => array(
							'title' => __('Post Layout', 'custom-preset-generator'),
							'fields' => getPostLayoutFields()
						),

						'lightbox' => array(
							'title' => __('Lightbox', 'custom-preset-generator'),
							'fields' => getLightboxFields()
						),
					)
				),

				'footer'  => array(
					'title'         => __( 'Footer', 'custom-preset-generator' ),
					'sections'      => array(
						'footer-widgets' => array(
							'title' => __('Footer Widgets', 'custom-preset-generator'),
							'fields' => getFooterWidgetsFields()
						),

						'footer' => array(
							'title' => __('Footer', 'custom-preset-generator'),
							'fields' => getFooterFields()
						)
					)
				)
			)
		));
	}
}

CustomPresetGeneratorForm::init();