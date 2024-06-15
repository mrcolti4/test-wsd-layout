<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head() ?>
    <title><?php bloginfo('name');
    echo " | ";
    bloginfo("description"); ?></title>
</head>

<body>

    <header class="header">
        <div class="header__container container">
            <div class="header__icon burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="header__navigation">
                <a class="header__logo logo" href="#">
                    <img src="<?php
                    $custom_logo_url = wp_get_attachment_image_src(get_theme_mod("custom_logo"), 'full');
                    echo $custom_logo_url[0];
                    ?>" alt="John Doe" />
                </a>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'add_li_class' => 'menu__item'
                    )
                );
                ?>

            </nav>
        </div>
    </header>