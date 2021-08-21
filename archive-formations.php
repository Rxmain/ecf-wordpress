<?php
/*
Template Name: Les formations
*/
?>
<?php get_header(); ?>
	<main id="main-content" class="modules">
		<div class="container container-narrow">
			<h1 class="modules-title"><?php the_title();?></h1>
            <div class="module-desc">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget</p>
			</div>
        </div>

        <div class="container">

            <?php $args = array(  
                'post_type' => 'formations',
                'post_status' => 'publish',
                'posts_per_page' => 8, 
                'orderby' => 'title', 
                'order' => 'ASC', 
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
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
                    <a href="<?php the_permalink();?>" class="card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
                </article>

            <?php endwhile;

            wp_reset_postdata(); ?>
        </div>
			
        <?php the_posts_pagination( array(
        'mid_size'  => 3,
        'prev_text' => __( '« <span class="screen-reader-text">Précedent</span>', 'cefimtheme' ),
        'next_text' => __( '» <span class="screen-reader-text">Suivant</span>', 'cefimtheme' ),
        ) ); ?>
			
	</main>

<?php get_footer(); ?>