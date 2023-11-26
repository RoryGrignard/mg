    
    <footer class="footer">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-nav',
                    'menu_class' => 'footer-nav'
                )
            );
        ?>
        <?php wp_footer(); ?>
        <small class="footer__copyright">
            &copy; <?php echo date('Y'); ?> Michelle Grignard
        </small>
    </footer>
    </body>
</html>