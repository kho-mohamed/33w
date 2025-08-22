<?php
//le modèle front-page permet d'afficher la page d'accueil
get_header(); ?>
<main>
  <section class="hero">

    <?php get_template_part("gabarit/carrousel"); ?>



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
