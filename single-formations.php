<?php get_header();?>

<main id="main-content" class="post">
    <section class="module-hero" style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');?>">
        <div class="container">
            <h1><?php the_title();?></h1>
        </div>
    </section>
    <section class="module-desc">
        <div class="container container-narrow">
            <p><?php the_content();?></p>
        </div>
    </section>
</main>
<?php get_footer();?>