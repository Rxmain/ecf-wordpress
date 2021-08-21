<?php get_header(); ?>
    <main id="main-content" class="student-post">
        <div class="container">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php if( has_post_thumbnail()): ?>
                <?php $img_id = get_post_thumbnail_id(get_the_ID('thumb-students'));                        
                $alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                ?>
                <img loading="lazy" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $alt; ?>" class="student-post-img">
            <?php else: ?>
                <img loading="lazy" src="<?php bloginfo('stylesheet_directory'); ?>/img/articles-thumb.jpg" alt="Image par défaut" class="student-post-img"/>
            <?php endif;?>
            <!-- <img loading="lazy"  src="img/etudiant-1_2x.jpg" alt="Francine Auhi" class="student-post-img"> -->
            <h1 class="student-post-title"><?php the_title();?></h1>
            <div class="field">
                <div class="field-title">Son film</div>
                <div class="field-content">
                    <?php if(!empty(get_field('studient_movie'))):?>
                        <?php echo the_field('studient_movie');?>
                    <?php endif;?>
                </div>
            </div>
            <div class="field">
                <div class="field-title">Sa série</div>
                <div class="field-content">
                    <?php if(!empty(get_field('student_series'))):?>
                        <?php echo the_field('student_series');?>
                    <?php endif;?>
                </div>
            </div>
            <div class="field">
                <div class="field-title">Son jeu vidéo</div>
                <div class="field-content">
                    <?php if(!empty(get_field('student_video-game'))):?>
                        <?php echo the_field('student_video-game');?>
                    <?php endif;?>
                </div>
            </div>
            <div class="field">
                <div class="field-title">Son héros/héroïne</div>
                <div class="field-content">
                    <?php if(!empty(get_field('student_hero'))):?>
                        <?php echo the_field('student_hero');?>
                    <?php endif;?>
                </div>
            </div>
            <div class="field">
                <div class="field-title">Son livre</div>
                <div class="field-content">
                    <?php if(!empty(get_field('student_book'))):?>
                        <?php echo the_field('student_book');?>
                    <?php endif;?>
                </div>
            </div>
            <div class="field">
                <div class="field-title">Sa chanson</div>
                <div class="field-content">
                    <?php if(!empty(get_field('student_song'))):?>
                        <?php echo the_field('student_song');?>
                    <?php endif;?>
                </div>
            </div>
            <div class="field">
                <div class="field-title">Son application</div>
                <div class="field-content">
                    <?php if(!empty(get_field('student_app'))):?>
                        <?php echo the_field('student_app');?>
                    <?php endif;?>
                </div>
            </div>
            <div class="field">
                <div class="field-title">Son site web</div>
                <div class="field-content">
                    <?php if(!empty(get_field('student_website'))):?>
                        <?php echo the_field('student_website');?>
                    <?php endif;?>
                </div>
            </div>
            <div class="field">
                <div class="field-title">Son langage</div>
                <div class="field-content">
                    <?php if(!empty(get_field('student_language'))):?>
                        <?php echo the_field('student_language');?>
                    <?php endif;?>
                </div>
            </div>
            <div class="field">
                <div class="field-title">En deux mots</div>
                <div class="field-content">
                    <?php if(!empty(get_field('student_description'))):?>
                        <?php echo the_field('student_description');?>
                    <?php endif;?>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
	</main>
<?php get_footer();?>
