<header class="bg-white shadow">
    <div class="container mx-auto flex items-center justify-between p-4">
        <?php the_custom_logo(); ?>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => 'nav',
            'menu_class' => 'flex gap-6',
        ]);
        ?>
    </div>
</header>