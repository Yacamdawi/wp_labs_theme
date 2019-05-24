<?php

define('INCLUDE_DIR', get_template_directory() . "/includes");

require_once(INCLUDE_DIR . '/enqueue_scripts.php');
require_once(INCLUDE_DIR . '/menu.php');
require_once(INCLUDE_DIR . '/sidebar.php');
require_once(INCLUDE_DIR . '/customizer.php');

function strongTitle($settingKey)
{
    $titre = get_theme_mod($settingKey);
    $titre = str_replace("[", "<span>", $titre);
    $titre = str_replace("]", "</span>", $titre);

    return $titre;
}

function lineBreak($settingKey)
{
    $titre = get_theme_mod($settingKey);
    $titre = str_replace("#", "</br>", $titre);

    return $titre;
}

function wpb_change_title_text($title)
{
    $screen = get_current_screen();
    if ('service' == $screen->post_type) {
        $title = 'Entrez le nom du service';
    } else if ('feature' == $screen->post_type) {
        $title = 'Entrez le nom du projet';
    } else if ('client' == $screen->post_type) {
        $title = 'Entrez le nom du client';
    } else if ('team' == $screen->post_type) {
        $title = 'Entrez le nom du collaborateur';
    }
    return $title;
}

add_filter('enter_title_here', 'wpb_change_title_text');