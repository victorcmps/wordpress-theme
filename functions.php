<?php

include "inc/nav-menu.php";

function scripts()
{
    wp_register_style(
        "style",
        get_template_directory_uri() . "/dist/css/app.css",
        [],
        1,
        "all"
    );
    wp_enqueue_style("style");

    wp_register_script(
        "app",
        get_template_directory_uri() . "/dist/js/app.js",
        [],
        1,
        true
    );
    wp_enqueue_script("app");
}
add_action("wp_enqueue_scripts", "scripts");
