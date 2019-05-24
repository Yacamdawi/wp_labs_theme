<?php

class NavMenu 
{
    public static function register_main_menu()
    {
        register_nav_menu('main-menu', 'Navbar au header');
    }

    public static function ajout_menu_class($atts, $item, $args)
    {
        if ($args->theme_location == 'main-menu') {
            $class = 'menu-list';
        }

        $atts['class'] = $class;

        return $atts;
    }
}

add_action('after_setup_theme', [NavMenu::class, 'register_main_menu']);

add_filter('nav_menu_link_attributes', [NavMenu::class, 'ajout_menu_class'], 10, 3);