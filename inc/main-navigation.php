<?php /*
http://codex.wordpress.org/Function_Reference/wp_nav_menu
*/
function gcc_wp_2018_main_menu () {
         wp_nav_menu(array(
        'container' => false,                   
        'items_wrap' => '<div>
        <ul class="menu vertical">%3$s</ul></div>' , 
        // menu name                 
        'theme_location' => 'main-menu',  // where it's located in the theme
    	'fallback_cb' => 'main_nav_fb'   // fallback function (see below)
	));
}
function gcc_wp_2018_information_menu () {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'items_wrap' => '<div><ul class="menu vertical" aria-labelledby="menu_information">%3$s</ul></div>' ,                  // menu name
        'theme_location' => 'information-menu',  // where it's located in the theme
    	'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
	));
}
function gcc_wp_2018_resource_menu() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'items_wrap' => '<div><ul class="menu vertical"  aria-labelledby="menu_resource">%3$s</ul></div>' ,                  // menu name
        'theme_location' => 'resource-menu',  // where it's located in the theme
        'depth' => 0,                     // limit the depth of the nav
    ));
}
function gcc_wp_2018_footer_links_menu() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'items_wrap' => '<div><ul class="menu vertical medium-horizontal">%3$s</ul></div>' ,                  // menu name
        'theme_location' => 'footer-links-menu',  // where it's located in the theme
        'depth' => 0,                     // limit the depth of the nav
    ));
}
function gcc_wp_2018_footer_calltos_menu() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'items_wrap' => '<div><ul class="action-buttons">%3$s</ul></div>' ,                  // menu name
        'theme_location' => 'footer-calltos-menu',  // where it's located in the theme
        'depth' => 0,                     // limit the depth of the nav
    ));
}
function gcc_wp_2018_top_bar_menu() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'items_wrap' => '<div><ul>%3$s</ul></div>' ,                  // menu name
        'theme_location' => 'top-bar-menu',  // where it's located in the theme
        'depth' => 0,                     // limit the depth of the nav
    ));
}
?>
