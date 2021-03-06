<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="home">
    
    <?php wp_body_open(); ?>

    <a href="#main-menu" class="screen-reader-text">Aller à la navigation principale</a>
	<a href="#main-content" class="screen-reader-text">Aller au contenu principal</a>
	<header class="main-header">
		<div class="container">
			<?php if(is_front_page()):?>
				<div class="logo"><a>DWWM</a></div>
			<?php else: ?>
				<div class="logo"><a href="<?php echo home_url();?>">DWWM</a></div>
			<?php endif;?>
			<nav class="main-nav">
				<button aria-expanded="false" aria-controls="main-menu" class='button-menu'>Menu</button>
				<?php get_template_part('partials/_main-menu'); ?>
			</nav>
		</div>
	</header>