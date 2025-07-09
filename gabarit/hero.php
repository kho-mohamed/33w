<div class="hero__content">
    <?php
    /**
     * Template-part hero.php
     * permet d'afficher la section  « Hero »
     */
    ?>
    <?php
    $hero_couleur = get_theme_mod('hero_couleur');
    $hero_auteur = get_theme_mod('hero_auteur', 'Mohamed KHOUDOU');
    $hero_adresse = get_theme_mod('hero_adresse', '123, rue des Explorateurs, Montréal');
    ?>
    <style>
        .hero__contenu {
            color:
                <?= $hero_couleur ?>
            ;
        }
    </style>
    <div class="hero__contenu">
        <h1 class="hero__titre"><?php bloginfo('name') ?></h1>
        <p class="hero__description">
            <?php bloginfo('description') ?>
        </p>
        <p>Auteur du thème: <?= $hero_auteur ?></p>
        <p>Adresse du club: <?= $hero_adresse ?></p>
        <?php icone_sociaux($hero_couleur) ?>
    </div>
</div>
<form action="" class="form">
    <div class="form__champ">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required />
    </div>
    <div class="form__champ">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" required />
    </div>
    <div class="form__champ">
        <label for="email">Courriel</label>
        <input type="email" id="email" name="email" required />
    </div>
    <div class="form__champ">
        <label for="telephone">Téléphone</label>
        <input type="tel" id="telephone" name="telephone" required />
    </div>
    <div class="form__submit">
        <input type="submit" value="S'inscrire" />
    </div>
</form>