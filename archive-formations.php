<?php get_header(); ?>
	<main id="main-content" class="modules">
		<div class="container container-narrow">
			<h1 class="modules-title"><?php the_field('formation_page_title', 'options');?></h1>
            <div class="module-desc">
				<p><?php the_field('intro_text', 'options');?></p>
			</div>
        </div>

        <div class="container">

			<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post();?>
			
                <article class="card">
                    <?php if( has_post_thumbnail()): ?>
						<?php $img_id = get_post_thumbnail_id(get_the_ID('thumb-articles'));                        
						$alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
						?>
						<img loading="lazy" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $alt; ?>" class="card-img">
					<?php endif;?>
                    <div class="card-content">
                        <h2 class="card-title"><?php the_title();?></h2>
                        <p class="card-excerpt"><?php the_excerpt();?></p>
                    </div>
                    <a href="<?php the_permalink();?>" class="card-link">Lire la suite <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-right.svg" alt="icône flèche" aria-hidden="true"></a>
                </article>

                <?php endwhile; 
			endif;		
		;?>
			<?php wp_reset_postdata(); ?>
			
            <?php the_posts_pagination( array(
            'mid_size'  => 3,
            'prev_text' => __( '« <span class="screen-reader-text">Précedent</span>', 'cefimtheme' ),
            'next_text' => __( '» <span class="screen-reader-text">Suivant</span>', 'cefimtheme' ),
            ) ); ?>
        </div>
	</main>

<?php get_footer(); ?>