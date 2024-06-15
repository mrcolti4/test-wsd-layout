<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head() ?>
    <title>John Doe - Superstar SEO</title>
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
                <?php echo the_custom_logo(0); ?>
                <ul class="header__menu menu">
                    <li class="menu__item">
                        <a href="" class="menu__link">Home</a>
                    </li>
                    <li class="menu__item">
                        <button type="button" class="menu__link menu__button">
                            About
                        </button>
                        <ul class="header__submenu submenu">
                            <li class="menu__item submenu__item">
                                <a href="" class="menu__link submenu__link">Sub item 1</a>
                            </li>
                            <li class="menu__item submenu__item">
                                <a href="" class="menu__link submenu__link">Sub item 2</a>
                            </li>
                            <li class="menu__item submenu__item">
                                <a href="" class="menu__link submenu__link">Sub item 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__link">Products</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__link">Testimonials</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>