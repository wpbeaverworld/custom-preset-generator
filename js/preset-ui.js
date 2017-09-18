(function($) {
	CustomPreset = {
		init: function()
		{
			CustomPreset._bindEvents();
		},

		_bindEvents: function() {
			$('.fl-builder-preset-button').on('click', CustomPreset._presetButtonClicked);

			$('body').delegate('.fl-builder-add-preset-button', 'click', CustomPreset._addPresetButtonClicked);
			$('body').delegate('.fl-builder-preset-settings .fl-builder-settings-save', 'click', CustomPreset._savePresetSettingsClicked);
			$('body').delegate('.fl-builder-preset-settings .fl-builder-settings-cancel', 'click', FLBuilder._cancelLayoutSettingsClicked);
		},

		_presetButtonClicked: function()
		{
			var buttons = [];

			// Add preset button
			buttons[ 10 ] = {
				'key': 'add-preset',
				'label': CustomPresetStrings.addPresetButtonTitle
			};

			// Show the lightbox.
			FLBuilder._showActionsLightbox({
				'className' : 'fl-builder-presets-actions',
				'title'     : FLBuilderStrings.actionsLightboxTitle,
				'buttons'   : buttons
			});
		},

		_addPresetButtonClicked: function()
		{
			FLBuilder._actionsLightbox.close();
			FLBuilder._showLightbox();

			FLBuilder.ajax({
				action: 'render_preset_settings'
			}, CustomPreset._presetSettingsLoaded);
		},

		_presetSettingsLoaded: function(response)
		{
			var data = JSON.parse(response);

			FLBuilder._setSettingsFormContent(data.html);
			FLBuilder._layoutSettingsInitCSS();

			FLBuilder._initSettingsValidation({
				row_width: {
					required: true,
					number: true
				},
				responsive_breakpoint: {
					required: true,
					number: true
				},
				medium_breakpoint: {
					required: true,
					number: true
				}
			});
		},

		_savePresetSettingsClicked: function()
		{
			var form     = $(this).closest('.fl-builder-settings'),
				valid    = form.validate().form(),
				settings = FLBuilder._getSettings( form );

			if(valid) {

				FLBuilder.showAjaxLoader();
				FLBuilder._layoutSettingsCSSCache = null;

				FLBuilder.ajax({
					action: 'save_preset_settings',
					settings: settings
				}, FLBuilder._savePresetSettingsComplete);

				FLBuilder._lightbox.close();
				location.reload(true);
			}
		},

		_savePresetSettingsComplete: function( response )
		{
			FLBuilderConfig.preset = JSON.parse( response );

			FLBuilder._updateLayout();
		}
	}

	$(function(){ 
		CustomPreset.init();
	});

})(jQuery);