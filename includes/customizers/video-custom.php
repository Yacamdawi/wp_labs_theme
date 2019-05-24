<?php

class VideoCustom
{
    public static function personnalisation_video($wp_customize)
    {
        // ADD SECTION
        $wp_customize->add_section('video-section', [
            'title' => 'Vidéo de présentation',
            'description' => "Personnaliser le lien et l'image de la vidéo de présentation"
        ]);

        // ADD SETTING

        $wp_customize->add_setting('video-image', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('video-link', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        // ADD CUSTOMIZER

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'video-image-control',
                array(
                    'label' => 'Image mis en avant',
                    'section' => 'video-section',
                    'settings' => 'video-image'
                )
            )
        );

        $wp_customize->add_control('video-link-control', [
            'label' => "Lien de la vidéo",
            'section' => 'video-section',
            'settings' => 'video-link',
            'type' => 'textarea'
        ]);
        
    }
}

add_action('customize_register', [VideoCustom::class, 'personnalisation_video']);
