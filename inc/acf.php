<?php

/**
 * @Author: Sabuj
 * @Date:   2019-10-30 13:33:09
 * @Last Modified by:   sabuj
 * @Last Modified time: 2019-12-30 10:26:11
 */


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false

	));

}
