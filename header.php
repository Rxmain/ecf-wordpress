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
			<div class="logo"><a href="index.html">DWWM</a></div>
			<nav class="main-nav">
				<button aria-expanded="false" aria-controls="main-menu">Menu</button>
				<ul class="menu" id="main-menu" hidden>
					<li class="menu-item active"><a href="index.html">Accueil</a></li>
					<li class="menu-item"><a href="formation-liste.html">La formation</a></li>
					<li class="menu-item"><a href="etudiant-liste.html">Les étudiants</a></li>
					<li class="menu-item"><a href="actualite-liste.html">Actualités</a></li>
					<li class="menu-item"><a href="contact.html">Nous contacter</a></li>
				</ul>
			</nav>
		</div>
	</header>