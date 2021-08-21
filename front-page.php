<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

    <main id="main-content">
        <section class="home-hero inverted" style="background-image: url('<?php the_field("full_width_image"); ?>');">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">
                        <?php if(!empty(get_field('introduction_text'))):?>
                            <?php echo the_field('introduction_text');?>
                        <?php endif;?>
                    </h1>
                    <?php 
                    $link = get_field('redirection_link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="hero-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <section class="last-news">
        <div class="container">
            <h2 class="section-title">
                <?php if(!empty(get_field('news_title'))):?>
                    <?php echo the_field('news_title');?>
                <?php endif;?>
            </h2>
            <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'orderby' => 'date'
            );
            
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) { ?>
            <?php while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>

                <article class="card">

                    <?php if( has_post_thumbnail()): ?>
                        <?php $img_id = get_post_thumbnail_id(get_the_ID('thumb-articles'));                        
                        $alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                        ?>
                        <img loading="lazy" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $alt; ?>" class="card-img">
                    <?php else: ?>
                        <img loading="lazy" src="<?php bloginfo('stylesheet_directory'); ?>/img/articles-thumb.jpg" alt="Image par défaut"/>
                    <?php endif;?>

                    <div class="card-content">
                        <p class="card-date"><time datetime="<?php echo get_the_date('d/m/Y'); ?>"><?php echo get_the_date('d/m/Y'); ?></time></p>
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p class="card-excerpt"><?php the_excerpt(); ?></p>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="card-link">Lire la suite <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>

                </article>
                    <?php } ?>
            <?php }
            wp_reset_postdata(); ?>
        </div>
    </section>
    <section class="students inverted">
        <div class="container">
            <h2 class="section-title">
                <?php if(!empty(get_field('students_title'))):?>
                    <?php echo the_field('students_title');?>
                <?php endif;?>
            </h2>
            <?php $featured_students = get_field('student_choice'); ?>      
            <?php if( $featured_students ): ?>
                <?php foreach( $featured_students as $student ): ?>
                    <?php $permalink = get_permalink($student->ID);
                        $title = get_the_title($student->ID);
                        $thumbnail_id = get_post_thumbnail_id( $student->ID );
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
                    ?>
                    <article class="student">
                        <img loading="lazy" src="<?php echo get_the_post_thumbnail_url($student->ID) ?>" alt="<?php echo $alt; ?>" class="student-img">
                        <h2 class="student-name"><?php echo $title; ?></h2>
                        <a href="<?php echo esc_url( $permalink ); ?>" class="student-link">En savoir plus</a>
                    </article>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    </section>
    <section class="modules">
        <div class="container">
            <h2 class="section-title">Les modules de la formation</h2>
            <article class="card">
                <img loading="lazy"  src="img/formation-1.jpg" alt="Some code" class="card-img" srcset="img/formation-1.jpg,
                img/formation-1_2x.jpg 2x">
                <div class="card-content">
                    <h2 class="card-title">Module HTML/CSS</h2>
                    <p class="card-excerpt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                </div>
                <a href="formation-simple.html" class="card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
            </article>
            <article class="card">
                <img loading="lazy"  src="img/formation-2.jpg" alt="A coloured keyboard" class="card-img" srcset="img/formation-2.jpg,
                img/formation-2_2x.jpg 2x">
                <div class="card-content">
                    <h2 class="card-title">Module JavaScript</h2>
                    <p class="card-excerpt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                </div>
                <a href="formation-simple.html" class="card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
            </article>
        </div>
    </section>
</main> -->

<?php get_footer(); ?>