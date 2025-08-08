<?php
//le modèle front-page permet d'afficher la page d'accueil
get_header(); ?>
<main>
  <section class="hero">

    <?php
    // il faut faire une boucle ici pour récupérer les images du carrousel
    $hero_background[0] = get_theme_mod("hero_background_0");
    $hero_background[1] = get_theme_mod("hero_background_1");
    $hero_background[2] = get_theme_mod("hero_background_2");
    ?>

    <!-- Les 3 divs carrousel sont toujours présents pour que le JS fonctionne -->
    <div class="carrousel"
      style="background-image: url('<?= $hero_background[0] ? $hero_background[0] : '' ?>'); opacity:1"></div>
    <div class="carrousel"
      style="background-image: url('<?= $hero_background[1] ? $hero_background[1] : '' ?>'); opacity:0"></div>
    <div class="carrousel"
      style="background-image: url('<?= $hero_background[2] ? $hero_background[2] : '' ?>'); opacity:0"></div>

    <form class="carrousel__form">
      <input type="radio" class="carrousel__radio" name="carrousel__radio" checked>
      <input type="radio" class="carrousel__radio" name="carrousel__radio">
      <input type="radio" class="carrousel__radio" name="carrousel__radio">
    </form>
    <?php get_template_part("gabarit/hero"); ?>

  </section>
  <section class="populaire">
    <?php get_template_part("gabarit/populaire"); ?>
  </section>
  <!-- section rest-api -->
  <section class="destination">

    <?php extraire_list_categories('destination'); ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
  </section>
</main>

<?php get_footer();
