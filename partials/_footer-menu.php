<?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-menu',
            'menu_id' => 'footer-menu',
            'menu_class' => 'menu',
            'container' => 'ul',
            // 'items_wrap' => '<ul class="nav your_custom_class">%3$s</ul>',
        )
    );
?>
