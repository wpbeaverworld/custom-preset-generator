<?php

function getSocialLinks()
{
	return array(
		'fl_social_icons_color' => array(
			'label' => __( 'Link Color', 'fl-automator'),
			'type' => 'select',
			'default' => 'mono',
			'options' => array(
				'branded' 	=> __( 'Branded', 'fl-automator' ),
				'mono' 		=> __( 'Monochrome', 'fl-automator')
			)
		),
		/* Social Links (no need to translate brand names) */
		'fl_social_facebook' => array(
			'label' => 'Facebook',
			'type' => 'text'
		),
		'fl_social_twitter' => array(
			'label' => 'Twitter',
			'type' => 'text'
		),
		'fl_social_google' => array(
			'label' => 'Google',
			'type' => 'text'
		),
		'fl_social_linkedin' => array(
			'label' => 'LinkedIn',
			'type' => 'text'
		),
		'fl_social_yelp' => array(
			'label' => 'Yelp',
			'type' => 'text'
		),
		'fl_social_xing' => array(
			'label' => 'Xing',
			'type' => 'text'
		),
		'fl_social_pinterest' => array(
			'label' => 'Pinterest',
			'type' => 'text'
		),
		'fl_social_tumblr' => array(
			'label' => 'Tumblr',
			'type' => 'text'
		),
		'fl_social_vimeo' => array(
			'label' => 'Vimeo',
			'type' => 'text'
		),
		'fl_social_youtube' => array(
			'label' => 'YouTube',
			'type' => 'text'
		),
		'fl_social_flickr' => array(
			'label' => 'Flickr',
			'type' => 'text'
		),
		'fl_social_instagram' => array(
			'label' => 'Instagram',
			'type' => 'text'
		),
		'fl_social_skype' => array(
			'label' => 'Skype',
			'type' => 'text'
		),
		'fl_social_dribbble' => array(
			'label' => 'Dribbble',
			'type' => 'text'
		),
		'fl_social_500px' => array(
			'label' => '500px',
			'type' => 'text'
		),
		'fl_social_blogger' => array(
			'label' => 'Blogger',
			'type' => 'text'
		),
		'fl_social_github' => array(
			'label' => 'Github',
			'type' => 'text'
		),
		'fl_social_rss' => array(
			'label' => 'RSS',
			'type' => 'text'
		),
		'fl_social_email' => array(
			'label' => 'Email',
			'type' => 'text'
		)
	);
}