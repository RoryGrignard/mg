    
    <footer class="footer bg-dawnPink">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-nav',
                    'menu_class' => 'footer-nav'
                )
            );
        ?>
        <?php wp_footer(); ?>
        <small class="border-t border-black flex justify-center mx-auto max-w-1024 py-5">
            &copy; <?php echo date('Y'); ?> Michelle Grignard
        </small>
    </footer>
    </body>
</html>