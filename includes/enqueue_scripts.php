<?php

class EnqueueScript
{
    /**
     * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
     * Nous avons ajouter le mot public afin que cette méthode puisse être utiliser depuis l'exterieur. Cela veut dire que l'on peut créer une instance de cette class et puis faire appel à la méthode ( ex: $instance->methode() )
     * Le mot static permet de pouvoir utiliser la méthode directelement depuis la class sans devoir l'instancier
     *
     * @return void
     */

    // Introduction des liens css, fonts, icons.
    public static function ajout_css_js()
    {
        // Favicon
        wp_enqueue_style('favicon', get_template_directory_uri() . '/img/favicon.ico');

        // Google Fonts
        wp_enqueue_style('oswaldfontfamily', "https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700");

        // Stylesheets
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
        wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
        wp_enqueue_style('magnificpopup', get_template_directory_uri() . '/css/magnific-popup.css');
        wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css');
        wp_enqueue_style('stylecss', get_template_directory_uri() . '/css/style.css');

        // Javascripts & Jquery
        
        wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/js/jquery-2.1.4.min.js');
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery-perso'], '', true);
        wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup.min.js', ['jquery-perso'], '', true);
        wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', ['bootstrap'], '', true);
        wp_enqueue_script('map', get_template_directory_uri() . '/js/map.js', ['jquery-perso'], '', true);
        wp_enqueue_script('circle-progress', get_template_directory_uri() . '/js/circle-progress.min.js', ['jquery-perso'], '', true);
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery-perso'], '', true);
    }
}

add_action('wp_enqueue_scripts', [EnqueueScript::class, 'ajout_css_js']);
