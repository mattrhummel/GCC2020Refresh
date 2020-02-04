<?php
if( function_exists('acf_add_options_page') ) {

	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => 2
	));

    $child = acf_add_options_page(array(
		'page_title' 	=> 'Emergency Alert',
		'menu_title'	=> 'Emergency Alert',
		'menu_slug' 	=> 'emergency-alert',
		'capability'	=> 'edit_posts',
        'parent_slug'   => $parent['menu_slug'],
 		'redirect'		=> false,
		
	));
    $child1 = acf_add_options_page(array(
		'page_title' 	=> 'Home Slides',
		'menu_title'	=> 'Home Slides',
		'menu_slug' 	=> 'home-slides',
		'capability'	=> 'edit_posts',
		'parent_slug'   => $parent['menu_slug'],
		'redirect'		=> false,
	));
    $child2 = acf_add_options_page(array(
		'page_title' 	=> 'Footer Banner',
		'menu_title'	=> 'Footer Banner',
		'menu_slug' 	=> 'banner-callto',
		'capability'	=> 'edit_posts',
		'parent_slug'   => $parent['menu_slug'],
		'redirect'		=> false,
	));
    $child3 = acf_add_options_page(array(
		'page_title' 	=> 'Full Screen Popup',
		'menu_title'	=> 'Full Screen Popup',
		'menu_slug' 	=> 'popup',
		'capability'	=> 'edit_posts',
		'parent_slug'   => $parent['menu_slug'],
		'redirect'		=> false,
	));
}
function gcc_pagination() {
    global $wp_query;
    echo paginate_links();
}
/**
 * Change WPForms capability requirement.
 *
 * @param string $cap
 * @return string
 */
function wpforms_custom_capability( $cap ) {

	// unfiltered_html by default means Editors and up.
	// See more about WordPress roles and capabilities
	// https://codex.wordpress.org/Roles_and_Capabilities
	return 'moderate_comments';
}
add_filter( 'wpforms_manage_cap', 'wpforms_custom_capability' );