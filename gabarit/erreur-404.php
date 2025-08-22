<?php
$erreur_404_background = get_theme_mod("404_bg_image");
$erreur_404_titre = get_theme_mod('404_titre', 'Erreur 404 - Page non trouvée');
$erreur_404_message = get_theme_mod('404_message', 'Désolé, la page que vous recherchez est introuvable.');
$erreur_404_bg_couleur = get_theme_mod('404_bg_couleur', '#ffffff');
?>
<div class="erreur-404_background"
    style="background-image: url('<?= $erreur_404_background ? $erreur_404_background : '' ?>'); opacity:1; background-color: <?= $erreur_404_bg_couleur ?>;">
    <div class="erreur-404_titre">
        <h1 class="erreur-404_titre"><?= $erreur_404_titre ?></h1>
    </div>
    <div class="erreur-404_message">
        <p class="erreur-404_message"><?= $erreur_404_message ?></p>
    </div>
    <div class="button erreur-404_button"><a
        href="<?= home_url(); ?>"><?= __('Retour à l\'accueil', 'club-voyagoo') ?></a>
    </div>
  <section class="destination">

    <?php extraire_list_categories('destination'); ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
  </section>
</div>