<?php

class SectionsTitres
{
    public static function personnalisation_titres_sections($wp_customize)
    {
        // ADD SECTION
        $wp_customize->add_section('titres-sections', [
            'title' => 'Titres des sections',
            'description' => "Personnaliser tous les titres pour chaque section. Entrez un mot dans un crochet '[]' pour le mettre en gras."
        ]);

        // ADD SETTING

        $wp_customize->add_setting('titre-about', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('titre-clients', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('titre-services', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('titre-team', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('titre-features', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        // ADD CUSTOMIZER

        $wp_customize->add_control('titre-about-control', [
            'label' => "Titre de la section About",
            'section' => 'titres-sections',
            'settings' => 'titre-about',
            'type' => 'text'
        ]);

        $wp_customize->add_control('titre-clients-control', [
            'label' => "Titre de la section Clients",
            'section' => 'titres-sections',
            'settings' => 'titre-clients',
            'type' => 'text'
        ]);

        $wp_customize->add_control('titre-services-control', [
            'label' => "Titre de la section Services",
            'section' => 'titres-sections',
            'settings' => 'titre-services',
            'type' => 'text'
        ]);

        $wp_customize->add_control('titre-team-control', [
            'label' => "Titre de la section Team",
            'section' => 'titres-sections',
            'settings' => 'titre-team',
            'type' => 'text'
        ]);

        $wp_customize->add_control('titre-features-control', [
            'label' => "Titre de la section Features",
            'section' => 'titres-sections',
            'settings' => 'titre-features',
            'type' => 'text'
        ]);
    }
}

add_action('customize_register', [SectionsTitres::class, 'personnalisation_titres_sections']);
