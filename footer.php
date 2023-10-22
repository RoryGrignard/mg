    
    <footer>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-nav',
                    'menu_class' => 'footer-nav'
                )
            );
        ?>
        <?php wp_footer(); ?>
    </footer>
    </body>
</html>