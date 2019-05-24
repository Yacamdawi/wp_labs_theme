<?php

class ContactContent
{
    public static function personnalisation_contact_content($wp_customize)
    {
        // ADD SECTION
        $wp_customize->add_section('contact-content', [
            'title' => 'Contact Content',
            'description' => "Personnaliser le contenu de la section Contact."
        ]);

        // ADD SETTING

        $wp_customize->add_setting('titre-contact', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('texte-contact', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('sous-titre-contact', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('coordonnee-contact', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        // ADD CUSTOMIZER

        $wp_customize->add_control('titre-contact-control', [
            'label' => "Titre",
            'section' => 'contact-content',
            'settings' => 'titre-contact',
            'type' => 'text'
        ]);

        $wp_customize->add_control('texte-contact-control', [
            'label' => "Paragraphe",
            'section' => 'contact-content',
            'settings' => 'texte-contact',
            'type' => 'textarea'
        ]);

        $wp_customize->add_control('sous-titre-contact-control', [
            'label' => "Sous-titre",
            'section' => 'contact-content',
            'settings' => 'sous-titre-contact',
            'type' => 'text'
        ]);

        $wp_customize->add_control('coordonnee-contact-control', [
            'label' => "Coordonnées",
            'description' => "Utiliser '#' pour faire un saut à la ligne",
            'section' => 'contact-content',
            'settings' => 'coordonnee-contact',
            'type' => 'textarea'
        ]);
    }
}

add_action('customize_register', [ContactContent::class, 'personnalisation_contact_content']);
