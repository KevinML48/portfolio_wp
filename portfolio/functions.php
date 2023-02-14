<?php 

/**
 * Ajoute des éléments au thème 
 */
function portfolio_support_theme(){
	add_theme_support('title-tag'); 
	add_theme_support('post-thumbnails');

    // Ajout le sous menu menu dans apparence
    add_theme_support('menus');
    register_nav_menu( 'header', 'Menu du header');
    register_nav_menu( 'footer', 'Menu du footer');

}
add_action('after_setup_theme', 'portfolio_support_theme');

/**
 * Enqueue scripts and styles Bootstrap
 */
function portfolio_style_bootstrap() {
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'portfolio_style_bootstrap');

function portfolio_menju_class($classes)
{
 $attrs['class'] = 'nav-link';
 return $attrs;
}


/**
 * Enqueue mon style css
 */
function portfolio_my_style() {
    wp_enqueue_style( 'portfolio', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'portfolio_my_style',11);

function admin_bar(){

    if(is_user_logged_in()){
      add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
  }
  add_action('init', 'admin_bar' );


  // ====================================

  // Création de notre CPT
  

function portfolio_register_post_types() {
	
    // CPT Portfolio // On définie les options les nom etc
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

	$args = array( // On définie le visuel de notre CPT
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_register_post_types' ); // Le hook init lance la fonction