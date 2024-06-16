<footer class="footer">
    <div class="container">
        <img src="<?php
        $custom_logo_url = wp_get_attachment_image_src(get_theme_mod("custom_logo"), 'full');
        echo $custom_logo_url[0];
        ?>" alt="John Doe" class="footer__logo" />
        <nav class="footer__navigation">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'add_li_class' => 'menu__item'
                )
            );
            ?>
        </nav>
        <p class="footer__copyrights">Copyright © 2021 All right reserved</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>