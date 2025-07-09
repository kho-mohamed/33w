<?php
//le modèle front-page permet d'afficher la page d'accueil
get_header(); ?>
<main>
  <section class="hero">
    <?php
    $hero_background[0] = get_theme_mod("hero_background_0");
    $hero_background[1] = get_theme_mod("hero_background_1");
    $hero_background[2] = get_theme_mod("hero_background_2");
    ?>
    <div class="carrousel" style="background-image: url('<?= $hero_background[0] ?>'); opacity:1"></div>
    <div class="carrousel" style="background-image: url('<?= $hero_background[1] ?>'); opacity:0"></div>
    <div class="carrousel" style="background-image: url('<?= $hero_background[2] ?>'); opacity:0"></div>

    <form class="carrousel__form">
      <input type="radio" class="carrousel__radio" name="carrousel__radio">
      <input type="radio" class="carrousel__radio" name="carrousel__radio">
      <input type="radio" class="carrousel__radio" name="carrousel__radio">
    </form>
    <?php get_template_part("gabarit/hero"); ?>

  </section>
  <section class="populaire">
    <?php get_template_part("gabarit/populaire"); ?>
  </section>
</main>

<?php get_footer();
