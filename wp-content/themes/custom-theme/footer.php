<footer class="site-footer" role="contentinfo">
    <div class="container footer-inner">
        <nav class="footer-navigation" role="navigation"
            aria-label="<?php esc_attr_e('Footer Menu', 'your-theme-textdomain'); ?>">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_class' => 'footer-menu',
                'container' => false,
                'fallback_cb' => false,
            ));
            ?>
        </nav>

        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
            <?php esc_html_e('All rights reserved.', 'your-theme-textdomain'); ?>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
