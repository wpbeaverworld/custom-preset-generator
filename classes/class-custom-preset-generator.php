<?php

final class CustomPresetGenerator
{
	/**
	 * variable - keeping the value of preset settings form
	 */
	static private $preset_settings;
	
	/**
	 * init method
	 */
	static public function init()
	{
		self::$preset_settings = self::get_preset_settings();

		//print_r(self::$preset_settings);

		add_action( 'wp', 									__CLASS__ . '::cpg_add_ajax_actions', 9 );
		add_action( 'after_setup_theme', 					__CLASS__ . '::cpg_add_button_ui_bar', 99 );
		add_action( 'after_setup_theme', 					__CLASS__ . '::cpg_add_preset', 20 );
		add_action( 'after_setup_theme', 					__CLASS__ . '::cpg_remove_all_presets', 30 );
		add_action( 'customize_save_after', 				__CLASS__ . '::cpg_update_preset_settings', 20 );
		add_action( 'fl_ajax_after_save_preset_settings', 	__CLASS__ . '::cpg_update_customizer', 99 );
		add_action( 'wp_enqueue_scripts', 					__CLASS__ . '::cpg_enqueue_scripts' );

		add_filter('fl_builder_ui_js_config', function($ui_js_config){ $ui_js_config['preset'] = self::get_preset_settings(); return $ui_js_config; }, 99 );
	}

	/**
	 * Adds all callable AJAX actions.
	 */
	static public function cpg_add_ajax_actions()
	{
		//* Render the preset settings
		FLBuilderAjax::add_action( 'render_preset_settings', 'CustomPresetGenerator::render_preset_settings' );
		
		//* Saving the form data
		FLBuilderAjax::add_action( 'save_preset_settings', 'CustomPresetGenerator::cpg_save_preset_settings', array( 'settings' ) );
	}

	/**
	 * Get the preset settings.
	 */
	static public function get_preset_settings()
	{
		if ( null === self::$preset_settings ) {
			$settings = get_option( '_fl_builder_preset_settings' );
			$defaults = FLBuilderModel::get_settings_form_defaults( 'preset' );

			if ( ! $settings ) {
				$settings = array();
			}

			// Merge in defaults and cache settings
			self::$preset_settings = array_merge( (array) $defaults, (array) $settings );
			self::$preset_settings = FLBuilderModel::merge_nested_form_defaults( 'general', 'preset', self::$preset_settings );
		}

		return self::$preset_settings;
	}

	/**
	 * Renders the markup for the preset settings form.
	 */
	static public function render_preset_settings()
	{
		$settings 	= (object) self::get_preset_settings();
		$form 		= FLBuilderModel::$settings_forms['preset'];

		return FLBuilder::render_settings(array(
			'class'   	=> 'fl-builder-preset-settings',
			'title'   	=> $form['title'],
			'tabs'    	=> $form['tabs'],
			'resizable' => true,
		), $settings);
	}

	/**
	 * Save the preset settings form data.
	 */
	static public function cpg_save_preset_settings( $settings = array() )
	{
		$preset_name = isset($settings['custom_preset']) ? self::_preset_slug($settings['custom_preset']) : 'custom';
		$settings[ 'cp-' . $preset_name] = $settings;

		$old_settings = self::get_preset_settings();
		$new_settings = array_merge( (array) $old_settings, (array) $settings );

		self::$preset_settings = null;

		update_option( '_fl_builder_preset_settings', $new_settings );

		return self::get_preset_settings();
	}

	/**
	 * Adding button at title bar
	 */
	static public function cpg_add_button_ui_bar()
	{
		add_filter( 'fl_builder_ui_bar_buttons', __CLASS__ . '::cpg_ui_bar_buttons' );
	}

	static public function cpg_ui_bar_buttons( $buttons )
	{
		if( current_user_can( 'customize' ) )
		{
			$simple_ui = ! FLBuilderUserAccess::current_user_can( 'unrestricted_editing' );

			$buttons['preset'] = array( 
				'label' 	=> __('My Preset', 'custom-preset-generator'),
				'show' 		=> ! $simple_ui
			);
		}

		return $buttons;
	}

	/**
	 * Updates the preset settings when you are saving the customizer
	 */
	static public function cpg_update_preset_settings( $customize )
	{
		if( empty( self::$preset_settings ) )
			return;

		$mods = FLCustomizer::get_mods();
		foreach (self::$preset_settings as $slug => $pvalue)
		{
			if( strpos($slug, 'cp-') === false )
				continue;

			if( is_array( $mods ) && $mods['fl-preset'] == $slug )
			{
				$new_settings = array();
				foreach ($mods as $key => $value)
				{
					$id = str_replace('-', '_', $key );

					if( in_array( $key, SectionsKeys::getHexKeys() ) )
					{
						if( FLColor::is_hex( $value ) )
							$new_settings[ $id ] = FLColor::clean_hex($value);
						else
							$new_settings[ $id ] = '';
					}
					elseif( in_array( $key, SectionsKeys::getFontKeys() ) )
					{
						$weight = str_replace('family', 'weight', $key );
						$new_settings[ $id ]['family'] = $value;
						$new_settings[ $id ]['weight'] = $mods[ $weight ];
					}
					elseif( in_array( $key, SectionsKeys::getBGKeys() ) && ! empty($mods[$key]) )
					{
						$new_settings[ $id ] = attachment_url_to_postid( $mods[ $key ] );
						$new_settings[ $id . '_src' ] = $mods[ $key ];
					} else {
						$new_settings[ $id ] = $value;
					}
				}

				$new_settings = array_merge((array)$pvalue, (array)$new_settings);

				self::cpg_save_preset_settings($new_settings);
			}
		}
	}

	/**
	 * Updates the customizer
	 */
	static public function cpg_update_customizer( $keys_args )
	{
		$mods 		= get_option('theme_mods_' . get_option('stylesheet'));
		$settings 	= get_option('_fl_builder_preset_settings');

		foreach ($settings as $key => $pvalue)
		{
			if( strpos($key, 'cp-') === false )
				continue;

			if( is_array( $mods ) && ( $mods['fl-preset'] == $key || $pvalue['fl_custom_preset_default'] == "yes" ) )
			{
				$new_mods = array_merge($mods, self::_generate_settings_for_customizer( $pvalue ));

				if( $pvalue['fl_custom_preset_default'] == "yes" )
				{
					$new_mods['fl-preset'] = $key;
				}

				update_option( 'theme_mods_' . get_option( 'stylesheet' ), $new_mods );

				FLCustomizer::refresh_css();
			}
		}
	}

	/**
	 * Creates custom preset
	 */
	static public function cpg_add_preset()
	{
		if( empty( self::$preset_settings ) )
			return;
		
		foreach ( self::$preset_settings as $key => $pvalue )
		{
			if( strpos($key, 'cp-') === false )
				continue;

			$args['name'] 		= $pvalue['custom_preset'];
			$args['settings'] 	= self::_generate_settings_for_customizer( $pvalue );

			FLCustomizer::add_preset( $key, $args );
		}
	}

	/**
	 * Helper function
	 */
	static private function _generate_settings_for_customizer($pvalue = array() )
	{
		$new_settings = array();

		foreach (SectionsKeys::getKeys() as $key => $slug) {
			$id = str_replace('-', '_', $slug );

			if( empty( $pvalue[ $id ] ) )
				continue;

			if( in_array( $slug, SectionsKeys::getHexKeys() ) )
			{
				if( ! empty( $pvalue[$id] ) && is_string( $pvalue[$id] ) ) {
					$new_settings[ $slug ] = strstr($pvalue[$id], '#') ? $pvalue[$id] : '#' . $pvalue[$id];
				} else {
					$new_settings[ $slug ] = '';
				}
			}
			elseif( in_array($slug, SectionsKeys::getFontKeys() ) ) 
			{
				$weight 					= str_replace('family', 'weight', $slug);
				$new_settings[ $weight ] 	= $pvalue[$id]['weight'];
				$new_settings[ $slug ] 		= $pvalue[$id]['family'];
			}
			elseif ( in_array($slug, SectionsKeys::getBGKeys() ) && ! empty( $pvalue[$id] ) ) {
				$src_field = $id . '_src';
				$new_settings[ $slug ] = isset( $pvalue[$src_field] ) ? $pvalue[$src_field] : '' ;
			}
			else
				$new_settings[ $slug ] = ! empty( $pvalue[$id] ) ? $pvalue[$id] : '';
		}

		return $new_settings;
	}

	/**
	 * Removes all existing presets except custom & default preset
	 */
	static public function cpg_remove_all_presets()
	{
		if( empty( self::$preset_settings ) )
			return;

		$mods 				= get_option( 'theme_mods_' . get_option( 'stylesheet' ) );
		$take_action 	 	= false;
		$exclude_presets 	= array('default-dark' , 'classic' , 'modern' , 'bold' , 'stripe' , 'deluxe' , 'premier' , 'dusk' , 'midnight');
		
		foreach (self::$preset_settings as $key => $value) {
			if( strpos($key, 'cp-') === false )
				continue;

			$exclude_presets[] = $key;

			if( $take_action === false && $value['fl_presets_remove'] == "yes" && $key == $mods['fl-preset'] )
				$take_action = true;
		}

		if( $take_action === true )
		{
			foreach ( $exclude_presets as $preset )
			{
				if( $preset !== $mods['fl-preset'])
					FLCustomizer::remove_preset( $preset );
			}
		}
	}

	/**
	 * Getting the preset slug
	 */
	static private function _preset_slug( $name = '')
	{
		if( $name == '')
			$name = self::$preset_settings->custom_preset;

		$pslug = str_replace( array( ' ', '_' ), '-', mb_strtolower( trim( $name ) ) );

		return $pslug;
	}

	/**
	 * Enqueue the style and scripts file
	 */
	static public function cpg_enqueue_scripts()
	{
		if ( FLBuilderModel::is_builder_active() )
		{
			wp_enqueue_script( 'preset-ui', CPG_URL . 'js/preset-ui.js', array(), CPG_VERSION, true );
			wp_localize_script( 'preset-ui', 'CustomPresetStrings', array(
				'addPresetButtonTitle' => __( ' Add/Edit Preset', 'custom-preset-generator' )
			));
		}
	}
}

CustomPresetGenerator::init();