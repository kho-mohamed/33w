<?php
$erreur_404_background = get_theme_mod("404_bg_image");
$erreur_404_titre = get_theme_mod('404_titre', 'Erreur 404 - Page non trouvée');
$erreur_404_message = get_theme_mod('404_message', 'Désolé, la page que vous recherchez est introuvable.');
$erreur_404_bg_couleur = get_theme_mod('404_bg_couleur', 'rgba(255, 255, 255, 0.2)');
$erreur_404_couleur = get_theme_mod('404_couleur', '#ffdf43');
$erreur_404_couleur_bouton = get_theme_mod('404_button_couleur', '#ffdf43');
$erreur_404_couleur_search = get_theme_mod('404_search_couleur', 'rgba(255, 255, 255, 0.1)');
?>
<div class="erreur-404__background"
    style="background-image: url('<?= $erreur_404_background ? $erreur_404_background : '' ?>'); opacity:1 ; color: <?= $erreur_404_couleur ?>;">
    <div class="erreur-404__titre" style="background-color: <?= $erreur_404_bg_couleur ?>; ">
        <h1 class="erreur-404__titre"><?= $erreur_404_titre ?></h1>
    </div>
    <div class="erreur-404__message" style="background-color: <?= $erreur_404_bg_couleur ?>;">
        <p class="erreur-404__message"><?= $erreur_404_message ?></p>
    </div>
    <div class="button erreur-404__button" style="background-color: <?= $erreur_404_couleur_bouton ?>;"><a
            href="<?= home_url(); ?>"><?= __('Retour à l\'accueil', 'club-voyagoo') ?></a>
    </div>
    <div class="erreur-404__lien-Conteneur">
        <div class="erreur-404__lien" style="background-color: <?= $erreur_404_couleur_bouton ?>;">
            <?php wp_nav_menu(array(
                "menu" => "selection",
                "container" => "nav"
            )) ?>
        </div>
    </div>

    <div class="erreur-404__recherche" style="background-color: <?= $erreur_404_couleur_search ?>;">
        <?php get_search_form() ?>
    </div>
</div>