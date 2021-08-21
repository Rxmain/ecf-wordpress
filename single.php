<?php get_header(); ?>
<main id="main-content" class="post">
	<div class="container container-narrow">
		<?php if( has_post_thumbnail()): ?>
			<?php $img_id = get_post_thumbnail_id(get_the_ID());                        
			$alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
			?>
			<img loading="lazy" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $alt; ?>" class="featured-img">
		<?php else: ?>
			<img loading="lazy" src="<?php bloginfo('stylesheet_directory'); ?>/img/articles-thumb.jpg" alt="Image par défaut"/>
		<?php endif;?>
		<h1><?php the_title();?></h1>
		<p class="post-date">12/02/2020</p>
		<?php the_content();?>

	</div>
</main>
<?php get_footer(); ?>