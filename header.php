<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php echo get_bloginfo("description"); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cousine:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title><?php echo get_bloginfo("name"); ?> - <?php echo get_bloginfo(
     "description"
 ); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="nav-menu__menu">
        <img width="171" height="40" alt="Company's logo image" class="nav-menu__logo" src="<?php echo get_bloginfo(
            "template_url"
        ); ?>/assets/icons/site_Logo.svg" />
            <button id="nav-main-menu-button" class="nav-menu__menu-button" aria-label="Open menu">
                <img width="37" height="28" alt="" aria-hidden="true" src="<?php echo get_bloginfo(
                    "template_url"
                ); ?>/assets/icons/Icon_Menu.svg"/>
            </button>
            <div id="nav-main-menu-items" class="nav-menu__menu-items">
            <button id="nav-main-menu-button--close" class="nav-menu__menu-button nav-menu__menu-button--close" aria-label="Close the menu">
                <img width="49" height="40" alt="" aria-hidden="true" src="<?php echo get_bloginfo(
                    "template_url"
                ); ?>/assets/icons/Icon_Close.svg"/>
            </button>
                <?php wp_nav_menu([
                    "theme_location" => "main_nav_menu",
                    "container" => "nav",
                ]); ?>
            </div>
    </div>