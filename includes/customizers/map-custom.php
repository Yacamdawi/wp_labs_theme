<?php

class MapCustom
{
    public static function ajout_adresse($wp_customize)
    {
        $wp_customize->add_section('map', [
            'title' => 'Adresse Map',
            'description' => "Personnaliser l'adresse de la carte"
        ]);

        $wp_customize->add_setting('adresse-map', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_control('adresse-map-control', [
            'label' => "Adresse",
            'section' => 'map',
            'settings' => 'adresse-map',
        ]);
    }
}

add_action('customize_register', [MapCustom::class, 'ajout_adresse']);
