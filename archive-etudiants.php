<?php get_header(); ?>
	<main id="main-content" class="students">
		<div class="container">
			<h1 class="section-title"><?php the_field('students_page_title', 'options');?></h1>

			<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post();?>
			
				<article class="student">
					<?php if( has_post_thumbnail()): ?>
						<?php $img_id = get_post_thumbnail_id(get_the_ID('thumb-articles'));                        
						$alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
						?>
						<img loading="lazy" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $alt; ?>" class="student-img">
					<?php endif;?>
					<h2 class="student-name"><?php the_title();?></h2>
					<a href="<?php the_permalink();?>" class="student-link">En savoir plus</a>
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