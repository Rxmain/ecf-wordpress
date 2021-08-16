<?php
/**
 * The template for displaying all articles
 */

get_header();
?>
<main id="main-content" class="last-news">
	<h1 class="section-title">Les actualités</h1>

	<div class="container">

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<article class="card">
			<?php if( has_post_thumbnail()): ?>
				<?php $img_id = get_post_thumbnail_id(get_the_ID());                        
                $alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                ?>
				<img loading="lazy"  src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $alt; ?>" class="card-img">
			<?php endif;?>
			<div class="card-content">
				<p class="card-date">
					<?php echo get_the_date('d/m/Y'); ?>
				</p>
				<h2 class="card-title"><?php the_title(); ?></h2>
				<p class="card-excerpt"><?php echo wp_trim_words(get_the_content(), 35, '[...]' ); ?></p>
				
				<a href="<?php the_permalink(); ?>" class="card-link">Lire la suite</a>
			</div>
		</article>

	<?php endwhile; endif; ?>

	<nav class="pagination">
		<ul class="pagination-list">
			<li class="pagination-item">
				<a href="#" class="pagination-link" aria-label="Précédent">
					<span aria-hidden="true">&laquo;</span>
					<span class="screen-reader-text">Précédent</span>
				</a>
			</li>
			<li class="pagination-item current">
				<a href="#" class="pagination-link">1</a>
			</li>
			<li class="pagination-item">
				<a href="#" class="pagination-link">2</a>
			</li>
			<li class="pagination-item">
				<a href="#" class="pagination-link">3</a>
			</li>
			<li class="pagination-item">
				<a href="#" class="pagination-link" aria-label="Suivant">
					<span aria-hidden="true">&raquo;</span>
					<span class="screen-reader-text">Suivant</span>
				</a>
			</li>
		</ul>
	</nav>

</main> 

			<!-- 
			<article class="card">
				<img loading="lazy"  src="img/news-2.jpg" alt="A macbook" class="card-img" srcset="img/news-2.jpg,
				img/news-2_2x.jpg 2x">
				<div class="card-content">
					<p class="card-date"><time datetime="2020-02-12">12/02/2020</time></p>
					<h2 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h2>
					<p class="card-excerpt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
				</div>
				<a href="actualite-simple.html" class="card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
			</article>
			<article class="card">
				<img loading="lazy"  src="img/news-3.jpg" alt="A keyboard" class="card-img" srcset="img/news-3.jpg,
				img/news-3_2x.jpg 2x">
				<div class="card-content">
					<p class="card-date"><time datetime="2020-02-12">12/02/2020</time></p>
					<h2 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h2>
					<p class="card-excerpt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
				</div>
				<a href="actualite-simple.html" class="card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
			</article>
			<article class="card">
				<img loading="lazy"  src="img/news-1.jpg" alt="Some code" class="card-img" srcset="img/news-1.jpg,
				img/news-1_2x.jpg 2x">
				<div class="card-content">
					<p class="card-date"><time datetime="2020-02-12">12/02/2020</time></p>
					<h2 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h2>
					<p class="card-excerpt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
				</div>
				<a href="actualite-simple.html" class="card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
			</article>
			<article class="card">
				<img loading="lazy"  src="img/news-2.jpg" alt="A macbook" class="card-img" srcset="img/news-2.jpg,
				img/news-2_2x.jpg 2x">
				<div class="card-content">
					<p class="card-date"><time datetime="2020-02-12">12/02/2020</time></p>
					<h2 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h2>
					<p class="card-excerpt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
				</div>
				<a href="actualite-simple.html" class="card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
			</article>
			<article class="card">
				<img loading="lazy"  src="img/news-3.jpg" alt="A keyboard" class="card-img" srcset="img/news-3.jpg,
				img/news-3_2x.jpg 2x">
				<div class="card-content">
					<p class="card-date"><time datetime="2020-02-12">12/02/2020</time></p>
					<h2 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h2>
					<p class="card-excerpt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
				</div>
				<a href="actualite-simple.html" class="card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
			</article> -->
			
		<!-- </div> -->

<?php
get_footer();
?>
