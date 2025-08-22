<?php
$erreur_404_background = get_theme_mod("404_bg_image");
$erreur_404_titre = get_theme_mod('404_titre', 'Erreur 404 - Page non trouvée');
$erreur_404_message = get_theme_mod('404_message', 'Désolé, la page que vous recherchez est introuvable.');
$erreur_404_bg_couleur = get_theme_mod('404_bg_couleur', '#ffffff');
?>
<div class="erreur-404__background"
    style="background-image: url('<?= $erreur_404_background ? $erreur_404_background : '' ?>'); opacity:1; background-color: <?= $erreur_404_bg_couleur ?>;">
    <div class="erreur-404__titre">
        <h1 class="erreur-404__titre"><?= $erreur_404_titre ?></h1>
    </div>
    <div class="erreur-404__message">
        <p class="erreur-404__message"><?= $erreur_404_message ?></p>
    </div>
    <div class="button erreur-404__button"><a
            href="<?= home_url(); ?>"><?= __('Retour à l\'accueil', 'club-voyagoo') ?></a>
    </div>
    <div class="erreur-404__lien">
        <?php wp_nav_menu(array(
            "menu" => "selection",
            "container" => "nav"
        )) ?>
    </div>
    <div class="erreur-404__recherche">
        <?php get_search_form() ?>
    </div>
</div>