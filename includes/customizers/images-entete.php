<?php

class ImagesEntete
{
    public static function personnalisation_images_entete($wp_customize)
    {
        // ADD PANEL

        $wp_customize->add_panel('images-header', [
            'title' => __("Images d'entête"),
            'description' => __("Personnalisation de l'image de la navbar et également celle du banner")
        ]);

        // ADD SECTION

        $wp_customize->add_section('image-menu', [
            'panel' => 'images-header',
            'title' => 'Image du menu',
            'description' => "Modifier le logo s'affichant dans votre menu"
        ]);

        $wp_customize->add_section('image-banner', [
            'panel' => 'images-header',
            'title' => 'Image du banner',
            'description' => "Modifier le logo s'affichant dans le banner"
        ]);

        $wp_customize->add_section('images-carousel', [
            'panel' => 'images-header',
            'title' => 'Images du carousel',
            'description' => "Modifier le logo s'affichant sur le carousel"
        ]);

        // ADD SETTING

        $wp_customize->add_setting('logo-menu-image', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('logo-banner-image', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        //-----------------------------------------------

        $wp_customize->add_setting('image-carousel-1', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        $wp_customize->add_setting('image-carousel-2', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        // ADD CUSTOMIZE

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'logo-menu',
                array(
                    'label' => __('Changer le logo du Menu', 'logo_menu'),
                    'section' => 'image-menu',
                    'settings' => 'logo-menu-image'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'image-banner',
                array(
                    'label' => __("Changer l'image du banner", 'logo_banner'),
                    'section' => 'image-banner',
                    'settings' => 'logo-banner-image'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'image-carousel-1-control',
                array(
                    'label' => __("Image Nr.1", 'logo_banner'),
                    'section' => 'images-carousel',
                    'settings' => 'image-carousel-1'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'image-carousel-2-control',
                array(
                    'label' => __("Image Nr.2", 'logo_banner'),
                    'section' => 'images-carousel',
                    'settings' => 'image-carousel-2'
                )
            )
        );
    }
}

add_action('customize_register', [ImagesEntete::class, 'personnalisation_images_entete']);