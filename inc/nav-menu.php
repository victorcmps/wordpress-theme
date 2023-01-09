<?php
function main_nav_menu()
{
    register_nav_menu("top_menu", "Main Navigation Menu");
}
add_action("after_setup_theme", "main_nav_menu");
