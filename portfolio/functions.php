<?php 
add_action('wp_head', function() {
    die('Salut les gens');
});
add_theme_support('title-tag');

/**
 * Enqueue scripts and styles Bootstrap
 */
function portfolio_style_bootstrap() {
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'portfolio_style_bootstrap');


/**
 * Enqueue mon style css
 */
function portfolio_my_style() {
    wp_enqueue_style( 'porfolio', get_stylesheet_uri());

}