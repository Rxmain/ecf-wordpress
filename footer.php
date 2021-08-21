<?php wp_footer(); ?>
<footer class="main-footer">
    <div class="container">
        <address>
            <strong><?php the_field('denonciation', 'options');?></strong><br>
            <?php the_field('business_name', 'options');?><br>
            <?php echo the_field('address', 'options');?><br>
            <?php the_field('cp_city', 'options');?><br>
            T : <a href="tel:<?php the_field('phone', 'options');?>"><?php the_field('phone', 'options');?></a>
        </address>

        <nav class="footer-nav">
            <?php get_template_part('partials/_footer-menu'); ?>
        </nav>
        <nav class="social-nav">
            <ul class="menu">
                <?php get_template_part('partials/_social-media-menu'); ?>
                <!-- <li class="menu-item"><a href="https://www.facebook.com/cefimformation/" target="_blank"><span class="screen-reader-text">Facebook du CEFIM</span><img loading="lazy"  src="img/icon-facebook.svg" alt="Facebook"></a></li>
                <li class="menu-item"><a href="https://twitter.com/cefimFormation/" target="_blank"><span class="screen-reader-text">Twitter du CEFIM</span><img loading="lazy"  src="img/icon-twitter.svg" alt="Twitter"></a></li>
                <li class="menu-item"><a href="https://www.linkedin.com/school/cefim/" target="_blank"><span class="screen-reader-text">LinkedIn du CEFIM</span><img loading="lazy"  src="img/icon-linkedin.svg" alt="LinkedIn"></a></li> -->
            </ul>
        </nav>
    </div>
</footer>
</body>
</html>