<?php

class SectionPromotion
{
    public static function personnalisation_promotion($wp_customize)
    {
        // ADD SECTION
        $wp_customize->add_section('promotion', [
            'title' => 'Section promotion',
            'description' => "Personnaliser le titre et paragraphes. Ajout d'une image également possible."
        ]);

        // ADD SETTING

        $wp_customize->add_setting('titre-promotion', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('texte-promotion', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('image-promotion', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        // ADD CUSTOMIZER
        $wp_customize->add_control('titre-promotion-control', [
            'label' => "Titre",
            'section' => 'promotion',
            'settings' => 'titre-promotion',
            'type' => 'text'
        ]);

        $wp_customize->add_control('texte-promotion-control', [
            'label' => "Paragraphe",
            'section' => 'promotion',
            'settings' => 'texte-promotion',
            'type' => 'textarea'
        ]);

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'image-promotion-control',
                array(
                    'label' => __("Image"),
                    'section' => 'promotion',
                    'settings' => 'image-promotion'
                )
            )
        );
    }
}

add_action('customize_register', [SectionPromotion::class, 'personnalisation_promotion']);
