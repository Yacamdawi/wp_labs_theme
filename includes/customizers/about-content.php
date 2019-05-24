<?php

class AboutContent
{
    public static function personnalisation_about_content($wp_customize)
    {
        // ADD SECTION
        $wp_customize->add_section('content-about-section', [
            'title' => 'About Content',
            'description' => "Personnaliser chaque élément du contenu About."
        ]);

        // ADD SETTING

        $wp_customize->add_setting('texte-about-gauche', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('texte-about-droite', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        // ADD CUSTOMIZER

        $wp_customize->add_control('texte-gauche-control', [
            'label' => "Texte gauche",
            'section' => 'content-about-section',
            'settings' => 'texte-about-gauche',
            'type' => 'textarea'
        ]);

        $wp_customize->add_control('texte-droite-control', [
            'label' => "Texte droite",
            'section' => 'content-about-section',
            'settings' => 'texte-about-droite',
            'type' => 'textarea'
        ]);
    }
}

add_action('customize_register', [AboutContent::class, 'personnalisation_about_content']);
