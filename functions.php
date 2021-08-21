<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

/* Chargement des feuilles de style et des scripts */
function mpf_enqueue_styles_and_scripts() {
    /* Chargement des styles */

    wp_enqueue_style('ecf-base', get_template_directory_uri() . '/css/base.css');
    wp_enqueue_style('ecf-style', get_template_directory_uri() . '/css/style.css');
    
    /* Chargement des scripts */
    wp_enqueue_script('nav', get_stylesheet_directory_uri() . '/js/nav.js', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'mpf_enqueue_styles_and_scripts');



function meks_which_template_is_loaded() {
    if ( is_super_admin() ) {
        global $template;
        print_r( $template );
    }
}
add_action( 'wp_footer', 'meks_which_template_is_loaded' );

/* Fonction pour gérer les tailles d'images */
function theme_new_image(){

    add_image_size( 'thumb-articles', 400, 260 );
    add_image_size( 'thumb-students', 220, 220 );

}
add_action( 'after_setup_theme', 'theme_new_image' );


/* Gestion des menus */ 
register_nav_menus( array(
	'main-menu' => 'Menu Principal',
	'footer-menu' => 'Bas de page',
    'social-media-menu'  => "Réseaux sociaux",
) );

/* Ajout icon réseaux sociaux sur MENU */
function my_wp_nav_menu_objects($items, $args)
{
	foreach ($items as &$item) {
        $icon = get_field('network', $item);

		if ($icon) {
            $item->title = ' <span class="screen-reader-text">' . $item->title . ' du CEFIM</span><span class="icon-'.$icon.'"></span>';
        }
	}

	return $items;
}
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

/* Ajout page d'options ACF */

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => __('Infos de contact'),
        'icon_url' => 'dashicons-location'
	));
}


/*
* Création de CPT
*/

function cefim_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labelsStudent = array(
		// Le nom au pluriel
		'name'                => _x( 'Les étudiants', 'etudiants'),
		// Le nom au singulier
		'singular_name'       => _x( 'Étudiant', 'etudiant'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Les étudiants'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les étudiants'),
		'view_item'           => __( 'Voir les étudiants'),
		'add_new_item'        => __( 'Ajouter nouvel étudiant'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer l\'étudiant'),
		'update_item'         => __( 'Modifier l\'étudiant'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Les étudiants'),
		'description'         => __( 'Tous sur les étudiants'),
		'labels'              => $labelsStudent,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'etudiants'),
        'menu_icon'      => 'dashicons-groups',

	);

    $labelsFormation = array (
        // Le nom au pluriel
		'name'                => _x( 'Les formations', 'formations'),
		// Le nom au singulier
		'singular_name'       => _x( 'Formation', 'formation'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Les formations'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les formations'),
		'view_item'           => __( 'Voir les formations'),
		'add_new_item'        => __( 'Ajouter une nouvelle formation'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la formation'),
		'update_item'         => __( 'Modifier la formation'),
    );

    $argsFormations = array(
		'label'               => __( 'Les formations'),
		'description'         => __( 'Tous sur les formations'),
		'labels'              => $labelsFormation,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'formations'),
        'menu_icon'      => 'dashicons-welcome-learn-more',

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'etudiants', $args );
	register_post_type( 'formations', $argsFormations );

}

add_action( 'init', 'cefim_custom_post_type', 0 );

add_filter('wpcf7_autop_or_not', '__return_false');