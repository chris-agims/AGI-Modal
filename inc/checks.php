<?php
	
	$needed_options = array(
		'agi_modal_enabled'					=> TRUE,
		'agi_modal_using_header'			=> FALSE,
		'agi_modal_title'					=> 'Get More Information',
		'agi_modal_title_size'				=> 'h3',
		'agi_modal_use_subtitle'			=> FALSE,
		'agi_modal_subtitle'				=> '',
		'agi_modal_subtitle_size'			=> 'h4',
		'agi_modal_using_shortcode'			=> TRUE,
		'agi_modal_shortcode'				=> '',
		'agi_modal_html'					=> '',
		'agi_modal_remove_padding'			=> FALSE,
		'agi_modal_use_dark_bg'				=> TRUE,
		'agi_modal_redirect_links'			=> TRUE,
		'agi_modal_on_pages'				=> TRUE,
		'agi_modal_number_of_pages'			=> '1',
		'agi_modal_on_specified_template'	=> FALSE,
		'agi_modal_specified_template'		=> '',
		'agi_modal_on_specified_ids'		=> FALSE,
		'agi_modal_specified_ids'			=> '',
		'agi_modal_on_posts'				=> TRUE,
		'agi_modal_number_of_posts'			=> '1',
		'agi_modal_show_on_front_page'		=> TRUE,
		'agi_modal_reset_time'				=> '10',
		'agi_modal_number_of_views'			=> '2',
		'agi_modal_use_hook'				=> TRUE,
		'agi_modal_hook'					=> '#agi-modal-hook',
		'agi_modal_hook_percent'			=> '100',
		'agi_modal_include_hook_el'			=> TRUE,
		'agi_modal_time'					=> '10',
		'agi_modal_load_jquery'				=> FALSE,
		'agi_modal_is_bootstrap'			=> FALSE,
		'agi_modal_bootstrap_version'		=> '3'
	);
	
	foreach($needed_options as $option => $value) {
		if(!get_option($option)) {
			add_option($option, $value);
		}
	}
	
	if(!get_option(MYPLUGIN_VERSION_KEY)) {
		add_option(MYPLUGIN_VERSION_KEY, MYPLUGIN_VERSION_NUM);
	} else {
		update_option(MYPLUGIN_VERSION_KEY, MYPLUGIN_VERSION_NUM);
	}


