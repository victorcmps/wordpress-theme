<?php

/**
* Registers the menu
*/
function wpb_custom_new_menu() {
    register_nav_menu('main_nav_menu',__( 'Main Nav Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );