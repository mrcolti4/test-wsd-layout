<footer class="footer">
    <div class="container">
        <img src="<?php
        $custom_logo_url = wp_get_attachment_image_src(get_theme_mod("custom_logo"), 'full');
        echo $custom_logo_url[0];
        ?>" alt="John Doe" class="footer__logo" />
        <nav class="footer__navigation">
            <ul class="footer__menu menu">
                <li class="menu__item">
                    <a href="" class="menu__link">Home</a>
                </li>
                <li class="menu__item">
                    <a href="" class="menu__link">About</a>
                </li>
                <li class="menu__item">
                    <a href="" class="menu__link">Products</a>
                </li>
                <li class="menu__item">
                    <a href="" class="menu__link">Testimonials</a>
                </li>
                <li class="menu__item">
                    <a href="" class="menu__link">Contacts</a>
                </li>
            </ul>
        </nav>
        <p class="footer__copyrights">Copyright © 2021 All right reserved</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>