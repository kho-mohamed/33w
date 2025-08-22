<?php

/**
 * configuration des nouveau panneaux du cutomizer
 */

function club_voyage_customize_register($wp_customize)
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero - Accueil', 'club-voyagoo'),
        'priority' => 30,
    ));
    //////////////////////  Auteur
    /* configuration du champ */
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Bienvenue sur mon site', 'club-voyagoo'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur ', 'club-voyagoo'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    ////////////////////// Adresse
    /* configuration du champ */
    $wp_customize->add_setting('hero_adresse', array(
        'default' => __('3800 Sherbrook-est', 'club-voyagoo'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('hero_adresse', array(
        'label' => __('Adresse ', 'club-voyagoo'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    ////////////////////// Images du carrousel
    /// on va créer une boucle de plusieurs images selon le choix de l'utilisateur

    //////// ajout du nombre des images :
    $wp_customize->add_setting('hero_background_count', array(
        'default' => 3,
        'sanitize_callback' => 'absint',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('hero_background_count', array(
        'label' => __('Nombre d’images du carrousel', 'club-voyage'),
        'section' => 'hero_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10,
            'step' => 1,
        ),
    ));
    ///// on crée le réglage qui donne accès aux images de fond dans menu selon nombre d'image 

    // Obtenir le nombre d'images sélectionnées par l'utilisateur (par défaut 3)
    $number_of_images = get_theme_mod('hero_background_count', 3);

    // Boucle pour ajouter plusieurs images dans le customizer
    for ($i = 0; $i < $number_of_images; $i++) {
        $setting_id = 'hero_background_' . $i;
        $label = sprintf(__('Image %d du carrousel', 'theme_31w'), $i + 1);

        // Ajouter le champ (setting)
        $wp_customize->add_setting($setting_id, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        // Ajouter le contrôleur (control)
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting_id, array(
            'label' => $label,
            'section' => 'hero_section',
            'settings' => $setting_id,
        )));
    }
    /////////////////// couleur du texte de la section hero
    ////////////////////// champ couleur
    /* créer le champ */
    $wp_customize->add_setting('hero_couleur', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'club-voyagoo'),
        'section' => 'hero_section',
    )));
    /////////////////////////Ajout du panneau "erreur 404"
    $wp_customize->add_section('404_section', array(
        'title' => __('Section Erreur 404', 'club-voyagoo'),
        'priority' => 30,
    ));
    ///////////////////////// Couleur du text de erreur 404
    $wp_customize->add_setting('404_couleur', array(
        'default' => '#eda50bff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '404_couleur', array(
        'label' => __('Couleur du texte', 'club-voyagoo'),
        'section' => '404_section',
    )));

    /////////////////////// Ajouter réglage de titre erreur 404
    $wp_customize->add_setting('404_titre', array(
        'default' => __('Erreur 404 - Page non trouvée', 'club-voyagoo'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('404_titre', array(
        'label' => __('Titre de la page 404', 'club-voyagoo'),
        'section' => '404_section',
        'type' => 'text',
    ));
    ////////////////////// Ajouter réglage message d'erreur 404
    $wp_customize->add_setting('404_message', array(
        'default' => __('Désolé, la page que vous recherchez est introuvable.', 'club-voyagoo'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('404_message', array(
        'label' => __('Message d\'erreur 404', 'club-voyagoo'),
        'section' => '404_section',
        'type' => 'textarea',
    ));

    //////////////////////// couleur d'arrière plan du texte 404
    $wp_customize->add_setting('404_bg_couleur', array(
        'default' => 'rgba(255, 255, 255, 0.2)',
        'sanitize_callback' => 'sanitize_text_field', // Permet de stocker rgba
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '404_bg_couleur', array(
        'label' => __('Couleur d\'arrière plan', 'club-voyagoo'),
        'section' => '404_section',
        'alpha' => true, // Permet la sélection de l'opacité si supporté
    )));

    //////////////////////Couleur d'arrière plan du boutton
    $wp_customize->add_setting('404_button_bg_couleur', array(
        'default' => '#ffdf43',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '404_button_bg_couleur', array(
        'label' => __('Couleur d\'arrière plan du bouton', 'club-voyagoo'),
        'section' => '404_section',
        'alpha' => true, // Permet la sélection de l'opacité si supporté
    )));

    //////////////////////Couleur d'arrière plan de la zone de recherche
    $wp_customize->add_setting('404_search_bg_couleur', array(
        'default' => 'rgba(255, 255, 255, 0.1)',
        'sanitize_callback' => 'sanitize_text_field', // Permet de stocker rgba
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '404_search_bg_couleur', array(
        'label' => __('Couleur d\'arrière plan de la zone de recherche', 'club-voyagoo'),
        'section' => '404_section',
    )));

    ///////////////////////// Ajout d'image d'arrière plan:
    $wp_customize->add_setting('404_bg_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '404_bg_image', array(
        'label' => __('Image d\'arrière plan', 'club-voyagoo'),
        'section' => '404_section',
    )));

    ///////////////////////// Ajout du panneau « pied de page »
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section pied de page', 'club-voyage'),
        'priority' => 30,
    ));


    /////////////////// couleur du texte du footer
    ////////////////////// champ couleur
    /* créer le champ */
    $wp_customize->add_setting('footer_couleur', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_couleur', array(
        'label' => __('Couleur du texte', 'club-voyage'),
        'section' => 'footer_section',
    )));

}

add_action('customize_register', 'club_voyage_customize_register');
