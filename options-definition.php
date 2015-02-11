<?php

/**
 * Quadro Theme Option Parameters
 * 
 * Array that holds parameters for all options for
 * Quadro. The 'type' key is used to generate
 * the proper form field markup and to sanitize
 * the user-input data properly. The 'tab' key
 * determines the Settings Page on which the
 * option appears, and the 'section' tab determines
 * the section of the Settings Page tab in which
 * the option appears.
 * 
 * @return	array	$options	array of arrays of option parameters
 */
function quadro_get_option_parameters() {

	$options = array(
		/**
		 * General Tab Options
		 */
		// Branding Section
		'logo_type' => array(
			'name' => 'logo_type',
			'title' => __( 'Logo Type', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'text' => array(
					'name' => 'gravatar',
					'title' => __( 'Gravatar + Title', 'quadro' )
				),
				'image' => array(
					'name' => 'logo',
					'title' => __( 'Logo Image', 'quadro' )
				),
				'title' => array(
					'name' => 'title',
					'title' => __( 'Only Title', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'branding',
			'tab' => 'general',
			'default' => 'title'
		),
		'logo_img' => array(
			'name' => 'logo_img',
			'title' => __( 'Logo Image File', 'quadro' ),
			'type' => 'upload',
			'description' => __('Note: Logo img should be 60px height minimum. Keep in mind that that is the maximum height the logo will have and the theme will resize it proportionally to fit into that.', 'quadro'),
			'section' => 'branding',
			'tab' => 'general',
			'default' => ''
		),
		'logo_img_retina' => array(
			'name' => 'logo_img_retina',
			'title' => __( 'Logo Image File for Retina', 'quadro' ),
			'type' => 'upload',
			'description' => __('Twice as bigger, for retina screens', 'quadro'),
			'section' => 'branding',
			'tab' => 'general',
			'default' => ''
		),
		'about_text' => array(
			'name' => 'about_text',
			'title' => __( 'About Text', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'html',
			'description' => __( 'This will appear under your logo/name on the site\'s header.', 'quadro' ),
			'section' => 'branding',
			'tab' => 'general',
			'default' => 'This is a short description about myself and what this site is about. I hope you enjoy being here!',
		),
		'favicon_img' => array(
			'name' => 'favicon_img',
			'title' => __( 'Favicon Image File', 'quadro' ),
			'type' => 'upload',
			'description' => '',
			'section' => 'branding',
			'tab' => 'general',
			'default' => ''
		),
		'custom_login_img' => array(
			'name' => 'custom_login_img',
			'title' => __( 'Custom Login Image File', 'quadro' ),
			'type' => 'upload',
			'description' => '',
			'section' => 'branding',
			'tab' => 'general',
			'default' => ''
		),
		'custom_login_img_retina' => array(
			'name' => 'custom_login_img_retina',
			'title' => __( 'Custom Login Image File for Retina', 'quadro' ),
			'type' => 'upload',
			'description' => __('Twice as bigger, for retina screens', 'quadro'),
			'section' => 'branding',
			'tab' => 'general',
			'default' => ''
		),
		// Miscelaneous Section
		'404_title' => array(
			'name' => '404_title',
			'title' => __( '404 Page Title', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => '',
			'section' => 'misc',
			'tab' => 'general',
			'default' => 'Oops! That page can&rsquo;t be found.'
		),
		'404_text' => array(
			'name' => '404_text',
			'title' => __( '404 Page Text', 'quadro' ),
			'type' => 'textarea',
			'sanitize' => 'html',
			'description' => '',
			'section' => 'misc',
			'tab' => 'general',
			'default' => '<p>It looks like nothing was found at this location. Maybe try a search?</p>'
		),
		'gmaps_enable' => array(
			'name' => 'gmaps_enable',
			'title' => __( 'Google Maps Enable', 'quadro' ),
			'type' => 'checkbox',
			'description' => __('Disabling Google Maps scripts if you are not using it can sometimes help with loading times.', 'quadro'),
			'section' => 'misc',
			'tab' => 'general',
			'default' => true
		),
		'retina_enable' => array(
			'name' => 'retina_enable',
			'title' => __( 'Retina Support Enable', 'quadro' ),
			'type' => 'checkbox',
			'description' => __('Only disable Retina Support if you want to avoid extra time dedication when uploading images to the site. Keep in mind that any image you may upload when Retina Support is disabled wont get cropped accordingly.', 'quadro'),
			'section' => 'misc',
			'tab' => 'general',
			'default' => true
		),
		'breadcrumbs_show' => array(
			'name' => 'breadcrumbs_show',
			'title' => __( 'Breadcrumbs', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'show' => array(
					'name' => 'show',
					'title' => __( 'Show', 'quadro' )
				),
				'hide' => array(
					'name' => 'hide',
					'title' => __( 'Hide', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'misc',
			'tab' => 'general',
			'default' => 'show'
		),
		'breadcrumbs_prefix' => array(
			'name' => 'breadcrumbs_prefix',
			'title' => __( 'Breadcrumbs Prefix', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __('Optional text for breadcrumbs. Ex: "You are here:"', 'quadro'),
			'section' => 'misc',
			'tab' => 'general',
			'default' => ''
		),
		'backto_enable' => array(
			'name' => 'backto_enable',
			'title' => __( 'Back-to-top Enable', 'quadro' ),
			'type' => 'checkbox',
			'description' => '',
			'section' => 'misc',
			'tab' => 'general',
			'default' => true
		),
		// Options & Content Section
		'demo_content_import' => array(
			'name' => 'demo_content_import',
			'title' => __( 'Demo Content Import', 'quadro' ),
			'type' => 'dummy_import',
			'description' => __('<br />Click "Import Dummy Content" to import most pages, posts, menus and theme settings to your WordPress install. <strong>Please be aware that this process will override your current content & options in lots of ways. It is advisable that you do this only on installs with no previous content.</strong><br />Note: Keep in mind that importing images is kind of a heavy process. It can take some time depending on your connection.<br />* If you receive a success message but don\'t see any content imported **and** you had the WordPress Importer plugin activated, give this a second run, the Importer will have used the first one to deactivate the plugin to enable this action.', 'quadro'),
			'section' => 'options',
			'tab' => 'general',
			'customizer' => 'exclude',
			'default' => ''
		),
		'backup_options' => array(
			'name' => 'backup_options',
			'title' => __( 'Backup Options', 'quadro' ),
			'type' => 'backup_options',
			'description' => '',
			'section' => 'options',
			'tab' => 'general',
			'customizer' => 'exclude',
			'default' => ''
		),
		'transfer_options' => array(
			'name' => 'transfer_options',
			'title' => __( 'Export Options', 'quadro' ),
			'type' => 'transfer_options',
			'description' => __( 'You can transfer your theme settings between different installs by copying the text inside this text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".', 'quadro' ),
			'section' => 'options',
			'tab' => 'general',
			'customizer' => 'exclude',
			'default' => ''
		),
		// Theme Updates Section
		'updates_enable' => array(
			'name' => 'updates_enable',
			'title' => __( 'Enable Updates', 'quadro' ),
			'type' => 'checkbox',
			'description' => __('Keep this checked if you want to be able to update your theme from the WordPress themes screen and get notified about new versions as they come out.', 'quadro'),
			'section' => 'updates',
			'tab' => 'general',
			'customizer' => 'exclude',
			'default' => true
		),
		'quadro_username' => array(
			'name' => 'quadro_username',
			'title' => __( 'QuadroIdeas.com Username', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Don\'t have a QuadroIdeas.com user? Get yours <a href="http://quadroideas.com" target="_blank">here</a>. <strong>Note: If you already have a username, you may need to login and register your theme before being able to update.</strong>', 'quadro' ),
			'section' => 'updates',
			'tab' => 'general',
			'customizer' => 'exclude',
			'default' => ''
		),
		'quadro_userpass' => array(
			'name' => 'quadro_userpass',
			'title' => __( 'QuadroIdeas.com Password', 'quadro' ),
			'type' => 'pass',
			'sanitize' => 'nohtml',
			'description' => '',
			'section' => 'updates',
			'tab' => 'general',
			'customizer' => 'exclude',
			'default' => ''
		),
		'user_verify' => array(
			'name' => 'user_verify',
			'title' => __( 'Verify User', 'quadro' ),
			'type' => 'usercheck',
			'sanitize' => 'nohtml',
			'description' => __( 'This step is not required. You can use it to verify you have entered your credentials correctly. <br /><strong>Once you enter your details, click "Save Settings" before checking.</strong>', 'quadro' ),
			'section' => 'updates',
			'tab' => 'general',
			'customizer' => 'exclude',
			'default' => ''
		),
		/**
		 * Layout Tab Options
		 */
		// Blog Section
		'blog_layout' => array(
			'name' => 'blog_layout',
			'title' => __( 'Blog Style', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'masonry' => array(
					'name' => 'masonry',
					'title' => __( 'Masonry', 'quadro' )
				),
				'classic' => array(
					'name' => 'classic',
					'title' => __( 'Classic', 'quadro' )
				),
				'teasers' => array(
					'name' => 'teasers',
					'title' => __( 'Teasers', 'quadro' )
				),
			),
			'description' => __('This setting applies to all multiple-posts layouts (blog, archives, search results, etc.)', 'quadro'),
			'section' => 'blog',
			'tab' => 'layout',
			'default' => 'masonry'
		),
		'blog_columns' => array(
			'name' => 'blog_columns',
			'title' => __( 'Blog Columns', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'two' => array(
					'name' => 'two',
					'title' => __( 'Two', 'quadro' )
				),
				'three' => array(
					'name' => 'three',
					'title' => __( 'Three', 'quadro' )
				),
			),
			'description' => __('This setting applies to all multiple-posts masonry layouts (blog, archives, search results, etc.)', 'quadro'),
			'section' => 'blog',
			'tab' => 'layout',
			'default' => 'two'
		),
		'masonry_margins' => array(
			'name' => 'masonry_margins',
			'title' => __( 'Masonry Margins', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'false' => array(
					'name' => 'false',
					'title' => __( 'Without Margins', 'quadro' )
				),
				'true' => array(
					'name' => 'true',
					'title' => __( 'With Margins', 'quadro' )
				),
			),
			'description' => __('This setting applies to all multiple-posts masonry layouts (blog, archives, search results, etc.)', 'quadro'),
			'section' => 'blog',
			'tab' => 'layout',
			'default' => 'true'
		),
		'blog_animation' => array(
			'name' => 'blog_animation',
			'title' => __( 'Posts Loading Animation', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'none' => array(
					'name' => 'none',
					'title' => __( 'None', 'quadro' )
				),
				'1' => array(
					'name' => '1',
					'title' => __( 'Type 1', 'quadro' )
				),
				'2' => array(
					'name' => '2',
					'title' => __( 'Type 2', 'quadro' )
				),
				'3' => array(
					'name' => '3',
					'title' => __( 'Type 3', 'quadro' )
				),
				'4' => array(
					'name' => '4',
					'title' => __( 'Type 4', 'quadro' )
				),
				'5' => array(
					'name' => '5',
					'title' => __( 'Type 5', 'quadro' )
				),
				'6' => array(
					'name' => '6',
					'title' => __( 'Type 6', 'quadro' )
				),
				'7' => array(
					'name' => '7',
					'title' => __( 'Type 7', 'quadro' )
				),
				'8' => array(
					'name' => '8',
					'title' => __( 'Type 8', 'quadro' )
				),
			),
			'description' => __('This setting applies to all multiple-posts masonry layouts (blog, archives, search results, etc.). Available in Masonry Blog Style.', 'quadro'),
			'section' => 'blog',
			'tab' => 'layout',
			'default' => '3'
		),
		'blog_sidebar' => array(
			'name' => 'blog_sidebar',
			'title' => __( 'Show Sidebar for Blog & Archives', 'quadro' ),
			'type' => 'checkbox',
			'description' => '',
			'section' => 'blog',
			'tab' => 'layout',
			'default' => true
		),
		// Single Blog Posts Section
		'single_sidebar' => array(
			'name' => 'single_sidebar',
			'title' => __( 'Syle', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'sidebar' => array(
					'name' => 'sidebar',
					'title' => __( 'With Sidebar', 'quadro' )
				),
				'fullwidth' => array(
					'name' => 'fullwidth',
					'title' => __( 'Full Width', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'single',
			'tab' => 'layout',
			'default' => 'sidebar'
		),
		// Single Post Sidebar Position
		'single_sidebar_pos' => array(
			'name' => 'single_sidebar_pos',
			'title' => __( 'Sidebar Position', 'quadro' ),
			'type' => 'radio',
			'valid_options' => array(
				'left' => array(
					'name' => 'left',
					'title' => __( 'Left', 'quadro' ),
					'description' => ''
				),
				'right' => array(
					'name' => 'right',
					'title' => __( 'Right', 'quadro' ),
					'description' => ''
				),
			),
			'description' => '',
			'section' => 'single',
			'tab' => 'layout',
			'default' => 'right'			
		),
		// Author Box on Single Posts
		'single_author_box' => array(
			'name' => 'single_author_box',
			'title' => __( 'Author Box at End of Article', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'show' => array(
					'name' => 'show',
					'title' => __( 'Show', 'quadro' )
				),
				'hide' => array(
					'name' => 'hide',
					'title' => __( 'Hide', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'single',
			'tab' => 'layout',
			'default' => 'show'
		),
		// Header Section
		'header_style' => array(
			'name' => 'header_style',
			'title' => __( 'Header Style', 'quadro' ),
			'type' => 'layout-picker',
			'path' => '/images/admin/header-styles/',
			'valid_options' => array(
				'type1' => array(
					'name' => 'type1',
					'title' => __( 'Side Header', 'quadro' ),
					'img' => 'header-style1.png',
					'description' => __( '(Keep in mind that when using the Side Header the site will not use sidebars. You can, use some widgets on the header itself, thoug. Just keep an eye on them to make them fit nicely.)', 'quadro' )
				),
				'type2' => array(
					'name' => 'type2',
					'title' => __( 'Fullwidth Header', 'quadro' ),
					'img' => 'header-style2.png',
					'description' => __( '(This option will enable the use of sidebars along the site.)', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'header',
			'tab' => 'layout',
			'default' => 'type2'			
		),
		'menu_type' => array(
			'name' => 'menu_type',
			'title' => __( 'Menu Style', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'icon' => array(
					'name' => 'icon',
					'title' => __( 'Icon', 'quadro' )
				),
				'static' => array(
					'name' => 'static',
					'title' => __( 'Static', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'header',
			'tab' => 'layout',
			'default' => 'icon'
		),
		'menu_style' => array(
			'name' => 'menu_style',
			'title' => __( 'Menu Style', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'icon' => array(
					'name' => 'style1',
					'title' => __( 'Style 1', 'quadro' )
				),
				'static' => array(
					'name' => 'style2',
					'title' => __( 'Style 2', 'quadro' )
				),
			),
			'description' => __( 'Will only apply for Static Menu on Fullwidth Header setting.', 'quadro' ),
			'section' => 'header',
			'tab' => 'layout',
			'default' => 'style1'
		),
		'header_back' => array(
			'name' => 'header_back',
			'title' => __( 'Background Image', 'quadro' ),
			'type' => 'upload',
			'description' => '',
			'section' => 'header',
			'tab' => 'layout',
			'default' => ''
		),
		'social_header_display' => array(
			'name' => 'social_header_display',
			'title' => __( 'Social Icons (show/hide)', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'show' => array(
					'name' => 'show',
					'title' => __( 'Show', 'quadro' )
				),
				'hide' => array(
					'name' => 'hide',
					'title' => __( 'Hide', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'header',
			'tab' => 'layout',
			'default' => 'show'
		),
		'search_header_display' => array(
			'name' => 'search_header_display',
			'title' => __( 'Search Field in Menu (show/hide)', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'show' => array(
					'name' => 'show',
					'title' => __( 'Show', 'quadro' )
				),
				'hide' => array(
					'name' => 'hide',
					'title' => __( 'Hide', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'header',
			'tab' => 'layout',
			'default' => 'show'
		),
		'widgt_header_display' => array(
			'name' => 'widgt_header_display',
			'title' => __( 'Widgetized Area in Header (show/hide)', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'show' => array(
					'name' => 'show',
					'title' => __( 'Show', 'quadro' )
				),
				'hide' => array(
					'name' => 'hide',
					'title' => __( 'Hide', 'quadro' )
				),
			),
			'description' => __( 'Only available for Side Header type', 'quadro' ),
			'section' => 'header',
			'tab' => 'layout',
			'default' => 'hide'
		),
		// Footer Section
		'footer_background' => array(
			'name' => 'footer_background',
			'title' => __( 'Background Color', 'quadro' ),
			'type' => 'color',
			'description' => '',
			'section' => 'footer',
			'tab' => 'layout',
			'default' => '#fff'
		),
		'footer_text_color' => array(
			'name' => 'footer_text_color',
			'title' => __( 'Text Color', 'quadro' ),
			'type' => 'color',
			'description' => '',
			'section' => 'footer',
			'tab' => 'layout',
			'default' => '#'
		),
		'footer_links_color' => array(
			'name' => 'footer_links_color',
			'title' => __( 'Links Color', 'quadro' ),
			'type' => 'color',
			'description' => '',
			'section' => 'footer',
			'tab' => 'layout',
			'default' => '#'
		),
		'copyright_text' => array(
			'name' => 'copyright_text',
			'title' => __( 'Copyright Text', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'html',
			'description' => '',
			'section' => 'footer',
			'tab' => 'layout',
			'default' => 'Proudly powered by <a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform">WordPress</a><span class="sep"> | </span>Binder PRO Theme by <a href="http://quadroideas.com/">QuadroIdeas</a>'
		),
		'widgetized_footer_display' => array(
			'name' => 'widgetized_footer_display',
			'title' => __( 'Widgetized Footer (show/hide)', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'show' => array(
					'name' => 'show',
					'title' => __( 'Show', 'quadro' )
				),
				'hide' => array(
					'name' => 'hide',
					'title' => __( 'Hide', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'footer',
			'tab' => 'layout',
			'default' => 'show'
		),
		'widgetized_footer_layout' => array(
			'name' => 'widgetized_footer_layout',
			'title' => __( 'Widgetized Footer Layout', 'quadro' ),
			'type' => 'layout-picker',
			'path' => '/images/admin/widget-layouts/',
			'valid_options' => array(
				'widg-layout2' => array(
					'name' => 'widg-layout2',
					'title' => '',
					'img' => 'widg-layout2.png',
					'description' => '3 Columns',
				),
				'widg-layout5' => array(
					'name' => 'widg-layout5',
					'title' => '',
					'img' => 'widg-layout5.png',
					'description' => '2 Columns',
				),
				'widg-layout6' => array(
					'name' => 'widg-layout6',
					'title' => '',
					'img' => 'widg-layout6.png',
					'description' => '1 Column',
				),
			),
			'description' => '',
			'section' => 'footer',
			'tab' => 'layout',
			'default' => 'widg-layout2'
		),
		'social_footer_display' => array(
			'name' => 'social_footer_display',
			'title' => __( 'Social Icons (show/hide)', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'show' => array(
					'name' => 'show',
					'title' => __( 'Show', 'quadro' )
				),
				'hide' => array(
					'name' => 'hide',
					'title' => __( 'Hide', 'quadro' )
				),
			),
			'description' => '',
			'section' => 'footer',
			'tab' => 'layout',
			'default' => 'show'
		),
		// Sidebars Section
		'quadro_sidebars' => array(
			'name' => 'quadro_sidebars',
			'title' => __( 'Manage Sidebars', 'quadro' ),
			'type' => 'repeatable',
			'repeat_fields' => array(
				'name' => array(
					'name' => 'name',
					'title' => __( 'Sidebar Name', 'quadro' ),
					'type' => 'text',
					'description' => __( 'The name will be shown at widgets page.', 'quadro' )
				),
				'slug' => array(
					'name' => 'slug',
					'title' => __( 'Sidebar Slug', 'quadro' ),
					'type' => 'text',
					'description' => __( 'Internal use. Only lowercases, digits, "-" and "_" allowed.', 'quadro' )
				),
			),
			'repeat-item' => __('Add new Sidebar', 'quadro'),
			'description' => '',
			'section' => 'sidebars',
			'tab' => 'layout',
			'default' => ''
		),
		/**
		 * Design Tab Options
		 */
		// Background Options
		'background_color' => array(
			'name' => 'background_color',
			'title' => __( 'Color', 'quadro' ),
			'type' => 'color',
			'description' => '',
			'section' => 'background',
			'tab' => 'design',
			'default' => '#eaeaea'
		),
		'background_pattern' => array(
			'name' => 'background_pattern',
			'title' => __( 'Pattern', 'quadro' ),
			'type' => 'layout-picker',
			'path' => '/images/admin/pattern-thumbs/',
			'valid_options' => quadro_get_patterns(),
			'description' => '',
			'section' => 'background',
			'tab' => 'design',
			'default' => 'none'
		),
		'background_img' => array(
			'name' => 'background_img',
			'title' => __( 'Custom Image', 'quadro' ),
			'type' => 'upload',
			'description' => __( 'Note: Uploading a custom background image will override any other background setting.', 'quadro' ),
			'section' => 'background',
			'tab' => 'design',
			'default' => ''
		),
		// Custom CSS Options
		'custom_css' => array(
			'name' => 'custom_css',
			'title' => '',
			'type' => 'textarea',
			'sanitize' => 'html',
			'description' => '',
			'section' => 'css',
			'tab' => 'design',
			'default' => '',
			'no_reset' => true
		),

		/**
		 * Typography Tab Options
		 */
		// Fonts Options
		'headings_font' => array(
			'name' => 'headings_font',
			'title' => 'Headings',
			'type' => 'font',
			'description' => '',
			'section' => 'fonts',
			'tab' => 'typography',
			'default' => 'Droid+Serif|font-family: "Droid Serif";'
		),
		'headings_weight' => array(
			'name' => 'headings_weight',
			'title' => 'Headings Weight',
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( '(Optional) Add :400 / :700 / :bold, etc.', 'quadro' ),
			'section' => 'fonts',
			'tab' => 'typography',
			'default' => ':normal, bold'
		),
		'body_font' => array(
			'name' => 'body_font',
			'title' => 'Body',
			'type' => 'font',
			'description' => '',
			'section' => 'fonts',
			'tab' => 'typography',
			'default' => 'Roboto|font-family: "Roboto";'
		),
		'body_weight' => array(
			'name' => 'body_weight',
			'title' => 'Body Weight',
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( '(Optional) Add :400, 700 / :bold, etc.', 'quadro' ),
			'section' => 'fonts',
			'tab' => 'typography',
			'default' => ':normal, bold'
		),
		'font_subset' => array(
			'name' => 'font_subset',
			'title' => __( 'Font Subset', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __('(Optional) Add :cyrillic / :greek / :cyrillic-ext / :greek-ext / :latin to enable font subsets. Only on supported Google Fonts. Multiple subsets should be separated by commas, using just one colon at the beginning.', 'quadro'),
			'section' => 'fonts',
			'tab' => 'typography',
			'default' => ''
		),
		// Font Color Options
		'links_color' => array(
			'name' => 'links_color',
			'title' => __( 'Links', 'quadro' ),
			'type' => 'color',
			'description' => '',
			'section' => 'colors',
			'tab' => 'typography',
			'default' => '#bb5551'
		),
		'hover_color' => array(
			'name' => 'hover_color',
			'title' => __( 'Links Hover', 'quadro' ),
			'type' => 'color',
			'description' => '',
			'section' => 'colors',
			'tab' => 'typography',
			'default' => '#231f20'
		),
		// Font Size Options
		'body_size' => array(
			'name' => 'body_size',
			'title' => 'Body',
			'type' => 'number',
			'min' => 8,
			'max' => 30,
			'description' => __('8 to 30 allowed.', 'quadro'),
			'section' => 'sizes',
			'tab' => 'typography',
			'default' => '18'
		),
		'site_title_size' => array(
			'name' => 'site_title_size',
			'title' => 'Site Title',
			'type' => 'number',
			'min' => 12,
			'max' => 60,
			'description' => __('12 to 60 allowed. Only for Gravatar + Title version.', 'quadro'),
			'section' => 'sizes',
			'tab' => 'typography',
			'default' => '28'
		),
		// Custom Font Options
		'custom_font_name' => array(
			'name' => 'custom_font_name',
			'title' => __( 'Font Name', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __('Just for CSS use. No spaces, please. ;)', 'quadro'),
			'section' => 'custom',
			'tab' => 'typography',
			'default' => ''
		),
		'custom_font_use_logo' => array(
			'name' => 'custom_font_use_logo',
			'title' => __( 'Use Custom Font for Logo', 'quadro' ),
			'type' => 'checkbox',
			'description' => '',
			'section' => 'custom',
			'tab' => 'typography',
			'default' => false
		),
		'custom_font_use_headings' => array(
			'name' => 'custom_font_use_headings',
			'title' => __( 'Use Custom Font for Headings', 'quadro' ),
			'type' => 'checkbox',
			'description' => '',
			'section' => 'custom',
			'tab' => 'typography',
			'default' => false
		),
		'custom_font_eot' => array(
			'name' => 'custom_font_eot',
			'title' => __( 'Font Upload .eot', 'quadro' ),
			'type' => 'upload',
			'description' => '',
			'section' => 'custom',
			'tab' => 'typography',
			'default' => ''
		),
		'custom_font_woff' => array(
			'name' => 'custom_font_woff',
			'title' => __( 'Font Upload .woff', 'quadro' ),
			'type' => 'upload',
			'description' => '',
			'section' => 'custom',
			'tab' => 'typography',
			'default' => ''
		),
		'custom_font_ttf' => array(
			'name' => 'custom_font_ttf',
			'title' => __( 'Font Upload .ttf/.otf', 'quadro' ),
			'type' => 'upload',
			'description' => '',
			'section' => 'custom',
			'tab' => 'typography',
			'default' => ''
		),
		'custom_font_svg' => array(
			'name' => 'custom_font_svg',
			'title' => __( 'Font Upload .svg', 'quadro' ),
			'type' => 'upload',
			'description' => '',
			'section' => 'custom',
			'tab' => 'typography',
			'default' => ''
		),

		/**
		 * Social Tab Options
		 */		
		// Profiles Section
		'dribbble_profile' => array(
			'name' => 'dribbble_profile',
			'title' => __( 'Dribbble Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Dribbble Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'facebook_profile' => array(
			'name' => 'facebook_profile',
			'title' => __( 'Facebook Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Facebook Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'flickr_profile' => array(
			'name' => 'flickr_profile',
			'title' => __( 'Flickr Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Flickr Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'github_profile' => array(
			'name' => 'github_profile',
			'title' => __( 'GitHub Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'GitHub Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'google-plus_profile' => array(
			'name' => 'google-plus_profile',
			'title' => __( 'Google+ Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Google+ Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'instagram_profile' => array(
			'name' => 'instagram_profile',
			'title' => __( 'Instagram Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Instagram Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'linkedin_profile' => array(
			'name' => 'linkedin_profile',
			'title' => __( 'Linked-In Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Linked-In Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'pinterest_profile' => array(
			'name' => 'pinterest_profile',
			'title' => __( 'Pinterest Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Pinterest Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'skype_profile' => array(
			'name' => 'skype_profile',
			'title' => __( 'Skype Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Skype Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'tumblr_profile' => array(
			'name' => 'tumblr_profile',
			'title' => __( 'Tumblr Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Tumblr Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'twitter_profile' => array(
			'name' => 'twitter_profile',
			'title' => __( 'Twitter Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Twitter Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'vimeo-square_profile' => array(
			'name' => 'vimeo-square_profile',
			'title' => __( 'Vimeo Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'Vimeo Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		'youtube_profile' => array(
			'name' => 'youtube_profile',
			'title' => __( 'YouTube Profile', 'quadro' ),
			'type' => 'text',
			'sanitize' => 'nohtml',
			'description' => __( 'YouTube Username', 'quadro' ),
			'section' => 'profiles',
			'tab' => 'social',
			'default' => ''
		),
		// Header Icons Section
		'header_icons_color_type' => array(
			'name' => 'header_icons_color_type',
			'title' => __( 'Color', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'brand' => array(
					'name' => 'brand',
					'title' => __( 'Brand', 'quadro' )
				),
				'custom' => array(
					'name' => 'custom',
					'title' => __( 'Custom', 'quadro' )
				),
			),
			'description' => __('Chose whether to use the original colors for each network or a custom one for all of them.', 'quadro'),
			'section' => 'header-icons',
			'tab' => 'social',
			'default' => 'brand'
		),
		'header_icons_color' => array(
			'name' => 'header_icons_color',
			'title' => __( 'Color Picker', 'quadro' ),
			'type' => 'color',
			'description' => '',
			'section' => 'header-icons',
			'tab' => 'social',
			'default' => '#b4b4b4'
		),
		// Footer Icons Section
		'footer_icons_color_type' => array(
			'name' => 'footer_icons_color_type',
			'title' => __( 'Color', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'brand' => array(
					'name' => 'brand',
					'title' => __( 'Brand', 'quadro' )
				),
				'custom' => array(
					'name' => 'custom',
					'title' => __( 'Custom', 'quadro' )
				),
			),
			'description' => __('Chose whether to use the original colors for each network or a custom one for all of them.', 'quadro'),
			'section' => 'footer-icons',
			'tab' => 'social',
			'default' => 'brand'
		),
		'footer_icons_color' => array(
			'name' => 'footer_icons_color',
			'title' => __( 'Color Picker', 'quadro' ),
			'type' => 'color',
			'description' => '',
			'section' => 'footer-icons',
			'tab' => 'social',
			'default' => '#b4b4b4'
		),
		// General Social Settings
		'social_target' => array(
			'name' => 'social_target',
			'title' => __( 'Link Target', 'quadro' ),
			'type' => 'select',
			'valid_options' => array(
				'brand' => array(
					'name' => '_self',
					'title' => __( 'Same tab ("_self")', 'quadro' )
				),
				'custom' => array(
					'name' => '_blank',
					'title' => __( 'New tab ("_blank")', 'quadro' )
				),
			),
			'description' => __('Chose whether to open the profile links in the same tab or in a new one.', 'quadro'),
			'section' => 'general-social',
			'tab' => 'social',
			'default' => '_self'
		),
		
	);
	return apply_filters( 'quadro_get_option_parameters', $options );
}


/**
 * Quadro Theme Admin Settings Page Tabs
 * 
 * Array that holds all of the tabs for the
 * Quadro Theme Settings Page. Each tab
 * key holds an array that defines the 
 * sections for each tab, including the
 * description text.
 * 
 * @return	array	$tabs	array of arrays of tab parameters
 */
function quadro_get_settings_page_tabs() {
	$tabs = array( 
		'general' => array(
			'name' => 'general',
			'title' => __( 'General', 'quadro' ),
			'sections' => array(
				'branding' => array(
					'name' => 'branding',
					'title' => __( 'Branding', 'quadro' ),
					'description' => ''
				),
				'misc' => array(
					'name' => 'misc',
					'title' => __( 'Miscelaneous', 'quadro' ),
					'description' => ''
				),
				'options' => array(
					'name' => 'options',
					'title' => __( 'Options & Content', 'quadro' ),
					'description' => ''
				),
				'updates' => array(
					'name' => 'updates',
					'title' => __( 'Theme Updates', 'quadro' ),
					'description' => ''
				),
			)
		),
		'layout' => array(
			'name' => 'layout',
			'title' => __( 'Layout', 'quadro' ),
			'sections' => array(
				'blog' => array(
					'name' => 'blog',
					'title' => __( 'Blog & Archives Options', 'quadro' ),
					'description' => __( 'Manage Blog and Archives options for Binder Pro Theme.<br /><small>(Options selected in Blog modules over your site will override these)</small>', 'quadro' )
				),
				'single' => array(
					'name' => 'single',
					'title' => __( 'Single Blog Posts', 'quadro' ),
					'description' => ''
				),
				'header' => array(
					'name' => 'header',
					'title' => __( 'Header Options', 'quadro' ),
					'description' => __( 'Manage Header options for Binder Pro Theme.', 'quadro' )
				),
				'footer' => array(
					'name' => 'footer',
					'title' => __( 'Footer Options', 'quadro' ),
					'description' => __( 'Manage Footer options for Binder Pro Theme.', 'quadro' )
				),
				'sidebars' => array(
					'name' => 'sidebars',
					'title' => __( 'Sidebars', 'quadro' ),
					'description' => __( 'Add or remove Widget Areas', 'quadro' )
				),
			)
		),
		'design' => array(
			'name' => 'design',
			'title' => __( 'Design', 'quadro' ),
			'sections' => array(
				'background' => array(
					'name' => 'background',
					'title' => __( 'Background', 'quadro' ),
					'description' => ''
				),
				'css' => array(
					'name' => 'css',
					'title' => __( 'Custom CSS', 'quadro' ),
					'description' => __( 'These CSS rules override all theme\'s CSS rules and are not deleted when you restore default settings.', 'quadro' )
				),
			)
		),
		'typography' => array(
			'name' => 'typography',
			'title' => __( 'Typography', 'quadro' ),
			'sections' => array(
				'fonts' => array(
					'name' => 'fonts',
					'title' => __( 'Font Options', 'quadro' ),
					'description' => __( 'Google Fonts (those which come after the separator mark) can be previewed <a href="https://www.google.com/fonts" title="Google Fonts">here</a>. Please check available weights for each font family before declaring them.', 'quadro' )
				),
				'colors' => array(
					'name' => 'colors',
					'title' => __( 'Colors', 'quadro' ),
					'description' => ''
				),
				'sizes' => array(
					'name' => 'sizes',
					'title' => __( 'Font Sizes', 'quadro' ),
					'description' => ''
				),
				'custom' => array(
					'name' => 'custom',
					'title' => __( 'Custom Font Upload', 'quadro' ),
					'description' => __( 'Font packages can be downloaded from sites like <a href="http://www.fontsquirrel.com/" target="_blank">Font Squirrel</a> and others. While you don\'t explicitly need to have all four font formats, uploading as many of them as you can will improve compatibility with more web browsers.', 'quadro' )
				),
			)
		),
		'social' => array(
			'name' => 'social',
			'title' => __( 'Social', 'quadro' ),
			'sections' => array(
				'profiles' => array(
					'name' => 'profiles',
					'title' => __( 'Social Networks Profiles', 'quadro' ),
					'description' => ''
				),
				'header-icons' => array(
					'name' => 'header-icons',
					'title' => __( 'Header Social Icons Settings', 'quadro' ),
					'description' => ''
				),
				'footer-icons' => array(
					'name' => 'footer-icons',
					'title' => __( 'Footer Social Icons Settings', 'quadro' ),
					'description' => ''
				),
				'general-social' => array(
					'name' => 'general-social',
					'title' => __( 'General Social Settings', 'quadro' ),
					'description' => ''
				),
			)
		),
	);
	return apply_filters( 'quadro_get_settings_page_tabs', $tabs );
}


?>
