<?php
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'menu_id' => 'main-menu',
            'menu_class' => 'menu',
            'container' => 'ul',
            // 'items_wrap' => '<ul class="nav your_custom_class">%3$s</ul>',
        )
    );
?>
